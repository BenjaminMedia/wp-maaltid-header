<?php

class maaltidHeader
{
    function __construct(){

    }

    function navigationHtml(){
        $navigation =

        '<div class="navbar navbar-default main-nav scroll-active">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 nav-left">
                        <i id="menu-trigger" class="icon icon-menu"></i>
                    </div>
                    <div class="col-xs-4 nav-logo">
                        <a href="/"><i class="icon icon-meal-logo-text"></i></a>
                    </div>
                    <div class="col-xs-4 nav-right">
                        
                    </div>
                </div>
            </div>
        </div>
        <div id="maaltid-menu" class="modal-wrapper sticky-search container full-height">

            <div class="row">
                <div class="overlay-sticky-header col-sm-4 bg-secondary-darker">
                    <div class="row">
                        <button class="cancel btn btn-primary right" type="button">
                            <i class="icon icon-cross font-160-p"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row full-height">
                <div class="overlay-content bg-secondary-darker col-sm-4">
                    <div class="row text-center">

                        <a href="//maaltid.nu"><h4 class="text-yellow"><strong>Måltid</strong></h4></a>
                        <div class="col-xs-10 col-xs-offset-1">
                            <p>Måltid er dit nye madunivers, som er 100 procent gratis at bruge. Du får adgang til hundredevis af lækre opskrifter fra Bo Bedre, I Form, LIV og vores mange dygtige madskribenter, som kan tilpasses lige præcis de ingredienser, DU har liggende i køleskabet.</p>
                        </div>
                        <div class="col-xs-12">
                            <ul class="burger-menu">
                                <li><a href="//maaltid.nu">Forside</a></li>
                                <li><a href="//maaltid.nu/temaer">Temaer</a></li>
                                <li><a href="//maaltid.nu/forretter-nemme-og-laekre">Forret</a></li>
                                <li><a href="//maaltid.nu/hovedretter-laekre-og-nemme">Hovedret</a></li>
                                <li><a href="//maaltid.nu/desserter-nemme-og-laekre">Dessert</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        
        echo  $navigation;
    }


    function navigation_style()
    {
        wp_enqueue_style('maaltid-header', plugin_dir_url(__FILE__) . 'style.css', array(), 1.0, 'all');
        wp_enqueue_script('maaltid-header-script', plugin_dir_url(__FILE__) . 'js/menu.js', array('jquery'), 1.0, 'all');
    }

    function run()
    {
        add_action('wp_enqueue_scripts', array($this, 'navigation_style'));

        add_action('wp_head', array($this,'navigationHtml'), 10);
    }
}
