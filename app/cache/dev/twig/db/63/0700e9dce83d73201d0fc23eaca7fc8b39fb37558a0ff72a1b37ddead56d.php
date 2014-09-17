<?php

/* fsmUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_db630700e9dce83d73201d0fc23eaca7fc8b39fb37558a0ff72a1b37ddead56d extends Twig_Template
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
        echo "
<div class=\"row\">
    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class =\"well\">
            <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">

";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <hr/>
                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
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
        return "fsmUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  32 => 8,  25 => 6,  19 => 2,  31 => 4,  28 => 3,);
    }
}
