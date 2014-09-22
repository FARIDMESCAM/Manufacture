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
            echo "<p>";
            $this->env->loadTemplate("fsmEchangeBundle:Photos:creation.html.twig")->display($context);
            echo "</p>
";
        } else {
            // line 15
            echo "   ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 16
                echo "    ";
                if (($this->getAttribute($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"), "count") < 3)) {
                    // line 17
                    echo "<p>";
                    $this->env->loadTemplate("fsmEchangeBundle:Photos:creation.html.twig")->display($context);
                    echo "</p>
";
                }
                // line 19
                echo "   ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "<div id=\"affichage_photos\"> 
    <p>";
            // line 22
            $this->env->loadTemplate("fsmEchangeBundle:Photos:listephotos.html.twig")->display($context);
            echo "</p>
</div>
";
        }
        // line 25
        echo "<script>
    function photoP(id1) {
        \$.ajax({
            type: \"POST\",
            url: Routing.generate('fsm_photo_principale', {photo: id1}),
            cache: false,
            success: function(html) {
                \$('#affichage_photos').empty();
                \$('#affichage_photos').append(html);

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
        return array (  108 => 25,  102 => 22,  99 => 21,  85 => 19,  79 => 17,  76 => 16,  58 => 15,  52 => 12,  50 => 11,  47 => 9,  38 => 7,  34 => 6,  31 => 3,  28 => 2,);
    }
}
