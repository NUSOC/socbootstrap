
	<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
		<div class="d-inline-flex">
			<div>
				<label for="search" aria-label="search field" class="accessible_hide">
						<?php _e('Search', 'socbootstrap'); ?>
				</label>
				<input type="text"
					   id="search" class="field" name="s" tabindex="0"
					   placeholder="<?php esc_attr_e('Search', 'socbootstrap'); ?>"/>

			</div>
			<div class=" mt-2">
				<input type="submit" class="submit btn" name="submit"
					   tabindex="0"
					   id="searchsubmit" value="" aria-label="Search button"/>

			</div>
		</div>
	</form>

