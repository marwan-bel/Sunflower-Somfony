<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/avisservice/avisservice')) {
                // avisservice_index
                if (preg_match('#^/avisservice/avisservice/(?P<idService>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_index']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::indexAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_avisservice_index;
                    }

                    return $ret;
                }
                not_avisservice_index:

                // avisservice_show
                if (preg_match('#^/avisservice/avisservice/(?P<idAvis>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_show']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_avisservice_show;
                    }

                    return $ret;
                }
                not_avisservice_show:

                // avisservice_new
                if (0 === strpos($pathinfo, '/avisservice/avisservice/new') && preg_match('#^/avisservice/avisservice/new/(?P<idService>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_new']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::newAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_avisservice_new;
                    }

                    return $ret;
                }
                not_avisservice_new:

                // avisservice_edit
                if (preg_match('#^/avisservice/avisservice/(?P<idAvis>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_edit']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_avisservice_edit;
                    }

                    return $ret;
                }
                not_avisservice_edit:

                // avisservice_delete
                if (preg_match('#^/avisservice/avisservice/(?P<idAvis>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_delete']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_avisservice_delete;
                    }

                    return $ret;
                }
                not_avisservice_delete:

                // avisservice_showadmin
                if (preg_match('#^/avisservice/avisservice/(?P<idAvis>[^/]++)/showadmin$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_showadmin']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_avisservice_showadmin;
                    }

                    return $ret;
                }
                not_avisservice_showadmin:

                // avisservice_newmobile
                if ('/avisservice/avisservice/newmobile/new' === $pathinfo) {
                    return array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::newmobileAction',  '_route' => 'avisservice_newmobile',);
                }

                if (0 === strpos($pathinfo, '/avisservice/avisservice/mobile')) {
                    // avisservice_mobile
                    if (preg_match('#^/avisservice/avisservice/mobile/(?P<idService>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'avisservice_mobile']), array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::mobileAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_avisservice_mobile;
                        }

                        return $ret;
                    }
                    not_avisservice_mobile:

                    // avisservice_deletmobile
                    if ('/avisservice/avisservice/mobiledelete/dele' === $pathinfo) {
                        $ret = array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::deletemobileAction',  '_route' => 'avisservice_deletmobile',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_avisservice_deletmobile;
                        }

                        return $ret;
                    }
                    not_avisservice_deletmobile:

                    // avisservice_modfiermobile
                    if ('/avisservice/avisservice/mobileupdate/update' === $pathinfo) {
                        $ret = array (  '_controller' => 'AvisserviceBundle\\Controller\\AvisServiceController::updatemobileAction',  '_route' => 'avisservice_modfiermobile',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_avisservice_modfiermobile;
                        }

                        return $ret;
                    }
                    not_avisservice_modfiermobile:

                }

            }

            // avisservice_homepage
            if ('/avisservice' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AvisserviceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'avisservice_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_avisservice_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'avisservice_homepage'));
                }

                return $ret;
            }
            not_avisservice_homepage:

            if (0 === strpos($pathinfo, '/admin/evenement')) {
                // evenement_show
                if ('/admin/evenement' === $pathinfo) {
                    return array (  '_controller' => 'AdministrationBundle\\Controller\\EvenementController::showAction',  '_route' => 'evenement_show',);
                }

                // evenement_admin_add
                if ('/admin/evenement/add' === $pathinfo) {
                    return array (  '_controller' => 'AdministrationBundle\\Controller\\EvenementController::addAction',  '_route' => 'evenement_admin_add',);
                }

                // evenement_admin_delete
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_admin_delete']), array (  '_controller' => 'AdministrationBundle\\Controller\\EvenementController::deleteAction',));
                }

                // evenement__admin_update
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/update$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement__admin_update']), array (  '_controller' => 'AdministrationBundle\\Controller\\EvenementController::deleteAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/service')) {
            if (0 === strpos($pathinfo, '/service/service')) {
                // service_index
                if ('/service/service' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::indexAction',  '_route' => 'service_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_service_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'service_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_service_index;
                    }

                    return $ret;
                }
                not_service_index:

                // service_show
                if (preg_match('#^/service/service/(?P<idService>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'service_show']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::showAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_service_show;
                    }

                    return $ret;
                }
                not_service_show:

                if (0 === strpos($pathinfo, '/service/service/admin/back')) {
                    // service_new
                    if ('/service/service/admin/back/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::newAction',  '_route' => 'service_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_service_new;
                        }

                        return $ret;
                    }
                    not_service_new:

                    // service_edit
                    if (preg_match('#^/service/service/admin/back/(?P<idService>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'service_edit']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_service_edit;
                        }

                        return $ret;
                    }
                    not_service_edit:

                    // service_delete
                    if (preg_match('#^/service/service/admin/back/(?P<idService>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'service_delete']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_service_delete;
                        }

                        return $ret;
                    }
                    not_service_delete:

                }

                // service_showfront
                if ('/service/service/showfront' === $pathinfo) {
                    $ret = array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::showfrontAction',  '_route' => 'service_showfront',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_service_showfront;
                    }

                    return $ret;
                }
                not_service_showfront:

                // service_showuser
                if (preg_match('#^/service/service/(?P<idService>[^/]++)/showuser$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'service_showuser']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::showuserAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_service_showuser;
                    }

                    return $ret;
                }
                not_service_showuser:

                // service_recherche
                if ('/service/service/admin/back/rech' === $pathinfo) {
                    $ret = array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::rechercheAction',  '_route' => 'service_recherche',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_service_recherche;
                    }

                    return $ret;
                }
                not_service_recherche:

                // service_showmobile
                if ('/service/service/all' === $pathinfo) {
                    $ret = array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::ShowmobileAction',  '_route' => 'service_showmobile',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_service_showmobile;
                    }

                    return $ret;
                }
                not_service_showmobile:

                // service_showmob
                if (0 === strpos($pathinfo, '/service/service/mob') && preg_match('#^/service/service/mob/(?P<idService>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'service_showmob']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::ShowmobAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_service_showmob;
                    }

                    return $ret;
                }
                not_service_showmob:

            }

            // service_homepage
            if ('/service' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ServiceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'service_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_service_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'service_homepage'));
                }

                return $ret;
            }
            not_service_homepage:

            if (0 === strpos($pathinfo, '/service/devis')) {
                // service_devis
                if (preg_match('#^/service/devis/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'service_devis']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::devisAction',));
                }

                // service_devis_pdf
                if (0 === strpos($pathinfo, '/service/devis-pdf') && preg_match('#^/service/devis\\-pdf/(?P<service>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'service_devis_pdf']), array (  '_controller' => 'ServiceBundle\\Controller\\ServiceController::invoiceAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/sav')) {
            // front_sav_homepage
            if ('/sav' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'SavBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_sav_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_front_sav_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'front_sav_homepage'));
                }

                return $ret;
            }
            not_front_sav_homepage:

            // front_sav_testprod
            if (0 === strpos($pathinfo, '/sav/testcoment') && preg_match('#^/sav/testcoment/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'front_sav_testprod']), array (  '_controller' => 'SavBundle\\Controller\\DefaultController::listAction',));
            }

            if (0 === strpos($pathinfo, '/sav/Reclamation_front')) {
                // front_reclamation
                if ('/sav/Reclamation_front' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\ReclamationController::Reclamation_frontAction',  '_route' => 'front_reclamation',);
                }

                // front_reclamation_ajout
                if ('/sav/Reclamation_front/ajout' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\ReclamationController::ReclamationajoutAction',  '_route' => 'front_reclamation_ajout',);
                }

                // front_reclamation_list
                if ('/sav/Reclamation_front/list' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\ReclamationController::listAction',  '_route' => 'front_reclamation_list',);
                }

                // front_reclamation_supp
                if (0 === strpos($pathinfo, '/sav/Reclamation_front/supp') && preg_match('#^/sav/Reclamation_front/supp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'front_reclamation_supp']), array (  '_controller' => 'SavBundle\\Controller\\ReclamationController::suppclaimAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/sav/Reclamation_back')) {
                // front_reclamation_back
                if ('/sav/Reclamation_back/list' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\Reclamation_backController::list_backAction',  '_route' => 'front_reclamation_back',);
                }

                // front_reclamation_back_traiter
                if (0 === strpos($pathinfo, '/sav/Reclamation_back/traiter') && preg_match('#^/sav/Reclamation_back/traiter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'front_reclamation_back_traiter']), array (  '_controller' => 'SavBundle\\Controller\\Reclamation_backController::Reclamation_traiterAction',));
                }

                // Reclamtion_mail
                if (0 === strpos($pathinfo, '/sav/Reclamation_back/email') && preg_match('#^/sav/Reclamation_back/email/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'Reclamtion_mail']), array (  '_controller' => 'SavBundle\\Controller\\Reclamation_backController::Envoyer_mailAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/sav/Appointment')) {
                // front_reclamation_front_app
                if ('/sav/Appointment/ajout' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\AppointmentController::ajoutappAction',  '_route' => 'front_reclamation_front_app',);
                }

                // front_reclamation_front_applist
                if ('/sav/Appointment/list' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\AppointmentController::listAction',  '_route' => 'front_reclamation_front_applist',);
                }

                // appointment_supp
                if (0 === strpos($pathinfo, '/sav/Appointment/supp') && preg_match('#^/sav/Appointment/supp/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'appointment_supp']), array (  '_controller' => 'SavBundle\\Controller\\AppointmentController::suppappAction',));
                }

                // appointmentlist_back
                if ('/sav/Appointment_back/list' === $pathinfo) {
                    return array (  '_controller' => 'SavBundle\\Controller\\Appointment_backController::listAction',  '_route' => 'appointmentlist_back',);
                }

                // appointmentraiter_back
                if (0 === strpos($pathinfo, '/sav/Appointment_back/traiter') && preg_match('#^/sav/Appointment_back/traiter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'appointmentraiter_back']), array (  '_controller' => 'SavBundle\\Controller\\Appointment_backController::Appointment_confAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/evenement')) {
            if (0 === strpos($pathinfo, '/evenement/admin')) {
                // Evenement_Dashboard
                if ('/evenement/admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::statAction',  '_route' => 'Evenement_Dashboard',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_Evenement_Dashboard;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'Evenement_Dashboard'));
                    }

                    return $ret;
                }
                not_Evenement_Dashboard:

                // Evenement_Dashboard2
                if ('/evenement/admin/Dashboard' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::statAction',  '_route' => 'Evenement_Dashboard2',);
                }

                if (0 === strpos($pathinfo, '/evenement/admin/A')) {
                    // evenement_index
                    if ('/evenement/admin/Afficher_eve' === $pathinfo) {
                        return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement_index',);
                    }

                    // evenement_showpar
                    if (0 === strpos($pathinfo, '/evenement/admin/Affichage_par') && preg_match('#^/evenement/admin/Affichage_par/(?P<idEvenement>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_showpar']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::showparAction',));
                    }

                    // evenement_new
                    if ('/evenement/admin/Ajouter_eve' === $pathinfo) {
                        return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
                    }

                }

                // evenement_edit
                if (0 === strpos($pathinfo, '/evenement/admin/Modifier_eve') && preg_match('#^/evenement/admin/Modifier_eve/(?P<idEvenement>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_edit']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::editAction',));
                }

                // evenement_delete
                if (0 === strpos($pathinfo, '/evenement/admin/Supprimer_eve') && preg_match('#^/evenement/admin/Supprimer_eve/(?P<idEvenement>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_delete']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement/ajouter')) {
                // ajouterparmobile
                if ('/evenement/ajouterpar' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ajouterparmobileAction',  '_route' => 'ajouterparmobile',);
                }

                // ajouterlikemobile
                if ('/evenement/ajouterlike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ajouterlikemobileAction',  '_route' => 'ajouterlikemobile',);
                }

                // ajouterdislikemobile
                if ('/evenement/ajouterdislike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::ajouterdislikemobileAction',  '_route' => 'ajouterdislikemobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement/user')) {
                // evenement_user
                if ('/evenement/user' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::userAction',  '_route' => 'evenement_user',);
                }

                // evenement_useraff
                if (0 === strpos($pathinfo, '/evenement/useraff') && preg_match('#^/evenement/useraff/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_useraff']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::useraffAction',));
                }

                // evenement_userr
                if (preg_match('#^/evenement/user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'evenement_userr']), array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::userrAction',));
                }

            }

            // Affichermobile
            if ('/evenement/Affichermobile' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AffichermobileAction',  '_route' => 'Affichermobile',);
            }

            // Afficherrechmobile
            if ('/evenement/Afficherrech' === $pathinfo) {
                return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::AfficherrechmobileAction',  '_route' => 'Afficherrechmobile',);
            }

            if (0 === strpos($pathinfo, '/evenement/verif')) {
                // verifmobile
                if ('/evenement/verif' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::verifmobileAction',  '_route' => 'verifmobile',);
                }

                // verifevemobile
                if ('/evenement/verifeve' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::verifevemobileAction',  '_route' => 'verifevemobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement/supprimer')) {
                // supprimerparmobile
                if ('/evenement/supprimerpar' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::supprimerparmobileAction',  '_route' => 'supprimerparmobile',);
                }

                // supprimerlikemobile
                if ('/evenement/supprimerlike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::supprimerlikemobileAction',  '_route' => 'supprimerlikemobile',);
                }

                // supprimerdislikemobile
                if ('/evenement/supprimerdislike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::supprimerdislikemobileAction',  '_route' => 'supprimerdislikemobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/evenement/nbr')) {
                // nbrparmobile
                if ('/evenement/nbrpar' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nbrparmobileAction',  '_route' => 'nbrparmobile',);
                }

                // nbrlikemobile
                if ('/evenement/nbrlike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nbrlikemobileAction',  '_route' => 'nbrlikemobile',);
                }

                // nbrdislikemobile
                if ('/evenement/nbrdislike' === $pathinfo) {
                    return array (  '_controller' => 'EvenementBundle\\Controller\\EvenementController::nbrdislikemobileAction',  '_route' => 'nbrdislikemobile',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/pro')) {
            if (0 === strpos($pathinfo, '/produit')) {
                if (0 === strpos($pathinfo, '/produit/produit')) {
                    // produit_index
                    if ('/produit/produit' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::indexAction',  '_route' => 'produit_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_produit_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_produit_index;
                        }

                        return $ret;
                    }
                    not_produit_index:

                    // produit_show
                    if (preg_match('#^/produit/produit/(?P<idProduit>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_show']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_produit_show;
                        }

                        return $ret;
                    }
                    not_produit_show:

                    // produit_new
                    if ('/produit/produit/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::newAction',  '_route' => 'produit_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_new;
                        }

                        return $ret;
                    }
                    not_produit_new:

                    // produit_edit
                    if (preg_match('#^/produit/produit/(?P<idProduit>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_edit']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_edit;
                        }

                        return $ret;
                    }
                    not_produit_edit:

                    // produit_delete
                    if (preg_match('#^/produit/produit/(?P<idProduit>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_delete']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::deleteAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_delete;
                        }

                        return $ret;
                    }
                    not_produit_delete:

                    if (0 === strpos($pathinfo, '/produit/produitfront')) {
                        // produit_showfront
                        if (preg_match('#^/produit/produitfront/(?P<idProduit>[^/]++)/showfront$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_showfront']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::showfrontAction',));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_produit_showfront;
                            }

                            return $ret;
                        }
                        not_produit_showfront:

                        // produit_indexfront
                        if ('/produit/produitfront' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::indexfrontAction',  '_route' => 'produit_indexfront',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_produit_indexfront;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_indexfront'));
                            }

                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_produit_indexfront;
                            }

                            return $ret;
                        }
                        not_produit_indexfront:

                        // produit_indexfronte
                        if (preg_match('#^/produit/produitfront/(?P<idCategorie>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_indexfronte']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::indexfronteAction',));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_produit_indexfronte;
                            }

                            return $ret;
                        }
                        not_produit_indexfronte:

                    }

                }

                elseif (0 === strpos($pathinfo, '/produit/favoris')) {
                    // favoris_index
                    if ('/produit/favoris' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::indexAction',  '_route' => 'favoris_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_favoris_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'favoris_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_favoris_index;
                        }

                        return $ret;
                    }
                    not_favoris_index:

                    // favoris_new
                    if (0 === strpos($pathinfo, '/produit/favoris/new') && preg_match('#^/produit/favoris/new/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_new']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::newAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_favoris_new;
                        }

                        return $ret;
                    }
                    not_favoris_new:

                    // favoris_delete
                    if (0 === strpos($pathinfo, '/produit/favoris/delete') && preg_match('#^/produit/favoris/delete/(?P<idFavoris>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_delete']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::deleteAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_favoris_delete;
                        }

                        return $ret;
                    }
                    not_favoris_delete:

                    // favoris_show
                    if (0 === strpos($pathinfo, '/produit/favoris/showfav') && preg_match('#^/produit/favoris/showfav/(?P<idFavoris>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_show']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_favoris_show;
                        }

                        return $ret;
                    }
                    not_favoris_show:

                }

                elseif (0 === strpos($pathinfo, '/produit/mob/produitfront')) {
                    // produit_indexfrontmob
                    if ('/produit/mob/produitfront' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::indexfrontmobAction',  '_route' => 'produit_indexfrontmob',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_produit_indexfrontmob;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'produit_indexfrontmob'));
                        }

                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_indexfrontmob;
                        }

                        return $ret;
                    }
                    not_produit_indexfrontmob:

                    // produit_categoriemob
                    if ('/produit/mob/produitfront/categorie' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::categoriemobAction',  '_route' => 'produit_categoriemob',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_categoriemob;
                        }

                        return $ret;
                    }
                    not_produit_categoriemob:

                    // produit_filtermob
                    if (0 === strpos($pathinfo, '/produit/mob/produitfront/filter') && preg_match('#^/produit/mob/produitfront/filter/(?P<nomCategorie>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'produit_filtermob']), array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::filtermobAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_filtermob;
                        }

                        return $ret;
                    }
                    not_produit_filtermob:

                    // produit_mostratedmob
                    if ('/produit/mob/produitfront/mostrated' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::mostratedmobAction',  '_route' => 'produit_mostratedmob',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_mostratedmob;
                        }

                        return $ret;
                    }
                    not_produit_mostratedmob:

                    // produit_newestmob
                    if ('/produit/mob/produitfront/newest' === $pathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\ProduitController::newestmobAction',  '_route' => 'produit_newestmob',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_produit_newestmob;
                        }

                        return $ret;
                    }
                    not_produit_newestmob:

                }

                elseif (0 === strpos($pathinfo, '/produit/mob/favoris')) {
                    // favoris_indexmob
                    if ('/produit/mob/favoris' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::indexmobAction',  '_route' => 'favoris_indexmob',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_favoris_indexmob;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'favoris_indexmob'));
                        }

                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_favoris_indexmob;
                        }

                        return $ret;
                    }
                    not_favoris_indexmob:

                    // favoris_newmob
                    if (0 === strpos($pathinfo, '/produit/mob/favoris/new') && preg_match('#^/produit/mob/favoris/new/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_newmob']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::newmobAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_favoris_newmob;
                        }

                        return $ret;
                    }
                    not_favoris_newmob:

                    // favoris_existmob
                    if (0 === strpos($pathinfo, '/produit/mob/favoris/exist') && preg_match('#^/produit/mob/favoris/exist/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_existmob']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::existmobAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_favoris_existmob;
                        }

                        return $ret;
                    }
                    not_favoris_existmob:

                    // favoris_deletemob
                    if (0 === strpos($pathinfo, '/produit/mob/favoris/delete') && preg_match('#^/produit/mob/favoris/delete/(?P<idFavoris>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'favoris_deletemob']), array (  '_controller' => 'ProduitBundle\\Controller\\FavorisController::deletemobAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_favoris_deletemob;
                        }

                        return $ret;
                    }
                    not_favoris_deletemob:

                }

            }

            elseif (0 === strpos($pathinfo, '/promotion')) {
                if (0 === strpos($pathinfo, '/promotion/admin')) {
                    if (0 === strpos($pathinfo, '/promotion/admin/A')) {
                        // promotion_index
                        if ('/promotion/admin/Afficher_pro' === $pathinfo) {
                            return array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::indexAction',  '_route' => 'promotion_index',);
                        }

                        // promotion_show
                        if (0 === strpos($pathinfo, '/promotion/admin/Affichage_pro') && preg_match('#^/promotion/admin/Affichage_pro/(?P<idPromotion>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'promotion_show']), array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::showAction',));
                        }

                        // promotion_new
                        if ('/promotion/admin/Ajouter_pro' === $pathinfo) {
                            return array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::newAction',  '_route' => 'promotion_new',);
                        }

                    }

                    // promotion_edit
                    if (0 === strpos($pathinfo, '/promotion/admin/Modifier_pro') && preg_match('#^/promotion/admin/Modifier_pro/(?P<idPromotion>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'promotion_edit']), array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::editAction',));
                    }

                    // promotion_delete
                    if (0 === strpos($pathinfo, '/promotion/admin/Supprimer_pro') && preg_match('#^/promotion/admin/Supprimer_pro/(?P<idPromotion>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'promotion_delete']), array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::deleteAction',));
                    }

                }

                // afficherpromobile
                if ('/promotion/afficherpro' === $pathinfo) {
                    return array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::afficherpromobileAction',  '_route' => 'afficherpromobile',);
                }

                if (0 === strpos($pathinfo, '/promotion/user_pro')) {
                    // promotion_user
                    if ('/promotion/user_pro' === $pathinfo) {
                        return array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::userAction',  '_route' => 'promotion_user',);
                    }

                    // promotion_user_show
                    if (0 === strpos($pathinfo, '/promotion/user_pro_show') && preg_match('#^/promotion/user_pro_show/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'promotion_user_show']), array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::usershowAction',));
                    }

                }

                // imgmobile
                if ('/promotion/img' === $pathinfo) {
                    return array (  '_controller' => 'PromotionBundle\\Controller\\PromotionController::imgmobileAction',  '_route' => 'imgmobile',);
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        // user_homepage
        if ('/user' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_homepage'));
            }

            return $ret;
        }
        not_user_homepage:

        if (0 === strpos($pathinfo, '/commande')) {
            // commande_index
            if ('/commande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_commande_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_commande_index;
                }

                return $ret;
            }
            not_commande_index:

            // commande_show
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_show']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::showppAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_commande_show;
                }

                return $ret;
            }
            not_commande_show:

            if (0 === strpos($pathinfo, '/commande/new')) {
                // commande_new
                if ('/commande/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::newAction',  '_route' => 'commande_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_commande_new;
                    }

                    return $ret;
                }
                not_commande_new:

                // commande_newm
                if ('/commande/newM' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::newMAction',  '_route' => 'commande_newm',);
                }

            }

            // commande_edit
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_edit']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_commande_edit;
                }

                return $ret;
            }
            not_commande_edit:

            // commande_delete
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_delete']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_commande_delete;
                }

                return $ret;
            }
            not_commande_delete:

            // commande_invoice
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/invoice$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_invoice']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::invoiceAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_commande_invoice;
                }

                return $ret;
            }
            not_commande_invoice:

            if (0 === strpos($pathinfo, '/commande/panier')) {
                // commande_panier
                if ('/commande/panier' === $pathinfo) {
                    $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::panierAction',  '_route' => 'commande_panier',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commande_panier;
                    }

                    return $ret;
                }
                not_commande_panier:

                // commande_panierm
                if ('/commande/panierm' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::panierMAction',  '_route' => 'commande_panierm',);
                }

                // commande_delpanier
                if (preg_match('#^/commande/panier/(?P<idLigneCmd>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_delpanier']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::delpanierAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commande_delpanier;
                    }

                    return $ret;
                }
                not_commande_delpanier:

            }

            elseif (0 === strpos($pathinfo, '/commande/ajouter')) {
                // commande_ajouter
                if (preg_match('#^/commande/ajouter/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_ajouter']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajouterAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commande_ajouter;
                    }

                    return $ret;
                }
                not_commande_ajouter:

                // commande_ajouterm
                if (0 === strpos($pathinfo, '/commande/ajouterM') && preg_match('#^/commande/ajouterM/(?P<idProduit>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_ajouterm']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajouterMAction',));
                }

            }

            // panier_delete
            if (preg_match('#^/commande/(?P<idProduit>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'panier_delete']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::deletePAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_panier_delete;
                }

                return $ret;
            }
            not_panier_delete:

            // panier_deleteM
            if (preg_match('#^/commande/(?P<idLigneCmd>[^/]++)/delM$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'panier_deleteM']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::deletePMAction',));
            }

            if (0 === strpos($pathinfo, '/commande/add')) {
                // add_qte
                if (preg_match('#^/commande/add/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'add_qte']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::addqteAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_add_qte;
                    }

                    return $ret;
                }
                not_add_qte:

                // add_qteM
                if (0 === strpos($pathinfo, '/commande/addM') && preg_match('#^/commande/addM/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_qteM']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::addqteMAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/commande/del')) {
                // del_qte
                if (preg_match('#^/commande/del/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'del_qte']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::delqteAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_del_qte;
                    }

                    return $ret;
                }
                not_del_qte:

                // del_qteM
                if (0 === strpos($pathinfo, '/commande/delM') && preg_match('#^/commande/delM/(?P<idProduit>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'del_qteM']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::delqteMAction',));
                }

            }

            // commande_final
            if ('/commande/final' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::finalAction',  '_route' => 'commande_final',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_commande_final;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_final'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_commande_final;
                }

                return $ret;
            }
            not_commande_final:

            if (0 === strpos($pathinfo, '/commande/finale')) {
                // commande_coupon
                if ('/commande/finale' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::couponAction',  '_route' => 'commande_coupon',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_commande_coupon;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'commande_coupon'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_commande_coupon;
                    }

                    return $ret;
                }
                not_commande_coupon:

                // commande_couponM
                if (0 === strpos($pathinfo, '/commande/finaleM') && preg_match('#^/commande/finaleM/(?P<coupon>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_couponM']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::couponMAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/commande/mycmd')) {
                // commande_list
                if ('/commande/mycmd' === $pathinfo) {
                    $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::listcmdAction',  '_route' => 'commande_list',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_commande_list;
                    }

                    return $ret;
                }
                not_commande_list:

                // commande_listM
                if ('/commande/mycmdM' === $pathinfo) {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::listcmdMAction',  '_route' => 'commande_listM',);
                }

            }

            // commande_showuser
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/showuser$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_showuser']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_commande_showuser;
                }

                return $ret;
            }
            not_commande_showuser:

            // commande_showuserM
            if (preg_match('#^/commande/(?P<idCmd>[^/]++)/showuserM$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'commande_showuserM']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::showMAction',));
            }

            // userLog
            if (0 === strpos($pathinfo, '/commande/userlogin') && preg_match('#^/commande/userlogin/(?P<email>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'userLog']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::userloginAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_userLog;
                }

                return $ret;
            }
            not_userLog:

            // userid
            if (0 === strpos($pathinfo, '/commande/userid') && preg_match('#^/commande/userid/(?P<username>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'userid']), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::idmobAction',));
            }

            // all
            if ('/commande/all' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::allAction',  '_route' => 'all',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_all;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'all'));
                }

                return $ret;
            }
            not_all:

        }

        elseif (0 === strpos($pathinfo, '/coupon')) {
            // coupon_index
            if ('/coupon' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::indexAction',  '_route' => 'coupon_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_coupon_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'coupon_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_coupon_index;
                }

                return $ret;
            }
            not_coupon_index:

            // coupon_show
            if (preg_match('#^/coupon/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'coupon_show']), array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_coupon_show;
                }

                return $ret;
            }
            not_coupon_show:

            // coupon_new
            if ('/coupon/new' === $pathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::newAction',  '_route' => 'coupon_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_coupon_new;
                }

                return $ret;
            }
            not_coupon_new:

            // coupon_edit
            if (preg_match('#^/coupon/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'coupon_edit']), array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_coupon_edit;
                }

                return $ret;
            }
            not_coupon_edit:

            // coupon_delete
            if (preg_match('#^/coupon/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'coupon_delete']), array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_coupon_delete;
                }

                return $ret;
            }
            not_coupon_delete:

            // commande_stat
            if ('/coupon/statistic' === $pathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CouponController::statbackAction',  '_route' => 'commande_stat',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_commande_stat;
                }

                return $ret;
            }
            not_commande_stat:

        }

        elseif (0 === strpos($pathinfo, '/ma')) {
            // user_index
            if ('/ma' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_user_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_index'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_user_index;
                }

                return $ret;
            }
            not_user_index:

            // user_show
            if (preg_match('#^/ma/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'user_show']), array (  '_controller' => 'CommandeBundle\\Controller\\UserController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_user_show;
                }

                return $ret;
            }
            not_user_show:

            // user_new
            if ('/ma/new' === $pathinfo) {
                $ret = array (  '_controller' => 'CommandeBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_user_new;
                }

                return $ret;
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/ma/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'user_edit']), array (  '_controller' => 'CommandeBundle\\Controller\\UserController::editAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_user_edit;
                }

                return $ret;
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/ma/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'user_delete']), array (  '_controller' => 'CommandeBundle\\Controller\\UserController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_user_delete;
                }

                return $ret;
            }
            not_user_delete:

        }

        // produite_index
        if ('/Cmd' === $pathinfo) {
            $ret = array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::CmdAction',  '_route' => 'produite_index',);
            if (!in_array($canonicalMethod, ['GET'])) {
                $allow = array_merge($allow, ['GET']);
                goto not_produite_index;
            }

            return $ret;
        }
        not_produite_index:

        // new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'CommandeBundle:PanierController:new',  '_route' => 'new',);
        }

        if (0 === strpos($pathinfo, '/forum')) {
            if (0 === strpos($pathinfo, '/forum/sujet')) {
                // sujet_index
                if ('/forum/sujet' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'ForumBundle\\Controller\\SujetController::indexAction',  '_route' => 'sujet_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_sujet_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sujet_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_sujet_index;
                    }

                    return $ret;
                }
                not_sujet_index:

                // sujet_show
                if (preg_match('#^/forum/sujet/(?P<idSujet>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sujet_show']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_sujet_show;
                    }

                    return $ret;
                }
                not_sujet_show:

                // sujet_new
                if ('/forum/sujet/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'ForumBundle\\Controller\\SujetController::newAction',  '_route' => 'sujet_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_sujet_new;
                    }

                    return $ret;
                }
                not_sujet_new:

                // sujet_edit
                if (preg_match('#^/forum/sujet/(?P<idSujet>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sujet_edit']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_sujet_edit;
                    }

                    return $ret;
                }
                not_sujet_edit:

                // sujet_delete
                if (preg_match('#^/forum/sujet/(?P<idSujet>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'sujet_delete']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_sujet_delete;
                    }

                    return $ret;
                }
                not_sujet_delete:

                // stat_back
                if ('/forum/sujet/statback' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetController::statbackAction',  '_route' => 'stat_back',);
                }

            }

            // forum_homepage
            if ('/forum' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexAction',  '_route' => 'forum_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_forum_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'forum_homepage'));
                }

                return $ret;
            }
            not_forum_homepage:

            if (0 === strpos($pathinfo, '/forum/f')) {
                // forum_frontpage
                if ('/forum/front' === $pathinfo) {
                    $ret = array (  '_controller' => 'ForumBundle\\Controller\\DefaultController::indexfAction',  '_route' => 'forum_frontpage',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_forum_frontpage;
                    }

                    return $ret;
                }
                not_forum_frontpage:

                if (0 === strpos($pathinfo, '/forum/forum')) {
                    if (0 === strpos($pathinfo, '/forum/forumlist')) {
                        // forum_list
                        if ('/forum/forumlist' === $pathinfo) {
                            $ret = array (  '_controller' => 'ForumBundle\\Controller\\SujetController::indexforumlistAction',  '_route' => 'forum_list',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_forum_list;
                            }

                            return $ret;
                        }
                        not_forum_list:

                        // forum_list_filter
                        if (preg_match('#^/forum/forumlist/(?P<idCategorieSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'forum_list_filter']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::indexforumlisteAction',));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_forum_list_filter;
                            }

                            return $ret;
                        }
                        not_forum_list_filter:

                        // forum_list_tri
                        if ('/forum/forumlisttri' === $pathinfo) {
                            $ret = array (  '_controller' => 'ForumBundle\\Controller\\SujetController::afficherTriFrontAction',  '_route' => 'forum_list_tri',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_forum_list_tri;
                            }

                            return $ret;
                        }
                        not_forum_list_tri:

                    }

                    // forum_detail
                    if (0 === strpos($pathinfo, '/forum/forumdetail') && preg_match('#^/forum/forumdetail/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'forum_detail']), array (  '_controller' => 'ForumBundle\\Controller\\SujetController::indexforumdetailAction',));
                    }

                    if (0 === strpos($pathinfo, '/forum/forumdetails')) {
                        // forum_detail_comment
                        if (preg_match('#^/forum/forumdetails/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'forum_detail_comment']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::AjouterCommentaireAction',));
                        }

                        // forum_detail_comment_modif
                        if (0 === strpos($pathinfo, '/forum/forumdetails/modif') && preg_match('#^/forum/forumdetails/modif/(?P<idCom>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'forum_detail_comment_modif']), array (  '_controller' => 'ForumBundle\\Controller\\CommentaireController::ModifierCommentaireAction',));
                        }

                    }

                }

                // filter_par_categWS
                if (0 === strpos($pathinfo, '/forum/filtrerWS') && preg_match('#^/forum/filtrerWS/(?P<nomCateg>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'filter_par_categWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::FiltrerSujetWSAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/forum/a')) {
                // aff_list_sujWS
                if ('/forum/affsujWS' === $pathinfo) {
                    return array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AfflistSujetWSAction',  '_route' => 'aff_list_sujWS',);
                }

                // aff_list_commentWS
                if (0 === strpos($pathinfo, '/forum/affcomWS') && preg_match('#^/forum/affcomWS/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'aff_list_commentWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::afficherCommentaireWSAction',));
                }

                // ajout_commentWS
                if (0 === strpos($pathinfo, '/forum/ajoutcommentWS') && preg_match('#^/forum/ajoutcommentWS/(?P<idSujet>[^/]++)/(?P<commentaires>[^/]++)/(?P<nomSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_commentWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterCommentaireWSAction',));
                }

            }

            // supp_commentWS
            if (0 === strpos($pathinfo, '/forum/suppcomWS') && preg_match('#^/forum/suppcomWS/(?P<idCom>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'supp_commentWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::SupprimerCommentaireWSAction',));
            }

            // modif_commentWS
            if (0 === strpos($pathinfo, '/forum/modifcomWS') && preg_match('#^/forum/modifcomWS/(?P<idCom>[^/]++)/(?P<commentaires>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modif_commentWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::ModifierCommentaireWSAction',));
            }

            // list_CategorieSujet
            if ('/forum/listCategorieWS' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::ListCategSujetWSAction',  '_route' => 'list_CategorieSujet',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_list_CategorieSujet;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'list_CategorieSujet'));
                }

                return $ret;
            }
            not_list_CategorieSujet:

            // ajout_jaimeWS
            if (0 === strpos($pathinfo, '/forum/jaimeWS') && preg_match('#^/forum/jaimeWS/(?P<idCom>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_jaimeWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterJaimeWSAction',));
            }

            // ajout_signalWS
            if (0 === strpos($pathinfo, '/forum/dislikeWS') && preg_match('#^/forum/dislikeWS/(?P<idCom>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_signalWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterSignalWSAction',));
            }

            // aff_VerifNbrLikeDislikeWS
            if ('/forum/nbrLikeDislikeVerif' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AffTableVerifLikeDislikeWSAction',  '_route' => 'aff_VerifNbrLikeDislikeWS',);
            }

            // aff_VerifNbrVueWS
            if ('/forum/nbrVueVerif' === $pathinfo) {
                return array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AffTableVerifNbrVueWSAction',  '_route' => 'aff_VerifNbrVueWS',);
            }

            if (0 === strpos($pathinfo, '/forum/Ajout')) {
                // ajout_LikeDislikeWS
                if (0 === strpos($pathinfo, '/forum/AjoutLikeDislikeWS') && preg_match('#^/forum/AjoutLikeDislikeWS/(?P<idUser>[^/]++)/(?P<idCom>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_LikeDislikeWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterLikeDislikeWSAction',));
                }

                // ajout_nbrVueWS
                if (0 === strpos($pathinfo, '/forum/AjoutnbrVueWS') && preg_match('#^/forum/AjoutnbrVueWS/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_nbrVueWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterNbrVueWSAction',));
                }

                // ajout_VueWS
                if (0 === strpos($pathinfo, '/forum/AjoutVueWS') && preg_match('#^/forum/AjoutVueWS/(?P<idUser>[^/]++)/(?P<idSujet>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajout_VueWS']), array (  '_controller' => 'ForumBundle\\Controller\\SujetWSController::AjouterVueWSAction',));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
