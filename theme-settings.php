<?php
/**
 * @file
 * Theme settings file for Basis.
 *
 * Although Basis itself does not provide any settings, we use this file to
 * inform the user that the module supports color schemes if the Color module
 * is enabled.
 */  

if (module_exists('color')) {

  // Buttons
  $form['set_buttons'] = array(
    '#type' => 'fieldset',
    '#title' => t('Buttons'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'buttonbg',
    'buttonlinks',
  );
  foreach ($fields as $field) {
    $form['set_buttons'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }

  // Color Set One
  $form['set_one'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header and Footer'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'set1bg',
    'set1text',
    'set1links',
  );
  foreach ($fields as $field) {
    $form['set_one'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }

  // Color Primary Navigation
  $form['set_navbar'] = array(
    '#type' => 'fieldset',
    '#title' => t('Navbar'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'navbarbg',
    'navbarlinks',
  );
  foreach ($fields as $field) {
    $form['set_navbar'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }

  // Color Set Two
  $form['set_two'] = array(
    '#type' => 'fieldset',
    '#title' => t('Hero Blocks without Images'),
    '#collapsible' => TRUE,
  );
  $fields = array(
    'set2bg',
    'set2text',
    'set2links',
  );
  foreach ($fields as $field) {
    $form['set_two'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }

  // Color Set Three
  $form['set_three'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocks - Set 1'),
    '#collapsible' => TRUE,
    '#description' => 'Blocks 2,5,8,... of content region.',
  );
  $fields = array(
    'set3bg',
    'set3text',
    'set3links',
  );
  foreach ($fields as $field) {
    $form['set_three'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }

  // Color Set Four
  $form['set_four'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocks - Set 2'),
    '#collapsible' => TRUE,
    '#description' => 'Blocks 3,6,9,... of content region.',
  );
  $fields = array(
    'set4bg',
    'set4text',
    'set4links',
  );
  foreach ($fields as $field) {
    $form['set_four'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }
   // Color Set Five
  $form['set_five'] = array(
    '#type' => 'fieldset',
    '#title' => t('Blocks - Set 3'),
    '#collapsible' => TRUE,
    '#description' => 'Blocks 4,7,10,... of content region.',
  );
  $fields = array(
    'set5bg',
    'set5text',
    'set5links',
  );
  foreach ($fields as $field) {
    $form['set_five'][$field] = color_get_color_element($form['theme']['#value'], $field, $form);
  }
}
else {
  $form['color'] = array(
    '#markup' => '<p>' . t('This theme supports custom color palettes if the Color module is enabled on the <a href="!url">modules page</a>. Enable the Color module to customize this theme.', array('!url' => url('admin/modules'))) . '</p>',
  );
}


function opera_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
  $form['bootstrap'] = array(
    '#type' => 'fieldset',
    '#title' => t('Bootstrap Settings'),
    '#collapsible' => TRUE,
  );
  $form['bootstrap']['use_bootstrap'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Use Bootstrap'),
    '#default_value' => theme_get_setting('use_bootstrap', 'opera'),
  );
  $form['bootstrap']['opera_cdn'] = array(
    '#type' => 'select',
    '#title' => t('BootstrapCDN version'),
    '#options' => backdrop_map_assoc(array(
      '5.0.1',
      '3.3.5',
      '3.3.6',
      '3.3.7',
      '3.4.0',
      '3.4.1',
    )),
    '#states' => array(
      'visible' => array(
        ':input[name="use_bootstrap"]' => array('checked' => TRUE),
      ),
    ),
    '#default_value' => theme_get_setting('opera_cdn', 'opera'),
  );
}