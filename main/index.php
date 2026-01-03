<?php
require '/var/www/crudapp/config/fetch.php';

foreach ($datas as $row) {
	echo htmlspecialchars($row['Name']) . "<br>";
	echo htmlspecialchars($row['Age']) . "<br>";
}
