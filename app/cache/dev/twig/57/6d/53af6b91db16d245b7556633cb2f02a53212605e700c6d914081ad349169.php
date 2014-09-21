<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_576d53af6b91db16d245b7556633cb2f02a53212605e700c6d914081ad349169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  208 => 97,  206 => 95,  196 => 87,  188 => 81,  180 => 78,  177 => 77,  170 => 75,  162 => 73,  160 => 71,  154 => 68,  149 => 66,  140 => 62,  137 => 61,  135 => 60,  132 => 59,  128 => 58,  120 => 52,  114 => 50,  101 => 40,  93 => 35,  89 => 34,  84 => 31,  81 => 30,  76 => 29,  61 => 16,  57 => 12,  52 => 12,  50 => 11,  47 => 9,  38 => 7,  34 => 6,  31 => 3,  28 => 2,);
    }
}
