<?php

/* BCCCronManagerBundle::layout.html.twig */
class __TwigTemplate_f5ef6428eac48174a8057be88809f13472c41ecbc5de51e049c247daa7bfb675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BCC Cron Manager", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le styles -->
    ";
        // line 15
        // asset "9baa251"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9baa251") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9baa251.css");
        // line 20
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        unset($context["asset_url"]);
        // line 23
        echo "
</head>

<body>

<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("BCC Cron Manager", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>

<div class=\"container\">
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "          <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "          <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "</div>

<div class=\"modal\" id=\"modal\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a class=\"close\" data-dismiss=\"modal\" href=\"#\">×</a>
                <h3></h3>
            </div>
            <div class=\"modal-body\">
                <pre style=\"height: 200px; overflow: auto;\">test</pre>
            </div>
            <div class=\"modal-footer\">
                <a class=\"btn btn-default btn-primary\" data-dismiss=\"modal\" href=\"#\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
</div>
";
        // line 65
        // asset "f25b053"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f25b053") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f25b053.js");
        // line 71
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
";
        unset($context["asset_url"]);
        // line 73
        echo "
</body>
</html>";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  110 => 27,  100 => 22,  191 => 62,  180 => 58,  167 => 55,  160 => 53,  152 => 51,  127 => 43,  81 => 29,  70 => 19,  118 => 40,  77 => 38,  58 => 18,  20 => 1,  161 => 54,  148 => 46,  114 => 39,  104 => 38,  76 => 21,  53 => 20,  274 => 119,  271 => 118,  261 => 88,  250 => 14,  245 => 13,  242 => 12,  236 => 5,  211 => 106,  207 => 104,  200 => 102,  188 => 100,  185 => 61,  178 => 97,  175 => 96,  165 => 89,  150 => 77,  84 => 41,  65 => 24,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 116,  264 => 89,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 123,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 46,  107 => 47,  61 => 23,  273 => 96,  269 => 94,  254 => 15,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 116,  224 => 71,  221 => 77,  219 => 110,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 48,  119 => 56,  102 => 44,  71 => 22,  67 => 18,  63 => 17,  59 => 16,  38 => 8,  94 => 39,  89 => 41,  85 => 31,  75 => 21,  68 => 19,  56 => 13,  87 => 32,  21 => 2,  26 => 5,  93 => 42,  88 => 26,  78 => 23,  46 => 12,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 88,  158 => 67,  156 => 52,  151 => 63,  142 => 59,  138 => 49,  136 => 54,  121 => 42,  117 => 40,  105 => 45,  91 => 34,  62 => 31,  49 => 15,  24 => 7,  25 => 6,  19 => 2,  79 => 27,  72 => 23,  69 => 20,  47 => 21,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 45,  139 => 73,  131 => 44,  123 => 47,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 30,  98 => 29,  96 => 30,  83 => 32,  74 => 22,  66 => 18,  55 => 15,  52 => 23,  50 => 13,  43 => 10,  41 => 9,  35 => 6,  32 => 8,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 98,  176 => 56,  173 => 95,  168 => 72,  164 => 55,  162 => 54,  154 => 58,  149 => 51,  147 => 49,  144 => 75,  141 => 48,  133 => 71,  130 => 65,  125 => 42,  122 => 60,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 23,  99 => 48,  95 => 34,  92 => 33,  86 => 40,  82 => 22,  80 => 24,  73 => 37,  64 => 18,  60 => 21,  57 => 14,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 20,  39 => 15,  36 => 7,  33 => 5,  30 => 2,);
    }
}
