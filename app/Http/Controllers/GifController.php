<?php

namespace App\Http\Controllers;

use App\Models\Gif;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gif = new Gif;
        $limit = $request->has('limit') ? $request->get('limit') : 10;

        if ($request->has('all')) {
            $result = $gif->all();
        } else {
            $result = $gif->paginate($limit);
        }
        return response($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Gif::create($request->input());
        return response($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(Gif::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Giff::where('id', $id)->update($request->input());
        return response(Giff::find($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response(Gif::find($id)->delete());
    }
}
