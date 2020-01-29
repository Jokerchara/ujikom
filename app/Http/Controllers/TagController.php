<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tag = Tag::orderBy('created_at', 'desc')->get();
        return view('backend.tag.index', compact('tag'));

        // $tag = Tag::all();

        // if (count($tag) <= 0) {
        //     $response = [
        //         'Success' => false,
        //         'data' => 'Empty',
        //         'message' => 'Tag tidak ditemukan'
        //     ];
        //     return response()->json($response, 404);
        // }
        // $response = [
        //     'Success' => true,
        //     'data' => $tag,
        //     'message' => 'Tag berhasil ditemukan'
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
        return view('backend.tag.create');
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
            'nama_tag' => 'required|unique:tags'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }


        $tag = new Tag;
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();

        $response = [
            'Success' => true,
            'data' => $tag,
            'message' => 'Tag berhasil ditambahkan'
        ];
        // return response()->json($response, 200);
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        if (!$tag) {
            $response = [
                'Success' => false,
                'data' => 'Empty',
                'message' => 'Tag tidak ditemukan'
            ];
            return response()->json($response, 404);
        }
        $response = [
            'Success' => true,
            'data' => $tag,
            'message' => 'Tag berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrfail($id);
        return view('backend.tag.edit', compact('tag'));
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
        $tag = Tag::find($id);
        $input = $request->all();

        if (!$tag) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'Tag tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama_tag' => 'required|unique:tags'
        ]);

        if ($validator->fails()) {
            $response = [
                'Success' => false,
                'data' => 'validation error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $tag->nama_tag = $input['nama_tag'];

        $tag = Tag::findOrfail($id);
        $tag->nama_tag = $request->nama_tag;
        $tag->slug = str_slug($request->nama_tag, '-');
        $tag->save();

        $response = [
            'Success' => true,
            'data' => $tag,
            'message' => 'Tag berhasil diupdate'
        ];
        // return response()->json($response, 200);
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        if (!$tag) {
            $response = [
                'success' => false,
                'data' => 'Gagal Hapus',
                'message' => 'Tag tidak ditemukan'
            ];
            return response()->json($response, 404);
        }

        $tag->delete();
        $response = [
            'success' => true,
            'data' => $tag,
            'message' => 'Tag berhasil dihapus.'
        ];

        // 6. tampilkan hasil
        // return response()->json($response, 200);
        return redirect()->route('tag.index');
    }
}
