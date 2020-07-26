<?php

namespace App\Http\Controllers;

use App\TodoTask;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new TodoTask([
            'task' => $request->get('task')
        ]);
        $item->save();
    }
}
