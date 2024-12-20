 
     
<?php



if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: https://monotributo.net" );
}

    require 'assets/phpmailer/PHPMailer.php';
    require 'assets/phpmailer/Exception.php';
    use PHPMailer\PHPMailer\PHPMailer;
 

    //$email = $_POST['mail'];
    //$telefono = $_POST['telefono'];
    $name = $_POST['name'];
    $apellido = $_POST['apellido'];

    $mail = $_POST['Mail'];
    $telefono = $_POST['phone'];

    $obraSocial = $_POST['obraSocial']; 
    $facturacion = $_POST['facturacion'];
    $actividad = $_POST['actividad'];
    $productosServicios = $_POST['productosServicios'];

    $mesInscripcion = $_POST['mesInscripcion'];

    $DomicilioCalle = $_POST['DomicilioCalle'];
    $DomicilioNumero = $_POST['DomicilioNumero'];
    $DomicilioDto = $_POST['DomicilioDto'];
    $DomicilioDto = $_POST['DomicilioDto'];
    $DomicilioProvincia = $_POST['DomicilioProvincia'];



    $DomicilioProvinciaText = $_POST['DomicilioProvinciaText'];


    $claveFiscal = $_POST['claveFiscal'];
    $cuit = $_POST['cuit'];
    //$ndocumento = $_POST['ndocumento'];
    $codigoRNOS = $_POST['RNOS'];
    //$profesion = $_POST['profesion'];
    //$observaciones = $_POST['observaciones'];
    $foto4x4 = $_FILES['foto4x4'];
    $fotoDNIfrente = $_FILES['fotoDNIfrente'];
    $fotoDNIreverso = $_FILES['fotoDNIreverso'];
    $comprobantePago = $_FILES['comprobantePago'];

    $provincias ="";
    $provincias_array = $_POST['ingresosBrutos'];


    foreach($provincias_array as $provincia){
        $provincias .= $provincia . ", ";
    }



if( empty(trim($name)) ) $name = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';
if( empty(trim($DomicilioProvinciaText)) ) $DomicilioProvinciaText = '';
if( empty(trim($DomicilioNumero)) ) $DomicilioNumero = '';
if( empty(trim($DomicilioDto)) ) $DomicilioDto = '';

if($name !== 'anonimo'){
    


//if($name = 'anonimo') {
    $body =  <<<HTML
    <h3>Contacto desde la web, para inscribirse al monotributo.</h3>
    <hr>
    <p><b>Nombre Completo: </b> $name $apellido</p>

    <p><b>Teléfono: </b> $telefono <b> Correo electrónico: </b> $mail</p>
    <p><b>C.U.I.T.: </b> $cuit  <b> Clave Fiscal: </b>$claveFiscal </p>
    <p><b>Mes de inscripción: </b> $mesInscripcion</p>
    <p><b>Productos o servicios: </b> $productosServicios </p>
    <p><b>Actividad: </b> $actividad</p>
     
    <p><b>Domicilio: </b> $DomicilioCalle $DomicilioNumero $DomicilioDto </p>
    <p><b>Provincia: </b> $DomicilioProvincia <b> Numero de partida inmobiliaria: </b>$DomicilioProvinciaText</p>

    <p><b>Ingresos brutos: </b> $provincias</p>
    
    
    <p><b>Facturación: </b> $facturacion</p>
    <p><b>Obra social: </b> $obraSocial <b> Código RNOS: </b>$codigoRNOS</p> 

     
    <hr>
    <h3>Contacto - Monotributo.net</h3> 

    
HTML;
   

$mailer = new PHPMailer();
$mailer->setFrom( 'contacto@monotributo.net', "$name $apellido" );
$mailer->addAddress('contacto@monotributo.net','Sitio web, nueva inscripción de monotributo');
$mailer->Subject = "Inscripción al monotributo de $name $apellido";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

 
if( $foto4x4['size'] > 0 ){
    $mailer->addAttachment( $foto4x4['tmp_name'], $foto4x4['name'] );
}


if( $fotoDNIfrente['size'] > 0 ){
    $mailer->addAttachment( $fotoDNIfrente['tmp_name'], $fotoDNIfrente['name'] );
}

if( $fotoDNIreverso['size'] > 0 ){
    $mailer->addAttachment( $fotoDNIreverso['tmp_name'], $fotoDNIreverso['name'] );
}
if( $comprobantePago['size'] > 0 ){
    $mailer->addAttachment( $comprobantePago['tmp_name'], $comprobantePago['name'] );
}

 

$rta = $mailer->send( );

 
}
 
echo '<script>alert("Gracias por inscribirte, nos pondremos en contacto a la brevedad.")</script>';
echo '<script>setTimeout(function(){
    alert("Volviendo a la web.");
    window.location.href = "https://monotributo.net"
 }, 2000);</script>';
//header("Location: https://monotributo.net" );
//}
//else
//{
//    echo '<script>alert("Ocurrió un error.")</script>';
//header("Location: https://monotributo.net/formularios/monotributo.php" );
//}

 
?>