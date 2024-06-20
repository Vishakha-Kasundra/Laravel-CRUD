<?php

namespace App\Http\Controllers;

use App\Models\detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datum = detail::get();

        return view('template.index', compact('datum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $myblog = new detail();
        $myblog->Title = $request->Title;
        $myblog->Sub_Title = $request->Sub_Title;
        $myblog->Body_Content = $request->Body_Content;
        $myblog->save();

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(detail $user)
    {
        return view('template.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $user)
    {
        return view('template.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $user)
    {
        $user->Title = $request->Title;
        $user->Sub_Title = $request->Sub_Title;
        $user->Body_Content = $request->Body_Content;
        $user->save();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $user)
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
