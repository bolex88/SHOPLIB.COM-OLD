<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function ShowProducts(){
    	$products = Post::all();
    	return view('products', compact('products'));
    }

    public function ShowProductDetails($id){
    	$product = Post::find($id);
    	$user = $product->user;
    	return view('product-details', compact('product', 'user'));
    }

    public function AddProductForm(){
    	return view('Post.add-product');
    }

    public function AddProduct(Request $request){
    	$this->validate($request, [
            'images' => 'required',
            'images.*' => 'image'
        ]);
    	$user = Auth::user();
    	$title = $request->title;
    	$product_description = $request->product_description;
    	$product_price = $request->product_price;
    	$seller_name = $request->seller_name;
    	$address = $request->address;
    	$seller_contact = $request->seller_contact;
    	$post = $user->posts()->create(['title'=>$title, 'product_description'=>$product_description, 
    	'product_price'=>$product_price, 'seller_name'=>$seller_name, 'address'=>$address, 'seller_contact'=>$seller_contact]);
    	foreach($request->images as $image){
        $filename = "images".str_random(5).'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('images',$filename);
        $post->images()->create(['path'=>$path]);
        }
        return redirect('/');
    }
}
