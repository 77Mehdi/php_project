<?php


if (isset($_POST['S_up_btn'])) {
    $Email = $_POST["Email"];
    $pw1 = $_POST["Password1"];
    $pw2 = $_POST["Password2"];

    $V_email = filter_var($Email, FILTER_VALIDATE_EMAIL);

    $V_pasw = ($pw1 === $pw2) && (strlen($pw1) >= 8 && strlen($pw1) < 15);
    $V_E = "/^[a-zA-Z\d]+@ofppt\.ma$/";

    if (preg_match($V_E, $Email)) {
        
        if ($V_email && $V_pasw) {
            creer();
            header("location: ../home.php");
            exit(); 
        } else {
        echo '<script>alert("You cannot create an account.");</script>';
        }
        
    } else {
        echo '<script>alert("The email is not valid.");</script>';
    }
    
    if (!$V_pasw) {
        echo '<script>alert("The passwords do not match or do not meet the length requirements.");</script>';
    }

}



// check if the rmail and the password rait  ########################
if(isset($_POST['Logen_btn'])){

	$conect= mysqli_connect('localhost','root','','etablissement');
    $query = "SELECT * FROM stagiaire2 ";
    $chik= mysqli_query($conect, $query);


$Email = $_POST["Email"];
$pw1 = $_POST["Password1"];


    while ($row=mysqLi_fetch_assoc($chik) ){
      $Eml= $row['Email'];
      $Pasw= $row['Password1'];
    

      if($Eml==$Email && $Pasw == $pw1){
        header("location:../home.php");
      }else{
        header("location:../join_now.php");
      }   
    }

    if($Email=="admin@gmail.com" && $pw1 == "admin"){
        header("location:../admin/index.php");
      }else{
       echo '<script> alert(" the password or email not corict");</script>' ;
       
      
      }
    
}


// #################################
function connect_base(){
    $serveur = 'localhost';
    $dbname = 'etablissement';
    $user = 'root';
    $pw = '';
    $con = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pw);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $con;
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
