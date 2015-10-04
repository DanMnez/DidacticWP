<!-- 
PIE DE PAGINA. (FOOTER.PHP) 
-->

	<footer>
		<p>&copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. Mi primer tema original de WordPress. Plantilla de base mínima, sin plugins ni nada por el estilo ;)</p>
	</footer>

</div> <!-- FIN del CONTENEDOR principal. -->

<?php wp_footer(); ?> <!-- Al igual que la funcion wp_head(); es necesaria para funcionar y ademas para que aparezca la barra de administracion superior del blog. -->

</body>

</html>