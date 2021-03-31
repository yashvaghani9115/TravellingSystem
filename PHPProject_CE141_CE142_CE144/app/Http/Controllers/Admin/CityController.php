<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{

    public function city()
    {
        $city=City::all();
        return view('admin.tablelist')->with('citys',$city);
    }
    public function addCity()
    {
        return view('admin.addCity');
    }
    public function storeCity(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'description'=>'required',
        ]);
        if ($request->hasFile('img') || $request->hasFile('cover_img')) {

            $request->validate([
                'img' => 'mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
                'cover_img'=>'mimes:jpeg,bmp,png'
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file('img')->store('city', 'public');
            $request->file('cover_img')->store('city_cover','public');
            // Store the record, using the new file hashname which will be it's new filename identity.
            $city = new City([
                "name" => $request->get('name'),
                "img_path" => $request->file('img')->hashName(),
                "cover_img"=> $request->file('cover_img')->hashName(),
                "description"=>$request->get('description'),
            ]);
            $city->save(); // Finally, save the record.
        }
        return redirect('tablelist')->with('status','city added successfully');
    }
    public function editCity($id)
    {
        $city=City::findorFail($id);
        return view('admin.editcity')->with('city',$city);
    }
    public function updateCity(Request $request,$id)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'description'=>'required',
        ]);
        if ($request->hasFile('img')) {

            $request->validate([
                'img' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file('img')->store('city', 'public');
            $request->file('cover_img')->store('city_cover','public');
            // Store the record, using the new file hashname which will be it's new filename identity.
            $city=City::findorFail($id);
            $city->name=$request->get('name');
            $city->img_path=$request->file('img')->hashName();
            $city->cover_img=$request->file("cover_img")->hashName();
            $city->description=$request->get('description');
            $city->update();
        }
        return redirect('tablelist')->with('status',"city updated successfully");
    }
    public function deleteCity($id)
    {
        $city=City::findorFail($id);
        $city->delete();
        return redirect('tablelist')->with('status','city deleted successfully');
    }
}