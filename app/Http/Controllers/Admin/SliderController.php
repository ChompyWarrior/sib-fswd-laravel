<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();


        return view('admin.sliders.index',compact('sliders'));
    }
    public function create(){
        return view('admin.sliders.create');
    }
    public function store(SliderFormRequest $request){

        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/slider/',$filename);
            $validatedData['image']= "uploads/slider/$filename";

        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],

        ]);

        return redirect('admin/sliders')->with('message','Slider Add Succesfully!');

    }
    
}
