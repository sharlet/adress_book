<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function les1_preprocess_node(&$vars) {
 $vars['bla'] = 'bla';
 if (isset($vars['main_menu'])) {
    $vars['primary_nav'] = theme('links__system_main_menu', array(
      'links' => $vars['main_menu'],
      'attributes' => array(
        'class' => array('main-menu')
      )
    ));
    //dsm(array('links' => $vars['main_menu'],'attributes' => array('class' => array('main-menu'))), 'main_menu_array');
  }
  else {
    $vars['primary_nav'] = FALSE;
  }
}

function les1_preprocess_page(&$vars) {
  $vars['page_var'] = 'asdsadsa';
}
function les1_links1__system_main_menu($variables) {
  $output = 'zxczxczxczxc';
  return $output;
  }


