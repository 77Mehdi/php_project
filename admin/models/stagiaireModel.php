<?php
function connect_base(){
    $serveur = 'localhost';
    $dbname = 'etablissement';
    $user = 'root';
    $pw = '';
    $con = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pw);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $con;
}
function liste_stagiaire(){
    $con=connect_base();
    $requete = $con->prepare("SELECT * FROM stagiaire2");
    $requete->execute();
    $stagiaires = $requete->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires;
}
function creer(){
    $nom=$_POST["Forst_name"];
    $prenom = $_POST["Last_name"];
    $Email = $_POST["Email"];
    $pw1 = $_POST["Password1"];
    $pw2 = $_POST["Password2"];
    $con=connect_base();
    $requete=$con->prepare("INSERT INTO stagiaire2(Forst_name,Last_name,Email,Password1,Password2)
    VALUES(:Forst_name,:Last_name,:Email,:Password1,:Password2);");
    $requete->bindParam(':Forst_name',$nom);
    $requete->bindParam(':Last_name', $prenom);
    $requete->bindParam(':Email', $Email);
    $requete->bindParam(':Password1', $pw1);
    $requete->bindParam(':Password2', $pw2);
    $requete->execute();
    return $requete;
}
function suprimer($id){
    $con=connect_base();
    $requete=$con->prepare("DELETE FROM stagiaire2 WHERE id=:id");
    $requete->bindParam(':id',$id);
    $requete->execute();
    return $requete;
}
function editer($id){
    $con=connect_base();
    $requete=$con->prepare("SELECT * FROM stagiaire2 WHERE id=:id");
    $requete->bindParam(':id',$id);
    $requete->execute();
    $stagiaire=$requete->fetch(PDO::FETCH_OBJ);
    return $stagiaire;
}
function modifier($id,$nom,$prenom,$age,$login,$pw){
    $con=connect_base();
    $requete=$con->prepare("UPDATE  stagiaire2 SET Forst_name=:Forst_name,Last_name=:Last_name,Email=:Email,Password1=:Password1,Password2=:Password2 WHERE id=:id");
        $requete->bindParam(':Forst_name',$nom);
        $requete->bindParam(':Last_name', $prenom);
        $requete->bindParam(':Email', $login);
        $requete->bindParam(':Password1', $pw1);
        $requete->bindParam(':Password2', $pw2);
         $requete->bindParam(':id', $id);
         $requete->execute();
    
}
?>