<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseTaskController extends Controller
{
    public function get_database_task_view(){
        return view('database-task.main');
    }
}
