<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Dao\Pusar;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        echo "Home";exit;
        return view('home');
    }

    public function help() {
        $user = Pusar::all();
        print $user;
        exit;
    }
}
