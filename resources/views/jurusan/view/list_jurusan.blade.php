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
        <h3 class="box-title">List Jurusan</h3>

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

								<td>Nama Jurusan</td>
								<td>Keterangan</td>
								<td>Action</td>
							</tr>
							@foreach($jurusan as $show)

							<tr>
								<td>{{ $show->nama_jurusan }}</td>
								<td>{{ $show->keterangan }}</td>
								
								<td>
								<a href="{{url('/jurusan/edit')}}/{{$show->id}}" class="btn btn-sm btn-warning" type="submit" value="submit">Edit</a>
								
								<a onclick="return ConfirmDelete()" href="{{url('/jurusan/delete')}}/{{$show->id}}" class="btn btn-sm btn-danger" type="submit" value="submit">Hapus</a>
								
								</td>
							</tr>

							@endforeach
							</table>

							{{ $jurusan->links() }}

							
					
    </div>
    	
</div>



@endsection