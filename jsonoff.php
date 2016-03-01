<?php 
  
$output = '';
if (isset($_POST['myname'])) {
	
    if (!empty($_POST['myname'])) {
    $output = $_POST['myname'];   
    
    } else {
        $output = 'Please type a name';
    }
    if(isset($_POST['fromjs'])) { // if this is sent in JS, trigger an exit
    	echo $output;
        exit; //without this, if javascript enabled there will be two times page content.
    }
    // if JS is disabled, this will never execute. because index fromjs doesn't exist
  }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div id="notification">
		<?php if($output != '' && !isset($_POST['fromjs'])) {
          echo $output;
       } ?>
   </div>

	<form action="" method="POST">
		
		<input type="text" name="myname" id="myname">
		<input type="submit" value="Submit"  id="submit" >

	</form>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">

     $(document).ready(function(){

      $('#submit').click(function(e){

	       var myname = $('#myname').val();
	       $.post("jsonoff.php", {myname : myname, fromjs: true} , function(data){

	       	$('#notification').html(data);

	      });

         e.preventDefault();
      });
     });

    </script>
	
</body>
</html>