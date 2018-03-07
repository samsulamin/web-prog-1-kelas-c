<form method="GET" action="coba-if.php">
	KELAS : <input type="text" name="kelas"><br>
	<input type="submit"  value="Proses">
</form>

<?php
	if(array_key_exists("kelas",$_GET)){
		switch($_GET["kelas"]){
			case "4a" :
				echo 'kamu di kelas 4a.';
				break;
			case "4b" :
				echo 'kamu di kelas 4b.';
				break;
			case "4c" :
				echo 'kamu di kelas 4c.';
				break;
			case "4d" :
				echo 'kamu di kelas 4d.';
				break;
		}
	}
?>