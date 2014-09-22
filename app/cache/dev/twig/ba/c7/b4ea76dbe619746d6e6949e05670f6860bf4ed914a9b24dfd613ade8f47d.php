<?php

/* BCCCronManagerBundle:Default:index.html.twig */
class __TwigTemplate_bac7b4ea76dbe619746d6e6949e05670f6860bf4ed914a9b24dfd613ade8f47d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BCCCronManagerBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCCCronManagerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"existing-crons\">
        <div class=\"page-header\">
            <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cron list", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</h2>
        </div>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crons"]) ? $context["crons"] : $this->getContext($context, "crons")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["index"] => $context["cron"]) {
            // line 9
            echo "            <div class=\"row\">
                <div class=\"span2\">
                    <span class=\"label label-";
            // line 11
            if (($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "status") == "error")) {
                echo "important";
            } elseif (($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "status") == "unknown")) {
                echo "warning";
            } else {
                echo "success";
            }
            echo "\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "status"), array(), "BCCCronManagerBundle"), "html", null, true);
            echo "
                    </span>
                </div>
                <h3 class=\"span";
            // line 15
            if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "suspended")) {
                echo " muted";
            }
            echo "\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "expression"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "command"), "html", null, true);
            echo "
                </h3>
                <button class=\"btn btn-default pull-right\" data-toggle=\"collapse\" data-target=\"#cron-";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "\"><i class=\"icon-search\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Details", array(), "BCCCronManagerBundle"), "html", null, true);
            echo "</button>
            </div>
            <div class=\"collapse in\" id=\"cron-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "\">
                <table class=\"table table-striped\" >
                    <tr>
                        <th class=\"span2\" style=\"color: #808080;\"><i class=\"icon-time\"></i>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last Run", array(), "BCCCronManagerBundle"), "html", null, true);
            echo "</th>
                        <td colspan=\"2\">";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "lastRunTime")) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "lastRunTime"))) : ($this->env->getExtension('translator')->trans("Unknown", array(), "BCCCronManagerBundle"))), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            // line 26
            if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "comment")) {
                // line 27
                echo "                        <tr>
                            <th style=\"color: #049cdb;\"><i class=\"icon-comment\"></i>";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Comment", array(), "BCCCronManagerBundle"), "html", null, true);
                echo "</th>
                            <td colspan=\"2\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "comment"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 32
            echo "                    ";
            if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "logFile")) {
                // line 33
                echo "                        <tr>
                            <th style=\"color: #46a546;\"><i class=\"icon-file\"></i>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log File", array(), "BCCCronManagerBundle"), "html", null, true);
                echo "</th>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "logFile"), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 37
                if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "logSize")) {
                    // line 38
                    echo "                                    <a class=\"btn btn-default btn-info pull-right modal-link\"
                                            href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_file", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "type" => "log")), "html", null, true);
                    echo "\">
                                        <i class=\"icon-search icon-white\"></i>
                                        ";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log File", array(), "BCCCronManagerBundle"), "html", null, true);
                    echo "
                                    </a>
                                ";
                }
                // line 44
                echo "                            </td>
                        </tr>
                    ";
            }
            // line 47
            echo "                    ";
            if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "errorFile")) {
                // line 48
                echo "                        <tr>
                            <th style=\"color: #9d261d;\"><i class=\"icon-file\"></i>";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Error File", array(), "BCCCronManagerBundle"), "html", null, true);
                echo "</th>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "errorFile"), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 52
                if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "errorSize")) {
                    // line 53
                    echo "                                    <a class=\"btn btn-default btn-info pull-right modal-link\"
                                            href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_file", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "type" => "error")), "html", null, true);
                    echo "\">
                                        <i class=\"icon-search icon-white\"></i>
                                        ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Error file", array(), "BCCCronManagerBundle"), "html", null, true);
                    echo "
                                    </a>
                                ";
                }
                // line 59
                echo "                            </td>
                        </tr>
                    ";
            }
            // line 62
            echo "                    <tr>
                        <th style=\"color: #808080;\"><i class=\"icon-cog\"></i>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Raw cron", array(), "BCCCronManagerBundle"), "html", null, true);
            echo "</th>
                        <td colspan=\"2\"><pre>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "html", null, true);
            echo "</pre></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td colspan=\"2\">
                            <span class=\"pull-right\">
                                <a class=\"btn btn-default btn-primary\"
                                   href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_edit", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
            echo "\">
                                    <i class=\"icon-edit icon-white\"></i>
                                    ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit", array(), "BCCCronManagerBundle"), "html", null, true);
            echo "
                                </a>
                                ";
            // line 75
            if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : $this->getContext($context, "cron")), "suspended")) {
                // line 76
                echo "                                    <a class=\"btn btn-default btn-success\"
                                       href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_wakeup", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
                echo "\">
                                        <i class=\"icon-play icon-white\"></i>
                                        ";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Wake up", array(), "BCCCronManagerBundle"), "html", null, true);
                echo "
                                    </a>
                                ";
            } else {
                // line 82
                echo "                                    <a class=\"btn btn-default btn-warning\"
                                       href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_suspend", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
                echo "\">
                                        <i class=\"icon-pause icon-white\"></i>
                                        ";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Suspend", array(), "BCCCronManagerBundle"), "html", null, true);
                echo "
                                    </a>
                                ";
            }
            // line 88
            echo "                                <a class=\"btn btn-default btn-danger\"
                                   href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_remove", array("id" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
            echo "\">
                                    <i class=\"icon-trash icon-white\"></i>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove", array(), "BCCCronManagerBundle"), "html", null, true);
            echo "
                                </a>
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
            ";
            // line 98
            echo (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) ? ("<hr/>") : (""));
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['cron'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </section>
    <section id=\"add-cron\">
        <div class=\"page-header\">
            <h2>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a cron", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</h2>
        </div>
        <form role=\"form\" method=\"post\" action=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("BCCCronManagerBundle_add");
        echo "\">
            ";
        // line 106
        $this->env->loadTemplate("BCCCronManagerBundle:Default:form.html.twig")->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 107
        echo "            <input type=\"submit\" class=\"btn btn-success btn-lg\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "\"/>
        </form>
    </section>
    <section id=\"raw-crons\">
        <div class=\"page-header\">
            <h2>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cron table", array(), "BCCCronManagerBundle"), "html", null, true);
        echo "</h2>
        </div>
        <pre>";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : $this->getContext($context, "raw")), "html", null, true);
        echo "</pre>
    </section>
";
    }

    public function getTemplateName()
    {
        return "BCCCronManagerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 114,  315 => 112,  306 => 107,  304 => 106,  300 => 105,  295 => 103,  290 => 100,  259 => 89,  231 => 77,  226 => 75,  216 => 71,  206 => 64,  202 => 63,  137 => 35,  90 => 18,  263 => 129,  256 => 88,  232 => 112,  228 => 76,  223 => 109,  213 => 104,  198 => 95,  194 => 59,  155 => 75,  129 => 63,  97 => 20,  191 => 62,  180 => 53,  167 => 55,  160 => 77,  152 => 41,  127 => 32,  81 => 29,  70 => 19,  118 => 40,  77 => 15,  58 => 19,  20 => 1,  161 => 54,  148 => 46,  114 => 27,  104 => 52,  76 => 21,  53 => 20,  274 => 98,  271 => 118,  261 => 88,  250 => 85,  245 => 83,  242 => 82,  236 => 79,  211 => 106,  207 => 104,  200 => 102,  188 => 56,  185 => 90,  178 => 52,  175 => 86,  165 => 89,  150 => 77,  84 => 38,  65 => 24,  23 => 4,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 116,  264 => 91,  258 => 81,  252 => 123,  247 => 78,  241 => 77,  229 => 123,  220 => 70,  214 => 69,  177 => 65,  169 => 49,  140 => 55,  132 => 51,  128 => 46,  107 => 24,  61 => 11,  273 => 96,  269 => 94,  254 => 15,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 116,  224 => 71,  221 => 73,  219 => 107,  217 => 75,  208 => 68,  204 => 72,  179 => 87,  159 => 61,  143 => 47,  135 => 48,  119 => 56,  102 => 48,  71 => 12,  67 => 18,  63 => 17,  59 => 16,  38 => 8,  94 => 45,  89 => 41,  85 => 19,  75 => 21,  68 => 26,  56 => 13,  87 => 32,  21 => 2,  26 => 5,  93 => 42,  88 => 40,  78 => 33,  46 => 12,  27 => 5,  44 => 7,  31 => 4,  28 => 3,  201 => 92,  196 => 101,  183 => 54,  171 => 61,  166 => 48,  163 => 47,  158 => 44,  156 => 52,  151 => 73,  142 => 37,  138 => 49,  136 => 54,  121 => 29,  117 => 28,  105 => 45,  91 => 34,  62 => 20,  49 => 15,  24 => 7,  25 => 6,  19 => 1,  79 => 27,  72 => 27,  69 => 20,  47 => 14,  40 => 8,  37 => 10,  22 => 3,  246 => 120,  157 => 56,  145 => 70,  139 => 73,  131 => 44,  123 => 47,  120 => 40,  115 => 39,  111 => 38,  108 => 54,  101 => 30,  98 => 47,  96 => 30,  83 => 16,  74 => 31,  66 => 18,  55 => 15,  52 => 23,  50 => 13,  43 => 13,  41 => 9,  35 => 6,  32 => 8,  29 => 6,  209 => 103,  203 => 78,  199 => 62,  193 => 73,  189 => 92,  187 => 84,  182 => 98,  176 => 56,  173 => 50,  168 => 72,  164 => 78,  162 => 54,  154 => 58,  149 => 51,  147 => 39,  144 => 38,  141 => 69,  133 => 34,  130 => 33,  125 => 62,  122 => 60,  116 => 37,  112 => 26,  109 => 34,  106 => 36,  103 => 23,  99 => 21,  95 => 34,  92 => 41,  86 => 40,  82 => 34,  80 => 24,  73 => 37,  64 => 24,  60 => 21,  57 => 9,  54 => 17,  51 => 15,  48 => 12,  45 => 14,  42 => 20,  39 => 12,  36 => 7,  33 => 5,  30 => 2,);
    }
}
