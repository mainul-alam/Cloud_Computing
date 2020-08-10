<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ApiController extends Controller
{
    public function getAllUsres() {
        // logic to get all students goes here
      }
  
      public function createEmployee(Request $request) {
        // logic to create a student record goes here
        $User = new Employee;
        $User->name = $request->name;
        $User->save();
    
        return response()->json([
            "message" => "user record created"
        ], 201);
      }
  
      public function getEmployee($id) {
        // logic to get a student record goes here
        if (Employee::where('id', $id)->exists()) {
          $employee = Employee::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
          return response($employee, 200);
        } else {
          return response()->json([
            "message" => "Employee not found"
          ], 404);
        }


      }
  
      public function updateUser(Request $request, $id) {
        // logic to update a student record goes here
      }
  
      public function deleteUser ($id) {
        // logic to delete a student record goes here
      }
}
