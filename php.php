<?php
    $regata = $_POST['regata'];
    $social = $_POST['social'];
    $blusa = $_POST['blusa'];
    $pullover = $_POST['pullover'];
    $sapato = $_POST['sapato'];
    $calca = $_POST['calca'];
    $meias = $_POST['meias'];
    $luvas = $_POST['luvas'];
    $jaqueta = $_POST['jaqueta'];
    $bermuda = $_POST['bermuda'];
    $chinelo = $_POST['chinelo'];
    $bone = $_POST['bone'];
    $parcelas = $_POST['parcelas'];
    $forma = $_POST['forma'];

    $total = ($regata*19.90) + ($social*59.90) + ($blusa*119.90) + ($pullover*39.90) + ($sapato*99.90) + ($calca*38.90) + ($meias*9.90) + ($luvas*24.90) + ($jaqueta*329.90) + ($bermuda*59.90) + ($chinelo*14.90) + ($bone*6.90);


    if ($forma == 2){
        $total_p = ($total / $parcelas);

        if($total_p < 10.00){
            echo("<br> A parcela não pode ser realizada");}
        
        else{
        echo("O valor da parcela vai ser de R$".$total_p);

        $taxa = ((6/100) * $total) + (6.90 * $parcelas); 
        echo("<br> A taxa de parcelamento vai ser de ".$taxa);
        }
        }
     
    if ($forma == 1){
        $desconto = (8.5/100 * $total);
        echo("<br> O seu valor com o desconto ficou R$".$desconto);
    }
    else{
        echo("<br> O seu valor total sem desconto ficou R$".$total);
    }
?>