<?php /* Smarty version 2.6.26, created on 2020-05-05 14:42:18
         compiled from db:eca2641ba5 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'link', 'db:eca2641ba5', 3, false),array('function', 'title', 'db:eca2641ba5', 3, false),array('function', 'subtitle', 'db:eca2641ba5', 4, false),array('function', 'introduction', 'db:eca2641ba5', 5, false),array('function', 'more', 'db:eca2641ba5', 6, false),array('function', 'user', 'db:eca2641ba5', 8, false),array('function', 'date', 'db:eca2641ba5', 8, false),array('function', 'permalink', 'db:eca2641ba5', 9, false),array('function', 'category', 'db:eca2641ba5', 10, false),array('function', 'commentlink', 'db:eca2641ba5', 12, false),array('function', 'editlink', 'db:eca2641ba5', 14, false),array('function', 'tags', 'db:eca2641ba5', 17, false),)), $this); ?>
                        
<div class="entry">
    <h2><a href="<?php echo smarty_link(array('hrefonly' => 1), $this);?>
"><?php echo smarty_title(array(), $this);?>
</a></h2>
    <h3><?php echo smarty_subtitle(array(), $this);?>
</h3>
    <?php echo smarty_introduction(array(), $this);?>

    <p><?php echo smarty_more(array(), $this);?>
</p>
    <div class="meta" style='clear:both;'>
        <?php echo smarty_user(array('field' => 'emailtonick'), $this);?>
 | <?php echo smarty_date(array('format' => "%dayname% %day% %monthname% %year% - %hour12%&#58;%minute% %ampm%"), $this);?>
 | 
        <?php echo smarty_permalink(array('text' => "&para;",'title' => "Permanent link to '%title%' in the archives"), $this);?>
 |
        <?php echo smarty_category(array('link' => true), $this);?>
 
        <?php if (( $this->_tpl_vars['entry']['allow_comments'] == 1 )): ?>
            | <?php echo smarty_commentlink(array(), $this);?>

        <?php endif; ?>
        <?php echo smarty_editlink(array('format' => 'Edit','prefix' => " | "), $this);?>

    </div>
    <div class="meta">
        <?php echo smarty_tags(array(), $this);?>

    </div>
</div>
        