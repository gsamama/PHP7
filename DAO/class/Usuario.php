<?php

class Usuario {
  private $idusuario;
  private $deslogin;
  private $dessenha;
  private $dtcadastro;

  public function getIdUsuario() {return $this->idusuario;}
  public function setIdUsuario($value){$this->idusuario=$value;}

  public function getDesLogin() {return $this->deslogin;}
  public function setDesLogin($value){$this->deslogin=$value;}
  
  public function getDesSenha() {return $this->dessenha;}
  public function setDesSenha($value){$this->dessenha=$value;}
  
  public function getDtCadastro(){return $this->dtcadastro;}
  public function setDtCadastro($value){$this->dtcadastro=$value;}

  public function getById($id){

    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario =:ID" , array(":ID"=>$id));

    if(isset($results[0])){
      $this->setData($results[0]);
    }
    else{
      throw new Exception("ERROR COLLECTING DATA");
    }
  }

  public static function getAll(){
    $sql = new Sql();
    return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
  }

  public static function search($search){
    $sql = new Sql();
    return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin like :SEARCH", array(':SEARCH'=>"%".$search."%"));
  }

  public function login($login, $password){
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin =:LGN AND dessenha= :PWD" , array(
      ":LGN"=>$login,
      ":PWD"=>$password));

    if(isset($results[0])){
      $this->setData($results[0]);
    }
    else{
      throw new Exception("LOGIN/PASSWORD INVALID");
    }
  }

  public function setData($data){
    $this->setIdUsuario($data['idusuario']);
    $this->setDesLogin($data['deslogin']);
    $this->setDesSenha($data['dessenha']);
    $this->setDtCadastro(new DateTime($data['dtcadastro']));
  }

  public function insert(){
    $sql = new Sql();
    $results = $sql->select("CALL sp_usuarios_insert(:LGN, :PWD)", 
      array(
        ':LGN'=>$this->getDesLogin(), 
        ':PWD'=>$this->getDesSenha()
      )
    );
    if(count($results)>0) {
      $this->setData($results[0]);
    }
  }



  public function __construct($login="", $password=""){
    $this->setDesLogin($login);
    $this->setDesSenha($password);
  }
  public function __toString(){
    return json_encode(
      array(
        "idusuario"  => $this->getIdUsuario(),
        "deslogin" => $this->getDesLogin(),
        "dessenha" => $this->getDesSenha(),
        "dtcadastro" => $this->getDtCadastro()->format("d/m/Y H:i:s")
      )
    );
  }

}



?>