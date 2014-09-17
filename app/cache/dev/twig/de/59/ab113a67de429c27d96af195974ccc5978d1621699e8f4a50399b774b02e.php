<?php

/* fsmUserBundle:Profile:showP.html.twig */
class __TwigTemplate_de59ab113a67de429c27d96af195974ccc5978d1621699e8f4a50399b774b02e extends Twig_Template
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
        echo "<div class=\"row\"></row>
    <div class=\"col-lg-4 col-lg-offset-4\">
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userphotos"]) ? $context["userphotos"] : $this->getContext($context, "userphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["userphoto"]) {
            // line 6
            echo "        <p><label for=\"username\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>:</p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "username"), "html", null, true);
            echo "</p>
        </div>

        <br>
<hr>
        <p> <label for=\"email\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "email"), "html", null, true);
            echo "</p></div>
  
             <br>
<hr>
        <p> <label for=\"telephone\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telephone", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>: </p>
        <div class=\"col-lg-2 col-lg-offset-1\"><p> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "telephone"), "html", null, true);
            echo "</p></div>
              <br>
<hr>

   ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 23
                if ((!(null === $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos")))) {
                    // line 24
                    echo "                <img width=\"130\" class=\"img-circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" /> 
 ";
                }
                // line 25
                echo "          
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "         

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                   </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "fsmUserBundle:Profile:showP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  93 => 27,  86 => 25,  80 => 24,  78 => 23,  74 => 22,  67 => 18,  63 => 17,  56 => 13,  52 => 12,  44 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
