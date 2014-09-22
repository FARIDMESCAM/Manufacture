<?php

/* fsmEchangeBundle:Photos:listephotos.html.twig */
class __TwigTemplate_fc6c408a659edfda283fa7ae321647ab402d307caba945a9084458a9afb0078d extends Twig_Template
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
        // line 35
        echo " ";
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"row\">
        <div class=\"col-lg-6 col-lg-offset-3\">
            <div id = \"photos\" class =\"well\">

                <table class=\"table borderless\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 8
            echo "
 ";
            // line 9
            if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                // line 10
                echo "
           ";
                // line 11
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"));
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    echo "  <tr>
";
                    // line 13
                    echo "                        <td>

                            <img width=\"150\" class=\"img-circle\" src=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" /></td>
                        <td>
                            <a  id = \"suppr\" href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_supprimer", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                    echo "\"   class=\"btn btn-danger\">supprimer</a>
                        </td>
                        <td>
                  ";
                    // line 20
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "principal") < 1)) {
                        // line 22
                        echo "                            <a id=\"PhotoDefaut\"  onclick = 'photoP(";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"), "html", null, true);
                        echo ")' idphoto= ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"), "html", null, true);
                        echo " class=\"navbar-brand\" href=\"#\">Définir en tant que photo principale</a>
                            ";
                    }
                    // line 24
                    echo "                        </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                ";
            }
            // line 27
            echo "
                    </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </table>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Photos:listephotos.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  89 => 27,  86 => 26,  71 => 22,  69 => 20,  63 => 17,  54 => 13,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  36 => 7,  46 => 11,  29 => 2,  26 => 1,  22 => 35,  20 => 1,  108 => 25,  102 => 22,  99 => 21,  85 => 19,  79 => 24,  76 => 16,  58 => 15,  52 => 12,  50 => 11,  47 => 9,  38 => 6,  34 => 5,  31 => 3,  28 => 2,);
    }
}
