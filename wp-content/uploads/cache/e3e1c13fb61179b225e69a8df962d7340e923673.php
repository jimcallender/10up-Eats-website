<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
    <input type="text" value="This is some search text" name="s" id="s" onfocus="this.value=''" onblur="this.value = 'This is some search text'" />
    <input type="image" id="searchsubmit" value=" " title="search button" />
</form>

<script>
jQuery(document).ready(function(){
  jQuery("button").click(function(){
    jQuery("#formwrap").toggle();
  });
});
</script>
