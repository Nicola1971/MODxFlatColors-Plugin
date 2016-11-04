<?php
/**
events: OnManagerTopFrameHeaderHTMLBlock,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreeRender
config:
&PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color (mandatory) &NavFrameBgColor= Top Frame Background color:;string;;;(optional) &TreeBgColor= Tree Frame Background:;string;;;(optional) &TLinkColor=Tree Links Color:;string;;;Published resources and ElementsInTree element names (optional) &TreeElBgColor= Tree Elements tab Background:;string;;;ElementsInTree plugin background (optional) &MainBgColor= Main Frame Background:;string;;;(optional) &MainLinkColor=Main Links Color:;string;;;(optional)

**/
$output = "";
$e = &$modx->Event;

//Flat Skin */
$PrimaryColor = isset($PrimaryColor) ? $PrimaryColor : '';
$TreeLinksC = isset($TreeLinksC) ? $TreeLinksC : '';
$TreeElBgColor = isset($TreeElBgColor) ? $TreeElBgColor : '';

/***************Top Frame (nav)  ******************/
if($e->name == 'OnManagerTopPrerender') {
//top frame - Nav bar
$topcssOutput = '<style>
#topMenu{
background:'.$NavFrameBgColor.';
}
#nav li.active {
color:'.$PrimaryColor.'!important;
background:'.$PrimaryColor.'!important;
}
#nav li ul li a, .subnav {
background:'.$PrimaryColor.'!important;
border-top:'.$PrimaryColor.'!important;
}
</style>
';
}
/***************Main frame******************/
if($e->name == 'OnManagerMainFrameHeaderHTMLBlock') {
if (empty($MainLinkColor)) {
$ALinksColor = $PrimaryColor;
}
else {
$ALinksColor = $MainLinkColor;
    }    
    //main frame - boxes and tabs
$maincssOutput = '
<style>
body {
	background:'.$MainBgColor.'!important;
}
a:link, a:visited {
    color: '.$ALinksColor.'!important;
}
a.btn.btn-action, a.btn.panel-hide, #modxrecent_widget .btn, div#categories_list ul li strong a {
    color: #FFF!important;
}
span.disabledPlugin a {
    color: #aaa!important;
}

h1:before, .tab-pane ul li ul li:before, form h1:before, .dashboard h1:before, .dashboard-block-content ul li a, .dashrow
ul li span a, span.pagetitle-icon
{color: '.$PrimaryColor.'!important;}

input[type="button"], input[type="submit"], .tab-pane ul li strong, #mx_contextmenu #nameHolder, .panel-hide, .tab-pane ul li strong {
background:'.$PrimaryColor.'!important;}

.tab-pane ul li ul li strong {
	background:transparent!important;
}
.dashboard .sectionHeader, .sectionHeader, .tab-pane ul li strong 
{
background:'.$PrimaryColor.'!important;
border:'.$PrimaryColor.'!important;
border-bottom:0;
}
.dashboard .sectionHeader, .sectionHeader, .tab-pane ul li strong 
{
border:'.$PrimaryColor.' ;
border-bottom:0;
}
.dynamic-tab-pane-control.tab-pane .tab-row .tab.selected,
.dynamic-tab-pane-control.tab-pane .tab-row .tab.selected.hover{
background: '.$PrimaryColor.';
}
.dynamic-tab-pane-control.tab-pane .tab-row .tab.selected span:after {
border-top-color: '.$PrimaryColor.';
}
.dynamic-tab-pane-control .tab-row .tab.selected.hover {
color:'.$PrimaryColor.';
border-top-color:'.$PrimaryColor.';
}
.dynamic-tab-pane-control .tab-row .tab, 
.dynamic-tab-pane-control .tab-row .tab span i,
.tab-pane ul li ul li strong,
.dynamic-tab-pane-control .tab-row .tab.hover span
{
color:'.$PrimaryColor.';
}
.dynamic-tab-pane-control .tab-row .tab.selected span i,
.dynamic-tab-pane-control .tab-row .tab.selected.hover span i 
 {
  color: #FFF;
  background: transparent;
}

.actionButtons a:hover 
{
background:'.$PrimaryColor.';
border-color:'.$PrimaryColor.';
}
</style>
';
}

/***************tree frame**********************/
if($e->name == 'OnManagerTreePrerender') {
//tree frame
    

if (empty($TLinkColor)) {
$TreeLinksColor = $PrimaryColor;
}
else {
$TreeLinksColor = $TLinkColor;
    }

$treecssOutput = '<style>
body {
	background:'.$TreeBgColor.'!important;
}
div.treeframebody, #treeHolder {	background: '.$TreeBgColor.'!important;}

.treeButton i, .treeButtonDisabled i , #mx_contextmenu .menuLink i{  color: '.$PrimaryColor.'!important;
}
div#treeHolder a i:hover, .treeButton i:hover, .treeButtonDisabled i:hover {
	color: '.$PrimaryColor.'!important;
}
.treeNodeHover .publishedNode, .treeNodeSelected .publishedNode,
.treeNodeHover .notInMenuNode, .treeNodeSelected .notInMenuNode {
color: '.$PrimaryColor.'!important;
border-color: '.$PrimaryColor.'!important;
}
.treeframebody .tab-row h2.tab span, .treeframebody .tab-row h2.tab span i, .treeframebody .tab-pane input.form-control{
    color: '.$PrimaryColor.'!important; }

#mx_contextmenu #nameHolder, #mx_contextmenu a i, #mx_contextmenu .menuLink:hover {
background:'.$PrimaryColor.';
color:#FFF!important;
}
 .tab-page ul.actionButtons li a:hover, #treePane .tab-page .actionButtons a:hover, #treePane .tab-page .actionButtons a:hover i {
background:'.$PrimaryColor.';
border-color: '.$PrimaryColor.'!important;
color: #FFF!important;
}

.treeframebody .tab-page, .treeframebody .tab-row h2.tab.selected span, .treeframebody .tab-row h2.tab.selected.hover, .treeframebody .tab-row h2.tab.selected,
.treeframebody  .tab-row h2.tab.selected.hover,
.treeframebody  .tab-row .tab.selected:before
{
background: '.$TreeElBgColor.'!important;
background-color: '.$TreeElBgColor.'!important;
}

.treeframebody .tab-page ul.actionButtons li i,
#mx_contextmenu .menuLink:hover i{
color:#FFF!important;
}
.rootNode, .publishedNode, 
.treeframebody .elementname {color: '.$TreeLinksColor.'!important;}
span.disabledPlugin > a > span.elementname {color: #b27979!important;}
</style>
';

}
$manager_theme = $modx->config['manager_theme'];
if($manager_theme == "MODxFLAT") {
$output .= $maincssOutput.$topcssOutput.$treecssOutput;
}
$e->output($output);
return;
?>