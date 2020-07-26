@extends('Feeds')
@if(session()->has('info'))
    <script>
        alert("Dang nhap thanh cong");
    </script>
@endif 

@section('content_item')

	
 	<div class="row mt-3 justify-content-between">
		@foreach($listImg as $Img)
			
					  <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6" >
					  	<a data-toggle="modal" data-target="#{{$Img->id}}" href="" style="text-decoration: none; color: black;">
					  	<div class="card mb-3 " style="margin: auto;">
						  <div class="row no-gutters" style="height: 200px;">
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 card-img img-responsive thien"  id="cart_img" style="height: 200px;">
						    	<img src="{{ asset('image/'.$Img->link) }}" style="width: 100%; height: 100%;">
					      
					    	</div>
						    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" style="background-color: #F0EFEF; height: 200px;">
						      <div class="card-body" style="font-size: 12px;">
						        <h5 class="card-title">{{$Img->title}}</h5>
						        <p class="card-text">{{$Img->discript}}</p>
						        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						      </div>
						    </div>
						  </div>
						</div>
						</a>
					  </div>

					  
					  
					  
<div class="modal fade" id="{{$Img->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$Img->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body img-responsive" style="height: 400px;">
       	<img style="width: 100%; height: 100%; " src="{{ asset('image/'.$Img->link) }}">
      </div>
      <div class="modal-footer">
        
        <p>{{$Img->discript}}</p>
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