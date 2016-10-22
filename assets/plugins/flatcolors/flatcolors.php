<?php
/**
events: OnManagerTopFrameHeaderHTMLBlock,OnManagerMainFrameHeaderHTMLBlock,OnManagerTreeRender
config:
&PrimaryColor=MODxFlat Manager Color:;string;#FF6600;;Flat Skin Primary Color &LinkColor=Links Color:;string; &NavFrameBgColor=Top Frame Background color:;string; &TreeBgColor=Tree Frame Background:;string; &MainBgColor=Main Frame Background:;string;

**/
$output = "";
$e = &$modx->Event;

//Flat Skin */
$PrimaryColor = isset($PrimaryColor) ? $PrimaryColor : '';

//body
$LinkColor = isset($LinkColor) ? $LinkColor : '';


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
    //main frame - boxes and tabs
$maincssOutput = '

<style>
body {
	background:'.$MainBgColor.'!important;
}
a:link {
    color: '.$LinkColor.'!important;
}

h1:before, .tab-pane ul li ul li:before, .dynamic-tab-pane-control .tab-row, .tab.selected span, form h1:before, .dashboard h1:before, .dashboard-block-content ul li a, .dashrow
ul li span a, span.pagetitle-icon
{color: '.$PrimaryColor.'!important;}

input[type="button"], input[type="submit"], .tab-pane ul li strong, #mx_contextmenu #nameHolder, .panel-hide, .dashboard .sectionHeader, .sectionHeader, .tab-pane ul li strong {
background:'.$PrimaryColor.'!important;}

.tab-pane ul li ul li strong {
	background:transparent!important;
}
.dashboard .sectionHeader, .sectionHeader, .tab-pane ul li strong 
{
background:'.$PrimaryColor.'!important;
border:'.$PrimaryColor.' ;
border-bottom:0;
}
.dashboard .sectionHeader, .sectionHeader, .tab-pane ul li strong 
{
border:'.$PrimaryColor.' ;
border-bottom:0;
}
.dynamic-tab-pane-control .tab-row .tab.selected, .dynamic-tab-pane-control .tab-row .tab.selected span{
border-top-color:'.$PrimaryColor.';
}
.dynamic-tab-pane-control .tab-row .tab.selected.hover {
color:'.$PrimaryColor.';
border-top-color:'.$PrimaryColor.';
}
.dynamic-tab-pane-control .tab-row .tab, .dynamic-tab-pane-control .tab-row .tab.hover span, 
.tab-row h2.tab span i,
.tab-pane ul li ul li strong
{
color:'.$PrimaryColor.'!important;
}
.actionButtons a {
color:#FFF!important;
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

$treecssOutput = '<style>
body {
	background:'.$TreeBgColor.'!important;
}
div.treeframebody, #treeHolder {	background: '.$TreeBgColor.'!important;}

.treeButton i, .treeButtonDisabled i {  color: '.$PrimaryColor.'!important;
}
div#treeHolder a i:hover, .treeButton i:hover, .treeButtonDisabled i:hover {
	color: '.$PrimaryColor.'!important;
}
.treeNodeHover .publishedNode, .treeNodeSelected .publishedNode,
.treeNodeHover .notInMenuNode, .treeNodeSelected .notInMenuNode {
 color: '.$PrimaryColor.'!important;
border-color: '.$PrimaryColor.'!important;
}
.rootNode, .publishedNode, .treeframebody .tab-row h2.tab span, .treeframebody .tab-row h2.tab span i, .treeframebody .tab-pane input.form-control, .elementname{
    color: '.$PrimaryColor.'!important;
    }

#mx_contextmenu #nameHolder, #mx_contextmenu a i  {
background:'.$PrimaryColor.';
color:#FFF!important;
}
 .tab-page ul.actionButtons li a:hover {
background:'.$PrimaryColor.';
border-color: '.$PrimaryColor.'!important;
color: #FFF!important;
}
.treeframebody .tab-page ul.actionButtons li i {
color:#FFF!important;
}
	</style>
';
}

$output .= $maincssOutput.$topcssOutput.$treecssOutput;
$e->output($output);
return;
?>