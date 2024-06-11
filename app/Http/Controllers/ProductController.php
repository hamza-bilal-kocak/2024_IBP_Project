<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Post;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = Product::orderBy('created_at', 'DESC')->get();

        // return view('products.index', compact('product'));
        $product = Product::all();
        return view('products.index', compact('product'));
    }
    public function indexs()
    {
        $products = Product::all();
        return view('products.indexs', compact('products'));
    }
    public function search(Request $request)
    {
        // $searchTerm = $request->input('title'); // Arama terimini al

        // $product = Product::query()
        //     ->where('title', 'like', "%{$searchTerm}%") // title içinde ara
        //     ->paginate(10); // Sayfalama (isteğe bağlı)

        // return view('products.search', compact('product', 'searchTerm'));
        $query = $request->input('query');
        $product = Product::where('title', 'LIKE', "%{$query}%")->get();
        // dd($product); // Debug komutu
        return view('products.search', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('admin/products')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('admin/products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin/products')->with('success', 'product deleted successfully');
    }

    public function showproduct()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('layouts.showproduct', compact('product'));
    }



    // public function search(Request $request)
    // {

    //     $search_text = $_GET['query'];
    //     $products = Product::where('title', $request->title)->get();

    //     return view('products.search',compact('product'));
    // }
    // public function search(Request $request){
    //     $search_text = $request->get('query');
    //   }


}
