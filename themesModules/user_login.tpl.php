<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 p-center">
	<?php 
	if(isset($variables['userLoging']) && $variables['userLoging']==0){
	?>
	<p><a onclick="abrir_login()" class="ing-men" style="cursor:pointer;">Ingresar</a></p>
	<?php }elseif($variables['userLoging']!=0){ ?>
		<p><a class="ing-men" href="user/logout" style="cursor:pointer;">Cerrar Sesion</a></p>
	<?php }else{
		$block = module_invoke('user', 'block_view','login');
	    print render($block['content']); 
	} ?>
</div>

