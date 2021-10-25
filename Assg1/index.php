<?php
    $name_err = $roll_no_err = $dob_err = $address_err = $mobile_no_err = $email_err = $semester_err = $cgpa_err = $hobbies_err = $hosteller_err = $ref_err = "";
    $flag = 1;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name_err = "Name is required";
            $flag = 0;
          } else {
            $name = $_POST["name"];
          }
        if (empty($_POST["rollno"])) {
            $roll_no_err = "Roll No is required";
            $flag = 0;
          } else {
            $roll_no = $_POST["rollno"];
          }
          if (empty($_POST["dob"])) {
            $dob_err = "DOB is required";
            $flag = 0;
          } else {
            $dob = $_POST["dob"];
          }
        if (empty($_POST["address"])) {
            $address_err = "Address is required";
            $flag = 0;
          } else {
            $address = $_POST["address"];
          }
        if (empty($_POST["mobileno"])) {
            $mobile_no_err = "Mobile No is required";
            $flag = 0;
          } else {
            $mobile_no = $_POST["mobileno"];
          }
          if (empty($_POST["email"])) {
            $email_err = "Email is required";
            $flag = 0;
          } else {
            $email = $_POST["email"];
          }
          if (empty($_POST["semester"])) {
            $semester_err = "Semester is required";
            $flag = 0;
          } else {
            $semester = $_POST["semester"];
          }
          if (empty($_POST["cgpa"])) {
            $cgpa_err = "CGPA is required";
            $flag = 0;
          } else {
            $cgpa = $_POST["cgpa"];
          }
          if (empty($_POST["hobby"])) {
            $hobbies_err = "Hobby is required";
            $flag = 0;
          } else {
            $hobbies = $_POST["hobby"];
          }
          if (empty($_POST["hosteller"])) {
            $hosteller_err = "Hosteller is required";
            $flag = 0;
          } else {
            $hosteller = $_POST["hosteller"];
          }
        //$name = $_POST["name"];
        
        $sem1 = $_POST["sem1"];
        $sem2 = $_POST["sem2"];
        $sem3 = $_POST["sem3"];
        $sem4 = $_POST["sem4"];
        $sem5 = $_POST["sem5"];
        $sem6 = $_POST["sem6"];
        $sem7 = $_POST["sem7"];
        $sem8 = $_POST["sem8"];
        $ref = $_POST["ref"];
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
        .center{
            text-align: center;
            margin: auto;
            width: 50%;
        }
        div{
            border-style: solid;
            border-width: 2px;
            padding: 20px;
            margin-top: 50px;
            background-color: rgb(187, 179, 179);
        }
        input[type=text], input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            resize: none;
        }
        .error{
            color: red;
        }
        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
            width: 20%;
            float: right;
        }
        .topnav input[type=text] {
            float: right;
            padding: 6px;
            border: none;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <div class="topnav">
      <form method = "post" action="search.php">
          <input type="text" placeholder="Search.. by Roll No" name="search">
          <input type="submit" value = "search">
      </form>
    </div>  
    <h1 class="center">Enter your details</h1>
    <div class="center">
    <form method="post" action="index.php" >
        <span class="error"><?php echo $name_err;?></span><br>
        Name:* <input type="text" name="name"><br>
        <span class="error"><?php echo $roll_no_err;?></span><br>
        Roll No:* <input type="text" name="rollno"><br>
        <span class="error"><?php echo $dob_err;?></span><br>
        Date of Birth:* <input type="date" name="dob"><br>
        <span class="error"><?php echo $address_err;?></span><br>
        Address:* <textarea name="address" id="address" cols="30" rows="5"></textarea><br>
        <span class="error"><?php echo $mobile_no_err;?></span><br>
        Mobile No:* <input type="text" name="mobileno"><br>
        <span class="error"><?php echo $email_err;?></span><br>
        Email Id:* <input type="email" name="email"><br>
        <span class="error"><?php echo $semester_err;?></span><br>
        Semester:* <input type="number" name="semester"><br>
        Enter SGPA <br><br>
        Semester 1: <input type="number" step = 0.01 name="sem1"><br>
        Semester 2: <input type="number" step = 0.01 name="sem2"><br>
        Semester 3: <input type="number" step = 0.01 name="sem3"><br>
        Semester 4: <input type="number" step = 0.01 name="sem4"><br>
        Semester 5: <input type="number" step = 0.01 name="sem5"><br>
        Semester 6: <input type="number" step = 0.01 name="sem6"><br>
        Semester 7: <input type="number" step = 0.01 name="sem7"><br>
        Semester 8: <input type="number" step = 0.01 name="sem8"><br>
        <span class="error"><?php echo $cgpa_err;?></span><br>
        CGPA:* <input type="number" step = 0.01 name="cgpa"><br>
        <span class="error"><?php echo $hobbies_err;?></span><br>
        Hobbies:* <textarea name="hobby" cols="30" rows="5"></textarea><br><br>
        <span class="error"><?php echo $hosteller_err;?></span><br>
        Hosteller:* <input type="radio" name="hosteller" value="yes">Yes
            <input type="radio" name="hosteller" value="no">No
            <br><br>
        <span class="error"><?php echo $ref_err;?></span><br>
        References: <textarea name="ref" id="ref" cols="30" rows="5"></textarea><br>
        <input type="submit">
        
    </form>
    </div>
</body>
</html>

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

    // Create table
   /* $sql = "DROP TABLE IF EXISTS student";
    
    $conn->query($sql);*/

    $sql = "CREATE TABLE IF NOT EXISTS student(
        id INT AUTO_INCREMENT PRIMARY KEY,
        names VARCHAR(30) NOT NULL,
        rollno VARCHAR(10) NOT NULL,
        dob date NOT NULL,
        addresss VARCHAR(100) NOT NULL,
        mobileno VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        semester INTEGER NOT NULL,
        sem1 FLOAT,
        sem2 FLOAT,
        sem3 FLOAT,
        sem4 FLOAT,
        sem5 FLOAT,
        sem6 FLOAT,
        sem7 FLOAT,
        sem8 FLOAT,
        cgpa FLOAT,
        hobbies VARCHAR(100),
        hosteller VARCHAR(10),
        ref VARCHAR(100))";
    if (!($conn->query($sql) === TRUE) ){
      echo "Error creating table: " . $conn->error;
      } /*else {
        echo "Error creating table: " . $conn->error;
      }*/
    //$conn->query($sql);
    if($flag != 0){
    
        //$stmt = $conn->prepare("INSERT INTO student(names, rollno, dob, addresss, mobileno, semester, sem1, sem2, sem3, sem4, sem5, sem6, sem7, sem8, cgpa, hobbies, hosteller, ref) VALUES($name, $roll_no, $dob, $address, $mobile_no, $semester, $sem1, $sem2, $sem3, $sem4, $sem5, $sem6, $sem7, $sem8, $cgpa, $hobbies, $hosteller, $ref);");
        $stmt = "INSERT IGNORE INTO student(names, rollno, dob, addresss, mobileno, email, semester, sem1, sem2, sem3, sem4, sem5, sem6,sem7, sem8, cgpa, hobbies, hosteller, ref) VALUES ('$name', '$roll_no', '$dob', '$address', '$mobile_no','$email', '$semester', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$sem6', '$sem7', '$sem8', $cgpa, '$hobbies', '$hosteller', '$ref')";
        //echo $conn->error;
    if (!($conn->query($stmt) === TRUE)) {
      echo "Error inserting table: " . $conn->error;
      }/* else {
        echo "Error inserting table: " . $conn->error;
      }*/

   /* $sql = "SELECT names FROM student";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    {
        echo $row["names"]."\n";
        echo "hello";
    }
}
else{
    echo "0 rows";
}*/
    $conn->close();
}
}
?>