<?php

echo "Cidade, " . date("d") . " de "; //date("F")

//meses em PT-BR
switch (date("m")) {
	case "01":     $mes = "Janeiro";     break;
	case "02":     $mes = "Fervereiro";  break;
	case "03":     $mes = "Março";       break;
	case "04":     $mes = "Abril";       break;
	case "05":     $mes = "Maio";        break;
	case "06":     $mes = "Junho";       break;
	case "07":     $mes = "Julho";       break;
	case "08":     $mes = "Agosto";      break;
	case "09":     $mes = "Setembro";    break;
	case "10":     $mes = "Outubro";     break;
	case "11":     $mes = "Novembro";    break;
	case "12":     $mes = "Dezembro";    break;
}
echo $mes;

echo " de " . date("Y");

 ?>
