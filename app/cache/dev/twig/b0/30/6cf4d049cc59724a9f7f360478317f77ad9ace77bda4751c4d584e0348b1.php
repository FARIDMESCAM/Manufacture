<?php

/* BCCCronManagerBundle:Form:fields.html.twig */
class __TwigTemplate_b0306cf4d049cc59724a9f7f360478317f77ad9ace77bda4751c4d584e0348b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'generic_label' => array($this, 'block_generic_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('field_errors', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('generic_label', $context, $blocks);
    }

    // line 1
    public function block_field_errors($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "            <div class=\"span\">
                ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "                    <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            </div>
        ";
        }
        // line 10
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_generic_label($context, array $blocks = array())
    {
        // line 14
        echo " ";
        ob_start();
        // line 15
        echo "     ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 16
            echo "         ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " required")));
            // line 17
            echo "     ";
        }
        // line 18
        echo "     <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</label>
 ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 20
        echo " ";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 114,  315 => 112,  306 => 107,  304 => 106,  300 => 105,  295 => 103,  290 => 100,  259 => 89,  231 => 77,  226 => 75,  216 => 71,  206 => 64,  202 => 63,  137 => 35,  90 => 18,  263 => 129,  256 => 88,  232 => 112,  228 => 76,  223 => 109,  213 => 104,  198 => 95,  194 => 59,  155 => 75,  129 => 63,  97 => 20,  191 => 62,  180 => 53,  167 => 55,  160 => 77,  152 => 41,  127 => 32,  81 => 29,  70 => 15,  118 => 40,  77 => 15,  58 => 19,  20 => 1,  161 => 54,  148 => 46,  114 => 27,  104 => 52,  76 => 17,  53 => 20,  274 => 98,  271 => 118,  261 => 88,  250 => 85,  245 => 83,  242 => 82,  236 => 79,  211 => 106,  207 => 104,  200 => 102,  188 => 56,  185 => 90,  178 => 52,  175 => 86,  165 => 89,  150 => 77,  84 => 38,  65 => 24,  23 => 12,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 116,  264 => 91,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 123,  220 => 70,  214 => 69,  177 => 65,  169 => 49,  140 => 55,  132 => 51,  128 => 46,  107 => 24,  61 => 11,  273 => 96,  269 => 94,  254 => 15,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 116,  224 => 71,  221 => 73,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 87,  159 => 61,  143 => 47,  135 => 48,  119 => 56,  102 => 48,  71 => 12,  67 => 14,  63 => 17,  59 => 10,  38 => 8,  94 => 45,  89 => 41,  85 => 19,  75 => 21,  68 => 26,  56 => 13,  87 => 32,  21 => 1,  26 => 13,  93 => 42,  88 => 40,  78 => 33,  46 => 6,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 101,  183 => 54,  171 => 61,  166 => 48,  163 => 47,  158 => 44,  156 => 52,  151 => 73,  142 => 37,  138 => 49,  136 => 54,  121 => 29,  117 => 28,  105 => 45,  91 => 34,  62 => 20,  49 => 15,  24 => 7,  25 => 6,  19 => 1,  79 => 18,  72 => 27,  69 => 20,  47 => 14,  40 => 8,  37 => 10,  22 => 3,  246 => 120,  157 => 56,  145 => 70,  139 => 73,  131 => 44,  123 => 47,  120 => 40,  115 => 39,  111 => 38,  108 => 54,  101 => 30,  98 => 20,  96 => 30,  83 => 16,  74 => 31,  66 => 18,  55 => 8,  52 => 23,  50 => 13,  43 => 13,  41 => 9,  35 => 6,  32 => 8,  29 => 6,  209 => 103,  203 => 78,  199 => 62,  193 => 73,  189 => 92,  187 => 84,  182 => 98,  176 => 56,  173 => 50,  168 => 72,  164 => 78,  162 => 54,  154 => 58,  149 => 51,  147 => 39,  144 => 38,  141 => 69,  133 => 34,  130 => 33,  125 => 62,  122 => 60,  116 => 37,  112 => 26,  109 => 34,  106 => 36,  103 => 23,  99 => 21,  95 => 34,  92 => 41,  86 => 40,  82 => 34,  80 => 24,  73 => 16,  64 => 13,  60 => 21,  57 => 9,  54 => 17,  51 => 15,  48 => 12,  45 => 14,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  30 => 1,);
    }
}
