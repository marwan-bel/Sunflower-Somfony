<?php

/* login.html.twig */
class __TwigTemplate_4b8c231fc6d0dd1946ae4e6fdf4c47fc6ce4867e377fe21b7823dfd0f6b650fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        echo "<!doctype html>
<!--[if IE 9]> <html class=\"ie9 no-js supports-no-cookies\" lang=\"en\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=\"no-js supports-no-cookies\" lang=\"en\"> <!--<![endif]-->


<!-- Mirrored from naturecircle.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:27:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
    <!-- Basic and Helper page needs -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"theme-color\" content=\"#78a206\">
    <link rel=\"canonical\" href=\"login.html\"><!-- Title and description -->

    <title>Account&ndash; Naturecircle

    </title><!-- Helpers -->
    <!-- /snippets/social-meta-tags.liquid -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Account\">
    <meta property=\"og:url\" content=\"login.html\">
    <meta property=\"og:site_name\" content=\"Naturecircle\">
    <meta name=\"twitter:card\" content=\"summary\">

    <!-- CSS -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/timber.scssd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Link all your CSS files below -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/bootstrap.mind645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/font-awesome.mind645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/ie7d645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/pluginsd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <!-- Link your style.css and responsive.css files below -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/styled645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Theme Default CSS -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-defaultd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Make your theme CSS calls here -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-customd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-rtld645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Make your theme RTL CSS calls here -->
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-responsived645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Make your theme RTL CSS calls here -->
    <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-responsive-rtld645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <!-- Make all your dynamic CSS calls here -->
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/skin-themed645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Call your theme color CSS here -->
    <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-colord645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Header hook for plugins -->
    <meta id=\"shopify-digital-wallet\" name=\"shopify-digital-wallet\" content=\"/16239329344/digital_wallets/dialog\">
    <script id=\"shopify-features\" type=\"application/json\">{\"accessToken\":\"7752b1b5b798084cd72e4db58b99fefb\",\"betas\":[],\"domain\":\"naturecircle.myshopify.com\",\"shopId\":16239329344,\"smart_payment_buttons_url\":\"https:\\/\\/cdn.shopifycloud.com\\/payment-sheet\\/assets\\/latest\\/spb.js\"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = \"naturecircle.myshopify.com\";
        Shopify.currency = {\"active\":\"USD\",\"rate\":\"1.0\"};
        Shopify.theme = {\"name\":\"Naturecircle-RTL\",\"id\":63746441280,\"theme_store_id\":null,\"role\":\"unpublished\"};
        Shopify.theme.handle = \"null\";
        Shopify.theme.style = {\"id\":null,\"handle\":null};</script>
    <script>(function() {
            function asyncLoad() {
                var urls = [\"\\/\\/productreviews.shopifycdn.com\\/assets\\/v4\\/spr.js?shop=naturecircle.myshopify.com\"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if(window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script>
    <script id=\"__st\">var __st={\"a\":16239329344,\"offset\":-43200,\"reqid\":\"6dc89dd2-7611-4778-8eaa-218b6a991230\",\"pageurl\":\"naturecircle.myshopify.com\\/account\\/login\",\"u\":\"869ecdcd77de\"};</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>window.Shopify = window.Shopify || {};
        window.Shopify.Checkout = window.Shopify.Checkout || {};
        window.Shopify.Checkout.apiHost = \"naturecircle.myshopify.com\";</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'USD';
        var meta = {\"page\":{}};
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

        };
    </script>
    <script class=\"analytics\">(function () {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.\$) {
                    jquery = window.Checkout.\$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var isDuplicatedThankYouPageView = function() {
                return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
            }

            var setCookieIfThankYouPage = function() {
                if (window.location.pathname.indexOf('/checkouts') !== -1 &&
                    window.location.pathname.indexOf('/thank_you') !== -1) {

                    var twoMonthsFromNow = new Date(Date.now())
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config;
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function(e) {
                    (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
                };
                script.async = true;
                script.src = 'assetsfront/cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
                var first = document.getElementsByTagName('script')[0];
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {\"Trekkie\":{\"appName\":\"storefront\",\"development\":false,\"defaultAttributes\":{\"shopId\":16239329344,\"isMerchantRequest\":null,\"themeId\":63746441280,\"themeCityHash\":4793583985551734744}},\"Performance\":{\"navigationTimingApiMeasurementsEnabled\":true,\"navigationTimingApiMeasurementsSampleRate\":1.0},\"Session Attribution\":{}}
            );

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
                document.write = originalDocumentWrite;

                if (!isDuplicatedThankYouPageView()) {
                    setCookieIfThankYouPage();

                    window.ShopifyAnalytics.lib.page(
                        null,
                        {}
                    );


                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = \"assetsfront/cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js\";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <script>document.addEventListener('DOMContentLoaded', function() {
            const previewBarInjector = new Shopify.PreviewBarInjector({
                targetNode: document.body,
                iframeRoot: 'https://naturecircle.myshopify.com',
                iframeSrc: 'https://naturecircle.myshopify.com/preview_bar',
                previewToken: 'yc0apvt163lgf9sr',
                themeStoreId: '',
                permanentDomain: 'naturecircle.myshopify.com',
            });
            previewBarInjector.init();
        });</script>
    <script integrity=\"sha256-cDvzHc7qqyE6XUzjp2M6Hvi6U27BLsvkmtBh9SERMrY=\" defer=\"defer\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/storefront/express_buttons-703bf31dceeaab213a5d4ce3a7633a1ef8ba536ec12ecbe49ad061f5211132b6.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
    <script integrity=\"sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=\" defer=\"defer\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
    <script integrity=\"sha256-EjQ4SIfPR0Nt4bDdOPt4NE/bnmM0rXo6kCFhvWaP5kM=\" defer=\"defer\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/storefront/bars/preview_bar_injector-1234384887cf47436de1b0dd38fb78344fdb9e6334ad7a3a902161bd668fe643.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/compiled_assets/stylesd645.css?40"), "html", null, true);
        echo "\">
    <script id=\"sections-script\" data-sections=\"header\" defer=\"defer\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/compiled_assets/scriptsd645.js?40"), "html", null, true);
        echo "\"></script>

    <!-- /snippets/oldIE-js.liquid -->


    <!--[if lt IE 9]>
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/respond.min.js?40"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/respond-proxy.html"), "html", null, true);
        echo "\" id=\"respond-proxy\" rel=\"respond-proxy\" />
    <link href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3"), "html", null, true);
        echo "\" id=\"respond-redirect\" rel=\"respond-redirect\" />
    <script src=\"assetsfront/naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" type=\"text/javascript\"></script>
    <![endif]-->


    <!-- JS --><!-- Your update file include here -->
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/modernizr-3.5.0.mind645.js?40"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/popper.mind645.js?40"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/bootstrap.mind645.js?40"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/pluginsd645.js?40"), "html", null, true);
        echo "\"></script>



    <!-- Countdown Js -->
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/jquery.countdown.mind645.js?40"), "html", null, true);
        echo "\"></script>

    <!-- Ajax Cart js -->
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/cart.apid645.js?40"), "html", null, true);
        echo "\"></script>

    <!-- Your main.js file upload this file -->
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/themed645.js?40"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


</head>

<body id=\"account\" class=\"template-login\" ><div class=\"wrapper\"><div id=\"shopify-section-header\" class=\"shopify-section\">
        <!-- Header Area Start -->
        <header class=\"header-area header-sticky\">
            <div class=\"header-container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 display-none-md display-none-xs\">
                        <div class=\"ht-main-menu\">
                            <nav>
                                <ul>

                                    <li ><a href=\"";
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfront");
        echo "\">Home <i class=\"fa fa-angle-down\"></i></a>

                                    </li>





                                </ul>
                            </nav>

                            <script>
                                \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
                                \$('.submenu-li').parent('ul').addClass('sub-menu');
                            </script>


                        </div>
                    </div>
                    <div class=\"col-lg-2 col-sm-4\">
                        <div class=\"navbar-brand\">
                            <a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_stat");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/newlogo.png"), "html", null, true);
        echo "\" width=\"75\" alt=\"Aero\"><span class=\"m-l-10\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-sm-8\">
                        <div class=\"header-content d-flex justify-content-end\">
                            <div class=\"search-wrapper\">
                                <a href=\"#\"><span class=\"icon icon-Search\"></span></a>
                                <form action=\"https://naturecircle.myshopify.com/search\" method=\"get\" class=\"search-form\" role=\"search\">
                                    <input type=\"search\" name=\"q\" value=\"\" placeholder=\"Search our store\"  aria-label=\"Search our store\">
                                    <button type=\"submit\" class=\"btn icon-fallback-text\">
                                        <span class=\"fallback-text\">Search</span>
                                    </button>
                                </form>


                            </div>
                            <div class=\"settings-wrapper\">
                                <a href=\"#\"><i class=\"icon icon-Settings\"></i></a>
                                <div class=\"settings-content\">
                                    <h4>My Account <i class=\"fa fa-angle-down\"></i></h4>
                                    <ul>
                                        <li><a href=\"register.html\" class=\"modal-view button\" data-toggle=\"modal\" data-target=\"#register_box\">Register</a></li>
                                        <li>

                                            <a href=\"login.html\">Login</a>

                                        </li>
                                    </ul><div class=\"switcher-currency-trigger currency\">
                                        <h4>Currency: <span class=\"current-currency\">USD</span> <i class=\"fa fa-angle-down\"></i></h4>

                                        <ul class=\"switcher-dropdown\" id=\"currencies\">




                                            <li data-currency=\"USD\" class=\"currency__item\"><a style=\"cursor: pointer\">USD - US Dollar</a></li>




                                            <li data-currency=\"EUR\" class=\"currency__item\"><a style=\"cursor: pointer\">EUR - Euro</a></li>




                                            <li data-currency=\"GBP\" class=\"currency__item\"><a style=\"cursor: pointer\">GBP - British Pound</a></li>




                                            <li data-currency=\"INR\" class=\"currency__item\"><a style=\"cursor: pointer\">INR - Indian Rupee</a></li>




                                            <li data-currency=\"BDT\" class=\"currency__item\"><a style=\"cursor: pointer\">BDT - Bangladesh Taka</a></li>




                                            <li data-currency=\"JPY\" class=\"currency__item\"><a style=\"cursor: pointer\">JPY - Japan Yen</a></li>




                                            <li data-currency=\"CAD\" class=\"currency__item\"><a style=\"cursor: pointer\">CAD - Canada Dollar</a></li>




                                            <li data-currency=\"AUD\" class=\"currency__item\"><a style=\"cursor: pointer\">AUD - Australian Dollar</a></li>

                                        </ul>
                                    </div></div>
                            </div>
                            <div class=\"cart-wrapper\">


                                <a href=\"../cart.html\">
                                    <i class=\"icon icon-FullShoppingCart\"></i>
                                    <span class=\"bigcounter\">0</span>
                                </a>

                                <div class=\"cart-empty-title\"  style=\"display:block;\">
                                    <h3>Your cart is currently empty.</h3>
                                </div>
                                <div class=\"cart-item-wrapper\"  style=\"display:none;\">
                                    <div class=\"single-cart-item-area\">

                                    </div>
                                    <div class=\"cart-price-total\">
                                        <div class=\"cart-price-info d-flex justify-content-between\">
                                            <span class=\"total\">Total :</span>
                                            <span class=\"shopping-cart__total\"><span class=money>\$0.00</span></span>
                                        </div>
                                    </div>
                                    <div class=\"cart-links\">
                                        <a href=\"../cart.html\">View Cart</a>
                                        <a href=\"../checkout.html\">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->
            <div class=\"mobile-menu-area\">
                <div class=\"mobile-menu container\">
                    <nav id=\"mobile-menu-active\">
                        <ul class=\"menu-overflow\">

                            <li><a href=\"";
        // line 400
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfront");
        echo "\">Home <i class=\"fa fa-angle-down\"></i></a>

                            </li>

                            <li><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"\">





                                </ul>
                            </li>


                        </ul>
                    </nav>

                    <script>
                        \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
                        \$('.submenu-li').parent('ul').addClass('sub-menu');
                    </script>

                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End -->



        <style>
            .theme-logo img{
                max-width: 160px;
            }
        </style>

    </div>
    <!-- Breadcrumb Area Start -->

    <div class=\"breadcrumbs-section\">
        <div class=\"breadcrumb-area text-center breadcrumbs overlay-bg\">
            <div class=\"container breadcrumbs-inner\">
                <h1>Account</h1>

                <nav class=\"\" role=\"navigation\" aria-label=\"breadcrumbs\">
                    <ul class=\"breadcrumb\">

                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 449
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfront");
        echo "\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <span>Account</span>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>
    ";
        // line 461
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 462
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", ["%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "username", [])], "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 463
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 464
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 467
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 469
        echo "

    ";
        // line 471
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", []), "hasPreviousSession", [])) {
            // line 472
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 473
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 474
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 475
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "    ";
        }
        // line 480
        echo "    <!-- Breadcrumb Area End -->
    ";
        // line 481
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 543
        echo "
    <div id=\"shopify-section-footer\" class=\"shopify-section\"><!-- Footer Area Start -->
        <footer class=\"footer-area\">
            <!-- Footer Top Area Start -->
            <div class=\"footer-top bg-4 pt-120 pb-120\">

                <!-- Newsletter Area Start -->

                <div class=\"newsletter-area\">
                    <div class=\"container text-center\">
                        <div class=\"newsletter-container\">


                            <h2>Subscribe Newsletter.</h2>


                            <p>Get e-mail updates about our latest shop and special offers.</p>


                            <div class=\"newsletter-form mc_embed_signup\">
                                <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate newsletter-form validate\" target=\"_blank\" novalidate>
                                    <div id=\"mc_embed_signup_scroll\" class=\"mc-form\">
                                        <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter you email address here...\" required>
                                        <button id=\"mc-embedded-subscribe\" type=\"submit\" name=\"subscribe\" class=\"default-btn\">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"social-icon\">

                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-google\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>




                        </div>

                    </div>
                </div>

                <!-- Newsletter Area End -->

                <!-- Service Area Start -->

                <div class=\"service-area pt-50\">
                    <div class=\"container\">
                        <div class=\"service-container\">
                            <div class=\"service-content\">
                                <div class=\"row\">


                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/rocketf589.png?v=1546506966"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Free delivery</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"";
        // line 628
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/moneyb16a.png?v=1546506976"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Money Guarantee</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/support1059.png?v=1546506984"), "html", null, true);
        echo "\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Online Support</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>










                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Area End -->

                <!-- Footer Widget Area Start -->

                <div class=\"footer-widget-area\">
                    <div class=\"container\">
                        <div class=\"row\">








                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">

                                    <div class=\"footer-logo\">
                                        <a href=\"../index.html\">
                                            <img src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_02304f19-13a6-4b93-9218-6e0d0370aa5acec6.png?v=1546506822"), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </div>


                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

                                    <div class=\"footer-text\">

                <span>

                  <i class=\"icon icon-Pointer\"></i>

                  Contact info: 169-C, Technohub, Dubai Silicon Oasis.
                </span>


                                        <span>

                  <i class=\"icon icon-Phone\"></i>

                  Telephone: 169-C, Technohub, Dubai Silicon Oasis.
                </span>


                                        <span>

                  <i class=\"icon icon-Mail\"></i>

                  Email: Support@example.com
                </span>

                                    </div>
                                </div>
                            </div>



                            <div class=\"col-lg-2 col-md-3\">
                                <div class=\"single-footer-widget\">

                                    <h3>Products</h3>

                                    <ul class=\"footer-widget-list\">


                                        <li><a href=\"#\">Prices drop</a></li>

                                        <li><a href=\"#\">New products</a></li>

                                        <li><a href=\"#\">Best sales</a></li>

                                        <li><a href=\"#\">Stores</a></li>

                                        <li><a href=\"#\">Login</a></li>

                                        <li><a href=\"#\">My Account</a></li>

                                    </ul>
                                </div>
                            </div>



                            <div class=\"col-lg-2 col-md-3\">
                                <div class=\"single-footer-widget\">

                                    <h3>Our Company</h3>

                                    <ul class=\"footer-widget-list\">


                                        <li><a href=\"#\">Delivery</a></li>

                                        <li><a href=\"#\">Legal Notice</a></li>

                                        <li><a href=\"#\">Documentation</a></li>

                                        <li><a href=\"#\">Secure payment</a></li>

                                        <li><a href=\"#\">Contact us</a></li>

                                        <li><a href=\"#\">Stores</a></li>

                                    </ul>
                                </div>
                            </div>



                            <div class=\"col-lg-4\">
                                <div class=\"single-footer-widget\">

                                    <h3>Instagram</h3>

                                    <div id=\"instafeed\" class=\"instagram-image\"></div>
                                </div>
                            </div>

                            <script>
                                (function (\$) {
                                    \"use strict\";

                                    jQuery(document).ready(function(){

                                        var userFeed = new Instafeed({
                                            get: 'user',
                                            userId: '6667588161',
                                            limit: '8',
                                            accessToken: '6667588161.1677ed0.705c7b82e16f42b2898cd19e737dc53e',
                                            resolution: 'thumbnail',
                                            template: '<div class=\"single-insta-img\"><a href=\"\\{\\{link\\}\\}\" target=\"_blank\" id=\"\\{\\{id\\}\\}\"><img src=\"\\{\\{image\\}\\}\" /></a></div>'

                                        });
                                        userFeed.run();
                                    });

                                })(jQuery);

                            </script>



                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area End -->
            </div>
            <!-- Footer Top Area End -->
            <!-- Footer Bottom Area Start -->
            <div class=\"footer-bottom-area pb-20\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-flex col-md-6\">
                            <div class=\"footer-text-bottom\">
                                <p><p>Copyright &copy;&nbsp;<a href=\"#\">Naturecircle</a>. All Rights Reserved</p></p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"payment-img d-flex justify-content-end\">

                                <img src=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/payment72c6.png?v=1546505987"), "html", null, true);
        echo "\" alt=\"\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area End -->
        </footer>
        <!-- Footer Area End -->


        <style>
            .bg-4 {
                background-image:url(";
        // line 850
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/4ecdb.jpg?v=1546506413"), "html", null, true);
        echo ");
                background-position: top center;
            }
            .bg-4 {
                background: ;
            }
            .newsletter-area {
                background-color: !important;
            }
            .footer-policy-box p i.icon {
                border: 1px solid #12a4dd;
                color: #12a4dd;
            }
            .footer-menu ul li a:hover {
                color: #12a4dd;
            }

        </style>

        <script src=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/instafeed.mind645.js?40"), "html", null, true);
        echo "\"></script>


    </div>

    <!-- Necessary JS -->
    <script src=\"";
        // line 875
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/fastclick.mind645.js?40"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/timberd645.js?40"), "html", null, true);
        echo "\"></script>


    <script>

    </script>
    <!-- modalAddToCart Error -->
    <div class=\"modal fade ajax-popup error-ajax-popup\" id=\"modalAddToCartError\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog white-modal modal-md\">
            <div class=\"modal-content \">
                <div class=\"modal-body\">
                    <div class=\"modal-content-text\">
                        <p class=\"error_message\"></p>
                    </div>
                    <div class=\"modal-close\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script>
        \$(function() {
            // Current Ajax request.
            var currentAjaxRequest = null;
            // Grabbing all search forms on the page, and adding a .search-results list to each.
            var searchForms = \$('form[action=\"/search\"]').css('position','relative').each(function() {
                // Grabbing text input.
                var input = \$(this).find('input[name=\"q\"]');
                // Adding a list for showing search results.
                var offSet = input.position().top + input.innerHeight();
                \$('<ul class=\"search-results home-two\"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo(\$(this)).hide();
                // Listening to keyup and change on the text field within these search forms.
                input.attr('autocomplete', 'off').bind('keyup change', function() {
                    // What's the search term?
                    var term = \$(this).val();
                    // What's the search form?
                    var form = \$(this).closest('form');
                    // What's the search URL?
                    var searchURL = '/search?type=product&q=' + term;
                    // What's the search results list?
                    var resultsList = form.find('.search-results');
                    // If that's a new term and it contains at least 3 characters.
                    if (term.length > 3 && term != \$(this).attr('data-old-term')) {
                        // Saving old query.
                        \$(this).attr('data-old-term', term);
                        // Killing any Ajax request that's currently being processed.
                        if (currentAjaxRequest != null) currentAjaxRequest.abort();
                        // Pulling results.
                        currentAjaxRequest = \$.getJSON(searchURL + '&view=json', function(data) {
                            // Reset results.
                            resultsList.empty();
                            // If we have no results.
                            if(data.results_count == 0) {
                                // resultsList.html('<li><span class=\"title\">No results.</span></li>');
                                // resultsList.fadeIn(100);
                                resultsList.hide();
                            } else {
                                // If we have results.
                                \$.each(data.results, function(index, item) {
                                    var link = \$('<a></a>').attr('href', item.url);
                                    link.append('<span class=\"thumbnail\"><img src=\"' + item.thumbnail + '\" /></span>');
                                    link.append('<span class=\"title\">' + item.title + '</span>');
                                    link.wrap('<li></li>');
                                    resultsList.append(link.parent());
                                });
                                // The Ajax request will return at the most 10 results.
                                // If there are more than 10, let's link to the search results page.
                                if(data.results_count > 10) {
                                    resultsList.append('<li><span class=\"title\"><a href=\"' + searchURL + '\">See all results (' + data.results_count + ')</a></span></li>');
                                }
                                resultsList.fadeIn(100);
                            }
                        });
                    }
                });
            });
            // Clicking outside makes the results disappear.
            \$('body').bind('click', function(){
                \$('.search-results').hide();
            });
        });
    </script>

    <!-- Some styles to get you started. -->
    <style>
        .search-results {
            z-index: 8889;
            list-style-type: none;
            width: 190px;
            margin: 0;
            padding: 0;
            background: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 0px;
            -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
            box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .search-results li {
            display: block;
            width: 100%;
            height: 38px;
            margin: 0;
            padding: 0;
            border-top: 1px solid #cccccc;
            line-height: 38px;
            overflow: hidden;
        }
        .search-results li:first-child {
            border-top: none;
        }
        .search-results .title {
            float: left;
            width: 140px;
            padding-left: 8px;
            white-space: nowrap;
            overflow: hidden;
            /* The text-overflow property is supported in all major browsers. */
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            text-align: left;
            font-size:12px;
            line-height:38px;
            color:#515151;
        }
        .search-results .title:hover{
            color:#CE9634;
        }
        .search-results .thumbnail {
            float: left;
            display: block;
            width: 32px;
            height: 32px;
            margin: 3px 0 3px 3px;
            padding: 0;
            text-align: center;
            overflow: hidden;
            border-radius:0px;
        }
    </style>

    <div class=\"modal fade productModal\" id=\"quickViewModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"qwick-view-left\">
                                <div class=\"quick-view-learg-img\">
                                    <div class=\"quick-view-tab-content tab-content\">
                                        <div class=\"product-main-image__item\">
                                            <div class=\"img_box_1\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"qwick-view-right\">
                                <div class=\"qwick-view-content\">
                                    <h1 class=\"product_title\">FROM_JS</h1>
                                    <div class=\"product-price product-info__price price-part\">
                                        <span class=\"main\">jsprice</span>
                                        <span class=\"price-box__new\">jsprice</span>
                                    </div>
                                    <div class=\"product-rating spr-badge-caption-none\">
                                        <div class=\"quick-view-rating rating\">FROM_JS</div>
                                    </div>

                                    <div class=\"short-description product-des\">FROM_JS</div>

                                    <form id=\"add-item-qv\" action=\"https://naturecircle.myshopify.com/cart/add\" method=\"post\">
                                        <div class=\"quick-view-select variants select-option-part\"></div>
                                        <div class=\"quickview-plus-minus\">
                                            <div class=\"cart-plus-minus\">
                                                <input type=\"text\" value=\"01\" name=\"quantity\" class=\"cart-plus-minus-box\">
                                            </div>
                                            <div class=\"quickview-btn-cart\">
                                                <button type=\"submit\" class=\"addtocartqv theme-default-button\">Add to cart</button>
                                            </div>
                                        </div>
                                        <script>
                                            jQuery('.addtocartqv').click(function(e) {
                                                e.preventDefault();
                                                Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span class=\"close-icon\" aria-hidden=\"true\">x</span>
                    </button>
                </div>
            </div>
        </div>
    </div>





    <div class=\"quickViewModal_info\" style=\"display: none;\">
        <div class=\"button\">Add to cart</div>
        <div class=\"button_added\">Added</div>
        <div class=\"button_error\">Limit Products</div>
        <div class=\"button_wait\">Wait..</div>
    </div>




    <script>
        var mainImage = '';
        jQuery(function (\$) {

            quiqview = function(product_handle) {
                Shopify.getProduct(product_handle);
            }
            Shopify.onProduct = function(product) {
                \$('.viewfullinfo').attr('href', product.url);

                // product description without shortcode
                text_truncate = function(str, length, ending) {
                    if (length == null) {
                        length = 500;
                    }
                    if (ending == null) {
                        ending = '...';
                    }
                    if (str.length > length) {
                        return str.substring(0, length - ending.length) + ending;
                    } else {
                        return str;
                    }
                };

                var _parent = '#quickViewModal';
                \$(_parent+' .product_title').text(product.title);



                // product rating
                \$(_parent+' .rating').empty();
                \$(_parent+' .rating').append(\"<span class=\\\"shopify-product-reviews-badge\\\" data-id=\\\"\"+product.id+\"\\\"></span>\");


                //check variants
                var variant = '';

                for (i = 0; i < product.variants.length; i++) {
                    if(product.variants[i].inventory_quantity > 0) {
                        variant = product.variants[i];
                        break;
                    }
                }

                if(variant == '') {
                    for (i = 0; i < product.variants.length; i++) {
                        if(product.variants[i].inventory_policy == \"continue\") {
                            variant = product.variants[i];
                            break;
                        }
                    }
                    if(variant == '') {
                        variant = product.variants[0];
                    }
                }

                mainImage = product.featured_image;
                var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
                var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
                jQuery(_parent+' .product-main-image__item .img_box_1').empty();
                jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
                jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

                // product description with shortcode
                var desc = product.description;
                if (desc.indexOf(\"[short_description]\") >= 0) {
                    desc = desc.split(\"[short_description]\");
                    desc = desc[1].split(\"[/short_description]\");
                    \$(_parent+' .product-des').show();
                    \$(_parent+' .product-des').html(desc[0]);
                }
                else {
                    \$(_parent+' .product-des').html(text_truncate(product.description,250));
                }

                //set variants property
                var inv_qua = variant.inventory_quantity;
                //price

                // Variants select
                if(product.variants.length > 1) {
                    var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

                    var select = '<select id=\"product-select-qv\" name=\"id\">';
                    var selected = 'selected';
                    for (i = 0; i < product.variants.length; i++) {
                        var _var = product.variants[i];

                    }
                    select += '</select>';

                    var variant_select = '<div class=\"variants_selects ' + variants_margin + '\">';
                    variant_select += select;
                    variant_select += '</div><div class=\"divider divider--sm\"></div>';
                    select = variant_select;
                }
                else {
                    var select = '<input type=\"hidden\" name=\"id\" value=\"' + product.variants[0].id + '\" />';
                }
                \$('.variants').empty();
                \$('.variants').html(select);

                //parametres
                setParametresText(_parent+' .product-sku', variant.sku);
                if(jQuery(_parent + ' .product-sku').length) {
                    var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                    if(variant.sku != \"\") {
                        if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                    } else {
                        if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                    }
                }

                //quantity
                var out_of_stock = false;
                if(variant.inventory_management) {
                    if(inv_qua > 0) {
                        \$(_parent+' .product-availability').text(inv_qua + \" In Stock\");
                    }
                    else {
                        out_of_stock = true;
                        \$(_parent+' .product-availability').text(\"In Stock\");
                    }
                }
                else {
                    \$(_parent+' .product-availability').text(\"Many in stock\");
                }

                // button
                if(!out_of_stock || variant.inventory_policy == \"continue\") {
                    \$('.product-available').show();
                    \$('.product-disable').hide();
                    \$('.addtocartqv').attr('id', product.id );
                }
                else {
                    \$('.product-available').hide();
                    \$('.product-disable').show();
                }

                if (product.available && product.variants.length > 1) {
                    new Shopify.OptionSelectors(\"product-select-qv\", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });

                    if(\$('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                        \$.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                            \$(this).find('label').text(product.options[index].name);
                        });
                    }
                }
                else {
                    jQuery('.currency .active').trigger('click');
                }
                selectGrid(_parent);

                if(\$(\".spr-badge\").length > 0) {
                    \$.getScript(window.location.protocol + \"//productreviews.shopifycdn.com/assets/v4/spr.js\");
                }

                if(\$(\".selector-wrapper label\").length) {
                    \$(\".selector-wrapper label\").each(function( index ) {
                        \$(this).text(jQuery(this).text() + \":\");
                    });
                }

                \$(_parent).modal('show');

                if( !( 'ontouchstart' in window ) &&
                    !navigator.msMaxTouchPoints &&
                    !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

                \$j('body').css(\"top\", -\$j('body').scrollTop());
                \$j('body').addClass(\"no-scroll\");
                \$j('.close').click(function(){
                    var top = parseInt(\$j('body').css(\"top\").replace(\"px\", \"\"))*-1;
                    \$j('body').removeAttr(\"style\");
                    \$j('body').removeClass(\"no-scroll\");
                    \$j('body').scrollTop(top);
                });
            }

            function setParametresText(obj, value) {
                if(value != '') {
                    \$(obj).parent().show();
                    \$(obj).text(value);
                }
                else {
                    \$(obj).parent().hide();
                }
            }



        });



        var selectCallbackQv = function(variant, selector) {

            var _parent = '#quickViewModal';
            var _parentprice = _parent + ' .price-part';
            if (!variant) {
                jQuery(_parent + \" .price-box\").hide();
                jQuery(_parent + \" .qwt\").hide();
                jQuery(_parent + \" .control-console\").hide();
                jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                jQuery(_parent + ' .addtocartqv').text('Unavailable');
                return false;
            }

            jQuery(_parent + \" .price-box\").show();
            jQuery(_parent + \" .qwt\").show();
            jQuery(_parent + \" .control-console\").show();

            if(variant.price < variant.compare_at_price){
                jQuery(_parentprice + ' .main').addClass('price-box__old');
                jQuery(_parentprice + ' .price-box__new').show();
                changePriceValue(_parentprice + ' .main', variant.compare_at_price);
                changePriceValue(_parentprice + ' .price-box__new', variant.price);
            } else {
                jQuery(_parentprice + ' .price-box__new').hide();
                jQuery(_parentprice + ' .main').removeClass('price-box__old');
                changePriceValue(_parentprice + ' .main', variant.price);
            }

            newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

            if(jQuery(_parent + ' .product-sku').length) {
                var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                if(variant.sku != \"\") {
                    if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                } else {
                    if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                }
            }

            if (variant.available) {
                if (variant.inventory_management == null) {
                    jQuery(_parent + \" .product-availability\").text(\"Many in stock\");
                } else {
                    jQuery(_parent + \" .product-availability\").text(\" Many in stock\");
                }
            } else {
                jQuery(_parent + \" .product-availability\").text(\"Sold Out\");
            }

            var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
            var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
            if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
                var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
                jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
            }
            jQuery(_parent+' .product-main-image__item .img_box_1').empty();
            jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);

            if (variant && variant.available) {
                jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
                jQuery(_parent + ' .addtocartqv').html('Add to Cart');
                jQuery(_parent + \" .control-console\").show();
            } else {
                jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                jQuery(_parent + ' .addtocartqv').text('Unavailable');
                jQuery(_parent + \" .control-console\").hide();
            }

            jQuery('.currency .active').trigger('click');
        };



        function newVariantTextDataQv (obj, value) {
            if(value != '') {
                jQuery(obj).parent().show();
                jQuery(obj).text(value);
            }
            else {
                jQuery(obj).parent().hide();
            }
        };


        function selectGrid(_parent) {
            setTimeout(timeout, 5);
            function timeout() {
                if(jQuery(_parent + \" .selector-wrapper\").length > 2){
                    jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                } else if(jQuery(_parent + \" .selector-wrapper\").length == 1){
                    jQuery(_parent + \" .single-option-selector\").before(\"<label></label>\");
                    jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                }
            }
        };
    </script>

    <!-- END QUICKVIEW PRODUCT -->

    <script>
        \$(\".cart-plus-minus\").prepend('<div class=\"dec qtybutton\">-</div>');
        \$(\".cart-plus-minus\").append('<div class=\"inc qtybutton\">+</div>');
        \$(\".qtybutton\").on(\"click\", function() {
            var \$button = \$(this);
            var oldValue = \$button.parent().find(\"input\").val();
            if (\$button.text() == \"+\") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            \$button.parent().find(\"input\").val(newVal);
        });
    </script>
    <script>
        \$('.ajax-spin-cart').on('click', function() {
            \$(this).addClass('loading add-item');
            setTimeout(function () {
                \$('.ajax-spin-cart').removeClass('loading');
            },1000);
            setTimeout(function () {
                \$('.ajax-spin-cart').removeClass(\"add-item\");
            },2000);

        });
    </script>

    <script src=\"";
        // line 1426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/wishlistd645.js?40"), "html", null, true);
        echo "\"></script>
    <script>
        /* Ajax Wishlist */
        \$(\".action-wishlist\").on('click', function(){
            \$(this).addClass(\"loading-wishlist adding-wishlist\");
            setTimeout(function () {
                \$(\".action-wishlist\").removeClass(\"loading-wishlist\");
            },1000);
            setTimeout(function () {
                \$(\".adding-wishlist\").removeClass(\"adding-wishlist\");
            },2000);

        });

        (function() {
            Wishlist.init();
        }());
    </script><!-- Recently Viewed Products --><script src=\"";
        // line 1443
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/javascripts/currencies.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 1444
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/jquery.currencies.mind645.js?40"), "html", null, true);
        echo "\"></script>

    <script>

        // Pick your format here:
        // money_format or money_with_currency_format
        Currency.format = 'money_format';

        var shopCurrency = 'USD';


        var cookieCurrency;
        try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

        // Fix for customer account pages.
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });

        // Saving the current price.
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });

        // Select all your currencies buttons.
        var buttons = jQuery('.currency li');

        // If there's no cookie or it's the shop currency.
        if (cookieCurrency == null || cookieCurrency === shopCurrency) {
            buttons.removeClass('active');
            jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
            Currency.currentCurrency = shopCurrency;
            jQuery(\".current-currency\").text(shopCurrency);
        }
        else {
            Currency.convertAll(shopCurrency, cookieCurrency);
            buttons.removeClass('active');
            jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
            jQuery(\".current-currency\").text(cookieCurrency);
        }

        // When customer clicks on a currency button.
        buttons.click(function() {
            buttons.removeClass('active');
            var cur = jQuery(this).attr('data-currency');
            jQuery( \".currency li[data-currency='\" + cur + \"']\" ).addClass('active');

            var newCurrency =  jQuery(this).attr('data-currency');
            if(newCurrency == Currency.currentCurrency)
            {
                Currency.convertAll(shopCurrency, newCurrency);
            }
            else
            {
                Currency.convertAll(Currency.currentCurrency, newCurrency);
            }

            jQuery(\".current-currency\").text(cur);
        });

        // For product options.
        var main_selectCallback = window.selectCallback;
        var selectCallback = function(variant, selector) {
            main_selectCallback(variant, selector);
            Currency.convertAll(shopCurrency, jQuery(\".currency .active\").attr('data-currency'));
        };
    </script><script>
        \$('[data-countdown]').each(function() {
            var \$this = \$(this), finalDate = \$(this).data('countdown');
            \$this.countdown(finalDate, function(event) {
                \$this.html(event.strftime('<div class=\"countdown-area\"><div class=\"single-countdown\"><div class=\"count-number\">%D</div><div class=\"count-title\">days</div></div><div class=\"single-countdown\"><div class=\"count-number\">%H</div><div class=\"count-title\">Hour</div></div><div class=\"single-countdown\"><div class=\"count-number\">%M</div><div class=\"count-title\">Mint</div></div><div class=\"single-countdown\"><div class=\"count-number\">%S</div><div class=\"count-title\">Sec</div></div></div>'));
            });
        });
    </script>

</div>

</body>

<!-- Mirrored from naturecircle.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:27:29 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 481
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 482
        echo "    <main>
        <div class=\"customer-page theme-default-margin\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3 col-md-8 offset-md-2\">
                        <div class=\"login\">
                            <div id=\"CustomerLoginForm\">
                                <div class=\"login-text\">
                                    <h2>Login</h2><p>Please login using account detail bellow.</p>
                                </div>

                                <form  accept-charset=\"UTF-8\" action=\"/pepiniere/web/app_dev.php/\" >
                                    <div class=\"login-form-container\">
                                        <div class=\"login-form\">
                                            <input type=\"email\" name=\"customer[email]\" id=\"CustomerEmail\" class=\"input-full\" placeholder=\"Email\" autocorrect=\"off\" autocapitalize=\"off\" autofocus>

                                            <input type=\"password\" value=\"\" name=\"customer[password]\" id=\"CustomerPassword\" class=\"input-full\" placeholder=\"Password\">

                                            <div class=\"login-toggle-btn\">
                                                <div class=\"form-action-button\">
                                                    <button type=\"submit\" class=\"theme-default-button\">Sign In</button>
                                                    <a href=\"#recover\" id=\"RecoverPassword\">Forgot your password?</a>
                                                </div>
                                                <div class=\"account-optional-action\">
                                                    <a href=\"register.html\" id=\"customer_register_link\">Create account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id=\"RecoverPasswordForm\" style=\"display: none;\">
                                <form method=\"post\" action=\"https://naturecircle.myshopify.com/account/recover\" accept-charset=\"UTF-8\"><input type=\"hidden\" name=\"form_type\" value=\"recover_customer_password\" /><input type=\"hidden\" name=\"utf8\" value=\"✓\" />

                                    <div class=\"login-form-container\">
                                        <div class=\"login-text\">
                                            <h2>Reset your password</h2>
                                            <p>We will send you an email to reset your password.</p>
                                        </div>
                                        <div class=\"login-form\">
                                            <input type=\"email\" value=\"\" name=\"email\" id=\"RecoverEmail\" class=\"input-full\" placeholder=\"Email\" autocorrect=\"off\" autocapitalize=\"off\">
                                            <div class=\"login-toggle-btn\">
                                                <div class=\"form-action-button\">
                                                    <button type=\"submit\" class=\"theme-default-button\">Submit</button>
                                                    <a href=\"#\" id=\"HideRecoverPasswordLink\">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1704 => 482,  1695 => 481,  1603 => 1444,  1599 => 1443,  1579 => 1426,  1026 => 876,  1022 => 875,  1013 => 869,  991 => 850,  974 => 836,  829 => 694,  778 => 646,  757 => 628,  736 => 610,  667 => 543,  665 => 481,  662 => 480,  659 => 479,  653 => 478,  644 => 475,  639 => 474,  634 => 473,  629 => 472,  627 => 471,  623 => 469,  615 => 467,  609 => 464,  605 => 463,  600 => 462,  598 => 461,  583 => 449,  531 => 400,  413 => 287,  389 => 266,  371 => 251,  365 => 248,  359 => 245,  355 => 244,  351 => 243,  345 => 240,  337 => 235,  333 => 234,  329 => 233,  325 => 232,  321 => 231,  312 => 225,  308 => 224,  304 => 223,  295 => 217,  291 => 216,  287 => 215,  283 => 214,  279 => 213,  119 => 56,  114 => 54,  107 => 50,  101 => 47,  95 => 44,  89 => 41,  84 => 39,  78 => 36,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  54 => 27,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<!--[if IE 9]> <html class=\"ie9 no-js supports-no-cookies\" lang=\"en\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=\"no-js supports-no-cookies\" lang=\"en\"> <!--<![endif]-->


<!-- Mirrored from naturecircle.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:27:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
    <!-- Basic and Helper page needs -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta name=\"theme-color\" content=\"#78a206\">
    <link rel=\"canonical\" href=\"login.html\"><!-- Title and description -->

    <title>Account&ndash; Naturecircle

    </title><!-- Helpers -->
    <!-- /snippets/social-meta-tags.liquid -->
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:title\" content=\"Account\">
    <meta property=\"og:url\" content=\"login.html\">
    <meta property=\"og:site_name\" content=\"Naturecircle\">
    <meta name=\"twitter:card\" content=\"summary\">

    <!-- CSS -->
    <link href=\"{{asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/timber.scssd645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Link all your CSS files below -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/bootstrap.mind645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/font-awesome.mind645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/ie7d645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/pluginsd645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <!-- Link your style.css and responsive.css files below -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/styled645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Theme Default CSS -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-defaultd645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Make your theme CSS calls here -->
    <link href=\"{{asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-customd645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-rtld645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Make your theme RTL CSS calls here -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-responsived645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- Make your theme RTL CSS calls here -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-responsive-rtld645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


    <!-- Make all your dynamic CSS calls here -->
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/skin-themed645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Call your theme color CSS here -->
    <link href=\"{{asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/theme-colord645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <!-- Header hook for plugins -->
    <meta id=\"shopify-digital-wallet\" name=\"shopify-digital-wallet\" content=\"/16239329344/digital_wallets/dialog\">
    <script id=\"shopify-features\" type=\"application/json\">{\"accessToken\":\"7752b1b5b798084cd72e4db58b99fefb\",\"betas\":[],\"domain\":\"naturecircle.myshopify.com\",\"shopId\":16239329344,\"smart_payment_buttons_url\":\"https:\\/\\/cdn.shopifycloud.com\\/payment-sheet\\/assets\\/latest\\/spb.js\"}</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = \"naturecircle.myshopify.com\";
        Shopify.currency = {\"active\":\"USD\",\"rate\":\"1.0\"};
        Shopify.theme = {\"name\":\"Naturecircle-RTL\",\"id\":63746441280,\"theme_store_id\":null,\"role\":\"unpublished\"};
        Shopify.theme.handle = \"null\";
        Shopify.theme.style = {\"id\":null,\"handle\":null};</script>
    <script>(function() {
            function asyncLoad() {
                var urls = [\"\\/\\/productreviews.shopifycdn.com\\/assets\\/v4\\/spr.js?shop=naturecircle.myshopify.com\"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if(window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script>
    <script id=\"__st\">var __st={\"a\":16239329344,\"offset\":-43200,\"reqid\":\"6dc89dd2-7611-4778-8eaa-218b6a991230\",\"pageurl\":\"naturecircle.myshopify.com\\/account\\/login\",\"u\":\"869ecdcd77de\"};</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script>window.Shopify = window.Shopify || {};
        window.Shopify.Checkout = window.Shopify.Checkout || {};
        window.Shopify.Checkout.apiHost = \"naturecircle.myshopify.com\";</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'USD';
        var meta = {\"page\":{}};
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

        };
    </script>
    <script class=\"analytics\">(function () {
            var customDocumentWrite = function(content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.\$) {
                    jquery = window.Checkout.\$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var isDuplicatedThankYouPageView = function() {
                return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
            }

            var setCookieIfThankYouPage = function() {
                if (window.location.pathname.indexOf('/checkouts') !== -1 &&
                    window.location.pathname.indexOf('/thank_you') !== -1) {

                    var twoMonthsFromNow = new Date(Date.now())
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function(method) {
                return function() {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function(config) {
                trekkie.config = config;
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function(e) {
                    (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
                };
                script.async = true;
                script.src = 'assetsfront/cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
                var first = document.getElementsByTagName('script')[0];
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {\"Trekkie\":{\"appName\":\"storefront\",\"development\":false,\"defaultAttributes\":{\"shopId\":16239329344,\"isMerchantRequest\":null,\"themeId\":63746441280,\"themeCityHash\":4793583985551734744}},\"Performance\":{\"navigationTimingApiMeasurementsEnabled\":true,\"navigationTimingApiMeasurementsSampleRate\":1.0},\"Session Attribution\":{}}
            );

            var loaded = false;
            trekkie.ready(function() {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
                document.write = originalDocumentWrite;

                if (!isDuplicatedThankYouPageView()) {
                    setCookieIfThankYouPage();

                    window.ShopifyAnalytics.lib.page(
                        null,
                        {}
                    );


                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = \"assetsfront/cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js\";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <script>document.addEventListener('DOMContentLoaded', function() {
            const previewBarInjector = new Shopify.PreviewBarInjector({
                targetNode: document.body,
                iframeRoot: 'https://naturecircle.myshopify.com',
                iframeSrc: 'https://naturecircle.myshopify.com/preview_bar',
                previewToken: 'yc0apvt163lgf9sr',
                themeStoreId: '',
                permanentDomain: 'naturecircle.myshopify.com',
            });
            previewBarInjector.init();
        });</script>
    <script integrity=\"sha256-cDvzHc7qqyE6XUzjp2M6Hvi6U27BLsvkmtBh9SERMrY=\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/storefront/express_buttons-703bf31dceeaab213a5d4ce3a7633a1ef8ba536ec12ecbe49ad061f5211132b6.js') }}\" crossorigin=\"anonymous\"></script>
    <script integrity=\"sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js') }}\" crossorigin=\"anonymous\"></script>
    <script integrity=\"sha256-EjQ4SIfPR0Nt4bDdOPt4NE/bnmM0rXo6kCFhvWaP5kM=\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/storefront/bars/preview_bar_injector-1234384887cf47436de1b0dd38fb78344fdb9e6334ad7a3a902161bd668fe643.js') }}\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/compiled_assets/stylesd645.css?40') }}\">
    <script id=\"sections-script\" data-sections=\"header\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/compiled_assets/scriptsd645.js?40') }}\"></script>

    <!-- /snippets/oldIE-js.liquid -->


    <!--[if lt IE 9]>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/respond.min.js?40') }}\" type=\"text/javascript\"></script>
    <link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/respond-proxy.html') }}\" id=\"respond-proxy\" rel=\"respond-proxy\" />
    <link href=\"{{ asset('assetsfront/naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3') }}\" id=\"respond-redirect\" rel=\"respond-redirect\" />
    <script src=\"assetsfront/naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" type=\"text/javascript\"></script>
    <![endif]-->


    <!-- JS --><!-- Your update file include here -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/modernizr-3.5.0.mind645.js?40') }}\"></script>
    <script src=\"{{ asset('assetsfront/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/popper.mind645.js?40') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/bootstrap.mind645.js?40') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/pluginsd645.js?40') }}\"></script>



    <!-- Countdown Js -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/jquery.countdown.mind645.js?40') }}\"></script>

    <!-- Ajax Cart js -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/cart.apid645.js?40') }}\"></script>

    <!-- Your main.js file upload this file -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/themed645.js?40') }}\"></script>


    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js') }}\" type=\"text/javascript\"></script>


</head>

<body id=\"account\" class=\"template-login\" ><div class=\"wrapper\"><div id=\"shopify-section-header\" class=\"shopify-section\">
        <!-- Header Area Start -->
        <header class=\"header-area header-sticky\">
            <div class=\"header-container\">
                <div class=\"row\">
                    <div class=\"col-lg-5 display-none-md display-none-xs\">
                        <div class=\"ht-main-menu\">
                            <nav>
                                <ul>

                                    <li ><a href=\"{{ path(\"produit_indexfront\" ) }}\">Home <i class=\"fa fa-angle-down\"></i></a>

                                    </li>





                                </ul>
                            </nav>

                            <script>
                                \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
                                \$('.submenu-li').parent('ul').addClass('sub-menu');
                            </script>


                        </div>
                    </div>
                    <div class=\"col-lg-2 col-sm-4\">
                        <div class=\"navbar-brand\">
                            <a href=\"{{path('commande_stat') }}\"><img src=\"{{ asset('uploads/images/newlogo.png') }}\" width=\"75\" alt=\"Aero\"><span class=\"m-l-10\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-sm-8\">
                        <div class=\"header-content d-flex justify-content-end\">
                            <div class=\"search-wrapper\">
                                <a href=\"#\"><span class=\"icon icon-Search\"></span></a>
                                <form action=\"https://naturecircle.myshopify.com/search\" method=\"get\" class=\"search-form\" role=\"search\">
                                    <input type=\"search\" name=\"q\" value=\"\" placeholder=\"Search our store\"  aria-label=\"Search our store\">
                                    <button type=\"submit\" class=\"btn icon-fallback-text\">
                                        <span class=\"fallback-text\">Search</span>
                                    </button>
                                </form>


                            </div>
                            <div class=\"settings-wrapper\">
                                <a href=\"#\"><i class=\"icon icon-Settings\"></i></a>
                                <div class=\"settings-content\">
                                    <h4>My Account <i class=\"fa fa-angle-down\"></i></h4>
                                    <ul>
                                        <li><a href=\"register.html\" class=\"modal-view button\" data-toggle=\"modal\" data-target=\"#register_box\">Register</a></li>
                                        <li>

                                            <a href=\"login.html\">Login</a>

                                        </li>
                                    </ul><div class=\"switcher-currency-trigger currency\">
                                        <h4>Currency: <span class=\"current-currency\">USD</span> <i class=\"fa fa-angle-down\"></i></h4>

                                        <ul class=\"switcher-dropdown\" id=\"currencies\">




                                            <li data-currency=\"USD\" class=\"currency__item\"><a style=\"cursor: pointer\">USD - US Dollar</a></li>




                                            <li data-currency=\"EUR\" class=\"currency__item\"><a style=\"cursor: pointer\">EUR - Euro</a></li>




                                            <li data-currency=\"GBP\" class=\"currency__item\"><a style=\"cursor: pointer\">GBP - British Pound</a></li>




                                            <li data-currency=\"INR\" class=\"currency__item\"><a style=\"cursor: pointer\">INR - Indian Rupee</a></li>




                                            <li data-currency=\"BDT\" class=\"currency__item\"><a style=\"cursor: pointer\">BDT - Bangladesh Taka</a></li>




                                            <li data-currency=\"JPY\" class=\"currency__item\"><a style=\"cursor: pointer\">JPY - Japan Yen</a></li>




                                            <li data-currency=\"CAD\" class=\"currency__item\"><a style=\"cursor: pointer\">CAD - Canada Dollar</a></li>




                                            <li data-currency=\"AUD\" class=\"currency__item\"><a style=\"cursor: pointer\">AUD - Australian Dollar</a></li>

                                        </ul>
                                    </div></div>
                            </div>
                            <div class=\"cart-wrapper\">


                                <a href=\"../cart.html\">
                                    <i class=\"icon icon-FullShoppingCart\"></i>
                                    <span class=\"bigcounter\">0</span>
                                </a>

                                <div class=\"cart-empty-title\"  style=\"display:block;\">
                                    <h3>Your cart is currently empty.</h3>
                                </div>
                                <div class=\"cart-item-wrapper\"  style=\"display:none;\">
                                    <div class=\"single-cart-item-area\">

                                    </div>
                                    <div class=\"cart-price-total\">
                                        <div class=\"cart-price-info d-flex justify-content-between\">
                                            <span class=\"total\">Total :</span>
                                            <span class=\"shopping-cart__total\"><span class=money>\$0.00</span></span>
                                        </div>
                                    </div>
                                    <div class=\"cart-links\">
                                        <a href=\"../cart.html\">View Cart</a>
                                        <a href=\"../checkout.html\">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Area End -->
            <!-- Mobile Menu Area Start -->
            <div class=\"mobile-menu-area\">
                <div class=\"mobile-menu container\">
                    <nav id=\"mobile-menu-active\">
                        <ul class=\"menu-overflow\">

                            <li><a href=\"{{ path(\"produit_indexfront\" ) }}\">Home <i class=\"fa fa-angle-down\"></i></a>

                            </li>

                            <li><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
                                <ul class=\"\">





                                </ul>
                            </li>


                        </ul>
                    </nav>

                    <script>
                        \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
                        \$('.submenu-li').parent('ul').addClass('sub-menu');
                    </script>

                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End -->



        <style>
            .theme-logo img{
                max-width: 160px;
            }
        </style>

    </div>
    <!-- Breadcrumb Area Start -->

    <div class=\"breadcrumbs-section\">
        <div class=\"breadcrumb-area text-center breadcrumbs overlay-bg\">
            <div class=\"container breadcrumbs-inner\">
                <h1>Account</h1>

                <nav class=\"\" role=\"navigation\" aria-label=\"breadcrumbs\">
                    <ul class=\"breadcrumb\">

                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ path(\"produit_indexfront\" ) }}\">Home</a>
                        </li>
                        <li class=\"breadcrumb-item\">
                            <span>Account</span>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}


    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}
    <!-- Breadcrumb Area End -->
    {% block fos_user_content %}
    <main>
        <div class=\"customer-page theme-default-margin\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3 col-md-8 offset-md-2\">
                        <div class=\"login\">
                            <div id=\"CustomerLoginForm\">
                                <div class=\"login-text\">
                                    <h2>Login</h2><p>Please login using account detail bellow.</p>
                                </div>

                                <form  accept-charset=\"UTF-8\" action=\"/pepiniere/web/app_dev.php/\" >
                                    <div class=\"login-form-container\">
                                        <div class=\"login-form\">
                                            <input type=\"email\" name=\"customer[email]\" id=\"CustomerEmail\" class=\"input-full\" placeholder=\"Email\" autocorrect=\"off\" autocapitalize=\"off\" autofocus>

                                            <input type=\"password\" value=\"\" name=\"customer[password]\" id=\"CustomerPassword\" class=\"input-full\" placeholder=\"Password\">

                                            <div class=\"login-toggle-btn\">
                                                <div class=\"form-action-button\">
                                                    <button type=\"submit\" class=\"theme-default-button\">Sign In</button>
                                                    <a href=\"#recover\" id=\"RecoverPassword\">Forgot your password?</a>
                                                </div>
                                                <div class=\"account-optional-action\">
                                                    <a href=\"register.html\" id=\"customer_register_link\">Create account</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id=\"RecoverPasswordForm\" style=\"display: none;\">
                                <form method=\"post\" action=\"https://naturecircle.myshopify.com/account/recover\" accept-charset=\"UTF-8\"><input type=\"hidden\" name=\"form_type\" value=\"recover_customer_password\" /><input type=\"hidden\" name=\"utf8\" value=\"✓\" />

                                    <div class=\"login-form-container\">
                                        <div class=\"login-text\">
                                            <h2>Reset your password</h2>
                                            <p>We will send you an email to reset your password.</p>
                                        </div>
                                        <div class=\"login-form\">
                                            <input type=\"email\" value=\"\" name=\"email\" id=\"RecoverEmail\" class=\"input-full\" placeholder=\"Email\" autocorrect=\"off\" autocapitalize=\"off\">
                                            <div class=\"login-toggle-btn\">
                                                <div class=\"form-action-button\">
                                                    <button type=\"submit\" class=\"theme-default-button\">Submit</button>
                                                    <a href=\"#\" id=\"HideRecoverPasswordLink\">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    {% endblock fos_user_content %}

    <div id=\"shopify-section-footer\" class=\"shopify-section\"><!-- Footer Area Start -->
        <footer class=\"footer-area\">
            <!-- Footer Top Area Start -->
            <div class=\"footer-top bg-4 pt-120 pb-120\">

                <!-- Newsletter Area Start -->

                <div class=\"newsletter-area\">
                    <div class=\"container text-center\">
                        <div class=\"newsletter-container\">


                            <h2>Subscribe Newsletter.</h2>


                            <p>Get e-mail updates about our latest shop and special offers.</p>


                            <div class=\"newsletter-form mc_embed_signup\">
                                <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate newsletter-form validate\" target=\"_blank\" novalidate>
                                    <div id=\"mc_embed_signup_scroll\" class=\"mc-form\">
                                        <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter you email address here...\" required>
                                        <button id=\"mc-embedded-subscribe\" type=\"submit\" name=\"subscribe\" class=\"default-btn\">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class=\"social-icon\">

                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-google\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>


                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>




                        </div>

                    </div>
                </div>

                <!-- Newsletter Area End -->

                <!-- Service Area Start -->

                <div class=\"service-area pt-50\">
                    <div class=\"container\">
                        <div class=\"service-container\">
                            <div class=\"service-content\">
                                <div class=\"row\">


                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/rocketf589.png?v=1546506966') }}\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Free delivery</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/moneyb16a.png?v=1546506976') }}\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Money Guarantee</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>



                                    <div class=\"col-lg-4 col-md-4\">
                                        <div class=\"single-service\">
                                            <div class=\"service-image\">
                                                <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/support1059.png?v=1546506984') }}\" alt=\"\">
                                            </div>
                                            <div class=\"service-text\">

                                                <h3>Online Support</h3>


                                                <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                                            </div>
                                        </div>
                                    </div>










                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service Area End -->

                <!-- Footer Widget Area Start -->

                <div class=\"footer-widget-area\">
                    <div class=\"container\">
                        <div class=\"row\">








                            <div class=\"col-lg-4 col-md-6\">
                                <div class=\"single-footer-widget\">

                                    <div class=\"footer-logo\">
                                        <a href=\"../index.html\">
                                            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_02304f19-13a6-4b93-9218-6e0d0370aa5acec6.png?v=1546506822') }}\" alt=\"\">
                                        </a>
                                    </div>


                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

                                    <div class=\"footer-text\">

                <span>

                  <i class=\"icon icon-Pointer\"></i>

                  Contact info: 169-C, Technohub, Dubai Silicon Oasis.
                </span>


                                        <span>

                  <i class=\"icon icon-Phone\"></i>

                  Telephone: 169-C, Technohub, Dubai Silicon Oasis.
                </span>


                                        <span>

                  <i class=\"icon icon-Mail\"></i>

                  Email: Support@example.com
                </span>

                                    </div>
                                </div>
                            </div>



                            <div class=\"col-lg-2 col-md-3\">
                                <div class=\"single-footer-widget\">

                                    <h3>Products</h3>

                                    <ul class=\"footer-widget-list\">


                                        <li><a href=\"#\">Prices drop</a></li>

                                        <li><a href=\"#\">New products</a></li>

                                        <li><a href=\"#\">Best sales</a></li>

                                        <li><a href=\"#\">Stores</a></li>

                                        <li><a href=\"#\">Login</a></li>

                                        <li><a href=\"#\">My Account</a></li>

                                    </ul>
                                </div>
                            </div>



                            <div class=\"col-lg-2 col-md-3\">
                                <div class=\"single-footer-widget\">

                                    <h3>Our Company</h3>

                                    <ul class=\"footer-widget-list\">


                                        <li><a href=\"#\">Delivery</a></li>

                                        <li><a href=\"#\">Legal Notice</a></li>

                                        <li><a href=\"#\">Documentation</a></li>

                                        <li><a href=\"#\">Secure payment</a></li>

                                        <li><a href=\"#\">Contact us</a></li>

                                        <li><a href=\"#\">Stores</a></li>

                                    </ul>
                                </div>
                            </div>



                            <div class=\"col-lg-4\">
                                <div class=\"single-footer-widget\">

                                    <h3>Instagram</h3>

                                    <div id=\"instafeed\" class=\"instagram-image\"></div>
                                </div>
                            </div>

                            <script>
                                (function (\$) {
                                    \"use strict\";

                                    jQuery(document).ready(function(){

                                        var userFeed = new Instafeed({
                                            get: 'user',
                                            userId: '6667588161',
                                            limit: '8',
                                            accessToken: '6667588161.1677ed0.705c7b82e16f42b2898cd19e737dc53e',
                                            resolution: 'thumbnail',
                                            template: '<div class=\"single-insta-img\"><a href=\"\\{\\{link\\}\\}\" target=\"_blank\" id=\"\\{\\{id\\}\\}\"><img src=\"\\{\\{image\\}\\}\" /></a></div>'

                                        });
                                        userFeed.run();
                                    });

                                })(jQuery);

                            </script>



                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area End -->
            </div>
            <!-- Footer Top Area End -->
            <!-- Footer Bottom Area Start -->
            <div class=\"footer-bottom-area pb-20\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-flex col-md-6\">
                            <div class=\"footer-text-bottom\">
                                <p><p>Copyright &copy;&nbsp;<a href=\"#\">Naturecircle</a>. All Rights Reserved</p></p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"payment-img d-flex justify-content-end\">

                                <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/payment72c6.png?v=1546505987') }}\" alt=\"\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area End -->
        </footer>
        <!-- Footer Area End -->


        <style>
            .bg-4 {
                background-image:url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/4ecdb.jpg?v=1546506413') }});
                background-position: top center;
            }
            .bg-4 {
                background: ;
            }
            .newsletter-area {
                background-color: !important;
            }
            .footer-policy-box p i.icon {
                border: 1px solid #12a4dd;
                color: #12a4dd;
            }
            .footer-menu ul li a:hover {
                color: #12a4dd;
            }

        </style>

        <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/instafeed.mind645.js?40') }}\"></script>


    </div>

    <!-- Necessary JS -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/fastclick.mind645.js?40') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/timberd645.js?40') }}\"></script>


    <script>

    </script>
    <!-- modalAddToCart Error -->
    <div class=\"modal fade ajax-popup error-ajax-popup\" id=\"modalAddToCartError\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog white-modal modal-md\">
            <div class=\"modal-content \">
                <div class=\"modal-body\">
                    <div class=\"modal-content-text\">
                        <p class=\"error_message\"></p>
                    </div>
                    <div class=\"modal-close\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script>
        \$(function() {
            // Current Ajax request.
            var currentAjaxRequest = null;
            // Grabbing all search forms on the page, and adding a .search-results list to each.
            var searchForms = \$('form[action=\"/search\"]').css('position','relative').each(function() {
                // Grabbing text input.
                var input = \$(this).find('input[name=\"q\"]');
                // Adding a list for showing search results.
                var offSet = input.position().top + input.innerHeight();
                \$('<ul class=\"search-results home-two\"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo(\$(this)).hide();
                // Listening to keyup and change on the text field within these search forms.
                input.attr('autocomplete', 'off').bind('keyup change', function() {
                    // What's the search term?
                    var term = \$(this).val();
                    // What's the search form?
                    var form = \$(this).closest('form');
                    // What's the search URL?
                    var searchURL = '/search?type=product&q=' + term;
                    // What's the search results list?
                    var resultsList = form.find('.search-results');
                    // If that's a new term and it contains at least 3 characters.
                    if (term.length > 3 && term != \$(this).attr('data-old-term')) {
                        // Saving old query.
                        \$(this).attr('data-old-term', term);
                        // Killing any Ajax request that's currently being processed.
                        if (currentAjaxRequest != null) currentAjaxRequest.abort();
                        // Pulling results.
                        currentAjaxRequest = \$.getJSON(searchURL + '&view=json', function(data) {
                            // Reset results.
                            resultsList.empty();
                            // If we have no results.
                            if(data.results_count == 0) {
                                // resultsList.html('<li><span class=\"title\">No results.</span></li>');
                                // resultsList.fadeIn(100);
                                resultsList.hide();
                            } else {
                                // If we have results.
                                \$.each(data.results, function(index, item) {
                                    var link = \$('<a></a>').attr('href', item.url);
                                    link.append('<span class=\"thumbnail\"><img src=\"' + item.thumbnail + '\" /></span>');
                                    link.append('<span class=\"title\">' + item.title + '</span>');
                                    link.wrap('<li></li>');
                                    resultsList.append(link.parent());
                                });
                                // The Ajax request will return at the most 10 results.
                                // If there are more than 10, let's link to the search results page.
                                if(data.results_count > 10) {
                                    resultsList.append('<li><span class=\"title\"><a href=\"' + searchURL + '\">See all results (' + data.results_count + ')</a></span></li>');
                                }
                                resultsList.fadeIn(100);
                            }
                        });
                    }
                });
            });
            // Clicking outside makes the results disappear.
            \$('body').bind('click', function(){
                \$('.search-results').hide();
            });
        });
    </script>

    <!-- Some styles to get you started. -->
    <style>
        .search-results {
            z-index: 8889;
            list-style-type: none;
            width: 190px;
            margin: 0;
            padding: 0;
            background: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 0px;
            -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
            box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .search-results li {
            display: block;
            width: 100%;
            height: 38px;
            margin: 0;
            padding: 0;
            border-top: 1px solid #cccccc;
            line-height: 38px;
            overflow: hidden;
        }
        .search-results li:first-child {
            border-top: none;
        }
        .search-results .title {
            float: left;
            width: 140px;
            padding-left: 8px;
            white-space: nowrap;
            overflow: hidden;
            /* The text-overflow property is supported in all major browsers. */
            text-overflow: ellipsis;
            -o-text-overflow: ellipsis;
            text-align: left;
            font-size:12px;
            line-height:38px;
            color:#515151;
        }
        .search-results .title:hover{
            color:#CE9634;
        }
        .search-results .thumbnail {
            float: left;
            display: block;
            width: 32px;
            height: 32px;
            margin: 3px 0 3px 3px;
            padding: 0;
            text-align: center;
            overflow: hidden;
            border-radius:0px;
        }
    </style>

    <div class=\"modal fade productModal\" id=\"quickViewModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"qwick-view-left\">
                                <div class=\"quick-view-learg-img\">
                                    <div class=\"quick-view-tab-content tab-content\">
                                        <div class=\"product-main-image__item\">
                                            <div class=\"img_box_1\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-12\">
                            <div class=\"qwick-view-right\">
                                <div class=\"qwick-view-content\">
                                    <h1 class=\"product_title\">FROM_JS</h1>
                                    <div class=\"product-price product-info__price price-part\">
                                        <span class=\"main\">jsprice</span>
                                        <span class=\"price-box__new\">jsprice</span>
                                    </div>
                                    <div class=\"product-rating spr-badge-caption-none\">
                                        <div class=\"quick-view-rating rating\">FROM_JS</div>
                                    </div>

                                    <div class=\"short-description product-des\">FROM_JS</div>

                                    <form id=\"add-item-qv\" action=\"https://naturecircle.myshopify.com/cart/add\" method=\"post\">
                                        <div class=\"quick-view-select variants select-option-part\"></div>
                                        <div class=\"quickview-plus-minus\">
                                            <div class=\"cart-plus-minus\">
                                                <input type=\"text\" value=\"01\" name=\"quantity\" class=\"cart-plus-minus-box\">
                                            </div>
                                            <div class=\"quickview-btn-cart\">
                                                <button type=\"submit\" class=\"addtocartqv theme-default-button\">Add to cart</button>
                                            </div>
                                        </div>
                                        <script>
                                            jQuery('.addtocartqv').click(function(e) {
                                                e.preventDefault();
                                                Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span class=\"close-icon\" aria-hidden=\"true\">x</span>
                    </button>
                </div>
            </div>
        </div>
    </div>





    <div class=\"quickViewModal_info\" style=\"display: none;\">
        <div class=\"button\">Add to cart</div>
        <div class=\"button_added\">Added</div>
        <div class=\"button_error\">Limit Products</div>
        <div class=\"button_wait\">Wait..</div>
    </div>




    <script>
        var mainImage = '';
        jQuery(function (\$) {

            quiqview = function(product_handle) {
                Shopify.getProduct(product_handle);
            }
            Shopify.onProduct = function(product) {
                \$('.viewfullinfo').attr('href', product.url);

                // product description without shortcode
                text_truncate = function(str, length, ending) {
                    if (length == null) {
                        length = 500;
                    }
                    if (ending == null) {
                        ending = '...';
                    }
                    if (str.length > length) {
                        return str.substring(0, length - ending.length) + ending;
                    } else {
                        return str;
                    }
                };

                var _parent = '#quickViewModal';
                \$(_parent+' .product_title').text(product.title);



                // product rating
                \$(_parent+' .rating').empty();
                \$(_parent+' .rating').append(\"<span class=\\\"shopify-product-reviews-badge\\\" data-id=\\\"\"+product.id+\"\\\"></span>\");


                //check variants
                var variant = '';

                for (i = 0; i < product.variants.length; i++) {
                    if(product.variants[i].inventory_quantity > 0) {
                        variant = product.variants[i];
                        break;
                    }
                }

                if(variant == '') {
                    for (i = 0; i < product.variants.length; i++) {
                        if(product.variants[i].inventory_policy == \"continue\") {
                            variant = product.variants[i];
                            break;
                        }
                    }
                    if(variant == '') {
                        variant = product.variants[0];
                    }
                }

                mainImage = product.featured_image;
                var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
                var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
                jQuery(_parent+' .product-main-image__item .img_box_1').empty();
                jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
                jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

                // product description with shortcode
                var desc = product.description;
                if (desc.indexOf(\"[short_description]\") >= 0) {
                    desc = desc.split(\"[short_description]\");
                    desc = desc[1].split(\"[/short_description]\");
                    \$(_parent+' .product-des').show();
                    \$(_parent+' .product-des').html(desc[0]);
                }
                else {
                    \$(_parent+' .product-des').html(text_truncate(product.description,250));
                }

                //set variants property
                var inv_qua = variant.inventory_quantity;
                //price

                // Variants select
                if(product.variants.length > 1) {
                    var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

                    var select = '<select id=\"product-select-qv\" name=\"id\">';
                    var selected = 'selected';
                    for (i = 0; i < product.variants.length; i++) {
                        var _var = product.variants[i];

                    }
                    select += '</select>';

                    var variant_select = '<div class=\"variants_selects ' + variants_margin + '\">';
                    variant_select += select;
                    variant_select += '</div><div class=\"divider divider--sm\"></div>';
                    select = variant_select;
                }
                else {
                    var select = '<input type=\"hidden\" name=\"id\" value=\"' + product.variants[0].id + '\" />';
                }
                \$('.variants').empty();
                \$('.variants').html(select);

                //parametres
                setParametresText(_parent+' .product-sku', variant.sku);
                if(jQuery(_parent + ' .product-sku').length) {
                    var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                    if(variant.sku != \"\") {
                        if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                    } else {
                        if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                    }
                }

                //quantity
                var out_of_stock = false;
                if(variant.inventory_management) {
                    if(inv_qua > 0) {
                        \$(_parent+' .product-availability').text(inv_qua + \" In Stock\");
                    }
                    else {
                        out_of_stock = true;
                        \$(_parent+' .product-availability').text(\"In Stock\");
                    }
                }
                else {
                    \$(_parent+' .product-availability').text(\"Many in stock\");
                }

                // button
                if(!out_of_stock || variant.inventory_policy == \"continue\") {
                    \$('.product-available').show();
                    \$('.product-disable').hide();
                    \$('.addtocartqv').attr('id', product.id );
                }
                else {
                    \$('.product-available').hide();
                    \$('.product-disable').show();
                }

                if (product.available && product.variants.length > 1) {
                    new Shopify.OptionSelectors(\"product-select-qv\", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });

                    if(\$('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                        \$.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                            \$(this).find('label').text(product.options[index].name);
                        });
                    }
                }
                else {
                    jQuery('.currency .active').trigger('click');
                }
                selectGrid(_parent);

                if(\$(\".spr-badge\").length > 0) {
                    \$.getScript(window.location.protocol + \"//productreviews.shopifycdn.com/assets/v4/spr.js\");
                }

                if(\$(\".selector-wrapper label\").length) {
                    \$(\".selector-wrapper label\").each(function( index ) {
                        \$(this).text(jQuery(this).text() + \":\");
                    });
                }

                \$(_parent).modal('show');

                if( !( 'ontouchstart' in window ) &&
                    !navigator.msMaxTouchPoints &&
                    !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

                \$j('body').css(\"top\", -\$j('body').scrollTop());
                \$j('body').addClass(\"no-scroll\");
                \$j('.close').click(function(){
                    var top = parseInt(\$j('body').css(\"top\").replace(\"px\", \"\"))*-1;
                    \$j('body').removeAttr(\"style\");
                    \$j('body').removeClass(\"no-scroll\");
                    \$j('body').scrollTop(top);
                });
            }

            function setParametresText(obj, value) {
                if(value != '') {
                    \$(obj).parent().show();
                    \$(obj).text(value);
                }
                else {
                    \$(obj).parent().hide();
                }
            }



        });



        var selectCallbackQv = function(variant, selector) {

            var _parent = '#quickViewModal';
            var _parentprice = _parent + ' .price-part';
            if (!variant) {
                jQuery(_parent + \" .price-box\").hide();
                jQuery(_parent + \" .qwt\").hide();
                jQuery(_parent + \" .control-console\").hide();
                jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                jQuery(_parent + ' .addtocartqv').text('Unavailable');
                return false;
            }

            jQuery(_parent + \" .price-box\").show();
            jQuery(_parent + \" .qwt\").show();
            jQuery(_parent + \" .control-console\").show();

            if(variant.price < variant.compare_at_price){
                jQuery(_parentprice + ' .main').addClass('price-box__old');
                jQuery(_parentprice + ' .price-box__new').show();
                changePriceValue(_parentprice + ' .main', variant.compare_at_price);
                changePriceValue(_parentprice + ' .price-box__new', variant.price);
            } else {
                jQuery(_parentprice + ' .price-box__new').hide();
                jQuery(_parentprice + ' .main').removeClass('price-box__old');
                changePriceValue(_parentprice + ' .main', variant.price);
            }

            newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

            if(jQuery(_parent + ' .product-sku').length) {
                var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                if(variant.sku != \"\") {
                    if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                } else {
                    if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                }
            }

            if (variant.available) {
                if (variant.inventory_management == null) {
                    jQuery(_parent + \" .product-availability\").text(\"Many in stock\");
                } else {
                    jQuery(_parent + \" .product-availability\").text(\" Many in stock\");
                }
            } else {
                jQuery(_parent + \" .product-availability\").text(\"Sold Out\");
            }

            var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
            var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
            if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
                var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
                jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
            }
            jQuery(_parent+' .product-main-image__item .img_box_1').empty();
            jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);

            if (variant && variant.available) {
                jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
                jQuery(_parent + ' .addtocartqv').html('Add to Cart');
                jQuery(_parent + \" .control-console\").show();
            } else {
                jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                jQuery(_parent + ' .addtocartqv').text('Unavailable');
                jQuery(_parent + \" .control-console\").hide();
            }

            jQuery('.currency .active').trigger('click');
        };



        function newVariantTextDataQv (obj, value) {
            if(value != '') {
                jQuery(obj).parent().show();
                jQuery(obj).text(value);
            }
            else {
                jQuery(obj).parent().hide();
            }
        };


        function selectGrid(_parent) {
            setTimeout(timeout, 5);
            function timeout() {
                if(jQuery(_parent + \" .selector-wrapper\").length > 2){
                    jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                } else if(jQuery(_parent + \" .selector-wrapper\").length == 1){
                    jQuery(_parent + \" .single-option-selector\").before(\"<label></label>\");
                    jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                }
            }
        };
    </script>

    <!-- END QUICKVIEW PRODUCT -->

    <script>
        \$(\".cart-plus-minus\").prepend('<div class=\"dec qtybutton\">-</div>');
        \$(\".cart-plus-minus\").append('<div class=\"inc qtybutton\">+</div>');
        \$(\".qtybutton\").on(\"click\", function() {
            var \$button = \$(this);
            var oldValue = \$button.parent().find(\"input\").val();
            if (\$button.text() == \"+\") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            \$button.parent().find(\"input\").val(newVal);
        });
    </script>
    <script>
        \$('.ajax-spin-cart').on('click', function() {
            \$(this).addClass('loading add-item');
            setTimeout(function () {
                \$('.ajax-spin-cart').removeClass('loading');
            },1000);
            setTimeout(function () {
                \$('.ajax-spin-cart').removeClass(\"add-item\");
            },2000);

        });
    </script>

    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/wishlistd645.js?40') }}\"></script>
    <script>
        /* Ajax Wishlist */
        \$(\".action-wishlist\").on('click', function(){
            \$(this).addClass(\"loading-wishlist adding-wishlist\");
            setTimeout(function () {
                \$(\".action-wishlist\").removeClass(\"loading-wishlist\");
            },1000);
            setTimeout(function () {
                \$(\".adding-wishlist\").removeClass(\"adding-wishlist\");
            },2000);

        });

        (function() {
            Wishlist.init();
        }());
    </script><!-- Recently Viewed Products --><script src=\"{{ asset('assetsfront/cdn.shopify.com/s/javascripts/currencies.js') }}\"></script>
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/3/assets/jquery.currencies.mind645.js?40') }}\"></script>

    <script>

        // Pick your format here:
        // money_format or money_with_currency_format
        Currency.format = 'money_format';

        var shopCurrency = 'USD';


        var cookieCurrency;
        try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

        // Fix for customer account pages.
        jQuery('span.money span.money').each(function() {
            jQuery(this).parents('span.money').removeClass('money');
        });

        // Saving the current price.
        jQuery('span.money').each(function() {
            jQuery(this).attr('data-currency-USD', jQuery(this).html());
        });

        // Select all your currencies buttons.
        var buttons = jQuery('.currency li');

        // If there's no cookie or it's the shop currency.
        if (cookieCurrency == null || cookieCurrency === shopCurrency) {
            buttons.removeClass('active');
            jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
            Currency.currentCurrency = shopCurrency;
            jQuery(\".current-currency\").text(shopCurrency);
        }
        else {
            Currency.convertAll(shopCurrency, cookieCurrency);
            buttons.removeClass('active');
            jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
            jQuery(\".current-currency\").text(cookieCurrency);
        }

        // When customer clicks on a currency button.
        buttons.click(function() {
            buttons.removeClass('active');
            var cur = jQuery(this).attr('data-currency');
            jQuery( \".currency li[data-currency='\" + cur + \"']\" ).addClass('active');

            var newCurrency =  jQuery(this).attr('data-currency');
            if(newCurrency == Currency.currentCurrency)
            {
                Currency.convertAll(shopCurrency, newCurrency);
            }
            else
            {
                Currency.convertAll(Currency.currentCurrency, newCurrency);
            }

            jQuery(\".current-currency\").text(cur);
        });

        // For product options.
        var main_selectCallback = window.selectCallback;
        var selectCallback = function(variant, selector) {
            main_selectCallback(variant, selector);
            Currency.convertAll(shopCurrency, jQuery(\".currency .active\").attr('data-currency'));
        };
    </script><script>
        \$('[data-countdown]').each(function() {
            var \$this = \$(this), finalDate = \$(this).data('countdown');
            \$this.countdown(finalDate, function(event) {
                \$this.html(event.strftime('<div class=\"countdown-area\"><div class=\"single-countdown\"><div class=\"count-number\">%D</div><div class=\"count-title\">days</div></div><div class=\"single-countdown\"><div class=\"count-number\">%H</div><div class=\"count-title\">Hour</div></div><div class=\"single-countdown\"><div class=\"count-number\">%M</div><div class=\"count-title\">Mint</div></div><div class=\"single-countdown\"><div class=\"count-number\">%S</div><div class=\"count-title\">Sec</div></div></div>'));
            });
        });
    </script>

</div>

</body>

<!-- Mirrored from naturecircle.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:27:29 GMT -->
</html>
", "login.html.twig", "C:\\wamp64\\www\\final_pepiniere\\app\\Resources\\views\\login.html.twig");
    }
}
