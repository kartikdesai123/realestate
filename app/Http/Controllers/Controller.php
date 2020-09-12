<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
     public function __construct() {

        if (isset($_COOKIE["language"])) {
            $lang = $_COOKIE["language"];
        } else {
            $lang = 'en';
            $_COOKIE["language"] = $lang;
            setcookie('language', 'en', time() + (86400 * 30), "/"); // 86400 = 1 day
            
        }


        if (!empty($lang)) {
            App::setLocale($lang);
        } else {
            App::setLocale('en');
        }  
        
        
        
    }
}
