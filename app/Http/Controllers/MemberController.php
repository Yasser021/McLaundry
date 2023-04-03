<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::orderBy('id_member', 'Asc')->paginate(3);
        return view('admin.tableMem')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahMem');
        
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
        $request->validate([
            'id_member'=>'required|numeric|unique:member,id_member',
            'nm_member'=>'required',
            'alamat_member'=>'required',
            'jk'=>'required',
            'no_member'=>'required',
        ],[
            'id_member.required' => 'ID member Wajib Diisi',
            'nm_member.required' => 'Nama member Wajib Diisi',
            'alamat_member.required' => 'Alamat member Wajib Diisi',
            'jk.required' => 'jenis kelamin Wajib Diisi',
            'no_member.required' => 'No member Wajib Diisi',
        ]);

        $data = [
            'id_member'=>$request->id_member,
            'nm_member'=>$request->nm_member,
            'alamat_member'=>$request->alamat_member,
            'jk'=>$request->jk,
            'no_member'=>$request->no_member
        ];
        Member::create($data);
        return redirect()->to('member')->with('success','Berhasil Menambahkan Data Member');
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
        $data = Member::where('id_member', $id)->first();
        return view('admin.editMem')->with('data',$data);
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
            'id_member'=>$request->id_member,
            'nm_member'=>$request->nm_member,
            'alamat_member'=>$request->alamat_member,
            'jk'=>$request->jk,
            'no_member'=>$request->no_member
        ];
        Member::where('id_member',$id)->update($data);
        return redirect()->to('member')->with('success', 'Berhasil Menambahkan Data Paket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::where('id_member', $id)->delete();
        return redirect()->to('member')->with('success', 'berhasil mengapus data');
    }
}
