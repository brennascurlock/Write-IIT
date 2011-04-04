<?php
// $Id: amazon-detail.tpl.php,v 1.2 2011/02/06 22:19:12 pancho Exp $

/**
 * @file
 * Outputs a single piece of data as provided in $$detail.
 *
 * This is used primarily for amazon_filter, where any arbitrary piece of data
 * from the $item can be accessed.
 */
if (!empty($detail) && !empty($$detail)) {
  print $$detail;
} else {
  print t('%detail not found for %asin', array('%detail' => $detail, '%asin' => $asin));
}
?>