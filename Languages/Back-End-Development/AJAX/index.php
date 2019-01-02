<?php require("../../../common/header.php"); ?>

<ul class="ajax">
  <li><a href="#intro">Ajax Introduction</a></li>
  <li><a href="#tut1">Changing Data onclick using jQuery</a></li>
  <li><a href="#tut2">Get Data from database and load more comments</a></li>
</ul>

<h1 id="intro">Ajax Introduction</h1>
<h1>What is Ajax?</h1>
<p>Ajax stands for <em>Asynchronous Javascript and XML</em></p>
<p>It is a way for us to basically insert content inside our website from a database or a server <b>without</b> having to <b>refresh</b> the website each time.</p>
<p>Ajax allows you to get data from the database or a server as well.</p>

<h2>Ajax Example</h2>
<p>You have a chat system on your website such as Facebook and whenever you get a notification for a new message it just appear.
  <br>Note* Your browser is <b>NOT</b> refresh.
  <br>In short it prevents you from refreshing your browser each time to check if you have new messages.
</p>

<p>You can use Ajax with either Javascript or jQuery.</p>

<hr>

<br>

<h5 id="tut1">Tutorial 1</h5>
<h6>-- AJAX without PHP & Databases</h6>
<script>
$(document).ready(function(){
$("#btn").click(function(){
// .load(URL to file, post/get, callback )
$("#test").load("data.txt",{Name: "John",LastName:"Smith"}, function(){alert('Are you sure?');
});
});
});
</script>
<div id="test">
  <p>This is the first content!</p>
</div>
<button class="btn" id="btn">Click to change</button>

<br>
<br>

<h5 id="tut2">Tutorial 2</h5>
<h6>-- AJAX with PHP & Databases(SQLSERVER)</h6>

<p>Getting data from database </p>

<script>
$(document).ready(function(){
  var commentCount = 2;
  $("#btnC").click(function(){
    commentCount = commentCount+2;
    $("#comments").load("load-comments.php",{
      commentNewCount:  commentCount
    });
  });
});
</script>

<div id="comments" class="text-success">

  <?php
  $sql = "SELECT TOP 2 * from tbl_comments";
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
</div>

<button class="btn btn-dark" id="btnC">Show more Comments!</button>

<?php require("../../../common/footer.php"); ?>
