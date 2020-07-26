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
						  <span class="label">New Photo</span>
						  
						</div>
				  		
			  		</div>
			  	</div>
				<hr/>
				
						  
					  <form method="POST" enctype="multipart/form-data" action="{{url('AddPhoto/'.session('data')['id'])}}">
					  	{{csrf_field()}}
						  <div class="form-row">
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-block">
						    	<label for="staticEmail" class="col-form-label">Title</label>
						     	<input type="text" class="form-control" placeholder="Photo title " name="title">
						     	<label for="inputState" class="mt-3">State</label>
							      <select id="input" class="form-control w-50" name="status">
							        <option selected>Public</option>
							        <option>Private</option>
							      </select>
							     <div class="form-input mt-5">
								    <label for="file-ip-1">Change Image</label>
								    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="image" id="image">
								    <div class="preview">
								      <img id="file-ip-1-preview" class="d-block">
								    </div>
								 </div>
						    </div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
						    	<label for="staticEmail" class=" col-form-label">Description</label>
						      	<textarea class="form-control" rows="5" id="comment" placeholder="Photo description" name="discript"></textarea>
						    </div>
						    <input type="submit" class="bg-success btn btn-success mt-5">
						  </div>
						</form>
					  
	  

		</div>

@endsection('content')