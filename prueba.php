!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "parte_diario_lmh";
    $username = "enmaguevara@gmail.com";
    $password = "12345";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
    ?>
        
</body>
</html>





    
