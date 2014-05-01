
<h2>Pilotage des affaires de la DPRL</h2>  <!-- titre -->
<br>


<?php echo $this->Html->link(
    'Creer une nouvelle affaire',
    array('controller' => 'pafs', 'action' => 'add')
); ?> 

<br>
<br>
<table>
    <tr>
        <th>ID</th>
		<th>Dom</th>
		<th>PF</th>
		<th>Pilote</th>
        <th>Type</th>    
		<th>Objet</th>		
        <th>Traitement</th>       
        <th>Criticite</th>       
        <th>Budget</th> 
		<th>Print</th> 
		
		
    </tr>

	<small>
    <?php foreach ($pafs as $paf): ?>
    
		<?php 
		$domaine = "vide";
		if( $paf['Paf']['Domaine']=='0')	$domaine = "ALT"; 
		if( $paf['Paf']['Domaine']=='1')	$domaine = "CC"; 
		if( $paf['Paf']['Domaine']=='2')	$domaine = "CUV"; 
		if( $paf['Paf']['Domaine']=='3')	$domaine = "EL"; 
		if( $paf['Paf']['Domaine']=='5')	$domaine = "ESP"; 
		if( $paf['Paf']['Domaine']=='5')	$domaine = "INA"; 
		if( $paf['Paf']['Domaine']=='6')	$domaine = "MECA"; 
		if( $paf['Paf']['Domaine']=='8')	$domaine = "MOD"; 
		if( $paf['Paf']['Domaine']=='8')	$domaine = "POM"; 
		if( $paf['Paf']['Domaine']=='9')	$domaine = "ROB1"; 
		if( $paf['Paf']['Domaine']=='10')	$domaine = "ROB2"; 
		if( $paf['Paf']['Domaine']=='11')	$domaine = "TURB"; 
		if( $paf['Paf']['Domaine']=='12')	$domaine = "Autres"; 
		
		$type_de_dossier = "vide";
		if( $paf['Paf']['Type_de_dossier']=='0')	$type_de_dossier = "ACHAT STOCKE"; 
		if( $paf['Paf']['Type_de_dossier']=='1')	$type_de_dossier = "REPARATION"; 
		if( $paf['Paf']['Type_de_dossier']=='2')	$type_de_dossier = "PRESTATION"; 
				
		
		?>
	
	<tr>
	
				<td>
			<?php echo $this->Html->link($paf['Paf']['id'],
			array('controller' => 'pafs', 'action' => 'edit', $paf['Paf']['id'])); ?>
		</td>
		
	
		<td><?php echo $domaine ?></td>
		<td><?php echo $paf['Paf']['Gest']; ?></td>
        <td><?php echo $paf['Paf']['PILOTE']; ?></td>
		<td><?php echo $type_de_dossier; ?></td>
		<td><?php echo $paf['Paf']['Objet']; ?></td>
		<td><?php echo $paf['Paf']['Type_traitement']; ?></td>
		<td><?php echo $paf['Paf']['Criticite']; ?></td>
		<td><?php echo $paf['Paf']['Budget_Prév']; ?></td>
		
						<td>
			<?php echo $this->Html->link('Print',
			array('controller' => 'pafs', 'action' => 'print2', $paf['Paf']['id'])); ?>
		</td>

    </tr>
    <?php endforeach; ?>
	
	</small>
    <?php unset($paf); ?>
	
</table>



  