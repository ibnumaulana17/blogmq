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
        <h3 class="box-title">Edit Users</h3>

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

						<form method="post" name="edit_users" action="{{ url('users', $users->id) }}" enctype="multipart/form-data">
							{{csrf_field()}}
							<table class="table">
							<input type="hidden" class="form-control" name="id" value="{{ $users->id }}">
							<tr>
								<td>
								<label for="email">E-Mail *</label>
								</td>
								<td>
								<input type="textbox" class="form-control" name="email" value="{{ $users->email }}">
								</td>
							</tr>


							<tr>
								<td>
								<label for="password">Password *</label>
								</td>
								<td>
								<input type="password" class="form-control" name="password" placeholder="password">
								</td>
							</tr>



							<tr>
								<td>
								<label for="username">Username *</label>
								</td>
								<td>
								<input type="textbox" class="form-control" name="username" value="{{ $users->username }}">
								</td>
							</tr>

							<tr>
								<td>
								<label for="name">Name *</label>
								</td>
								<td>
								<input type="name" class="form-control" name="name" value="{{ $users->name }}">
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
    	<div class="box-footer">
          Footer
        </div>
  
</div>





		
@endsection

