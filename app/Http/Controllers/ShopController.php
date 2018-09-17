<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){

            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug', request()->category);

            })->get();
            $categories = Category::all();
            $productCount = count($products);
            $categoryName = $categories->where('slug', request()->category)->first()->name;

        }else{

            $products = Product::inRandomOrder()->take(20)->get();
            $productCount = count($products);
            $categories = Category::all();
            $categoryName = 'products';
        }      

        return view('frontEnd.shop',[
            'products' => $products,
            'categories' => $categories,
            'productCount' => $productCount,
            'categoryName' => $categoryName,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

     /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
         $product = Product::where('slug', $slug)->firstOrFail();

        return view('frontEnd.product')->with('product', $product);
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
        //
    }

}
