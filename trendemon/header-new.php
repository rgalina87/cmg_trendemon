<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package trendemon
    */
   
   ?>
<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="profile" href="https://gmpg.org/xfn/11" />
      <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assetsnew/images/icon.png">
      <!-- <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/bootstrap.min.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/slick.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/animate.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/mroph_dropdown_style.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/fonts.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/all.min.css" rel="stylesheet">
         <link href="<?php// echo get_template_directory_uri(); ?>/assetsnew/css/custom.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/responsive.css" rel="stylesheet">
         <link href="<?php //echo get_template_directory_uri(); ?>/assetsnew/css/developer.css" rel="stylesheet"> -->
      <?php wp_head(); ?>
   </head>
   <body>
      <?php wp_body_open(); ?>
      <!-- Overlay -->
      <!-- <div class="overlay"></div> -->
      <!-- Overlay -->
      <!-- loader-->
      <!-- <div id="preloader"> 
         <div id="status">
             <span>
                 <img src="images/trd_loader.gif" alt="" id="spin">
             </span>
         </div>
         </div> -->
      <!--end loader -->
      <!--start-header-secion -->
      <header class="header_outer cd-morph-dropdown top_header">
         <nav class="navbar navbar-expand-lg">
            <div class="container">
               <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
               <img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/logo.svg" alt="">
               </a>
               <?php 
wp_nav_menu( array(        
'theme_location' => 'hmenu', 
'container_class' => 'collapse navbar-collapse' ,
'container_id' => 'navHeader',
'add_li_class'  => 'nav-item',
// 'add_a_class'     => 'nav-link', 
'menu_class' => 'navbar-nav ml-auto align-items-center',
'walker' => new MY_Menu_Walker
                                         )); 
                                             ?>
               <!--           <div class="collapse navbar-collapse" id="navHeader">
                  <ul class="navbar-nav ml-auto align-items-center">                        
                      <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Solution</a>
                      </li>
                      <li class="nav-item has-dropdown" data-content="nav2">
                          <a class="nav-link" href="javascript:void(0);">Case Studies</a>
                      </li>
                      <li class="nav-item has-dropdown" data-content="nav3">
                          <a class="nav-link" href="resoures.html">Resources</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Company</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="javascript:void(0);">Customer Login</a>
                      </li>
                  </ul>
                  </div> -->
               <div class="reqest_btn">
                  <a class="basic_btn" href="javascript:void(0);" data-toggle="modal" data-target="#demo_modal">REQUEST DEMO</a>
               </div>
               <div class="header_bottom">
                  <div class="menupageTrigger">
                     <a class="menuTrigger" href="javascript:void(0)">
                     <span></span>
                     <span></span>
                     <span></span>
                     </a>
                  </div>
                  <div class="hdr_btnMenu">
                     <div class="close_icon">
                        <a href="javsascript:void(0)" class="menuTrigger">
                        <img src="<?php echo get_template_directory_uri(); ?>/assetsnew/images/close.png" alt="">
                        </a>
                     </div>
                     <?php 
wp_nav_menu( array(        
'theme_location' => 'hmenu', 
'container_class' => 'menu-header-menu-container' , 
'add_li_class'  => 'menu-item',
'menu_class' => 'menu')); 
?>
                     <!--   <div class="menu-header-menu-container">
                        <ul class="menu">                                        
                            <li class="menu-item">
                                <a href="javascript:void(0);">Solution</a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);">Case Studies</a>
                                <div class="dropdown_list">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">B2B & ABM</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Brands & Agencies</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="resoures.html">Resources</a>
                                <div class="dropdown_list">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Whitepapers & Webinars</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);">Company</a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);">Customer Login</a>
                            </li>
                        </ul>
                        </div> -->
                  </div>
               </div>
            </div>
         </nav>
        <!--  <div class="morph-dropdown-wrapper"> -->
          <!--   <div class="dropdown-list">
               <ul>
                  <li id="nav2" class="dropdown links">
                      <a href="javascript:void(0);" class="label">About</a>
                     <div class="dropdown_list content">
                        <ul>
                           <li>
                              <a href="javascript:void(0);">B2B & ABM</a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">Brands & Agencies</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li id="nav3" class="dropdown links">
                     <a href="#0" class="label">Pricing</a>
                     <div class="dropdown_list content">
                        <ul>
                           <li>
                              <a href="javascript:void(0);">Blog</a>
                           </li>
                           <li>
                              <a href="javascript:void(0);">Whitepapers & Webinars</a>
                           </li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div> -->
          
        <!--  </div> -->
         <!-- morph-dropdown-wrapper -->
      </header>
      <!--end-header-secion -->