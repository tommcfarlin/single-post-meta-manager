<?php
/**
 * Displays the user interface for the Single Post Meta Manager meta box.
 *
 * This is a partial template that is included by the Single Post Meta Manager
 * Admin class that is used to display all of the information that is related
 * to the post meta data for the given post.
 *
 * @package    SPMM
 */
?>
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