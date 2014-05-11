
    
<div class="row" data-equalizer>
    <div class="large-6 small-12 columns panel" data-equalizer-watch>
    <div class="row">
        <h4 class="text-center">Recherche un elments</h4>
        <?php echo($this->Form->create('Recherche'));?>
        
        <div class="large-12 small-12 columns"><?php echo($this->Form->input('ss',array('label'=>false)));?></div>
<div class="large-8 small-8 columns">
<?php echo($this->Form->input('oo',array('type'=>'select','label'=>'Type de recherche sur','options'=>array('tout','id','ncommande','Pilote')))); ?>
</div>
        <div class="large-4 small-4 columns"><?php echo($this->Form->end('Recherche'));?></div>    
      </div>    
</div>
    
        <div class="large-6 small-12 columns panel" data-equalizer-watch>
<div class="row" data-equalizer>
        <h4 class="text-center">Faire une action</h4>
        <br>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >rajouté un element</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >voir un element</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >édité un element</a></div>
        <div class="large-6 small-3 columns"><a class="small button" style="display:block;" href="#" >suprimé un element</a></div>
          
</div>
    </div>
    </div>
    

    <table width="100%">
 <thead>
        <tr>
        <th>ID</th>
		<th>DOM</th>
		<th>PF</th>
		<th>Pilote</th>
        <th>Type</th>    
		<th>Objet</th>		
        <th>Traitement</th>       
        <th>Crée</th>       
        <th>Date</th> 
		<th>Action</th> 
        </tr>
</thead>
    
        

<?php  foreach($tab as $temp): ?>
   <tr>
       <td><?php echo($temp['Paf']['id']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td><?php echo($temp['Paf']['n_DA']);?></td>
       <td>
<i>cre   : </i><?php echo($temp['Paf']['created']);?><br>
<i>mod: </i><?php echo($temp['Paf']['updated']);?><br>
<i>fin : </i> <?php echo($temp['Paf']['updated']);?>
       </td>
<td>
<?php 
echo $this->Html->link('Voir',array('controller'=>'Pafs','action'=>'voir'));?>
<br>
<?php 
echo $this->Html->link('Editer',array( 'controller'=>'Pafs','action'=>'edit',$temp['Paf']['id']));?>
<br>
<?php
echo $this->Html->link('Imprimer',array('controller'=>'Pafs','action'=>'Paf_print',$temp['Paf']['id']));?>
</td> 

       
   </tr>
    
    
    
    
    
    
    
    
<?php endforeach; ?> 

    
    </table>



<br>






<?php
$this->start('help');
echo('Cette Page permet d\'avoir un aperçu , de faire une recherche et de trouvé un elements');
$this->end(); ?>