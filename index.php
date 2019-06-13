

<?php get_header(); ?>
<div id="main">
  <div id="content">
    <h1>Main Area</h1>
    <h3>Blog Description</h3>
    <div class= "row">
      <?php
        if ( have_posts() ) :

           while ( have_posts() ) : the_post();
             the_title('<div class="col s6"><h2>', '</h2>');
             the_excerpt();
             print '<hr /></div>';
           endwhile;
           else :
             print 'No posts are available';
        endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
