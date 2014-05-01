


<div class="panel">
    
    <div class="row">
        <div class="large-6 columns">o</div>
        <div class="large-3 columns">o</div>
        <div class="large-3 columns">o</div>    
          
    </div>
        
</div>



<br>

<div class="large-12 columns w sec"></div>
<div class="large-1 columns">id</div>
<div class="large-2 columns">n DA</div>
<div class="large-4 columns">o</div>
<div class="large-3 columns">Created</div>
<div class="large-2 columns">o</div>

<div class="large-12 columns w sec"></div>

    
    
    
    <?php  foreach($tab as $temp): ?>
<div class="row" data-equalizer>
    
<div class="large-1 columns bord" data-equalizer-watch>
          <?php echo($temp['Paf']['id']);?>
</div>

<div class="large-2 columns bord" data-equalizer-watch>
           -<?php echo($temp['Paf']['n_DA']);?>
</div>

<div class="large-4 columns bord" data-equalizer-watch>
          00
</div>

<div class="large-3 columns bord" data-equalizer-watch>
          
          -<?php echo($temp['Paf']['created']);?>

</div>

<div class="large-2 columns bord" data-equalizer-watch>
-<?php  echo( $this->Html->link('Modifier',array('controller'=>'Pafs','action'=>'edit',2)));?><br>
-<?php  echo( $this->Html->link('Modifier',array('controller'=>'Pafs','action'=>'edit',2)));?>

</div>

</div>
    

    
   <?php endforeach; ?> 




<?php
$this->start('help');
echo('Page d\' edit je vous pris de remplir corectement les champs');
$this->end();
?>