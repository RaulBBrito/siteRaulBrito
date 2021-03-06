<?php
# -- BEGIN LICENSE BLOCK ---------------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2013 Olivier Meunier & Association Dotclear
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK -----------------------------------------
if (!defined('DC_RC_PATH')) { return; }

# Add more translations
l10n::set(dirname(__FILE__).'/locales/'.$_lang.'/public');

# Add new class
$core->addBehavior('publicHeadContent',array('addClassPublic','publicHeadContent'));

class addClassPublic
{
	public static function publicHeadContent($core)
	{
		echo
		
		'<script type="text/javascript">'."\n".
		"//<![CDATA[\n".
		'$(document).ready(function(){'."\n".
		"\t".'$(".post img").addClass("img-responsive");'."\n".
		'});'."\n".
		"//]]>\n".
		"</script>\n";
	}
}

# Add new pagination
$core->tpl->addValue('PaginationLinks', array('tplMyPagination', 'PaginationLinks'));
class tplMyPagination {
	public static function PaginationLinks($attr)
	{
		$p = '<?php
		
		function makePageLink($pageNumber, $linkText) {
			if (isset($GLOBALS["_page_number"])) {
				$current = $GLOBALS["_page_number"];
			} else {
				$current = 1;
			}
			if ($pageNumber != $current) {
				$args = $_SERVER["URL_REQUEST_PART"];
				$args = preg_replace("#(^|/)page/([0-9]+)$#","",$args);
				$url = $GLOBALS["core"]->blog->url.$args;
				if ($pageNumber > 1) {
					$url = preg_replace("#/$#","",$url);
					$url .= "/page/".$pageNumber;
				}
				if (!empty($_GET["q"])) {
					$s = strpos($url,"?") !== false ? "&amp;" : "?";
					$url .= $s."q=".$_GET["q"];
				}
				$linkDesc = "Page &nbsp;".$linkText;
				return "<li><a href=\"".$url."\" title=\"".$linkDesc."\">".$linkText."</a></li>";
			} else {
				return "<li class=\"active\"><a>".$linkText."</a></li>";
			}
		}
		
		if (isset($GLOBALS["_page_number"])) {
			$current = $GLOBALS["_page_number"];
		} else {
			$current = 1;
		}
		if ($_ctx->exists("pagination")) {
			$nb_posts = $_ctx->pagination->f(0);
		}
		
		/* Variables to tweak the pagination system */
		$nb_per_page = $_ctx->post_params["limit"][1];
		$nb_pages = ceil($nb_posts/$nb_per_page);
		$nb_sequence = 2 * 3 + 1;
		
		?>';
		
		if (!isset($attr['max'])) { $p .= '<?php $nb_page_max = 0; ?>'; } else { $p .= '<?php $nb_page_max = '.$attr['max'].'; ?>'; }
		$p .= '<?php
		
		if ($nb_page_max == 0 || $nb_pages <= $nb_page_max) {
			for ($i = 1; $i <= $nb_pages; $i++) {
				echo makePageLink($i,$i);
			}
		} else {
			echo makePageLink(1,1);
			$min_page = max($current - ($nb_sequence - 1) / 2, 2);
			$max_page = min($current + ($nb_sequence - 1) / 2, $nb_pages - 1);
			if ($min_page > 2) { echo "<li class=\"disabled\"><a>...</a></li>"; }
			for ($i = $min_page; $i <= $max_page ; $i++) {
				echo makePageLink($i,$i);
			}
			if ($max_page < $nb_pages - 1) { echo "<li class=\"disabled\"><a>...</a></li>"; }
			echo makePageLink($nb_pages,$nb_pages);
		}
		
		?>';
		
		return $p;
	}
}
?>