<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from skinny/_sub_sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'search', 'skinny/_sub_sidebar.tpl', 4, false),array('function', 'getpage', 'skinny/_sub_sidebar.tpl', 11, false),array('function', 'title', 'skinny/_sub_sidebar.tpl', 12, false),array('function', 'introduction', 'skinny/_sub_sidebar.tpl', 13, false),array('function', 'resetpage', 'skinny/_sub_sidebar.tpl', 15, false),array('function', 'tagcloud', 'skinny/_sub_sidebar.tpl', 21, false),array('function', 'latest_comments', 'skinny/_sub_sidebar.tpl', 27, false),array('function', 'pagelist', 'skinny/_sub_sidebar.tpl', 37, false),array('function', 'archive_list', 'skinny/_sub_sidebar.tpl', 51, false),array('function', 'widgets', 'skinny/_sub_sidebar.tpl', 75, false),array('function', 'category_list', 'skinny/_sub_sidebar.tpl', 81, false),array('function', 'pivotxbutton', 'skinny/_sub_sidebar.tpl', 87, false),array('function', 'rssbutton', 'skinny/_sub_sidebar.tpl', 88, false),array('function', 'atombutton', 'skinny/_sub_sidebar.tpl', 89, false),array('block', 't', 'skinny/_sub_sidebar.tpl', 14, false),)), $this); ?>
<div id="sidebar">

    <?php if ($this->_tpl_vars['pagetype'] != 'search'): ?>
        <?php echo smarty_search(array('request_method' => 'get'), $this);?>

    <?php endif; ?>

    <?php if ($this->_tpl_vars['modifier']['pagetype'] == 'page' && $this->_tpl_vars['modifier']['uri'] == 'about'): ?>
            <?php else: ?>
        <div class="sidebar-block">
            <?php echo smarty_getpage(array('uri' => 'about'), $this);?>

            <h4><?php echo smarty_title(array(), $this);?>
</h4>
            <?php echo smarty_introduction(array(), $this);?>

            <?php if (strlen ( $this->_tpl_vars['page']['body'] ) > 10): ?><p><a href="<?php echo $this->_tpl_vars['page']['link']; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>More<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p><?php endif; ?>
            <?php echo smarty_resetpage(array(), $this);?>

        </div>
    <?php endif; ?>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tag Cloud<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
        <?php echo smarty_tagcloud(array(), $this);?>

    </div>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Latest Comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
        <ul>
        <?php echo smarty_latest_comments(array('format' => "<li><a href='%url%' title='%url%'>%name% - %title%:</a> %comm%</li>",'length' => 100,'trim' => 16,'count' => 6), $this);?>

        </ul>
    </div>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
        <?php echo smarty_pagelist(array('chapterbegin' => "<ul>",'pages' => "<li %active%><a href='%link%' title='%subtitle%'>%title%</a></li>",'chapterend' => "</ul>",'onlychapter' => 'pages','isactive' => "id='active'",'exclude' => "",'sort' => 'title'), $this);?>

    </div>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archives<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
         
        <select id="archivemenu" style='display:none;'> 
            <option><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Archives<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
            <?php echo smarty_archive_list(array('unit' => 'month','order' => 'desc','format' => '<option value="%url%">%st_monname% %st_year%</option>'), $this);?>
 
        </select>   

        <script type='text/javascript'>  
            jQuery(document).ready(function() {  
                jQuery("#archivemenu").show();  
                jQuery("#archivemenu").bind("change", function(){  
                document.location = jQuery("#archivemenu").val();  
                });  
            });  
        </script>  

          
        <noscript>  
            <ul>  
                <?php echo smarty_archive_list(array('unit' => 'month','order' => 'desc','format' => '<li><a href="%url%">%st_monname% %st_year%</a></li>'), $this);?>
  
            </ul>   
        </noscript> 
    </div>

    <div class="sidebar-block">
        <?php echo smarty_widgets(array(), $this);?>

    </div>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
        <ul>
        <?php echo smarty_category_list(array('format' => "<li><a href='%url%'>%display%</a></li>"), $this);?>

        </ul>
    </div>

    <div class="sidebar-block">
        <h4><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Meta<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h4>
        <?php echo smarty_pivotxbutton(array(), $this);?>

        <?php echo smarty_rssbutton(array(), $this);?>

        <?php echo smarty_atombutton(array(), $this);?>

    </div>

    <?php if ($this->_tpl_vars['modifier']['pagetype'] == 'page' && $this->_tpl_vars['modifier']['uri'] == 'links'): ?>
            <?php else: ?>
        <div class="sidebar-block">
            <?php echo smarty_getpage(array('uri' => 'links'), $this);?>

            <h4><?php echo smarty_title(array(), $this);?>
</h4>
            <?php echo smarty_introduction(array(), $this);?>

            <?php if (strlen ( $this->_tpl_vars['page']['body'] ) > 10): ?><p><a href="<?php echo $this->_tpl_vars['page']['link']; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>More<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p><?php endif; ?>
            <?php echo smarty_resetpage(array(), $this);?>

        </div>
    <?php endif; ?>
        
</div><!-- #sidebar -->