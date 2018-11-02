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


<!-- JQUERY VALIDATE -->
<!--     <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script> -->
	<script src="{{ URL::asset('assets/jquery.validate.js') }}"></script>
	<!-- <script src="../dist/jquery.validate.js"></script> -->
	<style>
	label.error {
		color: red;
		font-size: 16px;
		font-weight: normal;
		line-height: 1.4;
		margin-top: 0.5em;
		width: 100%;
		float: none;
	}
	@media screen and (orientation: portrait) {
		label.error {
			margin-left: 0;
			display: block;
		}
	}
	@media screen and (orientation: landscape) {
		label.error {
			display: inline-block;
			margin-left: 22%;
		}
	}
	em {
		color: red;
		font-weight: bold;
		padding-right: .25em;
	}
	</style>

<!-- BODY  -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Add Jurusan</h3>

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

						<form method="POST" name="add_users" action="{{ route('insert_jurusan') }}" enctype="multipart/form-data">
							{{csrf_field()}}
							<table class="table">



							<tr>
								<td>
								<label for="nama_jurusan">Nama Jurusan *</label>
								</td>
								<td>
								<input placeholder="Nama Jurusan" type="textbox" class="form-control" name="nama_jurusan">
								</td>
							</tr>


							<tr>
								<td>
								<label for="keterangan">Keteranagan *</label>
								</td>
								<td>
								<input placeholder="Keterangan"  class="form-control" name="keterangan">
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

						</form>

						</table>

    </div>

</div>
<!-- /.row -->


<script>
$( "#page1" ).on( "pageinit", function() {
	$( "form" ).validate({
		rules: {
			username: {
				required: true
			},
			email: {
				required: true
			},
			name: {
				required: true
			},
			password: {
				required: true
			}
		},
		errorPlacement: function( error, element ) {
			error.insertAfter( element.parent() );
		}
	});
});
</script>



		
@endsection

