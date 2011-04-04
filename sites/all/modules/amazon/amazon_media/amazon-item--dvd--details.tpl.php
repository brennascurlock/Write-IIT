<?php
// $Id: amazon-item--dvd--details.tpl.php,v 1.3 2011/02/06 22:19:12 pancho Exp $

/**
 * @file
 * Theme the 'amazon-item' 'dvd' 'details' style.
 * Many, many available variables. See template_preprocess_amazon_item().
 * Everything that gets put into $variables there is available.
 */
?>
<div class="<?php print $classes; ?>">
<?php if (!empty($smallimage)) { print $smallimage; } ?>
<div><strong><?php print l($title, $detailpageurl, array('html' => TRUE, 'attributes' => array('rel' => 'nofollow'))); ?></strong> (<?php print $theatricalreleaseyear; ?>)</div>
<div><strong><?php print t('Director'); ?>:</strong> <?php print $director; ?></div>
<div><strong><?php print t('Starring'); ?>:</strong> <?php print $actor; ?></div>
<div><strong><?php print t('Rating'); ?>:</strong> <?php print $audiencerating; ?></div>
</div>
