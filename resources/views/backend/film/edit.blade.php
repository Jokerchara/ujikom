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
                                <div class="card-header">Edit Film</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('film.update', $film->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Nama Film</label>
                                        <input class="form-control
                                        @error('nama') is-invalid @enderror" type="text"
                                        name="nama" id="" value="{{$film->nama}}" required>
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Rating</label>
                                        <input class="form-control
                                        @error('rating') is-invalid @enderror" type="text"
                                        name="rating" id="" value="{{$film->rating}}" required>
                                        @error('rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pemain</label>
                                        <input class="form-control
                                        @error('pemain') is-invalid @enderror" type="text"
                                        name="pemain" id="" value="{{$film->pemain}}" required>
                                        @error('pemain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Url</label>
                                        <input class="form-control
                                        @error('url') is-invalid @enderror" type="text"
                                        name="url" id="" value="{{$film->url}}" required>
                                        @error('url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        @if (isset($film) && $film->foto)
                                            <p>
                                                <img src="{{ asset('assets/img/film/'
                                                .$film->foto.'') }}"
                                                style="margin-top:15px;margin-bottom:15px;
                                                max-height:100px;border:1px;border-color:black;" alt="">
                                            </p>
                                        @endif
                                        <input class="form-control
                                        @error('foto') is-invalid @enderror" type="file"
                                        name="foto" id="" value="{{$film->foto}}">
                                        @error('foto')
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
                                        <button type="submit" class="btn btn-primary">
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
