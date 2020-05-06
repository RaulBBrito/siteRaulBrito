<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:17
         compiled from inc_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', 'inc_header.tpl', 3, false),array('function', 'hook', 'inc_header.tpl', 6, false),array('modifier', 'strip_tags', 'inc_header.tpl', 14, false),array('modifier', 'escape', 'inc_header.tpl', 169, false),array('block', 't', 'inc_header.tpl', 23, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo smarty_lang(array('type' => 'xml'), $this);?>
 <?php echo smarty_lang(array('type' => 'html'), $this);?>
>
<head>

    <?php echo smarty_hook(array('name' => "head-begin"), $this);?>


    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
pics/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="robots" content="noindex, nofollow" />

    <title>PivotX &raquo;
    <?php if ($this->_tpl_vars['currentpage'] == 'dashboard' || $this->_tpl_vars['currentpage'] == 'login'): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['config']['sitename'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 &raquo; <?php endif; ?>
    <?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</title>

    <!-- jquery and the likes -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['jquery_url']; ?>
"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['jquery_ui_url']; ?>
"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['jquery_plugins_url']; ?>
"></script>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        humanMsg.setup('body','<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Message Log<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');
    });
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
templates_internal/ui-theme/jquery-ui-1.9.1.custom.css" />

    <!-- Markitup -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
includes/markitup/markitup.css" />
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
includes/markitup/jquery.markitup.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
includes/markitup/set.js"></script>

    <!-- Thickbox -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
includes/js/thickbox.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
templates_internal/assets/thickbox.css" />

    <!-- Formclass library -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
templates_internal/assets/formclass.css" />

    <!-- PivotX -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
includes/js/pivotx.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
templates_internal/assets/pivotx.css"/>

    <?php echo smarty_hook(array('name' => "head-end"), $this);?>


</head>

<?php if (! $this->_tpl_vars['online']): ?>
<body class="website-offline">
<?php else: ?>
<body>
<?php endif; ?>

    <?php echo smarty_hook(array('name' => "body-begin"), $this);?>



<div id="header">

    <?php echo smarty_hook(array('name' => "logo-before"), $this);?>

    <div id="logo">
        <a href="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
index.php"><img src="templates_internal/assets/pivotx.png" alt="PivotX" /></a>
    </div>
    <?php echo smarty_hook(array('name' => "logo-after"), $this);?>



    <?php echo smarty_hook(array('name' => "sitename-before"), $this);?>

    <div id="sitenamediv">
        <a href="<?php echo $this->_tpl_vars['paths']['site_url']; ?>
" <?php if (! $this->_tpl_vars['config']['front_end_links_same_window']): ?>target="_blank"<?php endif; ?> class="front_end"><?php echo $this->_tpl_vars['config']['sitename']; ?>
</a>
    </div>
    <?php echo smarty_hook(array('name' => "sitename-after"), $this);?>



    <?php echo smarty_hook(array('name' => "usermenu-before"), $this);?>

    <div id="usermenu">
        <span class="website-offline"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Website is OFFLINE<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong> | </span>
        <?php if ($this->_tpl_vars['user']['username'] == ""): ?>
            <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome, unknown user.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php else: ?>
            <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Welcome back<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>, <?php echo $this->_tpl_vars['user']['nickname']; ?>

            - <a href="index.php?page=myinfo"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>My Info<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            - <a href="index.php?page=logout"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Logout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php endif; ?>
    </div>
    <?php echo smarty_hook(array('name' => "usermenu-after"), $this);?>



    <?php echo smarty_hook(array('name' => "mainmenu-before"), $this);?>

    <!-- main menu -->


    <ul id="mainmenu" class="sf-menu sf-navbar">

        <!-- Current page: <?php echo $this->_tpl_vars['currentpage']; ?>
 -->
<?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <li<?php if (in_array ( $this->_tpl_vars['currentpage'] , $this->_tpl_vars['item']['all_pages'] )): ?> class="current parent"<?php endif; ?>>
            <a href="<?php echo $this->_tpl_vars['item']['href']; ?>
" title="<?php echo $this->_tpl_vars['item']['description']; ?>
"><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a>
<?php if ($this->_tpl_vars['item']['have_menu']): ?>
            <ul>
<?php $_from = $this->_tpl_vars['item']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['submenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['submenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['subitem']):
        $this->_foreach['submenu']['iteration']++;
?>
<?php if ($this->_tpl_vars['subitem']['is_divider']): ?>
                <li class="divider">&#160;</li>
<?php else: ?>
                <li class="<?php if (in_array ( $this->_tpl_vars['currentpage'] , $this->_tpl_vars['subitem']['all_pages'] )): ?>current<?php endif; ?><?php if (($this->_foreach['submenu']['iteration'] == $this->_foreach['submenu']['total'])): ?>last<?php endif; ?>">
<?php if ($this->_tpl_vars['subitem']['have_menu']): ?>
                    <a class="sf-with-ul" href="#" title="<?php echo $this->_tpl_vars['subitem']['description']; ?>
"><?php echo $this->_tpl_vars['subitem']['name']; ?>
</a>
                    <ul>
<?php $_from = $this->_tpl_vars['subitem']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubitem']):
?>
                        <li><a href="<?php echo $this->_tpl_vars['subsubitem']['href']; ?>
" title="<?php echo $this->_tpl_vars['subsubitem']['description']; ?>
"><?php echo $this->_tpl_vars['subsubitem']['name']; ?>
</a></li>
<?php endforeach; endif; unset($_from); ?>
                    </ul>
<?php else: ?>
                    <a href="<?php echo $this->_tpl_vars['subitem']['href']; ?>
" title="<?php echo $this->_tpl_vars['subitem']['description']; ?>
" <?php if (! empty ( $this->_tpl_vars['subitem']['target_blank'] )): ?>target="_blank"<?php endif; ?>><?php echo $this->_tpl_vars['subitem']['name']; ?>
</a>
<?php endif; ?>
                </li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
            </ul>
<?php endif; ?>
        </li>
<?php endforeach; endif; unset($_from); ?>

    </ul>

    <!-- end of main menu -->
    <?php echo smarty_hook(array('name' => "mainmenu-after"), $this);?>



</div>

<?php echo smarty_hook(array('name' => "content-before"), $this);?>

<div id="content">
    <?php echo smarty_hook(array('name' => "content-begin"), $this);?>



    <?php echo smarty_hook(array('name' => "title-before"), $this);?>


    <?php if ($this->_tpl_vars['skiptitle'] != true): ?>
        <h1>
            <?php echo $this->_tpl_vars['title']; ?>

            <?php if ($this->_tpl_vars['entry']['title'] != ""): ?><span> &raquo; <?php echo $this->_tpl_vars['entry']['title']; ?>
</span><?php endif; ?>
            <?php if ($this->_tpl_vars['page']['title'] != ""): ?><span> &raquo; <?php echo $this->_tpl_vars['page']['title']; ?>
</span><?php endif; ?>
        </h1>

    <?php endif; ?>

    <?php if ($this->_tpl_vars['heading'] != $this->_tpl_vars['title'] && $this->_tpl_vars['heading'] != ""): ?>
        <h2><?php echo $this->_tpl_vars['heading']; ?>
</h2>
    <?php endif; ?>

    <?php echo smarty_hook(array('name' => "title-after"), $this);?>


    <?php echo smarty_hook(array('name' => "error-before"), $this);?>


    <?php if ($this->_tpl_vars['error'] != ""): ?>
        <div class="errorbanner" id='errorbanner'>
            <?php echo $this->_tpl_vars['error']; ?>

        </div>
    <?php endif; ?>

    <?php echo smarty_hook(array('name' => "error-after"), $this);?>


    <?php if (is_array ( $this->_tpl_vars['messages'] ) && count ( $this->_tpl_vars['messages'] ) > 0): ?>
    <script type="text/javascript">
    //<![CDATA[

    jQuery(function($) {
        <?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        humanMsg.displayMsg("<?php echo ((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
");
        <?php endforeach; endif; unset($_from); ?>
    });
    //]]>
    </script>
    <?php endif; ?>