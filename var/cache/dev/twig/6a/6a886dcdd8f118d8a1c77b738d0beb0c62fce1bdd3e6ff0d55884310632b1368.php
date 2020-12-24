<?php

/* @Service/service/showfront.html.twig */
class __TwigTemplate_43ff3c5e792719a2fd7b5e63cf1638ac8f851c3d6e37f2c3c86dcc9be9bbf61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Service/service/showfront.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/showfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/showfront.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
    <br class=\"theme-blush\">
    <br>  <br>
    <section class=\"content\">
        <div class=\"body_scroll \">


            ";
        // line 11
        echo "            ";
        // line 12
        echo "            ";
        // line 13
        echo "
            ";
        // line 15
        echo "            <div class=\"container-fluid\">
                <div class=\"row clearfix\">


                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 20
            echo "
                        ";
            // line 21
            $context["imag"] = ("../../uploads/" . $this->getAttribute($context["service"], "image", []));
            // line 22
            echo "
                        <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"body product_item\">
                                    <span class=\"label onsale\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "type", []), "html", null, true);
            echo "</span>
                                    <div>
                                        <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["service"], "image", []))), "html", null, true);
            echo "\" alt=\"Image\"
                                             width=\"200\" height=\"200\"/></div>
                                    <div class=\"product_details\">
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_showuser", ["idService" => $this->getAttribute($context["service"], "idService", [])]), "html", null, true);
            echo "\"></a>
                                        <ul class=\"product_price list-unstyled\">
                                            <li class=\"old_price\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "region", []), "html", null, true);
            echo "</li>
                                        </ul>
                                        <ul class=\"product_price list-unstyled\">
                                            <li class=\"old_price\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "prix", []), "html", null, true);
            echo "DT</li>
                                        </ul>
                                    </div>
                                    <div class=\"action\">
                                        <a class=\"btn btn-primary\"
                                           href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_showuser", ["idService" => $this->getAttribute($context["service"], "idService", [])]), "html", null, true);
            echo "\">
                                            <i class=\"zmdi zmdi-hc-fw\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>
            </div>
        </div>
        <form action=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_showfront");
        echo "\" method=\"get\">
            <input type=\"text\" class=\"form-control\" name=\"region\" placeholder=\"Search by region\">
            <button class=\"btn\" type=\"submit\">Search</button>
            <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_showfront");
        echo "\">clear</a>
        </form>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Service/service/showfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  135 => 52,  130 => 49,  116 => 41,  108 => 36,  102 => 33,  97 => 31,  91 => 28,  86 => 26,  80 => 22,  78 => 21,  75 => 20,  71 => 19,  65 => 15,  62 => 13,  60 => 12,  58 => 11,  49 => 3,  40 => 2,  11 => 1,);
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
    <br>  <br>
    <section class=\"content\">
        <div class=\"body_scroll \">


            {#{{ form_start(form) }}#}
            {#{{ form_widget(form.Region, { 'attr': {'class': 'form-control','placeholder':'region'} }) }}#}
            {#<center>  {{ form_widget(form.search, { 'attr': {'class': 'icon-circle bg-light-blue'} }) }}</center>#}

            {#{{ form_end(form) }}#}
            <div class=\"container-fluid\">
                <div class=\"row clearfix\">


                    {% for service in services %}

                        {% set imag = '../../uploads/'~service.image %}

                        <div class=\"col-xl-3 col-lg-4 col-md-6 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"body product_item\">
                                    <span class=\"label onsale\">{{ service.type }}</span>
                                    <div>
                                        <img src=\"{{ asset('uploads/images/' ~ service.image) }}\" alt=\"Image\"
                                             width=\"200\" height=\"200\"/></div>
                                    <div class=\"product_details\">
                                        <a href=\"{{ path('service_showuser', { 'idService': service.idService}) }}\"></a>
                                        <ul class=\"product_price list-unstyled\">
                                            <li class=\"old_price\">{{ service.region }}</li>
                                        </ul>
                                        <ul class=\"product_price list-unstyled\">
                                            <li class=\"old_price\">{{ service.prix }}DT</li>
                                        </ul>
                                    </div>
                                    <div class=\"action\">
                                        <a class=\"btn btn-primary\"
                                           href=\"{{ path('service_showuser', { 'idService': service.idService }) }}\">
                                            <i class=\"zmdi zmdi-hc-fw\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <form action=\"{{ path('service_showfront') }}\" method=\"get\">
            <input type=\"text\" class=\"form-control\" name=\"region\" placeholder=\"Search by region\">
            <button class=\"btn\" type=\"submit\">Search</button>
            <a class=\"btn btn-primary\" href=\"{{ path('service_showfront') }}\">clear</a>
        </form>
    </section>

{% endblock %}
", "@Service/service/showfront.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\ServiceBundle\\Resources\\views\\service\\showfront.html.twig");
    }
}
