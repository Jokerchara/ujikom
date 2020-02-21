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
<div class="box">
  <div class="box-header with-border">
    <center>    
    <h3 class="box-title">Edit Restoran</h3>
    </center>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      </div>
  </div><div class="card-body">
                                <form action="{{route('restoran.update', $restoran->id)}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input class="form-control
                                        @error('judul') is-invalid @enderror" type="text"
                                        name="nama" id="" value="{{$restoran->nama}}" required>
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        @if (isset($restoran) && $restoran->foto)
                                            <p>
                                                <img src="{{ asset('assets/img/restoran/'
                                                .$restoran->foto.'') }}"
                                                style="margin-top:15px;margin-bottom:15px;
                                                max-height:100px;border:1px;border-color:black;" alt="">
                                            </p>
                                        @endif
                                        <input class="form-control
                                        @error('foto') is-invalid @enderror" type="file"
                                        name="foto" id="" value="{{$restoran->foto}}">
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input class="form-control
                                        @error('alamat') is-invalid @enderror" type="text"
                                        name="alamat" id="" value="{{$restoran->alamat}}" required>
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control ckeditor
                                            @error('konten') is-invalid @enderror"
                                            name="konten" id="editor1" required> {{$restoran->konten}}
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
@endsection
