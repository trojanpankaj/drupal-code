<?php

function my_module_menu() {
    $items = array();
    $items['my_module/form'] = array(
        'title' => t('My form'),
        'page callback' => 'drupal_get_form',
        'page arguments' => array('my_module_my_form'),
        'access arguments' => array('access content'),
        'description' => t('My form'),
        'type' => MENU_CALLBACK,
    );
    return $items;
}

function my_module_my_form($form, &$form_state){

	// To make the fieldset collapsible
  $form['name'] = array(
      '#type' => 'fieldset',
      '#title' => t('Name'),
      '#collapsible' => TRUE, // Added
      '#collapsed' => FALSE,  // Added
  );

  // To make these fields required
  $form['name']['first'] = array(
      '#type' => 'textfield',
      '#title' => t('First name'),
      '#required' => TRUE, // Added
  );
  $form['name']['last'] = array(
      '#type' => 'textfield',
      '#title' => t('Last name'),
      '#required' => TRUE, // Added
  );


  $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Submit',
  );
  return $form;
}
?>
