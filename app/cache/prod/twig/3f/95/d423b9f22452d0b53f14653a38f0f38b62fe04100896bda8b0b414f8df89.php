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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "Creationinfo"), "method"));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 25
                echo "                    <tr>
                        <td>
              ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "nom"), "html", null, true);
                echo "</td>
                    ";
                // line 31
                echo "                        <td>";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos")))) {
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getphotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        echo "               
";
                        // line 33
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getPrincipal", array(), "method") == 1)) {
                            // line 34
                            echo "                           <a href= \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_show", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "id"))), "html", null, true);
                            echo "\">
                               <img width=\"45\" class=\"img-circle\" src=\"";
                            // line 35
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "alt"), "html", null, true);
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
        return array (  161 => 54,  114 => 41,  104 => 38,  96 => 35,  76 => 27,  53 => 12,  37 => 7,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 92,  160 => 90,  150 => 83,  148 => 79,  83 => 32,  77 => 38,  23 => 1,  34 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  111 => 40,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 61,  143 => 56,  135 => 71,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 17,  47 => 9,  38 => 14,  94 => 28,  89 => 33,  85 => 25,  79 => 18,  75 => 37,  68 => 24,  56 => 25,  50 => 23,  29 => 2,  87 => 43,  72 => 25,  55 => 12,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 9,  27 => 4,  40 => 8,  44 => 12,  35 => 6,  31 => 3,  43 => 8,  41 => 8,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  123 => 64,  121 => 43,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 34,  69 => 25,  66 => 15,  62 => 26,  49 => 19,  24 => 4,  32 => 3,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 94,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 45,  92 => 21,  86 => 28,  82 => 22,  80 => 31,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 11,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 9,  33 => 4,  30 => 7,);
    }
}
