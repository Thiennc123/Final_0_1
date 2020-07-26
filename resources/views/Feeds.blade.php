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
				  		<div class="btn-group d-flex justify-content-center mt-3" role="group" aria-label="Basic example">
						 <a href="{{url('Feeds_Photo')}}" class="btn btn-success">Photo</a>
						  <a href="{{url('Feeds_Album')}}" class="btn btn-success">Album</a>
						</div>
				  		
			  		</div>
			  	</div>
				
				@section('content_item')
					


				
				  
				@show()

@endsection()