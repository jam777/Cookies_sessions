<?php require 'inc/head.php'; ?>
<section class="cookies container">
	<div class="row">
		
		<table class="table table-striped table-bordered">
			<thead class=" bg-primary ">
				<tr>
					<th scope="col">Cookie</th>
					<th scope="col">Quantity</th>
				</tr>
			</thead>
			
			<tbody>
				
				<?php
				
				$paniers=array_slice($_SESSION,3);
				foreach ($paniers as $panier) {
				?>
				<tr>
					<td><?= $panier['cookie'] ?></td>
					<td><?= $panier['nbre'] ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>
<?php require 'inc/foot.php'; ?>
