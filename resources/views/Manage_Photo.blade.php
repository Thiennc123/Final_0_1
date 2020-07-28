@extends('Manage')
	@section('contain_item')
				
				<div class="row mt-3 justify-content-start">
					@foreach($listImgForUsers as $listImgForUser)
					  <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 img-responsive mt-3 justify-content-center">
					  	<div style="position: relative;height: 200px">
					  		<img src="{{ asset($listImgForUser->link) }}" style="width: 100%; height: 100%;">
						  	<div class="child bg-secondary flex-parent" style="position: absolute; top: 0; left: 0;height: 15%; width: 100%; opacity:0.5;">
						  		<p class="flex-child long-and-truncated" style="">{{$listImgForUser->discript}}</p>
						  		<a href="{{url('EditImage/'.$listImgForUser->id)}}" style="color: white;"><i class="far fa-edit flex-child short-and-fixed"></i></a>
						  		
						  	</div>
					  	</div>
					  	
					  </div>

					  
					@endforeach
					  
				 </div>


				<div class="row d-flex justify-content-center mt-5">
					
				  	{{$listImgForUsers ?? ''->links()}}
				</div>
							 
	@endsection