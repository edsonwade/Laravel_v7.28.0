<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $hobbies = Hobby::all();
        return view('hobby.index', compact('hobbies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create(Request $request)
    {
//        $hobbies = Hobby::create([
//            'name' => $request->input('name'),
//            'description' => $request->input('descritption'),
//        ]);
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
