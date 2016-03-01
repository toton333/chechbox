<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

Check All: <input type="checkbox" id="checkallcountry"><br>
India : <input type="checkbox" class="country" id="india">
USA : <input type="checkbox" class="country" id="usa">
Pakistan : <input type="checkbox" class="country" id="pakistan">
China : <input type="checkbox" class="country" id="china">
Bangladesh : <input type="checkbox" class="country" id="bangladesh">
Japan : <input type="checkbox" class="country" id="japan">
Israel : <input type="checkbox" class="country" id="israel">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script type="text/javascript" >
	
  $(document).ready(function(){

    $('#checkallcountry').click(function(){


    	$('.country').prop('checked', this.checked);
    });

    
    $('.country').change(function(){
     
     var check = ($('.country').filter(':checked').length  == $('.country').length  );
     $('#checkallcountry').prop('checked', check);

    });


  });


</script>
	
</body>
</html>