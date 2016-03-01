<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		Check All: <input type="checkbox" id="checkallfood"><br>
	Luchi : <input type="checkbox" class="food" id="luchi">
	Beguni : <input type="checkbox" class="food" id="beguni">
	Nan : <input type="checkbox" class="food" id="nan">
	Chilli paneer : <input type="checkbox" class="food" id="chilli_paneer">
	Garlic Potato : <input type="checkbox" class="food" id="garlic_potato">
	Dahi vada : <input type="checkbox" class="food" id="dahi_vada">
	Lassi : <input type="checkbox" class="food" id="lassi">


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
	   $(document).ready(function(){

	     $('#checkallfood').click(function(){

	         $('.food').prop('checked', this.checked);

	         });

	         $('.food').change(function(){

               var check = ($('.food').filter(':checked').length == $('.food').length);

               $('#checkallfood').prop('checked', check);


	         });

	     

	});

	</script>
	
</body>
</html>