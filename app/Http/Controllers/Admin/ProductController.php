<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Support\Facades\File as FacadesFile;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('/admin/product/product',compact('product'));
    }

    public function add(){
        return view('/admin/product/add-product-data');
    }

    public function store(ProductFormRequest $request){
        $data = $request->validated();

        $product = new Product();
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->category_id = $data['category_id'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload/product/', $filename);
            $product->image = $filename;
        }
        $product->save();

        return redirect('admin/product')->with('message', 'Product Successfully Added !');
   
    }

    public function edit($id){

       $product = Product::where('id',$id)->first();

       return view('/admin/product/edit-product-data',compact('product'));
    }

    public function update(ProductFormRequest $request,$id){
        $data = $request->validated();

        $product = Product::find($id);
        $product->name = $data['name'];
        $product->price = $data['price'];
        $product->category_id = $data['category_id'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('upload/product/', $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect('/admin/product')->with('message', 'Product Successfully Updated !');
    }

    public function destroy($id){
        $category = Product::find($id);
        if($category){
            $destination = 'uploads/product/'.$category->image;
            if(FacadesFile::exists($destination)){
                FacadesFile::delete($destination);
            }
            $category->delete();
            return redirect('admin/product')->with('message', 'Category Successfully Deleted !');
        }else{
            return redirect('admin/product')->with('message', 'There Is No Id Category Foucs !');
    
        }
    }
}
