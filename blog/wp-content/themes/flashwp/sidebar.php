<?php
/**
* The file for displaying the sidebars.
*
* @package FlashWP WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div class="flashwp-sidebar-one-wrapper flashwp-sidebar-widget-areas clearfix" id="flashwp-sidebar-one-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPSideBar" role="complementary">
<div class="theiaStickySidebar">
<div class="flashwp-sidebar-one-wrapper-inside clearfix">

<?php flashwp_before_sidebar(); ?>

<?php dynamic_sidebar( 'flashwp-sidebar-one' ); ?>

<?php flashwp_after_sidebar(); ?>

</div>
</div>
</div><!-- /#flashwp-sidebar-one-wrapper-->