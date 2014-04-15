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

$sTitle = T_("Ampache :: For the love of Music");
$sHeadTitle = T_('Ampache -- Debug Page');
require $prefix . '/templates/tiny_header.inc.php';
?>
        <div class="container" role="main">
            <div class="page-header requirements">
                <h1><?php echo T_('Ampache Debug'); ?></h1>
            </div>
            <div class="well">
                <p><?php echo T_('You may have reached this page because a configuration error has occured. Debug information is below.'); ?></p>
            </div>
            <table class="table" cellpadding="3" cellspacing="0">
                <tr>
                    <th><?php echo T_('CHECK'); ?></th>
                    <th><?php echo T_('STATUS'); ?></th>
                    <th><?php echo T_('DESCRIPTION'); ?></th>
                </tr>
                <?php require $prefix . '/templates/show_test_table.inc.php'; ?>
            </table>
<?php require $prefix . '/templates/tiny_footer.inc.php'; ?>
