<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller




{

    protected $task;

    public function __construct(){
        $this->task = new Product();
    }

    public function index()
    {
        $response['tasks'] = $this->task->all();
        return view('pages\Product\product')->with($response);
    }
    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->back();
    }
    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task->delete();

        return redirect()->back();
    }

    public function done($task_id){
       $task = $this->task->find($task_id);
       $task->done=1;
        $task->update();

        return redirect()->back();
    }

  public function edit(){

  }



}
