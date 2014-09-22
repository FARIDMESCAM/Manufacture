<?php

/* ::layout_0.html.twig */
class __TwigTemplate_f2333671f8414dd0b9c6ebc3e6d8be02b7d620e79d344f7c18a5fe012dd95bbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<! DOCTYPE html >
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Se prêter aux uns et aux autres\">
        <meta name=\"author\" content=\"Farid MESCAM\">
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script> 
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
        <div class=\"navbar-wrapper\">
            <div class=\"container\">
                <div class=\"navbar navbar-custom navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class =\"row\">
                            <div class =\"col-lg-4\">  
                                       ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                                <a  class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a>
                                        ";
        } else {
            // line 29
            echo "                                <a class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion </a>
                                        ";
        }
        // line 30
        echo "  </div> 
                            <div class =\"col-lg-3\">
                                <div class=\"navbar-header\">

                                    <a class=\"navbar-brand\" href=\"#\">LA MANUFACTURE PANTIN</a>
                                </div>
                            </div>
                            <div class =\"col-lg-4\">
                            </div>
                        </div>

                                         ";
        // line 41
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 42
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "gethabilite", array(), "method") == true)) {
                // line 43
                echo "                        <ul id=\"menu-demo2\">
                            <li><a href=\"#\">Mon compte</a>
                                <ul>

                                    <li><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Consulter</a></li>
                                    <li><a href=\"";
                // line 48
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\">Changer de mot de passe</a></li>
                                    <li><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">Modifier</a></li>
                                    <li><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
                echo "\">Ré-initialiser le mot de passe</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Mes Objets</a>
                                <ul>
                                    <li><a href=\"";
                // line 55
                echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
                echo "\">Consulter</a></li>
                                    <li><a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
                echo "\">Ajouter des objets</a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\"> </a>
                                <ul>
                                    <li><a href=\"#\"> </a></li>
                                    <li><a href=\"#\"> </a></li>
                                    <li><a href=\"#\"> </a></li>
                                    <li><a href=\"#\"> </a></li>
                                </ul>
                            </li>
                            <li><a href=\"#\">Menu général</a>
                                <ul>
                                    <li><a href=\"";
                // line 69
                echo $this->env->getExtension('routing')->getPath("fsm_objet_list");
                echo "\">Toutes les annonces</a></li>

                                </ul>
                            </li>
                        </ul>
                                        ";
            } else {
                // line 75
                echo "                                        ";
            }
            // line 76
            echo "                          ";
        }
        // line 77
        echo "

                    </div>
                </div>
            </div>
        </div>




    </div>
  ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo " 

    <footer>
        <div class =\"row\">
            <hr>

                                                                ";
        // line 95
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 96
            echo "            <div class =\"col-lg-2\">
                                                                 ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 98
                echo "                                                            ";
                if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos")))) {
                    // line 99
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal", array(), "method") == 1)) {
                        // line 100
                        echo "                <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 101
                    echo " 
                                                             ";
                }
                // line 102
                echo " 
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            </div> 
            <div class =\"col-lg-2\"><p class=\"text-center\">
                    Connecté en tant que ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</p>
            </div>


                                    ";
        }
        // line 110
        echo "    
            <div class =\"col-lg-4\"></div> 
            <div class =\"col-lg-4\"><p class=\"text-center\"></p></div>
        </div>
    </footer>

";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "</body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-perso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        // line 89
        echo "  ";
    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        // line 118
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" ></script>
    <script type =\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\" ></script>


";
    }

    public function getTemplateName()
    {
        return "::layout_0.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 119,  271 => 118,  268 => 116,  264 => 89,  261 => 88,  254 => 15,  250 => 14,  245 => 13,  242 => 12,  236 => 5,  229 => 123,  227 => 116,  219 => 110,  211 => 106,  207 => 104,  200 => 102,  196 => 101,  188 => 100,  185 => 99,  182 => 98,  178 => 97,  175 => 96,  173 => 95,  165 => 89,  163 => 88,  150 => 77,  147 => 76,  144 => 75,  135 => 69,  119 => 56,  115 => 55,  107 => 50,  103 => 49,  99 => 48,  95 => 47,  89 => 43,  86 => 42,  84 => 41,  71 => 30,  65 => 29,  59 => 27,  57 => 26,  47 => 18,  45 => 12,  41 => 11,  37 => 10,  29 => 5,  23 => 1,  74 => 35,  61 => 23,  49 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
