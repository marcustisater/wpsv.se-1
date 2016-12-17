<?php do_action( 'bp_before_groups_loop' ); ?>

<?php if ( bp_has_groups( bp_ajax_querystring( 'groups' ) . '&max=4' ) ) : ?>

	<?php do_action( 'bp_before_directory_groups_list' ); ?>

	<ul id="groups-list" class="item-list" role="main">

	<?php while ( bp_groups() ) : bp_the_group(); ?>

		<li class="col-xs-12 col-md-6 col-sm-4 buddypress-listing">

			<div class="item">
            	<a href="<?php bp_group_permalink(); ?>" class="wpsvse-tooltip" data-toggle="tooltip" data-placement="top" title="<?php bp_group_name(); ?> - <?php bp_group_member_count(); ?>"><?php bp_group_avatar( 'type=thumb&width=256&height=256' ); ?>
								<div class="item-type-wrapper clearfix">
										<div class="item-title"><?php bp_group_name(); ?></div>
                    <div class="item-meta"><?php printf( __( 'Aktiv %s', 'buddypress' ), bp_get_group_last_active() ); ?></div>
              	</div>
						  </a>

				<?php do_action( 'bp_directory_groups_item' ); ?>

				<?php do_action( 'bp_directory_groups_actions' ); ?>
			</div>

		</li>

	<?php endwhile; ?>

	</ul>

	<?php do_action( 'bp_after_directory_groups_list' ); ?>

<?php else: ?>

	<div id="message" class="info">
		<p>Inga grupper kunde hittas.</p>
	</div>

<?php endif; ?>

<?php do_action( 'bp_after_groups_loop' ); ?>
