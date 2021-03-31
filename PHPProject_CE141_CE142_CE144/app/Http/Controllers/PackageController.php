<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\City;
use App\Models\BookPackage;

class PackageController extends Controller
{
    // public function searchPackage(Request $request)
    // {
    //     $data=$request->all();
    //     $pkg=Packages::where($data)->firstOrFail();
    //     echo $pkg->id;
    // }

    public function showPackage($id)
    {
        $package=Package::where('city_id',$id)->get();
        return view('admin.showpackage')->with('package',$package);
    }
    public function addPackage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price'=>'required',
            'nights'=>'required',
            'inclusions'=>'required',
            'img'=>'required',
            'description'=>'required',
            'city_id'=>'required',
        ]);
        if ($request->hasFile('img')) {

            $request->validate([
                'img' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file('img')->store('package', 'public');
            // Store the record, using the new file hashname which will be it's new filename identity.
            $package = new Package([
                "name" => $request->get('name'),
                "price"=>$request->get('price'),
                "nights"=>$request->get('nights'),
                "inclusions"=>$request->get('inclusions'),
                "img" => $request->file('img')->hashName(),
                "description"=>$request->get('description'),
                "city_id"=>$request->get('city_id'),
            ]);
            $package->save(); // Finally, save the record.
        }
        return redirect('showpackage/'.$request->get('city_id'))->with('status','package added successfully');
    }
    public function showEditPackageForm($id)
    {
        $package=Package::findorFail($id);
        return view('admin.editPackage')->with('package',$package);
    }
    public function updatePackage(Request $request,$id)
    {
        $package=Package::findorFail($id);
        $request->validate([
            'name' => 'required',
            'price'=>'required',
            'nights'=>'required',
            'inclusions'=>'required',
            'img'=>'required',
            'description'=>'required',
            'city_id'=>'required',
        ]);
        if ($request->hasFile('img')) {

            $request->validate([
                'img' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file('img')->store('package', 'public');
            // Store the record, using the new file hashname which will be it's new filename identity.
            $package->name=$request->get('name');
            $package->price=$request->get('price');
            $package->nights=$request->get('nights');
            $package->inclusions=$request->get('inclusions');
            $package->img=$request->file('img')->hashName();
            $package->description=$request->get('description');
            $package->city_id=$request->get('city_id');
            $package->update(); // Finally, save the record.
        }
        return redirect('showpackage/'.$request->get('city_id'))->with('status','package updated successfully');
    }
    public function deletePackage($id)
    {
        $packages=Package::findorFail($id);
        $packages->delete();
        return redirect('tablelist')->with('status','package deleted successfully');
    }
    public function bookPkg($id)
    {
        $bookPackage=BookPackage::where('user_id',$id)->get();
        return view('admin.bookpkg')->with('bookpackage',$bookPackage);
    }
}