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

$sTitle = T_("Ampache -- Config Debug Page");
$sHeadTitle = T_('Ampache Debug');
require $prefix . '/templates/tiny_header.inc.php';
?>
        <div class="page-header requirements">
            <h1><?php echo T_('Ampache Debug'); ?></h1>
        </div>
        <div class="well">
            <p>Ampache-doped.cfg.php error detected</p>
            <h3 style="color:red;">Ampache-doped.cfg.php Parse Error</h3>
            <p>You've been redirected to this page because your <strong>/config/ampache-doped.cfg.php</strong> was not parsable.
            If you are upgrading from 3.3.x please see the directions below.</p>

            <h3>Migrating from [Ampache 3.x.x - Ampache 3.6-doped] to Ampache Doped 3.7</h3>
            <p>Ampache Doped 3.7 use a new configuration file name <b>ampache-doped.cfg.php</b> instead of ampache.cfg.php to avoid conflicts with original
            Ampache project packages. Just rename your config file to ampache-doped.cfg.php and the automatic config file migration should work fine after that.</p>

            <h3>Migrating from 3.3.x to >= 3.4.x</h3>
            <p>Ampache 3.4 uses a different config parser that is over 10x faster then the previous version. Unfortunately the new parser is
            unable to read the old config files. From inside the Ampache root directory you must run <strong>php bin/migrate_config.inc</strong> from the command line to create your
            new config file.</p>

            <p>The following settings will not be migrated by the <strong>migrate_config.inc</strong> script due to major changes between versions. The default
            values from the ampache-doped.cfg.php.dist file will be used.</p>

            <strong>auth_methods</strong> (<i>mysql</i>)
            <p>This defines which auth methods Auth will attempt to use and in which order, if auto_create isn't enabled.
            The user must exist locally as well.</p>
            <strong>tag_order</strong> (<i>id3v2,id3v1,vorbiscomment,quicktime,ape,asf</i>)
            <p>This determines the tag order for all cataloged music. If none of the listed tags are found then ampache will default to
            the first tag format that was found. </p>
            <strong>album_art_order</strong> (<i>db,id3,folder,lastfm,amazon</i>)
            <p>Simply arrange the following in the order you would like ampache to search if you want to disable one of the search
            method simply comment it out valid values are</p>
            <strong>amazon_base_urls</strong> (<i>http://webservices.amazon.com</i>)
            <p>An array of Amazon sites to search. NOTE: This will search each of these sites in turn so don't expect it
            to be lightning fast! It is strongly recommended that only one of these is selected at any</p>
            <strong>downsample_cmd</strong>
            <p>This variable no longer exists, all downsampling/transcoding is handled by the transcode_*  please see config file for details.</p>
        </div>
<?php require $prefix . '/templates/tiny_footer.inc.php'; ?>
