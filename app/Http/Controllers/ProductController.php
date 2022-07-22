<?php

namespace App\Http\Controllers;

use App\Models\Product;
use doamin\Facade\ProductFacade;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductController extends parentController
{

    public function index()
    {
        $response['tasks'] = Product::all();
        return view('pages\Product\product')->with($response);
    }
    public function store(Request $request)
    {
        Product::store($request->all());
        return redirect()->back();
    }
    public function delete($task_id){
       ProductFacade::delete($task_id);

        return redirect()->back();
    }

    public function done($task_id){
      Product::done($task_id);

        return redirect()->back();
    }



}