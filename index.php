<?php

function randomTc(){
	/*Random rakamlar değişkenlerine atandı*/
	$rand1 = rand(1,9);
	$rand2 = rand(0,9); 
	$rand3 = rand(0,9); 
	$rand4 = rand(0,9); 
	$rand5 = rand(0,9); 
	$rand6 = rand(0,9); 
	$rand7 = rand(0,9);
	$rand8 = rand(0,9); 
	$rand9 = rand(0,9);

	/*Random rakamlar tc dizisine atandı.*/
	$tc = array($rand1,$rand2,$rand3,$rand4,$rand5,$rand6,$rand7,$rand8,$rand9);
	/*Random rakamların hepsi birleştirilip 'birlestir' değişkenine atandı.*/
	$birlestir = implode("", $tc);
	/*TCNO algoritması kullanarak sondan 2 haneyi bulup h10 değişkenine atadık. */
	$h10 = ($tc[0]+$tc[2]+$tc[4]+$tc[6]+$tc[8])*7-($tc[1]+$tc[3]+$tc[5]+$tc[7]);
	/*h10 değişkeni 3 haneli bir cevap döndüğü için son hanesini aldık.*/
	$s10 = substr($h10,-1);
	/*TCNO algoritması kullanarak son haneyi bulduk h11 değişkenine atadık.*/
	$h11 = $tc[0]+$tc[2]+$tc[4]+$tc[6]+$tc[8]+$tc[1]+$tc[3]+$tc[5]+$tc[7]+$s10;
	/*h11 değişkeni 3 haneli bir cevap döndüğü için son hanesini aldık.*/
	$s11 = substr($h11,-1);

	return $birlestir.$s10.$s11;
}

/*Ekrana random TCNO'muzu basmış olduk.*/
echo randomTc();

?>
