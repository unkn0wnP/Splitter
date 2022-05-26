<?php
        session_start(); 
        include "connection.php"
?>
<?php
     $user = $_SESSION['user'];
     $userFriend = $user."Friend";
     $Friend = $_POST['id']."Friend";
     $userRecord = $user."Record";
     $FriendRecord = $_POST['id']."Record";
     $query1 = "DELETE FROM $userFriend WHERE FNAME='".$_POST['id']."'";
     $query2 = "DELETE FROM $Friend WHERE FNAME='$user'";
     $query3 = "DELETE FROM $userRecord WHERE FNAME='".$_POST['id']."'";
     $query4 = "DELETE FROM $FriendRecord WHERE FNAME='$user'";
     
     $conn->query($query1);
     $conn->query($query2);
     $conn->query($query3);
     $conn->query($query4);
?>