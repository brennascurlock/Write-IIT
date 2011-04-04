<?php
// $Id: views_handler_field_amazon_participant.inc,v 1.5 2010/11/28 15:49:41 rfay Exp $

class views_handler_field_amazon_participant extends views_handler_field_prerender_list {
  function construct() {
    parent::construct();
    $this->additional_fields['asin'] = array('table' => 'amazon_item', 'field' => 'asin');
  }

  /**
   * Provide meaningful defaults
   */
  function options(&$options) {
    parent::options($options);
    $options['participant_type'] = '**ALL**';
  }

  /**
   * Provide "link to term" option.
   */
  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['participant_type'] = array(
      '#type' => 'select',
      '#title' => t('Participant restriction'),
      '#options' => array(
        '**ALL**' => t('Show all participants'),
        'author' => t('Author'),
        'artist' => t('Artist'),
        'actor' => t('Actor'),
        'director' => t('Director'),
        'creator' => t('Creator'),
      ),
      '#default_value' => $this->options['participant_type'],
    );
  }

  function query() {
    $this->add_additional_fields();
  }

  function pre_render($values) {
    $this->field_alias = $this->aliases['asin'];
    $this->items = array();

    $asins = array();
    foreach ($values as $result) {
      if (!empty($result->{$this->aliases['asin']})) {
        $asins[] = $result->{$this->aliases['asin']};
      }
    }

    $query = db_select('amazon_item_participant', 'aip')
      ->condition('asin', $asins, 'IN');

    if ($this->options['participant_type'] != '**ALL**') {
      $query = $query->condition('type', $this->options['participant_type']);
    }
    $query->fields('aip', array('participant', 'asin'));

    $results = $query->execute();

    while ($record = $results->fetchAssoc()) {
      $this->items[$record['asin']][] = check_plain($record['participant']);
    }
  }
}
