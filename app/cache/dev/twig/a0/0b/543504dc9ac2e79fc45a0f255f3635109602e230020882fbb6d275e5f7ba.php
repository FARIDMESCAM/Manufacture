<?php

/* fsmEchangeBundle:Photos:creation.html.twig */
class __TwigTemplate_a00b543504dc9ac2e79fc45a0f255f3635109602e230020882fbb6d275e5f7ba extends Twig_Template
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
        // line 19
        echo " ";
    }

    // line 1
    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"row\">
    <div class=\"col-lg-6 col-lg-offset-3\">
        <div class =\"well\">
            <form method =\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
       ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <div class=\"col-lg-2\"></div>
                <input type =\"submit\" class =\"btn btn-primary\" />
                <div class=\"col-lg-2\"></div>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fsm_objets_mes");
        echo "\">Pas de photo</a>
                <hr>
                <p class=\"text-center\">Vous pouvez mettre jusqu'à 3 photos.</p>
        </div>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Photos:creation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  29 => 2,  26 => 1,  22 => 19,  20 => 1,  108 => 25,  102 => 22,  99 => 21,  85 => 19,  79 => 17,  76 => 16,  58 => 15,  52 => 12,  50 => 11,  47 => 9,  38 => 6,  34 => 5,  31 => 3,  28 => 2,);
    }
}
