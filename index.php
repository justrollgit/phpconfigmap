

<style>
<?php $ini_array = parse_ini_file("/config/app.properties"); 
  $hostname=gethostname();?>
  body {background-color:  <?php print($ini_array['color']); ?> }
  
 div.container {
    height: 10em;
    padding: 10px;
    text-align: center;
    background: #<?php print(substr(bin2hex(md5($hostname)), strlen(bin2hex(md5($hostname)))-6, 6)); ?>;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
  
  
</style>


<div class=container>
  <p>
    <h1>Welcome to our little demo ongoing</h1>    <br>
     <b>Hostname</b> : <?php echo gethostname();  ?>
     <br>
<?php
$dburi = getenv("uri");
$dbhost = parse_url($dburi)['host'];
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");
$connection = @ new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    print "<b><H2><img src='https://upload.wikimedia.org/wikipedia/commons/5/52/Nuvola_apps_error.png' height=25 /><font style='color: red;'>Database is down</font></h2></b>";
    exit();
} else {
    print "<h2 style='color: green'><img src=https://upload.wikimedia.org/wikipedia/commons/0/01/Nuvola_apps_krec_green.png height=25 />Connected to the database</h2>";
}
$connection->close();

?>
  </p>
</div>

