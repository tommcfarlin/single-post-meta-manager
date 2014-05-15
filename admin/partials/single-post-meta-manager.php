<div id="single-post-meta-manager">

	<?php $post_meta = get_post_meta( get_the_ID() ); ?>
	<table id="single-post-meta-manager-data">
	<?php foreach ( $post_meta as $post_meta_key => $post_meta_value ) { ?>
		<tr>
			<td class="key"><?php echo $post_meta_key; ?></td>
			<td class="value"><?php print_r( $post_meta_value[0] ); ?></td>
		</tr>
	<?php } ?>
	</table>

</div><!-- #single-post-meta-manager -->