<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d6f7fc024aac3b1b2b0650a3f98b6c892a2c20a7ac50c9ebe1bd34183083648c extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  303 => 122,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  248 => 94,  207 => 75,  200 => 72,  197 => 71,  181 => 65,  172 => 62,  165 => 60,  150 => 55,  113 => 48,  320 => 127,  315 => 125,  306 => 107,  304 => 106,  300 => 121,  295 => 103,  290 => 100,  274 => 98,  259 => 89,  250 => 85,  231 => 77,  226 => 84,  216 => 79,  206 => 64,  188 => 76,  178 => 64,  137 => 35,  97 => 20,  263 => 129,  256 => 96,  242 => 82,  232 => 112,  228 => 76,  223 => 109,  213 => 78,  194 => 70,  175 => 86,  155 => 75,  129 => 63,  184 => 77,  174 => 74,  153 => 69,  134 => 54,  84 => 24,  185 => 75,  180 => 53,  167 => 71,  160 => 77,  152 => 41,  127 => 32,  81 => 23,  70 => 19,  65 => 24,  118 => 49,  58 => 19,  20 => 1,  161 => 71,  148 => 46,  114 => 27,  104 => 42,  76 => 31,  53 => 12,  261 => 114,  251 => 84,  245 => 83,  236 => 79,  233 => 87,  218 => 112,  210 => 106,  202 => 63,  198 => 95,  191 => 77,  126 => 65,  110 => 52,  90 => 27,  77 => 15,  23 => 12,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 91,  258 => 112,  252 => 123,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 76,  169 => 49,  140 => 55,  132 => 51,  128 => 46,  107 => 24,  61 => 11,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 73,  219 => 107,  217 => 75,  208 => 68,  204 => 78,  179 => 87,  159 => 70,  143 => 47,  135 => 48,  119 => 40,  102 => 41,  71 => 12,  67 => 24,  63 => 17,  59 => 14,  38 => 6,  94 => 45,  89 => 41,  85 => 31,  75 => 21,  68 => 26,  56 => 13,  87 => 34,  21 => 1,  26 => 13,  93 => 42,  88 => 40,  78 => 33,  46 => 13,  27 => 3,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 54,  171 => 73,  166 => 48,  163 => 47,  158 => 44,  156 => 58,  151 => 73,  142 => 37,  138 => 56,  136 => 60,  121 => 50,  117 => 28,  105 => 34,  91 => 34,  62 => 20,  49 => 14,  24 => 7,  25 => 6,  19 => 1,  79 => 18,  72 => 27,  69 => 25,  47 => 14,  40 => 8,  37 => 10,  22 => 3,  246 => 93,  157 => 56,  145 => 70,  139 => 73,  131 => 58,  123 => 42,  120 => 52,  115 => 39,  111 => 47,  108 => 54,  101 => 30,  98 => 20,  96 => 37,  83 => 33,  74 => 31,  66 => 18,  55 => 16,  52 => 23,  50 => 13,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 103,  203 => 73,  199 => 62,  193 => 84,  189 => 92,  187 => 97,  182 => 66,  176 => 63,  173 => 50,  168 => 61,  164 => 70,  162 => 59,  154 => 84,  149 => 51,  147 => 54,  144 => 38,  141 => 51,  133 => 34,  130 => 46,  125 => 51,  122 => 60,  116 => 39,  112 => 26,  109 => 34,  106 => 51,  103 => 23,  99 => 31,  95 => 34,  92 => 41,  86 => 40,  82 => 34,  80 => 32,  73 => 20,  64 => 23,  60 => 21,  57 => 9,  54 => 17,  51 => 15,  48 => 12,  45 => 10,  42 => 5,  39 => 4,  36 => 3,  33 => 4,  30 => 3,);
    }
}
