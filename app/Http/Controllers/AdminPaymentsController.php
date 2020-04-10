<?php

namespace App\Http\Controllers;

use App\Members;
use App\Packages;
use App\Payments;
use Illuminate\Http\Request;

class AdminPaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payments::all();

        $member = Members::pluck('name', 'id')->all();
        $package = Packages::pluck('name', 'id')->all();

        return view('admin.payments.index', compact('payments','member', 'package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $members = Members::pluck('name', 'id')->all();
        $packages = Packages::pluck('name', 'id')->all();

        return view('admin.payments.create', compact('members', 'packages'));
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

        Payments::create($request->all());
        return redirect('/admin/payments');

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
        $payments = Payments::FindOrFail($id);
        $members = Members::pluck('name', 'id')->all();
        $packages = Packages::pluck('name', 'id')->all();

        return view('admin.payments.edit', compact('payments','members','packages'));
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
        $payments = Payments::FindOrFail($id);
        $payments->update($request->all());

        return redirect('/admin/payments');
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
        $payments = Payments::findOrFail($id)->delete();
        return redirect('/admin/payments');
    }
}
