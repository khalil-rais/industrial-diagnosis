<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
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

?>

<div id="page">

  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">		  
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php
			/*$host_array= explode ('.',$_SERVER['HTTP_HOST']);
			if (array_key_exists ( $host_array[0] , $cabinets )){
				$site_name=$cabinets[$host_array[0]];
			}
			else{
				$site_name="Cabinet Comptable ".$host_array[0];
			}*/
			print $site_name; ?></span></a>
          </h1>
		  <h1 id="site-name2">Membre de l’Ordre des Experts Comptables de Tunisie</h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
			<?php if ($site_slogan=="Votre Efficacité, Notre Mission."): ?>
				<div class="header__site-slogan" id="site-slogan">Votre Efficacité, <span class="ahmar">Notre Mission.</span></div>
			<?php else: ?>
				<div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
			<?php endif; ?>	
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>
     <div id="navigation">
	  <?php print render($page['slideshow']); ?>
      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      

    </div>
  <div id="main">
      <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        
      </aside>
    <?php endif; ?>
    <div id="content" class="column" role="main">
      
     <!-- <?php print $breadcrumb; ?>-->
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

  

  

  </div>
  
  <?php print render($page['footer_advertise']); ?>
  <?php print render($page['footer']); ?>

</div>


