




<?php echo $this->Html->link(
    'Retour',
    array('controller' => 'pafs', 'action' => 'index')
); ?> 
<br>
<br>

<h2> Edition de l'affaire  <?php echo $paf['Paf']['id']; ?></h2>
<br>


<?php
$options_domaine=array('0'=>'ALT','1'=>'CC','2'=>'CUV','3'=>'EL','4'=>'ESP','5'=>'INA','6'=>'MECA','7'=>'MOD','8'=>'POM','9'=>'ROB1','10'=>'ROB2','11'=>'TURB','12'=>'Autre');
$options_type_commande=array('0'=>'ACHAT STOCKE','1'=>'REPARATION','2'=>'PRESTATION');
$options_criticite = array('0'=>'1','1'=>'2','2'=>'3','3'=>'4');
$options_massif_noria = array('0'=>'Achat classique','1'=>'NORIA','2'=>'Achat massif');
$options_type_traitement = array('0'=>'Commande directe','1'=>'Mode controle','2'=>'DA-ANAP','3'=>'DA-AAI-CNEPE','4'=>'DA-ARAP GO','5'=>'DA-ARAP NO','6'=>'Autre');
$options_strat = array('0'=>'Achat classique','1'=>'NORIA','2'=>'Achat massif');
$options_type_achat = array('0'=>'Commande hors-contrat','1'=>'Commande sous-contrat','2'=>'Creation contrat-cadre');
$options_type_budget = array('0'=>'OPEX','1'=>'CAPEX');
$options_enjeux = array('0'=>'1 - faible','1'=>'2 - faible','2'=>'3 - moyen','3'=>'4 - fort','4'=>'5 - fort');
$options_rex = array('0'=>'1 - Non-satisfaisant','1'=>'2 - Moyennement-satisfaisant','2'=>'3 - Satisfaisant','3'=>'4 - Tres satisfaisant');
?>



<br>			
<?php
echo $this->Form->create('Paf');
?>


<table border="1"><tr><td><small>
	<h3> Donnees generales </h3>
	<table>

		<tr>
	
			<td><?php echo $this->Form->input('Domaine', array('type'=>'select','options' => $options_domaine));?></td>
			<td><?php echo $this->Form->input('Gest'); ?></td>
			<td><?php echo $this->Form->input('CALPR'); ?></td>
			<td><?php echo $this->Form->input('CAT'); ?></td>
			<td><?php echo $this->Form->input('Pilote'); ?></td>
		</tr>
		
		<tr>
			<td>type achat - deourlant</td>
			<td><?php echo $this->Form->input('Type_de_dossier', array('type'=>'select','options' => $options_type_commande));?></td>
			<td><?php echo $this->Form->input('Fournisseur_CA'); ?></td>
			<td><?php echo $this->Form->input('Num_dossier_affaire'); ?></td>
			<td><?php echo $this->Form->input('Num_commande'); ?></td>

		</tr>

		<tr>
			<td><?php echo $this->Form->input('Commandite'); ?></td>
			<td><?php echo $this->Form->input('Date_commandite'); ?></td>			
			<td><?php echo $this->Form->input('Criticite', array('type'=>'select','options' => $options_criticite));?></td>
			<td><?php echo $this->Form->input('massif_NORIA', array('type'=>'select','options' => $options_massif_noria));?></td>

		</tr>

		<tr>
			<td>Categorie 3-libre</td>
			<td>Categorie 3-imposée</td>	
			<td>Categorie 1</td>
			<td>Categorie 1-Mines</td>
		</tr>

		<tr>
			<td>EIPR</td>
			<td>EIPR</td>	
			<td>EIPR</td>
			<td>EIPR</td>
		</tr>
	</table>	
</small>	</td></tr>
</table>


<table border="1"><tr><td><small>
	<h3> Objet </h3>
	<table>
		<tr><?php echo $this->Form->input('Objet',array('rows' => '5', 'label' => false)); ?></tr>
	</table>
</td></tr></small>
</table>


<table border="1"><tr><td><small>
	<h3> Traitement de l'affaire </h3>
	<table>
		<tr>
		<td><?php echo $this->Form->input('Type_traitement', array('type'=>'select','options' => $options_type_traitement));?></td>
		<td><?php echo $this->Form->input('Strat_envisagee', array('type'=>'select','options' => $options_strat));?></td>
		</tr>
	</table>
</td></tr></small>
</table>

<table border="1"><tr><td><small>
	<h3> Budget (en Keur) </h3>
	<table>
		<tr>
			<td><?php echo $this->Form->input('budget_2014');?></td>
			<td><?php echo $this->Form->input('budget_2015');?></td>
			<td><?php echo $this->Form->input('budget_2016');?></td>
			<td><?php echo $this->Form->input('budget_2017');?></td>
			<td><?php echo $this->Form->input('budget_2018');?></td>
			<td><?php echo $this->Form->input('budget_2019');?></td>
			<td><?php echo $this->Form->input('budget_2020');?></td>
		</tr>
		<tr>
			<td><?php echo $this->Form->input('Type', array('type'=>'select','options' => $options_type_budget));?></td>
			<td><?php echo $this->Form->input('OI_EOTP');?></td>
			<td><?php echo $this->Form->input('CCS');?></td>
		</tr>
	</table>
</td></tr></small>
</table>

<table border="1"><tr><td><small>
	<h3> Documents </h3>
	<table>
		<tr>
			<td><?php echo $this->Form->input('CSCT');?></td>
			<td><?php echo $this->Form->input('CSCP');?></td>
			<td><?php echo $this->Form->input('NAR');?></td>
			<td><?php echo $this->Form->input('Contrat_Cadre');?></td>
			<td><?php echo $this->Form->input('Date envoi mandat CEIDRE (remplir si deja envoye)');?></td>

		</tr>
	</table>
</td></tr></small>
</table>

<table border="1"><tr><td><small>
	<h3> Suivi du dossier </h3>
	<table>
		<tr>
			<td> Date d'Emergence</td>
			<td><?php echo $this->Form->input('Emergence_besoin', array('label' => false));?></td>
			<td> _________________________________________________________ </td>
		
		</tr>
				<tr>
			<td> Date ouverture du dossier</td>
			<td><?php echo $this->Form->input('Ouv_dossier', array('label' => false));?></td>
		</tr>

		<tr>
			<td> Date obtention CSCT/P valides</td>
			<td><?php echo $this->Form->input('Obtention_doc_tech', array('label' => false));?></td>
		</tr>
		<tr>
			<td> Date besoin</td>
			<td><?php echo $this->Form->input('Date_besoin', array('label' => false));?></td>
		</tr>
		<tr>
			<td> Date livraison souhaitee - fin de la prestation</td>
			<td><?php echo $this->Form->input('Livraison_souhaitee', array('label' => false));?></td>
		</tr>
		<tr>
			<td> Délai delai de fabrication</td>
			<td><?php echo $this->Form->input('delai_fab', array('label' => false));?></td>
		</tr>
		
		
		</table>
</td></tr></small>
</table>

<table border="1"><tr><td><small>
	<h3> Revues des Exigences </h3>
	<table>
		<tr>
			<td> Sollicitation de la direction des achats</td>
			<td><?php echo $this->Form->input('Sollicitation_DA', array('label' => false));?></td>
			<td> _________________________________________________________ </td>
		
		</tr>
				<tr>
			<td> Date RDE</td>
			<td><?php echo $this->Form->input('Date_RDE', array('label' => false));?></td>
		</tr>

		<tr>
			<td> Date de notification negociee en RDE</td>
			<td><?php echo $this->Form->input('Date_notitification', array('label' => false));?></td>
		</tr>
		<tr>
			<td> Date de notification negociee en Reprev</td>
			<td><?php echo $this->Form->input('Date_reprev', array('label' => false));?></td>
		</tr>

		
		</table>
</td></tr></small>
</table>


<table border="1"><tr><td><small>
	<h3> Grille de pesage des enjeux </h3>
	<table>
		<tr>
			<td> Enjeu</td>
			<td> Pesage</td>			
			<td> Commentaires___________________ </td>
		
		</tr>
		<tr>
			<td> Cout</td>
			<td><?php echo $this->Form->input('couts', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_couts', array('rows' => '2','label' => false));?></td>
		</tr>
				<tr>
			<td> Disponibilite</td>
			<td><?php echo $this->Form->input('dispo', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_dispo', array('rows' => '2','label' => false));?></td>
			</tr>

		<tr>
			<td> Surete (x2)</td>
			<td><?php echo $this->Form->input('surete', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_surete', array('rows' => '2','label' => false));?></td>
			</tr>
		<tr>
			<td> Technique</td>
			<td><?php echo $this->Form->input('technique', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_technique', array('rows' => '2','label' => false));?></td>
		</tr>
		<tr>
			<td> Fournisseur</td>
			<td><?php echo $this->Form->input('fournisseur', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_fournisseur', array('rows' => '2','label' => false));?></td>
		</tr>
		<tr>
			<td> Exigences reglementaire</td>
			<td><?php echo $this->Form->input('ER', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_ER', array('rows' => '2','label' => false));?></td>
			</tr>
		<tr>
			<td> Securite</td>
			<td><?php echo $this->Form->input('Securite', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_Securite', array('rows' => '2','label' => false));?></td>
			</tr>
		<tr>
			<td> Radio-protection</td>
			<td><?php echo $this->Form->input('RP', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_RP', array('rows' => '2','label' => false));?></td>
			</tr>
		<tr>
			<td> Environnement</td>
			<td><?php echo $this->Form->input('Enviro', array('type'=>'select','options' => $options_enjeux,'label' => false));?></td>
			<td><?php echo $this->Form->input('t_Enviro', array('rows' => '2','label' => false));?></td>
			</tr>
		
		</table>
</td></tr></small>

<h1> Afficher les enjeux </h1>
<br>
<?php echo $this->Form->input('Commentaire_gpe', array('rows' => '3','label' => 'Commentaires pesage des enjeux'));?>
			
</table>


<table border="1"><tr><td><small>
	<h3> Retour d'experience </h3>
	<h1> a completer avant la cloture des dossiers </h1>
	
	<?php echo $this->Form->input('commentaires_rex');?>
	
	<table>
		<tr>
			<td> Qualite </td>
			<td><?php echo $this->Form->input('Qualite', array('type'=>'select','options' => $options_rex,'label' => false));?></td>
			<td><?php echo $this->Form->input('Qualite_com',array('label' => false));?></td>
		</tr>
		<tr>
			<td> Cout </td>
			<td><?php echo $this->Form->input('Cout', array('type'=>'select','options' => $options_rex,'label' => false));?></td>
			<td><?php echo $this->Form->input('Cout_com',array('label' => false));?></td>
		</tr>
		<tr>
			<td> Qualité </td>
			<td><?php echo $this->Form->input('Delai', array('type'=>'select','options' => $options_rex,'label' => false));?></td>
			<td><?php echo $this->Form->input('Delai_com',array('label' => false));?></td>
		</tr>
		</table>
</td></tr></small>
</table>

<table border="1"><tr><td><small>
	<h3> Cloture des dossiers </h3>
		
	<?php echo $this->Form->input('commentaires_cloture',array('rows' => '3'));?>
	
	<table>
		<tr>
			<td> Cloture CA </td>
			<td><?php echo $this->Form->input('fin_date',array('label' => false));?></td>
		</tr>
		<tr>
			<td> Cloture RD </td>
			<td><?php echo $this->Form->input('Cloture_date',array('label' => false));?></td>
		</tr>
		<tr>
			<td> Annulation </td>
			<td><?php echo $this->Form->input('annul_date',array('label' => false));?></td>
		</tr>
		</table>
</td></tr></small>
</table>

<br/>

<?php
echo $this->Form->input('id');

echo $this->Form->end('Enregistrer la modification');

?>


	