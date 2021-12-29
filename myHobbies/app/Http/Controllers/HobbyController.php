<?php

namespace App\Http\Controllers;

use App\Models\Hobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HobbyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        //$hobbies = Hobby::all();
        //$hobbies = Hobby::paginate(10);
        //$hobbies = DB::table('hobbies')->Paginate(5);
        // return the order when the hobbies where created
        $hobbies = Hobby::orderBy('created_at', 'DESC')->Paginate(5);
        return view('hobby.index', compact('hobbies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return
     */
    public function create(Request $request)
    {
//
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
        ]);
        Hobby::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => auth()->id()
        ]);
        return redirect()->route('hobby.index')->with('message', 'new hobby created with success!!');
    }

    /**
     * Display the specified resource.
     *
     * @param Hobby $hobby
     * @return
     */
    public function show(Hobby $hobby)
    {
        return view('hobby.show', compact('hobby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return
     */
    public function edit(Hobby $hobby)
    {
        return view('hobby.edit', compact('hobby'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Hobby $hobby)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:10',
        ]);

        $hobby->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('hobby.index')->with('message', 'Hobby Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Hobby $hobby)
    {
        $hobby->delete();
        return redirect()->route('hobby.index')->with('message', 'Hobby deleted Successfully');
    }
}
