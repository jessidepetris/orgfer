<?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";
?>

<?php
if($_POST["message"]) {
    $name = $_POST["name"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $visitorEmail = $_POST["email"];
    $message = $_POST["message"];
    $OUR_MAIL = 'jldepetris@hotmail.com';
    
$errors = "";
//NORMAL OPERATION - NO ERRORS        
    if(empty($errors)){
        $EMAIL_SUBJECT = "Nuevo Formulario de Contacto de " . $name . " @ En tu sitio Web";
        $emailBody = "User name: " . $name . "rn".
                     "User apellido: " . $apellido . "rn".
                     "User email: " . $visitorEmail . "rn".
                     "User message: " . $message . "rn";
 
        $TARGET_EMAIL = "jldepetris@hotmail.com";
//HEADERS
        $headers = "From: " . $OUR_MAIL . "rn";
        $headers .= "Reply-To: " . $visitorEmail . "rn";
}}
?>


<?php
$success = mail($TARGET_EMAIL, $EMAIL_SUBJECT, $emailBody, $headers);
//SUCCESS OR FAIL FOR CORRECT TEXT
if ($success){
        ?>
      <script language="javascript" type="text/javascript">
      //REDIRECT TO THE MAIN PAGE or alternatively to 'thank you page'
 alert('Thank you for the message. I will be in contact with you shortly.');
       window.location.href = './index.html';
      </script>
      <?php
} else{
      //mail failed for some reason
      ?>
      <script language="javascript" type="text/javascript">
        alert('Message failed. Please, contact me by an alternative way.');
        window.location.href = './index.html';
      </script>


<script>
console.info('Formulario correctamente enviado!.');
//REDIRECT TO THE MAIN PAGE
window.location.href = './index.html';
</script>


