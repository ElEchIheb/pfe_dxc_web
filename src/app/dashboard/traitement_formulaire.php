<?php
// Connexion à la base de données
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "test1_pfe";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marque = $_POST['marque'];
        $refBS = $_POST['refBS'];
        $nomAdherent = $_POST['nomAdherent'];
        $prenomMalade = $_POST['prenomMalade'];
        $dateSoins = $_POST['dateSoins'];
        $honoraires = $_POST['honoraires'];
        $pharmacie = $_POST['pharmacie'];
        $analyse = $_POST['analyse'];
        $radioEchoScanner = $_POST['radioEchoScanner'];
        $materniteFraisClinique = $_POST['materniteFraisClinique'];
        $chirurgie = $_POST['chirurgie'];
        $inject = $_POST['inject'];
        $dent = $_POST['dent'];
        $monture = $_POST['monture'];
        $total = $_POST['total'];

        $sql = $conn->prepare("INSERT INTO bulletin (marque, refBS, nomAdherent, prenomMalade, dateSoins, honoraires, pharmacie, analyse, radioEchoScanner, materniteFraisClinique, chirurgie, inject, dent, monture, total)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $sql->execute([$marque, $refBS, $nomAdherent, $prenomMalade, $dateSoins, $honoraires, $pharmacie, $analyse, $radioEchoScanner, $materniteFraisClinique, $chirurgie, $inject, $dent, $monture, $total]);

        echo "Formulaire soumis avec succès!";
    } else {
        echo "Le formulaire n'a pas été soumis!";
    }
} catch(PDOException $e) {
    echo "Erreur lors de la soumission du formulaire: " . $e->getMessage();
}

$conn = null;
?>
