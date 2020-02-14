<script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>

<div class="modal fade" id="modal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form id="form" name="form" class="form-horizontal">
                    <input type="hidden" name="id" id="data-id">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Budaya" maxlength="50" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <label for="name" class="control-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto" maxlength="50" autocomplete="off" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-group">
                <label for="">Konten</label>
                    <textarea class="form-control ckeditor
                        @error('konten') is-invalid @enderror"
                        name="konten" id="editor1" required>
                    </textarea>
                        @error('konten')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                    </span>
                    @enderror
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" type="button" class="btn btn-danger pull-left"id="reset">Batal</button>
                <button align="right" type="submit" class="btn btn-primary" id="simpan">Simpan</button>
            </div>
        </div>
    </div>
</div>