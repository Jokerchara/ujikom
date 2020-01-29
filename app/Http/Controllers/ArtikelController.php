<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Kategori;
use App\Tag;
use App\Artikel;
use Session;
use Auth;
use File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('backend.artikel.index', compact('artikel'));
        // $artikel = Artikel::all();
        // if (count($artikel) <= 0) {
        //     $response = [
        //         'Success' => false,
        //         'data' => 'Empty',
        //         'message' => 'Artikel tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $response = [
        //     'Success' => true,
        //     'data' => $artikel,
        //     'message' => 'Artikel berhasil ditemukan'
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
        $kategori = Kategori::all();
        $tag = Tag::all();
        // dd($tag);
        return view('backend.artikel.create', compact('kategori', 'tag'));
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
            'judul' => 'required|unique:artikels',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/artikel';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->attach($request->tag);

        $response = [
            'Success' => true,
            'data' => $artikel,
            'message' => 'Artikel berhasil ditemukan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('backend.artikel.show', compact('artikel'));
        // $artikel = Tag::find($id);
        // if (!$artikel) {
        //     $response = [
        //         'Success' => false,
        //         'data' => 'Empty',
        //         'message' => 'Tag tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $response = [
        //     'Success' => true,
        //     'data' => $artikel,
        //     'message' => 'Tag berhasil ditemukan'
        // ];
        // return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrfail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $select = $artikel->tag->pluck('id')->toArray();
        return view('backend.artikel.edit', compact('artikel', 'kategori', 'select', 'tag'));
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
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => 'required',
            'konten' => 'required|min:50',
            'id_kategori' => 'required',
            'tag' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/artikel/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($artikel->foto) {
                $old_foto = $artikel->foto;
                $filepath = public_path() .
                    '/assets/img/artikel/' .
                    $artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);

        $response = [
            'Success' => true,
            'data' => $artikel,
            'message' => 'Tag berhasil ditambahkan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $blog = Artikel::findOrfail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path()
                . '/assets/img/artikel/' . $artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        if (!$artikel) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'artikel tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $artikel->delete();
        $response = [
            'success' => true,
            'data' => $artikel,
            'message' => 'artikel berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('artikel.index');
    }
}
