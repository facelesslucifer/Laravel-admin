@extends('admin.layout')

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h3 class="panel-title">Student Lists</h3>
			</div>
			<div class="col-md-6">
				<a href="{{ route('admin.student.create') }}" class="btn btn-primary btn-sm pull-right">
					<span class="glyphicon glyphicon-edit"> Create Student</span>
				</a>
			</div>
		</div>
		<div class="spacer20"></div>
		<div class="row"> {{-- Start of student table row --}}
			<div class="col-md-12 table-responsive"> {{-- Start of student table div --}}
				@if(count($students) > 0 )
					<table class="table table-hover">
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Action</th>
							</tr>
						@foreach ($students as $index => $student)
							<tr>
								<td>{{ $index + 1 }}</td>
								<td>{{ $student->first_name }}</td>
								<td>{{ $student->last_name }}</td>
								<td>
									<a href="{{ route('students_path', [$student->slug]) }}" class="btn btn-primary btn-sm">
										<span class="glyphicon glyphicon-edit"> Edit</span>
									</a>
									<a href="{{ route('students_path', [$student->id]) }}"
										class="btn btn-danger btn-sm"
										data-method="delete"
										data-token="{{csrf_token()}}"
										data-confirm="Are you sure?">
										<span class="glyphicon glyphicon-remove"> Delete</span>
									</a>
								</td>
							</tr>


						@endforeach
					</table>
				@else
					<p>No users</p>
				@endif
			</div> {{-- End of student table div --}}
		</div> {{-- End of student table row --}}
	</div> {{-- End of DIV container --}}
@stop