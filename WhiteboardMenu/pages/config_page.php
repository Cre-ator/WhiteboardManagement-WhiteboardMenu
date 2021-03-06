<?php
require_once ( __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'wmApi.php' );

auth_reauthenticate ();
html_page_top1 ( plugin_lang_get ( 'config_title' ) );
html_page_top2 ();

print_manage_menu ();

echo '<br/>';
echo '<form action="' . plugin_page ( 'config_update' ) . '" method="post">';
echo form_security_field ( 'plugin_WhiteboardMenu_config_update' );

if ( substr ( MANTIS_VERSION, 0, 4 ) == '1.2.' )
{
   echo '<table align="center" class="width50" cellspacing="1">';
}
else
{
   echo '<div class="form-container">';
   echo '<table>';
}

wmApi::printFormTitle ( 'config_caption' );
wmApi::printTableRow ();
wmApi::printCategoryField ( 'config_show_footer' );
wmApi::printRadioButton ( 'show_in_footer' );
echo '</tr>';

wmApi::printTableRow ();
wmApi::printCategoryField ( 'config_show_menu' );
wmApi::printRadioButton ( 'show_menu' );
echo '</tr>';

echo '<tr>';
echo '<td class="center" colspan="3">';
echo '<input type="submit" name="change" class="button" value="' . lang_get ( 'update_prefs_button' ) . '"/>';
echo '</td>';
echo '</tr>';

echo '</table>';

if ( substr ( MANTIS_VERSION, 0, 4 ) != '1.2.' )
{
   echo '</div>';
}

echo '</form>';

html_page_bottom1 ();