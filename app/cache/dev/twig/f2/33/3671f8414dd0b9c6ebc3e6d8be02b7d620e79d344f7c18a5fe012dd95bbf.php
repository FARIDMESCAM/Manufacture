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
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div class=\"navbar-wrapper\">
            <div class=\"container\">
                <div class=\"navbar navbar-custom navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class =\"row\">
                            <div class =\"col-lg-4\">  
                                       ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "                                <a  class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion </a>
                                        ";
        } else {
            // line 25
            echo "                                <a class=\"navbar-brand\" href =\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion </a>
                                        ";
        }
        // line 26
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
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "gethabilite", array(), "method") == true)) {
                // line 39
                echo "                                       <ul id=\"menu-demo2\">
\t<li><a href=\"#\">Mon compte</a>
\t\t<ul>
\t\t\t
                        <li><a href=\"";
                // line 43
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
                // line 44
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\">Changer de mot de passe</a></li>
\t\t\t<li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">Modifier</a></li>
                        <li><a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
                echo "\">Ré-initialiser le mot de passe</a></li>
                </ul>
\t</li>
\t<li><a href=\"#\">Mes Objets</a>
\t\t<ul>
\t\t\t<li><a href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
                echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
                // line 52
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
                // line 65
                echo $this->env->getExtension('routing')->getPath("fsm_objet_list");
                echo "\">Toutes les annonces</a></li>

\t\t</ul>
\t</li>
</ul>
                                        ";
            } else {
                // line 71
                echo "                                        ";
            }
            // line 72
            echo "                          ";
        }
        // line 73
        echo "                                                    
                                                  
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>




                                                    </div>
  ";
        // line 84
        $this->displayBlock('body', $context, $blocks);
        // line 85
        echo " 

                                                    <footer>
                                                        <div class =\"row\">
                                                        <hr>
                                                     
                                                                ";
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "                                                         <div class =\"col-lg-2\">
                                                                 ";
            // line 93
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 94
                echo "                                                            ";
                if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "getPhotos")))) {
                    // line 95
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal", array(), "method") == 1)) {
                        // line 96
                        echo "                                                             <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 97
                    echo " 
                                                             ";
                }
                // line 98
                echo " 
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                                                             </div> 
                                                                <div class =\"col-lg-2\"><p class=\"text-center\">
                                                                Connecté en tant que ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</p>
                                                        </div>
                                                        
                                                           
                                    ";
        }
        // line 106
        echo "    
                                                        <div class =\"col-lg-4\"></div> 
                                                        <div class =\"col-lg-4\"><p class=\"text-center\"></p></div>
                                                    </div>
                                                    </footer>

";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "                                                    </body>
                                                    </html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-perso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 84
    public function block_body($context, array $blocks = array())
    {
        // line 85
        echo "  ";
    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        // line 114
        echo "                                                    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" ></script>
                                                    <script type =\"text/javascript\" src=\"";
        // line 115
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
        return array (  264 => 115,  261 => 114,  258 => 112,  254 => 85,  251 => 84,  245 => 12,  241 => 11,  236 => 10,  233 => 9,  227 => 5,  220 => 119,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 98,  187 => 97,  179 => 96,  176 => 95,  173 => 94,  169 => 93,  166 => 92,  164 => 91,  156 => 85,  154 => 84,  141 => 73,  138 => 72,  135 => 71,  126 => 65,  110 => 52,  106 => 51,  98 => 46,  94 => 45,  90 => 44,  86 => 43,  80 => 39,  77 => 38,  75 => 37,  62 => 26,  56 => 25,  50 => 23,  48 => 22,  36 => 9,  29 => 5,  23 => 1,  57 => 14,  53 => 13,  47 => 9,  38 => 14,  34 => 6,  31 => 3,  28 => 2,);
    }
}
