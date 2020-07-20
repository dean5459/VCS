<?php
    function dbConn() {
        try {
            return $pdo = new PDO('mysql:host=127.0.0.1; dbname=kursinis', 'root','');
        } catch(PDOException $e) {
            die($e -> getMessage());
        }
    }

    function totalUsers($pdo) {
        $query = $pdo->prepare('SELECT * FROM users');
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_CLASS, 'klase');
    }

    $mysqli = new mysqli("localhost", "root", "", "kursinis");
        if($mysqli->connect_error) {
            echo "Svetainė susidūrė su problema.\n";
            echo 'Klaida' . $mysqli->connect_error . '\n';
            exit();
        }
    if(isset($_POST['submit'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
            mysqli_query($mysqli, "INSERT INTO contacts (name, email, message) VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");
        }
    }