<?php

/* fsmEchangeBundle::layout.html.twig */
class __TwigTemplate_b2fb79dd7e639775b472dd494321b06291dfc3e6fc62d2d5cb2045b17febdaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout_0.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_0.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Echangeons
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  53 => 13,  47 => 9,  38 => 7,  34 => 6,  31 => 3,  28 => 2,);
    }
}
