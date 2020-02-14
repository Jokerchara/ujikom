<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\User;
use DataTables;
use Dotenv\Regex\Success;
use Illuminate\Support\Facades\Validator;
USE Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $tag = Tag::latest()->get();
            return Datatables::of($tag)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Edit" class="btn btn-warning btn-sm edit-tag"><i class="fa fa-pencil" style="color:white"></i></a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" title="Hapus" class="btn btn-danger btn-sm hapus-tag"><i class="fa fa-trash" style="width:15px"></i></a>';         
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
        return view('backend.tag.index');
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
        $slug = Str::slug($request->nama_tag, '-');
        // dd($request->all());
        // create
            Tag::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama_tag' => $request->nama_tag,
                    'slug' => $slug
                ]
            );
        

        return response()->json(['success' => ' Berhasil di Simpan']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return response()->json($tag);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();

        return response()->json(['success'=>'Tag  deleted successfully.']);
    }
}
