<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</head>
<body >
<div class="container-fluid">
<header class="row text-center" >
	<div class="col-12 ">
		<br><h3 class="text-center font-weight-bold">Los Mas Pedidos</h3><br>
		<?php 
			$con=mysqli_connect("localhost","root","","oasis");
			$res=$con->query("select c.idcancion,c.cancion,count(p.idcancion) from canciones c inner join pedidos p on c.idcancion=p.idcancion group by p.idcancion order by 3 desc");
			echo '<table class="table">  <thead class="thead-dark"> <tr>
      <th scope="col">Video</th>
      <th scope="col">#</th>
  
    </tr>
  </thead> ';
			while ($registro=mysqli_fetch_row($res))
			{
				echo ' <tbody>
    <tr><td>'.$registro[1].'</td><td>'.$registro[2].'</td></tr></tbody>';
			}
			$con->close();
			echo '</table>'
		?>
	</div>		
</div>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
</body>
</html>