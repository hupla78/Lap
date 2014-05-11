<?php

require('fpdf.php');

class PDF extends FPDF
{
    // Haut de page 1er page
    
    function Header1()
{
    
    // Logo
  
    $this->Image('img/logo_EDF.png',10,6,30);
    
     $this->Image('img/uto.jpg',45,0,30);
     $this->ln(1);
    // Police Arial gras 15
    $this->SetFont('Arial','B',12);
    // Décalage à droite
    $this->Cell(50);
    // Titre
    $this->Cell(100,15,"FICHE DE PILOTAGE UTO",0,1,'C');
    $this->ln(-10);
    $this->Cell(50);
    $this->Cell(100,15,"COMMANDES HORS STOCK",0,0,'C');
    
    $this->Cell(1);
    $this->Cell(40,10,"DIVERS",0,0,'C');
    $this->ln(5);
    $this->Cell(148);
    $this->Cell(45,10,"MECA-2013-0106",0,1,'C');
    $this->SetFont('Arial','I',7);
      $this->ln(-4);
    $this->Cell(50);
  
    $this->Cell(100,1,"(*) demande >10k€ et hors demande d'intérimaire",0,0,'C');
    $this->SetFont('Arial','B',12);
    $this->ln(5);   
        
}

      function Header3()
{
    
    // Logo
  
    $this->Image('img/logo_EDF.png',10,6,30);
    
     $this->Image('img/uto.jpg',45,0,30);
     $this->ln(1);
    // Police Arial gras 15
    $this->SetFont('Arial','B',12);
    // Décalage à droite
    
    $this->Cell(100);
     $this->MultiCell(80,10,'GRILLE DE PESAGE DES ENJEUX & ANALYSE DE RISQUE SIMPLIFIEE',0,'C');
     $this->ln(1);
   $this->Cell(190,0.1,'',1,1); 
        
}
            function Header4()
{
    
    // Logo
  
    $this->Image('img/logo_EDF.png',10,6,30);
    $this->SetFont('Arial','B',12);
    $this->Cell(100);
     $this->MultiCell(80,10,'COMPLEMENTS',0,'J');
     $this->ln(2);
     $this->SetFont('Arial','',11);
     $this->Cell(20);
   $this->Cell(190,1,'VRAI',0,0); 
        
}
          
                    // Heut de page de la deuxième page
     
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






class PdfEdfRePComponent extends Component{

public $controller = false;
public $pdf; 

public function __construct(ComponentCollection $collection, $settings){
$this->controller = $collection->getController();
$this->pdf = new PDF();


}

public function generate($value){
    

$this->pdf->SetDrawColor(0,50,150);
//première page
$this->pdf->AddPage();
$this->pdf->Header1();
$this->pdf->SetFont('Arial','',11);

$this->pdf->ln(1);
$this->pdf->Cell(190,193,'',1,0,'C');
$this->pdf->Cell(-190);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(70,5,'Besoin',1,0,'C');
$this->pdf->SetFont('Arial','',10);
$this->pdf->ln(5);
$this->pdf->Cell(-9.5);
$this->pdf->Cell(60,10,"N° D'affaire : ",0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(20);
$this->pdf->Cell(60,10,$value['Paf']['n_DA'],0,1,'C');//exemple de comment tu doit faire avec les bonne valeur
$this->pdf->ln(-10);
$this->pdf->Cell(90.2);
$this->pdf->Cell(60,10,'Affaire suivi par :',0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(137);
$this->pdf->Cell(10,10,'F',0,1,'C');
$this->pdf->ln(-5);
$this->pdf->Cell(-2.3);
$this->pdf->Cell(60,10,"N° Demande d'achat : ",0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(20);
$this->pdf->Cell(60,10,'G',0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(83.5);
$this->pdf->Cell(60,10,'Groupe :',0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(112);
$this->pdf->Cell(60,10,'N',0,1,'C');
$this->pdf->ln(-5);
$this->pdf->Cell(-7);
$this->pdf->Cell(60,10,"N° Commande : ",0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(20);
$this->pdf->Cell(60,10,'I',0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(80.2);
$this->pdf->Cell(60,10,'PF :',0,1,'C');
$this->pdf->ln(-10);
$this->pdf->Cell(112);
$this->pdf->Cell(60,10,'C',0,1,'C');

$this->pdf->Cell(-8);
$this->pdf->SetFont('Arial','B',10);

$this->pdf->Cell(60,10,'Objet du besoin :',0,1,'C');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium ',1,'J',false);
$this->pdf->ln(6);
$this->pdf->Cell(5);
$this->pdf->Cell(10,2,'Comandite',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'O',0,1,'L');
$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->Cell(10,2,'Code Fournisseur',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'DH',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,2,'Date début',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'AY',0,1,'L');

$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->Cell(10,2,'Interlocuteur :',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'DI',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,2,'Date Fin de prestation',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'AW',0,1,'L');

$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->Cell(10,2,'ou Code Siret :',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'DJ',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,2,'Date notification prévue',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,2,'AZ',0,1,'L');
$this->pdf->ln(-15);
$this->pdf->Cell(105);
$this->pdf->Cell(75,18,'',1,1);
$this->pdf->ln(2);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(70,5,'Analyse',1,0,'C');
$this->pdf->Cell(25);
$this->pdf->Cell(70,5,'Budget',1,1,'C');
$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Catégorie',0,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(30);
$this->pdf->Cell(10,1,' Cat1: RSTU',0,0,'L');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'Ventilation de la commande :',0,1,'L');

$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Hors CE',0,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(30);
$this->pdf->Cell(10,1,' DK',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'Année N :',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'AC',0,0,'L');


$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Segmentation :',0,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(30);
$this->pdf->Cell(10,1,' vwxyz',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'Année N+1 :',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'AD',0,0,'L');

$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(8);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Ouverture marché',0,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(30);
$this->pdf->Cell(10,1,' M',0,0,'L');
$this->pdf->ln(-3);
$this->pdf->Cell(105);
$this->pdf->Cell(10,1,'Année N+2 :',0,0,'L');
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'AE',0,1,'L');

$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(6);
$this->pdf->Cell(105);
$this->pdf->Cell(10,1,'Montant ',0,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(50);
$this->pdf->Cell(10,1,'AJ',0,1,'L');

$this->pdf->ln(-34);
$this->pdf->Cell(95,38,'',1,0);
$this->pdf->Cell(95,38,'',1,1);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(70,5,'Imputation',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(90);
$this->pdf->Cell(10,1,'CSS :',0,0,'L');
$this->pdf->Cell(2);
$this->pdf->Cell(10,1,'AL',0,0,'L');
$this->pdf->Cell(30);
$this->pdf->Cell(10,1,'OI/EOTP :',0,0,'L');
$this->pdf->Cell(8);
$this->pdf->Cell(10,1,'AK',0,1,'L');
$this->pdf->ln(1);
$this->pdf->SetFont('Arial','I',8);
$this->pdf->Cell(70,5,'A remplir par a cellule approvisionnement (Bur. 2-D210) si prestation hors-réparation :',0,1,'L');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(40,5,'Autorisé (k€)',1,0,'C');
$this->pdf->Cell(40,5,'Dernière Reprev. (k€)',1,0,'C');
$this->pdf->Cell(50,5,'Réalisé (k€)',1,0,'C');
$this->pdf->Cell(60,5,'Engagé (en k€) (y compris DA)',1,1,'C');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(40,10,'',1,0,'L');
$this->pdf->Cell(40,10,'',1,0,'L');
$this->pdf->Cell(50,10,'',1,0,'L');
$this->pdf->Cell(60,10,'',1,1,'L');

$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(70,5,'Pesage des enjeux',1,1,'C');
$this->pdf->SetFont('Arial','',10);
$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Enjeux -> Dossier simple',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(60);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(2);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Enjeux moyen -> AdR au verso',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(60);
$this->pdf->Cell(3,3,'',1,0);
$this->pdf->ln(1);
$this->pdf->Cell(70);
$this->pdf->Cell(10,1,'-> Traitement : Affaire Finalité (avis RD)',0,0,'L');
$this->pdf->Cell(65);
$this->pdf->Cell(1,1,'Oui',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(155);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(165);
$this->pdf->Cell(1,1,'Non',0,0,'L');

$this->pdf->ln(-1);
$this->pdf->Cell(175);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(2);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'Enjeux Fort',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(60);
$this->pdf->Cell(3,3,'',1,0);
$this->pdf->ln(1);
$this->pdf->Cell(70);
$this->pdf->Cell(10,1,'-> Traitement : Affaire Unité',0,1,'L');
$this->pdf->ln(-17);
$this->pdf->Cell(190,20,'',1,1);

$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(70,5,'Documents',1,1,'C');
$this->pdf->Cell(100);
$this->pdf->SetFont('Arial','I',9);
$this->pdf->Cell(10,1,'A joindre à la commande',0,1,'L');





$this->pdf->SetFont('Arial','',10);
$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'CSCT : N°',0,0,'L');
$this->pdf->Cell(40);
$this->pdf->Cell(10,1,'AN',0,0,'L');


$this->pdf->Cell(70);
$this->pdf->Cell(1,1,'Oui',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(112);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(102);
$this->pdf->Cell(1,1,'Non',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(145);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(2);
$this->pdf->Cell(5);



$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(10,1,'CSCP : N°',0,0,'L');
$this->pdf->Cell(40);
$this->pdf->Cell(10,1,'AO',0,0,'L');


$this->pdf->Cell(70);
$this->pdf->Cell(1,1,'Oui',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(112);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(102);
$this->pdf->Cell(1,1,'Non',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(145);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(2);
$this->pdf->Cell(5);


$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(10,1,'Date envoi mandat CEIDRE',0,0,'L');
$this->pdf->Cell(40);
$this->pdf->Cell(10,1,'AP',0,1,'L');

$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(10,1,'NAR : réf',0,0,'L');
$this->pdf->Cell(40);
$this->pdf->Cell(10,1,'AQ',0,1,'L');

$this->pdf->ln(3);
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(10,1,'Contrat cadre : N°',0,0,'L');
$this->pdf->Cell(40);
$this->pdf->Cell(10,1,'AR',0,1,'L');



$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(6);
$this->pdf->Cell(3);
$this->pdf->Cell(70,5,'Validation',1,0,'C');
$this->pdf->Cell(50,5,'Visa',1,0,'C');
$this->pdf->Cell(50,5,'Date',1,1,'C');
$this->pdf->SetFont('Arial','',10);


$this->pdf->Cell(3);
$this->pdf->SetFont('Arial','',7);
$this->pdf->Cell(70,8,"1/- Pilote du dossier d'achat",1,0,'C');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(50,8,'',1,0,'C');
$this->pdf->Cell(50,8,'',1,1,'C');


$this->pdf->Cell(3);
$this->pdf->SetFont('Arial','',7);
$this->pdf->MultiCell(70,4,"2/-Resp. Budgétaire: engage le budget ( valide la DA PGI, l'imputation et qu'il dispose du budget)",1,'C',false);
$this->pdf->SetFont('Arial','',10);
$this->pdf->ln(-8);
$this->pdf->Cell(73);
$this->pdf->Cell(50,8,'',1,0,'C');
$this->pdf->Cell(50,8,'',1,1,'C');

$this->pdf->Cell(3);
$this->pdf->SetFont('Arial','',7);
$this->pdf->MultiCell(70,4,"2 bis - Signataire ayant délégation financière approprié* (si>1M€ valide l'Entreprise).",1,'C',false);

$this->pdf->ln(-8);
$this->pdf->Cell(73);
$this->pdf->Cell(50,8,'',1,0,'C');
$this->pdf->Cell(50,8,'',1,1,'C');

$this->pdf->Cell(3);
$this->pdf->Cell(70,8,'2 ter -Pilote gestion DPRL si engagé > Autorisé',1,0,'C');
$this->pdf->Cell(50,8,'',1,0,'C');
$this->pdf->Cell(50,8,'',1,1,'C');

$this->pdf->Cell(3);
$this->pdf->SetFont('Arial','',7);
$this->pdf->MultiCell(70,4,"            3/ Si DPRL, contrôle qualité du dossier :            Chef de Groupe.",1,'C',false);

$this->pdf->ln(-8);
$this->pdf->Cell(73);
$this->pdf->Cell(50,8,'',1,0,'C');
$this->pdf->Cell(50,8,'',1,1,'C');

$this->pdf->ln(1.5);
$this->pdf->Cell(3);
$this->pdf->Cell(1,1,'NB : les signatures et validations PGI sont formalisés dans la note D4507991434 et dans le mode opératoire D4057091976.',0,0,'L');


$this->pdf->Image('img/approuve.jpg',185,250,20);



$this->pdf->AddPage();
$this->pdf->Header3();
$this->pdf->SetFont('Arial','',8);
$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,3,"Ce document n'a pas vocation à remplacer le Guide de Risques 07/0880 qui reste le document à suivre dans les cas où une démarche complète d'AdR est nécessaire (rédaction d'une Note d'Analyse de Risques...)",0,'L');
$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,3,"Ce document constitue un outil d'approche de l'AdR relative à l'activité d'approvisionnement et de remise en état de PdR. Il permet aux Chargés d'Affaires de se positionner sur les principaux risques liés à cette activité.",0,'L');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->Cell(80,5,'Grille de pesage des enjeux',1,1,'L');





$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'',1,0,'L');
$this->pdf->Cell(60);
$this->pdf->Cell(70,8,'POUR PRESTATIONS PdR',1,1,'C');
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'',1,0,'L');

$this->pdf->Cell(20,4,'Faible',1,0,'C');
$this->pdf->Cell(20,4,'Moyen',1,0,'C');
$this->pdf->Cell(20,4,'Fort',1,0,'C');

$this->pdf->Cell(70,8,'Commentaires',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(-4);
$this->pdf->Cell(55);
$this->pdf->Cell(20,4,'(de 0 à 2)',1,0,'C');
$this->pdf->Cell(20,4,'(3)',1,0,'C');
$this->pdf->Cell(20,4,'(de 4 à 5)',1,1,'C');

$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Coût',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BU',1,0,'C');
$this->pdf->Cell(20,8,'BU',1,0,'C');
$this->pdf->Cell(20,8,'BU',1,0,'C');
$this->pdf->Cell(70,8,'CD',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Disponibilité',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BV',1,0,'C');
$this->pdf->Cell(20,8,'BV',1,0,'C');
$this->pdf->Cell(20,8,'BV',1,0,'C');
$this->pdf->Cell(70,8,'CE',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Sureté (x2)',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BW',1,0,'C');
$this->pdf->Cell(20,8,'BW',1,0,'C');
$this->pdf->Cell(20,8,'BW',1,0,'C');
$this->pdf->Cell(70,8,'CF',1,1,'C');
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Technique',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BX',1,0,'C');
$this->pdf->Cell(20,8,'BX',1,0,'C');
$this->pdf->Cell(20,8,'BX',1,0,'C');
$this->pdf->Cell(70,8,'CC',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Fournisseur',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BY',1,0,'C');
$this->pdf->Cell(20,8,'BY',1,0,'C');
$this->pdf->Cell(20,8,'BY',1,0,'C');
$this->pdf->Cell(70,8,'CH',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Exigences réglementaires',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'BZ',1,0,'C');
$this->pdf->Cell(20,8,'BZ',1,0,'C');
$this->pdf->Cell(20,8,'BZ',1,0,'C');
$this->pdf->Cell(70,8,'CI',1,1,'C');
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(50,8,'Sécurité',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'CB',1,0,'C');
$this->pdf->Cell(20,8,'CB',1,0,'C');
$this->pdf->Cell(20,8,'CB',1,0,'C');
$this->pdf->Cell(70,8,'CK',1,1,'C');
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Radioprotection',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'CC',1,0,'C');
$this->pdf->Cell(20,8,'CC',1,0,'C');
$this->pdf->Cell(20,8,'CC',1,0,'C');
$this->pdf->Cell(70,8,'CL',1,1,'C');
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Total',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(20,8,'0',1,0,'C');
$this->pdf->Cell(20,8,'0',1,0,'C');
$this->pdf->Cell(20,8,'0',1,0,'C');
$this->pdf->Cell(70,8,'CM',1,1,'C');



$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(6);
$this->pdf->Cell(85);
$this->pdf->Cell(10,1,'Enjeux :',0,0,'L');
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,'CN',0,1,'L');

$this->pdf->Cell(5);
$this->pdf->Cell(60,5,'Commentaires :',1,1,'C');
$this->pdf->ln(4);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium ',1,'J',false);


$this->pdf->ln(4);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(90,5,'Analyse de risque simplifiée',1,1,'L');

$this->pdf->ln(4);
$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,4,'',0,0,'L');
$this->pdf->Cell(60,4,'RISQUES',1,0,'C');
$this->pdf->Cell(70,4,'PARADES',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Coût',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CP',1,0,'C');
$this->pdf->Cell(70,8,'CY',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Disponibilité',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CQ',1,0,'C');
$this->pdf->Cell(70,8,'CZ',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Sûreté',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CR',1,0,'C');
$this->pdf->Cell(70,8,'DA',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Technique',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CS',1,0,'C');
$this->pdf->Cell(70,8,'DB',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Fournisseur',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CT',1,0,'C');
$this->pdf->Cell(70,8,'DC',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Exigences réglementaires',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CU',1,0,'C');
$this->pdf->Cell(70,8,'DD',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Sécurité',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CV',1,0,'C');
$this->pdf->Cell(70,8,'DE',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Radioprotection',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CW',1,0,'C');
$this->pdf->Cell(70,8,'DF',1,1,'C');

$this->pdf->Cell(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(50,8,'Environnement',1,0,'L');
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(60,8,'CX',1,0,'C');
$this->pdf->Cell(70,8,'DG',1,1,'C');



$this->pdf->Line(15,73,65,81);
$this->pdf->ln(-198);
$this->pdf->Cell(40);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(1,1,'Enjeux',0,1);
$this->pdf->ln(2);
$this->pdf->Cell(5);
$this->pdf->Cell(1,1,'Risques',0,1);
$this->pdf->SetFont('Arial','',10);

$this->pdf->AddPage();
$this->pdf->Header4();
$this->pdf->ln(7);
$this->pdf->SetFont('Arial','B',10);

$this->pdf->Cell(190,240,'',1,1,'C');

$this->pdf->ln(-230);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,"1/ Description complète de l'objet du besoin",0,1,'L');


$this->pdf->ln(5);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, enim aut tempora omnis laborum odit alias impedit. Nostrum, architecto, quas, voluptate iusto consequuntur blanditiis est tempore quos inventore quod perspiciatis. ',1,'J',false);


$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,"2/ Si demande de gré à gré ou d'avenant sur commande en cours justifier la limitation de la concurrence (remplace << l'annexe 2>>)",0,'J',false);

$this->pdf->ln(5);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, enim aut tempora omnis laborum odit alias impedit. Nostrum, architecto, quas, voluptate iusto consequuntur blanditiis est tempore quos inventore quod perspiciatis. ',1,'J',false);



$this->pdf->ln(5);
$this->pdf->SetFont('Arial','B',10);
$this->pdf->Cell(5);
$this->pdf->Cell(10,1,"3/ Si prestation d'assistance technique, préciser le type d'activité :",0,1,'L');
$this->pdf->SetFont('Arial','',10);

$this->pdf->ln(5);
$this->pdf->Cell(20);
$this->pdf->Cell(1,1,'>Activité',0,0,'L');
$this->pdf->Cell(35);
$this->pdf->Cell(10,1,'N1',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(64);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(100);
$this->pdf->Cell(10,1,'N2',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(107);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(130);
$this->pdf->Cell(10,1,'N3',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(137);
$this->pdf->Cell(3,3,'',1,0);

$this->pdf->SetFont('Arial','I',7);
$this->pdf->Cell(3);
$this->pdf->Cell(10,1,"(cf Polotique Faire ou faire faire d'UTO)",0,0,'L');
$this->pdf->SetFont('Arial','',10);

$this->pdf->ln(5);
$this->pdf->Cell(20);
$this->pdf->Cell(1,1,'>Activité',0,0,'L');
$this->pdf->Cell(35);
$this->pdf->Cell(10,1,'Pérenne',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(72);
$this->pdf->Cell(3,3,'',1,1);
$this->pdf->ln(-2);
$this->pdf->Cell(100);
$this->pdf->Cell(10,1,'ou Ponctuelle',0,0,'L');
$this->pdf->ln(-1);
$this->pdf->Cell(125);
$this->pdf->Cell(3,3,'',1,1);


$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, enim aut tempora omnis laborum odit alias impedit. Nostrum, architecto, quas, voluptate iusto consequuntur blanditiis est tempore quos inventore quod perspiciatis. ',1,'J',false);


$this->pdf->SetFont('Arial','B',10);
$this->pdf->ln(5);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,"4/ Si contrats-cadres multu-fournisseurs (notamment contrats d'assistance technique), préciser les fournisseurs consultés et justifier le fournisseir de retenu",0,'J',false);

$this->pdf->ln(5);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(5);
$this->pdf->MultiCell(180,5,'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, nostrum, ipsum, similique, quia nesciunt alias deserunt laudantium accusantium soluta distinctio commodi non tenetur consectetur. Optio est laudantium neque inctio commodi non tenetur consectetur. Optio est laudantium neque consectetur. Optio est laudantium Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, enim aut tempora omnis laborum odit alias impedit. Nostrum, architecto, quas, voluptate iusto consequuntur blanditiis est tempore quos inventore quod perspiciatis. ',1,'J',false);


$this->pdf->ln(10);
$this->pdf->SetFont('Arial','',10);
$this->pdf->Cell(115);
$this->pdf->MultiCell(65,5,"Visa Mission Gestion Finances(*) pour les dossiers d'assistance technique (=> paragraphes 3 et 4 après signature de la demande d'achat papier.                                                                                                                                                                                                        ",1,'J',false);

}

public function output(){

$this->pdf->Output();

}

}

?>
