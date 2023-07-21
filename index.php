<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table>
        <thead>
          <td>SN</td>
          <td>Last Name</td>
          <td>First Name</td>
          <td>Gender</td>
          <td>Date Of Birth</td>
          <td>Email</td>
            <!-- Complete the table header row -->
        </thead>

        <tbody>
            <?php         
            include 'process.php' ;
                // Complete code to:
                // Connect to the DB  
                $con =new mysqli($server, $username, $password, $db);
                // Select all records from users table  
                $sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);

                // Display all the selected records  
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['date_of_birth'] . "</td>";
                    echo "</tr>";
      
         
                }
            ?>
        </tbody>
    </table>
</body>
</html>