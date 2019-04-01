<article <? post_class(); ?>>
    <header>
      <div>
        <img src="<?= the_post_thumbnail_url('large') ?>" />
      </div>

      <div>
        <h1 class="page-header">
            <?= get_the_title($post->ID); ?>
        </h1>
        <? $posts = get_field('project'); ?>

        <p class="page-metadata">
          <? if( $posts ): ?>
            <? $post = $posts[0] ?>
            <a class="text-project" href="<?= get_permalink( $post ); ?>"><?= get_the_title( $post ); ?></a>
          <? endif; ?>

          <span class="text-muted">⸱</span> <span class="text-magenta"><?= human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ) ?></span>

          <br>

          <span class="text-muted"><?= get_field('branch') ?> ⸱ <?= mb_substr(get_field('sha'), 0, 6) ?></span>
        </p>
      </div>

      
    </header>

    <?= the_content(); ?>
</article>
