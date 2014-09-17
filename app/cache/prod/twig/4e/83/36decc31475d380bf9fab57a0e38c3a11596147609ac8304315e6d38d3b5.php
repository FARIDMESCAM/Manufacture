<?php

/* fsmEchangeBundle:Objets:objetsList.html.twig */
class __TwigTemplate_4e8336decc31475d380bf9fab57a0e38c3a11596147609ac8304315e6d38d3b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fsmEchangeBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fsmEchangeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class =\"row-30\">
    <div class =\"col-lg-5\"></div>
<caption>
            <h4 >Toutes les annonces </h4 >
        </caption>
</div>

<div class=\"row\">
<div class=\"col-lg-4 col-lg-offset-4\">
<div class =\"well\">
  <form method =\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "> 
       ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type =\"submit\" class =\"btn btn-primary\" />
    </form>
</div>
</div>
</div>    
<p>";
        // line 20
        $this->env->loadTemplate("fsmEchangeBundle:Objets:Recherche.html.twig")->display($context);
        echo "</p>
<br>
  
<p>";
        // line 23
        $this->env->loadTemplate("fsmEchangeBundle:Objets:Objets.html.twig")->display($context);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objetsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 60,  178 => 59,  155 => 52,  153 => 51,  145 => 49,  120 => 41,  74 => 27,  65 => 24,  118 => 40,  58 => 15,  20 => 1,  161 => 54,  114 => 36,  104 => 36,  96 => 35,  76 => 22,  53 => 20,  37 => 7,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 92,  160 => 53,  150 => 83,  148 => 79,  83 => 32,  77 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 65,  169 => 54,  140 => 47,  132 => 70,  128 => 42,  111 => 38,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 61,  143 => 56,  135 => 71,  131 => 44,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 15,  63 => 17,  59 => 17,  47 => 14,  38 => 5,  94 => 33,  89 => 33,  85 => 31,  79 => 18,  75 => 21,  68 => 19,  56 => 20,  50 => 19,  29 => 2,  87 => 43,  72 => 20,  55 => 12,  21 => 2,  26 => 2,  98 => 29,  93 => 28,  88 => 32,  78 => 29,  46 => 9,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 3,  43 => 13,  41 => 8,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 45,  123 => 64,  121 => 41,  117 => 44,  115 => 39,  105 => 34,  101 => 35,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 19,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 22,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
