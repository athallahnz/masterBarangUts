<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Barang;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'enique:barangs' => 'Isi :attribute dengan format yang benar',
        'numeric' => 'Isi :attribute dengan angka',
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required|unique:barangs',
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'satuan_barang' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $barang = New Barang;
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->harga_barang = $request->harga_barang;
    $barang->deskripsi_barang = $request->deskripsi_barang;
    $barang->satuan_barang = $request->satuan_barang;
    $barang->save();
    return redirect()->route('barangs.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    // ELOQUENT
    $barang = Barang::find($id);
    return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    // $positions = Position::all();
    $barang = Barang::find($id);
    return view('barang.edit', compact('barang'));
}

/**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
{
    $messages = [
        'required' => ':Attribute harus diisi.',
        'enique:barangs' => 'Isi :attribute dengan format yang benar',
        'numeric' => 'Isi :attribute dengan angka',
    ];

    $validator = Validator::make($request->all(), [
        'kode_barang' => 'required|unique:barangs',
        'nama_barang' => 'required',
        'harga_barang' => 'required|numeric',
        'satuan_barang' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $barang = New Barang;
    $barang->kode_barang = $request->kode_barang;
    $barang->nama_barang = $request->nama_barang;
    $barang->harga_barang = $request->harga_barang;
    $barang->deskripsi_barang = $request->deskripsi_barang;
    $barang->satuan_barang = $request->satuan_barang;
    $barang->save();
    return redirect()->route('barangs.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    DB::table('barangs')
        ->where('id', $id)
        ->delete();

    return redirect()->route('barangs.index');
}
}
