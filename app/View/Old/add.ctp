<h2>Creer une nouvelle affaire</h2>

<?php
$options_type_commande=array('0'=>'ACHAT STOCKE','1'=>'REPARATION','2'=>'PRESTATION');



echo $this->Form->create('Paf');
?>
<table border="1"><tr><td><small>
	<h3> Donnees generales </h3>
	<table>

		<tr>
			<td>  Pilote </td>
			<td> <?php echo $this->Form->input('PILOTE',array( 'label' => false));	?> </td>
			<td>  Gestionnaire </td>
			<td> <?php echo $this->Form->input('Objet',array( 'label' => false));	?> </td>
			<td>  type de dossier </td>
			<td> <?php echo $this->Form->input('Type_de_dossier', array('type'=>'select','options' => $options_type_commande,'label' => false));	?> </td>
		</tr>

	</table>	
</small>	</td></tr>
</table>
		

<table border="1"><tr><td><small>
	<h3> Objet </h3>
	<table>
		<tr>
			<td> Objet</td>
			<td> <?php echo $this->Form->input('Objet',array( 'label' => false));	?> </td>
		</tr>

	</table>	
</small>	</td></tr>
</table>



<?php
echo $this->Form->end('Save paf')
?>

