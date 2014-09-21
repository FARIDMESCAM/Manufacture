<?php

/* BCCCronManagerBundle:Default:form.html.twig */
class __TwigTemplate_1f3b04885d6e62000bd1fd334bbe6a8f5a041937fb90b8ee5b02fff43fa2a91c extends Twig_Template
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
        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "BCCCronManagerBundle:Form:fields.html.twig"));
        // line 2
        echo "
<div class=\"row\">
    <em class=\"span\">
        ";
        // line 5
        echo $this->env->getExtension('translator')->trans("Keep in mind that cron user is %user% and its root directory is %root%.", array("%user%" => (("<strong>" . $this->getAttribute((isset($context["wwwUser"]) ? $context["wwwUser"] : $this->getContext($context, "wwwUser")), "name")) . "</strong>"), "%root%" => (("<strong>" . $this->getAttribute((isset($context["wwwUser"]) ? $context["wwwUser"] : $this->getContext($context, "wwwUser")), "dir")) . "</strong>")), "BCCCronManagerBundle");
        echo "
    </em>
</div>
<br/>

<div class=\"row\">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfMonth"), 'errors');
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'errors');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfWeek"), 'errors');
        echo "
</div>

<div class=\"row\">
    <div class=\"col-xs-1 ";
        // line 19
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("class" => "time-input form-control ", "data-original-title" => $this->env->getExtension('translator')->trans("Minute", array(), "BCCCronManagerBundle"))));
        // line 24
        echo "
    </div>
    <div class=\"col-xs-1 ";
        // line 26
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("class" => "time-input form-control ", "data-original-title" => $this->env->getExtension('translator')->trans("Hour", array(), "BCCCronManagerBundle"))));
        // line 31
        echo "
    </div>
    <div class=\"col-xs-1 ";
        // line 33
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfMonth"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfMonth"), 'widget', array("attr" => array("class" => "time-input form-control ", "data-original-title" => $this->env->getExtension('translator')->trans("Day Of Month", array(), "BCCCronManagerBundle"))));
        // line 38
        echo "
    </div>
    <div class=\"col-xs-1 ";
        // line 40
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("class" => "time-input form-control ", "data-original-title" => $this->env->getExtension('translator')->trans("Month", array(), "BCCCronManagerBundle"))));
        // line 45
        echo "
    </div>
    <div class=\"col-xs-1 ";
        // line 47
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfWeek"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dayOfWeek"), 'widget', array("attr" => array("class" => "time-input form-control ", "data-original-title" => $this->env->getExtension('translator')->trans("Day Of Week", array(), "BCCCronManagerBundle"))));
        // line 52
        echo "
    </div>
    <div class=\"btn-group pull-right time-menu\" data-original-title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Time Presets", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\">
        <span class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"glyphicon glyphicon-search\"></span>
            <span class=\"caret\"></span>
        </span>
        <ul class=\"dropdown-menu\">
            <li><a class=\"time-preset\" href=\"#\" id=\"hourly\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hourly", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a></li>
            <li><a class=\"time-preset\" href=\"#\" id=\"daily\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Daily", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a></li>
            <li><a class=\"time-preset\" href=\"#\" id=\"weekly\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Weekly", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a></li>
            <li><a class=\"time-preset\" href=\"#\" id=\"monthly\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Monthly", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a></li>
            <li><a class=\"time-preset\" href=\"#\" id=\"yearly\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yearly", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>
</div>

<div class=\"command-input row form-group ";
        // line 69
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "command"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "command"), 'errors');
        echo "
    <div class=\"input-group \">
        <span class=\"input-group-addon\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "command"), 'label', array("translation_domain" => "BCCCronManagerBundle", "attr" => array("class" => "col-md-1"), "label" => "Command"));
        echo "
        </span>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "command"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        <div class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default command-preset\" id=\"symfony-command\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["symfonyCommand"]) ? $context["symfonyCommand"] : $this->getContext($context, "symfonyCommand")), "html", null, true);
        echo "\"
                    data-original-title=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Symfony Command", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-pencil\"></span>
            </button>
        </div>
    </div>

</div>

<div class=\"row form-group ";
        // line 86
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logFile"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logFile"), 'errors');
        echo "
    <div class=\"input-group span\">
        <span class=\"input-group-addon\">
            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logFile"), 'label', array("translation_domain" => "BCCCronManagerBundle", "attr" => array("class" => "col-md-1"), "label" => "Log File"));
        echo "
        </span>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logFile"), 'widget', array("attr" => array("class" => "form-control col-md-10")));
        echo "
        <div class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default log-preset pull-right\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["logDir"]) ? $context["logDir"] : $this->getContext($context, "logDir")), "html", null, true);
        echo "\"
                    data-original-title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Symfony log directory", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-pencil\"></span>
            </button>
        </div>
    </div>

</div>

<div class=\"row form-group ";
        // line 103
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "errorFile"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "errorFile"), 'errors');
        echo "
    <div class=\"input-group span\">
        <span class=\"input-group-addon\">
            ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "errorFile"), 'label', array("translation_domain" => "BCCCronManagerBundle", "attr" => array("class" => "col-md-1"), "label" => "Error File"));
        echo "
        </span>";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "errorFile"), 'widget', array("attr" => array("class" => "form-control col-md-10")));
        echo "
        <div class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default log-preset pull-right\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["logDir"]) ? $context["logDir"] : $this->getContext($context, "logDir")), "html", null, true);
        echo "\"
                    data-original-title=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Symfony log directory", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\">
                <span class=\"glyphicon glyphicon-pencil\"></span>
            </button>
        </div>
    </div>
</div>

<div class=\"row form-group ";
        // line 119
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), "vars"), "errors")) ? ("error") : (""));
        echo "\">
    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'errors');
        echo "
    <div class=\"input-group span\">
        <span class=\"input-group-addon\">
            ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'label', array("translation_domain" => "BCCCronManagerBundle", "attr" => array("class" => "col-md-1"), "label" => "Comment"));
        echo "
        </span>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment"), 'widget', array("attr" => array("class" => "form-control col-md-10")));
        echo "
    </div>
</div>

";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 129,  256 => 125,  232 => 112,  228 => 111,  223 => 109,  213 => 104,  198 => 95,  194 => 94,  155 => 75,  129 => 63,  97 => 30,  110 => 27,  100 => 22,  191 => 62,  180 => 58,  167 => 55,  160 => 77,  152 => 51,  127 => 43,  81 => 39,  70 => 19,  118 => 40,  77 => 38,  58 => 19,  20 => 1,  161 => 54,  148 => 46,  114 => 39,  104 => 52,  76 => 21,  53 => 20,  274 => 119,  271 => 118,  261 => 88,  250 => 14,  245 => 13,  242 => 119,  236 => 5,  211 => 106,  207 => 104,  200 => 102,  188 => 100,  185 => 90,  178 => 97,  175 => 86,  165 => 89,  150 => 77,  84 => 38,  65 => 24,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 116,  264 => 89,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 123,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 46,  107 => 47,  61 => 23,  273 => 96,  269 => 94,  254 => 15,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 116,  224 => 71,  221 => 77,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 87,  159 => 61,  143 => 47,  135 => 48,  119 => 56,  102 => 48,  71 => 22,  67 => 18,  63 => 17,  59 => 16,  38 => 8,  94 => 45,  89 => 41,  85 => 31,  75 => 21,  68 => 26,  56 => 13,  87 => 32,  21 => 2,  26 => 5,  93 => 42,  88 => 40,  78 => 33,  46 => 12,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 101,  183 => 82,  171 => 61,  166 => 71,  163 => 88,  158 => 67,  156 => 52,  151 => 73,  142 => 59,  138 => 49,  136 => 54,  121 => 61,  117 => 60,  105 => 45,  91 => 34,  62 => 20,  49 => 15,  24 => 7,  25 => 6,  19 => 1,  79 => 27,  72 => 27,  69 => 20,  47 => 14,  40 => 8,  37 => 10,  22 => 3,  246 => 120,  157 => 56,  145 => 70,  139 => 73,  131 => 44,  123 => 47,  120 => 40,  115 => 39,  111 => 38,  108 => 54,  101 => 30,  98 => 47,  96 => 30,  83 => 32,  74 => 31,  66 => 18,  55 => 15,  52 => 23,  50 => 13,  43 => 13,  41 => 9,  35 => 11,  32 => 8,  29 => 6,  209 => 103,  203 => 78,  199 => 67,  193 => 73,  189 => 92,  187 => 84,  182 => 98,  176 => 56,  173 => 95,  168 => 72,  164 => 78,  162 => 54,  154 => 58,  149 => 51,  147 => 49,  144 => 75,  141 => 69,  133 => 64,  130 => 65,  125 => 62,  122 => 60,  116 => 37,  112 => 37,  109 => 34,  106 => 36,  103 => 23,  99 => 48,  95 => 34,  92 => 41,  86 => 40,  82 => 34,  80 => 24,  73 => 37,  64 => 24,  60 => 21,  57 => 14,  54 => 17,  51 => 15,  48 => 12,  45 => 14,  42 => 20,  39 => 12,  36 => 7,  33 => 5,  30 => 2,);
    }
}
