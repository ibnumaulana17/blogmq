@extends('layouts.master')

@section('content')


<!-- IF THERE WAS AN ERROR -->
@if(count($errors) > 0)
<br>
Isi data dengan benar
<ul>
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</ul>
@endif

<!-- IF THERE WAS AN SUCCESS STATUS -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<!-- BODY  -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Jurusan</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
        </div>
    </div>
  		<div class="box-body">

						<table>

						<form method="post" name="edit_users" action="{{ url('jurusan/update', $jurusan->id) }}" enctype="multipart/form-data">
							{{csrf_field()}}
							<table class="table">
							<input type="hidden" class="form-control" name="id" value="{{ $jurusan->id }}">



							<tr>
								<td>
								<label for="nama_jurusan">Nama Jurusan *</label>
								</td>
								<td>
								<input type="textbox" class="form-control" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}">
								</td>
							</tr>

							<tr>
								<td>
								<label for="keterangan">Keterangan *</label>
								</td>
								<td>
								<input type="textbox" class="form-control" name="keterangan" value="{{ $jurusan->keterangan }}">
								</td>
							</tr>


							<tr><td colspan="2">* required</td></tr>

							<tr>
								<td height="50">
								&nbsp;
								</td>
								<td>
								<input type="submit" class="btn btn-success" name="submit" value="Submit">
								<input type="reset" class="btn btn-warning" value="Clear From"/> 
								<input onclick="window.location='{{ URL::previous() }}'" class="btn btn-danger" value="Cancel" type="button" />
								</td>
							</tr>

						</table>
						</form>
								
						
    </div>
    	
  
</div>





		
@endsection

