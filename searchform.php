<div class="d-inline-flex flexbox" style="">
	<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">

		<div class="form-inline d-flex">


			<label for="s" class="accessible_hide"><?php _e('Search', 'socbootstrap'); ?></label>
			<div class="">
				<input type="text" id="search" class="field" name="s" id="s"
					   placeholder="<?php esc_attr_e('Search', 'socbootstrap'); ?>"/>
			</div>
			<div class="">
				<input type="submit" class="submit btn" name="submit" id="searchsubmit" value=""/>
			</div>
		</div>
	</form>
</div>
