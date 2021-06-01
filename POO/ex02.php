<?php

class Carro{
  private $modelo;
  private $motor;
  private $ano;

  // constructor
  public Carro(){}

  // getters and setters
  public getModelo(){return $this->modelo;}
  public setModelo($modelo){$this->modelo = $modelo;}

  public getMotor(){return $this->motor;}
  public setMotor($motor){$this->motor=$motor;}

  public getAno(){return $this->ano;}
  public setAno($ano){$this->ano = $ano;}

}

?>