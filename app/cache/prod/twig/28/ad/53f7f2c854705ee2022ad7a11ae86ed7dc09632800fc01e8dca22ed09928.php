<?php

/* fsmEchangeBundle:Photos:ajouter.html.twig */
class __TwigTemplate_28ad53f7f2c854705ee2022ad7a11ae86ed7dc09632800fc01e8dca22ed09928 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "Objetinfo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<p >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo " </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</p>
";
        // line 11
        if (((isset($context["objetphotos"]) ? $context["objetphotos"] : null) == null)) {
            // line 12
            echo " <div class=\"row\">
<div class=\"col-lg-6 col-lg-offset-3\">
<div class =\"well\">
   <form method =\"post\" ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "> 
       ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
       <br>
        <div class=\"col-lg-2\"></div>
       <input type =\"submit\" class =\"btn btn-primary\" />
       <div class=\"col-lg-2\"></div>
      
       </div>
   
      </div>
    </div>

";
        } else {
            // line 29
            echo "   ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 30
                echo "    ";
                if (($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos"), "count") < 3)) {
                    // line 31
                    echo "<div class=\"row\">
<div class=\"col-lg-6 col-lg-offset-3\">
<div class =\"well\">
   <form method =\"post\" ";
                    // line 34
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
                    echo "> 
       ";
                    // line 35
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
                    echo "
       <br>
        <div class=\"col-lg-2\"></div>
       <input type =\"submit\" class =\"btn btn-primary\" />
       <div class=\"col-lg-2\"></div>
       <a href=\"";
                    // line 40
                    echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
                    echo "\">Pas de photo</a>
<hr>
         <p class=\"text-center\">Vous pouvez mettre jusqu'à 3 photos.</p>
       </div>
     
      </div>
   
 </div>

";
                }
                // line 50
                echo "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "<div class=\"row\">
<div class=\"col-lg-6 col-lg-offset-3\">
<div class =\"well\">
    
    <table class=\"table borderless\">
";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 58
                echo "    
 ";
                // line 59
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos")))) {
                    // line 60
                    echo "       
           ";
                    // line 61
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        echo "  <tr>
        <div class=\"col-lg-4\">
            <td>
                
            <img width=\"150\" class=\"img-circle\" src=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                        echo "\" /></td>
            <td>
             <a href=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_supprimer", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-danger\">supprimer</a>
             </td>
             <td>
                  ";
                        // line 70
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "principal") < 1)) {
                            // line 71
                            echo "                            <a class=\"navbar-brand\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_principale", array("photo" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "id"))), "html", null, true);
                            echo "\">Définir en tant que photo principale</a>
                            ";
                        }
                        // line 73
                        echo "             </td>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "                ";
                }
                // line 76
                echo "    </tr>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "  
        </table>
                    </div>
</div>
</div>
</div>
";
        }
        // line 84
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Photos:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 75,  139 => 61,  134 => 59,  127 => 57,  84 => 31,  81 => 30,  52 => 12,  184 => 77,  178 => 59,  155 => 52,  153 => 67,  145 => 49,  120 => 52,  74 => 27,  65 => 24,  118 => 40,  58 => 15,  20 => 1,  161 => 71,  114 => 50,  104 => 36,  96 => 35,  76 => 29,  53 => 20,  37 => 6,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 73,  160 => 53,  150 => 83,  148 => 65,  83 => 32,  77 => 22,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 76,  169 => 54,  140 => 47,  132 => 70,  128 => 42,  111 => 38,  107 => 37,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 70,  143 => 56,  135 => 71,  131 => 58,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 15,  63 => 22,  59 => 17,  47 => 9,  38 => 7,  94 => 33,  89 => 34,  85 => 31,  79 => 18,  75 => 21,  68 => 19,  56 => 20,  50 => 11,  29 => 2,  87 => 43,  72 => 20,  55 => 12,  21 => 2,  26 => 2,  98 => 29,  93 => 35,  88 => 32,  78 => 29,  46 => 9,  27 => 4,  40 => 8,  44 => 9,  35 => 5,  31 => 3,  43 => 13,  41 => 8,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 60,  123 => 64,  121 => 41,  117 => 44,  115 => 39,  105 => 34,  101 => 40,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 13,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 84,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 22,  57 => 15,  54 => 15,  51 => 14,  48 => 9,  45 => 12,  42 => 7,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
