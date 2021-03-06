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
        return array (  180 => 58,  167 => 55,  162 => 54,  160 => 53,  152 => 51,  143 => 47,  127 => 43,  125 => 42,  122 => 41,  118 => 40,  108 => 37,  92 => 33,  87 => 32,  85 => 31,  78 => 28,  70 => 25,  62 => 23,  60 => 22,  53 => 20,  50 => 19,  26 => 2,  20 => 1,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 409,  278 => 408,  276 => 393,  273 => 392,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  248 => 336,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  230 => 303,  225 => 298,  222 => 297,  220 => 290,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  204 => 267,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 62,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  179 => 224,  176 => 56,  174 => 217,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  156 => 52,  154 => 189,  151 => 188,  149 => 182,  146 => 181,  141 => 175,  139 => 169,  136 => 168,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  116 => 116,  114 => 39,  111 => 38,  109 => 105,  106 => 104,  104 => 90,  101 => 35,  96 => 67,  94 => 57,  91 => 56,  81 => 29,  79 => 32,  76 => 31,  69 => 13,  66 => 12,  64 => 3,  274 => 119,  271 => 374,  268 => 373,  264 => 89,  261 => 88,  254 => 15,  250 => 341,  245 => 335,  242 => 12,  236 => 5,  229 => 123,  227 => 301,  219 => 110,  211 => 106,  207 => 269,  200 => 102,  196 => 101,  188 => 100,  185 => 61,  182 => 98,  178 => 97,  175 => 96,  173 => 95,  165 => 89,  163 => 88,  150 => 77,  147 => 49,  144 => 176,  135 => 44,  119 => 117,  115 => 55,  107 => 50,  103 => 49,  99 => 68,  95 => 34,  89 => 47,  86 => 46,  84 => 41,  71 => 19,  65 => 24,  59 => 27,  57 => 26,  47 => 18,  45 => 12,  41 => 11,  37 => 10,  29 => 5,  23 => 1,  74 => 20,  61 => 2,  49 => 14,  43 => 17,  31 => 3,  28 => 2,);
    }
}
