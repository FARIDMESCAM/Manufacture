<?php

/* fsmEchangeBundle:Objets:objet.html.twig */
class __TwigTemplate_a8174cdea8907ea35748a4c10d5d2b9594c1abc46e43a8db6fe866faa75b1c53 extends Twig_Template
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
        echo "<div class =\"container\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objetphotos"]) ? $context["objetphotos"] : $this->getContext($context, "objetphotos")));
        foreach ($context['_seq'] as $context["_key"] => $context["objetphoto"]) {
            // line 5
            echo "    <div class =\"row-30\">
        <div class=\"col-lg-10 col-lg-offset-1\">
            <div class =\"well\">
                <p class=\"text-center\">
                    <strong>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "nom"), "html", null, true);
            echo " </strong>
                    </p><hr>
   
    <div class =\"row-30\">
";
            // line 14
            echo "        ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
                // line 15
                echo "        <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fsm_user_envoimail", array("id" => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "id"))), "html", null, true);
                echo "\" />Envoyer un mail<img width=\"50\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/mail.jpg"), "html", null, true);
                echo "\" /> </a><br> <br> <br>
    ";
            }
            // line 16
            echo "   
    <strong> description : </strong> <br>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "description"), "html", null, true);
            echo "<br>
        <strong> type d'annonce </strong><br>
        ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "sens")), "method"), "html", null, true);
            echo "<br>
        ";
            // line 21
            if (($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "RetourType", array(0 => $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "sens")), "method") < 1)) {
                // line 22
                echo "        <strong>Prix demandé :  </strong> <br>
        ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "prix"), "html", null, true);
                echo "<br>
        ";
            }
            // line 25
            echo "        <strong> Photos : </strong>
         ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 27
                echo "        ";
                if ((!(null === $this->getAttribute((isset($context["objetphoto"]) ? $context["objetphoto"] : $this->getContext($context, "objetphoto")), "getPhotos")))) {
                    // line 28
                    echo "         <div class=\"thumbnail\">
";
                    // line 29
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : $this->getContext($context, "is_owner")) == true)) {
                        echo "       
";
                        // line 33
                        echo "                             ";
                    }
                    // line 34
                    echo "                            <hr>
                        <img src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "getWebPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "alt"), "html", null, true);
                    echo "\" /> 
                      ";
                    // line 36
                    if (((isset($context["is_owner"]) ? $context["is_owner"] : $this->getContext($context, "is_owner")) == true)) {
                        // line 37
                        echo "                       ";
                        // line 40
                        echo "                         ";
                    }
                    // line 41
                    echo "         </div>    
        ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        <hr>
                        
                        
    </div>
            </div>
    </div>
     </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objetphoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "fsmEchangeBundle:Objets:objet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  125 => 43,  121 => 41,  118 => 40,  116 => 37,  114 => 36,  108 => 35,  105 => 34,  102 => 33,  98 => 29,  95 => 28,  92 => 27,  88 => 26,  85 => 25,  80 => 23,  77 => 22,  75 => 21,  71 => 20,  66 => 18,  62 => 16,  54 => 15,  51 => 14,  44 => 9,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
