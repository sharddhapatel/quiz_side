<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class quescontroller extends Controller
{
    public function addques()
    {
        return view('admin.addques');
    }
    public function insertfrom(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.addques');
        } else {
            $data = $request->all();
            $ans = DB::table('addques')->insert(["question" => $data['que'], "a" => $data['o1'], "b" => $data['o2'], "c" => $data['o3'], "ans" => $data['answer']]);
            return redirect()->back()->with("message", "Insert Sucessfully...");
        }
    }

    public function showquestion(Request $req)
    {
        return view('admin.show');
    }

    public function editquestion(Request $request,$id)
    {
        $data=DB::table('addques')->where('id',$id)->first();
        return view ('admin.editques')->with('data',$data);
    }
    public function deletequestion(Request $request, $id)
    {
        $data = DB::table('addques')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'delete succesfully');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function clientlogin(Request $req)
    {
        $email=$req->input('email');
        $password=$req->input('password');
        $data=DB::table('login')->where('email',$email)->first();

        $count=DB::table('login')->where(['email'=>$email])->count();
        $count1=DB::table('login')->where(['password'=>$password])->count();


        if($email !=" " && $password !=" ")
        {
            if($count>0 && $count1>0)
            {
                Session::put('user_id',$data->id);
                Session::put('studemail',$data->email);
                return redirect('addquestion');
            }
            else{
                return redirect()->back()->with('error',"please enter right EMAIL and password");
            }
        }
        else{
            return redirect()->back()->with('error',"enter email and password");
        }
    }
    public function logout()
    {
        Session()->forget('user_id');
        Session()->forget('studemail');

        return redirect('admin');
    }
}
