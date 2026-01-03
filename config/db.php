<?php
// db.php

$host = 'ep-restless-dust-aekvtftd.c-2.us-east-2.aws.neon.tech';
$port = 5432;
$db   = 'crudapp';
$user = 'neondb_owner';
$pass = 'npg_z9PjKMr5dUWa';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
