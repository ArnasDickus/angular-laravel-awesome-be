<?php

namespace App\Http\Controllers;

use App\TodoTask;
use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return $tasks = TodoTask::orderBy('created_at', 'asc')->get();
    }

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
