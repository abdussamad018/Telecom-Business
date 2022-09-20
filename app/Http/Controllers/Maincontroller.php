<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\mobilebanking;
use App\Models\telecom;
use App\Models\cash;
use MongoDB\Driver\Session;
use App\Models\website_setting;
use App\Models\due;
use App\Models\customer;
use App\Models\expense;
use App\Models\card;

class Maincontroller extends Controller
{
    public function index()
    {
        //Mobile banking
        $bkash = mobilebanking:: where('date', date('Y-m-d'))->sum('bkash');
        $nagad = mobilebanking:: where('date', date('Y-m-d'))->sum('nagad');
        $rocket = mobilebanking:: where('date', date('Y-m-d'))->sum('rocket');
        $upay = mobilebanking:: where('date', date('Y-m-d'))->sum('upay');
        $tap = mobilebanking:: where('date', date('Y-m-d'))->sum('tap');
        $desco = mobilebanking:: where('date', date('Y-m-d'))->sum('desco');
        $todaymobile = $bkash + $nagad + $rocket + $upay + $tap + $desco;

        //telecom service
        $gp = telecom:: where('date', date('Y-m-d'))->sum('gp');
        $robi = telecom:: where('date', date('Y-m-d'))->sum('robi');
        $banglalink = telecom:: where('date', date('Y-m-d'))->sum('banglalink');
        $airtel = telecom:: where('date', date('Y-m-d'))->sum('airtel');
        $teletalk = telecom:: where('date', date('Y-m-d'))->sum('teletalk');
        $paywell = telecom:: where('date', date('Y-m-d'))->sum('paywell');
        $todaytelecom = $gp + $robi + $banglalink + $airtel + $teletalk + $paywell;

        //Cash service
        $cash = cash::where('date', date('Y-m-d'))->sum('cash');
        $cashin = cash::where('date', date('Y-m-d'))->sum('cashin');

        //Total cash
        $todayTotalCash = $todaymobile + $todaytelecom + $cash;

        //Expense
        $todayexpense=expense::where('date',date('Y-m-d'))->sum('amount');

        //Card
        $nine=card::where('date',date('Y-m-d'))->first();
        $nineteen=card::where('date',date('Y-m-d'))->first();
        $twentynine=card::where('date',date('Y-m-d'))->first();
        $totalcard=$nine+$nineteen+$twentynine;

        return view('dashboard', compact('todaymobile', 'todaytelecom', 'cash', 'todayTotalCash','todayexpense','totalcard'));
    }

    public function mobilebanking()
    {
        return view('mobilebanking');
    }

    public function mobileadd(Request $request)
    {
        $check = mobilebanking::where('date', date('Y-m-d'))->first();
        if ($check) {
            return redirect()->back()->with('error', 'This day already added');
        } else {
            $data = $request->all();
            mobilebanking::create($data);
            return redirect()->route('dashboard')->with('message', 'data insert successfully');
        }
    }

    public function telecom()
    {
        return view('telecom');
    }

    public function telecomadd(Request $request)
    {

        $check = telecom::where('date', date('Y-m-d'))->first();
        if ($check) {
            return redirect()->back()->with('error', 'This day already added');
        } else {
            $data = $request->all();
            telecom::create($data);
            return redirect()->route('dashboard')->with('message', 'data insert successfully');
        }
    }

    public function customer()
    {
        return view('addcustomer');
    }

    public function addcustomer(Request $request)
    {
        $data = $request->all();
        customer::create($data);
        return redirect()->route('dashboard')->with('message', 'data insert successfully');

    }

    public function due()
    {
        return view('adddue');
    }

    public function dueadd(Request $request)
    {

        $data = $request->all();
        due::create($data);
        return redirect()->route('dashboard')->with('message', 'data insert successfully');

    }

    public function expense()
    {
        return view('expense');
    }

    public function addexpense(Request $request)
    {
        $data = $request->all();
        expense::create($data);
        return redirect()->route('dashboard')->with('message', 'data insert successfully');

    }

    public function cash()
    {
        return view('cash');
    }

    public function cashadd(Request $request)
    {

        $check = cash::where('date', date('Y-m-d'))->first();
        if ($check) {
            return redirect()->back()->with('error', 'This day already added');
        } else {
            $data = $request->all();
            cash::create($data);
            return redirect()->route('dashboard')->with('message', 'data insert successfully');
        }
    }

    public function card()
    {
        return view('card');
    }

    public function addcard(Request $request)
    {
        $data=$request->all();
        card::create($data);
        return redirect()->route('dashboard')->with('message', 'data insert successfully');
    }

    public function loginpage()
    {
        return view('auth.login');

    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $login = users::where('email', $email)->where('password', $password)->first();
        if ($login && $login->status=='Active') {
            session()->put('username', $login->name);
            session()->put('userrole', $login->role);
            return redirect()->route('dashboard')->with('message', 'Login successful');
        } else {
            return redirect()->back()->with('error', 'User or Password wrong');
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('loginpage')->with('message', 'Logout Successfully');
    }
}
