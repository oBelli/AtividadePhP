<?php

$nomeCliente = $_POST['nomeCliente'];
$vl1 = $_POST['valor1'];
$vl2 = $_POST['valor2'];
$valorPago = $_POST['valorPago'];
 
$vlg = $vl1 + $vl2;
$troco = $valorPago - $vlg;
 

echo "<center>
===== Nota Fiscal =====<br>
Cliente: $nomeCliente<br>
Valor gasto: R$ $vlg <br>
Valor pago: R$ $valorPago<br>
Troco: R$ $troco<br>
======================
</center>";
?>