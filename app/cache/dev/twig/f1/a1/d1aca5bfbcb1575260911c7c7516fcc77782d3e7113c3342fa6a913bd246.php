<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f1a1d1aca5bfbcb1575260911c7c7516fcc77782d3e7113c3342fa6a913bd246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fsmUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "fsmUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "   
    <div class=\"row\">
     <div class=\"col-lg-4 col-lg-offset-4\">
         <div class =\"well\">
       
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
         </div>
            <div class =\"well\">
    <input class=\"form-control\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
     <label for=\"remember_me\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
   </div>
<div class =\"well\"> 
    
    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
 </div>
</form>
                                    
            </div>
        </div>
    </div>
    
           <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
            <div class =\"well\">
                
                <p class=\"text-center\"><strong> <a  href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a>
                    </strong></p>
                        
     </div>
                 </div>
           </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 39,  79 => 27,  72 => 23,  64 => 18,  59 => 16,  55 => 15,  50 => 13,  46 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
