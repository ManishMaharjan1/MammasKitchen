<?php

namespace App\Http\Controllers\Admin;

use App\Info;
use Illuminate\Http\Request;    
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        return view('admin.info.info',compact('infos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = new Info();
        $info->streetname = $request->streetname;
        $info->number = $request->number;
        $info->email = $request->email;
        $info->save();
        return redirect('admin.info.info')->with('successMsg','Info Successfully Saved.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Info::find($id);
        return view('admin.info.info',compact('info'));
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
        $info = Info::find($id);
        $info->streetname = $request->streetname;
        $info->number = $request->number;
        $info->email = $request->email;
        $info->save();
        return redirect('admin.info.info')->with('successMsg','Info Successfully Updated.');
    }

}
