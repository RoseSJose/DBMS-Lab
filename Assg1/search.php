<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "myDB";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
    }
    $search = $_POST["search"];
    $sql = "SELECT * FROM student WHERE rollno = '$search'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc())
        {
            $name = $row["names"];
            $rollno = $row["rollno"];
            $dob = $row["dob"];
            $address = $row["addresss"];
            $mobile_no = $row["mobileno"];
            $email = $row["email"];
            $semester = $row["semester"];
            $sem1 = $row["sem1"];
            $sem2 = $row["sem2"];
            $sem3 = $row["sem3"];
            $sem4 = $row["sem4"];
            $sem5 = $row["sem5"];
            $sem6 = $row["sem6"];
            $sem7 = $row["sem7"];
            $sem8 = $row["sem8"];
            $cgpa = $row["cgpa"];
            $hobbies = $row["hobbies"];
            $hosteller = $row["hosteller"];
            $ref = $row["ref"];
        }
    }
    else{
        echo "0 rows";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 50%;
            float: center;
            background-color: powderblue;
            border: solid 2px;
            margin: auto;
            line-height: 200%;
            font-size: 17px;
        }
    </style>
</head>
<body style="text-align: center">
<div>
    <h1 style = "text-align: center;"><?php echo $name?></h1>
    Roll No: <?php echo $rollno ?><br>
    Date of Birth: <?php echo $dob ?><br>
    Address: <?php echo $address ?><br>
    Mobile No: <?php echo $mobile_no ?><br>
    Email id: <?php echo $email ?><br>
    Current Semester: <?php echo $semester ?><br>
    <h4>SGPA details</h4>
    Semester 1: <?php echo $sem1 ?><br>
    Semester 2: <?php echo $sem2 ?><br>
    Semester 3: <?php echo $sem3 ?><br>
    Semester 4: <?php echo $sem4 ?><br>
    Semester 5: <?php echo $sem5 ?><br>
    Semester 6: <?php echo $sem6 ?><br>
    Semester 7: <?php echo $sem7 ?><br>
    Semester 8: <?php echo $sem8 ?><br>
    CGPA: <?php echo $cgpa ?><br>
    Hobbies: <?php echo $hobbies ?><br>
    Hosteller: <?php echo $hosteller ?><br>
    References: <?php echo $ref ?><br>
    </div>
</body>
</html>