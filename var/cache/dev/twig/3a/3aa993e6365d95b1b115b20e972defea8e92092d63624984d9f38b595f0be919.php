<?php

/* @Commande/commande/panier.html.twig */
class __TwigTemplate_c5718d0f1f7b7122584d5f1d4d96c1bf9e2d65b321e50f82e46207e5b15ce213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Commande/commande/panier.html.twig", 1);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "basef.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/panier.html.twig"));

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
        echo "    <br><br><br><br><br><br>
     <div class=\"container-fluid\">

        <div class=\"container-fluid\">
            <h5><strong>Panier: </strong></h5>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    ";
        // line 11
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) != 0)) {
            // line 12
            echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"table-responsive\">
                                    ";
            // line 16
            $context["i"] = 1;
            // line 17
            echo "                                    ";
            $context["tot"] = 0;
            // line 18
            echo "                                    <table class=\"table table-hover c_table\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <td><b>#</b></td>
                                            <td ><b>Item</b></td>
                                            <td></td>
                                            <td><b>Description</b></td>
                                            <td><b>Quantity</b></td>
                                            <td></td>
                                            <td><b>Prix unitaire</b></td>
                                            <td><b>Total</b></td>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lcmd"]);
            foreach ($context['_seq'] as $context["_key"] => $context["lcmd"]) {
                // line 34
                echo "                                            <tr>
                                                <td> ";
                // line 35
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo " </td>
                                                ";
                // line 36
                $context["imag"] = ("uploads/images/" . $this->getAttribute($context["lcmd"], "image", []));
                // line 37
                echo "                                                <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag"))), "html", null, true);
                echo "\" width=\"40\" alt=\"Product img\"></td>
                                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "nomProduit", []), "html", null, true);
                echo "</td>
                                                <td class=\"hidden-sm-down\">
                                                    ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "description", []), "html", null, true);
                echo "
                                                </td>
                                                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "quantite", []), "html", null, true);
                echo "</td>
                                                <td>
                                                    <a  class=\"btn btn-app btn-primary waves-effect fa fa-plus\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_qte", ["idProduit" => $this->getAttribute($context["lcmd"], "idProduit", [])]), "html", null, true);
                echo "\"></a>
                                                    <br>
                                                    <a  class=\"btn btn-app btn-warning fa fa-minus\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del_qte", ["idProduit" => $this->getAttribute($context["lcmd"], "idProduit", [])]), "html", null, true);
                echo "\"></a>
                                                </td>
                                                <td class=\"hidden-sm-down\"> ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "prix", []), "html", null, true);
                echo "DT</td>
                                                <td>";
                // line 49
                echo twig_escape_filter($this->env, ($this->getAttribute($context["lcmd"], "prix", []) * $this->getAttribute($context["lcmd"], "quantite", [])), "html", null, true);
                echo " DT</td>
                                                <td><a  class=\"btn btn-app btn-danger fa fa-trash\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_delpanier", ["idLigneCmd" => $this->getAttribute($context["lcmd"], "idLigneCmd", [])]), "html", null, true);
                echo "\"></a></td>

                                            </tr>
                                            ";
                // line 53
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 54
                echo "                                            ";
                $context["tot"] = ((isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")) + ($this->getAttribute($context["lcmd"], "prix", []) * $this->getAttribute($context["lcmd"], "quantite", [])));
                // line 55
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lcmd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                </div>
                                <div class=\"col-md-6 text-right\">

                                    Totale:

                                    <h3 class=\"mb-0 text-success\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), "html", null, true);
            echo " DT</h3>
                                    <a  class=\"btn btn-app btn-primary waves-effect\" href=\"";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_indexfront");
            echo "\">Poursuivre vos achats</a>
                                    <a  class=\"btn btn-app btn-primary waves-effect\" href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_final");
            echo "\">Finaliser votre commande</a>

                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 77
        echo "                    ";
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 0)) {
            // line 78
            echo "                        <div class=\"col-md-12 text-center\">
                            <td><img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/paniervide.png"), "html", null, true);
            echo "\" width=\"260\" height=\"260\" alt=\"Product img\"></td>
                            <div>Votre panier est vide !</div>
                            <div >Explorez nos catégories et découvrez nos meilleures offres!</div>
                        </div>
                    ";
        }
        // line 84
        echo "


                    </div>
                </div>
            </div>
        </div>

    <br><br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Commande/commande/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 84,  194 => 79,  191 => 78,  188 => 77,  179 => 71,  175 => 70,  171 => 69,  156 => 56,  150 => 55,  147 => 54,  145 => 53,  139 => 50,  135 => 49,  131 => 48,  126 => 46,  121 => 44,  116 => 42,  111 => 40,  106 => 38,  101 => 37,  99 => 36,  95 => 35,  92 => 34,  88 => 33,  71 => 18,  68 => 17,  66 => 16,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
    <br><br><br><br><br><br>
     <div class=\"container-fluid\">

        <div class=\"container-fluid\">
            <h5><strong>Panier: </strong></h5>
            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    {% if count!=0 %}

                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"table-responsive\">
                                    {%  set i=1 %}
                                    {%  set tot=0 %}
                                    <table class=\"table table-hover c_table\">
                                        <thead class=\"thead-dark\">
                                        <tr>
                                            <td><b>#</b></td>
                                            <td ><b>Item</b></td>
                                            <td></td>
                                            <td><b>Description</b></td>
                                            <td><b>Quantity</b></td>
                                            <td></td>
                                            <td><b>Prix unitaire</b></td>
                                            <td><b>Total</b></td>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        {% for lcmd in lcmd %}
                                            <tr>
                                                <td> {{  i }} </td>
                                                {% set imag = 'uploads/images/'~lcmd.image %}
                                                <td><img src=\"{{ asset(imag ) }}\" width=\"40\" alt=\"Product img\"></td>
                                                <td>{{ lcmd.nomProduit }}</td>
                                                <td class=\"hidden-sm-down\">
                                                    {{ lcmd.description }}
                                                </td>
                                                <td>{{ lcmd.quantite }}</td>
                                                <td>
                                                    <a  class=\"btn btn-app btn-primary waves-effect fa fa-plus\" href=\"{{ path('add_qte',{'idProduit':lcmd.idProduit})}}\"></a>
                                                    <br>
                                                    <a  class=\"btn btn-app btn-warning fa fa-minus\" href=\"{{ path('del_qte',{'idProduit':lcmd.idProduit})}}\"></a>
                                                </td>
                                                <td class=\"hidden-sm-down\"> {{ lcmd.prix }}DT</td>
                                                <td>{{ lcmd.prix * lcmd.quantite }} DT</td>
                                                <td><a  class=\"btn btn-app btn-danger fa fa-trash\" href=\"{{ path('commande_delpanier',{'idLigneCmd':lcmd.idLigneCmd})}}\"></a></td>

                                            </tr>
                                            {%  set i=i+1 %}
                                            {%  set tot=tot+ lcmd.prix * lcmd.quantite %}
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class=\"body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                </div>
                                <div class=\"col-md-6 text-right\">

                                    Totale:

                                    <h3 class=\"mb-0 text-success\">{{ tot }} DT</h3>
                                    <a  class=\"btn btn-app btn-primary waves-effect\" href=\"{{ path('produit_indexfront')}}\">Poursuivre vos achats</a>
                                    <a  class=\"btn btn-app btn-primary waves-effect\" href=\"{{ path('commande_final')}}\">Finaliser votre commande</a>

                                </div>
                            </div>
                        </div>
                    {% endif %}
                    {% if count==0 %}
                        <div class=\"col-md-12 text-center\">
                            <td><img src=\"{{ asset('uploads/images/paniervide.png' ) }}\" width=\"260\" height=\"260\" alt=\"Product img\"></td>
                            <div>Votre panier est vide !</div>
                            <div >Explorez nos catégories et découvrez nos meilleures offres!</div>
                        </div>
                    {% endif %}



                    </div>
                </div>
            </div>
        </div>

    <br><br>

{% endblock %}", "@Commande/commande/panier.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\panier.html.twig");
    }
}
