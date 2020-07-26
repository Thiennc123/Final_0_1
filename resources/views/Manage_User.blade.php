@extends('Manage')
	@section('contain_item')
						<div>
				  			<table class="table">
							  <thead>
							    <tr>
							      <th scope="col">First</th>
							  
							      <th scope="col">Last</th>
							      <th scope="col">UserName</th>
							      <th scope="col">Email</th>
							      <th scope="col">LastLogin</th>
							      <th scope="col"></th>
							    </tr>
							  </thead>
							  <tbody>
							  	@foreach($listUsers as $user)
							    <tr>
							      <td>{{$user->firstName}}</td>
							      <td>{{$user->lastName}}</td>
							      <td>{{$user->userName}}</td>
							      <td>{{$user->email}}</td>
							      <td>{{$user->created_at}}</td>

							      <td class="">
							      	<a href="{{url('EditUser/'.$user->id)}}" class="btn btn-success">Edit</a>
							      	<a href="{{ URL::to('DeleteUser/'.$user->id) }}" class="btn btn-danger">Remove</a>
							      </td>
							    </tr>
							    
							    @endforeach
							   
							  </tbody>
							</table>
				  		</div>
	@endsection