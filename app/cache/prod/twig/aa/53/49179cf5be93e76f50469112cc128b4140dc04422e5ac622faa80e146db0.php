<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_aa5349179cf5be93e76f50469112cc128b4140dc04422e5ac622faa80e146db0 extends Twig_Template
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
        echo "
<div class=\"row\"></row>
    <div class=\"col-lg-4 col-lg-offset-4\">
        <p><label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>:</p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "html", null, true);
        echo "</p>
        </div>
    </div>
    <div class=\"col-lg-4 col-lg-offset-4\">
        <p> <label for=\"email\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email"), "html", null, true);
        echo "</p></div>
    </div>
      <div class=\"col-lg-4 col-lg-offset-4\">
        <p> <label for=\"telephone\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telephone", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "telephone"), "html", null, true);
        echo "</p></div>
      </div>
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 18
            echo "   ";
            // line 21
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  174 => 75,  139 => 61,  134 => 59,  127 => 57,  84 => 31,  81 => 30,  52 => 12,  184 => 77,  178 => 59,  155 => 52,  153 => 67,  145 => 49,  120 => 52,  74 => 27,  65 => 24,  118 => 40,  58 => 18,  20 => 1,  161 => 71,  114 => 50,  104 => 36,  96 => 30,  76 => 21,  53 => 20,  37 => 8,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 73,  160 => 53,  150 => 83,  148 => 65,  83 => 32,  77 => 22,  23 => 4,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 76,  169 => 54,  140 => 47,  132 => 70,  128 => 46,  111 => 38,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 70,  143 => 56,  135 => 48,  131 => 58,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 18,  63 => 15,  59 => 17,  47 => 11,  38 => 6,  94 => 33,  89 => 34,  85 => 31,  79 => 22,  75 => 21,  68 => 19,  56 => 20,  50 => 11,  29 => 2,  87 => 43,  72 => 20,  55 => 13,  21 => 2,  26 => 2,  98 => 29,  93 => 35,  88 => 32,  78 => 29,  46 => 9,  27 => 5,  40 => 8,  44 => 9,  35 => 10,  31 => 4,  43 => 13,  41 => 10,  28 => 6,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 49,  136 => 60,  123 => 64,  121 => 42,  117 => 40,  115 => 39,  105 => 34,  101 => 40,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 15,  24 => 5,  32 => 8,  25 => 6,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 10,  45 => 14,  42 => 7,  39 => 11,  36 => 4,  33 => 5,  30 => 7,);
    }
}
