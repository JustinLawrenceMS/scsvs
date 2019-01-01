<?php

/* there's really no simple way to slurp column headers 
 * out of MySQL, so add them as an array here if you wany.
 *
$csvFields = array(
	"col1",
	"col2",
	"col3"
);

 */


$conn = new PDO("mysql:dbname={$_POST["database"]};host={$_POST["hostname"]}", $_POST["username"], $_POST["password"]);
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
//    flush();
//    ob_flush();
}

fclose($fp);


    echo "<p>it's alive</p>";

    echo '<a href="'.$_POST["table"].'.csv">Export</a>';


?>
