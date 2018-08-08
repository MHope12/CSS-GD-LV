$(document).ready(function() {
	
	if(window.location.href.indexOf("id_user") > -1) {
		if($("#v-pills-profile-tab").hasClass("active")){

			$("#v-pills-profile-tab").text("Modificar Usuario")
			$("#v-pills-tabContent h1").text("Modificar Usuario")
		}else{
			$("#v-pills-profile-tab").text("Nuevo Usuario")
			$("#v-pills-tabContent h1").text("Registrar Nuevo Usuario")
		}
		

	}


	$('.table-search').DataTable(
    	{
        responsive: true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        	}
    	}
    );
	$(".treetable").treetable({ expandable: true });

    (function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();

	$(".unlock").click(function(){
		let input_pssw = $(this).parent().parent().find("input");
		let lock = $(this).parent().find(".lock");

		$(input_pssw).attr("type","text")
		$(lock).removeClass("d-none")
		$(this).addClass("d-none")
	});
	$(".lock").click(function(){
		let input_pssw = $(this).parent().parent().find("input");
		let unlock = $(this).parent().find(".unlock");

		$(input_pssw).attr("type","password")
		$(this).addClass("d-none")
		$(unlock).removeClass("d-none")
	});

	$(".wrapper-users .table-users tbody tr").each(function(){
			

		if($(this).hasClass("locked")){
			console.log("1111111")
			let lock = $(this).find(".lock");
			let unlock = $(this).find(".unlock");
			$(lock).addClass("d-none");
			$(unlock).removeClass("d-none");
		}
	})

	$("#select_received").change(function(){

		if($(this)){
			$("#received").removeClass("d-none");
			$("#sent").addClass("d-none");
		}
	})
	$("#select_sent").change(function(){

		if($(this)){
			
			$("#sent").removeClass("d-none");
			$("#received").addClass("d-none");
		}
	})
} );