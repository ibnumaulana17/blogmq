@extends('layouts.master')

@section('content')


<!-- BODY  -->

<script type="text/javascript">

  function ConfirmDelete()
  {
	  var x = confirm("Are you sure you want to delete?");
	  if (x)
	    return true;
	  else
	    return false;
  }

</script>

<!-- IF THERE WAS AN SUCCESS STATUS -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">List User</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
        </div>
    </div>
  		<div class="box-body">
                    <div class="table table-responsive">
						<table class="table table-hover">
							<tr class="info">

								<td>Username</td>
								<td>E-Mail</td>
								<td>Name</td>
								
								<td align="center" colspan="2">Action</td>
							</tr>
							@foreach($users as $show)

							<tr>
								<td>{{ $show->username }}</td>
								<td>{{ $show->email }}</td>
								<td>{{ $show->name }}</td>
								
								<td>
								<a href="{{url('/users/edit')}}/{{$show->id}}" class="btn btn-sm btn-warning" type="submit" value="submit">Edit</a>
								</td>

								<td>
								<a onclick="return ConfirmDelete()" href="{{url('/users/delete')}}/{{$show->id}}" class="btn btn-sm btn-danger" type="submit" value="submit">Hapus</a>
								
								</td>
							</tr>

							@endforeach
							</table>

							{{ $users->links() }}

							
					
    </div>
    	
</div>



@endsection