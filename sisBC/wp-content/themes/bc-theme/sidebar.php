<?php
/*
 * Verifica se o usuario esta logado e possui acesso a pagina
 */
require_once ('libs/check_security.php');

// Configuracoes base do template
global $template_name;
global $bc_global_vars;

?>
<!-- BEGIN SIDEBAR -->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets//img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets//img/logo_white.png" alt="logo" class="brand" data-src="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/img/logo_white.png" data-src-retina="<?php echo $bc_global_vars ['stylesheet_uri'];?>/assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30">
            <a href="<?php echo concilia_getPagesUrl('tpl-dashboard.php');?>" class="detailed">
              <span class="title">Inicio</span>
            </a>
            <span class="icon-thumbnail"><i class="pg-home"></i></span>
          </li>
          <li class="">
            <a href="<?php echo concilia_getPagesUrl('tpl-linhadotempo.php');?>">
              <span class="title">Linha do Tempo</span>
            </a>
            <span class="icon-thumbnail ">Lt</span>
          </li>
          <li class="">
            <a href="javascript:;">
              <span class="title">Transa&ccedil;&otilde;es</span>
              <span class=" arrow"></span>
            </a>
            <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="<?php echo concilia_getPagesUrl('tpl-transacoes-boleto.php');?>">Transa&ccedil;&otilde;es Boleto</a>
                <span class="icon-thumbnail"><i class="fa fa-file-text-o"></i></span>
              </li>
              <li class="">
                <a href="<?php echo concilia_getPagesUrl('tpl-transacoes-cartao.php');?>">Transa&ccedil;&otilde;es Cart&atilde;o</a>
                <span class="icon-thumbnail "><i class="pg-credit_card"></i></span>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="<?php echo concilia_getPagesUrl('tpl-calendario.php');?>">
              <span class="title">Calendário</span>
              <span class="details"></span>
            </a>
            <span class="icon-thumbnail "><i class="pg-calender"></i></span>
          </li>
          <li class="">
            <a href="<?php echo concilia_getPagesUrl('tpl-sobre.php');?>">
              <span class="title">Sobre</span>
              <span class="details"></span>
            </a>
            <span class="icon-thumbnail "><i class="pg-social"></i></span>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
<!-- END SIDEBAR -->