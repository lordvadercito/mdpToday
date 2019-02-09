<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<label for="s">
	  	<i class="material-icons">&#xE8B6;</i>
	</label>
	<input type="search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" placeholder="buscar" class="" id="s" />
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search for:', 'label' ); ?>" style="display: none;"/>
</form>
