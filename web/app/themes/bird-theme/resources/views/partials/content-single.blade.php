<article @php(post_class())>
  <header>
    <h1 class="entry-title text-4xl pb-6">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

  <footer class="next-prev-links">
    <!-- {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!} -->

    <div class="prev-link">
      <?php previous_post_link('%link', '%title'); ?>
    </div>
    <div class="next-link">
      <?php next_post_link('%link', '%title'); ?>
    </div>
    </footer>

  @php(comments_template())
</article>
