<?php

/* fsmEchangeBundle:Objets:Objets.html.twig */
class __TwigTemplate_9e68ef56938cc6501162f625c8ef8fd7d926773684ed4f7cbffa3f81ceb04c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class =\"container\">
    <table class =\"table table-striped table-condensed \">

        <thead >
            <tr >
                <th>Nom Objet </th>
                <th>Photo principale </th>
                <th>Nom propriétaire </th>
                <th>Photo propriétaire </th>
                <th>Type annonce</th>
                <th>Mail propriétaire</th>
                 <th>Catégorie</th>
        </thead>
        <tbody >

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 18
            echo "            ";
            if (((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")) != null)) {
                // line 19
                echo "            <tr>
                <td><a href= \"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_show", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "nom"), "html", null, true);
                echo "</a>
                    <br>
                    ";
                // line 22
                if (((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")) == "YES")) {
                    // line 23
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))) {
                        // line 24
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_update", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-success\">Modifier</a><br><br>
                    <a href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_supprimer", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                        echo "\" > <img width=\"35\"  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/suppression.jpg"), "html", null, true);
                        echo "\" /> </a>
                    
               ";
                    }
                    // line 28
                    echo "                      ";
                }
                // line 29
                echo "                </td>
                <td>
                 ";
                // line 31
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 32
                    echo "           ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        // line 33
                        echo "                    ";
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal") == true)) {
                            // line 34
                            echo "                    <img width=\"130\" class=\"img-circle\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                            echo "\" /> 
                     ";
                        }
                        // line 35
                        echo " 
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "                ";
                }
                // line 38
                echo "                </td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "user"), "username"), "html", null, true);
                echo "</td>
                <td> ";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "user"), "getphotos"));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 41
                    echo "
                                                            ";
                    // line 42
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal") == true)) {
                        // line 43
                        echo "                    <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 44
                    echo " 

                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    <br>

                    <a href= \"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_profile_showPerso", array("id" => $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "user"), "id"))), "html", null, true);
                echo "\">Contacter</a>
                </td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "sens")), "method"), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "user"), "email"), "html", null, true);
                echo "</td>
                  ";
                // line 53
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getCategories")))) {
                    // line 54
                    echo "           ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getCategories"));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                        // line 55
                        echo "                 <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
                        echo "</td>
 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                 
";
                }
                // line 58
                echo "                  
            </tr>
         ";
            }
            // line 61
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "



    </table>
</div> 


<div class =\"col-lg-1\"></div>
</div> 
<div class =\"row-100\">.</div>
</div> 

";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:Objets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 62,  185 => 61,  160 => 53,  152 => 51,  70 => 25,  65 => 24,  118 => 40,  77 => 22,  58 => 15,  20 => 1,  161 => 54,  148 => 79,  114 => 39,  104 => 38,  53 => 20,  265 => 116,  262 => 115,  259 => 113,  255 => 86,  242 => 12,  237 => 11,  234 => 10,  228 => 5,  211 => 107,  192 => 99,  188 => 98,  180 => 58,  174 => 95,  170 => 94,  167 => 55,  165 => 92,  155 => 85,  127 => 43,  81 => 29,  76 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 85,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 120,  219 => 113,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 47,  135 => 44,  119 => 42,  102 => 33,  71 => 20,  67 => 15,  63 => 17,  59 => 17,  38 => 5,  94 => 28,  89 => 33,  85 => 31,  75 => 21,  68 => 19,  56 => 9,  87 => 32,  21 => 2,  26 => 2,  93 => 28,  88 => 26,  78 => 28,  46 => 9,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 52,  151 => 63,  142 => 74,  138 => 71,  136 => 54,  121 => 41,  117 => 44,  105 => 34,  91 => 34,  62 => 23,  49 => 23,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 20,  69 => 25,  47 => 18,  40 => 8,  37 => 7,  22 => 2,  246 => 13,  157 => 86,  145 => 46,  139 => 73,  131 => 44,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 35,  98 => 29,  96 => 35,  83 => 32,  74 => 14,  66 => 18,  55 => 12,  52 => 21,  50 => 19,  43 => 17,  41 => 8,  35 => 6,  32 => 3,  29 => 3,  209 => 82,  203 => 103,  199 => 101,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 55,  162 => 54,  154 => 58,  149 => 51,  147 => 49,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 42,  122 => 41,  116 => 37,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 47,  95 => 34,  92 => 33,  86 => 28,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 22,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
