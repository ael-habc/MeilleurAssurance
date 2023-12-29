<?php


ini_set('display_errors', 'off');
// require('phpmailer/PHPMailerAutoload.php');
// require('twilio-php-main/src/Twilio/autoload.php'); // Load Twilio PHP library
// use Twilio\Rest\Client;

//bestabo BDD
$servername = "localhost";
$username = "webuser";
$password = "5vXRn9KCWcba";
$dbname = "lp_mut_2";
//include("firewall/project-security.php");

// Connections
$con = new mysqli($servername, $username, $password, $dbname);
function get_client_ip_server()
{
    $ipaddress = '';
    if ($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}

// Check connection1
if ($con->connect_error) {
    die("Erreur de Connexion à la Base de données!! : " . $con->connect_error);
}



mysqli_query($con, "SET NAMES UTF8");
$date_commande_php = date("Y-m-d");
$today = date("Y-m-d H:i:s");
//add ifisset to the variable

$id_camp = mysqli_real_escape_string($con, $_GET['id']);
$keyword = mysqli_real_escape_string($con, $_GET['key']);
$device = mysqli_real_escape_string($con, $_GET['dev']);
$gclid = mysqli_real_escape_string($con, $_GET['gclid']);
$nom = mysqli_real_escape_string($con, $_POST['nom']);
$prenom = mysqli_real_escape_string($con, $_POST['prenom']);
$dateNaissance= mysqli_real_escape_string($con, $_POST['date']);
$code_postal= mysqli_real_escape_string($con, $_POST['codePostal']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$telephone_mobile = mysqli_real_escape_string($con, $_POST['telephone']);

$user_ip = get_client_ip_server();
$nom_complet = $nom . ' ' . $prenom;


$provenance = 'meilleur-comparateur-mutuelle-sante-senior'; //-----------------------------------------------------------<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< change the provaenace here
//check ip address
$var1 = mysqli_query($con, "SELECT count(ip_adresse) from data where ip_adresse='$user_ip' ");
$var0 = mysqli_fetch_array($var1);
$ded = $var0[0];
if ($ded < 2) {
    $besoin = "INSERT INTO `data`( `Nom_complet`, `Email`, `Telephone`, `ddn`, `Code_postal`, `Adresse`, `Vous`, `date_injection`, `inject`, `source`,`ip_adresse`) 
    VALUES ('$nom_complet','$email','$telephone_mobile','$dateNaissance','$code_postal','vide','Autre','$today','0','Meilleur_Comparateur','$user_ip')";

    $lead_ajout = mysqli_query($con, $besoin);

} else {
    $lead_ajout = NULL;
    die();
    ?>
    <script>
        window.location.href = "error.php?id=<?php echo $id_camp; ?>&key=<?php echo $keyword; ?>&dev=<?php echo $device; ?>&CustomMail=<?php echo $email; ?>";
    </script>

    <?php
}


if ($lead_ajout != NULL) { ?>
    <script>
        window.location.href = "felicitations.php?id=<?php echo $id_camp; ?>&key=<?php echo $keyword; ?>&dev=<?php echo $device; ?>&CustomMail=<?php echo $email; ?>";
    </script>
    <span style="display: none;">
        <?php
        // send_mail($email);
        // sendSMS($mobile);

        ?>
    </span>



<?php } else { ?>

    <script>
        window.location.href = "error.php?id=<?php echo $id_camp; ?>&key=<?php echo $keyword; ?>&dev=<?php echo $device; ?>&CustomMail=<?php echo $email; ?>";
    </script>

<?php }

?>