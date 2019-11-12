<!DOCTYPE html>
<html class="noSelect" lang="en">
<head>
	<meta charset="UTF-8">
<?php
	include './html/description.php';
?>
	<meta name="keywords" content="Map,Election,Political,Interactive,Simulator,Electoral,270,2020,USA,Presidential">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="true">
	
	<meta property="og:image:type" content="image/png">
	<meta property="og:site_name" content="yapms.com">
	<meta property="og:type" content="article">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="yapms.com">
	<meta name="twitter:description" content="Interactive Political Maps">

	<meta name="theme-color" content="#ffffff"/>

	<link rel="icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="./res/yapms-192.png"/>
	<link rel="shortcut icon" href="https://www.yapms.com/favicon.ico" type="image/x-icon"/>
	<link rel="manifest" href="./manifest.json">

	<link href="https://yapms.org" rel="preconnect">
	<link href="https://www.google-analytics.com" rel="preconnect">
	<link href="https://www.google-analytics.com" rel="preconnect">
	<link href="https://www.gstatic.com" rel="preconnect">
	<link href="https://www.google.com" rel="preconnect">
	<link href="https://www.googletagmanager.com" rel="preconnect">
	<link href="https://fonts.googleapis.com" rel="preconnect">

	<?php
		$mobile = false;

		echo "<!-- {$_SERVER['HTTP_USER_AGENT']} -->";

		if(strpos($_SERVER['HTTP_USER_AGENT'], 'Mobi')) {
			$mobile = true;	
			echo '<script>var mobile = true;</script>';
		} else {
			$mobile = false;	
			echo '<script>var mobile = false;</script>';
		};

		if(isset($_GET["autoReload"]) && !empty($_GET["autoReload"])) {
			echo '<script>
				var php_auto_reload = true;
				</script>';
		} else {
			echo '<script>
				var php_auto_reload = false;
				</script>';
		}

		if(isset($_GET["preventEdit"]) && !empty($_GET["preventEdit"])) {
			echo '<script>
				var php_candidate_edit = false;
				</script>';
		
		} else {
			echo '<script>
				var php_candidate_edit = true;
				</script>';
		}

		if(isset($_GET["u"]) && !empty($_GET["u"])) {
			echo '<script>
				var php_load_user = true;
				var php_load_user_id = "' . $_GET["u"] . '";' .
				'</script>';
		} else {
			echo '<script>
				var php_load_user = false;
				var php_load_user_id = "-1";
				</script>';
		}

		if(isset($_GET["m"]) && !empty($_GET["m"])) {
			echo '<script>' .
				'var php_load_map = true;' .
				'var php_load_type_map = false;' .
				'var php_load_map_id = "' .$_GET["m"] . '";' .
				'</script>';	
			echo '<meta property="og:image:width" content="1200">
			<meta property="og:image:height" content="1200">';
			if(isset($_GET["u"]) && !empty($_GET["u"])) {
				echo "<meta property='og:image:secure_url' content='https://yapms.org/users/{$_GET['u']}/{$_GET["m"]}.png'>
				<meta property='og:image' content='https://yapms.org/users/{$_GET['u']}/{$_GET["m"]}.png'>
				<meta name='twitter:image' content='https://yapms.org/users/{$_GET['u']}/{$_GET['m']}.png'>
				<meta property='og:url' content='https://www.yapms.com/app/?u={$_GET['u']}&m={$_GET['m']}'>";
			} else {
				echo "<meta property='og:image:secure_url' content='https://yapms.org/maps/{$_GET['m']}.png'>
				<meta property='og:image' content='https://yapms.org/maps/{$_GET["m"]}.png'>
				<meta name='twitter:image' content='https://yapms.org/maps/{$_GET['m']}.png'>
				<meta property='og:url' content='https://www.yapms.com/app/?m={$_GET['m']}'>";
			}
		} else if(isset($_GET["t"]) && !empty($_GET["t"])) {
			echo '<script>' .
				'var php_load_map = false;' .
				'var php_load_type_map = true;' .
				'var php_load_map_id = "' . $_GET["t"] . '";' .
			     '</script>';
			echo '<meta property="og:url" content="https://www.yapms.com/app/?t=' . $_GET["t"] . '">
			<meta property="og:image" content="http://www.yapms.com/app/res/yapms-96.png">
			<meta property="og:image:secure_url" content="https://www.yapms.com/app/res/yapms-96.png">
			<meta name="twitter:image" content="https://www.yapms.com/app/res/yamps-96.png">';
		} else {
			echo '<script>' .
				'var php_load_map = false;' .
				'var php_load_type_map = false;' .
				'var php_load_map_id = "0";' .
			     '</script>';
			echo '<meta property="og:url" content="https://www.yapms.com/app/">
			<meta property="og:image" content="http://www.yapms.com/app/res/yapms-96.png">
			<meta property="og:image:secure_url" content="https://www.yapms.com/app/res/yapms-96.png">
			<meta name="twitter:image" content="https://www.yapms.com/app/res/yamps-96.png">';
		}
	?>
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-1660456925957249",
		enable_page_level_ads: true});
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132710089-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-132710089-1');
	</script>

	<style>
	<?php
	include './style/fonts.css';
	?>
	</style>

	<link rel="stylesheet" type="text/css" href="./style/YAPMS.css">
	<?php
	if($mobile) {
		echo '<link rel="stylesheet" type="text/css" href="./style/mobile.css">';
	}
	?>

	<script async src="./res/fontawesome/js/all.min.js"></script>

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"rBAMt1Y1Mn20Io", domain:"yapms.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=rBAMt1Y1Mn20Io" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

</head>

<body id="body" onresize="onResize()">

<div id="yapms">
<div id="menu-div">
	<div class="click-button" onclick="MapLoader.clearMap()" style="white-space: nowrap;">
	<i class="fas fa-window-close"></i> Clear
	</div>
	
	<div class="click-button" onclick="displayMenu('mapmenu')" style="white-space: nowrap;">
	<i class="fas fa-map"></i> Map
	</div>

	<div id="modebutton-paint" class="click-button mode-button" onclick='setMode("paint")' style='opacity: 0.5'>
		<i class="fas fa-paint-brush"></i>
		<div class="tooltip-menu">
			Paint
		</div>
	</div>
	<div id="modebutton-delete" class="click-button mode-button" onclick='setMode("delete")'>
		<i class="fas fa-eraser"></i>
		<div class="tooltip-menu">
			Disable	
		</div>
	</div>
	<div id="modebutton-ec" class="click-button mode-button" onclick='setMode("ec")'>
		<i class="fas fa-edit"></i>
		<div class="tooltip-menu">
			EC Edit
		</div>
	</div>

<?php
	if($mobile === false) {
	echo '<div id="lockbutton" class="click-button lock-button" onclick="MapManager.toggleLockMap()">
		<i class="fas fa-lock"></i>
		<div class="tooltip-menu">
			Lock Map
		</div>
		</div>';
	}
?>

	<div class="click-button" id="share-button" onclick="displayMenu('sharemenu-autocenter');" style="white-space: nowrap;">
	<i class="fas fa-share-alt"></i> Share Map
	</div>

	<div class="click-button" onclick="displayMenu('thememenu')" style="white-space: nowrap;">
	<i class="fas fa-palette"></i> Theme
	</div>

	<div class="click-button" onclick="displayMenu('chartmenu')" style="white-space: nowrap;">
	<i class="fas fa-chart-pie"></i> Chart 
	</div>

<?php
/*if($mobile === false) {
	echo '<div class="click-button" onclick="displayMenu(\'loadmenu\')" style="white-space: nowrap;">
		<i class="fas fa-upload"></i> Load
		</div>';
}*/
?>

	<div class="click-button" onclick="displayMenu('miscmenu')" style="white-space: nowrap;">
	<i class="fas fa-clipboard"></i> Misc
	</div>

	<div id="login-button" class="customGPlusSignIn click-button" style="white-space: nowrap; margin-left: auto;" onclick='displayMenu("loginmenu");'>	
		<i class="fas fa-sign-in-alt"></i> Login
	</div>
	<div id="mymaps-button" class="click-button" style="margin-left: auto; white-space: nowrap; display: none;" onclick='Account.getMaps();'>
		My Maps
	</div>
	<div id="account-button" class="click-button" style="display: none;" onclick='displayMenu("accountmenu");'>
		Account
	</div>
	
	<div class="click-button" style="white-space: nowrap;">
	<a class="click-button" href="https://www.yapms.com/privacypolicy.html" target="_blank" rel="noreferrer">
	<i class="fas fa-user-secret"></i> Privacy Policy
	</a>
	</div>

<?php
/* margin-left: auto; moves the button all the way to the right */
if($mobile === false) {
	echo '
<div class="click-button" onclick="toggleYAPNews()" style="white-space: nowrap; margin-left: 0px;">
<i class="fas fa-bars"></i> Sidebar
</div>';
}
?>
</div>

<div id="application-loading">
	<div id="application-loading-div">
		<object id="application-loading-image" type="image/svg+xml" data="./html/loading.svg"></object>
	</div>
</div>

<div id="application-mysaves" style="display: none;">
	<?php include './html/menu/application-mysaves.php'; ?>
</div>

<div id="application-sidebar-div">
<div id="application">
	<div id="legend-div"></div>
	<div id="chart-div">
		<div id="chart">
		<canvas id="chart-canvas" width="100" height="100"></canvas>
		</div>
		<?php
			include 'html/battlechart.html';
		?>
		<div id="logo-div">
		</div>
		<div id="yapms-watermark" onclick='window.open(window.location, "_blank");'>
			<div id="yapms-watermark-header">
				Powered By
			</div>
			<div id="yapms-watermark-graphic">
				yapms.com
			</div>
		</div>
	</div>
	<div id="map-div"></div>
</div>
<?php
if($mobile === false) {
	echo '<div id="sidebar">
		<div id="sidebar-social">
		<a id="sidebar-discord-link" class="social-link" href="https://discord.gg/WQh5fHU" target="_blank"><div id="sidebar-discord" class="sidebar-button">
			Discord
		</div></a>
		<a id="sidebar-android-link" class="social-link" href="https://play.google.com/store/apps/details?id=com.fishstudio.yapms&hl=en_US" target="_blank"><div id="sidebar-android" class="sidebar-button">
			Android
		</div></a>
		<a id="sidebar-reddit-link" class="social-link" href="https://www.reddit.com/r/YAPms/" target="_blank"><div id="sidebar-reddit" class="sidebar-button">
			Reddit
		</div></a>
		<a id="sidebar-twitter-link" class="social-link" href="https://twitter.com/YAPmsOfficial" target="_blank"><div id="sidebar-twitter" class="sidebar-button">
			Twitter
		</div></a>
		</div>
		<div id="sidebar-header">
			<h1>
				YAPms
			</h1>
		</div>

		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle adslot_sidebar"
		     style="display:inline-block;width:336px;height:280px"
		     data-ad-client="ca-pub-1660456925957249"
		     data-ad-slot="8033943742"></ins>
		<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

		<div id="sidebar-popularvote" class="sidebar-box">
			<h3>
				<span>
				State Popular Vote
				</span>
			</h3>
			<div id="popularvote-message">
				Select a State
			</div>
			<div id="popularvote-state-title">
			</div>
			<div id="popularvote-ranges">
			</div>
		</div>
		<div id="sidebar-national-popularvote" class="sidebar-box">
			<h3>
				<span>
					National Popular Vote
				</span>
			</h3>
			<div id="national-popularvote-ranges">
			</div>
		</div>
		<div id="sidebar-popularvote-settings" class="sidebar-box">
			<h3>
				Settings
			</h3>
			<div class="sidebar-hover-popup"><input type="checkbox" id="popularvote-automargins" onclick="autoMarginsOnClick();" checked>Auto Margins
				<div class="tooltip-text">
					Setting the popular vote will also set the color of a state
				</div>
			</div>
			<div class="sidebar-hover-popup"><input type="checkbox" id="popularvote-clicksetpv" checked>Auto Popular Vote
				<div class="tooltip-text">
					Clicking on a district will set the popular vote to max
				</div>
			</div>
			<div class="sidebar-hover-popup"><input type="checkbox" id="popularvote-avoidalmargins" checked>Avoid Auto AL
				<div class="tooltip-text">
					Clicking on a district in Nebraska or Maine will not calculate the margin for the AL vote.	
				</div>
			</div>
		</div>
		<div id="sidebar-congress" class="sidebar-box">
			<h3><span id="sidebar-congress-district">District</span></h3>
			<div id="sidebar-congress-representative">
			</div>
			<div id="sidebar-congress-party">
			</div>
		</div>
		<div id="sidebar-shortcuts" class="sidebar-box">
			<h3>Shortcuts</h3>
			<ul>
				<li>
					F - Hold down to quickly fill in districts
				</li>
			</ul>
		</div>';

		$url = "";
		$title = "";
	
		switch($_GET["t"]) {
			case "USA_2020_cook":
			$url = "https://cookpolitical.com";
			$title = "cookpolitical.com";
			break;
			case "USA_2020_house_cook":
			$url = "https://cookpolitical.com/index.php/ratings/house-race-ratings";
			$title = "cookpolitical.com";
			break;
			case "USA_2020_sabatos":
			$url = "http://crystalball.centerforpolitics.org/crystalball/2020-president/";
			$title = "centerforpolitics.org";
			break;
			case "USA_2020_inside":
			$url = "https://insideelections.com/ratings/president";
			$title = "insideelections.com";
			break;
		}
		
		if($url !== "" && $title !== "") {
			echo "<div id='sidebar-source'>
				<div class='sidebar-box'>
					<h3>
						Source
					</h3>
					<a href='{$url}' target='_blank'>{$title}</a>
				</div>
			</div>";
		}
	
		echo '<div id="sidebar-congress-contested">
			<div class="sidebar-box">
				<h2>
					Contested Seats
				</h2>
			</div>
		</div>
			<div id="yapnews-articles">
			</div>
		</div>';
}
?>
</div>
<?php
if($mobile) {
echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mobile-ad -->
<ins class="adsbygoogle adslot_mobile"
	style="display:inline-block;"
	data-full-width-responsive="true"
	data-ad-client="ca-pub-1660456925957249"
	data-ad-slot="8771249229"
</ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>';
}
?>
</div>

<div id="demdel" class="popup selectmenu">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 id="demdel-message" class="selectmenu-display-header-text"></h2>
	</div>
	</div>
	<div id="demdel-ranges" class="selectmenu-content">
	</div>
	<input id="demdel-state-name" type="hidden">
	<button class="setbutton" onclick="setDelegates(this)">set</button>
</div>

<div id="ecedit" class="popup selectmenu">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 id="ecedit-message" class="selectmenu-display-header-text"></h2>
	</div>
	</div>
	<div class="selectmenu-content">
	<div class="selectmenu-section"><input id="state-ec" type="number" name="value" min="1" max="10000" step="1"></div>
	<div class="selectmenu-button" onclick="State.setEC()">
		<div class="selectmenu-button-text">Apply</div>
	</div>
	<input id="state-id" type="hidden">
	</div>
</div>

<div id="candidateedit" class="popup selectmenu">
	<input id="candidate-originalName" type="hidden">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 id="candidateedit-message" class="selectmenu-display-header-text">Candidate Edit</h2>
	</div>
	</div>
	<div class="selectmenu-content">
	<div class="selectmenu-button">Name <input id="candidate-name" type="text" name="name"></div>
	<div class="selectmenu-section">Solid <input id="candidate-solid" type="color"></div>
	<div class="selectmenu-section">Likely <input id="candidate-likely" type="color"></div>
	<div class="selectmenu-section">Lean <input id="candidate-lean" type="color"></div>
	<div class="selectmenu-section">Tilt <input id="candidate-tilt" type="color"></div>
	<div class="selectmenu-button" onclick="CandidateManager.setCandidate()">
		<div class="selectmenu-button-text">Apply</div>
	</div>
	<div class="selectmenu-button" onclick='CandidateManager.deleteCandidate()'>
		<div class="selectmenu-button-text">Delete</div>
	</div>
	</div>
</div>

<div id="customcolormenu" class="popup selectmenu">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 class="selectmenu-display-header-text">Custom Color Edit</h2>
	</div>
	</div>
	<div class="selectmenu-content">
	<input id="custom-color-name" type="hidden">
	<div class="selectmenu-section">Solid <input id="solidcustom" type="color"></div>
	<div class="selectmenu-section">Likely <input id="likelycustom" type="color"></div>
	<div class="selectmenu-section">Leaning <input id="leaningcustom" type="color"></div>
	<div class="selectmenu-section">Tilting <input id="tiltingcustom" type="color"></div>
	<div class="selectmenu-section" onclick="CandidateManager.saveCustomColors(); displayAddCandidateMenu()">Set</div>
	</div>
</div>

<div id="addcandidatemenu" class="popup selectmenu">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 class="selectmenu-display-header-text">Add Candidate</h2>
	</div>
	</div>
	<div class="selectmenu-content">
	<div class="selectmenu-section">Name<input id="name" type="text"></div>
	<a class="selectmenu-button selectmenu-red" onclick='CandidateManager.setColors("red")'>
		<div class="selectmenu-button-text">Red Colors</div>
	</a>
	<a class="selectmenu-button selectmenu-blue" onclick='CandidateManager.setColors("blue")'>
		<div class="selectmenu-button-text">Blue Colors</div>
	</a>
	<a class="selectmenu-button selectmenu-green" onclick='CandidateManager.setColors("green")'>
		<div class="selectmenu-button-text">Green Colors</div>
	</a>
	<a class="selectmenu-button selectmenu-yellow" onclick='CandidateManager.setColors("yellow")'>
		<div class="selectmenu-button-text">Yellow Colors</div>
	</a>
	<div class="selectmenu-button-double">
		<a id="custom1button" class="selectmenu-button-left selectmenu-button selectmenu-button-bold" onclick='CandidateManager.setColors("custom1")'>
			<div class="selectmenu-button-text">Custom 1</div>
		</a>	
		<a class="selectmenu-button-right selectmenu-button fas fa-cog"
			onclick='displayCustomColorMenu("custom1")'></a>
	</div>
	<div class="selectmenu-button-double">
		<a id="custom2button" class="selectmenu-button-left selectmenu-button selectmenu-button-bold" onclick='CandidateManager.setColors("custom2")'>
			<div class="selectmenu-button-text">Custom 2</div>
		</a>	
		<a class="selectmenu-button-right selectmenu-button fas fa-cog"
			onclick='displayCustomColorMenu("custom2")'></a>
	</div>
	<div class="selectmenu-button-double">
		<a id="custom3button" class="selectmenu-button-left selectmenu-button selectmenu-button-bold" onclick='CandidateManager.setColors("custom3")'>
			<div class="selectmenu-button-text">Custom 3</div>
		</a>	
		<a class="selectmenu-button-right selectmenu-button fas fa-cog"
			onclick='displayCustomColorMenu("custom3")'></a>
	</div>
	<div class="selectmenu-button-double">
		<a id="custom4button" class="selectmenu-button-left selectmenu-button selectmenu-button-bold" onclick='CandidateManager.setColors("custom4")'>
			<div class="selectmenu-button-text">Custom 4</div>
		</a>	
		<a class="selectmenu-button-right selectmenu-button fas fa-cog"
			onclick='displayCustomColorMenu("custom4")'></a>
	</div>
	<div class="selectmenu-section">Solid <input id="solid" type="color"></div>
	<div class="selectmenu-section">Likely <input id="likely" type="color"></div>
	<div class="selectmenu-section">Leaning <input id="leaning" type="color"></div>
	<div class="selectmenu-section">Tilt <input id="tilting" type="color"></div>
	<div class="selectmenu-button" onclick="CandidateManager.addCandidate(); closeAllPopups();">
		<div class="selectmenu-button-text">Add</div>
	</div>
	</div>
</div>

<div id="mapmenu" class="popup selectmenu">
	<?php require './html/menu/mapmenu.php'; ?>
</div>

<div id="mapmenu-usa" class="popup selectmenu">
	<?php require './html/menu/mapmenu-usa.php'; ?>
</div>

<div id="mapmenu-usa-historical" class="popup selectmenu">
	<?php require './html/menu/mapmenu-usa-historical.php'; ?>
</div>

<div id="mapmenu-russia" class="popup selectmenu">
	<?php require './html/menu/mapmenu-russia.php'; ?>
</div>

<div id="mapmenu-netherlands" class="popup selectmenu">
	<?php require './html/menu/mapmenu-netherlands.php'; ?>
</div>

<div id="mapmenu-germany" class="popup selectmenu">
	<?php require './html/menu/mapmenu-germany.php'; ?>
</div>

<div id="mapmenu-canada" class="popup selectmenu">
	<?php require './html/menu/mapmenu-canada.php'; ?>
</div>

<div id="mapmenu-brazil" class="popup selectmenu">
	<?php require './html/menu/mapmenu-brazil.php'; ?>
</div>

<div id="mapmenu-australia" class="popup selectmenu">
	<?php require './html/menu/mapmenu-australia.php'; ?>
</div>

<div id="mapmenu-uk" class="popup selectmenu">
	<?php require './html/menu/mapmenu-uk.php'; ?>
</div>

<div id="mapmenu-switzerland" class="popup selectmenu">
	<?php require './html/menu/mapmenu-switzerland.php'; ?>
</div>

<div id="mapmenu-lte" class="popup selectmenu">
	<?php require './html/menu/mapmenu-lte.php'; ?>
</div>

<div id="chartmenu" class="popup selectmenu">
	<?php require './html/menu/chartmenu.php'; ?>
</div>

<div id="thememenu" class="popup selectmenu">
	<?php require './html/menu/thememenu.php'; ?>
</div>

<div id="sharemenu" class="popup selectmenu">
	<?php require './html/menu/sharemenu.php'; ?>
</div>

<div id="sharemenu-autocenter" class="popup selectmenu">
	<?php require './html/menu/sharemenu-autocenter.php'; ?>
</div>

<div id="loadmenu" class="popup selectmenu">
	<?php require './html/menu/loadmenu.php'; ?>
</div>

<div id="loginmenu" class="popup selectmenu">
	<?php require './html/menu/loginmenu.php'; ?>
</div>

<div id="forgotpasswordmenu" class="popup selectmenu">
	<?php require './html/menu/forgotpasswordmenu.php'; ?>
</div>

<div id="registermenu" class="popup selectmenu">
	<?php require './html/menu/registermenu.php'; ?>
</div>

<div id="passwordmenu" class="popup selectmenu">
	<?php require './html/menu/passwordmenu.php'; ?>
</div>

<div id="accountmenu" class="popup selectmenu">
	<?php require './html/menu/accountmenu.php'; ?>
</div>

<div id="miscmenu" class="popup selectmenu">
	<?php require './html/menu/miscmenu.php'; ?>
</div>

<div id="versionmenu" class="popup selectmenu">
	<?php require './html/menu/versionmenu.php'; ?>
</div>

<div id="notification" class="popup selectmenu">
	<div class="selectmenu-header">
	<div class="selectmenu-controls">
	       <object class="closebutton" type="image/svg+xml">Close</object>
	</div>
	<div class="selectmenu-display-header">
		<h2 id="notification-title"></h2>
	</div>
	</div>
	<div class="selectmenu-content">
	<a class="selectmenu-section" id="notification-message"></a>
	</div>
</div>

<div id="notification-update-serviceworker" class="popup selectmenu">
	<div class="selectmenu-header">
	<object class="closebutton" type="image/svg+xml">Close</object>
	<h2>New Version Installed</h2>
	</div>
	<div class="selectmenu-content">
	<div class="selectmenu-section">Click reload to start using the update</div>
	<div class="selectmenu-button" onclick='closeAllPopups(); location.reload();'>Reload</div>
	<div class="selectmenu-button" onclick="closeAllPopups();">Skip</div>
	</div>
</div>

<script src="https://www.google.com/recaptcha/api.js?render=6LeDYbEUAAAAANfuJ4FxWVjoxPgDPsFGsdTLr1Jo"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script> 
<script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="./src/YAPMS.js"></script>
<?php 
if($mobile === true) {
	echo '<script>';
	require './src/mobile.js';
	echo '</script>';
} else {
	echo '<script>';
	require './src/yapnews.js';
	echo '</script>';
}
?>
<script>
if('serviceWorker' in navigator) {
	console.log('Attempting to register service worker');
	navigator.serviceWorker
	.register('../sw.js')
	.then(function(a) {
		console.log('SW: registered');
		if(typeof gtag !== 'undefined') {
			gtag('event', 'upgrade', {
				'event_category': 'upgrade',
				'event_label': "SW Register " + currentCache,
				'non_interaction': true
			});
		}
	}, function(err) {
		console.log('SW: register error... ', err);
	});
} else {
	console.log('No service worker detected');
}
</script>
</body>
</html>
