<div class='search-form-container'>
	<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
        <label class="screen-reader-text"><?php _e('Search for:','drop'); ?></label>
		<input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
		<input type="submit" class="search-submit" value='Go' />
		<span><i class='fa fa-search'></i></span>
	</form>
</div>