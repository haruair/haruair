<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <div class="author-meta">
        <div class="author-profile">
        <?php echo get_avatar(get_the_author_meta('user_email'), 192);?>
        </div>
        <div class="author-detail">
          <div class="author-name"><?php the_author_meta('display_name');?></div>
          <p><?php the_author_meta('description');?></p>
        </div>
      </div>
      <div class="taxonomy">
        <div class="category">Category : <?php the_category(', ', 'multiple');?></div>
        <div class="tags"><?php the_tags();?></div>
      </div>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
