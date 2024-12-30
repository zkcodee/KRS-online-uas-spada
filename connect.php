<?php

define("SERVER", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "krs_online");

$conn = new mysqli(SERVER, USER, PASSWORD, DATABASE);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


