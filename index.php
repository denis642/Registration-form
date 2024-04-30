<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with database</title>
    <link rel="stylesheet"type="text/css"href="style.css">

</head>
<body>
    <div id="frm">
        <h1>Registration form</h1>
        <h3>Saving Data into the database</h3>
        <form action="connect.php" method="POST">
            <label>firstname</label><br>
            <input type="text" placeholder="Enter firstname" name="firstname" required="true">
            <br>
            <label>lastname</label><br>
            <input type="text" placeholder="Enter lastname"name="lastname" required="true">
            <br>
            <label>email</label><br>
            <input type="email" placeholder="Enter email" name="email"required="true">
            <br>
            <label>phone</label><br>
            <input type="phone" placeholder="Enter phone" name="phone" required ="true">
            <br>
            <input type="submit"id="btn"value="login"/>
        </form>
        <br>
        <h3>Fetching Data from the database </h3>
        <table align="center"style="width:300px;">
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>phone</th>
    </tr>
    <?php
    $conn = new mysqli("localhost","root",'',"school");
    if($conn->connect_error){
        die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);

    }
    $select="select * from students order by id";
    $result = $conn->query($select);
    while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["firstname"];?></td>
            <td><?php echo $row["lastname"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["phone"];?></td>



        </tr>
        <?php
        
    }
    ?>
</table>
    </div>
    
</body>
</html>