<?php 
  $nomeCompleto = filter_input(INPUT_POST, "nomeCompleto", FILTER_SANITIZE_STRING);
  $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_STRING);
  $doencaPrevia = filter_input(INPUT_POST, "opcao");

    $valor = 200.00;

    if ($idade == "opcao1"){
      $valor = $valor;
    } elseif ($idade == "opcao2"){
      $valor = $valor * 1.5;
    } elseif ($idade == "opcao3"){
      $valor = 300.00 * 1.5;
    } elseif ($idade == "opcao4") {
      $valor = 450.00 * 1.5;
    } elseif ($idade == "opcao5") {
      $valor = 675.00 * 1.5;
    } elseif ($idade == "opcao6") {
      $valor = 1012.5 * 1.5;
    }

    if ($doencaPrevia == "sim"){
      $valor = $valor * 1.3;
    }

    echo "<p>Valor do seguro saúde para $nomeCompleto: R$ " . number_format($valor, 2, ',', '.') . "</p>";

?>