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
				



				  
				<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
				  		<div class="btn-group d-flex justify-content-end mt-3" role="group" aria-label="Basic example">
						  <button type="button" class="btn btn-success"><a href="{{url('AddPhoto')}}" style="color: white;">Add new Photo</a></button>
						  
						</div>
				  		
			  		</div>
			  	</div>
				<hr/>
				<div class="row mt-3 justify-content-start">
					@foreach($listImgForUsers as $listImgForUser)
					  <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 img-responsive mt-3 justify-content-center">
					  	<div style="position: relative;height: 200px;">
					  		<img src="{{ asset($listImgForUser->link) }}" style="width: 100%; height: 100%">
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
@endsection('content')