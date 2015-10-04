<!-- 
PLANTILLA DE INICIO. ES OBLIGATORIA. (INDEX.PHP) 
-->

<?php get_header(); ?> <!-- HEADER.PHP -->
  
<div id="contenido"> <!-- INICIO del contenido principal. -->

  <section> 

    <!-- LOOP basico de WordPress. Muestra las ultimas entradas. -->
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?> 

        <article>

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?> </small>

          <?php the_excerpt(); ?> <!-- extracto de la entrada. -->

        </article>

      <?php endwhile; else: ?>
        <p><?php _e('No hay entradas.'); ?></p> <!-- Si no encuentra ninguna entrada, saldra este mensaje. -->
    <?php endif; ?>


  </section> 

  <?php  get_sidebar()?> <!-- SIDEBAR.PHP -->

</div> <!-- FIN del contenido principal. -->



<?php get_footer(); ?> <!-- FOOTER.PHP -->
