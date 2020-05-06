<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from skinny/front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'subweblog', 'skinny/front.tpl', 5, false),array('function', 'paging', 'skinny/front.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatedir'])."/_sub_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content">
    <div id="main">
        <!-- begin of weblog 'standard' -->
        <?php $this->_tag_stack[] = array('subweblog', array('name' => 'standard')); $_block_repeat=true;smarty_weblog($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatedir'])."/_sub_weblog.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_weblog($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <!-- end of weblog 'standard' -->
        <div class="pagenav">
            <?php echo smarty_paging(array('action' => 'prev'), $this);?>
 |
            <?php echo smarty_paging(array('action' => 'curr'), $this);?>
 |
            <?php echo smarty_paging(array('action' => 'next'), $this);?>

        </div>
        <!-- remove the stars to enable the Digg style paginator -->
            </div><!-- #main -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatedir'])."/_sub_sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div><!-- #content -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatedir'])."/_sub_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>