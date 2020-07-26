@extends('Feeds')

@section('content_item')
 	<div class="row mt-3 justify-content-between">
		@foreach($listImg as $Album)
				
					  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					  	<a data-toggle="modal" data-target="#{{$Album->id}}" href="" style="text-decoration: none; color: black;">
					  	<div class="card mb-3 " style="margin: auto;">
						  <div class="row no-gutters" style="height: 200px" >
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 card-img img-responsive thien"  id="cart_img" style="height: 200px">
						    	<img src="{{ asset('image/' . $Album->link) }}" style="width: 100%; height: 100%;">
					      
					    </div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="background-color: #F0EFEF; height: 200px">
						      <div class="card-body" style="font-size: 12px;">
						        <h5 class="card-title">{{$Album->title}}</h5>
						        <p class="card-text">{{$Album->discript}}</p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
						</a>
					  </div>
					  
					  

<div class="modal fade" id="{{$Album->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$Album->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body img-responsive" style="height: 100%;">
       	<div id="carousel_{{$Album->id}}" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="height: 300px">
  	@php
      $a = 0;
	@endphp
	    
	    	@foreach($Album->photos()->get() as $photo)
				<div class="carousel-item {{ ($a == 0) ? 'active' : ''  }}" style="height: 400px">
	      		<img class="d-block w-100" src="{{ asset('image/' . $photo->link) }}" alt="First slide" style="object-fit: cover;">
	    		</div>
	    		@php
					$a++;
	    		@endphp
	    	@endforeach
	
   
  </div>
  <a class="carousel-control-prev" href="#carousel_{{$Album->id}}" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel_{{$Album->id}}" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
		
      </div>
      <div class="modal-footer">
        
        <p></p>
      </div>
    </div>
  </div>
</div>
				

		@endforeach
	</div>

				  <div class="row d-flex justify-content-center">
				  	{{$listImg->links()}}
				  </div>



@endsection