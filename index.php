<?php
echo "praticando arrays<br>";
$Cadastro = array ("maria",30,1.8,true);

//$cadastro = array ("nome"=>"maria da silva<br>");



//var_dump($cadastro);
var_dump($Cadastro);
$tamanho = cont($Cadastro);

for ($i=0; $i < $tamanho; $i++) {
echo $Cadastro[$i];
echo"<br>";
}