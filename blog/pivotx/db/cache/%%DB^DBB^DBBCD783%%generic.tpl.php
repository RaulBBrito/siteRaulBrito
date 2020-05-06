<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:17
         compiled from generic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'generic.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="container">


    <div class="homeleftcolumn">
    
        <?php echo $this->_tpl_vars['html']; ?>

        <?php echo $this->_tpl_vars['form']; ?>


    </div>

    <div class="homerightcolumn">
        
        <noscript>
            <div class='warning'><h2><img src='pics/error.png' alt='' height='16' width='16' style='border-width: 0px; margin-bottom: -3px;' />
                <strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></h2>
                <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Javascript and Cookies must be enabled to log in to PivotX.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            </div>
        </noscript>

        <?php if (is_array ( $this->_tpl_vars['warnings'] ) && count ( $this->_tpl_vars['warnings'] ) > 0): ?>
            <?php $_from = $this->_tpl_vars['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <div class="warning">
                <h2><img src="pics/error.png" alt="" height="16" width="16" style="border-width: 0px; margin-bottom: -3px;" /> Warning!</h2>   
                <?php echo $this->_tpl_vars['item']; ?>

            </div>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

    </div>

    &nbsp; <!-- Because Internet Explorer is a bug-filled piece of trash, it needs this space, because otherwise it won't show the contents of #errorbanner. Yes. Really. -->

    <div class="cleaner">&nbsp;</div>

</div><!-- end of 'container' -->


<script type="text/javascript">
//<![CDATA[

jQuery(function($) {

    // Check if we have a session cookie.
    if (!cookieEnabled()) {
        var html = "<div class='warning'><h2><img src='pics/error.png' alt='' height='16' width='16' style='border-width: 0px; margin-bottom: -3px;' />";
        html += "<strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></h2>";
        html += "<p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PivotX couldn't set the session properly. Try logging out, and logging on again. You could also try clearing your browser's cache, and make sure no software on your computer is interfering with the cookies.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>";
        html += "<p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If the problem persists, ask for help on the forum.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>";
        html += "</div>";

        $('.homerightcolumn').prepend(html);

    }

});

//]]>
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>