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

// We need this stuff
define('NO_SESSION', 1);
define('OUTDATED_DATABASE_OK', 1);
require_once 'lib/init.php';

// Get the version and format it
$version = Update::get_version();

if ($_REQUEST['action'] == 'update') {

    /* Run the Update Mojo Here */
    Update::run_update();

    /* Get the New Version */
    $version = Update::get_version();

}
$prefix = dirname(__FILE__);
$htmllang = str_replace("_","-",AmpConfig::get('lang'));
require_once 'templates/show_update.inc.php';
