@extends('adminlte::layouts.app')

@section('main-content')

	<style>
    .icheckbox_minimal, .iradio_minimal {display: none !important}
	</style>

	<section class="content-header">
		{{-- <div class="alert alert-success" style="margin-left:0px">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>                     
            session message
        </div> --}}

		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <div class="row">
		            <div class="col-sm-9"><strong>All Posts </strong></div>
		            <div class="col-sm-offset-1 col-sm-2">
		                <a href="" class="btn btn-primary" style="float:right;background: palevioletred;font-weight: bold">Add new</a>
		            </div>
		        </div>
		    </div>

		    <div class="panel-body table-responsive">
		        <table id="viewTable" class="table table-condensed table-hover table-striped">
		            <thead>
			            <tr>
							<th>SL</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created Date</th>
							<th>Updated Date</th>
							<th>Action</th>
						</tr> 
		            </thead>
		            <tbody>
		            	<?php $sl = 1; ?>
						@foreach($allPost as $value)
							<tr>
								<td>{{ $sl }}</td>
								<td>{{ $value->title }}</td>
								<td>{{ $value->body }}</td>
								<td>{{ $value->created_at }}</td>
								<td>{{ $value->updated_at }}</td>
								<td><a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="" class="btn btn-danger" style="margin-left: 10px"><i class="fa fa-trash"></i></a></td>
							</tr>
							<?php $sl++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
@endsection