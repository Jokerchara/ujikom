@extends('layouts.back')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="style.css">
@endsection


    @section('js')
        <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    @endsection
        <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
        <script>
        CKEDITOR.replace( 'editor1' );
    </script>

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Edit Budaya</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('budaya.update', $budaya->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control
                                        @error('judul') is-invalid @enderror" type="text"
                                        name="judul" id="" value="{{$budaya->judul}}" required>
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control ckeditor
                                            @error('konten') is-invalid @enderror"
                                            name="konten" id="editor1" required> {{$budaya->konten}}
                                            </textarea>
                                            @error('konten')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
