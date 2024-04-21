<?php
ob_start();
$servername = "localhost";
$database = "OLO_Store";
$username = "root";
$password = "mysql";

$conn = mysqli_connect($servername, $username, $password, $database);

require "rb.php";
R::setup('mysql:host=localhost;dbname=OLO_Store', 'root', 'mysql');

session_start();

function showError($errors){
    return array_shift($errors);
    
}
$data = $_POST;
$showError = False;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function get_game_by_id($game_id){
    global $conn;
    $sql = mysqli_query($conn, "SELECT * FROM game WHERE game_id = ".$game_id);
    $game = mysqli_fetch_assoc($sql);
    return $game;
}

function close() {
    global $conn;
    mysqli_close($conn);
    }
    
?>