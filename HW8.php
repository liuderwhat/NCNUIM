<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>array, foreach, sort</title>
<style type="text/css">
body {width: 1004px; margin:10px auto; background-image:url(lol.jpg);background-repeat:no-repeat;}
#content {color:#E09200;border:2px solid #ccc; padding:20px; line-height: 24pt; text-align:center;font-family:微軟正黑體}
table {width:600px; border:2px solid #ccf; margin:12pt 160px;font-family:微軟正黑體}
th {border:2px solid #99c; line-height: 22pt; text-align:center;padding:2px 5px; color:#00008A}
td {border:1px solid #99c; line-height: 22pt; text-align:center;padding:2px 5px}
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
<form action="HW8-1.php" method="post">
<caption>英雄聯盟夯角排名<caption>
<table>
<tr><th>英雄</th><th>票數</th><th>投票</th></tr>
<?php
if($file = fopen("LOL.txt","r")){//讀檔
    while (!feof($file)) {//FEOF（）函數檢查“檔案結尾”（EOF）已經達成。
        $str1 = chop(fgets($file));
        list($name, $url) = explode(",",$str1);
        echo "<tr><th>$name</th><th>$url</th><th><input type=\"radio\" 
        name=\"lol1\" value=\"$name\" checked=\"checked\"></th></tr>";
    }
}
else {
   echo "<tr><th>NO NO NO</th></tr>";
}
fclose($file);//FCLOSE（）函數用於關閉已打開的文件。
?>
<tr><td colspan="3"><input type="submit" value="submit" id="lolol"/></td></tr>
</table>
</form>
</div>
</body>
</html>