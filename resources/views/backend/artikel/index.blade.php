@extends('layouts.back')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Data Tables Artikel</h3>
            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-window-minimize"></i>
            </button>
        </div>
    </div>
<div class="box-body">
                <center>
                    <a href="{{ route('artikel.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline"><i class="fa fa-plus"></i>
                    </a>
                </center>
        <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Foto</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikel as $data)
                            <tr>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->slug}}</td>
                                <td>{{$data->kategori->nama_kategori}}</td>
                                <td>{{$data->user->name}}</td>
                                <td><img src="{{asset('assets/img/artikel/' .$data->foto. '')}}"
                                    style="width:200px; height:150px;" alt="Foto"></td>

								<td style="text-align: center;">
                                    <form action="{{route('artikel.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('artikel.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> <i class="fa fa-pencil  "></i>
                                    </a>
                                    <a href="{{route('artikel.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> <i class="fa fa-eye  "></i>
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> <i class="fa fa-trash  "></i></button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
    </div>
</div>
@endsection
