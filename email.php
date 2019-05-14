<?php
 include "cabecalho.php";
   $nome = filter_input(INPUT_POST, "nome");
   $email = filter_input(INPUT_POST, "email");
   $descricao = filter_input(INPUT_POST, "descricao");
   $fone = filter_input(INPUT_POST, "fone");   
   ?> 
 <?php 
   echo  "Nome:" . $nome;
   echo "<br>E-mail: " . $email;
   echo "<br>Descrição: " . $descricao;
   echo "<br>Fone: " . $fone;
   ?>
   <?php
   echo "<h2><br>Enviado com Sucesso!</h2>"
   ?>
   <?php
 include "rodape.php";   
?>
