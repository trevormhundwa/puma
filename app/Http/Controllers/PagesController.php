<?php

namespace App\Http\Controllers;

use App\Category;
use App\Spec;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(12);
        return view('pages.index',compact('products'));
    }

    public function products()
    {
        $products = Product::paginate(9);
        $categories = Category::with('products')->get();
        return view('pages.products', compact('products','categories','count'));
    }
    public function productSearch($id)
    {

        $products = Product::where('category_id','=',$id)->paginate(9);
        $categories = Category::all();
        return view('pages.products', compact('products','categories'));
    }
    public function productDetails($id)
    {
        $product = Product::find($id);
        $specs = Spec::where('product_id','=',$id)->get();
        return view('pages.productDetails',compact('product','specs'));
    }
    public function mediaCenter()
    {
        return view('pages.mediaCenter');
    }
    public function newsArticleDetails()
    {
        return view('pages.newsArticleDetails');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
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
        //
    }
}
