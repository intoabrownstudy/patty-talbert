<?php get_header() ?>

<div class="body-wrapper">
  
<div class= "main-image">
  <!-- <img src="images/patty_talbert_lilies.png" width="600" height="540" alt="Patty Talbert"> -->
</div>  
  <div class="events-sidebar">
    <div class= "page-title">
        <?php $title = single_term_title('', false) ?>
        <?php if (gettype( $title )=="string" ): ?>
          <h1><?php echo $title ?></h1>
        <?php else: ?>
          <h1><?php the_title() ?></h1>
        <?php endif ?>
      </div>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_content(__('(more...)')); ?></p>
        <hr> 
      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>
</body>
</html>

<?php get_footer() ?>