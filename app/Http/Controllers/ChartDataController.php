<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\EmpowerHelper;

class ChartDataController extends Controller
{
    public function get_01_data()
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

        // ddd($students);

        // NOTE: Using Laravel collection methods on the $students collection.

        // full-time, continuing
        $ft_continuing = $students->where('TU_CREDIT_ENRL', '>=', 12.0)
            ->whereIn('ETYP_ID', ['CS'])
            ->count();

        // full-time, first-time
        $ft_first_time = $students->where('TU_CREDIT_ENRL', '>=', 12.0)
            ->whereIn('ETYP_ID', ['AH', 'HS', 'GE'])
            ->count();
        
        // ddd($ft_first_time_count);
        // full-time, transfer
        $ft_transfer = $students->where('TU_CREDIT_ENRL', '>=', 12.0)
        ->whereIn('ETYP_ID', ['T2', 'T4', 'TR'])
        ->count();

        // full-time, total
        $ft_total = $ft_continuing + $ft_first_time + $ft_transfer;

        // part-time, continuing
        $pt_continuing = $students->where('TU_CREDIT_ENRL', '<', 12.0)
            ->whereIn('ETYP_ID', ['CS'])
            ->count();

        // part-time, first-time
        $pt_first_time = $students->where('TU_CREDIT_ENRL', '<', 12.0)
            ->whereIn('ETYP_ID', ['AH', 'HS', 'GE'])
            ->count();

        // part-time, transfer
        $pt_transfer = $students->where('TU_CREDIT_ENRL', '<', 12.0)
        ->whereIn('ETYP_ID', ['T2', 'T4', 'TR'])
        ->count();

        // part-time, total
        $pt_total = $pt_continuing + $pt_first_time + $pt_transfer;

        $row_totals = [$ft_continuing + $pt_continuing, 
                      $ft_first_time + $pt_first_time, 
                      $ft_transfer + $pt_transfer, 
                      $ft_total + $pt_total];

        $ft_percent = round(100.0*$ft_total/$row_totals[3], 1);
        $pt_percent = round(100.0*$pt_total/$row_totals[3], 1);

        $data = [
            ["Full-time (FT)", $ft_continuing, $ft_first_time, $ft_transfer, $ft_total, strval($ft_percent).'%'],
            ["Part-time (PT)", $pt_continuing, $pt_first_time, $pt_transfer, $pt_total, strval($pt_percent).'%'],
            ["Total", $row_totals[0], $row_totals[1], $row_totals[2], $row_totals[3], '100%']
          ];
        
        
        return $data;
        // return $data[0][0];
        // ddd($data);
    }
    
    public function getGenderData()
    {
        $term='20221';
        $sr_term = 'CCSJ_PROD.SR_STUDENT_TERM';
        $sr_term_credits = 'CCSJ_PROD.SR_ST_TERM_CRED';
        $name = 'CCSJ_PROD.CCSJ_CO_V_NAME';
    
        // first-time, full-time, F1
        $query1 = \DB::connection('odbc')->table($sr_term)
            ->join($sr_term_credits, function ($join) use ($sr_term, $sr_term_credits) {
                    $join->on($sr_term.'.NAME_ID', '=', $sr_term_credits.'.NAME_ID');
                    $join->on($sr_term.'.TERM_ID', '=', $sr_term_credits.'.TERM_ID');
                })
            ->join($name, $sr_term . '.NAME_ID', '=', $name . '.NAME_ID') 
            ->where($sr_term . '.TERM_ID', $term)
            ->whereIn($sr_term . '.STUD_STATUS', ['A', 'W'])
            ->whereIn($sr_term . '.ETYP_ID', ['AH', 'HS', 'GE'])
            ->where($sr_term . '.CDIV_ID', 'F1')
            ->where($sr_term_credits . '.TU_CREDIT_ENRL', '>=', 12.0)
            ->select('DFLT_ID', 'LAST_NAME', 'FIRST_NAME');
      
        $students = $query1->get();
    
        // ddd($students);

        // TODO Add Empower SR acticity athletic-status
        // TODO Add Empower zero EFC-status
        // TODO Add high school GPA
        $studentsWithNewFields = $students->map(function($student) {
            $student->EmpowerGender = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'GEND');
            $student->Gender = EmpowerHelper::build_chart_gender_field($student->EmpowerGender);
            $student->EmpowerEthnicCode = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'ETHR');
            $student->Ethnicity = EmpowerHelper::build_ethnicity_field($student->EmpowerEthnicCode);
            $student->EmpowerReligion = EmpowerHelper::build_demographic_field($student->DFLT_ID, 'RELI');
                
            return $student;
        });

        ddd($studentsWithNewFields);

        $chartData = clone $studentsWithNewFields;
        $chart1 = $chartData->groupBy('Gender')->map->count();
        // dd($chart1->keys(), $chart1->values());

        return $chart1;
    }
    
}
