<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Raquel Baumann - Blog</title>
		<link rel="stylesheet" href="./styles/style.css" />
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
		<script
			src="https://kit.fontawesome.com/5b8396100a.js"
			crossorigin="anonymous"></script>
	</head>
	<body>
		<section class="form_section add_post_form">
			<div class="container form_section_container">
				<h2>Adicionar um post</h2>
				<div class="alert_message success">
					<p>Mensagem de sucesso</p>
				</div>
				<form action="" enctype="multipart/form-data">
					<input type="text" name="" placeholder="Título" id="" />
					<textarea name="" placeholder="Texto" id=""></textarea>
					<div class="form_control">
						<input type="checkbox" name="" id="is_featured" />
						<label for="is_featured">Destaque</label>
					</div>
					<div class="form_control">
						<label for="thumbnail">Adicionar Imagem</label>
						<input type="file" name="" id="thumbnail" />
					</div>

					<button class="btn" type="submit">Criar Post</button>
				</form>
			</div>
		</section>
	</body>
</html>
