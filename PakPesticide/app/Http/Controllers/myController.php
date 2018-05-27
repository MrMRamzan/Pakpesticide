<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class myController extends Controller
{
    //test view
    public function showMsg()
    {
    	return "Hello world";
    }
    //home view return
    public function index()
    {
        $data=[
            'std1'=>['name'=>'Ali','marks'=>'80'],
                'std2'=>['name'=>'Adnan','marks'=>'90'],
            ];
     //$users = DB::table('users')->get();
     //$users = DB::select('select * from users where name like ?',['A%']);
     return view('home1', ['data' => $data]);
    	//return view('about',['id'=>$id]);
    }
    //about view return
    public function aboutPage()
    {
        return view('about');
    }
    //ourteam view return
    public function ourTeamPage()
    {
        return view('ourteam');
    }
    //crop view return
    public function cropPage()
    {
        return view('crops');
    }
    //product view return
    public function productPage()
    {
        return view('products');
    }
    //contact view return
    public function contactPage()
    {
        return view('contact');
    }
    //cart view return
    public function cartPage()
    {
        return view('cart');
    }
    //selectedCrop view return
    public function selectedCropPage()
    {
        return view('selectedCrop');
    }
    //order view return
    public function orderPage()
    {
        return view('order');
    }

    //order view return
    public function adminPage()
    {
        return view('layouts.adminMaster');
    }
}// class end 
