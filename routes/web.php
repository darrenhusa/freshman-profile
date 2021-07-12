<?php

use Illuminate\Support\Facades\Route;
use \App\Helpers\EmpowerHelper;
use App\Http\Controllers\ChartDataController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/demo', 'grouped-bar-demo');

Route::get('/gender-data', [ChartDataController::class, 'getGenderData']);

Route::get('/chart-data', function () {
    
    $term='20211';
    $sr_term = 'CCSJ_PROD.SR_STUDENT_TERM';
    $sr_term_credits = 'CCSJ_PROD.SR_ST_TERM_CRED';
    $name = 'CCSJ_PROD.CCSJ_CO_V_NAME';

    // first-time, full-time, F1
    $query1 = DB::connection('odbc')->table($sr_term)
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
        ->select('DFLT_ID');
  
    $students = $query1->get();
    
    // dd($students);

    // $result = EmpowerHelper::build_demographic_field('100121833', 'GEND');
    // dd($result);

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

     $chartData = clone $studentsWithNewFields;
     $chart1 = $chartData->groupBy('Gender')->map->count();
     dd($chart1->keys(), $chart1->values());

    //  dd($studentsWithNewFields->count(), $studentsWithNewFields);
});

