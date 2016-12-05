//<?php
/**
 * MODxFlatColors
 *
 * Customize MODxFlat Manager theme colors
 *
 * @author    Nicola Lambathakis http://www.tattoocms.it/
 * @category    plugin
 * @version    RC 1.0
 * @license	 http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @events OnManagerLoginFormPrerender,OnManagerTopPrerender,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreePrerender,OnManagerTreeInit
 * @internal    @installset base
 * @internal    @modx_category Admin
 * @internal    @properties  &PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color (mandatory) &NavFrameBgColor= Top Frame Background color:;string;;;(optional) &TreeBgColor= Tree Frame Background:;string;;;(optional) &TLinkColor=Tree Links Color:;string;;;Published resources and ElementsInTree element names (optional) &TreeElBgColor= Tree Elements tab Background:;string;;;ElementsInTree plugin background (optional) &MainBgColor= Main Frame Background:;string;;;(optional) &MainLinkColor=Main Links Color:;string;;;(optional)
 */

/*
### MODxFlatColors Plugin for MODX Evolution 1.2 ###
Customize MODxFlat Manager theme colors
Written By Nicola Lambathakis http://www.tattoocms.it/
Version RC 1.0
Events: OnManagerLoginFormPrerender,OnManagerTopPrerender,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreePrerender,OnManagerTreeInit

Default configuration:
&PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color (mandatory) &NavFrameBgColor= Top Frame Background color:;string;;;(optional) &TreeBgColor= Tree Frame Background:;string;;;(optional) &TLinkColor=Tree Links Color:;string;;;Published resources and ElementsInTree element names (optional) &TreeElBgColor= Tree Elements tab Background:;string;;;ElementsInTree plugin background (optional) &MainBgColor= Main Frame Background:;string;;;(optional) &MainLinkColor=Main Links Color:;string;;;(optional)

*/


// Run the main code
include($modx->config['base_path'].'assets/plugins/flatcolors/flatcolors.php');
