<?php

namespace App\Http\Controllers\jurusan\controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

use App\Models\jurusan;
use Illuminate\Support\Facades\Auth;

class jurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::paginate(10);
        // return json_encode($jurusan);

        return view('jurusan.view.list_jurusan', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();

        return view('jurusan.form.add_jurusan', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
        
            'nama_jurusan' => 'required',
            'keterangan' => 'required'
            ]);

        $add = new jurusan;
        $add->nama_jurusan = $request->nama_jurusan;
        $add->keterangan = $request->keterangan;



        $add->save();


        

        
        return redirect('/Jurusan/list')->with('status', 'Jurusan Added!');
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
        $jurusan = jurusan::find($id);

        return view('jurusan.form.edit_jurusan', compact('jurusan'));
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
         $this->validate($request, [
        
            'nama_jurusan' => 'required',
            'keterangan' => 'required'
            ]);

        //upload image
        $edit = jurusan::find($request->id);

        $edit->nama_jurusan = $request->nama_jurusan;
        $edit->keterangan = $request->keterangan;
        $edit->update();
        

       

        return redirect('/Jurusan/list')->with('status', 'Jurusan Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = jurusan::find($id);
        $jurusan->delete();

        return redirect('/Jurusan/list')->with('status', 'jurusan Deleted!');
    }
}
