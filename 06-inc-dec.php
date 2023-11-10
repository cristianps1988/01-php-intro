<?php include 'includes/header.php';

// incrementar de a uno
$number1 = 10;
$number1++;
echo $number1;
echo '<br>';

// si quiero imprimir de una vez el incremento, debo poner el signo antes de la variable
echo ++$number1;
echo '<br>';

// decrementar de a uno
$number2 = 10;
echo --$number2;
echo '<br>';

// incrementar y decrementar de a varios números
$number3 = 10;
echo $number3 += 5;
echo '<br>';
echo $number3 -= 10;


include 'includes/footer.php';
