<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_221fd20fd320d793c87751507e971b382120802bf9e5da796346012318910e1f extends Twig_Template
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
    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class =\"well\">
            <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <hr/>
                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                </div>
            </form>
        
            
        </div>
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  174 => 75,  153 => 67,  134 => 59,  84 => 31,  185 => 61,  180 => 58,  167 => 73,  160 => 53,  152 => 51,  127 => 57,  81 => 30,  70 => 19,  65 => 24,  118 => 40,  58 => 18,  20 => 1,  161 => 71,  148 => 65,  114 => 50,  104 => 38,  76 => 21,  53 => 20,  261 => 114,  251 => 84,  245 => 12,  236 => 10,  233 => 9,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 62,  126 => 65,  110 => 52,  90 => 44,  77 => 22,  23 => 4,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 115,  258 => 112,  252 => 80,  247 => 78,  241 => 11,  229 => 73,  220 => 119,  214 => 69,  177 => 76,  169 => 93,  140 => 55,  132 => 51,  128 => 46,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 96,  159 => 70,  143 => 47,  135 => 48,  119 => 42,  102 => 33,  71 => 20,  67 => 18,  63 => 15,  59 => 17,  38 => 8,  94 => 45,  89 => 34,  85 => 31,  75 => 21,  68 => 19,  56 => 25,  87 => 32,  21 => 2,  26 => 12,  93 => 35,  88 => 26,  78 => 28,  46 => 9,  27 => 5,  44 => 9,  31 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 92,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 49,  136 => 60,  121 => 42,  117 => 40,  105 => 34,  91 => 34,  62 => 23,  49 => 15,  24 => 5,  25 => 6,  19 => 2,  79 => 22,  72 => 20,  69 => 25,  47 => 11,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 61,  131 => 58,  123 => 47,  120 => 52,  115 => 39,  111 => 38,  108 => 37,  101 => 40,  98 => 29,  96 => 30,  83 => 32,  74 => 33,  66 => 18,  55 => 13,  52 => 12,  50 => 10,  43 => 13,  41 => 9,  35 => 10,  32 => 8,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 97,  182 => 66,  176 => 56,  173 => 94,  168 => 72,  164 => 55,  162 => 54,  154 => 84,  149 => 51,  147 => 49,  144 => 49,  141 => 73,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 37,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 34,  92 => 33,  86 => 24,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
