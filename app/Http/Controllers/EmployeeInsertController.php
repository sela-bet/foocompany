<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Employees;

class EmployeeInsertController extends Controller
{
    public function registerForm()
    {
        return view('pages.register');
    }
    public function insert(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $department_id = $request->input('department_id');
        $phone = $request->input('phone');
        if($request->hasFile('image')){
            $destination_path = 'public/images/employee';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

        }
        $data = array('first_name' => $first_name, "last_name" => $last_name, 'email' => $email, 'department_id' => $department_id, 'phone' => $phone,'image'=>$image_name);
        DB::table('employees')->insert($data);
        echo "Sucessfully Insert";
        echo '<a href="/pages/register">Go Back</a>';
    }
    
    public function modify(Request $request, $id)
    {
        $data = Employees::find($id);
        $data->first_name = $request->input('first_name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->department_id = $request->input('department_id');
        $data->phone = $request->input('phone');
        if($request->hasFile('image')){
            $destination_path = 'public/images/employee';
            $image = $request->file('image');
            $data->image = $image->getClientOriginalName();
            $request->file('image')->storeAs($destination_path,$data->image);

        }
        $data->save();
        echo "Sucessfully Insert";
        echo '<a href="/">Go Home</a>';
    }
}
