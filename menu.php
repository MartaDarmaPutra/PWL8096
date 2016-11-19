<link href="assets/css/main.css" rel="stylesheet">
<?php

include "pengaturan/fungsi_alert.php";

  echo "
  <ul class='nav navbar-nav'>
	<li><a href=?module=home>Beranda</a></li>
	<li><a href=?module=diagnosa>Diagnosa Kerusakan</a></li>

	";
	
	if(isset($_SESSION['username']) and isset($_SESSION['password'])){
	echo "
	<li><a href=?module=kerusakan>Data Jenis Kerusakan</a></li>
	<li><a href=?module=solusi>Data Solusi</a></li>
	<li><a href=?module=pertanyaan>Data Pertanyaan</a></li>
	<li><a href=?module=password>Ubah Password</a></li>
	<li><a href=\"JavaScript: confirmIt('Anda yakin akan logout dari aplikasi ?','logout.php','','','','u','n','Self','Self')\" onMouseOver=\"self.status=''; return true\" onMouseOut=\"self.status=''; return true\">Logout</a></li>";
	}else{
	echo "
	<br></ul>
	Login Admin
	<form method='post' action='login.php'>
        <table>
        <tr><td>Username</td>
        <td><input type='text' name='username' size='15'></td>
		</tr>
        <tr><td>Password</td>
        <td><input type='password' name='password' size='15'></td>
		</tr>
		<tr><td></td><td><input type=image src=gambar/login.png name=submit width='25' height='25' title='Login' alt='Login'></td></tr>
        </table>
        
      </form>
	 
	";
	}
	echo "
	
  ";
 
?>
