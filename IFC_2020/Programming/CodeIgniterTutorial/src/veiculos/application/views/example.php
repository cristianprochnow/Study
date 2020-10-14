<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
		<a href='<?php echo site_url('Proprietario/index')?>'>Proprietários</a> |
		<a href='<?php echo site_url('Categoria/index')?>'>Categorias</a> |
		<a href='<?php echo site_url('Modelo/index')?>'>Modelos</a> |
		<a href='<?php echo site_url('Marca/index')?>'>Marcas</a> | 
		<a href='<?php echo site_url('Veiculo/index')?>'>Veículos</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
