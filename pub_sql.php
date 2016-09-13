<?php 
	require_once('controle/config/conexao.php');
	mysql_query('SET NAMES utf8');

	
	$publicacoes = mysql_query('SELECT titulo, descricao, link, imagem FROM obec_publicacoes');

	while($pub = mysql_fetch_assoc($publicacoes)){

		$image = '../assets/pub/';

		echo '<div class="publicacao-content">';
			
			echo '<!-- Imagem -->';
			echo '<div class="pub-content-img">';
				echo '<img src="'.$image.$pub["imagem"].'"/>';
			echo '</div>';

			echo '<div class="pub-content-text">';
				echo '<div class="pub-titulo">'
					echo $pub["titulo"];
				echo '</div>';

				echo '<div class="pub-desc">';
					echo $pub["descricao"];
				echo '</div>';

				echo '<div class="pub-button" href="'.$pub["link"].'">';
					echo 'DOWNLOAD';
				echo '</div>';

				echo '<div class="pub-button voltar-pub">';
					echo 'VOLTAR';
				echo '</div>';
			echo '</div>';

		echo '</div>';

	}





