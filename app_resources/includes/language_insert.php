<?php
//insert the language keys
$page = intval($_GET['language_insert']);
if (file_exists(FORUM_ROOT . '/app_config/cache/install/language/' . $page . '.php')) { 
	include FORUM_ROOT . '/app_config/cache/install/language/' . $page . '.php';
	redirect('install.php?language_insert=' . ($page + 1));
} else {
	$base_config = array('baseurl' => get_cookie_data('baseurl'));
	CacheEngine::CacheLanguage();
	?>
	<form action="install.php" method="post" enctype="multipart/form-data">
		<p><?php echo translate('continuetocompleteinstall'); ?></p>
		<p><input type="submit" name="language_done" value="<?php echo translate('continue'); ?>" /></p>
	</form>
	<?php
}