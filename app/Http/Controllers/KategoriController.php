<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\User;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::orderBy('created_at', 'desc')->get();
        return view('backend.kategori.index', compact('kategori'));
        // $kategori = Kategori::all();
        // if (count($kategori) <= 0) {
        //     $response = [
        //         'Success' => false,
        //         'data' => 'Empty',
        //         'message' => 'Kategori tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $response = [
        //     'Success' => true,
        //     'data' => $kategori,
        //     'message' => 'Kategori berhasil ditemukan'
        // ];
        // return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_kategori' => 'required|unique:kategoris'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
            
        }

        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();

        $response = [
            'Success' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil ditambahkan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('kategori.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find();
        if (!$kategori) {
            $response = [
                'Success' => false,
                'data' => 'Empty',
                'message' => 'Kategori tidak ditemukan'
            ];
            return response()->json($response, 404);
        }
        $response = [
            'Success' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil ditemukan'
        ];
        return response()->json($response, 200);
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
        $kategori = Kategori::findOrfail($id);
        return view('backend.kategori.edit', compact('kategori'));
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
        $kategori = Kategori::find($id);
        $input = $request->all();

        if (!$kategori) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Kategori tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama_kategori' => 'required|unique:Kategoris'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $kategori->nama_kategori = $input['nama_kategori'];

        $kategori = Kategori::findOrfail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = str_slug($request->nama_kategori, '-');
        $kategori->save();

        $response = [
            'Success' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil diupdate'
        ];
        // return response()->json($response, 200);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        if (!$kategori) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'Kategori tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $kategori->delete();
        $response = [
            'success' => true,
            'data' => $kategori,
            'message' => 'Kategori berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('kategori.index');
    }
}
