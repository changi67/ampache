<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU General Public License, version 2 (GPLv2)
 * Copyright 2001 - 2013 Ampache.org
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License v2
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

$aMeta[] = '<meta http-equiv="refresh" content="10; url=\'' . $redirect_url . '\'">';
$sTitle = T_("Ampache error page");
$sHeadTitle = T_('Ampache');
require $prefix . '/templates/tiny_header.inc.php';
?>
        <div class="jumbotron">
            <h1><?php echo T_('Error'); ?></h1>
            <p><?php echo (T_("The folowing error has occured, you will automaticly be redirected after 10 seconds.") ); ?></p>
        </div>
        <h2><?php echo(T_("Error messages"));?>:</h2>
        <?php Error::display('general'); ?>
<?php
    require $prefix . '/templates/tiny_footer.php';
?>
