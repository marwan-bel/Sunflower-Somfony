<?php

/* @Commande/commande/listcmd.html.twig */
class __TwigTemplate_6343ba72e957b145f1a5c4fd2036a6c00d063f69c30b6ce94fc3c861565c3c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Commande/commande/listcmd.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/listcmd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/listcmd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <br>  <br> <br>  <br>
    <section class=\"content\">
        <div class=\"body_scroll\">


            <div class=\"container-fluid\">
                <div class=\"row clearfix\">


    <h1>Mes Commandes </h1>
                <br>  <br>
                ";
        // line 17
        if (((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")) != null)) {
            // line 18
            echo "
    <table class=\"table table-bordered table-striped table-hover\">
        <thead>
            <tr>
                <th>Etat de la Commande</th>
                <th>Mode de Paiement</th>
                <th>Lieu de Livraison</th>
                <th>Montant en DT</th>
                <th>  </th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 31
                echo "            <tr>
                <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "etatCmd", []), "html", null, true);
                echo "</td>

                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "modeP", []), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "lieuLiv", []), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "montant", []), "html", null, true);
                echo " DT</td>
                <td>
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_showuser", ["idCmd" => $this->getAttribute($context["commande"], "idCmd", [])]), "html", null, true);
                echo "\"class=\"btn btn-app btn-primary waves-effect\">Afficher</a>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
    </table>
                ";
        }
        // line 45
        echo "                    ";
        if (((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")) == null)) {
            // line 46
            echo "                        <div class=\"col-md-12 text-center\">
                            <td><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/empty.png"), "html", null, true);
            echo "\" width=\"260\" height=\"260\" alt=\"Product img\"></td>
                            <div> pas de commande !</div>
                            <div >Explorez nos catégories et découvrez nos meilleures offres!</div>
                        </div>

                    ";
        }
        // line 53
        echo "
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
        return "@Commande/commande/listcmd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  144 => 47,  141 => 46,  138 => 45,  133 => 42,  123 => 38,  118 => 36,  114 => 35,  110 => 34,  105 => 32,  102 => 31,  98 => 30,  84 => 18,  82 => 17,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
{% block titre %}  <title>SunFlower affichage détaillé</title>{% endblock %}

{% block content %}

    <br>  <br> <br>  <br>
    <section class=\"content\">
        <div class=\"body_scroll\">


            <div class=\"container-fluid\">
                <div class=\"row clearfix\">


    <h1>Mes Commandes </h1>
                <br>  <br>
                {% if commandes!=null %}

    <table class=\"table table-bordered table-striped table-hover\">
        <thead>
            <tr>
                <th>Etat de la Commande</th>
                <th>Mode de Paiement</th>
                <th>Lieu de Livraison</th>
                <th>Montant en DT</th>
                <th>  </th>
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}
            <tr>
                <td>{{ commande.etatCmd }}</td>

                <td>{{ commande.modeP }}</td>
                <td>{{ commande.lieuLiv }}</td>
                <td>{{ commande.montant }} DT</td>
                <td>
                    <a href=\"{{ path('commande_showuser', { 'idCmd': commande.idCmd }) }}\"class=\"btn btn-app btn-primary waves-effect\">Afficher</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
                {% endif %}
                    {%if commandes==null  %}
                        <div class=\"col-md-12 text-center\">
                            <td><img src=\"{{ asset('uploads/images/empty.png' ) }}\" width=\"260\" height=\"260\" alt=\"Product img\"></td>
                            <div> pas de commande !</div>
                            <div >Explorez nos catégories et découvrez nos meilleures offres!</div>
                        </div>

                    {%  endif%}

            </div>


        </div>
    </div>
</section>


{% endblock %}
", "@Commande/commande/listcmd.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\listcmd.html.twig");
    }
}
