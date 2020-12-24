<?php

/* @Produit/produitfront/indexfront.html.twig */
class __TwigTemplate_53ba9a223a539fb71dd7cc080fab61a65c7cf1174445251ec680fd6d58dc1072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Produit/produitfront/indexfront.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Produit/produitfront/indexfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Produit/produitfront/indexfront.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <br class=\"theme-blush\">
    <br>  <br><br><br><br>

    <table>
        <section class=\"container col-lg-12\">
            <div class=\"row flex-row-reverse\">

                <div class=\"content col-lg-10\">
                    <div class=\"align-right\">
                        <form method=\"post\">
                            <div class=\"product-sorting-wrapper\">
                                <div class=\"product-show shorting-style\">
                                    <label>Trier:</label>
                                    <select id=\"sorting\">
                                        <option value=\"pasc\"";
        // line 18
        if (((isset($context["sorting"]) ? $context["sorting"] : $this->getContext($context, "sorting")) == "pasc")) {
            echo "selected";
        }
        echo ">Prix Ascendant</option>
                                        <option value=\"pdsc\"";
        // line 19
        if (((isset($context["sorting"]) ? $context["sorting"] : $this->getContext($context, "sorting")) == "pdsc")) {
            echo "selected";
        }
        echo ">Prix Descendant</option>
                                        <option value=\"nasc\"";
        // line 20
        if (((isset($context["sorting"]) ? $context["sorting"] : $this->getContext($context, "sorting")) == "nasc")) {
            echo "selected";
        }
        echo ">Nom A-Z</option>
                                        <option value=\"ndsc\"";
        // line 21
        if (((isset($context["sorting"]) ? $context["sorting"] : $this->getContext($context, "sorting")) == "ndsc")) {
            echo "selected";
        }
        echo ">Nom Z-A</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"body_scroll\">
                        <div class=\"container-fluid\">
                            <br>
                            <div class=\"row clearfix\">

                                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 33
            echo "
                                    ";
            // line 34
            $context["imag"] = ("uploads/images/" . $this->getAttribute($context["produit"], "image", []));
            // line 35
            echo "
                                    <div class=\"col-xl-3 col-lg-9 col-md-9 col-sm-2 \">
                                        <div class=\"card\" >
                                            <div class=\"body product_item\">
                                                ";
            // line 39
            if (($this->getAttribute($context["produit"], "quantite", []) > 0)) {
                // line 40
                echo "                                                    <span class=\"badge badge-success\">Disponible!</span>
                                                ";
            } else {
                // line 42
                echo "                                                    <span  class=\"badge badge-danger\">Indisponible!</span>
                                                ";
            }
            // line 44
            echo "                                                <div>   <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag"))), "html", null, true);
            echo "  \" alt=\"Product\" width=\"250\" height=\"250\" ></div>
                                                <div class=\"product_details\">
                                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_showfront", ["idProduit" => $this->getAttribute($context["produit"], "idProduit", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nomProduit", []), "html", null, true);
            echo "</a>

                                                    <ul class=\"product_price list-unstyled\"><li>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", []), "html", null, true);
            echo "DT</li></ul>
                                                </div>
                                                <div class=\"action\">
                                                    <a class=\"btn btn-app btn-primary fa fa-heart btn-lg\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("favoris_new", ["idProduit" => $this->getAttribute($context["produit"], "idProduit", [])]), "html", null, true);
            echo "\"></a>
                                                    <a class=\"btn btn-app btn-primary fa fa-eye  btn-lg\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_showfront", ["idProduit" => $this->getAttribute($context["produit"], "idProduit", [])]), "html", null, true);
            echo "\"></a>
                                                    ";
            // line 53
            if (($this->getAttribute($context["produit"], "quantite", []) > 0)) {
                // line 54
                echo "                                                        <a class=\"btn btn-app btn-primary fa fa-shopping-cart btn-lg\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_ajouter", ["idProduit" => $this->getAttribute($context["produit"], "idProduit", [])]), "html", null, true);
                echo "\"></a>
                                                    ";
            }
            // line 56
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </div>
                        </div>
                    </div>

                </div>

                <br><br><br><br>
                <div class=\"col-lg-2\">
                    <br><br><br><br><br>
                    <div class=\"shop-widget\">
                        <h4 class=\"shop-sidebar-title\">Filtrer par categorie</h4>
                        <div class=\"shop-catigory\">
                            <ul id=\"faq\">

                                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) ? $context["prod"] : $this->getContext($context, "prod")));
        foreach ($context['_seq'] as $context["_key"] => $context["prodsss"]) {
            // line 76
            echo "                                    <li><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfronte", ["idCategorie" => $this->getAttribute($context["prodsss"], "idCategorie", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["prodsss"], "nomCategorie", []), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prodsss'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </ul>
                        </div>

                        <a class=\"btn btn-app btn-light  btn-sm\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfront");
        echo "\"  >Supprimer filter</a>
                    </div>

            </div>
            <div class=\"navigation\" align=\"right\">
                ";
        // line 86
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "
            </div>
            </div>
        </section>

    </table>


    ";
        // line 94
        $this->displayBlock('js', $context, $blocks);
        // line 97
        echo "    <script>
        \$(document).ready(function () {
            \$(\"#sorting\").on('change',function(){
                var value  = \$('#sorting').val();
                window.location= \"?sorting=\"+value;
            });
        })

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 95
        echo "        ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Produit/produitfront/indexfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 95,  247 => 94,  227 => 97,  225 => 94,  214 => 86,  206 => 81,  201 => 78,  190 => 76,  186 => 75,  170 => 61,  160 => 56,  154 => 54,  152 => 53,  148 => 52,  144 => 51,  138 => 48,  131 => 46,  125 => 44,  121 => 42,  117 => 40,  115 => 39,  109 => 35,  107 => 34,  104 => 33,  100 => 32,  84 => 21,  78 => 20,  72 => 19,  66 => 18,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'basef.html.twig' %}

{% block content %}
    <br class=\"theme-blush\">
    <br>  <br><br><br><br>

    <table>
        <section class=\"container col-lg-12\">
            <div class=\"row flex-row-reverse\">

                <div class=\"content col-lg-10\">
                    <div class=\"align-right\">
                        <form method=\"post\">
                            <div class=\"product-sorting-wrapper\">
                                <div class=\"product-show shorting-style\">
                                    <label>Trier:</label>
                                    <select id=\"sorting\">
                                        <option value=\"pasc\"{% if sorting==\"pasc\" %}selected{% endif %}>Prix Ascendant</option>
                                        <option value=\"pdsc\"{% if sorting==\"pdsc\" %}selected{% endif %}>Prix Descendant</option>
                                        <option value=\"nasc\"{% if sorting==\"nasc\" %}selected{% endif %}>Nom A-Z</option>
                                        <option value=\"ndsc\"{% if sorting==\"ndsc\" %}selected{% endif %}>Nom Z-A</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"body_scroll\">
                        <div class=\"container-fluid\">
                            <br>
                            <div class=\"row clearfix\">

                                {% for produit in produits %}

                                    {% set imag = 'uploads/images/'~produit.image %}

                                    <div class=\"col-xl-3 col-lg-9 col-md-9 col-sm-2 \">
                                        <div class=\"card\" >
                                            <div class=\"body product_item\">
                                                {% if produit.quantite>0 %}
                                                    <span class=\"badge badge-success\">Disponible!</span>
                                                {% else %}
                                                    <span  class=\"badge badge-danger\">Indisponible!</span>
                                                {% endif %}
                                                <div>   <img src=\"{{ asset(imag) }}  \" alt=\"Product\" width=\"250\" height=\"250\" ></div>
                                                <div class=\"product_details\">
                                                    <a href=\"{{ path('produit_showfront', { 'idProduit': produit.idProduit}) }}\">{{ produit.nomProduit }}</a>

                                                    <ul class=\"product_price list-unstyled\"><li>{{produit.prix }}DT</li></ul>
                                                </div>
                                                <div class=\"action\">
                                                    <a class=\"btn btn-app btn-primary fa fa-heart btn-lg\" href=\"{{ path('favoris_new', { 'idProduit': produit.idProduit}) }}\"></a>
                                                    <a class=\"btn btn-app btn-primary fa fa-eye  btn-lg\" href=\"{{ path('produit_showfront', { 'idProduit': produit.idProduit}) }}\"></a>
                                                    {% if produit.quantite>0 %}
                                                        <a class=\"btn btn-app btn-primary fa fa-shopping-cart btn-lg\" href=\"{{ path('commande_ajouter', { 'idProduit' : produit.idProduit }) }}\"></a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>

                </div>

                <br><br><br><br>
                <div class=\"col-lg-2\">
                    <br><br><br><br><br>
                    <div class=\"shop-widget\">
                        <h4 class=\"shop-sidebar-title\">Filtrer par categorie</h4>
                        <div class=\"shop-catigory\">
                            <ul id=\"faq\">

                                {% for prodsss in prod %}
                                    <li><a  href=\"{{ path('produit_indexfronte',{'idCategorie':prodsss.idCategorie})}}\">{{ prodsss.nomCategorie }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>

                        <a class=\"btn btn-app btn-light  btn-sm\" href=\"{{ path('produit_indexfront')}}\"  >Supprimer filter</a>
                    </div>

            </div>
            <div class=\"navigation\" align=\"right\">
                {{ knp_pagination_render(produits) }}
            </div>
            </div>
        </section>

    </table>


    {% block js %}
        {{ parent() }}
    {% endblock %}
    <script>
        \$(document).ready(function () {
            \$(\"#sorting\").on('change',function(){
                var value  = \$('#sorting').val();
                window.location= \"?sorting=\"+value;
            });
        })

    </script>

{% endblock %}", "@Produit/produitfront/indexfront.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\ProduitBundle\\Resources\\views\\produitfront\\indexfront.html.twig");
    }
}
