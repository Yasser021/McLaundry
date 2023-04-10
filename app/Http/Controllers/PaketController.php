<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $outlet = DB::table('outlet')
        ->join('paket', 'paket.id_outlet', '=', 'outlet.id_outlet')
        ->get();
        $data = Paket::orderBy('id_paket', 'Asc')
        ->paginate(3);
        return view('admin.tablePack')->with('data', $data)->with('outlet', $outlet );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlet = Outlet::all();
        return view('admin.tambahPack', compact('outlet'));
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
            'id_paket'=>$request->id_paket,
            'id_outlet'=>$request->id_outlet,
            'nm_paket'=>$request->nm_paket,
            'jenis'=>$request->jenis,
            'harga'=>$request->harga
        ];
        Paket::create($data);
        return redirect()->to('paket')->with('success','Berhasil Menambahkan Data Paket');
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
        $data = Paket::where('id_paket', $id)->first();
        return view('admin.editPack', compact('outlet'))->with('data',$data);
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
            'id_paket'=>$request->id_paket,
            'id_outlet'=>$request->id_outlet,
            'nm_paket'=>$request->nm_paket,
            'jenis'=>$request->jenis,
            'harga'=>$request->harga
        ];
        Paket::where('id_paket',$id)->update($data);
        return redirect()->to('paket')->with('success', 'Berhasil Menambahkan Data Paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Paket::where('id_paket', $id)->delete();
        return redirect()->to('paket')->with('success', 'berhasil mengapus data');
    }
}
