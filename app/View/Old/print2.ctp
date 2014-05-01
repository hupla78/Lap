
<h2> Dossier d'affaires n  <?php echo $paf['Paf']['id']; ?></h2>
<br>
<h4> Pilote : <?php echo $paf['Paf']['PILOTE']; ?> </h4>
<h5> CAL/PR : <?php echo $paf['Paf']['CALPR']; ?>  </h5>
<h5> CAT : <?php echo $paf['Paf']['CAT']; ?> </h5>




<p><small>Created: <?php echo $paf['Paf']['Gest']; ?></small></p>


<?php
$jour = date('Y').'-'.date('m').'-'.date('d');
$nom_fichier = $jour.' - '.'Fiche de pilotage '.$paf['Paf']['id'].'.pdf';
$nom_dl = '../../'.$nom_fichier;

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->SetTextColor(0,0,153);
$pdf->SetXY(50,5);
$pdf->Cell(60,6,' FICHE DE PILOTAGE',0,1 ,'L');

$pdf->SetXY(80,15);
$pdf->Cell(60,6,' Commandes STOCK',0,1 ,'L');

$pdf->SetXY(160,5);
$pdf->Cell(40,10,$paf['Paf']['id'],1,1 ,'C');

$pdf->rect(5,25,200,265); // grand rectange
$pdf->rect(5.7,25.7,198.6,70.6); // rectangle du besoin
$pdf->rect(5.7,97,98.8,50); // rectangle analyse
$pdf->rect(105,97,99.2,50); // rectangle budget
$pdf->rect(5.7,148,198.6,30); // rectangle GPE


$pdf->SetTextColor(0,0,0);

$pdf->SetXY(5.7,25);
$pdf->SetfillColor(253,233,217);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,'Besoin',1,1,'C',true);

$pdf->SetXY(10,33);
$pdf->Cell(38,5,'Réf affaire :',0,1,'L',false);
$pdf->Cell(38,5,'N° DA :',0,1,'L',false);
$pdf->Cell(38,5,'N° commande :',0,1,'L',false);

$pdf->SetXY(105,33); $pdf->Cell(38,5,'Pilote :',0,1,'L',false);
$pdf->SetXY(105,38); $pdf->Cell(38,5,'Groupe :',0,1,'L',false);
$pdf->SetXY(105,43); $pdf->Cell(38,5,'PF :',0,1,'L',false);

$pdf->SetXY(10,50); 
$pdf->SetFont('Arial','BU',10);
$pdf->Cell(38,5,'Objet :',0,1,'L',false);

$pdf->SetXY(10,80);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(38,5,'Commandite :',0,1,'L',false);
$pdf->Cell(38,5,'Fournisseur :',0,1,'L',false);

$pdf->SetXY(105,80); $pdf->SetFont('Arial','B',10); $pdf->Cell(38,5,'Date de livraison souhaitee :',0,1,'L',false);
$pdf->SetXY(105,85); $pdf->Cell(38,5,'Date de notification souhaitée :',0,1,'L',false);


//  ANALYSE ***********
$pdf->SetXY(5.7,97);
$pdf->SetfillColor(253,233,217);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,'Analyse',1,1,'C',true);

$pdf->SetXY(10,105);
$pdf->Cell(38,5,'Catégorie :',0,1,'L',false);
$pdf->Cell(38,5,'Segment :',0,1,'L',false);
$pdf->Cell(38,5,'Ouverture marché :',0,1,'L',false);
$pdf->Cell(38,5,'Hors-CE :',0,1,'L',false);
$pdf->Cell(38,5,'Achat massif :',0,1,'L',false);

//  BUDGET ***********
$pdf->SetXY(105,97);
$pdf->SetfillColor(253,233,217);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,5,'Budget',1,1,'C',true);


$pdf->SetXY(110,105);
$pdf->Cell(38,5,'Ventilation de la commande :',0,1,'L',false);
$pdf->SetFont('Arial','',10);
$pdf->SetXY(110,110);
$pdf->Cell(38,5,'Année 2014 :',0,1,'L',false); 
$pdf->SetXY(110,115); $pdf->Cell(38,5,'Année 2015 :',0,1,'L',false);
$pdf->SetXY(110,120); $pdf->Cell(38,5,'Année 2016 :',0,1,'L',false);
$pdf->SetXY(110,125); $pdf->Cell(38,5,'Année 2017 :',0,1,'L',false);
$pdf->SetXY(110,130); $pdf->Cell(38,5,'Année 2018 :',0,1,'L',false);
$pdf->SetXY(110,135); $pdf->Cell(38,5,'Année 2019 :',0,1,'L',false);
$pdf->SetXY(110,140); $pdf->Cell(38,5,'Année 2020 :',0,1,'L',false);

//  Pesage des enjeux ***********
$pdf->SetXY(5.7,148);
$pdf->SetfillColor(253,233,217);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Pesage des enjeux',1,1,'C',true);

$pdf->SetXY(10,153);
$pdf->Cell(100,5,'Enjeux faible -> Dossier simple',0,1,'L',false);
$pdf->Cell(100,5,'Enjeux moyen  -> AdR au verso            Traitement affaire finalité (Avis RD)',0,1,'L',false);
$pdf->Cell(100,5,'Enjeux fort                              Traitement affaire unité',0,1,'L',false);


$pdf->Image('FPS.jpg',11,8,30);


$pdf->Output($nom_fichier,'F');
?>

Creation de fiche de pilotage -> OK

<br>
<br><br>

<input type='hidden' name='lien' value='<?php echo $nom_dl; ?>'> 
<a href='<?php echo $nom_dl; ?>'>Download fiche de pilotage</a> 

