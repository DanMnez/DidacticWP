<!-- 
PLANTILLA PARA PAGINAS. (PAGE.PHP) 
-->

<?php get_header(); ?> <!-- HEADER.PHP -->

<div id="contenido"> <!-- INICIO del contenido principal. -->

	<section>

	  <?php contenidoPag(); ?> <!-- Funcion personalizada agregada en "functions.php" -->

	</section>

<?php  get_sidebar()?> <!-- SIDEBAR.PHP -->

</div> <!-- FIN del contenido principal. -->


<?php get_footer(); ?> <!-- FOOTER.PHP -->


