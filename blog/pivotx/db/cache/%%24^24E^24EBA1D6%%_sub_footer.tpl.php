<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from skinny/_sub_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'skinny/_sub_footer.tpl', 2, false),array('function', 'sitename', 'skinny/_sub_footer.tpl', 2, false),)), $this); ?>
        <div id="footer">
            <p><a href="#top"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Top<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | <?php echo smarty_sitename(array(), $this);?>
 - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Powered by<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <a href="http://pivotx.net/"><?php echo $this->_tpl_vars['build']; ?>
</a></p>
        </div>
    </div><!-- #wrapper -->
</body>
</html>