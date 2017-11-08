<?php
/**
* permissions_firstpostedit [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.2.2] (https://github.com/phpBBTraducoes)
* @package language
* @copyright (c) 2015 gn#36
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Adding the permissions
$lang = array_merge($lang, array(
	// Forum perms,
	'ACL_F_TIME_FIRST_POST_EDIT'	=> 'Pode ignorar o tempo máximo de edição na primeira postagem de seus próprios tópicos',
	'ACL_F_FIRST_POST_EDIT'			=> 'Pode editar a primeira postagem de seus próprios tópicos',
	'ACL_F_EDIT_REPLY'				=> 'Pode editar suas próprias respostas',
	'ACL_F_TIME_EDIT'				=> 'Pode ignorar o tempo máximo de edição para suas próprias respostas ',
));
