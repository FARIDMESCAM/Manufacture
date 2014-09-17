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
            echo "                                       <ul id=\"menu-demo2\">
\t<li><a href=\"#\">Mon compte</a>
\t\t<ul>
\t\t\t
                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer de mot de passe</a></li>
\t\t\t<li><a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Modifier</a></li>
                        <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Ré-initialiser le mot de passe</a></li>
                </ul>
\t</li>
\t<li><a href=\"#\">Mes Objets</a>
\t\t<ul>
\t\t\t<li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
            echo "\">Consulter</a></li>
\t\t\t<li><a href=\"";
            // line 51
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
            // line 64
            echo $this->env->getExtension('routing')->getPath("fsm_objet_list");
            echo "\">Toutes les annonces</a></li>

\t\t</ul>
\t</li>
</ul>
                                        ";
        } else {
            // line 70
            echo "                                        ";
        }
        // line 71
        echo "                                                    
                                                  
                                                    </div>
                                                    </div>
                                                    </div>
                                                    </div>




                                                    </div>
  ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo " 

                                                    <footer>
                                                        <div class =\"row\">
                                                        <hr>
                                                     
                                                                ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 90
            echo "                                                         <div class =\"col-lg-2\">
                                                                 ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 92
                echo "                                                            ";
                if ((!(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "getPhotos")))) {
                    // line 93
                    echo "                                                            ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getPrincipal", array(), "method") == 1)) {
                        // line 94
                        echo "                                                             <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 95
                    echo " 
                                                             ";
                }
                // line 96
                echo " 
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                                                             </div> 
                                                                <div class =\"col-lg-2\"><p class=\"text-center\">
                                                                Connecté en tant que ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "</p>
                                                        </div>
                                                        
                                                           
                                    ";
        }
        // line 104
        echo "    
                                                        <div class =\"col-lg-4\"></div> 
                                                        <div class =\"col-lg-4\"><p class=\"text-center\">06 18 07 03 93</p></div>
                                                    </div>
                                                    </footer>

";
        // line 110
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
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

    // line 82
    public function block_body($context, array $blocks = array())
    {
        // line 83
        echo "  ";
    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        // line 112
        echo "                                                    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\" ></script>
                                                    <script type =\"text/javascript\" src=\"";
        // line 113
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
        return array (  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 92,  160 => 90,  150 => 83,  148 => 82,  83 => 42,  77 => 38,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  111 => 37,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 61,  143 => 56,  135 => 71,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 14,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 37,  68 => 14,  56 => 25,  50 => 23,  29 => 5,  87 => 43,  72 => 16,  55 => 12,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 3,  43 => 8,  41 => 7,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 64,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 44,  69 => 25,  66 => 15,  62 => 26,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 94,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 45,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 11,  48 => 22,  45 => 8,  42 => 7,  39 => 9,  36 => 9,  33 => 4,  30 => 7,);
    }
}
