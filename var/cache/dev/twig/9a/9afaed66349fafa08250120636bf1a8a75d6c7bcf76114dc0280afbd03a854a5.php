<?php

/* baseback.html.twig */
class __TwigTemplate_3ef3d99f8c4b276b4a0777aecf6eeadc31017c78d402f5c39f6c9207211d2a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'titre' => [$this, 'block_titre'],
            'left' => [$this, 'block_left'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
";
        // line 32
        $this->displayBlock('left', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 440
        echo "



";
        // line 444
        $this->displayBlock('footer', $context, $blocks);
        // line 446
        $this->displayBlock('js', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <!doctype html>
<html class=\"no-js \" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">
    ";
        // line 9
        $this->displayBlock('titre', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"> <!-- Favicon-->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/charts-c3/plugin.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/morrisjs/morris.min.css"), "html", null, true);
        echo "\" />
    <!-- Custom Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\"/>
    <!-- Bootstrap Select Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-select/css/bootstrap-select.css"), "html", null, true);
        echo "\" />
    <!-- noUISlider Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/nouislider/nouislider.min.css"), "html", null, true);
        echo "\" />
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.css"), "html", null, true);
        echo "\" />
    <!-- Multi Select Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multi-select/css/multi-select.css"), "html", null, true);
        echo "\"/>
    <!-- JQuery DataTable Css -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\"/>
</head>
<body class=\"theme-blush\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "  <title>:: SunFlower Admin :: Home</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_left($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        // line 33
        echo "    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <div class=\"navbar-brand\">
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_stat");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/newlogo.png"), "html", null, true);
        echo "\" width=\"75\" alt=\"Aero\"><span class=\"m-l-10\">SunFlower</span></a>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li>
                    <div class=\"user-info\">
                        <a class=\"image\" href=\"\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profile_av.jpg"), "html", null, true);
        echo "\" alt=\"User\"></a>
                        <div class=\"detail\">
                            <h4>Admin</h4>
                            ";
        // line 46
        echo "                        </div>
                    </div>
                </li>

                <li class=\"active open\"><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_stat");
        echo "\"><i class=\"zmdi zmdi-home\"></i><span>Accueil</span></a></li>

                <li> <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_index");
        echo "\" ><i class=\"zmdi zmdi-assignment\"></i><span>Produits</span></a>
                </li>

                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_index");
        echo "\" ><i class=\"zmdi zmdi-shopping-cart\"></i><span>Ecommerce</span></a>

                </li>

                <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_index");
        echo "\" ><i class=\"zmdi zmdi-label-heart\"></i><span>Coupon</span></a>

                </li>
                <li> <a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sujet_index");
        echo "\" ><i class=\"zmdi zmdi-blogger\"></i><span>Forum</span></a>

                </li>
                <li> <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("promotion_index");
        echo "\" ><i class=\"zmdi zmdi-blogger\"></i><span>Promotion</span></a>

                </li>

                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_index");
        echo "\" ><i class=\"zmdi zmdi-assignment\"></i><span>Evenement</span></a>

                </li>
                <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_index");
        echo "\"><i class=\"zmdi zmdi-flower\"></i><span>Service</span></a>
                </li>

                <li><a href=\"\" ><i class=\"zmdi zmdi-swap-alt\"></i><span>Reclamation</span></a>

                </li>

                <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                        <i class=\"zmdi zmdi-power\"> ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
        echo "
                      </i>
                    </a></li>


            </ul>
        </div>
    </aside>

<!-- Main Content -->

<section class=\"content\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "    <div class=\"\">
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    <h2>Dashboard</h2>
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Aero</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard 1</li>
                    </ul>
                    <button class=\"btn btn-primary btn-icon mobile_menu\" type=\"button\"><i class=\"zmdi zmdi-sort-amount-desc\"></i></button>
                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <button class=\"btn btn-primary btn-icon float-right right_icon_toggle_btn\" type=\"button\"><i class=\"zmdi zmdi-arrow-right\"></i></button>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon traffic\">
                        <div class=\"body\">
                            <h6>Traffic</h6>
                            <h2>20 <small class=\"info\">of 1Tb</small></h2>
                            <small>2% higher than last month</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-amber\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon sales\">
                        <div class=\"body\">
                            <h6>Sales</h6>
                            <h2>12% <small class=\"info\">of 100</small></h2>
                            <small>6% higher than last month</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-blue\" role=\"progressbar\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 38%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon email\">
                        <div class=\"body\">
                            <h6>Email</h6>
                            <h2>39 <small class=\"info\">of 100</small></h2>
                            <small>Total Registered email</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-purple\" role=\"progressbar\" aria-valuenow=\"39\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 39%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon domains\">
                        <div class=\"body\">
                            <h6>Domains</h6>
                            <h2>8 <small class=\"info\">of 10</small></h2>
                            <small>Total Registered Domain</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-green\" role=\"progressbar\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 89%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong><i class=\"zmdi zmdi-chart\"></i> Sales</strong> Report</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body mb-2\">
                            <div class=\"row clearfix\">
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>2,365</h5>
                                                <span><i class=\"zmdi zmdi-balance\"></i> Revenue</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#868e96\">5,2,3,7,6,4,8,1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>365</h5>
                                                <span><i class=\"zmdi zmdi-turning-sign\"></i> Returns</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#2bcbba\">8,2,6,5,1,4,4,3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>65</h5>
                                                <span><i class=\"zmdi zmdi-alert-circle-o\"></i> Queries</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#82c885\">4,4,3,9,2,1,5,7</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>2,055</h5>
                                                <span><i class=\"zmdi zmdi-print\"></i> Invoices</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#45aaf2\">7,5,3,8,4,6,2,9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"body\">
                            <div id=\"chart-area-spline-sracked\" class=\"c3_chart d_sales\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card mcard_4\">
                        <div class=\"body\">
                            <div class=\"img\">
                                <img src=\"assets/images/lg/avatar1.jpg\" class=\"rounded-circle\" alt=\"profile-image\">
                            </div>
                            <div class=\"user\">
                                <h5 class=\"mt-3 mb-1\">Eliana Smith</h5>
                                <small class=\"text-muted\">UI/UX Desiger</small>
                            </div>
                            <ul class=\"list-unstyled social-links\">
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-dribbble\"></i></a></li>
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-behance\"></i></a></li>
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card w_data_1\">
                        <div class=\"body\">
                            <div class=\"w_icon pink\"><i class=\"zmdi zmdi-bug\"></i></div>
                            <h4 class=\"mt-3 mb-0\">12.1k</h4>
                            <span class=\"text-muted\">Bugs Fixed</span>
                            <div class=\"w_description text-success\">
                                <i class=\"zmdi zmdi-trending-up\"></i>
                                <span>15.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"card w_data_1\">
                        <div class=\"body\">
                            <div class=\"w_icon cyan\"><i class=\"zmdi zmdi-ticket-star\"></i></div>
                            <h4 class=\"mt-3 mb-1\">01.8k</h4>
                            <span class=\"text-muted\">Submitted Tickers</span>
                            <div class=\"w_description text-success\">
                                <i class=\"zmdi zmdi-trending-up\"></i>
                                <span>95.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <div class=\"chat-widget\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar3.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Frank 11:00AM</small></li>
                                            <li><span class=\"message bg-blue\">Hello, Michael</span></li>
                                            <li><span class=\"message bg-blue\">How are you!</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:10AM</small></li>
                                            <li><span class=\"message\">Hello, Frank</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:11AM</small></li>
                                            <li><span class=\"message\">I'm fine what about you?</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar2.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Gary 11:13AM</small></li>
                                            <li><span class=\"message bg-indigo\">Hello, Michael and Frank</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar5.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Hossein 11:14AM</small></li>
                                            <li><span class=\"message bg-amber\">Hello, team</span></li>
                                            <li><span class=\"message bg-amber\">Please let me know your requirements.</span></li>
                                            <li><span class=\"message bg-amber\">How would like to connect with us?</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:15AM</small></li>
                                            <li><span class=\"message\">Hello, Hossein</span></li>
                                            <li><span class=\"message\">Meeting on conference room at 12:00PM</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"input-group mt-3\">
                                <div class=\"input-group-prepend\">
                                    <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Add</button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Tim Hank</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Hossein Shams</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">John Smith</a>
                                    </div>
                                </div>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text here...\" aria-label=\"Text input with dropdown button\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"zmdi zmdi-mail-send\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Visitors</strong> Statistics</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Action</a></li>
                                        <li><a href=\"javascript:void(0);\">Another action</a></li>
                                        <li><a href=\"javascript:void(0);\">Something else</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <div id=\"world-map-markers\" class=\"jvector-map\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Distribution</strong></h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body text-center\">
                            <div id=\"chart-pie\" class=\"c3_chart d_distribution\"></div>
                            <button class=\"btn btn-primary mt-4 mb-4\">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Traffic</strong> Source</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6 col-sm-12\">
                                    <div id=\"chart-area-step\" class=\"c3_chart d_traffic\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                                    <span> More than 30% percent of users come from direct links. Check details page for more information.</span>
                                    <div class=\"progress mt-4\">
                                        <div class=\"progress-bar l-amber\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\"></div>
                                    </div>
                                    <div class=\"d-flex bd-highlight mt-4\">
                                        <div class=\"flex-fill bd-highlight\">
                                            <h5 class=\"mb-0\">21,521 <i class=\"zmdi zmdi-long-arrow-up\"></i></h5>
                                            <small>Today</small>
                                        </div>
                                        <div class=\"flex-fill bd-highlight\">
                                            <h5 class=\"mb-0\">%12.35 <i class=\"zmdi zmdi-long-arrow-down\"></i></h5>
                                            <small>Last month %</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 444
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 446
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 447
        echo "<!-- Jquery Core Js -->
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/libscripts.bundle.js"), "html", null, true);
        echo "\"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/vendorscripts.bundle.js"), "html", null, true);
        echo "\"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/jvectormap.bundle.js"), "html", null, true);
        echo "\"></script> <!-- JVectorMap Plugin Js -->
<script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/sparkline.bundle.js"), "html", null, true);
        echo "\"></script> <!-- Sparkline Plugin Js -->
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/c3.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/index.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"), "html", null, true);
        echo "\"></script> <!-- Input Mask Plugin Js -->
<script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\"></script> <!-- Multi Select Plugin Js -->
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/nouislider/nouislider.js"), "html", null, true);
        echo "\"></script> <!-- noUISlider Plugin Js -->
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script> <!-- Select2 Js -->
<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/forms/advanced-form-elements.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/ui/sweetalert.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/sweetalert.min.js"), "html", null, true);
        echo "\"></script> <!-- SweetAlert Plugin Js -->
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bundles/datatablescripts.bundle.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatable/buttons/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap-notify/bootstrap-notify.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap Notify Plugin Js -->
<script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/pages/ui/notifications.js"), "html", null, true);
        echo "\"></script> <!-- Custom Js -->
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseback.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  758 => 470,  754 => 469,  750 => 468,  746 => 467,  742 => 466,  738 => 465,  734 => 464,  730 => 463,  726 => 462,  722 => 461,  718 => 460,  714 => 459,  710 => 458,  706 => 457,  702 => 456,  698 => 455,  694 => 454,  690 => 453,  686 => 452,  682 => 451,  678 => 450,  674 => 449,  670 => 448,  667 => 447,  658 => 446,  641 => 444,  287 => 95,  278 => 94,  255 => 80,  251 => 79,  241 => 72,  235 => 69,  228 => 65,  222 => 62,  216 => 59,  209 => 55,  203 => 52,  198 => 50,  192 => 46,  186 => 42,  175 => 36,  170 => 33,  161 => 32,  143 => 9,  129 => 26,  124 => 24,  119 => 22,  114 => 20,  109 => 18,  104 => 16,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  82 => 10,  80 => 9,  71 => 2,  62 => 1,  52 => 446,  50 => 444,  44 => 440,  42 => 94,  39 => 93,  37 => 32,  33 => 30,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
    <!doctype html>
<html class=\"no-js \" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta name=\"description\" content=\"Responsive Bootstrap 4 and web Application ui kit.\">
    {% block titre %}  <title>:: SunFlower Admin :: Home</title>{% endblock %}
    <link rel=\"icon\" href=\"{{ asset('favicon.ico') }}\" type=\"image/x-icon\"> <!-- Favicon-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/charts-c3/plugin.css') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/morrisjs/morris.min.css') }}\" />
    <!-- Custom Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.min.css') }}\"/>
    <!-- Bootstrap Select Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}\" />
    <!-- noUISlider Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/nouislider/nouislider.min.css') }}\" />
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/select2/select2.css') }}\" />
    <!-- Multi Select Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/multi-select/css/multi-select.css') }}\"/>
    <!-- JQuery DataTable Css -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}\"/>
</head>
<body class=\"theme-blush\">
{% endblock %}
<!-- Overlay For Sidebars -->
<div class=\"overlay\"></div>
{% block left  %}
    <!-- Left Sidebar -->
    <aside id=\"leftsidebar\" class=\"sidebar\">
        <div class=\"navbar-brand\">
            <a href=\"{{path('commande_stat') }}\"><img src=\"{{ asset('uploads/images/newlogo.png') }}\" width=\"75\" alt=\"Aero\"><span class=\"m-l-10\">SunFlower</span></a>
        </div>
        <div class=\"menu\">
            <ul class=\"list\">
                <li>
                    <div class=\"user-info\">
                        <a class=\"image\" href=\"\"><img src=\"{{ asset('assets/images/profile_av.jpg') }}\" alt=\"User\"></a>
                        <div class=\"detail\">
                            <h4>Admin</h4>
                            {#<small>Admin</small>#}
                        </div>
                    </div>
                </li>

                <li class=\"active open\"><a href=\"{{path('commande_stat') }}\"><i class=\"zmdi zmdi-home\"></i><span>Accueil</span></a></li>

                <li> <a href=\"{{path('produit_index') }}\" ><i class=\"zmdi zmdi-assignment\"></i><span>Produits</span></a>
                </li>

                <li><a href=\"{{path('commande_index') }}\" ><i class=\"zmdi zmdi-shopping-cart\"></i><span>Ecommerce</span></a>

                </li>

                <li><a href=\"{{path('coupon_index') }}\" ><i class=\"zmdi zmdi-label-heart\"></i><span>Coupon</span></a>

                </li>
                <li> <a href=\"{{ path('sujet_index') }}\" ><i class=\"zmdi zmdi-blogger\"></i><span>Forum</span></a>

                </li>
                <li> <a href=\"{{ path('promotion_index') }}\" ><i class=\"zmdi zmdi-blogger\"></i><span>Promotion</span></a>

                </li>

                <li><a href=\"{{path('evenement_index') }}\" ><i class=\"zmdi zmdi-assignment\"></i><span>Evenement</span></a>

                </li>
                <li><a href=\"{{ path('service_index') }}\"><i class=\"zmdi zmdi-flower\"></i><span>Service</span></a>
                </li>

                <li><a href=\"\" ><i class=\"zmdi zmdi-swap-alt\"></i><span>Reclamation</span></a>

                </li>

                <li><a href=\"{{ path('fos_user_security_logout') }}\">
                        <i class=\"zmdi zmdi-power\"> {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                      </i>
                    </a></li>


            </ul>
        </div>
    </aside>

<!-- Main Content -->

<section class=\"content\">
    {% endblock %}

    {% block content %}
    <div class=\"\">
        <div class=\"block-header\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-6 col-sm-12\">
                    <h2>Dashboard</h2>
                    <ul class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"index.html\"><i class=\"zmdi zmdi-home\"></i> Aero</a></li>
                        <li class=\"breadcrumb-item active\">Dashboard 1</li>
                    </ul>
                    <button class=\"btn btn-primary btn-icon mobile_menu\" type=\"button\"><i class=\"zmdi zmdi-sort-amount-desc\"></i></button>
                </div>
                <div class=\"col-lg-5 col-md-6 col-sm-12\">
                    <button class=\"btn btn-primary btn-icon float-right right_icon_toggle_btn\" type=\"button\"><i class=\"zmdi zmdi-arrow-right\"></i></button>
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row clearfix\">
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon traffic\">
                        <div class=\"body\">
                            <h6>Traffic</h6>
                            <h2>20 <small class=\"info\">of 1Tb</small></h2>
                            <small>2% higher than last month</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-amber\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon sales\">
                        <div class=\"body\">
                            <h6>Sales</h6>
                            <h2>12% <small class=\"info\">of 100</small></h2>
                            <small>6% higher than last month</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-blue\" role=\"progressbar\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 38%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon email\">
                        <div class=\"body\">
                            <h6>Email</h6>
                            <h2>39 <small class=\"info\">of 100</small></h2>
                            <small>Total Registered email</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-purple\" role=\"progressbar\" aria-valuenow=\"39\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 39%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-12\">
                    <div class=\"card widget_2 big_icon domains\">
                        <div class=\"body\">
                            <h6>Domains</h6>
                            <h2>8 <small class=\"info\">of 10</small></h2>
                            <small>Total Registered Domain</small>
                            <div class=\"progress\">
                                <div class=\"progress-bar l-green\" role=\"progressbar\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 89%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong><i class=\"zmdi zmdi-chart\"></i> Sales</strong> Report</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body mb-2\">
                            <div class=\"row clearfix\">
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>2,365</h5>
                                                <span><i class=\"zmdi zmdi-balance\"></i> Revenue</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#868e96\">5,2,3,7,6,4,8,1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>365</h5>
                                                <span><i class=\"zmdi zmdi-turning-sign\"></i> Returns</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#2bcbba\">8,2,6,5,1,4,4,3</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>65</h5>
                                                <span><i class=\"zmdi zmdi-alert-circle-o\"></i> Queries</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#82c885\">4,4,3,9,2,1,5,7</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                    <div class=\"state_w1 mb-1 mt-1\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div>
                                                <h5>2,055</h5>
                                                <span><i class=\"zmdi zmdi-print\"></i> Invoices</span>
                                            </div>
                                            <div class=\"sparkline\" data-type=\"bar\" data-width=\"97%\" data-height=\"55px\" data-bar-Width=\"3\" data-bar-Spacing=\"5\" data-bar-Color=\"#45aaf2\">7,5,3,8,4,6,2,9</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"body\">
                            <div id=\"chart-area-spline-sracked\" class=\"c3_chart d_sales\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card mcard_4\">
                        <div class=\"body\">
                            <div class=\"img\">
                                <img src=\"assets/images/lg/avatar1.jpg\" class=\"rounded-circle\" alt=\"profile-image\">
                            </div>
                            <div class=\"user\">
                                <h5 class=\"mt-3 mb-1\">Eliana Smith</h5>
                                <small class=\"text-muted\">UI/UX Desiger</small>
                            </div>
                            <ul class=\"list-unstyled social-links\">
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-dribbble\"></i></a></li>
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-behance\"></i></a></li>
                                <li><a href=\"javascript:void(0);\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"card w_data_1\">
                        <div class=\"body\">
                            <div class=\"w_icon pink\"><i class=\"zmdi zmdi-bug\"></i></div>
                            <h4 class=\"mt-3 mb-0\">12.1k</h4>
                            <span class=\"text-muted\">Bugs Fixed</span>
                            <div class=\"w_description text-success\">
                                <i class=\"zmdi zmdi-trending-up\"></i>
                                <span>15.5%</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"card w_data_1\">
                        <div class=\"body\">
                            <div class=\"w_icon cyan\"><i class=\"zmdi zmdi-ticket-star\"></i></div>
                            <h4 class=\"mt-3 mb-1\">01.8k</h4>
                            <span class=\"text-muted\">Submitted Tickers</span>
                            <div class=\"w_description text-success\">
                                <i class=\"zmdi zmdi-trending-up\"></i>
                                <span>95.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <div class=\"chat-widget\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar3.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Frank 11:00AM</small></li>
                                            <li><span class=\"message bg-blue\">Hello, Michael</span></li>
                                            <li><span class=\"message bg-blue\">How are you!</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:10AM</small></li>
                                            <li><span class=\"message\">Hello, Frank</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:11AM</small></li>
                                            <li><span class=\"message\">I'm fine what about you?</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar2.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Gary 11:13AM</small></li>
                                            <li><span class=\"message bg-indigo\">Hello, Michael and Frank</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"left\">
                                        <img src=\"assets/images/xs/avatar5.jpg\" class=\"rounded-circle\" alt=\"\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>Hossein 11:14AM</small></li>
                                            <li><span class=\"message bg-amber\">Hello, team</span></li>
                                            <li><span class=\"message bg-amber\">Please let me know your requirements.</span></li>
                                            <li><span class=\"message bg-amber\">How would like to connect with us?</span></li>
                                        </ul>
                                    </li>
                                    <li class=\"right\">
                                        <ul class=\"list-unstyled chat_info\">
                                            <li><small>11:15AM</small></li>
                                            <li><span class=\"message\">Hello, Hossein</span></li>
                                            <li><span class=\"message\">Meeting on conference room at 12:00PM</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"input-group mt-3\">
                                <div class=\"input-group-prepend\">
                                    <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Add</button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Tim Hank</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Hossein Shams</a>
                                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">John Smith</a>
                                    </div>
                                </div>
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter text here...\" aria-label=\"Text input with dropdown button\">
                                <div class=\"input-group-append\">
                                    <span class=\"input-group-text\"><i class=\"zmdi zmdi-mail-send\"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-md-12 col-lg-8\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Visitors</strong> Statistics</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Action</a></li>
                                        <li><a href=\"javascript:void(0);\">Another action</a></li>
                                        <li><a href=\"javascript:void(0);\">Something else</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <div id=\"world-map-markers\" class=\"jvector-map\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Distribution</strong></h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body text-center\">
                            <div id=\"chart-pie\" class=\"c3_chart d_distribution\"></div>
                            <button class=\"btn btn-primary mt-4 mb-4\">View More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2><strong>Traffic</strong> Source</h2>
                            <ul class=\"header-dropdown\">
                                <li class=\"dropdown\"> <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> <i class=\"zmdi zmdi-more\"></i> </a>
                                    <ul class=\"dropdown-menu dropdown-menu-right slideUp\">
                                        <li><a href=\"javascript:void(0);\">Edit</a></li>
                                        <li><a href=\"javascript:void(0);\">Delete</a></li>
                                        <li><a href=\"javascript:void(0);\">Report</a></li>
                                    </ul>
                                </li>
                                <li class=\"remove\">
                                    <a role=\"button\" class=\"boxs-close\"><i class=\"zmdi zmdi-close\"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"body\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6 col-sm-12\">
                                    <div id=\"chart-area-step\" class=\"c3_chart d_traffic\"></div>
                                </div>
                                <div class=\"col-lg-4 col-md-6 col-sm-12\">
                                    <span> More than 30% percent of users come from direct links. Check details page for more information.</span>
                                    <div class=\"progress mt-4\">
                                        <div class=\"progress-bar l-amber\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 45%;\"></div>
                                    </div>
                                    <div class=\"d-flex bd-highlight mt-4\">
                                        <div class=\"flex-fill bd-highlight\">
                                            <h5 class=\"mb-0\">21,521 <i class=\"zmdi zmdi-long-arrow-up\"></i></h5>
                                            <small>Today</small>
                                        </div>
                                        <div class=\"flex-fill bd-highlight\">
                                            <h5 class=\"mb-0\">%12.35 <i class=\"zmdi zmdi-long-arrow-down\"></i></h5>
                                            <small>Last month %</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}




{% block footer %}
{% endblock %}
{% block js %}
<!-- Jquery Core Js -->
<script src=\"{{ asset('assets/bundles/libscripts.bundle.js') }}\"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src=\"{{ asset('assets/bundles/vendorscripts.bundle.js') }}\"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src=\"{{ asset('assets/bundles/jvectormap.bundle.js') }}\"></script> <!-- JVectorMap Plugin Js -->
<script src=\"{{ asset('assets/bundles/sparkline.bundle.js') }}\"></script> <!-- Sparkline Plugin Js -->
<script src=\"{{ asset('assets/bundles/c3.bundle.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/index.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}\"></script> <!-- Input Mask Plugin Js -->
<script src=\"{{ asset('assets/plugins/multi-select/js/jquery.multi-select.js') }}\"></script> <!-- Multi Select Plugin Js -->
<script src=\"{{ asset('assets/plugins/nouislider/nouislider.js') }}\"></script> <!-- noUISlider Plugin Js -->
<script src=\"{{ asset('assets/plugins/select2/select2.min.js') }}\"></script> <!-- Select2 Js -->
<script src=\"{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}\"></script>
<script src=\"{{ asset ('assets/js/pages/ui/sweetalert.js')}}\"></script>
<script src=\"{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}\"></script> <!-- SweetAlert Plugin Js -->
<script src=\"{{ asset('assets/bundles/datatablescripts.bundle.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/tables/jquery-datatable.js') }}\"></script>
<script src=\"{{ asset('assets/plugins/bootstrap-notify/bootstrap-notify.js') }}\"></script> <!-- Bootstrap Notify Plugin Js -->
<script src=\"{{ asset('assets/js/pages/ui/notifications.js') }}\"></script> <!-- Custom Js -->
</body>
</html>
{% endblock %}
", "baseback.html.twig", "C:\\wamp64\\www\\final_pepiniere\\app\\Resources\\views\\baseback.html.twig");
    }
}
