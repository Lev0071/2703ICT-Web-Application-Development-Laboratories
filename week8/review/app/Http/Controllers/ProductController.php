<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("products.create_item_form")->with('manufacturers',Manufacturer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'price' => 'required|numeric',
         ]);

        //
        //dd("Store function");
        $brand = $request->brand;
        $brand2 = $request->brand2;
        $image = "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg";

        //dd($request->brand);


        //dd(isset($request->brand2));
        //dd($request->brand2);
        if( (isset($request->image)) ){
            $image = $request->image;
        }

        if( (isset($request->name)) && (isset($image)) && (isset($request->price)) ){
            
                if($brand != 0){
                    //dd($brand);
                    $product = new Product();
                    $product->name = $request->name;
                    $product->price = $request->price;
                    $product->image = $image;
                    $product->manufacturer_id = $request->brand;
                    $product->save();
                    return redirect("product/$product->id");
                }
                else if($brand == 0 && (isset($request->brand2)) ){
                    //dd($brand2);
                    $manufacturer = new Manufacturer();
                    $manufacturer->name = $request->brand2;
                    $manufacturer->save();
                    $product = new Product();
                    $product->name = $request->name;
                    $product->price = $request->price;
                    $product->image = $request->image;
                    $product->manufacturer()->associate($manufacturer);
                    $product->save();
                    return redirect("product/$product->id");
                }
                else {
                    dd("########");
                }

        }else{
            dd("########");
        }

        
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
        $product = Product::find($id);
        $manufacturer = Product::find($id)->manufacturer;
        return view('products.show')->with('product',$product);
        //return view('products.show')->with('product',product)->with('manufacturer',manufacturer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd("at edit");
        //dd($id);
        $product = Product::find($id);
        return view('products.edit_item_form')->with('product',$product)->with('manufacturers',Manufacturer::all());
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
        //dd("at update");

        $brand = $request->brand;
        $brand2 = $request->brand2;
        $name = $request->name;
        $image = "https://icon-library.com/images/no-image-icon/no-image-icon-0.jpg";
        $price = $request->price;
        $itemId = $request->itemId;

        $input = array();
        $input = [];

        if( (isset($request->image)) ){
            $image = $request->image;
        }

        if( (isset($request->name)) && (isset($image)) && (isset($request->price)) ){
            
                if($brand != 0){
                    $input = [$brand,$name,$image,$price,$itemId];
                    //dd($input);
                    //dd($brand);
                    $product = Product::find($itemId);
                    $product->name = $request->name;
                    $product->price = $request->price;
                    $product->image = $image;
                    $product->manufacturer_id = $request->brand;
                    $product->save();
                    return redirect("product/$product->id");
                }
                else if($brand == 0 && (isset($request->brand2)) ){
                    $input = [$brand2,$name,$image,$price,$itemId];
                    //dd($input);
                    //dd($brand2);
                    $manufacturer = Manufacturer::whereRaw('name = ?', array($brand2))->first();
                    if(!(is_null($manufacturer))){
                        //dd($manufacturer->id);
                        $product = Product::find($itemId);
                        //dd($product->id);
                        $product->name = $request->name;
                        $product->price = $request->price;
                        $product->image = $image;
                        $product->manufacturer()->associate($manufacturer);
                        $product->save();
                        return redirect("product/$product->id");
                    }else{
                        //dd("FAIL");
                        $manufacturer = new Manufacturer();
                        $manufacturer->name = $request->brand2;
                        $manufacturer->save();
                        $product = Product::find($itemId);
                        $product->name = $request->name;
                        $product->price = $request->price;
                        $product->image = $image;
                        $product->manufacturer()->associate($manufacturer);
                        $product->save();
                        return redirect("product/$product->id");
                    }
                }
                else {
                    dd("Bullshit");
                }

        }else{
            dd("Bullshit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //dd("at destroy");
        $product = Product::find($id);
        $product->delete();
        return redirect("product");
    }
}
