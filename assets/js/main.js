

// A $( document ).ready() block.

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').click( function() {
		$('body').toggleClass('open');
	});

	$('.search-trigger').click( function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').click( function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

        $( "#alrt" ).click(function() {
            
        });

    function modalDelete(id)
    {
    	$("#exampleModal").modal('toggle');
    	console.log('id', id);
	    $("#btnYes").click(function(){
	    	window.location	="./pengajar.php?delete='" + id + "'";
	    });
    }
    function modalDeletekbp(id)
    {
    	$("#exampleModalp").modal('toggle');
    	console.log('id', id);
	    $("#btnYes").click(function(){
	    	window.location	="./pelajar.php?delete='" + id + "'";
	    });
    }
  function modalEdit(id)
    {
    	$("#editModal").modal('toggle');
    }
	function submitForm()
    {
    	  $("#submitEdit").click();
    }	    
	$( document ).ready(function() {
			var hashValue = location.hash;  
  			hashValue = hashValue.replace(/^#/, '');  
  			console.log(hashValue);
  			if(hashValue==="success"){
  				$("#success").modal('toggle');
  			}
  			else if(hashValue==="successEdit"){
  				$("#successEdit").modal('toggle');
  			}
  			
		});
    $(document).ready(function(){
        $("#psearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#ptable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
	// $('.user-area> a').click( function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });


