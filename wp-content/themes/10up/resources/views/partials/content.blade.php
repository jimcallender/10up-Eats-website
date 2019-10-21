<article @php post_class() @endphp>
  <header>
    <a href="{{ get_permalink() }}">@php the_post_thumbnail( 'full' ) @endphp</a>
    <div class="content-teaser">
      @include('partials/entry-meta')
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    </div>
  </header>
  <div class="entry-summary">
    <?php
  $more_tag = strpos($post->post_content, '<!--more-->');
  (is_home() && $more_tag) ? the_content('Read more') : the_excerpt();
?>
  </div>
</article>
