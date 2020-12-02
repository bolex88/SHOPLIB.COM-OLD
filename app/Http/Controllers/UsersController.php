<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function index(){
    	$user = Auth::user();
    	$products = $user->posts;
    	return view('User.home', compact('products'));
    }

    public function Destroy($id){
    	Post::destroy($id);
    	return redirect()->route('home');
    }

    public function EditForm($id){
    	$product = Post::find($id);
    	return view('User.update-product', compact('id', 'product'));
    }

    public function Update(Request $request, $id){
    	$user = Auth::user();
    	$title = $request->title;
    	$product_description = $request->product_description;
    	$product_price = $request->product_price;
    	$address = $request->address;
    	$telephone = $user->telephone_no;
    	$product = Post::find($id);
    	$product->update(['title'=>$title, 'product_description'=>$product_description, 'product_price'=>$product_price, 'address'=>$address, 'telephone_no'=>$user]);
    	return redirect()->route('home');
    }
}
