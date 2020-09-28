<?php get_header() ?>
<!-- get_header('sinjumbron') header-sinjumbotron.php -->

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
    <?php 
    if(have_posts()){
      while(have_posts()){
        the_post();?>
        <div class="col-md-4">

        <figure class='list_posts'>
          <?php // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium'); ?>
    </a>
<?php endif; ?>
        </figure>

  
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div><?php the_excerpt() ?> 
        </div>
        <p><a class="btn btn-secondary" href="<?php the_permalink() ?>" role="button">Ver Detalles &raquo;</a></p>
      </div>
    <?php
      }

    }else{
      echo 'NO DATA';
    }
    
    ?>
      
  
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<?php get_footer() ?>