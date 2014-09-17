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
        return array (  191 => 62,  185 => 61,  180 => 58,  176 => 56,  167 => 55,  162 => 54,  160 => 53,  156 => 52,  152 => 51,  147 => 49,  143 => 47,  135 => 44,  127 => 43,  125 => 42,  122 => 41,  118 => 40,  114 => 39,  111 => 38,  108 => 37,  101 => 35,  95 => 34,  92 => 33,  87 => 32,  85 => 31,  81 => 29,  78 => 28,  70 => 25,  65 => 24,  62 => 23,  60 => 22,  53 => 20,  50 => 19,  47 => 18,  43 => 17,  26 => 2,  20 => 1,);
    }
}
