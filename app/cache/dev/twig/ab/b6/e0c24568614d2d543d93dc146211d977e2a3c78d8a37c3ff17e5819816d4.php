<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_abb6e0c24568614d2d543d93dc146211d977e2a3c78d8a37c3ff17e5819816d4 extends Twig_Template
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
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  191 => 62,  180 => 58,  167 => 55,  160 => 53,  152 => 51,  127 => 43,  81 => 29,  70 => 25,  118 => 40,  77 => 22,  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 39,  104 => 38,  76 => 16,  53 => 20,  274 => 119,  271 => 118,  261 => 88,  250 => 14,  245 => 13,  242 => 12,  236 => 5,  211 => 106,  207 => 104,  200 => 102,  188 => 100,  185 => 61,  178 => 97,  175 => 96,  165 => 89,  150 => 77,  84 => 41,  65 => 24,  23 => 1,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 116,  264 => 89,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 123,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 50,  61 => 23,  273 => 96,  269 => 94,  254 => 15,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 116,  224 => 71,  221 => 77,  219 => 110,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 44,  119 => 56,  102 => 22,  71 => 22,  67 => 15,  63 => 17,  59 => 17,  38 => 11,  94 => 28,  89 => 27,  85 => 19,  75 => 21,  68 => 19,  56 => 9,  87 => 32,  21 => 2,  26 => 1,  93 => 28,  88 => 26,  78 => 28,  46 => 11,  27 => 4,  44 => 9,  31 => 4,  28 => 4,  201 => 92,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 88,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  121 => 41,  117 => 44,  105 => 34,  91 => 34,  62 => 23,  49 => 13,  24 => 4,  25 => 6,  19 => 2,  79 => 24,  72 => 20,  69 => 20,  47 => 9,  40 => 8,  37 => 6,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 44,  123 => 47,  120 => 40,  115 => 55,  111 => 38,  108 => 25,  101 => 35,  98 => 29,  96 => 35,  83 => 32,  74 => 35,  66 => 18,  55 => 12,  52 => 12,  50 => 11,  43 => 9,  41 => 6,  35 => 5,  32 => 8,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 98,  176 => 56,  173 => 95,  168 => 72,  164 => 55,  162 => 54,  154 => 58,  149 => 51,  147 => 49,  144 => 75,  141 => 48,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 42,  109 => 34,  106 => 36,  103 => 49,  99 => 21,  95 => 34,  92 => 33,  86 => 26,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 22,  57 => 14,  54 => 13,  51 => 14,  48 => 10,  45 => 10,  42 => 7,  39 => 7,  36 => 4,  33 => 6,  30 => 7,);
    }
}
