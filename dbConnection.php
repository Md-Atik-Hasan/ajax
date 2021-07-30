<?php
  function connect() {
    $conn = new mysqli("localhost", "Atik", "123", "wtg");
    if ($conn->connect_errno) {
      die("failed to connect");
    }
    return $conn;
  }
?>