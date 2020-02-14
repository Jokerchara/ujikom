<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\User;
use DataTables;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Validator;
USE Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori = Kategori::latest()->get();
            return Datatables::of($kategori)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Edit" class="btn btn-warning btn-sm edit-kategori"><i class="fa fa-pencil" style="color:white"></i></a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm hapus-kategori"><i class="fa fa-trash" style="width:15px"></i></a>';         
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('backend.kategori.index');

        // $kategori = Kategori::orderBy('created_at', 'desc')->get();
        // return view('backend.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->nama_kategori, '-');
        // dd($request->all());
        // create
            Kategori::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama_kategori' => $request->nama_kategori,
                    'slug' => $slug
                ]
            );
        

        return response()->json(['success' => ' Berhasil di Simpan']);

        // return redirect()->route('kategori.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return response()->json($kategori);
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
        // $kategori = Kategori::find($id);
        // $input = $request->all();

        // if (!$kategori) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Empty',
        //         'message' => 'Kategori tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }

        // $validator = Validator::make($input, [
        //     'nama_kategori' => 'required|unique:Kategoris'
        // ]);

        // if ($validator->fails()) {
        //     $response = [
        //         'Success' => false,
        //         'data' => 'validation error.',
        //         'message' => $validator->errors()
        //     ];
        //     return response()->json($response, 500);
        // }

        // $kategori->nama_kategori = $input['nama_kategori'];

        // $kategori = Kategori::findOrfail($id);
        // $kategori->nama_kategori = $request->nama_kategori;
        // $kategori->slug = str_slug($request->nama_kategori, '-');
        // $kategori->save();

        // $response = [
        //     'Success' => true,
        //     'data' => $kategori,
        //     'message' => 'Kategori berhasil diupdate'
        // ];
        // // return response()->json($response, 200);
        // return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $kategori = Kategori::find($id);
        // if (!$kategori) {
        //     $response = [
        //         'success' => false,
        //         'data' => 'Gagal Hapus',
        //         'message' => 'Kategori tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }

        // $kategori->delete();
        // $response = [
        //     'success' => true,
        //     'data' => $kategori,
        //     'message' => 'Kategori berhasil dihapus.'
        // ];

        // // 6. tampilkan hasil
        // // return response()->json($response, 200);
        // return redirect()->route('kategori.index');
        Kategori::find($id)->delete();

        return response()->json(['success'=>'Kategori  deleted successfully.']);
    }
}
