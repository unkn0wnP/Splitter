<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                }

             td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
                }
            }

        </style>
    </head>
    <body>
        <?php
    include "connection.php";
    
    if (isset($_POST['query'])) {
        
        $query = "SELECT * FROM register WHERE UNAME LIKE '{$_POST['query']}%' LIMIT 10";
        $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        echo '<table>';
        while ($user = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$user["UNAME"]."</td>";
            echo "</tr>";
        }
        echo '</table>'; 
    } else {
        echo "<p style='color:red'>No user found...</p>";
    }
    
    }
    ?>
    </body>
</html>