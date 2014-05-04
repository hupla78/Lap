<?php 


class PafsController extends AppController{

public $components = array('Session','Cookie','PdfEdf');

public function Paf_print(){

$this->PdfEdf->generate();
die();

}




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

public function add(){

if(!empty($this->request->data)){
$this->Paf->save($this->request->data);
$this->redirect(array('controller'=>'Pafs','action'=>'view'));
}


}

public function view(){

$this->Paf->find('all');
$this->set('tab',$this->Paf->find('all'));




}



}

?>