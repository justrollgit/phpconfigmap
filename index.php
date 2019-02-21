<style>
<?php $ini_array = parse_ini_file("/config/app.properties");   ?>
  body {background-color:  <?php print($ini_array['color']); ?> }
  
 div.container {
    height: 10em;
    padding: 10px;
    text-align: center;
    background: yellow;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
  
  
</style>


<div class=container>
  <p>
    <h1>Welcome to our little demo </h1>    <br>
     <b>Hostname</b> : <?php echo gethostname();  ?>
     <br>
<?php
$dburi = getenv("uri");
$dbhost = parse_url($dburi)['host'];
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    print "<b><font style='color: red;'>Database is down</font></b>";
    exit();
} else {
    print "<h2 style='color: green'>Connected to the database</h2>";
}
$connection->close();

?>
  </p>
</div>

