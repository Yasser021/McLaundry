<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Outlet::orderBy('id_outlet', 'Asc')->paginate(3);
        return view('admin.tableOut')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahOut');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'id_outlet'=>'required|numeric|unique:outlet,id_outlet',
            'nm_outlet'=>'required',
            'alamat_outlet'=>'required',
            'no_outlet'=>'required',
        ],[
            'id_outlet.required' => 'ID Outlet Wajib Diisi',
            'nm_outlet.required' => 'Nama Outlet Wajib Diisi',
            'alamat_outlet.required' => 'Alamat Outlet Wajib Diisi',
            'no_outlet.required' => 'No Outlet Wajib Diisi',
        ]);

        $data = [
            'id_outlet'=>$request->id_outlet,
            'nm_outlet'=>$request->nm_outlet,
            'alamat_outlet'=>$request->alamat_outlet,
            'no_outlet'=>$request->no_outlet
        ];
        Outlet::create($data);
        return redirect()->to('outlet')->with('success','Berhasil Menambahkan Data Outlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Outlet::where('id_outlet', $id)->first();
        return view('admin.editOut')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'id_outlet'=>'required|numeric|unique:outlet,id_outlet',
            'nm_outlet'=>'required',
            'alamat_outlet'=>'required',
            'no_outlet'=>'required',
        ],[
            'id_outlet.required' => 'ID Outlet tidak boleh kosong',
            'nm_outlet.required' => 'Nama Outlet tidak boleh kosong',
            'alamat_outlet.required' => 'Alamat Outlet tidak boleh kosong',
            'no_outlet.required' => 'No Outlet tidak boleh kosong',
        ]);

        $data = [
            'id_outlet'=>$request->id_outlet,
            'nm_outlet'=>$request->nm_outlet,
            'alamat_outlet'=>$request->alamat_outlet,
            'no_outlet'=>$request->no_outlet
        ];
        Outlet::where('id_outlet',$id)->update($data);
        return redirect()->to('outlet')->with('success', 'Berhasil Menambahkan Data Outlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Outlet::where('id_Outlet', $id)->delete();
        return redirect()->to('outlet')->with('success', 'berhasil mengapus data');
    }
}
