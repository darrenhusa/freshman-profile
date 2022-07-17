<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EmpowerHelper;

class ChartDataController extends Controller
{
    
    public function get_gender_data()
    {
        $students = $this->get_f1_students();
    
        // ddd($students);

        // TODO Add Empower SR acticity athletic-status
        // TODO Add Empower zero EFC-status
        // TODO Add high school GPA
        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerGender = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'GEND');
            $student->Gender = EmpowerHelper::build_chart_gender_field($student->EmpowerGender);
            // $student->EmpowerEthnicCode = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'ETHR');
            // $student->Ethnicity = EmpowerHelper::build_ethnicity_field($student->EmpowerEthnicCode);
            // $student->EmpowerReligion = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'RELI');

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
        $students = $this->get_f1_students();
    
        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerEthnicCode = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'ETHR');
            $student->Ethnicity = EmpowerHelper::build_ethnicity_field($student->EmpowerEthnicCode);
            // $student->EmpowerReligion = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'RELI');
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
        $students = $this->get_f1_students();
    
        // ddd($students);

        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerReligion = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'RELI');
            return $student;
        });

        // ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart4 = $chartData->groupBy('EmpowerReligion')->map->count();

        return response()->json(['chart4' => $chart4]);
        
        // ddd($chart1);
        // dd($chart1->keys(), $chart1->values());
    }
    
    private function get_f1_students()
    {
        $term='20221';
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
            ->where($sr_term . '.TERM_ID', $term)
            ->whereIn($sr_term . '.STUD_STATUS', ['A', 'W'])
            ->where($sr_term . '.CDIV_ID', 'F1')
            ->select('DFLT_ID', 'LAST_NAME', 'FIRST_NAME', 'ETYP_ID', 'TU_CREDIT_ENRL');
      
        $students = $query->get();

        return $students;
    }
}
