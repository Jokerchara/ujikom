<?php

namespace App\Http\Controllers;

use App\Restoran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
use File;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restoran = Restoran::orderBy('created_at', 'desc')->get();
        return view('backend.restoran.index', compact('restoran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.restoran.create');
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
            'nama' => 'required|unique:restorans',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'alamat' => 'required|unique:restorans',
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $restoran = new Restoran();
        $restoran->nama = $request->nama;
        $restoran->slug = str_slug($request->nama, '-');
        $restoran->konten = $request->konten;
        $restoran->alamat = $request->alamat;
        $restoran->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/restoran';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $restoran->foto = $filename;
        }
        $restoran->save();

        $response = [
            'Success' => true,
            'data' => $restoran,
            'message' => 'Restoran berhasil ditemukan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('restoran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restoran = Restoran::findOrFail($id);
        return view('backend.restoran.show', compact('restoran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restoran = Restoran::findOrfail($id);
        $select = $restoran->tag->pluck('id')->toArray();
        return view('backend.restoran.edit', compact('restoran', 'select'));
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
            'nama' => 'required',
            'konten' => 'required|min:50',
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $restoran = Restoran::findOrFail($id);
        $restoran->nama = $request->nama;
        $restoran->slug = str_slug($request->nama, '-');
        $restoran->konten = $request->konten;
        $restoran->alamat = $request->alamat;
        $restoran->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/restoran/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($restoran->foto) {
                $old_foto = $restoran->foto;
                $filepath = public_path() .
                    '/assets/img/restoran/' .
                    $restoran->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $restoran->foto = $filename;
        }
        // return response()->json($response, 200);
        return redirect()->route('restoran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restoran = Restoran::findOrFail($id);
        $blog = Restoran::findOrfail($id);
        if ($restoran->foto) {
            $old_foto = $restoran->foto;
            $filepath = public_path()
                . '/assets/img/restoran/' . $restoran->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        if (!$restoran) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'Restoran tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $restoran->delete();
        $response = [
            'success' => true,
            'data' => $restoran,
            'message' => 'restoran berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('restoran.index');
    }
}
