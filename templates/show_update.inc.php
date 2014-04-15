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

$sTitle = T_("Ampache :: For the love of Music - Update");
$sHeadTitle = T_('Ampache');
require $prefix . '/templates/tiny_header.inc.php';
?>
        <div class="page-header requirements">
            <h1><?php echo T_('Ampache Update'); ?></h1>
        </div>
        <div class="well">
             <p><?php printf(T_('This page handles all database updates to Ampache starting with <strong>3.3.3.5</strong>. According to your database your current version is: <strong>%s</strong>.'), Update::format_version($version)); ?></p>
             <p><?php echo T_('The following updates need to be performed'); ?></p>
        </div>
        <?php Error::display('general'); ?>
        <div class="content">
            <?php Update::display_update(); ?>
        </div>
        <?php if (Update::need_update()) { ?>
            <form method="post" enctype="multipart/form-data" action="<?php echo AmpConfig::get('web_path'); ?>/update.php?action=update">
                <button type="submit" class="btn btn-warning" name="update"><?php echo T_('Update Now!'); ?></button>
            </form>
        <?php } ?>
<?php require $prefix . '/templates/tiny_footer.inc.php'; ?>
