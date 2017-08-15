<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   $myip = $_SERVER['HTTP_CLIENT_IP'];
}else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
   $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
   $myip= $_SERVER['REMOTE_ADDR'];
}
?>

 
<html>
<head>
<title>我上網的 IP</title>
<meta name="keywords" content="whatismyip,查IP,我的ip,ip查詢" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<style type="text/css">
<!--
.style2 {color: #003399}
a:link {
	font-size: 16px;
	text-decoration: none;
}
.style1 {
	color: #808000;
}
-->
</style>
</head>
<body>
<br><br><br><br><br><br><br><br>
<h1 align="center" class="style2" style="font-size:300%;">我的 IP 是 
<font color=green><?php echo $myip ?></font></h1>
<br><br>


<script>
  
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 
Date();a=s.createElement(o),
  
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-299688-4', 'myip.com.tw');
  ga('send', 'pageview');

</script> 
</body>
</html>
