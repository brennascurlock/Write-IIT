<?php
// $Id: amazon-item--large.tpl.php,v 1.3 2011/02/06 22:19:12 pancho Exp $

/**
 * @file
 * Theme the 'amazon-item' 'large' image style.
 * Many, many available variables. See template_preprocess_amazon_item().
 * Everything that gets put into $variables there is available.
 */
?>
<div class="<?php print $classes; ?>">
<?php if (!empty($invalid_asin)) { print "<div class='invalid_asin'>This item is no longer valid on Amazon.</div>"; } ?>
<?php if (!empty($largeimage)) { print $largeimage; } ?>
</div>
