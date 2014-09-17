<?php

/* fsmEchangeBundle:Default:habilite.html.twig */
class __TwigTemplate_63febaa3ba28b8c7d5ef366a68676414d153a5258061e0523bfd4905673584b9 extends Twig_Template
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
        echo " <div class=\"row\">
<div class=\"col-lg-6 col-lg-offset-3\">
    <div class =\"well\">
        L'administrateur ne vous a pas habilité. Ca ne saurait tarder.
        
    </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Default:habilite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
