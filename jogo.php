<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>General</title>
    <link rel="stylesheet" href="css/estilo.css">

<?php  
	$jogador = isset($_GET['jogador']) ? $_GET['jogador'] : "";		
?>

</head>
<body>
	<form method="get">
	<h3>Nome do jogador:</h3> <input type="text" name="jogador" id="jogador" value="<?php echo "$jogador"?>"><br><br>
    <input type="submit" name="Jogar dados"><br><br><br>
	</form>

	<?php  
    $somajog=0;
    $somamaq=0;
    $a=0;
    $b=0;
    $c=0;
    $d=0;
    $e=0;
    $f=0;
    $g=0;
    $h=0;
    $i=0;
    $j=0;
    $k=0;
    $l=0;
    $somaa=0;
    $somab=0;
    $somac=0;
    $somad=0;
    $somae=0;
    $somaf=0;
    $somag=0;
    $somah=0;
    $somai=0;
    $somaj=0;
    $somak=0;
    $somal=0;
    $trincaa=0;
    $trincab=0;
    $quadraa=0;
    $quadrab=0;
    $generala=0;
    $generalb=0;
    $baixaa=0;
    $baixab=0;
    $altaa=0;
    $altab=0;
    $fulla=0;
    $fullb=0;
    $somatotaljog=0;
    $somatotalmaq=0;

        echo "<h1><hr>$jogador</h1><br><br>";
    for ($dados=1; $dados <= 5; $dados++) { 
        $vetorJ[$dados]=rand(1,6);
        $somajog=$somajog+$vetorJ[$dados];
    if($vetorJ[$dados]== 1){
        echo "<img src='imagens/Número1.png'>";
        $a++;
    }
    if($vetorJ[$dados]== 2){
        echo "<img src='imagens/Número2.png'>";
        $b++;
    }
    if($vetorJ[$dados]== 3){
        echo "<img src='imagens/Número3.png'>";
        $c++;
    }
    if($vetorJ[$dados]== 4){
        echo "<img src='imagens/Número4.png'>";
        $d++;
    }
    if($vetorJ[$dados]== 5){
        echo "<img src='imagens/Número5.png'>";
        $e++;
    }
    if($vetorJ[$dados]== 6){
        echo "<img src='imagens/Número6.png'>";
        $f++;
    }
    
}

        echo "<h1 class=maquina><hr>Máquina<br><br></h1>";
    for ($dados=1; $dados <= 5; $dados++) { 
        $vetorM[$dados]= rand(1,6);
        $somamaq= $somamaq+$vetorM[$dados];
    if($vetorM[$dados]== 1){
        echo "<img src='imagens/Número1.png'>";
        $g++;
    }
    if($vetorM[$dados]== 2){
        echo "<img src='imagens/Número2.png'>";
        $h++;
    }
    if($vetorM[$dados]== 3){
        echo "<img src='imagens/Número3.png'>";
        $i++;
    }
    if($vetorM[$dados]== 4){
        echo "<img src='imagens/Número4.png'>";
        $j++;
    }
    if($vetorM[$dados]== 5){
        echo "<img src='imagens/Número5.png'>";
        $k++;
    }
    if($vetorM[$dados]== 6){
        echo "<img src='imagens/Número6.png'>";
        $l++;
    }

}

if($a>=2){
    $somaa= $a*1;
}
if($b>=2){
    $somab= $b*2;
}
if($c>=2){
    $somac= $c*3;
}
if($d>=2){
    $somad= $d*4;
}
if($e>=2){
    $somae= $e*5;
}
if($f>=2){
    $somaf= $f*6;

}
if($g>=2){
    $somag=$g*1 ;
}
if($h>=2){
    $somah= $h*2;
}
if($i>=2){
    $somai= $i*3;
}
if($j>=2){
    $somaj=$j*4;
}
if($k>=2){
    $somak= $k*5;
}
if($l>=2){
    $somal= $l*6;
}

if($a==3 || $f==3 || $b==3 || $c==3 || $d==3 || $e==3){
    $trincaa= 20;
}

if($g==3 || $h==3 || $i==3 || $j==3 || $k==3 || $l==3){
    $trincab= 20;
}
if($a==4 || $f==4 || $b==4 || $c==4 || $d==4 || $e==4){
    $quadraa= 30;
}

if($g==4 || $h==4 || $i==4 || $j==4 || $k==4 || $l==4){
    $quadrab= 30;
}
if($a==5 || $f==5 || $b==5 || $c==5 || $d==5 || $e==5){
    $generala= 50;
}

if($g==5 || $h==5 || $i==5 || $j==5 || $k==5 || $l==5){
    $generalb= 50;
}
if($a==1 && $b==1 && $c==1 && $d==1 && $e==1){
    $baixaa= 40;
}
if($g==1 && $h==1 && $i==1 && $j==1 && $k==1){
    $baixab= 40;
}
if($f==1 && $b==1 && $c==1 && $d==1 && $e==1){
    $altaa= 30;
}
if($l==1 && $h==1 && $i==1 && $j==1 && $k==1){
    $altab= 30;
}
if($a==2 && $b==3||$a==2 && $c==3 || $a==2 && $d==3 || $a==2 && $e==3 || $a==2 && $f==3 ||$b==2 && $a==3||$b==2 && $c==3 || $b==2 && $d==3 || $b==2 && $e==3 || $b==2 && $f==3 || $c==2 && $a==3||$c==2 && $b==3 || $c==2 && $d==3 || $c==2 && $e==3 || $c==2 && $f==3 || $d==2 && $a==3||$d==2 && $b==3 || $d==2 && $c==3 || $d==2 && $e==3 || $d==2 && $f==3 || $e==2 && $a==3||$e==2 && $b==3 || $e==2 && $c==3 || $e==2 && $d==3 || $e==2 && $f==3 || $f==2 && $a==3||$f==2 && $b==3 || $f==2 && $c==3 || $f==2 && $d==3 || $f==2 && $e==3){
    $fulla= 25;
}
if($g==2 && $h==3||$g==2 && $i==3 || $g==2 && $j==3 || $g==2 && $k==3 || $g==2 && $l==3 || $h==2 && $g==3||$h==2 && $i==3 || $h==2 && $j==3 || $h==2 && $k==3 || $h==2 && $l==3 || $i==2 && $g==3||$i==2 && $h==3 || $i==2 && $j==3 || $i==2 && $k==3 || $i==2 && $l==3 || $j==2 && $g==3||$j==2 && $h==3 || $j==2 && $i==3 || $j==2 && $k==3 || $j==2 && $l==3 || $k==2 && $g==3||$k==2 && $h==3 || $k==2 && $i==3 || $k==2 && $j==3 || $k==2 && $l==3 || $l==2 && $g==3||$l==2 && $h==3 || $l==2 && $i==3 || $l==2 && $j==3 || $l==2 && $k==3){
    $fullb= 25;
}
$somatotaljog= $somaa+$somab+$somac+$somad+$somae+$somaf+$trincaa+$quadraa+$fulla+$altaa+$baixaa+$generala+$somajog;
$somatotalmaq= $somag+$somah+$somai+$somaj+$somak+$somal+$trincab+$quadrab+$fullb+$altab+$baixab+$generalb+$somamaq;
echo
"<table>

<tr>
<hr>
<br>
<th> Tipos</th>
<th>$jogador</th> 
<th> Máquina   </th>

</tr>

<tr>

<td> Jogada 1 </td>
<td> $somaa </td>
<td> $somag  </td>

</tr>
<tr>

<td> Jogada 2 </td>
<td> $somab</td>
<td> $somah  </td>

</tr>
<tr>

<td> Jogada 3 </td>
<td> $somac </td>
<td> $somai  </td>

</tr>
<tr>

<td> Jogada 4 </td>
<td> $somad </td>
<td> $somaj  </td>

</tr>
<tr>

<td> Jogada 5 </td>
<td> $somae  </td>
<td> $somak  </td>

</tr>
<tr>

<td> Jogada 6 </td>
<td> $somaf </td>
<td> $somal  </td>

</tr>
<tr>

<td> Trinca </td>
<td> $trincaa  </td>
<td> $trincab  </td>

</tr>
<tr>

<td> Quadra </td>
<td>  $quadraa </td>
<td> $quadrab  </td>

</tr>
<tr>

<td> Full house </td>
<td> $fulla  </td>
<td> $fullb  </td>

</tr>
<tr>

<td> Sequência alta </td>
<td> $altaa  </td>
<td> $altab  </td>

</tr>
<tr>

<td> Sequência baixa </td>
<td> $baixaa  </td>
<td> $baixab  </td>

</tr>
<tr>

<td> General </td>
<td> $generala  </td>
<td> $generalb  </td>

</tr>
<tr>

<td> Aleatório </td>
<td> $somajog  </td>
<td> $somamaq  </td>

</tr>
<tr>

<td class=um> Soma total </td>
<td class= um> $somatotaljog  </td>
<td class= um> $somatotalmaq </td>

</tr>
</table><hr>";


if($somatotaljog>$somatotalmaq){
    echo"<h4>$jogador venceu com $somatotaljog pontos!</h4>";
}

if($somatotaljog<$somatotalmaq){
    echo"<h4>Máquina venceu com $somatotalmaq pontos!</h4>";
}

if($somatotaljog==$somatotalmaq){
    echo"<h4>Ocorreu um empate cada um com $somatotaljog pontos!</h4>";
}
	?>

</body>
</html>