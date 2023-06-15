<?php

require_once("./EmailHandler.php");
require_once("./SMSHandler.php");
$objSMSHandler = new EmailHandler();
$objSMSHandler = new SMSHandler();
final class GerenciadorDenuncias
{

    public function registrarDenuncia(Denuncia $objDenuncia)
    {

    }
}

$gerenciadorDenuncias = new GerenciadorDenuncias();

$gerenciadorDenuncias->registrarDenuncia($obj);

?>