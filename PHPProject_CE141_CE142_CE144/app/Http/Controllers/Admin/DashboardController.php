<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\City;
use App\Models\BookPackage;

class DashboardController extends Controller
{

    public function dashboard()
    {
        $users=User::count();
        $package=Package::count();
        $citys=City::count();
        $bookpackage=BookPackage::count();
        return view('admin.dashboard')->with('users',$users)->with('citys',$citys)->with('package',$package)->with('bookpackage',$bookpackage);
    }
    public function registered()
    {

    	$users = User::all();

    	return view('admin.register')->with('users',$users);

    }
    // here we create fuction for edit users
    public function registeredit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.register-edit')->with('users',$users);
    }

    // here we create function for update button
    public function registerupdate(Request $request, $id)
    {
    	$users = User::find($id);
    	$users->name = $request->input('username');
    	$users->userType = $request->input('userType');
    	$users->update();

    	return redirect('/role-register')->with('status','data is updated'); 
    }
    //delete function
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','data deleted');

    }
}