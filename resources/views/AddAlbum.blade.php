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
				
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 bg-white mt-5 mb-5">
	 		

			  
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
				  		<div class="btn-group d-flex justify-content-start mt-3" role="group" aria-label="Basic example">
						  <span class="label">New Album</span>
						  
						</div>
				  		
			  		</div>
			  	</div>
				<hr/>
				
						  
					  <form method="POST" enctype="multipart/form-data" action="{{url('AddAlbum/'.session('data')['id'])}}">
					  	{{csrf_field()}}
						  <div class="form-row">
						    <div class="col-sm-6 col-md-12 col-lg-6 col-xl-6 d-block">
						    	<label for="staticEmail" class="col-form-label">Title</label>
						     	<input type="text" class="form-control" placeholder="Photo title " name="title">
						     	<label for="inputState" class="mt-3">State</label>
							      <select id="input" class="form-control w-50" name="status">
							        <option selected>Public</option>
							        <option>Private</option>
							      </select>
							     
						    </div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
						    	<label for="staticEmail" class=" col-form-label">Description</label>
						      	<textarea class="form-control" rows="5" id="comment" placeholder="Photo description" name="discript"></textarea>
						    </div>

                            <div class="mt-5 col-12">
                                <div class="file-loading">
                                    <input id="file-1" type="file" name="file[]" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                                </div>
                            </div>


                            
						    <input type="submit" class="mt-5 btn btn-success">
						  </div>
						</form>
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <p>{{ $error }}</p>
						            @endforeach
						        </ul>
						    </div>
						@endif
					 
	  

		</div>

<script type="text/javascript">
    //  $("#test").click(function(){
    //     $("#menu").append('<input id="input-id" type="file" class="file" data-preview-file-type="text">');
    // });
    $(document).ready(function() {
        $("#file-1").fileinput({
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 10,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
    })

    


</script>

@endsection('content')