<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index()
    {
        $allproducts = Product::all();
        return view('products.index', compact('allproducts'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'alternate_code' => 'required',
            'description' => 'required',
            'price' => 'numeric|required',
            'stock' => 'numeric|required',
            'photopath_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photopath_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photopath_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photopath_1')) {
            $image_1 = $request->file('photopath_1');
            $name_1 = Str::random(5) . '_' . time() . '.' . $image_1->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_1 = public_path('/images/products');
            $image_1->move($destinationPath_1, $name_1);
            $data['photopath_1'] = $name_1;
        }
        if ($request->hasFile('photopath_3')) {
            $image_3 = $request->file('photopath_3');
            $name_3 = Str::random(5) . '_' . time() . '.' . $image_3->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_3 = public_path('/images/products');
            $image_3->move($destinationPath_3, $name_3);
            $data['photopath_3'] = $name_3;
        }
        if ($request->hasFile('photopath_2')) {
            $image_2 = $request->file('photopath_2');
            $name_2 = Str::random(5) . '_' . time() . '.' . $image_2->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_2 = public_path('/images/products');
            $image_2->move($destinationPath_2, $name_2);
            $data['photopath_2'] = $name_2;
        }

        Product::create($data);
        return redirect(route('products.index'))->with('success', 'Part Addded Successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'alternate_code' => 'required',
            'description' => 'required',
            'price' => 'numeric|required',
            'stock' => 'numeric|required',
            'photopath_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photopath_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photopath_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photopath_1')) {
            $image_1 = $request->file('photopath_1');
            $name_1 = Str::random(5) . '_' . time() . '.' . $image_1->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_1 = public_path('/images/products');
            $image_1->move($destinationPath_1, $name_1);
            unlink('images/products/' . $product->photopath_1);
            // File::delete(public_path('images/products/'.$product->photopath));
            $data['photopath_1'] = $name_1;
        }

        if ($request->hasFile('photopath_3')) {
            $image_3 = $request->file('photopath_3');
            $name_3 = Str::random(5) . '_' . time() . '.' . $image_3->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_3 = public_path('/images/products');
            $image_3->move($destinationPath_3, $name_3);
            unlink('images/products/' . $product->photopath_3);
            // File::delete(public_path('images/products/'.$product->photopath));
            $data['photopath_3'] = $name_3;
        }

        if ($request->hasFile('photopath_2')) {
            $image_2 = $request->file('photopath_2');
            $name_2 = Str::random(5) . '_' . time() . '.' . $image_2->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300)->save('images/products/'.$name);
            $destinationPath_2 = public_path('/images/products');
            $image_2->move($destinationPath_2, $name_2);
            unlink('images/products/' . $product->photopath_2);
            // File::delete(public_path('images/products/'.$product->photopath));
            $data['photopath_2'] = $name_2;
        }

        $product->update($data);
        return redirect(route('products.index'))->with('success', 'Part Updated Successfully');
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->dataid);
        unlink('images/products/' . $product->photopath_1);
        unlink('images/products/' . $product->photopath_2);
        unlink('images/products/' . $product->photopath_3);
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Part Deleted Successfully!');
    }

    // STOCK
    public function stockindex()
    {
        $allproducts = Product::all();
        return view('stock.index', compact('allproducts'));
    }

    public function stockupdate(Request $request, $id)
    {
        $product = Product::find($id);
        $data = $request->validate([
            'stock' => 'numeric|required',
        ]);

        $product->update($data);
        return redirect(route('stock.index'))->with('success', 'Stock Updated Successfully');
    }
}
