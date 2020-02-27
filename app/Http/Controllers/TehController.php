<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teh;
use App\kategori;
use Session;

class TehController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teh = teh::all();
        return view('backend.teh.index', compact('teh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teh = teh::all();
        $kategori = kategori::all();
        return view('backend.teh.create', compact('teh','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teh = new teh();
        $teh->nama_teh = $request->nama_teh;
        $teh->nutrisi_teh = $request->nutrisi_teh;
        $teh->harga_teh = $request->harga_teh;
        $teh->id_kategori = $request->id_kategori;

        // foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/teh';
            $filename = '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $teh->gambar = $filename;
        }
        $teh->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $teh->judul."</b>"
        ]);
        return redirect()->route('teh.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teh = teh::findOrFail($id);
        return view('backend.teh.show',compact('teh'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teh = teh::findOrFail($id);
        $kategori = kategori::all();
        return view('backend.teh.edit',compact('teh','kategori'));
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
        $teh = teh::findOrFail($id);
        $teh->nama_teh = $request->nama_teh;
        $teh->nutrisi_teh = $request->nutrisi_teh;
        $teh->harga_teh = $request->harga_teh;
        $teh->id_kategori = $request->id_kategori;


        // foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/teh';
            $filename = '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $teh->gambar = $filename;
        }
        $teh->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                         . $teh->judul."</b>"
        ]);
        return redirect()->route('teh.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $teh = teh::findOrfail($id);
        if(!teh::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level" => "Success",
            "message" => "Berhasil menghapus<b>"
                         . $teh->teh."</b>"
        ]);
        return redirect()->route('teh.index');
    }
}
