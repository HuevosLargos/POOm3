<?php

class CompanyClient extends Client
{
    protected string $companyType;
    public function __construct($name, $email, $address, $phone, $id, $age, $tipo, $CantCompras, $companyType)
    {
        //! funciones importadas del padre
        parent::__construct($name, $email, $address, $phone, $id, $age, $tipo, $CantCompras);
        //! Funciones del hijo
        $this->companyType = $companyType;
        //! Validar el tipo de empresa si esta vacio o no es correcto ANTES de que pase el constructor
        $errorMessage = "";
        if ($this->companyType === "") {
            $errorMessage .= "El tipo de empresa no es correcto, por favor verifique el tipo de empresa <br>";
            print $errorMessage;
        }
    }
    public function getContactData(): string
    {
        return "Nombre: " . parent::getName() . "<br>Direccion: " . parent::getAddress() . "<br>Num Tel. " . parent::getPhone() . "<br>Tipo Cliente: " . $this->tipo . "<br>Cant. Compra: " . $this->CantCompras . "<br>Tipo de Empresa: " . $this->companyType;
    }

}