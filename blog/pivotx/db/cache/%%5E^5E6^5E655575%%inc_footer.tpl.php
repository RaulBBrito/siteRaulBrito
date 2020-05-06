<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:17
         compiled from inc_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'hook', 'inc_footer.tpl', 4, false),array('block', 't', 'inc_footer.tpl', 17, false),)), $this); ?>
    <br />
    <br />

    <?php echo smarty_hook(array('name' => "content-end"), $this);?>

</div><!-- end of 'content' -->

<?php echo smarty_hook(array('name' => "content-after"), $this);?>


<br />

<?php echo smarty_hook(array('name' => "footer-before"), $this);?>

<div id="footer">
    <?php echo smarty_hook(array('name' => "footer-begin"), $this);?>

     <small>
         <?php echo $this->_tpl_vars['now']; ?>

         <?php if ($this->_tpl_vars['config']['debug'] == 1): ?>
            - <a href="modules/module_debug.php#bottom" onclick="void(debugwin = window.open('modules/module_debug.php#bottom', 'debugwin', 'status=yes, scrollbars=yes, resizable=yes, width=700, height=300')); return false;"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View debug logs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            - <?php echo $this->_tpl_vars['timetaken']; ?>
 <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>sec.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>, <?php echo $this->_tpl_vars['memtaken']; ?>

            - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>using<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['config']['db_model']; ?>
 db<?php if ($this->_tpl_vars['config']['db_model'] == 'mysql'): ?>
            - <?php echo $this->_tpl_vars['query_count']; ?>
 <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>queries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> (<?php echo $this->_tpl_vars['timetaken_sql']; ?>
 <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>sec.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>
            - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>build<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> #<?php echo $this->_tpl_vars['svnbuild']; ?>
.
        <?php endif; ?>
     </small>

    <em><?php echo $this->_tpl_vars['build']; ?>
</em> &nbsp; - &nbsp; &copy; <?php echo $this->_tpl_vars['year']; ?>
, <a href="http://www.pivotx.net" target="_blank"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The PivotX Team<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        - <a href="index.php?page=about"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>About<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>.

    <?php echo smarty_hook(array('name' => "footer-end"), $this);?>

</div><!-- end of 'footer' -->
<?php echo smarty_hook(array('name' => "footer-after"), $this);?>



<?php echo smarty_hook(array('name' => "body-end"), $this);?>

</body>
<?php echo smarty_hook(array('name' => "html-end"), $this);?>

</html>