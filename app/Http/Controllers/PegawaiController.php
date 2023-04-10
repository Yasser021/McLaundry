<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlet = DB::table('outlet')
        ->join('pegawai', 'pegawai.id_outlet', '=', 'outlet.id_outlet')
        ->get();
        $data = Pegawai::orderBy('id_pegawai', 'Asc')
        ->paginate(3);
        return view('admin.tablePeg')->with('data', $data)->with('outlet', $outlet );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlet = Outlet::all();
        return view('admin.tambahPeg', compact('outlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'id_pegawai'=>$request->id_pegawai,
            'id_outlet'=>$request->id_outlet,
            'nm_pegawai'=>$request->nm_pegawai,
            'jk'=>$request->jk,
            'no_telp'=>$request->no_telp
        ];
        Pegawai::create($data);
        return redirect()->to('pegawai')->with('success','Berhasil Menambahkan Data Paket');
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
        $outlet = Outlet::all();
        $data = Pegawai::where('id_pegawai', $id)->first();
        return view('admin.editPeg', compact('outlet'))->with('data',$data);
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
        $data = [
            'id_pegawai'=>$request->id_pegawai,
            'id_outlet'=>$request->id_outlet,
            'nm_pegawai'=>$request->nm_pegawai,
            'jk'=>$request->jk,
            'no_telp'=>$request->no_telp
        ];
        Pegawai::where('id_pegawai',$id)->update($data);
        return redirect()->to('pegawai')->with('success', 'Berhasil Menambahkan Data Paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::where('id_pegawai', $id)->delete();
        return redirect()->to('pegawai')->with('success', 'berhasil mengapus data');
    }
}
