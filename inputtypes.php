<?php

if(isset($_POST['submit'])){
    if (isset($_POST['locations'])) {
        $locations = $_POST['locations'];
        print_r($locations);
    }else{
        echo 'Please select a location';
    }
    exit; // with this trick feedback data in ajax won't have the whole page
}

?>



<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8">
	</head>
	<body>

	<div id="feedback"></div>	

     <form id="myForm" action="" method="post">

         location1: <input type="checkbox" name="locations[]" id="location1" value="location1"/>
         location2: <input type="checkbox" name="locations[]" id="location2" value="location2"/><br>
         <input type="submit" name="submit" id="submit" value="Submit" />
     </form>





         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         <script type="text/javascript">
           
            $(document).ready(function(){

              
               $('#submit').click(function(e){

                 var submit = $('#submit').val();
                 
                  var locations = [];

                 $('input:checkbox:checked').each(function(){

                     
                      locations.push($(this).val());

                 });

                 $.post('inputtypes.php', {locations: locations, submit:submit}, function(data){

                        $('#feedback').html(data);



                 });

                 e.preventDefault();

               });

            });

         </script>

	</body>
</html>