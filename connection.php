<?php
$servername ="localhost";
$username ="root";
$password ="";
$databasename ="projectdown";

$con = mysqli_connect($servername, $username, $password, $databasename, 4307);

if($con)
{
    // echo "Connection Succed...";

}
else{
    echo "Connection Failed..".mysqli_connect_error();
}

?>