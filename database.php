<?php
//function to connect to a mySQL db server

function getDBConnection(){
    // $host = "us-cdbr-iron-east-05.cleardb.net";
    // $user = "b724345846f34e";
    // $pass = "958d7a51";
    // $dbname = "heroku_90e40dfb232c3c6";
    
    //make connection
    // $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // return $dbConn;
    //b724345846f34e:958d7a51@us-cdbr-iron-east-05.cleardb.net/heroku_90e40dfb232c3c6?reconnect=true
    
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $username = "b910465920c218";
    $password = "9bd5a61c";
    $dbname="heroku_b09823b21f68f71";

// Create connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    return $conn;
    
}