@extends('layouts.app')

@section('content')
		<div class="container">
	        <table class="table">
	        	<tr>
	        		<td>
	        			<h1>Members</h1>
	        		</td>
	        		<td>
	        			<a href="/members/create" class="btn btn-primary">Add A Member</a>
	        		</td>
	        	</tr>
	        </table>
			@if(count($members) > 0)
			<div class="row">
                <table class="table table-striped">
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    	<th>User Type</th>
                        <th>Date of Birth</th>
                        <th>Registered Date</th>
                        <th>Phone Number</th>
                        <th>E-mail</th>
                        @if(!Auth::guest())
							@if(Auth::user()->userType == 2)
		                        <th></th>
		                        <th></th>
		                    @endif
						@endif
                    </tr>
					@foreach($members as $member)
                        <tr>
                            <td>{{$member->userID}}</td>
                            <td>{{$member->firstName}}</td>
                            <td>{{$member->lastName}}</td>
                        	<td>
    		                    @if($member->userType == 0) 
			                        Student
			                    @elseif($member->userType == 1) 
			                        Teacher
			                    @elseif($member->userType == 2)
			                        Librarian
			                    @endif 
                        	</td>
                            <td>{{$member->dob}}</td>
                            <td>{{$member->registeredDate}}</td>
                            <td>{{$member->phoneNumber}}</td>
                            <td>{{$member->email}}</td>
					        @if(!Auth::guest())
								@if(Auth::user()->userType == 2 || Auth::user()->id == $member->id)
									<td><a href="/members/{{$member->id}}/edit" class="btn btn-primary">Edit</a></td>
									<td>{!! Form::open(['action' => ['MembersController@destroy', $member->id], 'method' => 'POST', 'style' => 'display: inline; float: right']) !!}
										{{ Form::hidden('_method', 'DELETE') }}
										{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
									{!! Form::close() !!}</td>
								@endif
							@endif
                        </tr>
		    		@endforeach
                </table>
			</div>
			@else
				<h3>There is No Members</h3>
			@endif
    	{{ $members->links() }}
	</div>
@endsection