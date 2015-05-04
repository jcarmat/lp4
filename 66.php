<center>
 <?php
$n1=$_REQUEST['n1'];
if($n1<10 and $n1>0 or $n1<0 and $n1>-10 ){
 echo "la desconposicion del numero <br>";
 echo "$n1";
}
else if($n1<1000000 and $n1>10 or $n1<-9 and $n1>-100 ){
   $b=$n1%10;
   $a=$n1/10;
   $a=($a-($b/10))*10;
echo "la desconposicion del numero <br>";
 echo "$a<br>";
 echo "$b";
}
else if($n1<1000 and $n1>99 or $n1<-99 and $n1>-1000 ){
  $b=$n1%100;
   $a=$b%10;
   $b=$b-$a;
   $c=$n1/100;
   $c=($c-(($b+$a)/100))*100;
    echo "la desconposicion del numerogxnj bghiuuydtydfjikdfodosdosuisstdhyudffpfpofgo0g <br>";
 echo "$c<br>";
 echo "$b<br>";
 echo "$a";
}
else{
  echo "Numero ingresado no valido";
}
?><style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-image: url(f.php_1.jpg);
}
-->
</style>
<p>
 <div lass="Estilo2"><a href="6.php">Volver</a></div>
 </center>