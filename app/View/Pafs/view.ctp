<?php  $tt = array(
'C10','C11','C12','C13','C14','C15','C16','C17','C18',
'D10','D11','D12','D13','D14','D15','D16','D17','D18',
'J04','J42','J51','J52','J65','J66','J67','J68','J69',
'Z04','Z42','Z51','Z52','Z65','Z66','Z67','Z68','Z69'   
      ); ?>
    

    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="row" data-equalizer>
    <div class="large-6 small-12 columns panel" data-equalizer-watch>
    <div class="row">
        <h4 class="text-center">Recherche d'éléments</h4>
        <?php echo($this->Form->create('recherche'));?>
        
        <div class="large-12 small-12 columns">
        <?php echo($this->Form->input('ss',array('label'=>false)));?></div>
<div class="large-8 small-8 columns">
        <?php echo($this->Form->input('TypeDeRecherche',array('type'=>'select','label'=>'Type de recherche sur','options'=>$vt))); ?>
</div>
        
        <div class="large-4 small-4 columns"><br><?php echo($this->Form->submit('Recherche',array('class'=>'small button'))); $this->Form->end();?></div>    
      </div>    
</div>
    
        <div class="large-6 small-12 columns panel" data-equalizer-watch>
<div class="row" data-equalizer>
        <h4 class="text-center">Faire une action</h4>
        <br>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="add" >Rajouter un élément</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >Voir un élément</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >Editer un élément</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >Supprimer un élément</a></div>
          
</div>
    </div>
    </div>
    
<?php if(!$tab){
    ?>
    <div class="large-12 small-12 columns panel">
        <h3 class="text-center">Aucun résultat</h3>
        <h6 class="text-center">veuillez faire une autre recherche...</h6>
    </div>
    
    
    
    <?php }else{ ?>
    
    
    
    
    <table class="large-12 small-12 midle-12 columns">
 <thead>
        <tr>
        <th>ID</th>
		<th>n DA</th>
		<th>n Affaires</th>
		<th>n Commande</th>
        <th>fournisseur</th>    
		<th>type de dossier</th>		
        <th>budget</th>       
        <th>pilote</th>       
        <th>Date</th> 
		<th>Action</th> 
        </tr>
</thead>
    
        

<?php  foreach($tab as $temp): ?>
   <tr>
       <td><?php echo($temp['Paf']['id']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_Affaires']);?></td>
       <td><?php echo($temp['Paf']['n_Commande']);?></td>
       <td><?php echo($temp['Paf']['fournisseur']);?></td>
       <td><?php echo($tt[$temp['Paf']['type_de_dossier']]);?></td>
       <td><?php echo($temp['Paf']['budget']);?></td>
       <td><?php echo($temp['Paf']['pilote']);?></td>
       <td>
<i>cre   : </i><?php echo($temp['Paf']['created']);?><br>
<i>mod: </i><?php echo($temp['Paf']['updated']);?><br>
<i>fin : </i> <?php echo($temp['Paf']['updated']);?>
       </td>
<td>

<?php 
echo $this->Html->link('Editer',array( 'controller'=>'Pafs','action'=>'edit',$temp['Paf']['id']));?>
<br>
<?php
echo $this->Html->link('Imprimer',array('controller'=>'Pafs','action'=>'Paf_print',$temp['Paf']['id']));?>
<br>
<?php
echo $this->Html->link('Enjeux',array('controller'=>'Pafs','action'=>'Enjeux',$temp['Paf']['id']));?>
<br>
<?php 
echo $this->Html->link('Cloture',array('controller'=>'Pafs','action'=>'Cloture'));?>
</td> 
</tr>
    
    
    
    
    
    
    
    
<?php endforeach; ?> 

    
    </table>
<?php } ?>


<br>






<?php
$this->start('help');
echo('Cette Page permet d\'avoir un aperçu , de faire une recherche et de trouvé un elements');
$this->end(); ?>