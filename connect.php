<?php
session_start();

$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];

$conn = new mysqli('localhost', 'root', '', 'test blog e-commerce');
var_dump($conn);

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {

    $alter_query = "ALTER TABLE contact MODIFY COLUMN id INT AUTO_INCREMENT";
    if ($conn->query($alter_query) === TRUE) {
        echo "Column id altered successfully.<br>";
    } else {
        echo "Error altering column id: " . $conn->error . "<br>";
    }

    $stmt = $conn->prepare("INSERT INTO contact(name, email, message) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    echo ("registration succesfully");
    $stmt->close();

    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);

    // Vérifier s'il y a des résultats
    if ($result->num_rows > 0) {
        // Parcourir les lignes de résultats
        while ($row = $result->fetch_assoc()) {
            // Accéder aux données de chaque ligne
            // et ainsi de suite...

            // Faire ce que vous voulez avec les données récupérées
            // Par exemple, vous pouvez les stocker dans un tableau PHP
            $donnees[] = $row;

            $_SESSION['donnees'] = $donnees;
        }
    } else {
        echo "Aucun résultat trouvé.";
    }

    header("Location: home.php?success=1"); // Remplacez index.php par le chemin de votre page d'accueil
    exit();
}
