<?php $this->start('nav-edit');?>

<div class="magellan-container" data-magellan-expedition="fixed" data-options="destination_threshold:65;throttle_delay:0;" style="">
  <dl class="sub-nav">
    <dd data-magellan-arrival="Top" class=""><a href="#Top" class="button">Top</a></dd>
    <dd data-magellan-arrival="Information_Géneral" class=""><a href="#Information_Géneral">Information</a></dd>
    <dd data-magellan-arrival="Besoin" class=""><a href="#Besoin">Besoin</a></dd>
    <dd data-magellan-arrival="Budget" class=""><a href="#Budget">Budget</a></dd>
    <dd data-magellan-arrival="Documents" class=""><a href="#Documents">Documents</a></dd>
    <dd data-magellan-arrival="Jalons" class=""><a href="#Jalons">Jalons</a></dd>
    <dd data-magellan-arrival="Revue_des_exigences" class=""><a href="#Revue_des_exigences">Revue des exigences</a></dd>
    <dd data-magellan-arrival="Imputation" class=""><a href="#Imputation">Imputation</a></dd>
    <dd data-magellan-arrival="Bottom" class=""><a href="#Bottom" class="button">Bottom</a></dd>
  </dl>
</div>
<?php $this->end();?>






<br>

<h3 class="text-center"><strong><?php echo($action); ?>
</strong></h3>


<br>


<?php echo( $this->Form->create('Paf',array(
'inputDefaults'=>array(
'label'=>array(),
'div'=>false
),
'oninput'=>'budget.value = parseFloat( PafDate2014.value) + parseFloat( PafDate2015.value) + parseFloat( PafDate2016.value) + parseFloat( PafDate2017.value) + parseFloat( PafDate2018.value) + parseFloat( PafDate2019.value) + parseFloat( PafDate2020.value) ;') ));?>

<div class="row" data-equalizer>


<div class="large-6 columns" data-equalizer-watch>

    <a name="Information_Géneral"></a>


<fieldset>
    <legend><h4 data-magellan-destination="Information_Géneral">Information Géneral</h4></legend>
    
  
    

    
    
    
    

<?php echo(
  
//clef prim
$this->Form->input('id').


$this->Form->input('n_DA').
$this->Form->input('n_Affaires',array('label'=>'numero d\'affaire')).    
$this->Form->input('n_Commande',array('label'=>'numero de Commande')).    
$this->Form->input('fournisseur',array('label'=>'numero du fournisseur')).

$this->Form->input('type_de_dossier', array(
      'options' => array(
'CDE ACHAT STOCKE',
'CDE PRESTATION',
'CDE REPARATION',
'CC ACHAT STOCKE',
'CC PRESTATION',
'CC REPARATION'
      ))).
      
$this->Form->input('type_de_traitement', array(
      'options' => array(
      
'DPRL',
'DA-Mode Controle',
'DA-ANAP',
'DA-ARAP NO',
'DA-ARAP GO',
'DA-ARAP NE',
'DA-AACI CNEPE',
'AT-ALTEN',
'AT-ISS',
'autre'

      ))).
      
$this->Form->input('strat_envisage', array(
      'options' => array(
'MEC'     =>   'Mise en Concurrence',
'GEG'     =>   'Gré à Gré'
      
      ))).
      
$this->Form->input('Strat envisagé', array(
      'options' => array(
'C10','C11','C12','C13','C14','C15','C16','C17','C18',
'D10','D11','D12','D13','D14','D15','D16','D17','D18',
'J04','J42','J51','J52','J65','J66','J67','J68','J69',
'Z04','Z42','Z51','Z52','Z65','Z66','Z67','Z68','Z69'   
      ))).
      
$this->Form->input('CAL/PR',array(
    'options'=> array(
    
'B.GRANGEAT',
'C.NOGUES'
    ))).

$this->Form->input('CAT',array(
    'options'=> array(
'K.HACHIM',
'A.DUCHESNE',
'G.ROBINO',
'M.BERNARD'
    ))).
    
$this->Form->input('pilote',array(
    'options'=> array(
    
'CAL'    =>    'CAL/PR',
'CAT'    =>    'CAT'

    ))).

$this->Form->input('groupe',array(
    'options'=>array(
'GLM','GLA','GTM','GTCR','GTAE','GTMT','ALTEN','ISS','Autre' )))



      
);?>
   </fieldset>
   
</div>

    
<div class="large-6 columns " data-equalizer-watch>
<a name="Besoin"></a>
<fieldset>

    <legend><h4 data-magellan-destination="Besoin">Besoin</h4></legend>
    
    
    
<?php 
    echo(
    $this->Form->input('commandite').
    $this->Form->input('dateDeCommandite',array('type'=>'date')).
    $this->Form->input('demandeCNPE').
    $this->Form->input('Autre').
    
    
    
$this->Form->input('criticite',array(
    'value'=>'0',
    'option'=>array(
'1','2','3'
))).
    

$this->Form->input('categorie',array(
    'value'=>1,
    'option'=>array(
'1','2','3'
))). 
    
$this->Form->input('segmentation',array(
    'option'=>array(
'1','2','3'
))).

$this->Form->input('MORIA',array(
    'option'=>array(
'oui','non'
))).

$this->form->input('Object',array('type'=>'textarea'))
    
    
);
    
    ?>

</fieldset>
</div>

<div class="large-12 columns"> </div>
    
    

<div class="large-6 columns " data-equalizer-watch>

    <a name="Budget"></a>
<fieldset>

    <legend><h4 data-magellan-destination="Budget">Budget</h4></legend>

    
<?php echo(

$this->Form->input('date2014',array('type'=>'number','value'=>'0')).
$this->Form->input('date2015',array('type'=>'number','value'=>'0')).
$this->Form->input('date2016',array('type'=>'number','value'=>'0')).
$this->Form->input('date2017',array('type'=>'number','value'=>'0')).
$this->Form->input('date2018',array('type'=>'number','value'=>'0')).
$this->Form->input('date2019',array('type'=>'number','value'=>'0')).
$this->Form->input('date2020',array('type'=>'number','value'=>'0'))

);?>
<output for="PafDate2014 PafDate2015 PafDate2016 PafDate2017 PafDate2018 PafDate2019 PafDate2020"  id="budget" name="budget">0</output>
    
</fieldset>
</div>

<div class="large-6 columns" data-equalizer-watch>


<a name="Documents"></a>
<fieldset>

    <legend><h4 data-magellan-destination="Documents">Documents</h4></legend>
    
    
<?php echo(
    
$this->Form->input('n_CSCT',array('label'=>'numero de CSCT')).
$this->Form->input('n_CSCP',array('label'=>'numero de CSCP')).
$this->Form->input('tableau_analyse',array('label'=>'Tableau d\'analyse')).
$this->Form->input('CEIDRE',array('label'=>'Envoi mandat CEIDRE','value'=>'0','type'=>'number')).
$this->Form->input('NAR').
$this->Form->input('contratCadre')
     ) 
    ?>
</fieldset>
</div>

<div class="large-12 columns">
    <a name="Jalons"></a>
    
<fieldset>

    <legend><h4 data-magellan-destination="Jalons">Jalons</h4></legend>
    
    
<div class="row">
    
    <div class="large-6 columns">
        
<?php 
    echo(
    
$this->Form->input('emergence_du_besoin').
$this->Form->input('ouverture_du_dosier').
$this->Form->input('obtention_des_pieces').
$this->Form->input('date_du_besoin'))?>
    </div>
    <div class="large-6 columns">
        <?php echo($this->Form->input('livraison_souhaitee').
$this->Form->input('delai').
$this->Form->input('debut_prestation').
$this->Form->input('notification_souhaitee').
$this->Form->input('Sollicitation_DA')

    
    );  ?>
        
    </div>
</div>
</fieldset>  
</div>    

        

    
     
<div class="large-6 columns" data-equalizer-watch>
    
    <a name="Revue_des_exigences"></a>
    
<fieldset>

    <legend><h4 data-magellan-destination="Revue_des_exigences">Revue des exigences</h4></legend>
    
    
    <?php 
    echo(
    
$this->Form->input('DateRDE',array('type'=>'Date')).
$this->Form->input('Date_de_notification', array('type'=>'D33333ate')).
$this->Form->input('Reprévision') 
    );?>
    
        <div class="panel">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, debitis, quas cum cumque consectetur voluptatem incidunt expedita soluta libero quos pariatur omnis tempore tenetur commodi at modi enim nostrum explicabo.
        </div>    
    
 
    </fieldset>
    

</div>
 
<div class="large-6 columns" data-equalizer-watch>
    
    
    <a name="Imputation"></a>
<fieldset>
    <legend><h4 data-magellan-destination="Imputation">Imputation</h4></legend>
        
<?php    echo(
$this->Form->input('OI/EOTP').
$this->Form->input('CCS').
$this->Form->input('Budget')
                
        
    ) ?>
    
    
    
    
    <div class="">
        <h5>Enjeux</h5>
    </div>
    
    <div class="">
        <h5>PGI</h5>
        cde:
    </div>
    </fieldset>
            
</div>   
    

 
</div>

<div class="large-1 large-centered columns">
    
    <?php echo($this->Form->end('Valider')); ?>
</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<?php
$this->start('help');
echo('Page d\' edit je vous pris de remplir corectement les champs');
$this->end();
?>