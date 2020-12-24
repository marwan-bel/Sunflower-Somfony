<?php

/* @Service/service/showuser.html.twig */
class __TwigTemplate_78ec20aba64c086fff240a280432fc60f741811eba0b7dd7e57fb3196003f1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Service/service/showuser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/showuser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/showuser.html.twig"));

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
        echo "    <h1>Service</h1>
<section class=\"content\">
    <ul>
        <table class=\"table table-bordered table-striped table-hover dataTable js-exportable\">
            <tbody>

            <tr>
                <th>Nomservice</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nomService", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomagent</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nomAgent", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "type", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "prix", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "description", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "etat", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "contact", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "region", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "image", []))), "html", null, true);
        echo "\" alt=\"Image\" width=\"200\" height=\"200\" />
            </tr>



            </tbody>
        </table>
        <table>
        <a class=\"btn btn-secondary  btn-lg \"
           href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avisservice_new", ["idService" => $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "idService", [])]), "html", null, true);
        echo "\">
            avis
            <i class=\"zmdi zmdi-hc-fw\"></i>

        <a class=\"btn btn-outline-info  btn-lg \"
           href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_devis", ["service" => $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "idService", [])]), "html", null, true);
        echo "\">
            devis par email
            <i class=\"zmdi zmdi-hc-fw\"></i>
            <a class=\"btn btn-outline-info  btn-lg \"
               href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_devis_pdf", ["service" => $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "idService", [])]), "html", null, true);
        echo "\">
                devis PDF
                <i class=\"zmdi zmdi-hc-fw\"></i>


        <a class=\"btn btn-primary btn-lg \"
           href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_showfront");
        echo "\">
            retour
            <i class=\"zmdi zmdi-hc-fw\" ></i>
        </a>
        </table>

    </ul>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Service/service/showuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  143 => 63,  136 => 59,  128 => 54,  116 => 45,  108 => 40,  101 => 36,  94 => 32,  87 => 28,  80 => 24,  73 => 20,  66 => 16,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Service</h1>
<section class=\"content\">
    <ul>
        <table class=\"table table-bordered table-striped table-hover dataTable js-exportable\">
            <tbody>

            <tr>
                <th>Nomservice</th>
                <td>{{ service.nomService }}</td>
            </tr>
            <tr>
                <th>Nomagent</th>
                <td>{{ service.nomAgent }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ service.type }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ service.prix }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ service.description }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ service.etat }}</td>
            </tr>
            <tr>
                <th>Contact</th>
                <td>{{ service.contact }}</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>{{ service.region }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    <img src=\"{{ asset('uploads/images/' ~ service.image)}}\" alt=\"Image\" width=\"200\" height=\"200\" />
            </tr>



            </tbody>
        </table>
        <table>
        <a class=\"btn btn-secondary  btn-lg \"
           href=\"{{ path('avisservice_new', { idService: service.idService }) }}\">
            avis
            <i class=\"zmdi zmdi-hc-fw\"></i>

        <a class=\"btn btn-outline-info  btn-lg \"
           href=\"{{ path('service_devis',{service:service.idService}) }}\">
            devis par email
            <i class=\"zmdi zmdi-hc-fw\"></i>
            <a class=\"btn btn-outline-info  btn-lg \"
               href=\"{{ path('service_devis_pdf',{service:service.idService}) }}\">
                devis PDF
                <i class=\"zmdi zmdi-hc-fw\"></i>


        <a class=\"btn btn-primary btn-lg \"
           href=\"{{ path('service_showfront') }}\">
            retour
            <i class=\"zmdi zmdi-hc-fw\" ></i>
        </a>
        </table>

    </ul>
    </section>
{% endblock %}

", "@Service/service/showuser.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\ServiceBundle\\Resources\\views\\service\\showuser.html.twig");
    }
}
