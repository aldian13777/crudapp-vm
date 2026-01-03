<?php
// fetch.php

require 'db.php';

$sql = 'SELECT "Name","Age" FROM "Identity"';

$stmt = $pdo->query($sql);
$datas = $stmt->fetchAll();
