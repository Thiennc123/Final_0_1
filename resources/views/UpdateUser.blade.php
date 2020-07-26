@extends('Manage')

@section('contain_item')

	<div class="btn-group d-flex justify-content-start mt-3" role="group" aria-label="Basic example">
					 <span class="label">Edit User Profile</span>
						  
	</div>

	<hr/>
				
						  
					  <form method="POST" enctype="multipart/form-data" action="{{ URL::to('UpdateUser/'.$users->id.'/'.$users->avatar) }}">
					  	{{csrf_field()}}
						  <div class="form-row">
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 d-block offset-md-3 offset-sm-3 offset-lg-3 offset-xl-3 align-items-center">
						    	<div class="form-input m-auto">
								    <label for="file-ip-1">Change Image</label>
								    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="link" id="link">
								    <div class="preview">
								      <img id="file-ip-1-preview" class="d-block">
								    </div>
								 </div>

								 <div class="m-auto text-center">
								 	<label class="col-form-label" >Basic Information</label>
								 </div>

								<div class=" d-inline">
						    		<label>User Name</label>
						     		<input type="text" class="form-control" placeholder="Photo title " value="{{$users->userName}}" name="userName">
						    	</div>
						    	
						    	<div class=" d-inline">
						    		<label>First Name</label>
						     		<input type="text" class="form-control" placeholder="Photo title " value="{{$users->firstName}}" name="firstName">
						    	</div>

						    	<div class=" d-inline">
						    		<label>Last Name</label>
						     		<input type="text" class="form-control" placeholder="Photo title " value="{{$users->lastName}}" name="lastName">
						    	</div>

						    	<div class=" d-inline">
						    		<label>Email</label>
						     		<input type="text" class="form-control" placeholder="Photo title " value="{{$users->email}}" name="email">
						    	</div>

						    	<div class=" d-inline">
						    		<label>Current Pass</label>
						     		<input type="password" class="form-control" placeholder="Photo title " name="password">
						    	</div>

						    	<div class=" d-inline">
						    		<label>New Pass</label>
						     		<input type="password" class="form-control" placeholder="Photo title " name="newPassword">
						    	</div>

						    	<div class=" d-inline">
						    		<label>Confirm Pass</label>
						     		<input type="password" class="form-control" placeholder="Photo title " name="confirmPassword">
						    	</div>
						    	

						    	<div class="m-auto text-center mt-5">
						    		<input type="submit" name="" class="btn btn-success">
						    	</div>
						     	
							     
								
								 
								</div>
						    </div>
						    
						  </div>
						</form>
@endsection