<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EmpowerHelper;

class ChartDataController extends Controller
{
    public string $term = '20221';
    
    public function get_gender_data()
    {
        $f1_students = $this->get_f1_students();
        $students = $this->get_first_time_full_time_students($f1_students);

        // Need to filter for first-time and full-time only!!

        // ddd($students);

        // TODO Add Empower SR acticity athletic-status
        // TODO Add Empower zero EFC-status
        // TODO Add high school GPA
        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerGender = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'GEND');
            $student->Gender = EmpowerHelper::build_chart_gender_field($student->EmpowerGender);
            return $student;
        });

        // ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart1 = $chartData->groupBy('Gender')->map->count();

        // ddd($chart1, $chart1->keys(), $chart1->values());
        return response()->json(['chart1' => $chart1]);
        
        // ddd($chart1);

        // return $chart1;
    }

    public function get_ethnicity_data()
    {
        $f1_students = $this->get_f1_students();
        $students = $this->get_first_time_full_time_students($f1_students);

        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerEthnicCode = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'ETHR');
            $student->Ethnicity = EmpowerHelper::build_ethnicity_field($student->EmpowerEthnicCode);
            return $student;
        });

        // ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart2 = $chartData->groupBy('Ethnicity')->map->count();

        return response()->json(['chart2' => $chart2]);
        
        // ddd($chart1);
        // dd($chart1->keys(), $chart1->values());
    }
    
    public function get_religion_data()
    {
        $f1_students = $this->get_f1_students();
        $students = $this->get_first_time_full_time_students($f1_students);
        
        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerReligion = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'RELI');
            return $student;
        });

        $temp = $students->map(function($student) {
            $student->ReligionAlt = EmpowerHelper::build_religion_alt_field($student->EmpowerReligion);
            return $student;
        });

        // ddd($temp);

        $chartData = clone $studentsWithNewFields;
        $chart3 = $chartData->groupBy('ReligionAlt')->map->count();

        return response()->json(['chart3' => $chart3]);
        
        // ddd($chart1);
        // dd($chart1->keys(), $chart1->values());
    }
    
    
    public function get_athlete_data()
    {
        $f1_students = $this->get_f1_students();
        $students = $this->get_first_time_full_time_students($f1_students);
        
        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->NumberOfSports = EmpowerHelper::determine_number_of_athlete_records_in_sr_activities($student->DFLT_ID, $this->term);
            $student->AthleteStatus = EmpowerHelper::build_is_athlete_text_field($student->NumberOfSports);
            return $student;
        });

        // ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart4 = $chartData->groupBy('AthleteStatus')->map->count();

        return response()->json(['chart4' => $chart4]);
        
        // ddd($chart1);
        // dd($chart1->keys(), $chart1->values());
    }
    
    
    public function get_fin_aid_efc_data()
    {
        $f1_students = $this->get_f1_students();
        $students = $this->get_first_time_full_time_students($f1_students);
        
        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->EfcInAwardYear = EmpowerHelper::determine_efc_in_award_year($student->DFLT_ID, $this->term);
            $student->ZeroEfcStatus = EmpowerHelper::build_is_efc_status_text_field($student->EfcInAwardYear);
            return $student;
        });

        // ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart5 = $chartData->groupBy('ZeroEfcStatus')->map->count();

        return response()->json(['chart5' => $chart5]);
        
        // ddd($chart1);
        // dd($chart1->keys(), $chart1->values());
    }
    
    
    private function get_f1_students()
    {
        // $term='20221';
        $sr_term = 'CCSJ_PROD.SR_STUDENT_TERM';
        $sr_term_credits = 'CCSJ_PROD.SR_ST_TERM_CRED';
        $name = 'CCSJ_PROD.CCSJ_CO_V_NAME';
    
        // A or W student-status, F1 cdiv students
        $query = \DB::connection('odbc')->table($sr_term)
            ->join($sr_term_credits, function ($join) use ($sr_term, $sr_term_credits) {
                    $join->on($sr_term.'.NAME_ID', '=', $sr_term_credits.'.NAME_ID');
                    $join->on($sr_term.'.TERM_ID', '=', $sr_term_credits.'.TERM_ID');
                })
            ->join($name, $sr_term . '.NAME_ID', '=', $name . '.NAME_ID') 
            ->where($sr_term . '.TERM_ID', $this->term)
            ->whereIn($sr_term . '.STUD_STATUS', ['A', 'W'])
            ->where($sr_term . '.CDIV_ID', 'F1')
            ->select('DFLT_ID', 'LAST_NAME', 'FIRST_NAME', 'ETYP_ID', 'TU_CREDIT_ENRL');
      
        $students = $query->get();

        return $students;
    }

    private function get_first_time_full_time_students($students)
    {
        // NOTE: Using Laravel collection methods on the $students collection.
        return $students
            ->where('TU_CREDIT_ENRL', '>=', 12.0)
            ->whereIn('ETYP_ID', ['AH', 'HS', 'GE']);
    }
}
