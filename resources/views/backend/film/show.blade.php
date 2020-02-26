@extends('layouts.back')
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fadeIn active" id="tab-1">
                    <div class="card">
                        <div class="card-header">
                                <h1 class="font-weight-bold font-italic col-md-6 " >
                                    <i class="la la-book smdi-hc-fw"></i>
                                    {{$film->judul}} <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penulis :
                                    {{$film->user->name}}
                                </h1>
                        </div>
                            <div class="card-body">
                                <img src="{{ asset('assets/img/film/' .$film->foto.'') }}"
                                class="float-left rounded m-r-30 m-b-30" style="width:250px; height:250px;">
                                <h1 class="font-weight-bold">{{$film->judul}}</h1><br>
                                <p>{!!$film->konten!!}</p>
                                <br>
                                <p>
                                    Pemain : {{$film->pemain}}
                                </p>
                                <p>
                                    Tanggal : {{$film->created_at->format('d M Y H:i:s')}}
                                </p>
                                <p>
                                    Rating : <p class="fa fa-star"></p>{{$film->rating}}
                                </p>
                                <p>
                                    <a href="{{ route('film.index') }}" class="btn btn-outline btn-block btn-rounded btn-info">
                                         Kembali
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
