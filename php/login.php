<?php




function login(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbcea";

    $next = false;

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
            if ($row["username"] == $_POST['txtusernamelog']){

                $verificar = password_verify($_POST['txtpasswordlog'], $row["password"]);

                if ($verificar){
                    session_start();
                    $_SESSION["user"] = $_POST['txtusernamelog'];
                    $next = true;
                }
            }
        }

        $conn->close();

        if ($next == true){
            header("Location: ../index.php");
        }else{
            session_start();
            $_SESSION['error'] = true;
            header("Location: ../login.php");
        }

    }

}


if (isset($_POST['btniniciarsessao'])){
    login();
}