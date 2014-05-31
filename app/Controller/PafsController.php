<?php 


class PafsController extends AppController{

public $components = array('Session','Cookie','PdfEdfReP','PdfEdfStock');



public function Paf_print($id = false){

$content = $this->Paf->findById($id);


if($id){
//$this->PdfEdfReP->generate($content);
//$this->PdfEdfReP->output();



$this->PdfEdfStock->generate($content);
$this->PdfEdfStock->output();
die();
}else{
$this->redirect(array('controller'=>'Pafs','action'=>'view'));
}

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
    $this->Paf->save($this->request->data);
    $this->redirect(array('controller'=>'Pafs','action'=>'view'));
    
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
$vt = array('id','n_DA','PF','PILOTE','TYPE','OBJET');

if(!empty($this->request->data['recherche']['ss'])){



$tab = $this->Paf->find('all',array(
            //optimi 'fields'=>array,
            'conditions'=>array('Paf.'.$vt[$this->request->data['recherche']['TypeDeRecherche']].' like' => '%'.$this->request->data['recherche']['ss'].'%')
            ));
            if(empty($tab)){$tab = false;}

}else{


$tab = $this->Paf->find('all');


}
$this->set('vt',$vt);
$this->set('tab',$tab);




}

 
public function Cloture($id = false){



}


public function Enjeux($id = false){



}



}

?>