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

$sTinyHTMLLang = substr($htmllang, 0, 2);
$sCharset = AmpConfig::get('site_charset');
?>
<!doctype html>
<html lang="<?php echo $sTinyHTMLLang; ?>">
    <head>
         <meta charset="<?php echo $sCharset ?>">
         <?php foreach ($aMeta as $sMeta) { echo $sMeta.PHP_EOL; } ?>
         <title><?php echo $sTitle;?></title>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <link rel="shortcut icon" href="<?php echo $web_path; ?>/favicon.ico" />
         <link rel="stylesheet" href="<?php echo $web_path; ?>/modules/bootstrap/css/bootstrap.min.css" media="screen">
         <link rel="stylesheet" href="<?php echo $web_path; ?>/modules/bootstrap/css/bootstrap-theme.min.css" media="screen">
         <link rel="stylesheet" href="<?php echo $web_path; ?>/templates/install-doped.css" media="screen">
    </head>
    <body>
        <!-- rfc3514 implementation -->
        <div id="rfc3514" style="display: none;">0x0</div>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $web_path; ?>/themes/reborn/images/ampache.png" title="Ampache" alt="Ampache">
                    <?php echo $sHeadTitle; ?> - <?php echo T_("For the love of Music") ?>
                </a>
            </div>
        </div>
        <div class="container" role="main">
