<?php

namespace App\Helpers;

class EmpowerHelper
{
    public static function build_demographic_field($studentId, $demoCode)
    {
      return \DB::connection('odbc')
          ->table('CCSJ_PROD.CO_NAME_DEMO')
          ->select('CCSJ_PROD.CO_NAME_DEMO.DEMO_ID')
          ->join('CCSJ_PROD.CCSJ_CO_V_NAME', 'CCSJ_PROD.CCSJ_CO_V_NAME.NAME_ID', '=', 'CCSJ_PROD.CO_NAME_DEMO.NAME_ID')
          ->where('DFLT_ID', '=', $studentId)
          ->where('DEMC_ID', '=', $demoCode)
          ->get()
          ->pluck('DEMO_ID')
          ->first();
    }

    public static function build_ethnicity_field($value)
    {
      if($value == '6')
      {
        $result = 'Black or African American';
      }
      elseif($value == '3')
      {
        $result = 'Hispanics of any race';
      }
      elseif($value == '8')
      {
        $result = 'White';
      }
      elseif($value == '1' || $value == '4'  || $value == '5'  || $value == '7' || $value == '9')
      {
        $result = 'Other';
      }
      else
      {
        // 2 or empty
        $result = 'Unknown';
      }

      return $result;
    }

    
    
    public static function build_entry_type_alt_field($value)
    {
      if($value == 'AH' || $value == 'HS' || $value == 'GE')
      {
        $result = 'first-time';
      }
      elseif($value == 'TR' || $value == 'T2' || $value == 'T4')
      {
        $result = 'transfer';
      }
      elseif($value == 'CS' || $value == 'RS' || $value == 'U2')
      {
        $result = 'continuing/returning';
      }
      else
      {
        $result = 'other';
      }

      return $result;
    }

}