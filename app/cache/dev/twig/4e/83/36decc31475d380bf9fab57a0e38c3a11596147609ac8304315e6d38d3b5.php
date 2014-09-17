<?php

/* fsmEchangeBundle:Objets:objetsList.html.twig */
class __TwigTemplate_4e8336decc31475d380bf9fab57a0e38c3a11596147609ac8304315e6d38d3b5 extends Twig_Template
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
        echo "<div class =\"row-30\">
    <div class =\"col-lg-5\"></div>
<caption>
            <h4 >Toutes les annonces </h4 >
        </caption>
</div>

<div class=\"row\">
<div class=\"col-lg-4 col-lg-offset-4\">
<div class =\"well\">
  <form method =\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "> 
       ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type =\"submit\" class =\"btn btn-primary\" />
    </form>
</div>
</div>
</div>    
<p>";
        // line 20
        $this->env->loadTemplate("fsmEchangeBundle:Objets:Recherche.html.twig")->display($context);
        echo "</p>
<br>
  
<p>";
        // line 23
        $this->env->loadTemplate("fsmEchangeBundle:Objets:Objets.html.twig")->display($context);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objetsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  56 => 20,  47 => 14,  43 => 13,  31 => 3,  28 => 2,);
    }
}
