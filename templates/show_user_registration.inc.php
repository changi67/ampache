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
$sTitle = AmpConfig::get('site_title').' - '.T_('Registration');
$sHeadTitle = T_('Ampache Registration');
$aCSS[] = AmpConfig::get('web_path').AmpConfig::get('theme_path').'/templates/default.css';
$bBootstrap = true;
require $prefix . '/templates/tiny_header.inc.php';
?>

        <div class="jumbotron">
            <h1><?php echo T_('Registration'); ?>...</h1>
        </div>
<?php

$action = scrub_in($_REQUEST['action']);
$fullname = scrub_in($_REQUEST['fullname']);
$username = scrub_in($_REQUEST['username']);
$email = scrub_in($_REQUEST['email']);
$website = scrub_in($_REQUEST['website']);
?>

<form role="form" class="form-horizontal" name="update_user" method="post" action="<?php echo $web_path; ?>/register.php" enctype="multipart/form-data">
<?php
/*  If we should show the user agreement */
if (AmpConfig::get('user_agreement')) { ?>
<h3><?php echo T_('User Agreement'); ?></h3>
<div class="registrationAgreement">
    <div class="agreementContent">
        <?php Registration::show_agreement(); ?>
    </div>

    <div class="agreementCheckbox">
        <input type='checkbox' name='accept_agreement' /> <?php echo T_('I Accept'); ?>
        <?php Error::display('user_agreement'); ?>
    </div>
</div>
<?php } // end if user_agreement ?>
<h3><?php echo T_('User Information'); ?></h3>
    <div class="form-group">
        <label for="username" class="col-sm-3 control-label"><?php echo T_('Username'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='text' class="form-control" name='username' id='username' value='<?php echo scrub_out($username); ?>' />
            <?php Error::display('username'); ?>
            <?php Error::display('duplicate_user'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="fullname" class="col-sm-3 control-label"><?php echo T_('Full Name'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='text' class="form-control" name='fullname' id='fullname' value='<?php echo scrub_out($fullname); ?>' />
            <?php Error::display('fullname'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label"><?php echo T_('E-mail'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='text' class="form-control" name='email' id='email' value='<?php echo scrub_out($email); ?>' />
            <?php Error::display('email'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="website" class="col-sm-3 control-label"><?php echo T_('Website'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='text' class="form-control" name='website' id='website' value='<?php echo scrub_out($website); ?>' />
            <?php Error::display('website'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="password_1" class="col-sm-3 control-label"><?php echo T_('Password'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='password' class="form-control" name='password_1' id='password_1' />
            <?php Error::display('password'); ?>
        </div>
    </div>
    <div class="form-group">
        <label for="password_2" class="col-sm-3 control-label"><?php echo T_('Confirm Password'); ?>: <span class="asterix">*</span></label>
        <div class="col-sm-4">
            <input type='password' class="form-control" name='password_2' id='password_2' />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-3">
            <span><?php echo T_('* Required fields'); ?></span>
        </div>

<?php if (AmpConfig::get('captcha_public_reg')) { ?>
            <?php  echo captcha::form("&rarr;&nbsp;"); ?>
            <?php Error::display('captcha'); ?>
<?php } ?>

        <div class="col-sm-4">
            <input type="hidden" name="action" value="add_user" />
            <button type='submit' class="btn btn-warning"><?php echo T_('Register User'); ?>'</button>
        </div>
    </div>
</form>
</div>
<?php
UI::show_footer();
?>
