<?php
// $Id: amazon-item--games--details.tpl.php,v 1.3 2011/02/06 22:19:12 pancho Exp $

/**
 * @file
 * Theme the 'amazon-item' 'games' 'details' style.
 * Many, many available variables. See template_preprocess_amazon_item().
 * Everything that gets put into $variables there is available.
 */
?>
<div class="<?php print $classes; ?>">
<?php if (!empty($smallimage)) { print $smallimage; } ?>
<div><strong><?php print l($title, $detailpageurl, array('html' => TRUE, 'attributes' => array('rel' => 'nofollow'))); ?></strong> (<?php print $hardwareplatform; ?>)</div>
<div><strong><?php print t('Genre'); ?>:</strong> <?php print $genre; ?></div>
<div><strong><?php print t('Age rating'); ?>:</strong> <?php print $esrbagerating; ?></div>
<div><strong><?php print t('Price'); ?>:</strong> <?php print $listpriceformattedprice; ?></div>
</div>
