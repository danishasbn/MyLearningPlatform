<?php
include($_SERVER['DOCUMENT_ROOT'].'MyLearningPlatform/database/dbconnect.php');
$commentNewCount = $_POST['commentNewCount'];
$sql = "SELECT TOP $commentNewCount * from tbl_comments";
$qry = sqlsrv_query($conn, $sql);

if($qry){
  while ($row = sqlsrv_fetch_array($qry)) {
    echo "<p>";
    echo $row['author'];
    echo "</br>";
    echo $row['message'];
    echo "</p>";
  }
}
else {
  echo "There are no comments!";
}
?>
