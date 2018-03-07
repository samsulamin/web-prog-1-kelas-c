<form method="GET" action="coba-if.php">
	KELAS : <input type="text" name="kelas"><br>
	<input type="submit"  value="Proses">
</form>

<?php
	if(array_key_exists("kelas",$_GET)){
		if($_GET["kelas"]=='4a'){
				//echo 'gak boleh kosong yaa';
				//return;
				echo "kamu di kelas 4a kan.";
		}else if($_GET["kelas"] == '4c'){
			echo"kamu mawasiswa poltek";
		
			//echo ' kelas : '.$_GET["kelas"] . <br>;
			//echo ' kamu dikelas ini ternyata'.$_GET["kelas"] ;
		
	}else{
		echo"silahkan masukan data!";
	}
	}
?>