<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $sliders = Slider::where('status','0')->get();
        $category = Category::where('status','1')->get();
        return view('index',compact('sliders','category'));
    }

    public function products($category_slug){
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            return view('collections.index',compact('category'));
        }else{
            return redirect()->back();
        }
    }
}


