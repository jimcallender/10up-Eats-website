<header class="banner">
  <div class="container">

    <a class="brand" href="{{ home_url('/') }}">
      <h1><span>{{ get_bloginfo('name', 'display') }}</span></h1>
    </a>
    
<div id="searchwrap">
  <div class="search"><button>Try it</button></div>
    <div id="formwrap">
      @include('partials/search')
    </div>
  </div>
</div>
  <ul id="nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
      @endif
  </ul>
</header>
