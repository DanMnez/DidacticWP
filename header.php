<!-- 
CABECERA. (HEADER.PHP) 
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>"> <!-- Indicamos la codificacion predeterminada. -->
	<meta name="viewport" content="width=device-width, minimum-scale=1"> <!-- Definir viewport para dispositivos web moviles. -->

	<title>
		<?php if (is_home()) {
			bloginfo('name'); 
			echo ' - '; bloginfo('description'); 
		} else {
			the_title();
			echo ' - '; bloginfo('name'); 
		}
		?>
	</title> <!-- Titulo personalizado para SEO, referencia: https://codex.wordpress.org/Function_Reference/wp_title -->

	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> <!-- Hoja de estilos "style.css" del tema. -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css"> --> <!-- Hoja de estilos que resetea el CSS predefinido por los navegadores. OPCIONAL -->

<?php wp_head(); ?> <!-- Funcion interna de WordPress. Necesaria para que funcionen varios plugins y funciones. -->

</head>

<body>


<div id="envoltura"> <!-- INICIO del CONTENEDOR principal. -->

	<header>
	     	<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	</header>

	<nav> <!-- Menu HTML5 -->
		<ul>
			<?php menuHtml5(); ?> <!-- Funcion personalizada agregada en "functions.php" -->
		</ul>
	</nav>

<!-- 
Nota: El div con id envoltura sigue para englobar a toda la pagina. Es el CONTENEDOR. Acaba en el "FOOTER.PHP".
-->

	