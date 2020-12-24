<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_c0f3e211a0aba3fd5230402781de75568f0d038c80b0bf470c62937a73e807d7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", []), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<main>
    <div class=\"customer-page theme-default-margin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3 col-md-8 offset-md-2\">
                    <div class=\"login\">
                        <div id=\"CustomerLoginForm\">

<form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" accept-charset=\"UTF-8\">
    <div class=\"login-form-container\">
    <div class=\"login-form\">
        <div class=\"login-text\">
            <h2>Login</h2><p>Please login using account detail bellow.</p>
        </div>
                        ";
        // line 21
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 22
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 24
        echo "
                        <input class=\"form-control background-white\" type=\"text\" placeholder=\"Email\"
                               aria-label=\"Text input with dropdown button\" id=\"username\" name=\"_username\"
                               value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
                               autocomplete=\"username\">

                        <input class=\"form-control background-white\" type=\"Password\"
                               placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\"
                               autocomplete=\"current-password\"
                               aria-label=\"Text input with dropdown button\" required>

 <div class=\"right\">
            <label class=\"form-check-label\">
                <input id=\"remember_me\" name=\"_remember_me\" value=\"on\"
                       class=\"form-check-input\" type=\"checkbox\"><span
                        class=\"color-7\">Remember Me</span>
            </label>
 </div>
            <div class=\"login-toggle-btn\">
                <div class=\"form-action-button\">
                    <button type=\"submit\" class=\"theme-default-button\">Sign In</button>
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
</main>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  64 => 24,  58 => 22,  56 => 21,  47 => 15,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<main>
    <div class=\"customer-page theme-default-margin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 offset-lg-3 col-md-8 offset-md-2\">
                    <div class=\"login\">
                        <div id=\"CustomerLoginForm\">

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" accept-charset=\"UTF-8\">
    <div class=\"login-form-container\">
    <div class=\"login-form\">
        <div class=\"login-text\">
            <h2>Login</h2><p>Please login using account detail bellow.</p>
        </div>
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                        {% endif %}

                        <input class=\"form-control background-white\" type=\"text\" placeholder=\"Email\"
                               aria-label=\"Text input with dropdown button\" id=\"username\" name=\"_username\"
                               value=\"{{ last_username }}\" required=\"required\"
                               autocomplete=\"username\">

                        <input class=\"form-control background-white\" type=\"Password\"
                               placeholder=\"Password\" id=\"password\" name=\"_password\" required=\"required\"
                               autocomplete=\"current-password\"
                               aria-label=\"Text input with dropdown button\" required>

 <div class=\"right\">
            <label class=\"form-check-label\">
                <input id=\"remember_me\" name=\"_remember_me\" value=\"on\"
                       class=\"form-check-input\" type=\"checkbox\"><span
                        class=\"color-7\">Remember Me</span>
            </label>
 </div>
            <div class=\"login-toggle-btn\">
                <div class=\"form-action-button\">
                    <button type=\"submit\" class=\"theme-default-button\">Sign In</button>
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
</main>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\final_pepiniere\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
