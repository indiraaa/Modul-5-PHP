<html>
  <head>
    <title> Volume Kerucut </title>
  </head>

  <body>
    <h2> Menghitung Volume Kerucut </h2>
    <hr size="2">
    <?php
	    $jari = $_POST['jarijari'];

    	if ($_POST['jarijari']==""){
		    echo"Masukan angka dulu...";
		    echo"<form action='volumekerucut.html'>
			        	<input type='submit' value='Back'>
			       </form>";
	    } else {
		    $phi = $_POST['phi'];
		    $hitung = (1/3*$phi)*($jari*$jari);
		    echo"Rumus = (1/3*$phi)*($jari*$jari) <br>";
		    echo"Jari-jari = $jari <br><br>";
		    echo"Volume Kerucutnya = $hitung cm";
		    echo"<form action='volumekerucut.html'>
			        	<input type='submit' value='Back'>
			       </form>";
	    }
    ?>
 </body>
</html>
