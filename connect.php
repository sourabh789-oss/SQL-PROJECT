<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$mobileno = $_POST['mobileno'];
$Address = $_POST['Address'];
$college = $_POST['college'];
$branch = $_POST['branch'];
$school = $_POST['school'];

// database connection
$conn = new mysqli('localhost', 'root', '', 'form'); //form is my database name
if ($conn->connect_error) {
    die('Connection Failed :' . $conn->connect_error);
} else {
    $stmt - $conn->prepare("insert into registration(firstname,lastname,gender,mobileno,address,college,branch,school) values(?,?,?,?,?,?,?,?)");
    $stmt->blind_param("sssissss", $firstname, $lastname, $gender, $mobileno, $Address, $college, $branch, $school); //s for string  i for int used in this variable datatype 
    $stmt->execute(); //for execute this data 
    echo ".....Registration Successfully.....";
    $stmt->close();
    $conn->close();
}
