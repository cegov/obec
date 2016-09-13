<?php 
	require_once('controle/config/conexao.php');
	mysql_query('SET NAMES utf8');

	$parceiros_obec = mysql_query('SELECT nome, url, img FROM obec_parceiros2 WHERE liberado = "s" AND classe = "obec" ORDER BY ordem ASC');
	$parceiros_univ = mysql_query('SELECT nome, url, img FROM obec_parceiros2 WHERE liberado = "s" AND classe = "univ" ORDER BY ordem ASC');
	$parceiros_gov = mysql_query('SELECT nome, url, img FROM obec_parceiros2 WHERE liberado = "s" AND classe = "gov" ORDER BY ordem ASC');
	$parceiros_ufrgs = mysql_query('SELECT nome, url, img FROM obec_parceiros2 WHERE liberado = "s" AND classe = "ufrgs" ORDER BY ordem ASC');

	while($parceiro = mysql_fetch_assoc($parceiros_obec)){

		$image = 'assets/parceiros/';

		echo '<div class="logo-img">';
			echo '<a href="'.$parceiro["url"].'" title="'.$parceiro["nome"].'" class="" target="_blank">';
				echo '<img src="'.$image.$parceiro["img"].'"/>';
			echo '</a>';
		echo '</div>';

	}

		
	
