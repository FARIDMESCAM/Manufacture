<?php

/* fsmUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_221fd20fd320d793c87751507e971b382120802bf9e5da796346012318910e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"row\">
    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class =\"well\">
            <form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <hr/>
                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                </div>
            </form>
        
            
        </div>
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "fsmUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  24 => 5,  19 => 2,  31 => 7,  28 => 3,);
    }
}
