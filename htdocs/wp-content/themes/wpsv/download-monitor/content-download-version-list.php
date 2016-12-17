<?php
/**
 * List of versions
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 } // Exit if accessed directly
 
global $dlm_download;

$versions = $dlm_download->get_file_versions();

if ( $versions ) : ?>
	<ul class="download-versions">
		<?php
		foreach ( $versions as $version ) {
			$dlm_download->set_version( $version->id );
			$version_post = get_post( $version->id );
			?>
			<li><a class="download-link"
			       title="<?php printf( _n( 'Nedladdad 1 gång', 'Nedladdad %d gånger', $dlm_download->get_the_download_count(), 'download-monitor' ), $dlm_download->get_the_download_count() ) ?>"
			       href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">
					<?php $dlm_download->the_filename(); ?> <?php if ( $dlm_download->has_version_number() ) {
						echo '- ' . $dlm_download->get_the_version_number();
					} ?>
				</a></li>
		<?php
		}
		?>
	</ul>
<?php endif; ?>
