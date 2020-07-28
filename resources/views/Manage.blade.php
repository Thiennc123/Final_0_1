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
@elseif(session('data')['userName'] == 'admin' && session()->has('data'))
	@section('li1','Manage Photos')
		

		@section('linkli3')
			{{url('Manage')}}
		@endsection()

		@section('linkli2')
			{{url('Manage')}}
		@endsection()

		@section('linkli1')
			{{url('Manage_Photo')}}
		@endsection()
	@section('li2','Manage Albums')
	@section('li3','Manage Users')
@else
	@section('li1','Feeds')
@endif



	 		

	 @section('main_content')
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-block">
				  		
				  		@section('contain_item')
							
				  		@show
			  		</div>
			  	</div>
				<hr/>
				
						  
					  
					  
	  

@endsection()