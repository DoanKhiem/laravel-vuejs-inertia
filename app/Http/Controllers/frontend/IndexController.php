<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Shelfs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $books = Books::orderBy('created_at','DESC')->search()->paginate(16);
//        dd($books);
        return view('frontend.index', compact('books'));
    }
    public function shop(){
        $books = Books::orderBy('created_at','DESC')->paginate(16);

        $shelfs = Shelfs::orderBy('name', 'ASC')->select('id','name')->get();
        $categories = Categories::orderBy('name', 'ASC')->select('id','name')->get();
        return view('frontend.category-shelf-book', compact('books', 'shelfs', 'categories'));
    }

    public function postShop(Request $request){
//        dd($request->category);
        $shelfs = Shelfs::orderBy('name', 'ASC')->select('id','name')->get();
        $categories = Categories::orderBy('name', 'ASC')->select('id','name')->get();



        $books = Books::query()->search()->category($request)->shelf($request)->get();
        dd($books);
        return view('frontend.category-shelf-book', compact('books', 'shelfs', 'categories'));
    }
}
