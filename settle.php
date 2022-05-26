<?php
        session_start(); 
        include "connection.php"
?>
<?php
     $user = $_SESSION['user'];
     $fname = $_POST['name'];
     $a = $_POST['amount'];
     $date = $_POST['date'];
     $des = $_POST['des'];
     $userRecord = $user."Record";
     $FriendRecord = $fname."Record";
     $userHistory = $user."History";
     $FriendHistory = $fname."History";
     
     if($a>0)
     {
        $query1 = "DELETE FROM $userRecord WHERE FNAME='$fname' AND AMOUNT='$a' AND `DATE`='$date' AND DISCRIPTION='$des'";
        $a = -1*$a;
        $query2 = "DELETE FROM $FriendRecord WHERE FNAME='$user' AND AMOUNT='$a' AND `DATE`='$date' AND DISCRIPTION='$des'";
        
        $a = -1*$a;
        $userH = "You got back $a from $fname as settlement.";
        $friendH = "You paid $a to $user as settlement.";
        $timeNow = date("Y-m-d");

        $query3 = "INSERT INTO $userHistory VALUES('$userH','$timeNow')";
        $query4 = "INSERT INTO $FriendHistory VALUES('$friendH','$timeNow')";
        
        $conn->query($query1);
        $conn->query($query2);
        $conn->query($query3);
        $conn->query($query4);
     }
     else
     {
        $query1 = "DELETE FROM $userRecord WHERE FNAME='$fname'AND AMOUNT='$a' AND `DATE`='$date' AND DISCRIPTION='$des'";
        $a = -1*$a;
        $query2 = "DELETE FROM $FriendRecord WHERE FNAME='$user'AND AMOUNT='$a' AND `DATE`='$date' AND DISCRIPTION='$des'";
        
        
        $userH = "You paid $a to $fname as settlement.";
        $friendH = "You got back $a from $user as settlement.";
        $timeNow = date("Y-m-d");

        $query3 = "INSERT INTO $userHistory VALUES('$userH','$timeNow')";
        $query4 = "INSERT INTO $FriendHistory VALUES('$friendH','$timeNow')";
        
        $conn->query($query1);
        $conn->query($query2);
        $conn->query($query3);
        $conn->query($query4);
     }
?>