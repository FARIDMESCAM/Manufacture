<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bf30e778e8b635118bd6850f095b65a1a52f0fa622d21035e139fd116898080a extends Twig_Template
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
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 95,  137 => 61,  84 => 31,  191 => 62,  185 => 61,  160 => 71,  152 => 51,  70 => 19,  65 => 24,  118 => 40,  77 => 22,  58 => 18,  20 => 1,  161 => 54,  148 => 79,  114 => 50,  104 => 38,  53 => 20,  265 => 116,  262 => 115,  259 => 113,  255 => 86,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  211 => 107,  192 => 99,  188 => 81,  180 => 78,  174 => 95,  170 => 75,  167 => 55,  165 => 92,  155 => 85,  127 => 43,  81 => 30,  76 => 21,  23 => 4,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 85,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 77,  169 => 60,  140 => 62,  132 => 59,  128 => 46,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 113,  217 => 75,  208 => 97,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 48,  119 => 42,  102 => 33,  71 => 31,  67 => 18,  63 => 15,  59 => 17,  38 => 8,  94 => 28,  89 => 34,  85 => 31,  75 => 21,  68 => 19,  56 => 9,  87 => 32,  21 => 2,  26 => 2,  93 => 35,  88 => 26,  78 => 28,  46 => 9,  27 => 5,  44 => 9,  31 => 6,  28 => 5,  201 => 92,  196 => 87,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 74,  138 => 49,  136 => 54,  121 => 42,  117 => 40,  105 => 34,  91 => 34,  62 => 23,  49 => 15,  24 => 5,  25 => 6,  19 => 2,  79 => 22,  72 => 20,  69 => 25,  47 => 11,  40 => 8,  37 => 8,  22 => 3,  246 => 13,  157 => 86,  145 => 46,  139 => 73,  131 => 44,  123 => 47,  120 => 52,  115 => 39,  111 => 38,  108 => 37,  101 => 40,  98 => 29,  96 => 30,  83 => 32,  74 => 14,  66 => 18,  55 => 13,  52 => 12,  50 => 10,  43 => 13,  41 => 9,  35 => 10,  32 => 8,  29 => 2,  209 => 82,  203 => 103,  199 => 101,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 55,  162 => 73,  154 => 68,  149 => 66,  147 => 49,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 34,  92 => 33,  86 => 24,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 10,  45 => 14,  42 => 7,  39 => 11,  36 => 7,  33 => 5,  30 => 7,);
    }
}
