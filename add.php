<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $poll1 = $_POST['poll1'];
  $poll2 = $_POST['poll2'];
  $poll3 = $_POST['poll3'];

    require 'configDB.php';

    $stmt = $db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $inserted_id = $db->lastInsertId();

    $stmt = $db->prepare("INSERT INTO polls (question_1, question_2, question_3, user_id) VALUES (:poll1, :poll2, :poll3, :user_id);");
    $stmt->bindValue(':poll1', $poll1);
    $stmt->bindValue(':poll2', $poll2);
    $stmt->bindValue(':poll3', $poll3);
    $stmt->bindValue(':user_id', $inserted_id);
    $stmt->execute();

  // $sql = 'INSERT INTO users(name, email) VALUES(:name, :email)';
  // $query = $db->prepare($sql);
  // $query->execute(['name' => $name, 'email' => $email]);

  // $sql = 'INSERT INTO polls(poll1, poll2, poll3) VALUES(:poll1, :poll2, :poll3)';
  // $query = $db->prepare($sql);
  // $query->execute(['poll1' => $poll1, 'poll2' => $poll2, 'poll3' => $poll3]);


?>