<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{
    public function getEmployee(){

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://localhost:8000/api/employee/2');
        return  $res->getBody();

      
    }
}
