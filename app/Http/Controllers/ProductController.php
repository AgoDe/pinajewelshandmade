<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{

    public function index()
    {
        return view('admin.product.index', [
            'products' => db::table('products')->paginate(),
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'product'       => new Product(),
            'categories'    => Category::all(),
        ]);
    }

    public function store(StoreProductRequest $request)
    {

        $attributes = $request->validate([
            'name'          => 'required',
            'collection_id' => 'nullable',
            'description'   => 'nullable|max:10000',
            'price'         => 'required|numeric',
            'image_1'       => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'image_2'       => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'image_3'       => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'image_4'       => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:3072',
            'quantity'      => 'required|numeric',
            'unique'        => 'nullable',
            'published'     => 'required',
        ]);
        //ddd($attributes);

        if (isset($attributes['image_1'])) {
            $image_1 = Storage::disk('public')->put('product', $attributes['image_1']);
            $attributes['image_1'] = $image_1;
        }
        if (isset($attributes['image_2'])) {
            $image_2 = Storage::disk('public')->put('product', $attributes['image_2']);
            $attributes['image_2'] = $image_2;
        }
        if (isset($attributes['image_3'])) {
            $image_3 = Storage::disk('public')->put('product', $attributes['image_3']);
            $attributes['image_3'] = $image_3;
        }
        if (isset($attributes['image_4'])) {
            $image_4 = Storage::disk('public')->put('product', $attributes['image_4']);
            $attributes['image_4'] = $image_4;
        }


        if (! Product::create($attributes)) {
            throw ValidationException::withMessages('Salvataggio non riuscito');
        }

        return redirect()->route('product.index');

    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product'       => $product,
            'categories'    => Category::all(),
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
