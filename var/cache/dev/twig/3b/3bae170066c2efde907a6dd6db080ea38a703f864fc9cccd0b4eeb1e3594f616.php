<?php

/* @Commande/commande/invoice.html.twig */
class __TwigTemplate_d916a04d66db8234ad84fcb0df5cd0d54d614713f02c43765bb581bc4662a377 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/invoice.html.twig"));

        // line 1
        echo "



<meta charset=\"utf-8\">
<title>Facture PDF</title>

<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>

<br>  <br>
<br class=\"theme-blush\">
<br>  <br>

<div class=\"invoice-box\">
    <table>

        <tr>
            <td>
                Facture #: ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "idCmd", []), "html", null, true);
        echo "<br>
                Le: ";
        // line 112
        if ($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCmd", [])) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "dateCmd", []), "Y-m-d"), "html", null, true);
        }
        echo "<br>
            </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>

            <td> </td><td> </td>
            <td> </td>
            <td> </td>



            <td> ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["client"]);
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 134
            echo "                    <strong>
                        ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", []), "html", null, true);
            echo "
                        ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", []), "html", null, true);
            echo "
                        <br>
                        ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", []), "html", null, true);
            echo "
                    </strong>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </td>
        </tr>
    </table>
    </td>
    </tr>
    <table>
        <tr>
            <td colspan=\"2\">
                <table>
                    <tr class=\"top\">
                        <td>
                            ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "lieuLiv", []), "html", null, true);
        echo "<br>


                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <table>
            <tr class=\"heading\">
                <td>
                    Mode de paiement
                </td>

            </tr>

            <tr class=\"details\">
                <td>
                    ";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "modeP", []), "html", null, true);
        echo "
                </td>

            </tr>
        </table>
        <table>
            <tr class=\"heading\">
                <td>
                    Item
                </td>

                <td>
                    Quantiter
                </td>


                <td>
                    Prix Unitaire
                </td>

                <td>
                    Prix
                </td>
            </tr>
            ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nbrP0"]) ? $context["nbrP0"] : $this->getContext($context, "nbrP0")));
        foreach ($context['_seq'] as $context["_key"] => $context["nbrP"]) {
            // line 196
            echo "                <tr class=\"item\">
                    <td>
                        ";
            // line 198
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "nomProduit", []), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "qte", []), "html", null, true);
            echo "
                    </td>

                    <td>
                        ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["nbrP"], "prix", []), "html", null, true);
            echo " DT
                    </td>
                    <td>
                        ";
            // line 209
            echo twig_escape_filter($this->env, ($this->getAttribute($context["nbrP"], "prix", []) * $this->getAttribute($context["nbrP"], "qte", [])), "html", null, true);
            echo " DT
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbrP'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "

            <tr class=\"total\">
                <td></td> <td></td> <td></td>

                <td>
                    Total:  ";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "montant", []), "html", null, true);
        echo " DT
                </td>
            </tr>
        </table>
    </table>
</div>












";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Commande/commande/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 219,  292 => 213,  282 => 209,  276 => 206,  269 => 202,  262 => 198,  258 => 196,  254 => 195,  227 => 171,  205 => 152,  192 => 141,  183 => 138,  178 => 136,  174 => 135,  171 => 134,  167 => 133,  141 => 112,  137 => 111,  25 => 1,);
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



<meta charset=\"utf-8\">
<title>Facture PDF</title>

<style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
</style>

<br>  <br>
<br class=\"theme-blush\">
<br>  <br>

<div class=\"invoice-box\">
    <table>

        <tr>
            <td>
                Facture #: {{ commande.idCmd }}<br>
                Le: {% if commande.dateCmd %}{{ commande.dateCmd|date('Y-m-d') }}{% endif %}<br>
            </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>
            <td> </td><td> </td>
            <td> </td>
            <td> </td>

            <td> </td><td> </td>
            <td> </td>
            <td> </td>



            <td> {% for client in client %}
                    <strong>
                        {{ client.nom }}
                        {{ client.prenom }}
                        <br>
                        {{ client.email }}
                    </strong>
                {% endfor %}
            </td>
        </tr>
    </table>
    </td>
    </tr>
    <table>
        <tr>
            <td colspan=\"2\">
                <table>
                    <tr class=\"top\">
                        <td>
                            {{ commande.lieuLiv }}<br>


                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <table>
            <tr class=\"heading\">
                <td>
                    Mode de paiement
                </td>

            </tr>

            <tr class=\"details\">
                <td>
                    {{ commande.modeP }}
                </td>

            </tr>
        </table>
        <table>
            <tr class=\"heading\">
                <td>
                    Item
                </td>

                <td>
                    Quantiter
                </td>


                <td>
                    Prix Unitaire
                </td>

                <td>
                    Prix
                </td>
            </tr>
            {% for nbrP in nbrP0 %}
                <tr class=\"item\">
                    <td>
                        {{ nbrP.nomProduit }}
                    </td>

                    <td>
                        {{ nbrP.qte }}
                    </td>

                    <td>
                        {{ nbrP.prix }} DT
                    </td>
                    <td>
                        {{ nbrP.prix * nbrP.qte }} DT
                    </td>
                </tr>
            {% endfor %}


            <tr class=\"total\">
                <td></td> <td></td> <td></td>

                <td>
                    Total:  {{ commande.montant }} DT
                </td>
            </tr>
        </table>
    </table>
</div>












", "@Commande/commande/invoice.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\invoice.html.twig");
    }
}
