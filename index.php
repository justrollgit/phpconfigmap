<style>
<?php $ini_array = parse_ini_file("/config/app.properties");   ?>
  body {background-color:  <?php print($ini_array['color']); ?> }
</style>


<h1>Welcome to our little demo </h1>
<br>
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
    print "<h2 style='color: green'>Connected to the database</h2>");
}
$connection->close();

?>
