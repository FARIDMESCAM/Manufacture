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
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 18
            echo "            ";
            if (((isset($context["objetphoto"]) ? $context["objetphoto"] : null) != null)) {
                // line 19
                echo "            <tr>
                <td><a href= \"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_show", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "nom"), "html", null, true);
                echo "</a>
                    <br>
                    ";
                // line 22
                if (((isset($context["gestion"]) ? $context["gestion"] : null) == "YES")) {
                    // line 23
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "user"), "id") == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "id"))) {
                        // line 24
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_update", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "id"))), "html", null, true);
                        echo "\" class=\"btn btn-success\">Modifier</a>
               ";
                    }
                    // line 26
                    echo "                      ";
                }
                // line 27
                echo "                </td>
                <td>
                 ";
                // line 29
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos")))) {
                    // line 30
                    echo "           ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getPhotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        // line 31
                        echo "                    ";
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getPrincipal") == true)) {
                            // line 32
                            echo "                    <img width=\"130\" class=\"img-circle\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                            echo "\" /> 
                     ";
                        }
                        // line 33
                        echo " 
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                ";
                }
                // line 36
                echo "                </td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "user"), "username"), "html", null, true);
                echo "</td>
                <td> ";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "user"), "getphotos"));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 39
                    echo "
                                                            ";
                    // line 40
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getPrincipal") == true)) {
                        // line 41
                        echo "                    <img width=\"40\" class=\"img-circle\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "getWebPath")), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "alt"), "html", null, true);
                        echo "\" /> 
                                                            ";
                    }
                    // line 42
                    echo " 

                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    <br>

                    <a href= \"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_profile_showPerso", array("id" => $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "user"), "id"))), "html", null, true);
                echo "\">Contacter</a>
                </td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "sens")), "method"), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "user"), "email"), "html", null, true);
                echo "</td>
                  ";
                // line 51
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getCategories")))) {
                    // line 52
                    echo "           ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : null), "getCategories"));
                    foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                        // line 53
                        echo "                 <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : null), "nom"), "html", null, true);
                        echo "</td>
 ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                 
";
                }
                // line 56
                echo "                  
            </tr>
         ";
            }
            // line 59
            echo "   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  184 => 60,  178 => 59,  155 => 52,  153 => 51,  145 => 49,  120 => 41,  74 => 27,  65 => 24,  118 => 40,  58 => 15,  20 => 1,  161 => 54,  114 => 36,  104 => 36,  96 => 35,  76 => 22,  53 => 20,  37 => 7,  255 => 112,  248 => 83,  245 => 82,  239 => 12,  212 => 110,  192 => 98,  185 => 96,  181 => 95,  170 => 93,  167 => 92,  160 => 53,  150 => 83,  148 => 79,  83 => 32,  77 => 22,  23 => 1,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 113,  252 => 110,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 117,  177 => 65,  169 => 54,  140 => 47,  132 => 70,  128 => 42,  111 => 38,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 11,  230 => 10,  227 => 9,  224 => 71,  221 => 5,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 69,  159 => 61,  143 => 56,  135 => 71,  131 => 44,  119 => 42,  108 => 35,  102 => 33,  71 => 26,  67 => 15,  63 => 17,  59 => 17,  47 => 18,  38 => 5,  94 => 33,  89 => 33,  85 => 31,  79 => 18,  75 => 21,  68 => 19,  56 => 25,  50 => 19,  29 => 2,  87 => 43,  72 => 20,  55 => 12,  21 => 2,  26 => 2,  98 => 29,  93 => 28,  88 => 32,  78 => 29,  46 => 9,  27 => 4,  40 => 8,  44 => 9,  35 => 6,  31 => 3,  43 => 17,  41 => 8,  28 => 2,  201 => 92,  196 => 100,  183 => 82,  171 => 61,  166 => 71,  163 => 91,  158 => 89,  156 => 83,  151 => 63,  142 => 59,  138 => 71,  136 => 45,  123 => 64,  121 => 41,  117 => 44,  115 => 39,  105 => 34,  101 => 35,  91 => 34,  69 => 25,  66 => 18,  62 => 23,  49 => 19,  24 => 4,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 56,  168 => 72,  164 => 55,  162 => 59,  154 => 58,  149 => 50,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 50,  125 => 43,  122 => 43,  116 => 37,  112 => 42,  109 => 34,  106 => 33,  103 => 50,  99 => 31,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 30,  73 => 19,  64 => 17,  60 => 22,  57 => 14,  54 => 15,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 7,  33 => 4,  30 => 7,);
    }
}
