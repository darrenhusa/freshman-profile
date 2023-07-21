<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class F1TableController extends Controller
{
    public function get_01_data()
    {
        $students = $this->get_f1_students();
        // ddd($students);

        $ft_continuing = $this->get_count($students, 'FT', ['CS']);
        $ft_first_time = $this->get_count($students, 'FT', ['AH', 'HS', 'GE']);
        $ft_transfer = $this->get_count($students, 'FT', ['T2', 'T4', 'TR']);
        $ft_total = $ft_continuing + $ft_first_time + $ft_transfer;
        
        $pt_continuing = $this->get_count($students, 'PT', ['CS']);
        $pt_first_time = $this->get_count($students, 'PT', ['AH', 'HS', 'GE']);
        $pt_transfer = $this->get_count($students, 'PT', ['T2', 'T4', 'TR']);
        $pt_total = $pt_continuing + $pt_first_time + $pt_transfer;
                
        // ddd($ft_first_time);

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
        
          return response()->json(['data' => $data]);
        //   return $data;
        // return $data[0][0];
        // ddd($data);
        // ddd($data[0][0]);
    }

    private function get_f1_students()
    {
        $term='20231';
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
            ->orderBy($name . '.LAST_NAME', 'ASC')
            ->orderBy($name . '.FIRST_NAME', 'ASC')
            ->select('DFLT_ID', 'LAST_NAME', 'FIRST_NAME', 'ETYP_ID', 'TU_CREDIT_ENRL');
      
        // $students = $query->get(['LAST_NAME', 'FIRST_NAME']);
        // $students = $query->get()->pluck('LAST_NAME', 'FIRST_NAME');
        $students = $query->get();

        return $students;
    }

    private function get_count($students, $ft_or_pt, $entry_type_list)
    {
        $operator = ($ft_or_pt == 'FT') ? '>=' : '<';

        // NOTE: Using Laravel collection methods on the $students collection.
        $count = $students
            ->where('TU_CREDIT_ENRL', $operator, 12.0)
            ->whereIn('ETYP_ID', $entry_type_list)
            ->count();
        
        return $count;
    }
    
}
