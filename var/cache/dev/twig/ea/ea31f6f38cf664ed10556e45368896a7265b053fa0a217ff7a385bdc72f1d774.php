<?php

/* @Commande/commande/finaliser.html.twig */
class __TwigTemplate_e0eadb0f43b8daa260edd871a6cf8a8b851da5b1808bca6f01a34f8a86a80305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basef.html.twig", "@Commande/commande/finaliser.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/finaliser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/finaliser.html.twig"));

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

        echo "  <title>SunFlower Finaliser CMD</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <!-- Modal -->
    <div id=\"myModal\" class=\"modal fade post-area blog-area pt-110 pb-95 blog-column\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\" style=\"width: 600px;border-radius:20px\" >
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modification de l'adresse</h4>
                </div>
                <div class=\"modal-body\">
                    <table class=\"table c_table theme-color\">

                        <tr>
                            <th>Nom et Prenom:</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Adresse:</th>
                            <td>
                                <form class=\"row comment-form mt-2\" method=\"post\" >


                                    <div class=\"col-sm-12\">
                                        <div class=\"form-group\">
                                            <textarea rows=\"4\" class=\"form-control no-resize\" name=\"adresse\" id=\"adresse\" required=\"required\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "</textarea>

                                        </div>

                                    </div>


                            </td>
                        </tr>
                        <tr>
                            <th>Telephone:</th>
                            <td> <input type=\"number\" class=\"form-control no-resize\" name=\"sexe\" id=\"sexe\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", []), "html", null, true);
        echo "\" required=\"required\"></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</td>
                        </tr>

                        </tbody>
                    </table>



                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Quitter</button>
                    <button type=\"submit\" class=\"btn btn btn-primary\" id=\"valider\" name=\"valider\" >Confirmer l'adresse</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div class=\"theme-blush\">
    <div class=\"post-area blog-area pt-110 pb-95 blog-column\">
        <section class=\"content blog-page\">
            <div class=\"body_scroll\">
                <div class=\"container-fluid\">
                    <div class=\"body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                            </div>
                            <div class=\"col-md-6 text-right\">
                                <td><button type=\"button\" class=\"btn btn-info btn-lg\" name=\"delete\"  data-toggle=\"modal\" data-target=\"#myModal\">Modifier</button>


                            </div>

                        </div>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-md-6 col-sm-6\">
                            <font size=\"5\"> <b>1. Adresse</b></font><br>

                            <b>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", []), "html", null, true);
        echo "</b><br>
                            ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "<br>
                            (+216) ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", []), "html", null, true);
        echo "<br>
                            ";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "<br>

                        </div>

                    </div>
                </div>
                <br>



                <div class=\"table-responsive\">
                    ";
        // line 105
        $context["i"] = 1;
        // line 106
        echo "                    <font size=\"5\"> <b>2. Panier</b></font><br>
                    <table class=\"table c_table theme-color\">

                        <tr> <td></td>
                            <td>#</td>
                            <td >Item</td>
                            <td></td>
                            <td>Description</td>
                            <td>Quantity</td>
                            <td>Prix unitaire</td>
                            <td>Total</td>
                        </tr>


                        <tbody>

                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["lcmd"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lcmd"]) {
            // line 123
            echo "                            <tr> <td></td>
                                <td> ";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </td>
                                ";
            // line 125
            $context["imag"] = ("uploads/images/" . $this->getAttribute($context["lcmd"], "image", []));
            // line 126
            echo "                                <td><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["imag"]) ? $context["imag"] : $this->getContext($context, "imag"))), "html", null, true);
            echo "\" width=\"40\" alt=\"Product img\"></td>
                                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "nomProduit", []), "html", null, true);
            echo "</td>
                                <td class=\"hidden-sm-down\">
                                    ";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "description", []), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "quantite", []), "html", null, true);
            echo "</td>

                                <td class=\"hidden-sm-down\"> ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "prix", []), "html", null, true);
            echo "DT</td>
                                <td>";
            // line 134
            echo twig_escape_filter($this->env, ($this->getAttribute($context["lcmd"], "prix", []) * $this->getAttribute($context["lcmd"], "quantite", [])), "html", null, true);
            echo " DT</td>


                            </tr>
                            ";
            // line 138
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 139
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lcmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                        </tbody>
                    </table>
                </div>


            </div>

            <font size=\"5\"><b>3. MODE DE PAIEMENT</b></font><br>
            <table class=\"table c_table theme-color\">

                <tr><td></td><td></td>
                    <td>
                        <font size=\"4\">Quel moyen de paiement voulez-vous utiliser?</font>
                        <br>
                        <input type=\"radio\" color=\"yellow\" checked=\"checked\"> <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/pay.png"), "html", null, true);
        echo "\" ><b> Paiement à la livraison</b>
                    </td></tr>
                <tr><td></td>
                    <td></td>
                    <td>
                        Payez votre commande cash à la livraison!<br><br>
                        <b>Important:</b><br>
                        <li> Assurez-vous de préparer le montant exact de la commande. <br>Les livreurs ne disposent pas toujours d'espèces pour vous rendre la monnaie.</li><br>
                        <li> Nous acceptons uniquement le payement en Dinar Tunisien.</li><br>
                        <li> Le paiement par carte bancaire, chèques ne sont pas acceptés.</li><br>
                    </td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><b>Vous avez un bon d'achat ?</b></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        <form class=\"row comment-form mt-2\" id=\"coupon\" method=\"post\" action=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_coupon");
        echo "\">
                            <input type=\"text\" name=\"coupon\" id=\"coupon\" placeholder=\"Entrez ici votre coupon de réduction\" size=\"80\"/>

                            <button  type=\"submit\" id=\"valide\" name=\"valide\" class=\"btn btn-app btn-primary waves-effect\" href=\"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_coupon");
        echo "\">Ajouter votre coupon</button>
                        </form>

                    </td>
                </tr>
            </table>
            <br>


            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <b> Remise: </b><br>
                        ";
        // line 192
        echo twig_escape_filter($this->env, ((isset($context["remise"]) ? $context["remise"] : $this->getContext($context, "remise")) * 100), "html", null, true);
        echo " %<br>
                        <b> Totale:</b>

                        ";
        // line 195
        $context["x"] = "false";
        // line 196
        echo "                        <h3 class=\"mb-0 text-success\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), 3, "."), "html", null, true);
        echo " DT</h3>

                        ";
        // line 198
        if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", []) != "") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", []) != ""))) {
            // line 199
            echo "
                            <a class=\"btn btn-app btn-primary waves-effect\"  id=\"conf\" name=\"conf\" href=\"";
            // line 200
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("commande_new");
            echo "\">confirmer votre commande</a>

                        ";
        }
        // line 203
        echo "


                    </div>
                    <font size=\"5\"> <b>Verifier votre adresse et votre Numéro de telephone</b></font><br>
                </div>
            </div>
    </div>
    </section>
    </body>

    <br>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"./js/search.js\" type=\"text/javascript\"></script>
    <script>

        \$(\"#sexe\").keyup(function(){

            if((\$(this).val().length == 8)&&(isNaN(\$(this).val())==false)){
                \$(this).css({
                    borderColor : 'green',
                    color : 'green',
                    hintPopover: 'valid',

                });
                document.getElementById(\"valider\").disabled = false;

            }
            else{
                \$(this).css({
                    borderColor : 'red',
                    color : 'red',
                    hintPopover: 'invalid',
                });
                document.getElementById(\"valider\").disabled = true;


            }
        });


        \$(\"#adresse\").keyup(function(){
            if(\$(this).val().length < 10){
                \$(this).css({
                    borderColor : 'red',
                    color : 'red',
                    hintPopover: 'valid',

                });
                document.getElementById(\"valider\").disabled = true;
            }
            else{
                \$(this).css({
                    borderColor : 'green',
                    color : 'grey'
                });
                document.getElementById(\"valider\").disabled = false;
            }
        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Commande/commande/finaliser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 203,  351 => 200,  348 => 199,  346 => 198,  340 => 196,  338 => 195,  332 => 192,  314 => 177,  308 => 174,  286 => 155,  270 => 141,  263 => 139,  261 => 138,  254 => 134,  250 => 133,  245 => 131,  240 => 129,  235 => 127,  230 => 126,  228 => 125,  224 => 124,  221 => 123,  217 => 122,  199 => 106,  197 => 105,  183 => 94,  179 => 93,  175 => 92,  169 => 91,  122 => 47,  115 => 43,  101 => 32,  86 => 22,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
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


{% block titre %}  <title>SunFlower Finaliser CMD</title>{% endblock %}
{% block content %}

    <!-- Modal -->
    <div id=\"myModal\" class=\"modal fade post-area blog-area pt-110 pb-95 blog-column\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\" style=\"width: 600px;border-radius:20px\" >
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Modification de l'adresse</h4>
                </div>
                <div class=\"modal-body\">
                    <table class=\"table c_table theme-color\">

                        <tr>
                            <th>Nom et Prenom:</th>
                            <td>{{ user.nom }} {{ user.prenom }}</td>
                        </tr>
                        <tr>
                            <th>Adresse:</th>
                            <td>
                                <form class=\"row comment-form mt-2\" method=\"post\" >


                                    <div class=\"col-sm-12\">
                                        <div class=\"form-group\">
                                            <textarea rows=\"4\" class=\"form-control no-resize\" name=\"adresse\" id=\"adresse\" required=\"required\">{{ user.adresse }}</textarea>

                                        </div>

                                    </div>


                            </td>
                        </tr>
                        <tr>
                            <th>Telephone:</th>
                            <td> <input type=\"number\" class=\"form-control no-resize\" name=\"sexe\" id=\"sexe\" value=\"{{ user.sexe }}\" required=\"required\"></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ user.email }}</td>
                        </tr>

                        </tbody>
                    </table>



                </div>
                <div class=\"modal-footer\">

                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Quitter</button>
                    <button type=\"submit\" class=\"btn btn btn-primary\" id=\"valider\" name=\"valider\" >Confirmer l'adresse</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <div class=\"theme-blush\">
    <div class=\"post-area blog-area pt-110 pb-95 blog-column\">
        <section class=\"content blog-page\">
            <div class=\"body_scroll\">
                <div class=\"container-fluid\">
                    <div class=\"body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                            </div>
                            <div class=\"col-md-6 text-right\">
                                <td><button type=\"button\" class=\"btn btn-info btn-lg\" name=\"delete\"  data-toggle=\"modal\" data-target=\"#myModal\">Modifier</button>


                            </div>

                        </div>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-md-6 col-sm-6\">
                            <font size=\"5\"> <b>1. Adresse</b></font><br>

                            <b>{{ user.prenom }} {{ user.nom }}</b><br>
                            {{ user.adresse }}<br>
                            (+216) {{ user.sexe }}<br>
                            {{ user.email }}<br>

                        </div>

                    </div>
                </div>
                <br>



                <div class=\"table-responsive\">
                    {%  set i=1 %}
                    <font size=\"5\"> <b>2. Panier</b></font><br>
                    <table class=\"table c_table theme-color\">

                        <tr> <td></td>
                            <td>#</td>
                            <td >Item</td>
                            <td></td>
                            <td>Description</td>
                            <td>Quantity</td>
                            <td>Prix unitaire</td>
                            <td>Total</td>
                        </tr>


                        <tbody>

                        {% for lcmd in lcmd %}
                            <tr> <td></td>
                                <td> {{  i }} </td>
                                {% set imag = 'uploads/images/'~lcmd.image %}
                                <td><img src=\"{{ asset(imag ) }}\" width=\"40\" alt=\"Product img\"></td>
                                <td>{{ lcmd.nomProduit }}</td>
                                <td class=\"hidden-sm-down\">
                                    {{ lcmd.description }}
                                </td>
                                <td>{{ lcmd.quantite }}</td>

                                <td class=\"hidden-sm-down\"> {{ lcmd.prix }}DT</td>
                                <td>{{ lcmd.prix * lcmd.quantite }} DT</td>


                            </tr>
                            {%  set i=i+1 %}

                        {% endfor %}
                        </tbody>
                    </table>
                </div>


            </div>

            <font size=\"5\"><b>3. MODE DE PAIEMENT</b></font><br>
            <table class=\"table c_table theme-color\">

                <tr><td></td><td></td>
                    <td>
                        <font size=\"4\">Quel moyen de paiement voulez-vous utiliser?</font>
                        <br>
                        <input type=\"radio\" color=\"yellow\" checked=\"checked\"> <img src=\"{{ asset('uploads/images/pay.png' ) }}\" ><b> Paiement à la livraison</b>
                    </td></tr>
                <tr><td></td>
                    <td></td>
                    <td>
                        Payez votre commande cash à la livraison!<br><br>
                        <b>Important:</b><br>
                        <li> Assurez-vous de préparer le montant exact de la commande. <br>Les livreurs ne disposent pas toujours d'espèces pour vous rendre la monnaie.</li><br>
                        <li> Nous acceptons uniquement le payement en Dinar Tunisien.</li><br>
                        <li> Le paiement par carte bancaire, chèques ne sont pas acceptés.</li><br>
                    </td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><b>Vous avez un bon d'achat ?</b></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td>
                        <form class=\"row comment-form mt-2\" id=\"coupon\" method=\"post\" action=\"{{ path('commande_coupon')}}\">
                            <input type=\"text\" name=\"coupon\" id=\"coupon\" placeholder=\"Entrez ici votre coupon de réduction\" size=\"80\"/>

                            <button  type=\"submit\" id=\"valide\" name=\"valide\" class=\"btn btn-app btn-primary waves-effect\" href=\"{{ path('commande_coupon')}}\">Ajouter votre coupon</button>
                        </form>

                    </td>
                </tr>
            </table>
            <br>


            <div class=\"body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                    </div>
                    <div class=\"col-md-6 text-right\">
                        <b> Remise: </b><br>
                        {{ remise *100}} %<br>
                        <b> Totale:</b>

                        {% set x=\"false\" %}
                        <h3 class=\"mb-0 text-success\">{{ tot|number_format(3, '.') }} DT</h3>

                        {%  if (user.adresse)!=\"\" and (user.sexe)!=\"\" %}

                            <a class=\"btn btn-app btn-primary waves-effect\"  id=\"conf\" name=\"conf\" href=\"{{ path('commande_new')}}\">confirmer votre commande</a>

                        {% endif %}



                    </div>
                    <font size=\"5\"> <b>Verifier votre adresse et votre Numéro de telephone</b></font><br>
                </div>
            </div>
    </div>
    </section>
    </body>

    <br>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"./js/search.js\" type=\"text/javascript\"></script>
    <script>

        \$(\"#sexe\").keyup(function(){

            if((\$(this).val().length == 8)&&(isNaN(\$(this).val())==false)){
                \$(this).css({
                    borderColor : 'green',
                    color : 'green',
                    hintPopover: 'valid',

                });
                document.getElementById(\"valider\").disabled = false;

            }
            else{
                \$(this).css({
                    borderColor : 'red',
                    color : 'red',
                    hintPopover: 'invalid',
                });
                document.getElementById(\"valider\").disabled = true;


            }
        });


        \$(\"#adresse\").keyup(function(){
            if(\$(this).val().length < 10){
                \$(this).css({
                    borderColor : 'red',
                    color : 'red',
                    hintPopover: 'valid',

                });
                document.getElementById(\"valider\").disabled = true;
            }
            else{
                \$(this).css({
                    borderColor : 'green',
                    color : 'grey'
                });
                document.getElementById(\"valider\").disabled = false;
            }
        });

    </script>

{% endblock %}", "@Commande/commande/finaliser.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\finaliser.html.twig");
    }
}
