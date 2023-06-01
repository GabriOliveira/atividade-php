<?php

require_once("./EmailHandler.php");
require_once("./SMSHandler.php");
$objSMSHandler = new EmailHandler();
$objSMSHandler = new SMSHandler();
final class GerenciadorDenuncias
{

    public function registrarDenuncia($objDenuncia)
    {

    }
}

$gerenciadorDenuncias = new GerenciadorDenuncias();
$obj = [
    $objEmailHandler->$objEmailHandler,
    $objSMSHandler->$objSMSHandler,
];

$gerenciadorDenuncias->registrarDenuncia($obj);

?>