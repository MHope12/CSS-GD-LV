
$(document).ready(function() {
	$(".unlock").click(function(){
		let input_pssw = $(this).parent().parent().find("input");
		let lock = $(this).parent().find(".lock");

		$(input_pssw).attr("type","text")
		$(lock).removeClass("hide")
		$(this).addClass("hide")
	});
	$(".lock").click(function(){
		let input_pssw = $(this).parent().parent().find("input");
		let unlock = $(this).parent().find(".unlock");

		$(input_pssw).attr("type","password")
		$(this).addClass("hide")
		$(unlock).removeClass("hide")
	});
    $("#datatable-responsive tbody tr").each(function(){
        if($(this).hasClass("locked")){
            let lock = $(this).find(".lock");
            let unlock = $(this).find(".unlock");
            $(lock).addClass("hide");
            $(unlock).removeClass("hide");
        }
    })

	$('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
});