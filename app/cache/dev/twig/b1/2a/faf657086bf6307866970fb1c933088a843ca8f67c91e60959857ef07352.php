<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b12afaf657086bf6307866970fb1c933088a843ca8f67c91e60959857ef07352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  174 => 75,  167 => 73,  161 => 71,  153 => 67,  81 => 30,  76 => 21,  58 => 18,  148 => 65,  127 => 57,  110 => 37,  84 => 31,  70 => 19,  20 => 1,  114 => 50,  118 => 40,  100 => 34,  53 => 13,  260 => 115,  257 => 114,  250 => 85,  237 => 11,  232 => 10,  223 => 5,  216 => 119,  206 => 106,  198 => 102,  194 => 100,  175 => 96,  172 => 95,  165 => 54,  160 => 53,  152 => 79,  150 => 84,  137 => 73,  134 => 59,  77 => 28,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 84,  241 => 12,  229 => 9,  220 => 70,  214 => 112,  177 => 76,  169 => 94,  140 => 54,  132 => 51,  128 => 46,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 112,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 70,  143 => 56,  135 => 48,  119 => 40,  102 => 33,  71 => 20,  67 => 18,  63 => 15,  59 => 21,  38 => 8,  94 => 28,  89 => 34,  85 => 25,  75 => 21,  68 => 14,  56 => 25,  87 => 31,  21 => 2,  26 => 12,  93 => 35,  88 => 26,  78 => 21,  46 => 17,  27 => 5,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 97,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 71,  138 => 49,  136 => 60,  121 => 42,  117 => 40,  105 => 34,  91 => 44,  62 => 16,  49 => 15,  24 => 5,  25 => 6,  19 => 2,  79 => 22,  72 => 16,  69 => 25,  47 => 11,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 61,  131 => 58,  123 => 64,  120 => 52,  115 => 39,  111 => 37,  108 => 35,  101 => 40,  98 => 29,  96 => 30,  83 => 42,  74 => 14,  66 => 18,  55 => 13,  52 => 12,  50 => 10,  43 => 8,  41 => 9,  35 => 10,  32 => 8,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 98,  182 => 66,  176 => 64,  173 => 65,  168 => 55,  164 => 59,  162 => 92,  154 => 52,  149 => 51,  147 => 58,  144 => 48,  141 => 48,  133 => 55,  130 => 41,  125 => 43,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 35,  99 => 31,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 23,  73 => 26,  64 => 23,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
