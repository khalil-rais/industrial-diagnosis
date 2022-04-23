<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  theme_fm_preprocess_html($variables, $hook);
  theme_fm_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function// */


function theme_fm_preprocess_page(&$variables, $hook) {
$cabinets = array (
"2b"  =>"Cabinet 2B Audit & Consulting",
"2as"  =>"Accounting & Auditing Services",
"2ca"  =>"Consulting Auditor Chartered Accountant",
"aba"  =>"Audit & Business Advisory",
"acm"  =>"Audit Consulting Management",
"aec"  =>"Audit Etudes & Conseil",
"arc"  =>"Audit Revision Conseil",
"atcf"  =>"Cabinet A.T.C.F",
"aaa"  =>"Audit Accounting & Assistance",
"abs"  =>"Audit & Business Services",
"access"  =>"Cabinet Access Audit",
"atec"  =>"Associés Tunisiens Experts Comptables",
"ace"  =>"Cabinet A.C.E Consulting",
"asma"  =>"Audit Système Management Assistance",
"ab-consulting"  =>"Cabinet AB Consulting",
"douiri"  =>"Cabinet Douiri & Associés",
"abm-consulting"  =>"ABM Consulting",
"accounting-advisors"  =>"Accounting Advisors Tunisia",
"acfa"  =>"Accounting Consulting and Financial Auditing",
"aci"  =>"Audit et Conseil International",
"acor"  =>"Audit Conseil & Organisation",
"act"  =>"Audit Consulting Training",
"avc"  =>"Add Value Consulting",
"afec"  =>"Afec Expertise Internationale",
"aftex"  =>"Cabinet Aftex",
"audit-expertise"  =>"Cabinet Audit et Expertise",
"audit-is"  =>"Audit Information Systems",
"audit-mgt-finance"  =>"Audit Management Finance",
"audit-risk-consulting"  =>"Audit Risk Consulting",
"agha-cgnie"  =>"Cabinet Agha & Associés",
"alliance-expertise-conseil"  =>"Alliance Expertise et Conseil",
"audit-mgt-skills"  =>"Audit & Management Skills",
"audit-mgt-consulting"  =>"Audit Management Consulting Company",
"amg"  =>"Audit Management Group",
"audit-tax-consulting"  =>"Audit Tax & Consulting",
"atm-consulting"  =>"Cabinet ATM Consulting",
"audimap"  =>"Cabinet Audimap",
"audit-mgt-partners"  =>"Audit & Management Partners",
"auditecs"  =>"Cabinet Auditecs",
"audit-advisory-accounting"  =>"Auditing Advisory Assistance & Accounting",
"aumac" =>"Audit Management et Conseil",
"auro-conseil" =>"Cabinet Auro Conseil",
"ayadi-associes" =>"Cabinet Ayadi Taoufik & Associés",
"bb-auditing-consulting" =>"Cabinet B&B Auditing & Consulting",
"bat-consulting" =>"Cabinet BAT Consulting",
"benamor-ktari-associes" =>"Cabinet Ben Amor Ktari & Associés",
"bmd-consulting" =>"Cabinet BMD Consulting",
"bmac" =>"Business Management Auditing and Consulting",
"cabinet-audit-consultants" =>"Cabinet d'Audit et de Consultants",
"cec" =>"Cabinet d'Expertise Comptable",
"marouani-compagnies" =>"Cabinet Lassaad Marouani & Compagnies",
"cam" =>"Cabinet Cam et Associés",
"capif" =>"Cabinet Capif",
"cecaf" =>"Cabinet Cecaf",
"cegaudit" =>"Cabinet Cegaudit",
"cem" =>"Cabinet CEM International",
"cma" =>"Consulting Management Audit",
"cmc" =>"Commissariat Management Conseil",
"cmg" =>"Consulting Members Group",
"cmk" =>"Audits et Conseils et Evaluations",
"cmr-audit" =>"Conseil Management Révision & Audit",
"cok" =>"Cabinet Audit & Consulting",
"conseil-audit-commissariat" =>"Conseil Audit et Commissariat",
"c2a" =>"Consulting Accounting Audit",
"consulting-management" =>"Consulting Management & Governance",
"crg-audit" =>"Cabinet RG audit",
"ctr" =>"Compagnie Tunisienne de Révision",
"ecr" =>"Les Experts Comptables Réunis",
"ececa" =>"Experts Comptables et Consultants Associés",
"elf" =>"Cabinet ELF Conseils",
"elit" =>"Cabinet ELIT Audit",
"errached" =>"Cabinet Errached Auditing",
"everest" =>"Everest Audit & Consulting",
"exa" =>"Experts Auditors & Consultants",
"experts-conseils" =>"Cabinet Experts Conseils",
"faagec" =>"Fiduciaire Audit et Conseil",
"fidu" =>"Fidu Conseil Audit",
"fiduciaire-med" =>"Cabinet Fiduciaire Méditerranéenne",
"finaco" =>"Financial Auditing Company",
"finexi" =>"Cabinet Finexi",
"finor" =>"Cabinet Finor"
);
  //$variables['sample_variable'] = t('Lorem ipsum.');
   $secondary_links = variable_get('menu_secondary_links_source', 'user-menu');
  if (drupal_is_front_page()) { $variables['title']=""; }
  /*function YOUR_THEME_preprocess_page(&$vars){
  $path = $_GET['q'];

  if (strpos($path,'YOUR_PATH_STRING') !== false) {
    
  }
}*/
	/*$host_array= explode ('.',$_SERVER['HTTP_HOST']);
	if (array_key_exists ( $host_array[0] , $cabinets )){
		drupal_set_title($cabinets[$host_array[0]]);
	}*/
 }


/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // theme_fm_preprocess_node_page() or theme_fm_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function theme_fm_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
