<?php

/* fsmUserBundle:Profile:showP.html.twig */
class __TwigTemplate_de59ab113a67de429c27d96af195974ccc5978d1621699e8f4a50399b774b02e extends Twig_Template
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
        echo "<div class=\"row\"></row>
    <div class=\"col-lg-4 col-lg-offset-4\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userphotos"]) ? $context["userphotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["userphoto"]) {
            // line 6
            echo "        <p><label for=\"username\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>:</p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : null), "username"), "html", null, true);
            echo "</p>
        </div>

        <br>
<hr>
        <p> <label for=\"email\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : null), "email"), "html", null, true);
            echo "</p></div>
  
             <br>
<hr>
        <p> <label for=\"telephone\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telephone", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : null), "telephone"), "html", null, true);
            echo "</p></div>
              <br>
<hr>

   ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : null), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 23
                if ((!(null === $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : null), "getPhotos")))) {
                    // line 24
                    echo "                <img width=\"130\" class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                    echo "\" /> 
 ";
                }
                // line 25
                echo "          
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "         

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                   </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "fsmUserBundle:Profile:showP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  174 => 75,  139 => 61,  134 => 59,  127 => 57,  84 => 31,  81 => 30,  52 => 12,  184 => 77,  178 => 59,  155 => 52,  153 => 67,  145 => 49,  120 => 52,  74 => 22,  65 => 24,  118 => 40,  58 => 18,  20 => 1,  161 => 71,  114 => 50,  104 => 36,  96 => 30,  76 => 21,  53 => 20,  37 => 10,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 73,  160 => 53,  150 => 83,  148 => 65,  83 => 32,  77 => 22,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 76,  169 => 54,  140 => 47,  132 => 70,  128 => 46,  111 => 38,  107 => 35,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 70,  143 => 56,  135 => 48,  131 => 58,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 18,  63 => 17,  59 => 16,  47 => 11,  38 => 8,  94 => 39,  89 => 34,  85 => 31,  79 => 27,  75 => 21,  68 => 19,  56 => 13,  50 => 13,  29 => 6,  87 => 43,  72 => 23,  55 => 15,  21 => 2,  26 => 12,  98 => 29,  93 => 27,  88 => 32,  78 => 23,  46 => 12,  27 => 5,  40 => 8,  44 => 7,  35 => 5,  31 => 3,  43 => 12,  41 => 9,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 49,  136 => 60,  123 => 64,  121 => 42,  117 => 40,  115 => 39,  105 => 34,  101 => 30,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 15,  24 => 7,  32 => 8,  25 => 6,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 37,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 25,  82 => 22,  80 => 24,  73 => 19,  64 => 18,  60 => 21,  57 => 15,  54 => 17,  51 => 12,  48 => 12,  45 => 14,  42 => 9,  39 => 6,  36 => 7,  33 => 5,  30 => 2,);
    }
}
