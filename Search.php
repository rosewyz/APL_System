<?php
    include_once 'Helper.php';
?>

<html>
<head>
    <title> Search for a client / Incident </title>
</head>
<body>

<?php
$sql = "SELECT * FROM Client;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while( $row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['last_name'] . "<br>";
    }
}


?>


</body>
</html>