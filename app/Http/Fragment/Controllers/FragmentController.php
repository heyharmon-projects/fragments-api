<?php

namespace DDD\Http\Fragment\Controllers;

use DDD\App\Controllers\Controller;
use Illuminate\Http\Request;

use DDD\Domain\Fragment\Fragment;

class FragmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        return Fragment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        return Fragment::create(
            $request->all()
        );
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Fragment $fragment)
    {
        return $fragment;
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Fragment $fragment, Request $request)
    {
        $fragment->update(
            $request->all()
        );

        return $fragment;
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Fragment $fragment)
    {
        return $fragment->delete();
    }
}
