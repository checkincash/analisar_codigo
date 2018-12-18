<?php
class consulta_eventos_lookup
{
//  
   function lookup_situacao(&$situacao) 
   {
      $conteudo = "" ; 
      if ($situacao == "0")
      { 
          $conteudo = "Ativo";
      } 
      if ($situacao == "1")
      { 
          $conteudo = "Inativo";
      } 
      if (!empty($conteudo)) 
      { 
          $situacao = $conteudo; 
      } 
   }  
//  
   function lookup_destaque(&$destaque) 
   {
      $conteudo = "" ; 
      if ($destaque == "0")
      { 
          $conteudo = "Não";
      } 
      if ($destaque == "1")
      { 
          $conteudo = "Sim";
      } 
      if (!empty($conteudo)) 
      { 
          $destaque = $conteudo; 
      } 
   }  
}
?>
