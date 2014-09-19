<?php

/* fsmEchangeBundle:Default:index.html.twig */
class __TwigTemplate_3f95d423b9f22452d0b53f14653a38f0f38b62fe04100896bda8b0b414f8df89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fsmEchangeBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
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
        echo " ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "Creationinfo"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "<p >";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo " </p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</p>

";
        } else {
            // line 12
            echo "
<div class =\"container\">
    <div class =\"row-100\">.</div>
    <div class =\"row\">
      ";
            // line 17
            echo "        <div class =\"col-lg-2\">
            <table class=\"table borderless\">
                <tbody> 
                    
                    <tr>
                <p class=\"\"text-center\">  <em><strong>Les dernières annonces</strong></em></p>
                    </tr>
          ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 25
                echo "                    <tr>
                        <td>
              ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "nom"), "html", null, true);
                echo "</td>
                    ";
                // line 31
                echo "                        <td>";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getphotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        echo "               
";
                        // line 33
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal", array(), "method") == 1)) {
                            // line 34
                            echo "                           <a href= \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_show", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                            echo "\">
                               <img width=\"45\" class=\"img-circle\" src=\"";
                            // line 35
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                            echo "\" /> 
                           </a>
 ";
                        }
                        // line 38
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "              ";
                }
                // line 41
                echo "                        </td></tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    


            </table>
        </div>  
        <div class =\"col-lg-1\"> </div> 
        <div class =\"col-lg-5\">
            <img   width=\"400\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/manufacture.jpg"), "html", null, true);
            echo "\" />
        </div> 
        <div class =\"col-lg-1\"></div>
    ";
            // line 54
            $this->displayBlock('aside', $context, $blocks);
            // line 71
            echo " 

            <div class =\"col-lg-1\"></div>
    </div> 
    <div class =\"row-100\">.</div>
</div> 
<br>
<br>
<a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
    <div class =\"col-lg-6\"> </div><span class=\"badge\">
        Inscription
    </span></a>
";
        }
        // line 83
        echo " 
";
    }

    // line 54
    public function block_aside($context, array $blocks = array())
    {
        // line 55
        echo "        <span class=\"badge\">Un site d'échanges de biens et services</span>
        <br>
        <br>
        <span class=\"badge\">Un blog</span>
        <br>
        <br>
        <span class=\"badge\">les news du conseil syndical</span>
        <br>
        <br>
        <h4>
            Le tout entre voisins
            </h>


            <br>
            </div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 54,  148 => 79,  114 => 41,  104 => 38,  76 => 27,  53 => 12,  261 => 114,  251 => 84,  245 => 12,  236 => 10,  233 => 9,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 98,  126 => 65,  110 => 52,  90 => 44,  77 => 38,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 115,  258 => 112,  252 => 80,  247 => 78,  241 => 11,  229 => 73,  220 => 119,  214 => 69,  177 => 65,  169 => 93,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 96,  159 => 61,  143 => 56,  135 => 71,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 17,  38 => 14,  94 => 45,  89 => 33,  85 => 25,  75 => 37,  68 => 24,  56 => 25,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 92,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  121 => 43,  117 => 44,  105 => 40,  91 => 34,  62 => 26,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 25,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 32,  98 => 46,  96 => 35,  83 => 32,  74 => 14,  66 => 15,  55 => 12,  52 => 21,  50 => 23,  43 => 8,  41 => 8,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 97,  182 => 66,  176 => 95,  173 => 94,  168 => 72,  164 => 55,  162 => 57,  154 => 84,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 43,  82 => 22,  80 => 31,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 11,  48 => 9,  45 => 17,  42 => 7,  39 => 7,  36 => 9,  33 => 4,  30 => 7,);
    }
}
