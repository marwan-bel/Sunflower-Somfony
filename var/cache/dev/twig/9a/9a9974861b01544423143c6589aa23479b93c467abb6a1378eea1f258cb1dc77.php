<?php

/* @Service/service/email-template.html.twig */
class __TwigTemplate_95d2f3e70234d6e6995b39300359e6d10404fa696b1eec30c2345e11b17e4ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/email-template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Service/service/email-template.html.twig"));

        // line 1
        echo "<html>
<head>
   

</head>
</html>
<body>

<h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", []), "html", null, true);
        echo "</h1>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <table class=\"table table-condensed table-hover\">
                <thead>
                <tr>
                    <td>Nom Service</td>
                    <td>Nom agent</td>
                    <td>Type</td>
                    <td>Prix</td>
                    <td>Description</td>
                    <td>Etat</td>
                    <td>Contact</td>
                    <td>Region</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nomService", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "nomAgent", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "type", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "prix", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "description", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "etat", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "contact", []), "html", null, true);
        echo "</td>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "region", []), "html", null, true);
        echo "</td>

                </tr>
 ";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), [["code" => "SUNFLOWER_by_SADDEM_MHIRI", "type" => "qrcode", "format" => "svg", "width" => 10, "height" => 10, "color" => "black"]]), "html", null, true);
        echo "

 </tbody>
</table>
</div>
</div>
</div>

</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Service/service/email-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  85 => 35,  81 => 34,  77 => 33,  73 => 32,  69 => 31,  65 => 30,  61 => 29,  57 => 28,  35 => 9,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
   

</head>
</html>
<body>

<h1>{{ user.username }}</h1>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <table class=\"table table-condensed table-hover\">
                <thead>
                <tr>
                    <td>Nom Service</td>
                    <td>Nom agent</td>
                    <td>Type</td>
                    <td>Prix</td>
                    <td>Description</td>
                    <td>Etat</td>
                    <td>Contact</td>
                    <td>Region</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ service.nomService }}</td>
                    <td>{{ service.nomAgent }}</td>
                    <td>{{ service.type }}</td>
                    <td>{{ service.prix }}</td>
                    <td>{{ service.description }}</td>
                    <td>{{ service.etat }}</td>
                    <td>{{ service.contact }}</td>
                    <td>{{ service.region }}</td>

                </tr>
 {{ barcode({code: 'SUNFLOWER_by_SADDEM_MHIRI', type: 'qrcode', format: 'svg', width: 10, height: 10, color: 'black'}) }}

 </tbody>
</table>
</div>
</div>
</div>

</body>", "@Service/service/email-template.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\ServiceBundle\\Resources\\views\\service\\email-template.html.twig");
    }
}
