<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1a1d1aca5bfbcb1575260911c7c7516fcc77782d3e7113c3342fa6a913bd246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fsmUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fsmUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "   
    <div class=\"row\">
     <div class=\"col-lg-4 col-lg-offset-4\">
         <div class =\"well\">
       
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
         </div>
            <div class =\"well\">
    <input class=\"form-control\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
     <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
   </div>
<div class =\"well\"> 
    
    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
 </div>
</form>
                                    
            </div>
        </div>
    </div>
    
           <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
            <div class =\"well\">
                
                <p class=\"text-center\"><strong> <a  href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a>
                    </strong></p>
                        
     </div>
                 </div>
           </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  174 => 75,  139 => 61,  134 => 59,  127 => 57,  84 => 31,  81 => 30,  52 => 12,  184 => 77,  178 => 59,  155 => 52,  153 => 67,  145 => 49,  120 => 52,  74 => 27,  65 => 24,  118 => 40,  58 => 18,  20 => 1,  161 => 71,  114 => 50,  104 => 36,  96 => 30,  76 => 21,  53 => 20,  37 => 10,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 73,  160 => 53,  150 => 83,  148 => 65,  83 => 32,  77 => 22,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 76,  169 => 54,  140 => 47,  132 => 70,  128 => 46,  111 => 38,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 70,  143 => 56,  135 => 48,  131 => 58,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 18,  63 => 15,  59 => 16,  47 => 11,  38 => 8,  94 => 39,  89 => 34,  85 => 31,  79 => 27,  75 => 21,  68 => 19,  56 => 20,  50 => 13,  29 => 6,  87 => 43,  72 => 23,  55 => 15,  21 => 2,  26 => 12,  98 => 29,  93 => 35,  88 => 32,  78 => 29,  46 => 12,  27 => 5,  40 => 8,  44 => 9,  35 => 8,  31 => 4,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 49,  136 => 60,  123 => 64,  121 => 42,  117 => 40,  115 => 39,  105 => 34,  101 => 40,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 15,  24 => 7,  32 => 8,  25 => 6,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 30,  73 => 19,  64 => 18,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 5,  30 => 2,);
    }
}
