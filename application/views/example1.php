<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pr-BR">
<head>
	<meta charset="utf-8">
	<title>Primeira View Codeigniter</title>

	<!-- base_url só é possível com o helper('uri') carregado no Controller-->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/example1.css')?>">
</head>
<body>

<div id="container">
	<h1><?php echo $title ?></h1>

	<div id="body">
		<p><?php echo $content ?></p>
		<?php
			$this->load->view('example2')
		?>
	</div>

	<a href="<?php echo base_url('index.php/otherpage')?>">Ir para outra página</a>
</div>

</body>
</html>