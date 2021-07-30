<?php
  require "dbSupport.php";

  $usernames = [];

  if ($_GET['key'] === 'search') {
    $searchKey = $_GET['searchKey'];

    $users = searchUser($searchKey);

    while ($user = $users->fetch_assoc()) {
      array_push($usernames, $user['username']);
    }
    $msg['status'] = 'success';
    $msg['usernames'] = $usernames;
    echo json_encode($msg);
    return;
  }
?>
© 2021 GitHub, Inc.