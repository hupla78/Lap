
<?php

require('../fpdf.php');

class PDF extends FPDF
{
    // Haut de page 1er page
    
    function Header1()
{
    
    // Logo
  
    $this->Image('logo_EDF.png',10,6,30);
    
     $this->Image('uto.jpg',45,0,30);
     $this->ln(1);
    // Police Arial gras 15
    $this->SetFont('Arial','B',12);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->MultiCell(60,5,"FICHE DE PILOTAGE UTO COMMANDES STOCK",0,'C');
    $this->ln(-5);
    $this->Cell(145);
    $this->MultiCell(50,5,"DIVERS MECA-2013-0106",0,'C');  
    $this->ln(3);     
}
     // Heut de page de la deuxième page
     
     function Header2()
{
    
    // Logo
    $this->Image('logo_EDF.png',10,6,30);
       $this->Image('uto.jpg',45,0,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',13);
    // Décalage à droite
    $this->Cell(75);
    // Titre
    $this->Cell(110,15,"GRILLE DE PESAGE DES ENJEUX &",0,1,'C');
   
    $this->ln(20);   
        
}
  // Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}  
    
// Chargement des données

}



$pdf = new PDF();




$pdf->SetDrawColor(0,50,150);
//première page
$pdf->AddPage();
$pdf->Header1();
$pdf->SetFont('Arial','',11);

$pdf->ln(1);
$pdf->Cell(190,195,'',1,0,'C');
$pdf->Cell(-180);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,8,'Besoin',1,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(10);
$pdf->Cell(15);
$pdf->Cell(10,10,"N° D'affaire : ",0,0,'C');
$pdf->Cell(8);
$pdf->Cell(10,10,"H ",0,0,'L');
$pdf->Cell(65);
$pdf->Cell(10,10,"Affaire suivi par : ",0,0,'C');
$pdf->Cell(10);
$pdf->Cell(10,10,"F",0,1,'L');

$pdf->ln(-5);
$pdf->Cell(22.2);
$pdf->Cell(10,10,"N° Demande d'achat : ",0,0,'C');
$pdf->Cell(13);
$pdf->Cell(10,10,"O",0,0,'L');
$pdf->Cell(46.5);
$pdf->Cell(10,10,"Groupe : ",0,0,'C');
$pdf->Cell(5);
$pdf->Cell(10,10,"N",0,1,'L');

$pdf->ln(-5);
$pdf->Cell(17.3);
$pdf->Cell(10,10,"N° Commande : ",0,0,'C');
$pdf->Cell(8);
$pdf->Cell(10,10,"I",0,0,'L');
$pdf->Cell(53);
$pdf->Cell(10,10,"PC : ",0,0,'C');

$pdf->Cell(10,10,"C",0,1,'L');




$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,10,'Objet du besoin :',0,1,'C');

$pdf->SetFont('Arial','',10);

$pdf->Cell(5);
$pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, ipsa, facere aspernatur optio possimus distinctio facilis consectetur minima voluptatibus quis natus dicta recusandae unde error cumque fuga quia atque animi. ',1,'J',false);




$pdf->ln(3);
$pdf->Cell(-11);
$pdf->Cell(60,10,'Commandite :',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(5);
$pdf->Cell(60,10,'O',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(85.3);
$pdf->Cell(60,10,'Date livraison souhaitée :',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(144);
$pdf->Cell(10,10,'AW',0,1,'C');
$pdf->ln(-5);
$pdf->Cell(-11.5);
$pdf->Cell(60,10,'Fournisseur :',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(5);
$pdf->Cell(60,10,'J',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(85);
$pdf->Cell(60,10,'Date notification prévue :',0,1,'C');
$pdf->ln(-10);
$pdf->Cell(144);
$pdf->Cell(10,10,'AZ',0,1,'C');
$pdf->ln(-15);
$pdf->Cell(90);



$pdf->Cell(90,15,'',1,1,'C');
$pdf->ln(2);




$pdf->Cell(95,50,'',1,1,'C');
$pdf->ln(-50);

$pdf->Cell(95);
$pdf->Cell(95,50,'',1,1,'C');
$pdf->ln(-50);










$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Analyse',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(-5);
$pdf->Cell(95);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Budget',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(2);
$pdf->Cell(40,5,'Catégorie :',0,1,'C');
$pdf->ln(-5);
$pdf->Cell(30);
$pdf->Cell(40,5,'RSTV',0,1,'C');
$pdf->Cell(3.5);
$pdf->Cell(40,5,'Segmentation :',0,1,'C');
$pdf->ln(-5);
$pdf->Cell(30);
$pdf->Cell(40,5,'WXYZ',0,1,'C');
$pdf->Cell(7.2);
$pdf->Cell(40,5,'Ouverture Marché :',0,1,'C');
$pdf->ln(-5);
$pdf->Cell(30);
$pdf->Cell(40,5,'M',0,1,'C');
$pdf->Cell(-1);
$pdf->Cell(40,5,'Hors CE :',0,1,'C');
$pdf->Cell(3);
$pdf->ln(5);
$pdf->Cell(40,5,'Achat massif :',0,1,'C');
$pdf->ln(-5);
$pdf->Cell(30);
$pdf->Cell(40,5,'AA',0,1,'C');
$pdf->Cell(23);
$pdf->Cell(40,5,"-> Si oui remplir l'AdR simplifié au dos",0,1,'C');
$pdf->ln(-35);
$pdf->Cell(105);
$pdf->Cell(40,5,'Ventilation de la commande :',0,1,'C');
$pdf->ln(2);
$pdf->Cell(105);
$pdf->Cell(10,5,'Année N :',0,1,'C');
$pdf->Cell(107);
$pdf->Cell(10,5,'Année N+1 :',0,1,'C');
$pdf->Cell(107);
$pdf->Cell(10,5,'Année N+2 :',0,1,'C');
$pdf->ln(5);
$pdf->Cell(102);
$pdf->Cell(10,5,'Montant',0,1,'C');
$pdf->ln(-25);
$pdf->Cell(150);
$pdf->Cell(10,5,'AC',0,1,'C');

$pdf->Cell(150);
$pdf->Cell(10,5,'AD',0,1,'C');

$pdf->Cell(150);
$pdf->Cell(10,5,'AE',0,1,'C');
$pdf->ln(5);
$pdf->Cell(150);
$pdf->Cell(10,5,'AJ',0,1,'C');
$pdf->ln(11);





$pdf->Cell(190,22,'',1,1,'C');
$pdf->ln(-22);





$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,5,'Passage des enjeux',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(1);
$pdf->Cell(23.2);
$pdf->Cell(10,5,'Enjeu faible -> Dossier simple',0,0,'C');
$pdf->ln(1);
$pdf->Cell(53);
$pdf->Cell(3,3,'',1,0);
$pdf->ln(-1);
$pdf->Cell(70);
$pdf->Cell(10,5,'->Traitement : Affaire Finalité (avis RD)       Oui',0,0,'L');
$pdf->ln(1);
$pdf->Cell(147);
$pdf->Cell(3,3,'',1,0);
$pdf->ln(-1);
$pdf->Cell(155);

$pdf->Cell(10,5,'Non',0,0,'L');
$pdf->ln(1);
$pdf->Cell(164);
$pdf->Cell(3,3,'',1,1);

$pdf->ln(1);
$pdf->Cell(23.2);
$pdf->Cell(10,5,'Enjeu Moyen -> AdR au verso',0,0,'C');
$pdf->ln(1);
$pdf->Cell(53);
$pdf->Cell(3,3,'',1,0);
$pdf->ln(-1);
$pdf->Cell(70);
$pdf->Cell(10,5,'->Traitement : Affaire Unité',0,1,'L');



$pdf->Cell(3.6);
$pdf->Cell(10,5,'Enjeu Fort ',0,0,'L');
$pdf->ln(1);
$pdf->Cell(53);
$pdf->Cell(3,3,'',1,1);


$pdf->ln(1.7);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Documents',1,1,'C');
$pdf->SetFont('Arial','',10);

$pdf->ln(-5.5);
$pdf->Cell(90);
$pdf->SetFont('Arial','I',9);
$pdf->Cell(40,5,'A joindre avec la commande',0,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(3);
$pdf->Cell(10);
$pdf->Cell(10,3,'CSCT : N°',0,0,'C');
$pdf->Cell(5);
$pdf->Cell(1,3,'AN',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(1,3,'Oui',0,0,'L');
$pdf->Cell(8);
$pdf->Cell(3,3,'',1,0,'L');
$pdf->Cell(15);
$pdf->Cell(1,3,'Non',0,0,'L');
$pdf->Cell(8);
$pdf->Cell(3,3,'',1,1,'L');

$pdf->ln(3);
$pdf->Cell(10);
$pdf->Cell(10,3,'CSCP : N°',0,0,'C');
$pdf->Cell(5);
$pdf->Cell(1,3,'AO',0,0,'L');
$pdf->Cell(60);
$pdf->Cell(1,3,'Oui',0,0,'L');
$pdf->Cell(8);
$pdf->Cell(3,3,'',1,0,'L');
$pdf->Cell(15);
$pdf->Cell(1,3,'Non',0,0,'L');
$pdf->Cell(8);
$pdf->Cell(3,3,'',1,1,'L');

$pdf->ln(3);
$pdf->Cell(29);
$pdf->Cell(1,3,'Date envoi mandat CEIDRE :',0,0,'C');
$pdf->Cell(25);
$pdf->Cell(1,3,'AP',0,1,'L');

$pdf->ln(3);
$pdf->Cell(13);
$pdf->Cell(1,3,'NAR : réf',0,0,'C');
$pdf->Cell(9);
$pdf->Cell(1,3,'AQ',0,1,'L');

$pdf->ln(3);
$pdf->Cell(20);
$pdf->Cell(1,3,'Contrat cadre : N°',0,0,'C');
$pdf->Cell(16);
$pdf->Cell(1,3,'AR',0,1,'L');


$pdf->ln(10);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,5,'Validation',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(-5);
$pdf->Cell(70);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Visa :',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->ln(-5);
$pdf->Cell(110);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Date :',1,1,'C');
$pdf->SetFont('Arial','',10);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(70,8,"1/ -Pilote du dossier d'achat",1,1,'L');
$pdf->ln(1);

$pdf->Cell(70,4,"2/ -Revue d'offre et engagement budgétaire:",0,1,'L');
$pdf->ln(-2);
$pdf->Cell(70,8,"Responsable du domaine",0,1,'L');
$pdf->ln(-3);
$pdf->SetFont('Arial','B',6.5);
$pdf->Cell(70,8,'2 bis - Signature ayant délégation financière appropriée (si>',0,1,'L');
$pdf->ln(-4);
$pdf->Cell(70,8," 1M€ valide que l'Entreprise est prête à dépenser ce montant",0,1,'L');
$pdf->SetFont('Arial','B',8);

$pdf->ln(-3.5);
$pdf->Cell(70,8," 3/ -Contrôle qualité du dossier :",0,1,'L'); 


$pdf->ln(-4.5);
$pdf->Cell(70,8," Chef de Groupe",0,1,'L'); 
$pdf->ln(-28);
$pdf->SetFont('Arial','',9);
$pdf->Cell(70,9,'',1,1,'L');
$pdf->Cell(70,9,'',1,1,'L');
$pdf->Cell(70,9,'',1,1,'L');
$pdf->ln(-35);
$pdf->Cell(70);
$pdf->Cell(40,8,'visa1',1,1,'L');
$pdf->Cell(70);
$pdf->Cell(40,9,'visa2',1,1,'L');
$pdf->Cell(70);
$pdf->Cell(40,9,'visa3',1,1,'L');
$pdf->Cell(70);
$pdf->Cell(40,9,'visa4',1,1,'L');
$pdf->ln(-35);
$pdf->Cell(110);
$pdf->Cell(40,8,'Edité le date1',1,1,'L');
$pdf->Cell(110);
$pdf->Cell(40,9,'Edité le date2',1,1,'L');
$pdf->Cell(110);
$pdf->Cell(40,9,'Edité le date3',1,1,'L');
$pdf->Cell(110);
$pdf->Cell(40,9,'Edité le date4',1,1,'L');



$pdf->Image('validation.jpg',165,235,40);
$pdf->ln(-0.1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(10,5,'NB : les signatures PGI sont formalisés dans la note D4507991434 et dans le mode opératoire D450791976.',0,1,'L');



//2ieme page

$pdf->AddPage();
$pdf->Header2();
$pdf->ln(-10);
$pdf->Cell(190,0.1,'',1,1,'C');
$pdf->SetFont('Arial','',7.5);
$pdf->ln(4);
$pdf->Cell(190,0.1,"Ce documents n'a pas vocation à remplacer le Guide d'Analyse de Risques 07/0880 qui reste le documents à suivre ",0,10,'C');
$pdf->ln(3);
$pdf->Cell(190,0.1,"dans les cas ou une démarche complète d'AdR est nécessaire ( rédaction d'une Note d'Analyse de Risques....)",0,10,'C');




$pdf->ln(6);
$pdf->Cell(190,0.1,"Ce documents constitue un outil d'approche de l'AdR relative à l'activité d'approvisionnement et de remise en état de PdR.",0,10,'C');
$pdf->ln(3);
$pdf->Cell(190,0.1,"Il permet aux Chargés d'Affaires de se positionner sur les principaux risques liés à cette activité.",0,10,'C');
$pdf->ln(20);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,5,'Grille de pesage des enjeux',1,0,'L');
$pdf->ln(-10);
$pdf->Cell(102);
$pdf->Cell(90,15,'POUR ACHAT PDR',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->ln(13);
$pdf->Cell(1,1,'Risques',0,1);
$pdf->ln(-5);
$pdf->Cell(36);
$pdf->Cell(1,1,'Enjeux',0,1);
$pdf->ln(-3.5);
$pdf->Cell(50,10,'',1,0);
$pdf->Cell(17.3,5,'Faible',1,0,'C');
$pdf->Cell(17.3,5,'Moyen',1,0,'C');
$pdf->Cell(17.3,5,'Fort',1,0,'C');
$pdf->Cell(90,10,'Commentaires',1,1,'C');
$pdf->ln(-5);
$pdf->Cell(50);
$pdf->Cell(17.3,5,'(de 0 à 2)',1,0,'C');
$pdf->Cell(17.3,5,'(3)',1,0,'C');
$pdf->Cell(17.3,5,'(de 4 à 5)',1,1,'C');
$pdf->Cell(50,10,'Coût',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BU',1,0,'C');
$pdf->Cell(17.3,10,'BU',1,0,'C');
$pdf->Cell(17.3,10,'BU',1,0,'C');
$pdf->Cell(90,10,'CD',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Disponibilité',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BV',1,0,'C');
$pdf->Cell(17.3,10,'BV',1,0,'C');
$pdf->Cell(17.3,10,'BV',1,0,'C');
$pdf->Cell(90,10,'CE',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Sûreté (x2)',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BW',1,0,'C');
$pdf->Cell(17.3,10,'BW',1,0,'C');
$pdf->Cell(17.3,10,'BW',1,0,'C');
$pdf->Cell(90,10,'CF',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Technique',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BX',1,0,'C');
$pdf->Cell(17.3,10,'BX',1,0,'C');
$pdf->Cell(17.3,10,'BX',1,0,'C');
$pdf->Cell(90,10,'CG',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Fournisseur',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BY',1,0,'C');
$pdf->Cell(17.3,10,'BY',1,0,'C');
$pdf->Cell(17.3,10,'BY',1,0,'C');
$pdf->Cell(90,10,'CH',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Exigences réglementaires',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BZ',1,0,'C');
$pdf->Cell(17.3,10,'BZ',1,0,'C');
$pdf->Cell(17.3,10,'BZ',1,0,'C');
$pdf->Cell(90,10,'CI',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'Total',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(17.3,10,'BU+..',1,0,'C');
$pdf->Cell(17.3,10,'BU+..',1,0,'C');
$pdf->Cell(17.3,10,'BU+..',1,0,'C');
$pdf->Cell(90,10,'CI',1,1,'C');
$pdf->ln(5);



$pdf->SetFont('Arial','B',11);
$pdf->Cell(90);
$pdf->Cell(10,15,'Enjeux',0,0,'C');
$pdf->ln(5);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(140);
$pdf->Cell(10,10,'DIMENSIONNANT',0,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,5,'Commantaires :',1,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->ln(2);
$pdf->Cell(190,20,'CO',1,1,'C');
$pdf->ln(8);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,5,'Analyse de risques simplifiée :',1,1,'L');
$pdf->SetFont('Arial','',10);
$pdf->ln(4);
$pdf->Cell(50,7,'',0,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'RISQUES',1,0,'C');
$pdf->Cell(90,7,'PARADES',1,1,'C');

$pdf->Cell(50,7,'Coût',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CP',1,0,'C');
$pdf->Cell(90,7,'CY',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'Disponibilité',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CQ',1,0,'C');
$pdf->Cell(90,7,'CZ',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'Sûreté',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CR',1,0,'C');
$pdf->Cell(90,7,'DA',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'Technique',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CS',1,0,'C');
$pdf->Cell(90,7,'DS',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'Fournisseur',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CT',1,0,'C');
$pdf->Cell(90,7,'DL',1,1,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'Exigence réglementaire',1,0,'L');
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,7,'CU',1,0,'C');
$pdf->Cell(90,7,'DO',1,1,'C');


$pdf->Line(10,83,60,93);


$pdf->Output();



?>
