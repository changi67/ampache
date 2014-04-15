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

$htmllang = str_replace("_","-",AmpConfig::get('lang'));
$web_path = AmpConfig::get('web_path');
$sTitle = AmpConfig::get('site_title')." - ".T_('Registration');
$sHeadTitle = T_('Ampache Installation');
require $prefix . '/templates/tiny_header.inc.php';
?>
        <div class="page-header requirements">
            <h1><?php echo T_('Registration Complete'); ?>...</h1>
        </div>
        <div class="well">
            <?php echo T_('Your account has been created. An activation key has been sent to the e-mail address you provided. Please check your e-mail for further information'); ?>
             <form role="form" method="post" action="<?php echo AmpConfig::get('web_path'); ?>/login.php">
                 <button class="btn btn-warning"><?php echo T_('Return to Login Page'); ?></button>
             </form>
        </div>
<?php require $prefix . '/templates/tiny_footer.inc.php'; ?>
