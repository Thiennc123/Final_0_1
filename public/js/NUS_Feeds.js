$(document).ready(function(){
	$('.main_tab ul a').click(function(){
		$('.main_tab ul a').each(function(){
			$(this).removeClass('active');
		});

		$(this).addClass('active');
	});

	$('div .card').click(function(){
		
		var get_cartTitle = $(this).find('.card-title').text();
		var get_cartText = $(this).find('.card-text').text();
		
		$('#staticBackdropLabel').text(get_cartTitle);
		$('.modal-footer p').text(get_cartText);
		$('#staticBackdrop').modal('toggle');
	});
});

function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src= src;
    preview.style.display = "block";
  }
}



