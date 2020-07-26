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
				
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 bg-white mt-5 mb-5" style="height: 700px;">
	 		

			  
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				  		<div class="btn-group d-flex justify-content-start mt-3" role="group" aria-label="Basic example">
						  <span class="label">Update Album</span>
						  
						</div>
				  		
			  		</div>
			  	</div>
				<hr/>
				
						  
					  <form method="POST" enctype="multipart/form-data" action="{{ URL::to('UpdateAlbum/'.$data->id.'/'.$data->link) }}" class="dropzone" id="dropzone">
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
							     
						    </div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
						    	<label for="staticEmail" class=" col-form-label">Description</label>
						      	<textarea class="form-control" rows="5" id="comment" placeholder="Photo description" name="discript">{{$data->discript}}</textarea>
						    </div>
						    <div class="mt-5">
						    	<input type="submit" class="bg-success btn btn-success">
						    	<a href="{{ URL::to('DeleteAlbum/'.$data->id) }}" class="btn btn-danger">Detele</a>
						    </div>
						    
						    
						  </div>
						</form>
						<h4>Photo in Album</h4>
						<div class="row">
							
							@foreach($data->photos()->get() as $photo)
							<div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 img-responsive mt-3 justify-content-center">
							  	<div style="height: 200px;">
							  		<img src="{{ asset('image/'. $photo->link) }}" style="width: 100%; height: 100%">
								  	
							  	</div>
							  	<a href="{{ URL::to('DeleteImage/'.$data->id) }}" class="btn btn-danger m-auto">Remove Photo</a>
							  	
							  </div>
				    		
				    		@endforeach
					  
						</div>
						
					  
	  

		</div>


@endsection('content')