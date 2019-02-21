<style>
<?php $ini_array = parse_ini_file("/config/app.properties");   ?>
  body {background-color:  <?php print($ini_array['color']); ?> }
</style>


Welcome to our little demo 
<br>
<b>Hostname</b> : <?php echo gethostname();  ?>

<?php
$dburi = getenv("uri");
$dbhost = parse_url($dburi)["host']
$dbuser = getenv("username");
$dbpwd = getenv("password");
$dbname = getenv("database_name");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();

?>
