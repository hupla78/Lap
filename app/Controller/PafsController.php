<?php 


class PafsController extends AppController{

/*App::uses('fpdf','Lib/php');


// je suis la fonction qui rend un pdf 
public function PAFprint(){



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World !');


$pdf->Output();
die();
}
*/



//je rend la vue et permet la recherche dans les champspublic function view(){











// je suis la pour edit une vue et la add
public function edit($id = false)
{
    
    if($id){
    if(empty($this->request->data)){
    
    $this->request->data = $this->Paf->findById( $id );
    $this->set('action','Edition de '. $this->request->data['Paf']['id']);
    
    }
    else{
    
    $this->Paf->create($this->request->data);
    $this->Paf->save();
    $this->redirect('/');
    
    }}else{
     $this->redirect('/');
    
    }
    
    
}

public function index(){




}


public function view(){

$this->Paf->find('all');
$this->set('tab',$this->Paf->find('all'));




}



}

?>