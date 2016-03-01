$("#food").change(function(){//we can use .click() also

	if($("#food").is(':checked')){

          $("#fooddiv").load('food.php');
	}else{

         $("#fooddiv").html("");
	}
});


$("#country").change(function(){

	if($("#country").is(':checked')){

          $("#countrydiv").load('country.php');
	}else{

         $("#countrydiv").html("");
	}
});




