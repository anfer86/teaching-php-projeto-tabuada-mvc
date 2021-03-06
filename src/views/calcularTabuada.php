<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Projeto Tabuada</title>
</head>
<body>

<main>

	<h1>Projeto Tabuada</h1>

	<?php
	# Esta linha permite que esta view renderizada tanto
	# usando a função 'include' como a função 'header'
	# Quando for usando 'include' a sessão já terá sido
	# iniciada pelo controller.
	# Quando for usado 'header' a sessão terá de ser
	# iniciada novamente.
	if (!isset($_SESSION)) session_start();
	?>

	<?php if ( ! isset($_SESSION['response']) ) { ?> 
	
		<p>Erro ao calcular tabuada. </p>
	
	<?php } else { 
		$data = $_SESSION['response'];		
	?>
	
		<p>Resultado da tabuada do número <?php echo ($data[0]['operando1']) ?> </p>

		<table>
			<thead>
				<tr>
					<th>Operação</th>				
					<th>Resultado</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $item) { ?>
				<tr>
					<td><?php echo $item['operando1'] . ' x ' . $item['operando2']  ?></td>
					<td><?php echo $item['resultado']  ?></td>				
				</tr>
				<?php } ?>
			</tbody>
		</table>
	
	<?php } ?>

</main>

</body>
</html>