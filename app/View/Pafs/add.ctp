<?php
echo $this->Form->create('Paf');?>


		<fieldset>
		    <legend>Création </legend>
		    <div class="row">
		    <div class="large-8 small-8 columns">
		    <?php echo ($this->Form->input('pilote')); ?>
		    </div>
		    <div class="large-4 small-4 columns">
		    <?php echo $this->Form->input('type_de_dossier',
		     array('type'=>'select','options' => 
		     array(
                    'CDE ACHAT STOCKE',
                    'CDE PRESTATION',
                    'CDE REPARATION',
                    'CC ACHAT STOCKE',
                    'CC PRESTATION',
                    'CC REPARATION'
      )));?>
		    </div>
		     
		     <div class="large-12 small-12 columns">
		    <?php echo ($this->Form->input('Object')); ?>
		    </div>
		    
		    
		    </div>
		    
		    
		    
		    
		    
		    
		    
		    
		</fieldset>
			
		

    <div class="large-6 small-6 columns"><?php echo($this->Form->input('info',array('type'=>'select','label'=>false,'options' => array('Rentrée des infos Suplémentaires','ne rentré que ces info pour l\'instant'))));?>
</div>
    <div class="large-6 small-6 columns t-cent"><?php echo $this->Form->end('validation')?>
</div>



