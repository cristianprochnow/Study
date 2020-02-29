<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Criando um CRUD com CodeIgniter</title>
	</head>
	<body>
		<div>
			<div>
				<h1>Criando um CRUD com CodeIgniter</h1>
			</div>

			<?php if ($this->session->flashdata('error') == TRUE): ?>
				<p><?php echo $this->session->flashdata('error'); ?></p>
			<?php endif; ?>

			<?php if ($this->session->flashdata('success') == TRUE): ?>
				<p><?php echo $this->session->flashdata('success'); ?></p>
			<?php endif; ?>

			<form method="post" action="<?php echo base_url('salvar'); ?>" enctype="multipart/form-data">
				<div>
					<label>Nome:</label>
					<input
						type="text"
						name="nome"
						value="<?php echo set_value('nome'); ?>" required
					/>
				</div>

				<div>
					<label>Email:</label>
					<input
						type="email"
						name="email"
						value="<?php echo set_value('email'); ?>"
						required
					/>
				</div>

				<div>
					<label><em>Todos os campos são obrigatórios.</em></label>
					<input type="submit" value="Salvar"/>
				</div>
			</form>

			<br />
			<br />

			<div>
				<table>
					<caption>Contatos</caption>

					<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Operações</th>
						</tr>
					</thead>

					<tbody>
						<?php if ($contatos == FALSE): ?>
							<tr>
								<td colspan="2">Nenhum contato encontrado</td></tr>
						<?php else: ?>
							<?php foreach ($contatos as $row): ?>
								<tr>
									<td><?= $row['nome'] ?></td>
									<td><?= $row['email'] ?></td>
									<td><a href="<?= $row['editar_url'] ?>">[Editar]</a>
									<a href="<?= $row['excluir_url'] ?>">[Excluir]</a></td>
								</tr>
							<?php endforeach; ?>
							<tr />
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
