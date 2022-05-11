<?php

function criarConta(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcea";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $passwordhash = password_hash($_POST['txtpassword'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO utilizadores (username, email, password, cargo)
VALUES ('$_POST[txtusername]', '$_POST[txtemail]', '$passwordhash', 'Utilizador')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}




















function verificarConta(){
    $passou = false;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcea";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username, email, password FROM utilizadores";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($row["username"] == $_POST['txtusername']){
                $passou = true;
            }
            if ($row["email"] == $_POST['txtemail']){
                $passou = true;
            }
        }
    }

    if($passou == true){
        header("Location: ../CriarConta.php");
    }else{
        criarConta();
    }
    $conn->close();
}

if (isset($_POST['btncriarconta'])){
    verificarConta();
}
