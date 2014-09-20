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
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        <div class=\"navbar-wrapper\">
            <div class=\"container\">
                <div class=\"navbar navbar-custom navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class =\"row\">
                            <div class =\"col-lg-4\">  
                                       ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 24
            echo "                                <a  class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a>
                                        ";
        } else {
            // line 26
            echo "                                <a class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion </a>
                                        ";
        }
        // line 27
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
        // line 38
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "gethabilite", array(), "method") == true)) {
                // line 40
                echo "                                       <ul id=\"menu-demo2\">
\t<li><a href=\"#\">Mon compte</a>
\t\t<ul>
\t\t\t
                        <li><a href=\"";
                // line 44
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\">Changer de mot de passe</a></li>
\t\t\t<li><a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">Modifier</a></li>
                        <li><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
                echo "\">Ré-initialiser le mot de passe</a></li>
                </ul>
\t</li>
\t<li><a href=\"#\">Mes Objets</a>
\t\t<ul>
\t\t\t<li><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
                echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
                // line 53
                echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
                echo "\">Ajouter des objets</a></li>
                </ul>
\t</li>
\t<li><a href=\"#\"> </a>
\t\t<ul>
\t\t\t<li><a href=\"#\"> </a></li>
\t\t\t<li><a href=\"#\"> </a></li>
\t\t\t<li><a href=\"#\"> </a></li>
\t\t\t<li><a href=\"#\"> </a></li>
\t\t</ul>
\t</li>
\t<li><a href=\"#\">Menu général</a>
\t\t<ul>
\t\t\t<li><a href=\"";
                // line 66
                echo $this->env->getExtension('routing')->getPath("fsm_objet_list");
                echo "\">Toutes les annonces</a></li>

\t\t</ul>
\t</li>
</ul>
                                        ";
            } else {
                // line 72
                echo "                                        ";
            }
            // line 73
            echo "                          ";
        }
        // line 74
        echo "                                                    
                                                  
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>




                                                    </div>
  ";
        // line 85
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo " 

                                                    <footer>
                                                        <div class =\"row\">
                                                        <hr>
                                                     
                                                                ";
        // line 92
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 93
            echo "                                                         <div class =\"col-lg-2\">
                                                                 ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 95
                echo "                                                            ";
                if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos")))) {
                    // line 96
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal", array(), "method") == 1)) {
                        // line 97
                        echo "                                                             <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 98
                    echo " 
                                                             ";
                }
                // line 99
                echo " 
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                                             </div> 
                                                                <div class =\"col-lg-2\"><p class=\"text-center\">
                                                                Connecté en tant que ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</p>
                                                        </div>
                                                        
                                                           
                                    ";
        }
        // line 107
        echo "    
                                                        <div class =\"col-lg-4\"></div> 
                                                        <div class =\"col-lg-4\"><p class=\"text-center\"></p></div>
                                                    </div>
                                                    </footer>

";
        // line 113
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "                                                    </body>
                                                    </html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-perso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 85
    public function block_body($context, array $blocks = array())
    {
        // line 86
        echo "  ";
    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        // line 115
        echo "                                                    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" ></script>
                                                    <script type =\"text/javascript\" src=\"";
        // line 116
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
        return array (  265 => 116,  262 => 115,  259 => 113,  255 => 86,  252 => 85,  246 => 13,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  221 => 120,  219 => 113,  211 => 107,  203 => 103,  199 => 101,  192 => 99,  188 => 98,  180 => 97,  177 => 96,  174 => 95,  170 => 94,  167 => 93,  165 => 92,  157 => 86,  155 => 85,  142 => 74,  139 => 73,  136 => 72,  127 => 66,  111 => 53,  107 => 52,  99 => 47,  95 => 46,  91 => 45,  87 => 44,  81 => 40,  78 => 39,  76 => 38,  63 => 27,  57 => 26,  51 => 24,  39 => 15,  37 => 10,  29 => 5,  23 => 1,  74 => 33,  61 => 23,  49 => 23,  43 => 13,  31 => 3,  28 => 2,);
    }
}
