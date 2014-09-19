<?php

/* fsmEchangeBundle:Objets:objet.html.twig */
class __TwigTemplate_a8174cdea8907ea35748a4c10d5d2b9594c1abc46e43a8db6fe866faa75b1c53 extends Twig_Template
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
        echo "<div class =\"container\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 5
            echo "    <div class =\"row-30\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div class =\"well\">
                <p class=\"text-center\">
                    <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "nom"), "html", null, true);
            echo " </strong>
                    </p><hr>
   
    <div class =\"row-30\">
";
            // line 14
            echo "        ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
                // line 15
                echo "        <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_user_envoimail", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                echo "\" />Envoyer un mail<img width=\"50\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/mail.jpg"), "html", null, true);
                echo "\" /> </a><br> <br> <br>
    ";
            }
            // line 16
            echo "   
    <strong> description : </strong> <br>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "description"), "html", null, true);
            echo "<br>
        <strong> type d'annonce </strong><br>
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "sens")), "method"), "html", null, true);
            echo "<br>
        ";
            // line 21
            if (($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "sens")), "method") < 1)) {
                // line 22
                echo "        <strong>Prix demandé :  </strong> <br>
        ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "prix"), "html", null, true);
                echo "<br>
        ";
            }
            // line 25
            echo "        <strong> Photos : </strong>
         ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 27
                echo "        ";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 28
                    echo "         <div class=\"thumbnail\">
";
                    // line 29
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : $this->getContext($context, "is_owner")) == true)) {
                        echo "       
";
                        // line 33
                        echo "                             ";
                    }
                    // line 34
                    echo "                            <hr>
                        <img src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                    echo "\" /> 
                      ";
                    // line 36
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : $this->getContext($context, "is_owner")) == true)) {
                        // line 37
                        echo "                       ";
                        // line 40
                        echo "                         ";
                    }
                    // line 41
                    echo "         </div>    
        ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        <hr>
                        
                        
    </div>
            </div>
    </div>
     </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 36,  104 => 38,  76 => 22,  53 => 14,  261 => 114,  251 => 84,  245 => 12,  236 => 10,  233 => 9,  218 => 112,  210 => 106,  202 => 102,  198 => 100,  191 => 98,  126 => 65,  110 => 52,  90 => 44,  77 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 115,  258 => 112,  252 => 80,  247 => 78,  241 => 11,  229 => 73,  220 => 119,  214 => 69,  177 => 65,  169 => 93,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 85,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 5,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 96,  159 => 61,  143 => 56,  135 => 71,  119 => 42,  102 => 33,  71 => 20,  67 => 15,  63 => 17,  59 => 17,  38 => 5,  94 => 45,  89 => 33,  85 => 25,  75 => 21,  68 => 19,  56 => 25,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 26,  78 => 21,  46 => 9,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 92,  163 => 62,  158 => 67,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  121 => 41,  117 => 44,  105 => 34,  91 => 34,  62 => 16,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 25,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 44,  123 => 47,  120 => 40,  115 => 43,  111 => 40,  108 => 35,  101 => 32,  98 => 29,  96 => 35,  83 => 32,  74 => 14,  66 => 18,  55 => 12,  52 => 21,  50 => 23,  43 => 8,  41 => 8,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 97,  182 => 66,  176 => 95,  173 => 94,  168 => 72,  164 => 55,  162 => 57,  154 => 84,  149 => 51,  147 => 58,  144 => 49,  141 => 73,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 27,  86 => 43,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 6,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 7,  36 => 9,  33 => 4,  30 => 7,);
    }
}
