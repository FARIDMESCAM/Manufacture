<?php

/* BCCCronManagerBundle:Default:edit.html.twig */
class __TwigTemplate_e63f197cdd1b1272659b7a16fb63d09d7692d94734b0279970cf9c6dd541160a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BCCCronManagerBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCCronManagerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"edit-cron\">
        <div class=\"page-header\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit a cron", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</h1>
        </div>
        <form role=\"form\" method=\"post\" action=\"#\">
            ";
        // line 9
        $this->env->loadTemplate("BCCCronManagerBundle:Default:form.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 10
        echo "            <input type=\"submit\" class=\"btn btn-success btn-lg\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\"/>
        </form>
    </section>
";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 95,  137 => 61,  84 => 31,  191 => 62,  185 => 61,  160 => 71,  152 => 51,  70 => 19,  65 => 24,  118 => 40,  77 => 22,  58 => 18,  20 => 1,  161 => 54,  148 => 79,  114 => 50,  104 => 38,  53 => 20,  265 => 116,  262 => 115,  259 => 113,  255 => 86,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  211 => 107,  192 => 99,  188 => 81,  180 => 78,  174 => 95,  170 => 75,  167 => 55,  165 => 92,  155 => 85,  127 => 43,  81 => 30,  76 => 21,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 85,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 60,  140 => 62,  132 => 59,  128 => 46,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 113,  217 => 75,  208 => 97,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 48,  119 => 42,  102 => 33,  71 => 31,  67 => 18,  63 => 17,  59 => 16,  38 => 8,  94 => 39,  89 => 34,  85 => 31,  75 => 21,  68 => 19,  56 => 13,  87 => 32,  21 => 2,  26 => 12,  93 => 27,  88 => 26,  78 => 23,  46 => 12,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 87,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 74,  138 => 49,  136 => 54,  121 => 42,  117 => 40,  105 => 34,  91 => 34,  62 => 23,  49 => 15,  24 => 7,  25 => 6,  19 => 2,  79 => 27,  72 => 23,  69 => 25,  47 => 11,  40 => 8,  37 => 10,  22 => 3,  246 => 13,  157 => 86,  145 => 46,  139 => 73,  131 => 44,  123 => 47,  120 => 52,  115 => 39,  111 => 38,  108 => 37,  101 => 30,  98 => 29,  96 => 30,  83 => 32,  74 => 22,  66 => 18,  55 => 15,  52 => 12,  50 => 13,  43 => 10,  41 => 9,  35 => 6,  32 => 8,  29 => 6,  209 => 82,  203 => 103,  199 => 101,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 55,  162 => 73,  154 => 68,  149 => 66,  147 => 49,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 34,  92 => 33,  86 => 25,  82 => 22,  80 => 24,  73 => 19,  64 => 18,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 9,  39 => 6,  36 => 7,  33 => 5,  30 => 2,);
    }
}
