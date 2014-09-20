<?php

/* fsmEchangeBundle:Objets:ajouter.html.twig */
class __TwigTemplate_35ca75ae332a669d91ba8bdbe09b3fd832aec09fa20384951ec834e2a03ebbc3 extends Twig_Template
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
        echo "<p>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "Objetinfo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<p >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</p>
<div class=\"row\">
<div class=\"col-lg-4 col-lg-offset-4\">
<div class =\"well\">
    <form method =\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
       ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type =\"submit\" class =\"btn btn-primary\" />
    </form>
</div>
    </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  148 => 79,  114 => 41,  104 => 38,  76 => 27,  53 => 13,  261 => 114,  251 => 84,  245 => 12,  236 => 10,  233 => 9,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 98,  126 => 65,  110 => 52,  90 => 44,  77 => 38,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 115,  258 => 112,  252 => 80,  247 => 78,  241 => 11,  229 => 73,  220 => 119,  214 => 69,  177 => 65,  169 => 93,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 96,  159 => 61,  143 => 56,  135 => 71,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 17,  38 => 7,  94 => 45,  89 => 33,  85 => 25,  75 => 37,  68 => 24,  56 => 25,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 92,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  121 => 43,  117 => 44,  105 => 40,  91 => 34,  62 => 26,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 32,  98 => 46,  96 => 35,  83 => 32,  74 => 14,  66 => 15,  55 => 12,  52 => 21,  50 => 23,  43 => 8,  41 => 8,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 97,  182 => 66,  176 => 95,  173 => 94,  168 => 72,  164 => 55,  162 => 57,  154 => 84,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 43,  82 => 22,  80 => 31,  73 => 19,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 11,  48 => 9,  45 => 17,  42 => 7,  39 => 7,  36 => 9,  33 => 4,  30 => 7,);
    }
}
