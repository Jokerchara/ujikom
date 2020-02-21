@extends('layouts.back')

@section('content')
<div class="box">
  <div class="box-header with-border">
      <h3 class="box-title">Title</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
      </div>
  </div>
    <div class="box-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      {{ Auth::user()->name }} You are logged in!
    </div>
</div>
@endsection
