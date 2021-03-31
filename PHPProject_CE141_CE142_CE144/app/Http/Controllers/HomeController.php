<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Package;
use App\Models\BookPackage;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $citys=City::all();
        return view('home')->with('citys',$citys);
    }
    public function showPackage($id)
    {
        $city=City::findorFail($id);
        $package=Package::where('city_id',$id)->get();
        return view('showpackage')->with('package',$package)->with('city',$city);
    }
    public function packageDetails($id)
    {
        $package=Package::findorFail($id);
        return view('packagedetails')->with('package',$package);
    }
    public function bookPackage(Request $request)
    {
        $data=$request->all();
        $package=Package::findorFail($data['package_id']);
        $bookPackage=new BookPackage([
            'user_id'=>Auth::user()->id,
            'price'=>$package->price,
            'departure_date'=>$data['date'],
            'package_id'=>$data['package_id'],
        ]);
        $bookPackage->save();
        return view('bookpackage')->with('bookpackage',$bookPackage);
    }
    public function allBooking()
    {
        $bookPackage=BookPackage::where('user_id',Auth::user()->id)->get();
        return view('allbooking')->with('bookpackage',$bookPackage);
    }
}