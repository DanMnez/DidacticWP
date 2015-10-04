<!-- 
PLANTILLA PARA ENTRADAS. (SINGLE.PHP) 
-->


<?php get_header(); ?> <!-- HEADER.PHP -->

<div id="contenido"> <!-- INICIO del contenido principal. -->

  <section> 
    	
    <article>

    	<?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

    	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <small> Publicado por <?php the_author_posts_link() ?>  el <?php the_time('j/m/Y') ?>. Categoría: <?php the_category(', '); ?> </small><br>


        	<div class="post"> 
        		<?php the_content(); ?> <!-- Muestra el contenido de la entrada. -->
          </div>

          <div class="comentarios">
            <?php comments_template(); ?> <!-- Muestra la seccion de comentarios y el formulario. -->
          </div>

        <?php endwhile; ?>
       <?php endif; ?>

    </article> 

  </section> 

  <?php  get_sidebar()?> <!-- SIDEBAR.PHP -->

</div> <!-- FIN del contenido principal. -->

<?php get_footer(); ?> <!-- FOOTER.PHP -->
