<?php
$con=mysqli_connect("localhost","root","","oasis");
$con->query("insert pedidos values('".$_POST['txtemail']."','".$_POST['cbocanciones']."')");
$con->close();
?>
<script type="text/javascript">
	top.location.href="index.html";
</script>
