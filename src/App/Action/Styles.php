<?php
/**
 * Created by PhpStorm.
 * User: Brock H. Caldwell
 * Date: 8/15/2017
 * Time: 2:05 PM
 */

namespace App\Action;


$nav_bar = '
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" class="rd-navbar">
            <div class="shell shell-fluid">
              <div class="rd-navbar-inner">
                <div class="rd-navbar-nav-wrap-outer">
                  <div class="rd-navbar-aside">
                    <div class="rd-navbar-aside-content">
                      <!-- RD Navbar Panel-->
                      <div class="rd-navbar-panel rd-navbar-aside-left">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <!-- RD Navbar Brand--><a href="/" class="rd-navbar-brand brand">
                          <div class="brand-logo"><img src="images/brand-232x49.jpg" alt="" width="232" height="49"/>
                          </div></a>
                      </div>
                      <div class="rd-navbar-aside-right">
                        <!-- RD Navbar Aside-->
                        <ul class="list-links list-inline text-left">
                          <li>
                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                              <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-map-marker text-middle"></span></div>
                              <div class="unit-body">
                                <address class="contact-info"><a href="#" class="link-default link-xs"> {{ address }} <br class="visible-md visible-lg"> {{ state }}</a></address>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                              <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span></div>
                              <div class="unit-body">
                                <address class="contact-info"><a href="callto:#" class="link-default link-xs">1-800-1234-567</a><span class="reveal-block text-base link-xs">Mon – Sat: 9:00–18:00</span></address>
                              </div>
                            </div>
                          </li>
                          <li>
                            <ul class="list-inline list-inline-sm">
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Shop-->
                  <div class="rd-navbar-shop"><a href="shop-cart.html" class="link link-shop link-default"><span class="big text-gray-light">Cart</span><span class="icon icon-sm mdi mdi-cart-outline"></span><span class="label-inline big text-white">2</span></a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="/">Home</a>
                    </li>
                    <li><a href="/about">About Us</a>
                    </li>
                    <li><a href="#">Menu</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="/location?location=bartonville#menu">Bartonville</a>
                        </li>
                        <li><a href="/location?location=bloomington-main#menu">Bloomington - Main St.</a>
                        </li>
                        <li><a href="/location?location=bloomington-vernon#menu">Bloomington - Vernon</a>
                        </li>
                        <li><a href="/location?location=chillicothe#menu">Chillicothe</a>
                        </li>
                        <li><a href="/location?location=creve-couer#menu">Creve Couer</a>
                        </li>
                        <li><a href="/location?location=galesburg#menu">Galesburg</a>
                        </li>
                        <li><a href="/location?location=kewanee#menu">Kewanee</a>
                        </li>
                        <li><a href="/location?location=morton#menu">Morton</a>
                        </li>
                        <li><a href="/location?location=peoria#menu">Peoria</a>
                        </li>
                        <li><a href="/location?location=pekin#menu">Pekin</a>
                        </li>
                        <li><a href="/location?location=quincy#menu">Quincy</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="/locations.html">Locations</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="/location?location=bartonville">Bartonville</a>
                        </li>
                        <li><a href="/location?location=bloomington-main">Bloomington - Main St.</a>
                        </li>
                        <li><a href="/location?location=bloomington-vernon">Bloomington - Vernon</a>
                        </li>
                        <li><a href="/location?location=chillicothe">Chillicothe</a>
                        </li>
                        <li><a href="/location?location=creve-couer">Creve Couer</a>
                        </li>
                        <li><a href="/location?location=galesburg">Galesburg</a>
                        </li>
                        <li><a href="/location?location=kewanee">Kewanee</a>
                        </li>
                        <li><a href="/location?location=morton">Morton</a>
                        </li>
                        <li><a href="/location?location=peoria">Peoria</a>
                        </li>
                        <li><a href="/location?location=pekin">Pekin</a>
                        </li>
                        <li><a href="/location?location=quincy">Quincy</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                  </ul>
                  <div class="rd-navbar-aside-right">
                    <ul class="list-links list-inline text-left">
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body">
                            <address class="contact-info"><a href="#" class="link-default link-xs">{{ address }} <br class="visible-md visible-lg"> {{ state }}</a></address>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body">
                            <address class="contact-info"><a href="callto:#" class="link-default link-xs">1-800-1234-567</a><span class="reveal-block text-base link-xs">Mon – Sat: 9:00–18:00</span></address>
                          </div>
                        </div>
                      </li>
                      <li>
                        <ul class="list-inline list-inline-sm">
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
';

/** Custom CSS below */

$locations_css_top = '
<!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-default">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="100px" data-lg-stick-up-offset="150px" class="rd-navbar">
            <div class="shell shell-fluid">
              <div class="rd-navbar-inner">
                <div class="rd-navbar-nav-wrap-outer">
                  <div class="rd-navbar-aside">
                    <div class="rd-navbar-aside-content">
                      <!-- RD Navbar Panel-->
                      <div class="rd-navbar-panel rd-navbar-aside-left">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <!-- RD Navbar Brand--><a href="/" class="rd-navbar-brand brand">
                          <div class="brand-logo"><img src="images/brand-232x49.jpg" alt="" width="232" height="49"/>
                          </div></a>
                      </div>
                      <div class="rd-navbar-aside-right">
                        <!-- RD Navbar Aside-->
                        <ul class="list-links list-inline text-left">';
$locations_css_bottom = '                          
                          <li>
                            <ul class="list-inline list-inline-sm">
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                              <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- RD Navbar Nav-->
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Shop-->
                  <div class="rd-navbar-shop"><a href="shop-cart.html" class="link link-shop link-default"><span class="big text-gray-light">Cart</span><span class="icon icon-sm mdi mdi-cart-outline"></span><span class="label-inline big text-white">2</span></a></div>
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="active"><a href="/">Home</a>
                    </li>
                    <li><a href="/about">About Us</a>
                    </li>
                    <li><a href="#">Menu</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="/location?location=bartonville#menu">Bartonville</a>
                        </li>
                        <li><a href="/location?location=bloomington-main#menu">Bloomington - Main St.</a>
                        </li>
                        <li><a href="/location?location=bloomington-vernon#menu">Bloomington - Vernon</a>
                        </li>
                        <li><a href="/location?location=chillicothe#menu">Chillicothe</a>
                        </li>
                        <li><a href="/location?location=creve-couer#menu">Creve Couer</a>
                        </li>
                        <li><a href="/location?location=galesburg#menu">Galesburg</a>
                        </li>
                        <li><a href="/location?location=kewanee#menu">Kewanee</a>
                        </li>
                        <li><a href="/location?location=morton#menu">Morton</a>
                        </li>
                        <li><a href="/location?location=peoria#menu">Peoria</a>
                        </li>
                        <li><a href="/location?location=pekin#menu">Pekin</a>
                        </li>
                        <li><a href="/location?location=quincy#menu">Quincy</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="/locations.html">Locations</a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="/location?location=bartonville">Bartonville</a>
                        </li>
                        <li><a href="/location?location=bloomington-main">Bloomington - Main St.</a>
                        </li>
                        <li><a href="/location?location=bloomington-vernon">Bloomington - Vernon</a>
                        </li>
                        <li><a href="/location?location=chillicothe">Chillicothe</a>
                        </li>
                        <li><a href="/location?location=creve-couer">Creve Couer</a>
                        </li>
                        <li><a href="/location?location=galesburg">Galesburg</a>
                        </li>
                        <li><a href="/location?location=kewanee">Kewanee</a>
                        </li>
                        <li><a href="/location?location=morton">Morton</a>
                        </li>
                        <li><a href="/location?location=peoria">Peoria</a>
                        </li>
                        <li><a href="/location?location=pekin">Pekin</a>
                        </li>
                        <li><a href="/location?location=quincy">Quincy</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contacts.html">Employment</a>
                    </li>
                  </ul>
                  <div class="rd-navbar-aside-right">
                    <ul class="list-links list-inline text-left">
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body">
                            <address class="contact-info"><a href="#" class="link-default link-xs">{{ address }} <br class="visible-md visible-lg"> {{ state }}</a></address>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon icon-circle icon-gray-dark icon-xxs mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body">
                            <address class="contact-info"><a href="callto:#" class="link-default link-xs">1-800-1234-567</a><span class="reveal-block text-base link-xs">Mon – Sat: 9:00–18:00</span></address>
                          </div>
                        </div>
                      </li>
                      <li>
                        <ul class="list-inline list-inline-sm">
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-instagram"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-facebook"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-twitter"></span></a></li>
                          <li><a href="#" class="link-silver-light"><span class="icon icon-sm-mod-1 fa fa-google-plus"></span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
';

$custom_css = '
      <style type="text/css">  body {
    background: #2b2c2f !important;
    color: whitesmoke !important;
  }

  body {
    background: #2b2c2f !important;
    color: whitesmoke !important;
  }

  p {
    color: white;
  !important;
  }

  h3 {
    color: white;
  !important;
  }

  h6 {
    color: white;
  !important;
  }

  q {
    color: white;
  !important;
  }</style>
';