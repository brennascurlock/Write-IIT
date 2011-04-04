<?php
// $Id: views_handler_field_amazon_xss.inc,v 1.2 2011/02/06 22:19:12 pancho Exp $

/**
 * @defgroup views_field_handlers Views' field handlers
 * @{
 * Handlers to tell Views how to build and display fields.
 *
 */

/**
 * A handler to run a field through simple XSS filtering
 */
class views_handler_field_amazon_xss extends views_handler_field {
  function render($values) {
    $value = $values->{$this->field_alias};
    return filter_xss_admin($value);
  }
}

/**
 * @}
 */
