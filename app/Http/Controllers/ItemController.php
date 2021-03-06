<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log($request);
        $item = new Item([
            'name' => $request->get('name'),
            'price' => $request->get('price')
        ]);

        $item->save();
        error_log($item);
        return response()->json('Successfully added');
    }
}
