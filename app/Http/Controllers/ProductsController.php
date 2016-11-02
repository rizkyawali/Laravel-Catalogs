<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Sentinel;
use Image;
use App\Http\Requests\ProductRequest;
use App\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('sentinel');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return  view('admins.list-product',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.new-products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //Create New Product
        $product = new Products([
           'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image_extension' => $request->file('image')->getClientOriginalExtension()
        ]);
        //

        //Upload File

        $pathFolder = '/images/';
        $pathFolderThumb = '/images/thumbnail/';

        $product->image_path = $pathFolder;
        $product->save();

        $file = Input::file('image');

        $productName = $product->name;
        $productDesc = $product->description;
        $productPrice = $product->price;
        $extension = $request->file('image')->getClientOriginalExtension();

        $image = Image::make($file->getRealPath());

        $image->save(public_path(). $pathFolder. $productName.'.'.$extension)
            ->resize(100,200)
            ->save(public_path(). $pathFolderThumb. 'thumb-'.$productName.'.'. $extension);
        //

        flash('New Product Has Created','success');
        return redirect()->route('list_products', [$product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::finOrFail($id);
        $thumbpath = $product->image_path.'thumbnail/';

        File::delete(public_path($product->image_path).
            $product->name. '.' .
            $product->image_extension);

        File::delete(public_path($thumbpath). 'thumb-' .
            $product->name. '.' .
            $product->image_extension);

        Products::destroy($id);

        return redirect()->route('list_products');
        flash('The Product Has Deleted','info');

    }
}
