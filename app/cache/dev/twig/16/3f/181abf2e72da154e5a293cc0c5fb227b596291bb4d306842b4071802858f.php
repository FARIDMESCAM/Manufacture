<?php

/* fsmUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_163f181abf2e72da154e5a293cc0c5fb227b596291bb4d306842b4071802858f extends Twig_Template
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
    <div class=\"msgOK\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <p >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <div class=\"col-lg-4 col-lg-offset-4\">
        <div class =\"well\">
            <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "  <br/>
                    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userphotos"]) ? $context["userphotos"] : $this->getContext($context, "userphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["userphoto"]) {
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 14
                echo "            ";
                if ((!(null === $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos")))) {
                    // line 15
                    echo "                <div class=\"row\">
                    <div class =\"well\">
                        ";
                    // line 18
                    echo "                        ";
                    if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "principal") < 1)) {
                        // line 19
                        echo "                            <a class=\"navbar-brand\" href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_principale", array("photo" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                        echo "\">Définir en tant que photo principale</a>
                            ";
                    }
                    // line 21
                    echo "                            <hr>
                        <img width=\"130\" class=\"img-circle\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                    echo "\" /> 
                        <div class=\"col-lg-4 col-lg-offset-1\">
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_supprimer", array("id" => $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-danger\">supprimer</a>
                            
                        </div>
                     </div>
                </div>
        
            ";
                }
                // line 30
                echo " 
            
            
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            if (($this->getAttribute($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"), "count") == 0)) {
                // line 35
                echo "<p><em><strong>Vous n'avez pas associé de photo à votre profil.</strong></em></p>
<p><em><strong>Ceci permettrait pourtant à vos voisins de vous reconnaitre</strong></em></p>
";
            }
            // line 37
            echo " 
";
            // line 39
            if (($this->getAttribute($this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "getPhotos"), "count") < 3)) {
                // line 40
                echo "<div class=\"row\">
                    <div class=\"col-lg-4 col-lg-offset-4\">
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_photo_ajout_U", array("id" => $this->getAttribute((isset($context["userphoto"]) ? $context["userphoto"] : $this->getContext($context, "userphoto")), "id"))), "html", null, true);
                echo "\" class=\"btn btn-success\">Ajouter Photo</a>
                    </div>
                </div>
";
            }
            // line 46
            echo "                <hr/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                <div class=\"col-lg-4 col-lg-offset-4\">
                    <input class=\"btn btn-success\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</form>";
    }

    public function getTemplateName()
    {
        return "fsmUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 49,  135 => 48,  128 => 46,  121 => 42,  117 => 40,  115 => 39,  112 => 37,  107 => 35,  105 => 34,  96 => 30,  86 => 24,  79 => 22,  76 => 21,  70 => 19,  67 => 18,  63 => 15,  60 => 14,  55 => 13,  51 => 12,  47 => 11,  41 => 10,  37 => 8,  27 => 5,  23 => 4,  19 => 2,  33 => 5,  31 => 4,  28 => 3,);
    }
}
