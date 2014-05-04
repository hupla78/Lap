<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
EDF:
	</title>
	<?php
		



		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->css('foundation');
		echo $this->html->css('color');
		
		echo $this->Html->script('vendor/modernizr');
		
	?>
</head>
<body>
	<a name="Top" data-magellan-destination="Top"></a>

	
	
	<div class="header panel">
        <div class="row" data-equalizer>
     
        
        <div class="panel large-8 small-6 columns" data-equalizer-watch>
        <div class="row text-center">
            <div class="columns large-3 small-3"><a href="#">Paf</a></div>
            <div class="columns large-3 small-3"><a href="#">aaaa</a></div>
            <div class="columns large-3 small-3"><a href="#">bbbb</a></div>
            <div class="columns large-3 small-3"><a href="#">cccc</a></div>
        </div>

            
        </div>
        
        <div class="panel large-2 small-3 text-center columns" data-equalizer-watch>
            <?php echo($this->Html->link('Connection',array('controller'=>'User','action'=>'Connection'))); ?>   
        </div>
        <div class="large-2 small-3 columns text-center panel" data-equalizer-watch>
            <a href="#" data-dropdown="help" data-options="is_hover:true">Help</a>
        </div>
        
            
   
</div>
 </div>
    <div class="large-1 small-1 columns">
    <div id="help" data-dropdown-content class="medium f-dropdown content">
          <?php echo($this->fetch('help')); ?>
    </div>
    </div>


   
    <div class="row">
        
    <?php
    
    echo($this->fetch('nav-edit'));
    ?>
		
    </div>
		<div class="row panel">

			<?php echo $this->fetch('content'); ?>
			
		</div>
		
		
		
		
		
		<a name="Bottom" data-magellan-destination="Bottom"></a>
		
		
		
<div class="footer panel">

<div class="row panel">
    
</div>
        	           	   
</div>
    


    
<?= $this->Html->script('vendor/jquery'); ?>
<?= $this->Html->script('foundation.min'); ?>
<?= $this->Html->script('foundation/foundation.equalizer.js') ?>


    <script>
      $(document).foundation();
    </script>
    
		
</body>
</html>
