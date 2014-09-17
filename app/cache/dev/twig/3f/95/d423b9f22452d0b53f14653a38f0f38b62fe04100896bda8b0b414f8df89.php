<?php

/* fsmEchangeBundle:Default:index.html.twig */
class __TwigTemplate_3f95d423b9f22452d0b53f14653a38f0f38b62fe04100896bda8b0b414f8df89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("fsmEchangeBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
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
        echo " ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "Creationinfo"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "<p >";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo " </p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</p>

";
        } else {
            // line 12
            echo "
<div class =\"container\">
    <div class =\"row-100\">.</div>
    <div class =\"row\">
      ";
            // line 17
            echo "        <div class =\"col-lg-2\">
            <table class=\"table borderless\">
                <tbody> 
                    
                    <tr>
                <p class=\"\"text-center\">  <em><strong>Les dernières annonces</strong></em></p>
                    </tr>
          ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
            foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
                // line 25
                echo "                    <tr>
                        <td>
              ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "nom"), "html", null, true);
                echo "</td>
                    ";
                // line 31
                echo "                        <td>";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 32
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getphotos"));
                    foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                        echo "               
";
                        // line 33
                        if (($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getPrincipal", array(), "method") == 1)) {
                            // line 34
                            echo "                           <a href= \"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_objet_show", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                            echo "\">
                               <img width=\"45\" class=\"img-circle\" src=\"";
                            // line 35
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                            echo "\" /> 
                           </a>
 ";
                        }
                        // line 38
                        echo "
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "              ";
                }
                // line 41
                echo "                        </td></tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    


            </table>
        </div>  
        <div class =\"col-lg-1\"> </div> 
        <div class =\"col-lg-5\">
            <img   width=\"400\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/manufacture.jpg"), "html", null, true);
            echo "\" />
        </div> 
        <div class =\"col-lg-1\"></div>
    ";
            // line 54
            $this->displayBlock('aside', $context, $blocks);
            // line 71
            echo " 

            <div class =\"col-lg-1\"></div>
    </div> 
    <div class =\"row-100\">.</div>
</div> 
<br>
<br>
<a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">
    <div class =\"col-lg-6\"> </div><span class=\"badge\">
        Inscription
    </span></a>
";
        }
        // line 83
        echo " 
";
    }

    // line 54
    public function block_aside($context, array $blocks = array())
    {
        // line 55
        echo "        <span class=\"badge\">Un site d'échanges de biens et services</span>
        <br>
        <br>
        <span class=\"badge\">Un blog</span>
        <br>
        <br>
        <span class=\"badge\">les news du conseil syndical</span>
        <br>
        <br>
        <h4>
            Le tout entre voisins
            </h>


            <br>
            </div>
";
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  161 => 54,  156 => 83,  148 => 79,  138 => 71,  136 => 54,  130 => 50,  121 => 43,  114 => 41,  111 => 40,  104 => 38,  96 => 35,  91 => 34,  89 => 33,  83 => 32,  80 => 31,  76 => 27,  72 => 25,  68 => 24,  59 => 17,  53 => 12,  48 => 9,  39 => 7,  35 => 6,  32 => 3,  29 => 2,);
    }
}
