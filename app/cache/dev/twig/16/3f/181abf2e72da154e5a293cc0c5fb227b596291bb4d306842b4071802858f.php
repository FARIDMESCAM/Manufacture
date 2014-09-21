<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_163f181abf2e72da154e5a293cc0c5fb227b596291bb4d306842b4071802858f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"row\">
    <div class=\"msgOK\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <p >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class =\"well\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "  <br/>
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userphotos"]) ? $context["userphotos"] : $this->getContext($context, "userphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["userphoto"]) {
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 14
                echo "            ";
                if ((!(null === $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos")))) {
                    // line 15
                    echo "                <div class=\"row\">
                    <div class =\"well\">
                        ";
                    // line 18
                    echo "                        ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "principal") < 1)) {
                        // line 19
                        echo "                            <a class=\"navbar-brand\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_principale", array("photo" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                        echo "\">Définir en tant que photo principale</a>
                            ";
                    }
                    // line 21
                    echo "                            <hr>
                        <img width=\"130\" class=\"img-circle\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                    echo "\" /> 
                        <div class=\"col-lg-4 col-lg-offset-1\">
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_supprimer", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-danger\">supprimer</a>
                            
                        </div>
                     </div>
                </div>
        
            ";
                }
                // line 30
                echo " 
            
            
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            if (($this->getAttribute($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"), "count") == 0)) {
                // line 35
                echo "<p><em><strong>Vous n'avez pas associé de photo à votre profil.</strong></em></p>
<p><em><strong>Ceci permettrait pourtant à vos voisins de vous reconnaitre</strong></em></p>
";
            }
            // line 37
            echo " 
";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"), "count") < 3)) {
                // line 40
                echo "<div class=\"row\">
                    <div class=\"col-lg-4 col-lg-offset-4\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_ajout_U", array("id" => $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-success\">Ajouter Photo</a>
                    </div>
                </div>
";
            }
            // line 46
            echo "                <hr/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                <div class=\"col-lg-4 col-lg-offset-4\">
                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 95,  137 => 61,  84 => 31,  191 => 62,  185 => 61,  160 => 71,  152 => 51,  70 => 19,  65 => 24,  118 => 40,  77 => 22,  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 50,  104 => 38,  53 => 20,  265 => 116,  262 => 115,  259 => 113,  255 => 86,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  211 => 107,  192 => 99,  188 => 81,  180 => 78,  174 => 95,  170 => 75,  167 => 55,  165 => 92,  155 => 85,  127 => 43,  81 => 30,  76 => 21,  23 => 4,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 85,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 60,  140 => 62,  132 => 59,  128 => 46,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 113,  217 => 75,  208 => 97,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 48,  119 => 42,  102 => 33,  71 => 31,  67 => 18,  63 => 15,  59 => 17,  38 => 6,  94 => 28,  89 => 34,  85 => 31,  75 => 21,  68 => 19,  56 => 9,  87 => 32,  21 => 2,  26 => 2,  93 => 35,  88 => 26,  78 => 28,  46 => 9,  27 => 5,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 87,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 74,  138 => 49,  136 => 54,  121 => 42,  117 => 40,  105 => 34,  91 => 34,  62 => 23,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 22,  72 => 20,  69 => 25,  47 => 11,  40 => 8,  37 => 8,  22 => 3,  246 => 13,  157 => 86,  145 => 46,  139 => 73,  131 => 44,  123 => 47,  120 => 52,  115 => 39,  111 => 38,  108 => 37,  101 => 40,  98 => 29,  96 => 30,  83 => 32,  74 => 14,  66 => 18,  55 => 13,  52 => 12,  50 => 11,  43 => 13,  41 => 10,  35 => 5,  32 => 8,  29 => 2,  209 => 82,  203 => 103,  199 => 101,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 55,  162 => 73,  154 => 68,  149 => 66,  147 => 49,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 34,  92 => 33,  86 => 24,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 14,  57 => 15,  54 => 15,  51 => 12,  48 => 10,  45 => 12,  42 => 7,  39 => 7,  36 => 4,  33 => 5,  30 => 7,);
    }
}
