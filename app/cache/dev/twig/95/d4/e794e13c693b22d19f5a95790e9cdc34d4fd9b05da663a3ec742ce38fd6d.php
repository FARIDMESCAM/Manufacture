<?php

/* fsmEchangeBundle:Objets:objetsPerso.html.twig */
class __TwigTemplate_95d4e794e13c693b22d19f5a95790e9cdc34d4fd9b05da663a3ec742ce38fd6d extends Twig_Template
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
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos"))) > 0)) {
            // line 6
            echo "    
<caption>
            <h4 >Mes annonces </h4 >
        </caption>
</div>
<div class =\"col-lg-2\"></div>
<a class=\"navbar-brand\" href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
            echo "\">Ajout d'objets</a>
<p>";
            // line 13
            $this->env->loadTemplate("fsmEchangeBundle:Objets:Objets.html.twig")->display($context);
            echo "</p>
";
        } else {
            // line 15
            echo "
<p><strong>
        <br><br>
         <div class =\"col-lg-5\"></div>
        Vous n'avez encore pas encore mis d'annonces en ligne.<br><br><br><br><br><br>
         <div class =\"col-lg-5\"></div>
        Vous y êtes cordialement invité.<br><br><br><br>
   <div class =\"col-lg-5\"></div> <a class=\"navbar-brand\" href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fsm_objet_ajout");
            echo "\">Ajout d'objets</a>     
</strong></p>
<br><br><br><br>

";
        }
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objetsPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  54 => 15,  49 => 13,  45 => 12,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
