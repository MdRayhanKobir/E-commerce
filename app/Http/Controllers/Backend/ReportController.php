<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function TodayOrder(){
        $today=date('d-m-y');
        $order=DB::table('orders')->where('status',0)->where('date',$today)->get();
        return view('admin.report.today_order',compact('order'));
    }

    public function TodayDelivary(){
        $today=date('d-m-y');
        $order=DB::table('orders')->where('status',3)->where('date',$today)->get();
        return view('admin.report.today_delivary',compact('order'));
    }

    public function ThisMonth(){
        $month=date('F');
        $order=DB::table('orders')->where('status',3)->where('month',$month)->get();
        return view('admin.report.this_month',compact('order'));
    }

    public function SearchReport(){
        return view('admin.report.search_report');
    }
}
