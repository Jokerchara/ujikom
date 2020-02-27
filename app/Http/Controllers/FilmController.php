<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::orderBy('created_at', 'desc')->get();
        return view('backend.film.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.film.create');
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
            'judul' => 'required|unique:films',
            'konten' => 'required|min:50',
            'rating' => 'required',
            'pemain' => 'required|min:10',
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

        $film = new Film();
        $film->judul = $request->judul;
        $film->slug = str_slug($request->judul, '-');
        $film->rating = $request->rating;
        $film->pemain = $request->pemain;
        $film->url = $request->url;
        $film->konten = $request->konten;
        $film->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/film';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $film->foto = $filename;
        }
        $film->save();

        $response = [
            'Success' => true,
            'data' => $film,
            'message' => 'Film berhasil dibuat'
        ];
        // return response()->json($response, 200);
        return redirect()->route('film.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('backend.film.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findOrfail($id);
        return view('backend.film.edit', compact('film'));
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
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $film = Film::findOrFail($id);
        $film->judul = $request->judul;
        $film->slug = str_slug($request->judul, '-');
        $film->rating = $request->rating;
        $film->pemain = $request->pemain;
        $film->url = $request->url;
        $film->konten = $request->konten;
        $film->id_user = Auth::user()->id;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/film/';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($film->foto) {
                $old_foto = $film->foto;
                $filepath = public_path() .
                    '/assets/img/film/' .
                    $film->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $film->foto = $filename;
        }
        $film->save();

        $response = [
            'Success' => true,
            'data' => $film,
            'message' => 'Film berhasil diedit'
        ];
        // return response()->json($response, 200);
        return redirect()->route('film.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $blog = Film::findOrfail($id);
        if ($film->foto) {
            $old_foto = $film->foto;
            $filepath = public_path()
                . '/assets/img/film/' . $film->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        if (!$film) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'film tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $film->delete();
        $response = [
            'success' => true,
            'data' => $film,
            'message' => 'film berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('film.index');
    }
}
