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
$prefix = AmpConfig::get('prefix');
$sTitle = T_("Ampache :: 403");
$sHeadTitle = T_('Ampache');
$htmllang = 'en_US';
require $prefix . '/templates/tiny_header.inc.php';
?>
            <div class="jumbotron">
                <h1><?php echo T_('Access Denied'); ?></h1>
                <p><?php echo T_('This event has been logged.'); ?></p>
            </div>
            <div class="alert alert-danger">
                <?php if (!AmpConfig::get('demo_mode')) { ?>
                <p><?php echo T_('You have been redirected to this page because you do not have access to this function.'); ?></p>
                <p><?php echo T_('If you believe this is an error please contact an Ampache administrator.'); ?></p>
                <p><?php echo T_('This event has been logged.'); ?></p>
                <?php } else { ?>
                <p><?php echo T_("You have been redirected to this page because you attempted to access a function that is disabled in the demo."); ?></p>
                <?php } ?>
            </div>
<?php require $prefix . '/templates/tiny_footer.inc.php'; ?>
