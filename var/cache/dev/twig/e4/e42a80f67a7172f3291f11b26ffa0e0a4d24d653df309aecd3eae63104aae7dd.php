<?php

/* @Commande/commande/showuser.html.twig */
class __TwigTemplate_441000bab42b5c57db34020e94ff1c9ba2bb19d187dfc2b86517af27cf028d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("basef.html.twig", "@Commande/commande/showuser.html.twig", 3);
        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/showuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/showuser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "  <title>SunFlower affichage détaillé</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <br>  <br> <br>  <br><br class=\"theme-blush\">
    <section class=\"content\">
    <div class=\"body_scroll\">


    <div class=\"container-fluid\">
    <div class=\"row clearfix\">

            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <h5><strong>Commande Num°: </strong> #";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idCmd", []), "html", null, true);
        echo "</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-6\">
                                    <address>
                                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["client"]);
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 24
            echo "                                            <strong>
                                            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", []), "html", null, true);
            echo "
                                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", []), "html", null, true);
            echo "<br>
                                                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "sexe", []), "html", null, true);
            echo "
                                            </strong>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<br>
                                        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "lieuLiv", []), "html", null, true);
        echo "

                                    </address>
                                </div>
                                <div class=\"col-md-6 col-sm-6 text-right\">
                                    <p class=\"mb-0\"><strong>Date de la commande: </strong>";
        // line 35
        if ($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCmd", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCmd", []), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</p>
                                    ";
        // line 36
        if (($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "etatCmd", []) == "En attente")) {
            // line 37
            echo "                                        <p class=\"mb-1\"><strong>Etat de la commande: </strong> <span class=\"badge badge-warning\">En attente</span></p>
                                    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "etatCmd", []) == "Livrés")) {
            // line 39
            echo "
                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-success\">Livrés</span></p>
                                    ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "etatCmd", []) == "Annuler")) {
            // line 42
            echo "                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-danger\">Annuler</span></p>
                                    ";
        } else {
            // line 44
            echo "                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-secondary\">En cours</span></p>
                                    ";
        }
        // line 46
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover c_table\">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width=\"60px\">Item</th>
                                            <th></th>
                                            <th class=\"hidden-sm-down\">Description</th>
                                            <th>Quantity</th>
                                            <th class=\"hidden-sm-down\">Prix unitaire</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 66
        $context["i"] = 1;
        // line 67
        echo "                                        ";
        $context["tot"] = 0;
        // line 68
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbrP0"]) ? $context["nbrP0"] : $this->getContext($context, "nbrP0")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbrP"]) {
            // line 69
            echo "                                        <tr>
                                            <td> ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </td>
                                            ";
            // line 71
            $context["imag"] = ("uploads/images/" . $this->getAttribute($context["nbrP"], "image", []));
            // line 72
            echo "                                            <td><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag"))), "html", null, true);
            echo "\" width=\"40\" alt=\"Product img\"></td>
                                            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "nomProduit", []), "html", null, true);
            echo "</td>
                                            <td class=\"hidden-sm-down\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "description", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "qte", []), "html", null, true);
            echo "</td>
                                            <td class=\"hidden-sm-down\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "prix", []), "html", null, true);
            echo " DT</td>
                                            <td>";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute($context["nbrP"], "prix", []) * $this->getAttribute($context["nbrP"], "qte", [])), "html", null, true);
            echo " DT</td>
                                        </tr>
                                            ";
            // line 79
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 80
            echo "                                            ";
            $context["tot"] = ((isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")) + ($this->getAttribute($context["nbrP"], "prix", []) * $this->getAttribute($context["nbrP"], "qte", [])));
            // line 81
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        // line 95
        echo twig_escape_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), "html", null, true);
        echo " DT</h3>
                                    <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_invoice", ["idCmd" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idCmd", [])]), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-info\"><i class=\"zmdi zmdi-print\"></i></a>

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

    public function getTemplateName()
    {
        return "@Commande/commande/showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 96,  244 => 95,  229 => 82,  223 => 81,  220 => 80,  218 => 79,  213 => 77,  209 => 76,  205 => 75,  201 => 74,  197 => 73,  192 => 72,  190 => 71,  186 => 70,  183 => 69,  178 => 68,  175 => 67,  173 => 66,  151 => 46,  147 => 44,  143 => 42,  141 => 41,  137 => 39,  135 => 38,  132 => 37,  130 => 36,  124 => 35,  116 => 30,  113 => 29,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  89 => 23,  82 => 19,  68 => 7,  59 => 6,  41 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'basef.html.twig' %}
{% block titre %}  <title>SunFlower affichage détaillé</title>{% endblock %}

{% block content %}
    <br>  <br> <br>  <br><br class=\"theme-blush\">
    <section class=\"content\">
    <div class=\"body_scroll\">


    <div class=\"container-fluid\">
    <div class=\"row clearfix\">

            <div class=\"row clearfix\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"body\">
                            <h5><strong>Commande Num°: </strong> #{{ commande.idCmd }}</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-6\">
                                    <address>
                                        {% for client in client %}
                                            <strong>
                                            {{ client.nom }}
                                            {{ client.prenom }}<br>
                                                {{ client.sexe }}
                                            </strong>
                                        {% endfor %}<br>
                                        {{ commande.lieuLiv }}

                                    </address>
                                </div>
                                <div class=\"col-md-6 col-sm-6 text-right\">
                                    <p class=\"mb-0\"><strong>Date de la commande: </strong>{% if commande.dateCmd %}{{ commande.dateCmd|date('Y-m-d H:i:s') }}{% endif %}</p>
                                    {% if (commande.etatCmd)==\"En attente\" %}
                                        <p class=\"mb-1\"><strong>Etat de la commande: </strong> <span class=\"badge badge-warning\">En attente</span></p>
                                    {% elseif (commande.etatCmd)==\"Livrés\" %}

                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-success\">Livrés</span></p>
                                    {% elseif (commande.etatCmd)==\"Annuler\" %}
                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-danger\">Annuler</span></p>
                                    {% else %}
                                        <p class=\"mb-0\"><strong>Etat de la commande: </strong> <span class=\"badge badge-secondary\">En cours</span></p>
                                    {% endif %}

                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-hover c_table\">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th width=\"60px\">Item</th>
                                            <th></th>
                                            <th class=\"hidden-sm-down\">Description</th>
                                            <th>Quantity</th>
                                            <th class=\"hidden-sm-down\">Prix unitaire</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {%  set i=1 %}
                                        {%  set tot=0 %}
                                        {% for nbrP in nbrP0 %}
                                        <tr>
                                            <td> {{  i }} </td>
                                            {% set imag = 'uploads/images/'~nbrP.image %}
                                            <td><img src=\"{{ asset(imag ) }}\" width=\"40\" alt=\"Product img\"></td>
                                            <td>{{ nbrP.nomProduit }}</td>
                                            <td class=\"hidden-sm-down\">{{ nbrP.description }}</td>
                                            <td>{{ nbrP.qte }}</td>
                                            <td class=\"hidden-sm-down\">{{ nbrP.prix }} DT</td>
                                            <td>{{ nbrP.prix * nbrP.qte }} DT</td>
                                        </tr>
                                            {%  set i=i+1 %}
                                            {%  set tot=tot+ nbrP.prix * nbrP.qte %}
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
                                    <a href=\"{{ path('commande_invoice', { 'idCmd': commande.idCmd }) }}\" target=\"_blank\" class=\"btn btn-info\"><i class=\"zmdi zmdi-print\"></i></a>

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


{% endblock %}", "@Commande/commande/showuser.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\showuser.html.twig");
    }
}
