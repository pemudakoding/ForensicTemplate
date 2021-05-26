<?php

    namespace App\Helpers;

    use Illuminate\Support\Facades\DB;


    class SiteInformation
    {
        private static $siteInformation = null;

        public static function getSiteInformation()
        {
            if(self::$siteInformation != null){
                return self::$siteInformation;
            }else{
                return self::$siteInformation = DB::table('site_information')->first();
            }
        }
    }

?>
