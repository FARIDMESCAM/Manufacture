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
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 5
            echo "    <div class =\"row-30\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div class =\"well\">
                <p class=\"text-center\">
                    <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "nom"), "html", null, true);
            echo " </strong>
                    </p><hr>
   
    <div class =\"row-30\">
";
            // line 14
            echo "        ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
                // line 15
                echo "        <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_user_envoimail", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "id"))), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "description"), "html", null, true);
            echo "<br>
        <strong> type d'annonce </strong><br>
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "sens")), "method"), "html", null, true);
            echo "<br>
        ";
            // line 21
            if (($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "sens")), "method") < 1)) {
                // line 22
                echo "        <strong>Prix demandé :  </strong> <br>
        ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "prix"), "html", null, true);
                echo "<br>
        ";
            }
            // line 25
            echo "        <strong> Photos : </strong>
         ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 27
                echo "        ";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos")))) {
                    // line 28
                    echo "         <div class=\"thumbnail\">
";
                    // line 29
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : null) == true)) {
                        echo "       
";
                        // line 33
                        echo "                             ";
                    }
                    // line 34
                    echo "                            <hr>
                        <img src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "alt"), "html", null, true);
                    echo "\" /> 
                      ";
                    // line 36
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : null) == true)) {
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
        return array (  118 => 40,  58 => 15,  20 => 1,  161 => 54,  114 => 36,  104 => 38,  96 => 35,  76 => 22,  53 => 14,  37 => 7,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 92,  160 => 90,  150 => 83,  148 => 79,  83 => 32,  77 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 65,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  111 => 40,  107 => 51,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 61,  143 => 56,  135 => 71,  131 => 44,  119 => 42,  108 => 35,  102 => 33,  71 => 20,  67 => 15,  63 => 17,  59 => 17,  47 => 9,  38 => 5,  94 => 28,  89 => 33,  85 => 25,  79 => 18,  75 => 21,  68 => 19,  56 => 25,  50 => 23,  29 => 2,  87 => 43,  72 => 20,  55 => 12,  21 => 2,  26 => 6,  98 => 29,  93 => 28,  88 => 26,  78 => 21,  46 => 9,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 3,  43 => 8,  41 => 8,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 54,  123 => 64,  121 => 41,  117 => 44,  115 => 43,  105 => 34,  101 => 32,  91 => 34,  69 => 25,  66 => 18,  62 => 16,  49 => 19,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 94,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 13,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
