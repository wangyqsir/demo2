<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header('content-type:application/json;charset=utf8');
$con=mysql_connect('127.0.0.1', 'root', '');
mysql_query("set names 'utf8'");
//已知的数据变量有
mysql_select_db("mytest", $con);
$result = mysql_query("SELECT * FROM Persons");

// 返回表内所有内容，以json格式
$results = array();
while($row = mysql_fetch_assoc($result))
  {
  $results[] = $row;;
  }
  echo json_encode($results);
// echo '{"errorNumber":455,"redirectUrl":"www.baidu.com"}';
?>