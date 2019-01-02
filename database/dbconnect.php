<?php
$serverName = "DESKTOP-P7NVIJC\danisha"; //server name
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"MyLearningPlatform"); //database name
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn) {
     //echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die(print_r(sqlsrv_errors(), true));
}
//
// $sql = "SELECT * from tbl_comments";
// $qry = sqlsrv_query($conn, $sql);
//
// if($qry){
//
// while($row = sqlsrv_fetch_array($qry))
// {
//      echo $row['message'];
// }
// }
// else {
//
//      echo "fail" .mysqli_error();
// }
