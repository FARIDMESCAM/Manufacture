<?php

/* fsmEchangeBundle:Objets:objetsPerso.html.twig */
class __TwigTemplate_95d4e794e13c693b22d19f5a95790e9cdc34d4fd9b05da663a3ec742ce38fd6d extends Twig_Template
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
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos"))) > 0)) {
            // line 6
            echo "    
<caption>
            <h4 >Mes annonces </h4 >
        </caption>
</div>
<div class =\"col-lg-2\"></div>
<a class=\"navbar-brand\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
            echo "\">Ajout d'objets</a>
<p>";
            // line 13
            $this->env->loadTemplate("fsmEchangeBundle:Objets:Objets.html.twig")->display($context);
            echo "</p>
";
        } else {
            // line 15
            echo "
<p><strong>
        <br><br>
         <div class =\"col-lg-5\"></div>
        Vous n'avez encore pas encore mis d'annonces en ligne.<br><br><br><br><br><br>
         <div class =\"col-lg-5\"></div>
        Vous y êtes cordialement invité.<br><br><br><br>
   <div class =\"col-lg-5\"></div> <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
            echo "\">Ajout d'objets</a>     
</strong></p>
<br><br><br><br>

";
        }
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objetsPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  180 => 58,  167 => 55,  160 => 53,  152 => 51,  127 => 43,  81 => 29,  70 => 25,  65 => 24,  118 => 40,  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 39,  104 => 38,  76 => 22,  53 => 20,  261 => 114,  251 => 84,  245 => 12,  236 => 10,  233 => 9,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 62,  126 => 65,  110 => 52,  90 => 44,  77 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 115,  258 => 112,  252 => 80,  247 => 78,  241 => 11,  229 => 73,  220 => 119,  214 => 69,  177 => 65,  169 => 93,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 96,  159 => 61,  143 => 47,  135 => 44,  119 => 42,  102 => 33,  71 => 20,  67 => 15,  63 => 22,  59 => 17,  38 => 5,  94 => 45,  89 => 33,  85 => 31,  75 => 21,  68 => 19,  56 => 25,  87 => 32,  21 => 2,  26 => 2,  93 => 28,  88 => 26,  78 => 28,  46 => 9,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 92,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  121 => 41,  117 => 44,  105 => 34,  91 => 34,  62 => 23,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 25,  47 => 18,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 44,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 35,  98 => 29,  96 => 35,  83 => 32,  74 => 33,  66 => 18,  55 => 12,  52 => 21,  50 => 19,  43 => 13,  41 => 8,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 97,  182 => 66,  176 => 56,  173 => 94,  168 => 72,  164 => 55,  162 => 54,  154 => 84,  149 => 51,  147 => 49,  144 => 49,  141 => 73,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 34,  92 => 33,  86 => 43,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 22,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 12,  42 => 7,  39 => 7,  36 => 9,  33 => 4,  30 => 7,);
    }
}
