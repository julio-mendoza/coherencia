<div class="row">
	<div class="span8">
		<div class="widget">
			<div class="widget-header">
				<h3>
					<i class="icon-tasks"></i>Miembros del Comit&eacute; Evaluador
				</h3>
			</div> <!-- /.widget-header -->
			<div class="widget-content">
				<?php if (count($judges) > 0) { ?>
				<table class="table">
					<thead>
					<tr>
						<th>Apellidos y Nombres</th>
						<th>Rol</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($judges as $judge) { ?>
						<tr>
							<td><?php echo "$judge->last_name, $judge->first_name"; ?></td>
							<td><?php echo $judge->charge; ?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
				<?php } else { ?>
				Aún no se ha establecido un comit&eacute; evaluador.
				<?php } ?>
			</div> <!-- /.widget-content -->
		</div> <!-- /.widget -->
	</div> <!-- /.span8 -->
	<div class="span4">
		<div class="widget">
			<div class="widget-header">
				<h3>
					<i class="icon-tasks"></i>Funciones del Comit&eacute; Evaluador
				</h3>
			</div> <!-- /.widget-header -->
			<div class="widget-content">
				<ul>
					<li>Funci&oacute;n 01</li>
					<li>Funci&oacute;n 02</li>
					<li>Funci&oacute;n N</li>
				</ul>
			</div> <!-- /.widget-content -->
		</div> <!-- /.widget -->
	</div> <!-- /.span4 -->
</div> <!-- /.row -->