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
	<div class="header panel">
        <div class="row">
     
        <div class="large-3 columns panel">
            
        </div>   
        <div class="panel large-7 columns">

            
        </div>
        
        <div class="large-2 columns text-center">
            <a href="#" data-dropdown="help" data-options="is_hover:true">Help</a>
        </div>
        
            
            
            
            
        <div class="columns large-12 panel">
            <div class="row">
                
            
              
              
        </div>

        </div>
    </div>
    <div id="help" data-dropdown-content class="medium f-dropdown content">
          <?php echo($this->fetch('help')); ?>
    </div>
    </div>
    
    
    
    
		
		
		<div class="row panel">

			<?php echo $this->fetch('content'); ?>
			
		</div>
		
		
		
		
		
		
		
		
		
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
