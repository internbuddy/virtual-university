<?php 
// Local server (Comment the Cloud DB section to work on Local DB)
// $conn=mysqli_connect('localhost','root','root');
// mysqli_select_db($conn,'k3alpha');
// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
// }
// Un-comment the above 5 lins to connect local DB

// Cloud configuration starts below
$conn = mysqli_init();
mysqli_options ($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
$conn->ssl_set(NULL, NULL, '/var/tmp/rds-ca-2019-root.pem', NULL, NULL);
$db = mysqli_real_connect ($conn, 'k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com', 'root', 'maV01X615', 'k3beta', 3306, NULL, MYSQLI_CLIENT_SSL);
if (!$db)
{
    die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
} 
else { 
    $db_name='k3beta';
}
// Comment the above 11 lines (Cloud configuration) to work on local DB

$app_name="Virtual University";
$app_version="1.0";
$app_logo='<img src="admin/images/logo.png" width="158px" class="brand-logo">';
$version=$app_name." ".$app_version;
$title=$app_name." ".$app_version." A Complete Responsive System";
$footer="<a href='http://www.mavoix.in' target='_blank' class='text-bold-800 grey darken-2'>".$title."</a>";
$project_name="Virtual University";
$footer_content="Designed & Developed By:";
$developed_by="<a href='http://www.mavoix.in' target='_blank' class='text-bold-800 grey darken-2'>Mavoix Solutions Pvt Ltd</a>";
?>

