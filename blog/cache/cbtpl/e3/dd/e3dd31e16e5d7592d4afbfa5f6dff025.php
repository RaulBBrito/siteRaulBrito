<footer class="resume-section p-3 p-lg-5 align-items-center" id="footer">
	<p id="gotop"><a class="js-scroll-trigger" href="#page-top"><?php echo __('Page top'); ?></a></p>

	<?php if ($core->hasBehavior('publicInsideFooter')) { $core->callBehavior('publicInsideFooter',$core,$_ctx);} ?>

	<p><?php printf(__("Powered by %s"),"<a href=\"https://dotclear.org/\">Dotclear</a>"); ?></p>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo context::global_filters($core->blog->settings->system->themes_url."/".$core->blog->settings->system->theme,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogThemeURL'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugins jQuery -->
<script src="<?php echo context::global_filters($core->blog->settings->system->themes_url."/".$core->blog->settings->system->theme,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogThemeURL'); ?>/js/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo context::global_filters($core->blog->settings->system->themes_url."/".$core->blog->settings->system->theme,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogThemeURL'); ?>/js/resume.min.js"></script>
<?php if ($core->hasBehavior('publicFooterContent')) { $core->callBehavior('publicFooterContent',$core,$_ctx);} ?>


