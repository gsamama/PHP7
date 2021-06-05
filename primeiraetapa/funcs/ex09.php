<?php

$hierarquia = array(
  array(
    'nome_cargo'=>'CEO',
    'subordinados'=>array(
      //inicio diretor Comercial
      array(
        'nome_cargo'=>'Diretor Comercial',
        'subordinados'=>array(
        //inicio gerente de vendas
          array(
            'nome_cargo'=>'Gerente de Vendas'
          )
        //termino gerente de vendas
        )
      ),
      // termino diretor Comercial
      // inicio diretor financeiro
      array(
        'nome_cargo'=>'Diretor Financeiro',
        'subordinados'=>array(
          //inicio gerente de compras
          array(
            'nome_cargo'=>'Gerente de compras',
            'subordinados'=>array(
              //inicio de supervisor de suplementos
              array('nome_cargo'=>'supervisor de suplementos')
              //temrino de supervisor de suplementos
            )
            ),
          //termino gerente de compras
          //inicio gerente contas a pagar
          array(
            'nome_cargo'=>'Gerente contas a pagar',
            'subordinados'=>array(
              //inicio supervisor de pagamentos
              array(
                'nome_cargo'=>'supervisor de pagamentos',
                'subordinados'=>array(
                  //inicio operadores
                  array('nome_cargo'=>'operador1'),
                  array('nome_cargo'=>'operador2'),
                  array('nome_cargo'=>'operador3'),
                  array('nome_cargo'=>'operador4')
                )
                  //termino operadores
                )
              )
              //executivos supervisor de pagamentos
            
          )
          //termino gerente contas a pagar
        )
      )
      // termino diretor financeiro
      )
  )
);

function exibe($cargos){
  $html = "<ul>";
  foreach ($cargos as $cargo) {
    $html .= "<li>";
      $html .= $cargo['nome_cargo'];
      if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
        $html .= exibe($cargo['subordinados']);
      }
    $html .= "</li>";  
  }



  $html .= "</ul>";
  return $html;
}

echo exibe($hierarquia);
//print_r($hierarquia);
?>