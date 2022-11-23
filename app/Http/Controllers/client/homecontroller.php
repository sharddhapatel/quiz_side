<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Http\Controllers\client\Hash;

class homecontroller extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function intro(Request $request)
    {
        $data = $request->all();
        return response()->view('client.intro', compact('data'), 200)
            ->header("Refresh", "1;url=/dashboard");
    }
    public function dashboard(Request $req)
    {
        $data = DB::table('addques')->inRandomOrder()->first();
        $no = $req->no;
        $no++;
   
        $today = Carbon::now()->format('d');
        $date = Carbon::now();
        $monthName = $date->format('F');
        if ($no <= 2) {
            if ($req->ans != "") {
                $test=DB::table('test')->insert(["uid" => $req['uid'],"qid" => $req['qid'],"rightans" => $req['ans']]);
                DB::table('test')->delete();
            }
            return view('client.dashboard')->with(["data" => $data, "no" => $no, "today" => $today, "date" => $date, "monthName" => $monthName]);
        } else {
            DB::table('test')->insert([ "uid" =>  $req['uid'],"qid" => $req['qid'], "rightans" => $req['ans']]);
            DB::table('test')->delete();
            return redirect('index');
        }
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function playnow()
    {
        return view('client.playnow');
    }
    public function registration()
    {
        return view('client.registration');
    }
    public function rules()
    {
        return view('client.rules');
    }
    public function result()
    {
        return view('client.result');
    }
    public function clientregistration(Request $request)
    {
        // $data=$request->all();
        $name = $request->Input('name');
        $phoneno = $request->Input('phoneno');
        $same = DB::table('rejestration')->where(['name' => $name])->count();
        $a = DB::table('rejestration')->where('name', $name)->first();


        if (($name != "") && ($phoneno != "")) {
            $data = $request->all();


            if ($data['name'] != '') {
                DB::table('test')->delete();
                $data1=DB::table('rejestration')->insertGetId(["name" => $data['name'], "phoneno" => $data['phoneno']]);

                Session::put('clientuser_id',$data1);
               

                return redirect('question')->with(['a' => $a]);
            } else {
                return redirect()->back()->with('error', 'Registration Are Not Inserted');
            }
        }
    }
    public function question(Request $req)
    {
        $data = DB::table('addques')->inRandomOrder()->limit(10)->first();
        $no = $req->no;
        $no++;
        $a = session::get('clientuser_id');
        $today = Carbon::now()->format('d');
        $date = Carbon::now();
        $monthName = $date->format('F');
        return view('client.question')->with(["data" => $data, "no" => $no, "today" => $today, "date" => $date, "monthName" => $monthName]);
      
    }
    public function show(Request $req)
    {
        $data = DB::table('addques')->inRandomOrder()->first();
        $no = $req->no;
        $no++;
        $a = session::get('clientuser_id');
        $today = Carbon::now()->format('d');
        $date = Carbon::now();
        $monthName = $date->format('F');
    //    echo"<pre>";
    //    print_r($a);
    //    die();
        if ($no <= 10) {
            if ($req->ans != "") {
                DB::table('test')->insert(["uid" => $a, "qid" => $req['qid'], "rightans" => $req['ans']]);
                $r = DB::table('addques')
                ->join('test', 'test.rightans', '=', 'addques.ans')
                ->whereColumn('addques.id', '=', 'test.qid')
                ->select('test.rightans', 'test.*')
                ->get();
              
            $result=Session::put('result', count($r));
            
            }
           
            // return response()->json('data', 'no');
            // return redirect('question')->with(["data" => $data, "no" => $no, "today" => $today, "date" => $date, "monthName" => $monthName]);
            return response()->view('client.question', compact('data', 'no', 'today', 'date', 'monthName','result'), 200)
                ->header("Refresh", "20;url=/result");     
        }
         else {
            DB::table('test')->insert(["uid" =>$a, "qid" => $req['qid'],  "rightans" => $req['ans']]);
            $r = DB::table('addques')
                ->join('test', 'test.rightans', '=', 'addques.ans')
                ->whereColumn('addques.id', '=', 'test.qid')
                ->select('test.rightans', 'test.*')
                ->get();
                $result=Session::put('result', count($r));
                DB::table('test')->where('uid', Session::get('clientuser_id'))->delete();
            return redirect('result');  
        }
    }
    public function clientlogout()
    {
        Session()->forget('clientuser_id');
        return redirect('clientregistration');
    }
}