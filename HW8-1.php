<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>投票結果</title>
<style type="text/css">
body {width: 1004px; margin:10px auto;background-image:url(zed.jpg);background-repeat:no-repeat;}
#content {color:#8100E0; font-family:微軟正黑體;font-weight:bold;border:4px solid #1212FF; padding:20px; line-height: 24pt; text-align:center;}
table {width:600px; border:4px solid #ccf; margin:12pt 160px}
th {border:4px solid #454545; line-height: 22pt; text-align:center;padding:2px 5px; color:ivory; background-color:#003}
td {border:2px solid #454545; line-height: 22pt; text-align:center;padding:2px 5px}
caption {font-size:18pt; font-weight:bold; font-family:微軟正黑體}
#banner {text-align:center}
div {margin:20px}
</style>
<script type="text/javascript">
window.onload=function() {
};
</script>
</head>
<body>
<div id="content">
<form >
<table>
<caption>排名結果</caption>
<tr><td>英雄</td><td>票數</td></tr>
<?php
$vote =$_POST['lol1'];
if ($file = fopen("LOL.txt","r")) {
    $i=0;
    while(!feof($file)) {
       $str1= chop(fgets($file));
       list($name[$i], $url[$i]) = explode(",", $str1);
    if($name[$i]==$vote){
        $url[$i]++;
    }      
    $i++;
    }           
    for($j=0;$j<$i;$j++)
        echo"<tr><td>$name[$j]</td><td>$url[$j]</td></tr>";
}
else {
   echo "<tr><td>no no no</td></tr>";
}
fclose($file);
$fa = fopen("LOL.txt", "a");
$fw = fopen("LOL.txt", "w");
fwrite($fw,"");
for($j=0;$j<$i;$j++){
    fwrite($fa,"$name[$j],$url[$j]");
    if($j!=$i-1)
        fwrite($fa,"\n");
}
?>
<tr><td colspan="2"><input type="button" value="back" onclick="javascript:location.href='HW8.php'"/></td></tr>
</table>
</form>
</div>
</body>
</html>