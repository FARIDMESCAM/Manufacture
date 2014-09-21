<?php

/* fsmEchangeBundle:Objets:Mail.html.twig */
class __TwigTemplate_97f6e282f3ee916b4e1f7a8b19c04450b585586f44a46df6d489a9c28c78834f extends Twig_Template
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
";
        // line 14
        echo "   <form method =\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " > 
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "objet"), 'row');
        echo "
     
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "texte"), 'row');
        echo "<br>
        
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "envoyer"), 'row');
        echo "
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        // line 22
        echo "    </form>
</div>
    </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:Mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 41,  104 => 38,  53 => 14,  265 => 116,  262 => 115,  259 => 113,  255 => 86,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  211 => 107,  192 => 99,  188 => 98,  180 => 97,  174 => 95,  170 => 94,  167 => 93,  165 => 92,  155 => 85,  127 => 66,  81 => 40,  76 => 22,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 85,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 113,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 17,  59 => 17,  38 => 7,  94 => 28,  89 => 33,  85 => 25,  75 => 17,  68 => 19,  56 => 9,  87 => 44,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 39,  46 => 9,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 74,  138 => 71,  136 => 54,  121 => 43,  117 => 44,  105 => 40,  91 => 34,  62 => 23,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 13,  157 => 86,  145 => 46,  139 => 73,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 32,  98 => 31,  96 => 35,  83 => 32,  74 => 14,  66 => 15,  55 => 12,  52 => 21,  50 => 10,  43 => 8,  41 => 8,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 103,  199 => 101,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 55,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 46,  92 => 21,  86 => 28,  82 => 22,  80 => 31,  73 => 19,  64 => 17,  60 => 6,  57 => 14,  54 => 10,  51 => 24,  48 => 9,  45 => 17,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
