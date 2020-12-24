<?php

/* @Commande/commande/email.html.twig */
class __TwigTemplate_784037e82bba3305b4d34ea35366c10c47de8d99523ff2502bc57ac05c8863b3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Commande/commande/email.html.twig"));

        // line 1
        echo "
        <section>

                            Cher(e)  <b>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", []), "html", null, true);
        echo "</b>,<br>

                            Merci d’avoir effectué vos achats sur Sunflower ! Votre commande est <b>en attente de confirmation.</b><br><br>
                            Nous vous rappellerons dans les 24 heures qui suivent pour confirmer votre commande, <br>
                            sinon nous vous enverrons un email en cas d’injoignabilité .<br><br><br>

                           <b> Notez s'il vous plaît :</b><br><br>

                           <li> Si vous ne répondez pas dans les 48 heures qui suivent , <br>
                               nous annulerons votre commande et vous en informerons par e-mail.</li>

                            <li> Une fois la commande confirmée, vous ne serez pas en mesure de l'annuler <br>
                                Si nécessaire, veuillez-nous en informer au cours de l'appel de confirmation de votre commande.</li>



                <br>


                <b> Votre commande pour:</b>

                    ";
        // line 25
        $context["i"] = 1;
        // line 26
        echo "                    ";
        $context["tot"] = 0;
        // line 27
        echo "
                            <table>
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td ></td>
                                    <td>Produit</td>
                                    <td></td>
                                    <td>Quantity</td>

                                    <td>Prix</td>
                                </tr>

                                </thead>
                                <tbody>

                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["lcmd"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lcmd"]) {
            // line 44
            echo "                                    <tr> <td></td>
                                        <td> ";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </td>

                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "nomProduit", []), "html", null, true);
            echo "</td>
                                        <td>

                                        </td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["lcmd"], "quantite", []), "html", null, true);
            echo "</td>

                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, ($this->getAttribute($context["lcmd"], "prix", []) * $this->getAttribute($context["lcmd"], "quantite", [])), "html", null, true);
            echo " DT</td>


                                    </tr>
                                    ";
            // line 57
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 58
            echo "                                    ";
            $context["tot"] = ((isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")) + ($this->getAttribute($context["lcmd"], "prix", []) * $this->getAttribute($context["lcmd"], "quantite", [])));
            // line 59
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lcmd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                </tbody>
                            </table>
                                        <table>
                                            <thead>
                                            <tr>
                                                Totale:<b>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["tot"]) ? $context["tot"] : $this->getContext($context, "tot")), "html", null, true);
        echo "DT</b>
                                            </tr>

                                            </thead>

                                        </table>



            <table>

                <tr><td></td><td></td>

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

            </table>
            <br>


                 <br>
                    Bon Shopping!<br>
                    <br>
                    Bonne journée,<br><br><br>

                    L'équipe de SunFlower Tunisie<br><br>

                   <b> Vous avez des questions?</b><br><br>

                   <li> Visitez notre page Besoin d’aide</li>
                    <li> Pour contacter le service client, veuillez remplir le formulaire de contact ou appelez le +216 54414021</li>
                    <li>Nous sommes à votre disposition: Lun-Ven 10h00-15h00; Sam 10h00-12h00</li>


    </section>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Commande/commande/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  119 => 60,  113 => 59,  110 => 58,  108 => 57,  101 => 53,  96 => 51,  89 => 47,  84 => 45,  81 => 44,  77 => 43,  59 => 27,  56 => 26,  54 => 25,  30 => 4,  25 => 1,);
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
        <section>

                            Cher(e)  <b>{{ user.prenom }}</b>,<br>

                            Merci d’avoir effectué vos achats sur Sunflower ! Votre commande est <b>en attente de confirmation.</b><br><br>
                            Nous vous rappellerons dans les 24 heures qui suivent pour confirmer votre commande, <br>
                            sinon nous vous enverrons un email en cas d’injoignabilité .<br><br><br>

                           <b> Notez s'il vous plaît :</b><br><br>

                           <li> Si vous ne répondez pas dans les 48 heures qui suivent , <br>
                               nous annulerons votre commande et vous en informerons par e-mail.</li>

                            <li> Une fois la commande confirmée, vous ne serez pas en mesure de l'annuler <br>
                                Si nécessaire, veuillez-nous en informer au cours de l'appel de confirmation de votre commande.</li>



                <br>


                <b> Votre commande pour:</b>

                    {%  set i=1 %}
                    {%  set tot=0 %}

                            <table>
                                <thead>
                                <tr>
                                    <td>#</td>
                                    <td ></td>
                                    <td>Produit</td>
                                    <td></td>
                                    <td>Quantity</td>

                                    <td>Prix</td>
                                </tr>

                                </thead>
                                <tbody>

                                {% for lcmd in lcmd %}
                                    <tr> <td></td>
                                        <td> {{  i }} </td>

                                        <td>{{ lcmd.nomProduit }}</td>
                                        <td>

                                        </td>
                                        <td>{{ lcmd.quantite }}</td>

                                        <td>{{ lcmd.prix * lcmd.quantite }} DT</td>


                                    </tr>
                                    {%  set i=i+1 %}
                                    {%  set tot=tot+ lcmd.prix * lcmd.quantite %}
                                {% endfor %}
                                </tbody>
                            </table>
                                        <table>
                                            <thead>
                                            <tr>
                                                Totale:<b>{{ tot }}DT</b>
                                            </tr>

                                            </thead>

                                        </table>



            <table>

                <tr><td></td><td></td>

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

            </table>
            <br>


                 <br>
                    Bon Shopping!<br>
                    <br>
                    Bonne journée,<br><br><br>

                    L'équipe de SunFlower Tunisie<br><br>

                   <b> Vous avez des questions?</b><br><br>

                   <li> Visitez notre page Besoin d’aide</li>
                    <li> Pour contacter le service client, veuillez remplir le formulaire de contact ou appelez le +216 54414021</li>
                    <li>Nous sommes à votre disposition: Lun-Ven 10h00-15h00; Sam 10h00-12h00</li>


    </section>



", "@Commande/commande/email.html.twig", "C:\\wamp64\\www\\final_pepiniere\\src\\CommandeBundle\\Resources\\views\\commande\\email.html.twig");
    }
}
