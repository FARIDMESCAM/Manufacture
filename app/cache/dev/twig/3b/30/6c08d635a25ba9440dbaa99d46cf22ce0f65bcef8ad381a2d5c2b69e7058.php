<?php

/* fsmEchangeBundle:Objets:formatMail.html.twig */
class __TwigTemplate_3b306c08d635a25ba9440dbaa99d46cf22ce0f65bcef8ad381a2d5c2b69e7058 extends Twig_Template
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
        echo " 

<span class=\"badge\">Message issu du site la manufacture de Pantin.</span>


<img   width=\"100\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/manufacture.jpg"), "html", null, true);
        echo "\" />
        ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["textemail"]) ? $context["textemail"] : $this->getContext($context, "textemail")), "html", null, true);
        echo "
   ";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:formatMail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  20 => 1,);
    }
}
