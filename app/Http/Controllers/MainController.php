<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Http\Requests\MainRequest;
use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(MainRequest $request)
    {

         
     $cars = Store::join('brands', 'brands.id', '=', 'stores.brand_id')->select('stores.*', 'brands.brand')->get();
     $brands = Brand::all();

     if ($request->has('brands')) {
         $cars = $cars->filter(function ($item) use ($request) {
             return in_array($item->brand_id, $request['brands']);
         });
     };
  

    
          
        
         
        return view('main',  compact('cars', 'brands', ));
    }
}
