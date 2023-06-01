<?php


abstract class Denuncia
{
    private $denunciante;
    private $data;

    public function __construct($denunciante, $data)
    {
        $this->denunciante = $denunciante;
        $this->data = $data;
    }



    abstract public function registrarDenuncia();
}

?>