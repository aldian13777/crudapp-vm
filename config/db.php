<?php
// Data source name parameters (host,port,db)
$host = 'ep-restless-dust-aekvtftd.c-2.us-east-2.aws.neon.tech';
$port = 5432;
$db   = 'crudapp';

//Data Source Name (DSN) variable
$dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";

// Database user & pass
$user = 'neondb_owner';
$pass = 'npg_z9PjKMr5dUWz';

// PDO Connection variable
$pdo = new PDO($dsn,$user,$pass);

// test connection
try{
    $pdo;
    echo "Connected";
}
catch (PDOException $e){
    echo "Error". $e->getMessage();
}
