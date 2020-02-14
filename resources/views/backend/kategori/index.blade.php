@extends('layouts.back')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="../../assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
        <!-- start - This is for export functionality only -->
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
        <script src="../../assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
        <!-- end - This is for export functionality only -->
	
	    <!-- foxadmin for Data Table -->
        <script src="../../js/pages/data-table.js"></script>
        <script type="text/javascript">
        $(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                //Data di Tabel
                var table = $('#dataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ url('/admin/kategori')}}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'nama_kategori', name: 'nama_kategori'},
                        {data: 'aksi', name: 'aksi', orderable: false, searchable: false},
                    ]
                });
                    $('#tambah-kategori').click(function () {
                    $('#form').trigger("reset");
                    $('#modal').modal({backdrop: 'static', keyboard: false});
                    $('#modal').modal('show');
                    $('#data-id').val('');
                });
                $('#simpan').click(function (e) {
                    e.preventDefault();
                    // $(this).hide();
                    var formdata = new FormData($('#form')[0]);
                    $.ajax({
                        data: formdata,
                        url: "{{ url('/admin/kategori-store') }}",
                        type: "POST",
                        cache:false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            $('#form').trigger("reset");
                            $('#modal').modal('hide');
                            table.draw();
                            Swal.fire(
                            'Good job!',
                            'You clicked the button!',
                            'success'
                            )
                        },
                        error: function (request, status, error) {
                        console.log(error);
                        }
                    });
                });
                //Edit
                $('body').on('click','.edit-kategori',function () {
                    var idKategori = $(this).data('id');
                    $.get("{{url('/admin/kategori')}}"+"/"+idKategori+"/edit", function(data){
                    $('#modal').modal("show");
                    $('#data-id').val(data.id);
                    $('#nama_kategori').val(data.nama_kategori);
                    });
                });

                //KETIKA BUTTON DELETE DI KLIK
                $('body').on('click', '.hapus-kategori', function () {
                    var idKategori = $(this).data("id");
                    $.ajax({
                    type: "DELETE",
                    url: "{{ url('admin/kategori-destroy') }}"+'/'+idKategori,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
                });

        });
        </script>
        
@endsection

@section('content')
@include('backend.kategori.modal')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table Kategori</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-window-minimize"></i>
                </button>
            </div>
            </div>
            <!-- /.box-header -->
        <div class="box-body">
            <center>
                    <a class="btn btn-primary" href="javascript:void(0)" id="tambah-kategori">Tambah Kategori</a>
                </center>
            <table id="dataTable" class="table table-bordered table-striped table-responsive">
                <thead>
					<tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
				</thead>
				<tbody class="data-kategori">
				</tbody>
            </table>
        </div>
        </div>
@endsection
