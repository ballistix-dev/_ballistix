<?php
/**
* Header Template
*
* @package _ballistix
*/ ?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <meta name="viewport" content="width=device-width" />

    <title><?php wp_title( ' | ', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>

<body <?php body_class('_ballistix'); ?>>

    <!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

  <div id="site-wrap" class="hfeed">

      <header id="site-header" role="banner">

        <div class="container-full">

          <?php if (is_active_sidebar('widget-header')): ?>

              <aside id="widget-header" role="complementary">

                <?php dynamic_sidebar('widget-header'); ?>

              </aside>

          <?php endif; ?>

        </div>

      </header>

      <main id="site-content">

        <div class="container">
