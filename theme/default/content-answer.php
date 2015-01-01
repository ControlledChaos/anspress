<?php
	/**
	 * Display answer in user page
	 *
	 * @link http://wp3.in 	
	 * @since 2.3
	 *
	 * @package AnsPress
	 */
	global $post;
?>

				
<div class="ap-answer-post clearfix">
	<a class="ap-vote-count ap-tip" href="#" title="<?php _e('Total votes', 'ap') ?>"><span><?php echo ap_net_vote() ?></span><?php _e('Votes', 'ap') ?></a>	
	<div class="ap-ans-content no-overflow">

		<a class="ap-answer-link" href="<?php echo get_permalink() ?>"><?php echo ap_truncate_chars(strip_tags(get_the_content()), 150) ?></a>
		<ul class="ap-display-question-meta ap-ul-inline">
			<?php echo ap_display_answer_metas(); ?>
		</ul>
	</div>
</div>