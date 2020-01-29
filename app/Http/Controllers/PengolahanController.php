<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengolahan;
use Session;

class PengolahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengolahan = pengolahan::all();
        return view('backend.pengolahan.index', compact('pengolahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $pengolahan = pengolahan::all();
        return view('backend.pengolahan.create', compact('pengolahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengolahan = new pengolahan();
        $pengolahan->nama_teh = $request->nama_teh;
        $pengolahan->bahan_teh = $request->bahan_teh;
        $pengolahan->proses = $request->proses;

        // foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/teh';
            $filename = '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $pengolahan->gambar = $filename;
        }
        $pengolahan->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $pengolahan->judul."</b>"
        ]);
        return redirect()->route('pengolahan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengolahan = pengolahan::findOrFail($id);
        return view('backend.pengolahan.show',compact('pengolahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $pengolahan = pengolahan::findOrFail($id);
        return view('backend.pengolahan.edit',compact('pengolahan'));
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
        $pengolahan = pengolahan::findOrFail($id);
        $pengolahan->bahan_teh = $request->bahan_teh;
        $pengolahan->proses = $request->proses;

        // foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/teh';
            $filename = '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $pengolahan->gambar = $filename;
        }
        $pengolahan->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $pengolahan->judul."</b>"
        ]);
        return redirect()->route('pengolahan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $pengolahan = pengolahan::findOrfail($id);
        if(!pengolahan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $pengolahan->pengolahan."</b>"
        ]);
        return redirect()->route('pengolahan.index');
    }
}
