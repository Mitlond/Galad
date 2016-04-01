<?php
$host='localhost';
$dbname='Imladris';
$user='diman';
 $password='12345';
try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec("set names utf8");
}
catch(PDOException $e) {
    echo $e->getMessage();
	}
	$stmt = $db->query('SELECT * FROM  Lorien ON id= ?;');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
foreach ($stmt as $row)
{
    echo "<p>".  $row['id']. "&nbsp;" . $row['Name']. "&nbsp;" . $row['Fam']."</p>";
}
?>