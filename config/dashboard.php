<?php
$installed = false; // DON'T CHANGE IT! It changes automatically

$gdps = "Unnamed GDPS"; // Used to title and download
$lrEnabled = 1; // 1 = Level reupload enabled, 0 = disabled
$msgEnabled = 1; // 1 = Messenger enabled, 0 = disabled
$clansEnabled = 1; // 1 = Clans enabled, 0 = disabled
$songEnabled = 12; // 0 = Song reupload disabled, add 1 to enable song file reupload, add 2 to enable song link reupload
$sfxEnabled = 12; // 0 = SFX reupload disabled, add 1 to enable SFX file reupload, add 2 to enable SFX link reupload (not implemented yet)
$convertEnabled = 1; // 1 = Convert SFX to OGG enabled, 0 = disabled
$songSize = 8; // Max song size in megabytes
$sfxSize = 4.5; // Max SFX size in megabytes
$timeType = 1; // How time will show in-game, 0 - default Cvolton time, 1 - Dashboard-like time, 2 - RobTop-like time
// If you changed dashboard's place, change $dbPath in dashboard/incl/dashboardLib.php

// External download links, disables when you have gdpsName.gdpsFileType in dashboard/download directory

$pc = '';
$mac = '';
$android = 'Unnamed GDPS.apk';
$ios = '';

// Launcher executable names (like "launcher.exe"), place them to dashboard/download folder

$pcLauncher = "Unnamed GDPS 0.2 Installer.exe";
$macLauncher = "";
$androidLauncher = "";
$iosLauncher = "";

// Footer socials settings, leave empty to disable

$vk = ''; // Link to your VK page
$discord = 'https://discord.gg/g2WUStyurp'; // Link to your Discord server
$twitter = ''; // Link to your Twitter/X page
$youtube = 'https://youtube.com/@ImNejik'; // Link to your YouTube channel
$twitch = ''; // Link to your Twitch channel

// Third-party resourses, fill it if you use something (mods, textures, etc). Syntax of this thing is: array('AVATAR', 'USERNAME', 'SOCIAL OF THIS USER', 'What this person did (optionally)');

$thirdParty[] = array('https://yt3.googleusercontent.com/EZ149IVvU5JX2Fi6yH7R95NQmKdNsea_gggEvJXA0MIZQ397E_WHLLNCgBjL45npnMZNUkpq=s88-c-k-c0x00ffffff-no-rj', 'RobTop', 'https://store.steampowered.com/app/322170/Geometry_Dash/', 'Geometry Dash Creator');
$thirdParty[] = array('https://avatars.githubusercontent.com/u/5721187', 'Cvolton', 'https://github.com/Cvolton', 'GDPS Core Creator');
$thirdParty[] = array('https://cdn.discordapp.com/avatars/310561826976825344/db7e29c262d84819c5cc8551b9c2b430.png?size=1024', 'Nejik.✦', 'https://youtube.com/@ImNejik', 'Unnamed GDPS Owner');
$thirdParty[] = array('https://avatars.githubusercontent.com/u/49565695?v=4', 'MegaSa1nt', 'https://github.com/MegaSa1nt', 'Awesome Dashboard Creator');
$thirdParty[] = array('https://cdn.discordapp.com/avatars/401472259128164353/02aab902637966de79ef7bada0eb8784.png?size=1024', 'MigMatos', 'https://www.youtube.com/@MigMatos', 'Better Security Provider');
$thirdParty[] = array('https://cdn.discordapp.com/avatars/980234899665612860/34a3eeabdef693ad4614db4ecce28ee3.png?size=1024', 'Cypher', 'https://www.youtube.com/@Cypher0365', 'APK Colaborator');

// SFX/Music libraries, syntax is: array(ID (must be unique), LIBRARY NAME, LIBRARY LINK (not to .dat file), LIBRARY TYPE (0 = only SFX, 1 = only music, 2 = both));
// Template: $customLibrary[] = array(1, '', '', 2);

$customLibrary[] = array(1, 'Geometry Dash', 'https://geometrydashfiles.b-cdn.net', 2); 
$customLibrary[] = array(2, 'GDPSFH', 'https://sfx.fhgdps.com', 0); 
$customLibrary[] = array(3, $gdps, null, 2); // Your GDPS's library, don't remove it
$customLibrary[] = array(4, 'NoxiCloud', 'https://libs.ncservers.xyz', 0);

// SFX converter API links, make one using code from https://github.com/MegaSa1nt/GDPS-ConvertSFX
// Template: $convertSFXAPI[] = "";

$convertSFXAPI[] = "https://niko.gcs.icu";
$convertSFXAPI[] = "https://lamb.gcs.icu"; // You're welcome
$convertSFXAPI[] = "https://omori.gcs.icu";
$convertSFXAPI[] = "https://im.gcs.icu";
?>