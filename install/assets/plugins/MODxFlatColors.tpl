//<?php
/**
 * MODxFlatColors
 *
 * Customize MODxFlat Manager theme colors
 *
 * @author    Nicola Lambathakis http://www.tattoocms.it/
 * @category    plugin
 * @version    Beta 1.0
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerTopFrameHeaderHTMLBlock,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreeRender
 * @internal    @installset base
 * @internal    @modx_category Admin
 * @internal    @properties  &PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color &LinkColor=Links Color:;string; &NavFrameBgColor=Top Frame Background color:;string; &TreeBgColor=Tree Frame Background:;string; &MainBgColor=Main Frame Background:;string;
 */

/*
### MODxFlatColors Plugin for MODX Evolution 1.2 ###
Customize MODxFlat Manager theme colors
Written By Nicola Lambathakis http://www.tattoocms.it/
Version Beta 1.0
Events: OnManagerTopFrameHeaderHTMLBlock,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreeRender

Default configuration:
&PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color &LinkColor=Links Color:;string; &NavFrameBgColor=Top Frame Background color:;string; &TreeBgColor=Tree Frame Background:;string; &MainBgColor=Main Frame Background:;string;

*/


// Run the main code
include($modx->config['base_path'].'assets/plugins/flatcolors/flatcolors.php');