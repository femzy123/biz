<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('listings.index')->with('listings', Listing::all());
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $listings = DB::table("listings")->where('name', 'LIKE', '%'.$search.'%')->orWhere('description', 'LIKE', '%'.$search.'%')->get();
        return view('home')->with('listings', $listings);
    }

    public function searchApi(Request $request)
    {
        $search = $request->get('search');
        $listings = DB::table("listings")->where('name', 'LIKE', '%'.$search.'%')->orWhere('description', 'LIKE', '%'.$search.'%')->get();
        return response()->json($listings);
    }
}
