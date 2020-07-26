@extends('layouts.master_feed')


@if(session()->has('data'))
	@section('hihi')
   		

   		 Logout
	@endsection
@endif

@if(session()->has('data'))
	@section('link')
   		

   		 {{url('logout')}}
	@endsection
@endif





@if(session()->has('data'))
	@section('nameUser')
   		

   		 {{session('data')['userName']}}
	@endsection
@endif





@if(session()->has('data') && session('data')['userName'] !== 'admin')
	@section('li1')Feeds @endsection
	@section('li2','My Photos')
	@section('li3','My Albums')
@elseif(session('data')['userName'] === 'admin' && session()->has('data'))
	@section('li1','Manage Photos')
	@section('li2','Manage Albums')
	@section('li3','Manage User')
@else
	@section('li1','Feeds')
@endif






@section('main_content')
				
				<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-5 bg-white mt-5 mb-5" style="height: 700px;">
	 		

			  
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				  		<div class="btn-group d-flex justify-content-start mt-3" role="group" aria-label="Basic example">
						  <span class="label">Update Photo</span>
						  
						</div>
				  		
			  		</div>
			  	</div>
				<hr/>
				
						  
					  <form method="POST" enctype="multipart/form-data" action="{{ URL::to('UpdateImage/'.$data->id.'/'.$data->link) }}">
					  	{{csrf_field()}}
						  <div class="form-row">
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-block">
						    	<label for="staticEmail" class="col-form-label">Title</label>
						     	<input type="text" class="form-control" placeholder="Photo title " name="title" value="{{$data->title}}">
						     	<label for="inputState" class="mt-3">State</label>
							      <select id="input" class="form-control w-50" name="status" id="status">
							      	
							        	<option {{$data->status === 'Public'? 'selected':''}}>Public</option>
							        	<option {{$data->status === 'Private'? 'selected':''}}>Private</option>
							       
							      </select>
							     <div class="">
								    
								    <input type="file" id="image" name="image" value="{{$data->link}}">
								    
								  </div>
						    </div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
						    	<label for="staticEmail" class=" col-form-label">Description</label>
						      	<textarea class="form-control" rows="5" id="comment" placeholder="Photo description" name="discript">{{$data->discript}}</textarea>
						    </div>
						    <div class="mt-5">
						    	<input type="submit" class="bg-success btn btn-success">
						    	<a href="{{ URL::to('DeleteImage/'.$data->id) }}" class="btn btn-danger">Detele</a>
						    </div>
						    
						    
						  </div>
						</form>
					  
	  

		</div>

@endsection('content')