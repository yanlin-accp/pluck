<?php
function viewsite_info() {
	global $lang;
	$module_info = array(
		'name'          => $lang['viewsite']['module_name'],
		'intro'         => $lang['viewsite']['module_intro'],
		'version'       => '0.1',
		'author'        => 'pluck development team',
		'website'       => 'http://pluck-cms.org',
		'icon'          => '../../image/website.png',
		'compatibility' => '4.7'
	);
	return $module_info;
}

function viewsite_admin_menu_inside_before() {
	global $lang;
	?>
		<a class="menuitem" href="index.php<?php echo HOME_PAGE; ?>" title="<?php echo $lang['viewsite']['message']; ?>" target="_blank">
			<span>
				<img src="data/image/website.png" alt="" height="22" />
				<?php echo $lang['viewsite']['message']; ?>
			</span>
		</a>
	<?php
}
?>