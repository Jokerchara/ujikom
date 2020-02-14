<?php

namespace App\Http\Controllers;

use App\Budaya;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
use File;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budaya = Budaya::orderBy('created_at', 'desc')->get();
        return view('backend.budaya.index', compact('budaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.budaya.create');
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
            'judul' => 'required|unique:budayas',
            'konten' => 'required|min:50',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $budaya = new Budaya();
        $budaya->judul = $request->judul;
        $budaya->slug = str_slug($request->judul, '-');
        $budaya->konten = $request->konten;
        $budaya->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/budaya';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $budaya->foto = $filename;
        }
        $budaya->save();

        $response = [
            'Success' => true,
            'data' => $budaya,
            'message' => 'Budaya berhasil ditemukan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('budaya.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budaya = Budaya::findOrFail($id);
        return view('backend.budaya.show', compact('budaya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $budaya = Budaya::findOrfail($id);
        return view('backend.budaya.edit', compact('budaya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'judul' => 'required',
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

        $budaya = Budaya::findOrFail($id);
        $budaya->judul = $request->judul;
        $budaya->slug = str_slug($request->judul, '-');
        $budaya->konten = $request->konten;
        $budaya->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/budaya/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($budaya->foto) {
                $old_foto = $budaya->foto;
                $filepath = public_path() .
                    '/assets/img/budaya/' .
                    $budaya->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $budaya->foto = $filename;
        }
        $budaya->save();

        $response = [
            'Success' => true,
            'data' => $budaya,
            'message' => 'Budaya berhasil ditambahkan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('budaya.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $budaya = Budaya::findOrFail($id);
        $blog = Budaya::findOrfail($id);
        if ($budaya->foto) {
            $old_foto = $budaya->foto;
            $filepath = public_path()
                . '/assets/img/budaya/' . $budaya->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        if (!$budaya) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'budaya tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $budaya->delete();
        $response = [
            'success' => true,
            'data' => $budaya,
            'message' => 'budaya berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('budaya.index');
    }
}
