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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "Objetinfo"), "method"));
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
        // line 11
        if (((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")) == null)) {
            // line 12
            echo "<div class=\"row\">
    <div class=\"col-lg-6 col-lg-offset-3\">
        <div class =\"well\">
            <form method =\"post\" ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "> 
       ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
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
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 30
                echo "    ";
                if (($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"), "count") < 3)) {
                    // line 31
                    echo "<div class=\"row\">
    <div class=\"col-lg-6 col-lg-offset-3\">
        <div class =\"well\">
            <form method =\"post\" ";
                    // line 34
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
                    echo "> 
       ";
                    // line 35
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
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
            echo "<div id=\"resultats_recherche\"> 
    <div class=\"row\">
        <div class=\"col-lg-6 col-lg-offset-3\">
            <div id = \"photos\" class =\"well\">

                <table class=\"table borderless\">
";
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 59
                echo "
 ";
                // line 60
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 61
                    echo "
           ";
                    // line 62
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        echo "  <tr>

                        <td>

                            <img width=\"150\" class=\"img-circle\" src=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                        echo "\" /></td>
                        <td>
                            <a  id = \"suppr\" href=\"";
                        // line 68
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_supprimer", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                        echo "\"   class=\"btn btn-danger\">supprimer</a>
                        </td>
                        <td>
                  ";
                        // line 71
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "principal") < 1)) {
                            // line 73
                            echo "                            <a id=\"PhotoDefaut\"  onclick = 'test(";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"), "html", null, true);
                            echo ")' idphoto= ";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"), "html", null, true);
                            echo " class=\"navbar-brand\" href=\"#\">Définir en tant que photo principale</a>
                            ";
                        }
                        // line 75
                        echo "                        </td>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                ";
                }
                // line 78
                echo "
                    </tr>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                </table>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 87
        echo "<script>

    function test(id1) {
        alert(id1);
        var idt = id1;
        var DATA =  id1;
        \$.ajax({
            type: \"POST\",
           ";
        // line 96
        echo "           Routing.generate('fsm_photo_principale',{id1});
            cache: false,
            success: function(data) {
                \$('#resultats_recherche').html(data);
                \$(\".loading\").hide();
            }
        });
        return false;
    }



</script>

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
        return array (  206 => 96,  196 => 87,  188 => 81,  180 => 78,  177 => 77,  170 => 75,  162 => 73,  160 => 71,  154 => 68,  149 => 66,  140 => 62,  137 => 61,  135 => 60,  132 => 59,  128 => 58,  120 => 52,  114 => 50,  101 => 40,  93 => 35,  89 => 34,  84 => 31,  81 => 30,  76 => 29,  61 => 16,  57 => 15,  52 => 12,  50 => 11,  47 => 9,  38 => 7,  34 => 6,  31 => 3,  28 => 2,);
    }
}
