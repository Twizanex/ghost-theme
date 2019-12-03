<?php 

// SW Social Web LLC
// SW Social Web Rules!!!

$redirect_setting = $vars['entity']->ghost_redirect;
 


?>


<p>
  <b><?php echo elgg_echo("ghost:redirect:text"); ?>: </b>

<?php

echo elgg_view('input/text',array(
'name' => 'params[ghost_redirect]', 
 
'value'=> $redirect_setting));

 ?>
</p>
