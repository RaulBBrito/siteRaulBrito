<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from skinny/_sub_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', 'skinny/_sub_header.tpl', 2, false),array('function', 'title', 'skinny/_sub_header.tpl', 6, false),array('function', 'sitename', 'skinny/_sub_header.tpl', 6, false),array('function', 'template_dir', 'skinny/_sub_header.tpl', 10, false),array('function', 'home', 'skinny/_sub_header.tpl', 19, false),array('function', 'webloghome', 'skinny/_sub_header.tpl', 20, false),array('function', 'weblogsubtitle', 'skinny/_sub_header.tpl', 20, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo smarty_lang(array('type' => 'xml'), $this);?>
 <?php echo smarty_lang(array('type' => 'html'), $this);?>
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        <?php if ($this->_tpl_vars['pagetype'] == 'entry' || $this->_tpl_vars['pagetype'] == 'page'): ?><?php echo smarty_title(array(), $this);?>
 - <?php echo smarty_sitename(array(), $this);?>

        <?php else: ?><?php echo smarty_sitename(array(), $this);?>
<?php endif; ?>
    </title>
    
    <link href="<?php echo smarty_template_dir(array('base' => 'true'), $this);?>
pivotx_essentials.css" rel="stylesheet" type="text/css" media="screen" />  
    <link href="<?php echo smarty_template_dir(array(), $this);?>
style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
    <a name="top"></a>
    <div id="wrapper">
        <div id="header">
            <div id="siteinfo">
                <h1><a href="<?php echo smarty_home(array(), $this);?>
"><?php echo smarty_sitename(array(), $this);?>
</a></h1>
                <h2><a href="<?php echo smarty_log_dir(array(), $this);?>
"><?php echo smarty_weblogsubtitle(array(), $this);?>
</a></h2>
            </div>
        </div>