<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-dark">


<?php

/* there's really no simple way to slurp column headers 
 * out of MySQL, so add them as an array here if you want.
 *
$csvFields = array(
	"col1",
	"col2",
	"col3"
);

 */

$database = trim($_POST["database"]);
$hostname = trim($_POST["hostname"]);
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

$conn = new PDO("mysql:dbname=$database;host=$hostname", $username, $password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $stmt = $conn->prepare("select * from {$_POST['table']}");

    $stmt->execute();

    $spreadsheet = $stmt->fetchAll(PDO::FETCH_NUM);
    
    
/* uncomment this to insert your column headers
 *
array_unshift($spreadsheet, $csvFields);
 *
 */

/* I like to enclose text like ="text" because it seems to cause fewer issues
 * especially with Microsoft Software.  It will cause problems with numbers so
 * uncomment and manipulate this code accordingly.
 
 
 for($i=0; $i<count($spreadsheet); $i++){

	for($j=0; $j<count($spreadsheet[$i]); $j++){

		$spreadsheet[$i][$j] = '="'.$spreadsheet.'"';

	}

}
 */

$fp = fopen("{$_POST['table']}.csv", 'w');
for($i=0;$i<count($spreadsheet);$i++)
{
    fputcsv($fp, $spreadsheet[$i]);
}

fclose($fp);


    echo '<p class="text-light">It'."'".'s alive</p>';

    echo '<a href="'.$_POST["table"].'.csv"><button class="btn btn-secondary">Export</button></a>';


?>
</body>
</html>
