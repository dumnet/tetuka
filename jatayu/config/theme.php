<?php
/****************
 * Theme config
 *
 */

$DS  = DIRECTORY_SEPARATOR;

if (preg_match('/' . config_item('admin_uri') . '/', $_SERVER['REQUEST_URI']))
{
	//This is the physical path to the themes (Thanks Marcus Reinhardt & Kristories, for the Mac and Linux fix)
	$config['theme']['path'] = str_replace(config_item('admin_uri') . $DS, '', FCPATH) . '/themes/';

	//This is the url to the themes path
	$config['theme']['url'] = str_replace(config_item('admin_uri'), '', trim(config_item('base_url'), '/ ')) . '/themes/';

	//This is the default theme (subfolder in the themes folder)
	$config['theme']['theme'] = 'default';

	//This is the default layout (index: a mapping to index.php)
	$config['theme']['layout'] = 'index';	
}
else
{

	//This is the physical path to the themes (Thanks Marcus Reinhardt & Kristories, for the Mac and Linux fix)
	$config['theme']['path'] = FCPATH . '/themes/';

	//This is the url to the themes path
	$config['theme']['url'] = trim(config_item('base_url'), '/ ') . '/themes/';

	//This is the default theme (subfolder in the themes folder)
	$config['theme']['theme'] = 'default';

	//This is the default layout (index: a mapping to index.php)
	$config['theme']['layout'] = 'index';	
}

