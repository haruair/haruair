<?php
$headline = get_post_meta(get_the_ID(), 'headline', true);
$words = substr_count(strip_tags(get_the_content(get_the_ID())), ' ');
if ($headline !== '') :?>
<div class="entry-headline"><?php echo $headline;?></div>
<?php endif;?>
<time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
<?php if($words > 0 && get_post_type(get_the_ID()) == 'post'):?>
<span class="words"><?php echo number_format($words);?> words</span>
<?php endif;?>
<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
