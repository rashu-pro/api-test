<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function table_list(){
        $tables = \DB::select('SHOW TABLES');

//        foreach($tables as $table) {
//            echo $table->Tables_in_your_database . "<br>";
//        }
        return view('table-list', ['tables'=>$tables]);
    }
}
