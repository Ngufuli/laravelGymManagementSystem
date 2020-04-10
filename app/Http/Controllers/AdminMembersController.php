<?php

namespace App\Http\Controllers;

use App\Members;
use App\Packages;
use Illuminate\Http\Request;

class AdminMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $members = Members::all();
        $packages = Packages::pluck('name', 'id')->all();

        return view('admin.members.index', compact('members', 'packages'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $packages = Packages::pluck('name', 'id')->all();

        return view('admin.members.create', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $input = $request->all();
        Members::create($input);
        return redirect('/admin/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $members = Members::findOrFail($id);
        return view('admin.members.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $members = Members::findOrFail($id);

        $packages = Packages::pluck('name', 'id')->all();


        return view('admin.members.edit', compact('name', 'package_id', 'members', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $member = Members::findOrFail($id);
        $input = $request->all();
        $member->update($input);

        return redirect('/admin/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $members = Members::findOrFail($id);
        $members->delete($id);
        return redirect('/admin/members');
    }
}
