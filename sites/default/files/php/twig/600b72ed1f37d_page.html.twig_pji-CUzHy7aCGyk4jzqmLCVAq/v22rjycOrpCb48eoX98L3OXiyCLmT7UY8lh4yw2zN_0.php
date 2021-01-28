<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/waterworks/templates/page/page.html.twig */
class __TwigTemplate_a40505c462a514d3ba2afadc576c08395175db0ba97b5cd5146d37f9ee10bf12 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "include" => 10, "if" => 12];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 7
        $context["has_breadcrumb"] = "";
        // line 8
        echo "<div class=\"gva-body-wrapper\">
\t<div class=\"body-page gva-body-page\">
\t   ";
        // line 10
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/waterworks/templates/page/page.html.twig", 10)->display($context);
        // line 11
        echo "\t\t
\t   ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 13
            echo "\t   \t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 14
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 18
        echo "\t\t
\t\t<div role=\"main\" class=\"main main-page";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null)), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 22
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 23
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t

\t\t\t";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 29
            echo "\t\t\t\t<div class=\"help gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 37
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 40
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 50
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container container-bg\">
\t\t\t\t\t";
        // line 55
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/custom/waterworks/templates/page/page.html.twig", 55)->display($context);
        // line 56
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 60
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 66
        echo "
\t\t\t";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 68
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 76
        echo "\t\t\t
\t\t</div>
\t</div>

\t";
        // line 80
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/custom/waterworks/templates/page/page.html.twig", 80)->display($context);
        // line 81
        echo "</div>

";
        // line 83
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/quick-side.html.twig"), "themes/custom/waterworks/templates/page/page.html.twig", 83)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/waterworks/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  193 => 81,  191 => 80,  185 => 76,  177 => 71,  172 => 68,  170 => 67,  167 => 66,  160 => 62,  156 => 60,  154 => 59,  149 => 56,  147 => 55,  140 => 50,  131 => 44,  125 => 40,  123 => 39,  119 => 37,  111 => 32,  106 => 29,  104 => 28,  100 => 26,  94 => 24,  91 => 23,  89 => 22,  83 => 19,  80 => 18,  74 => 15,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  61 => 10,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/waterworks/templates/page/page.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/themes/custom/waterworks/templates/page/page.html.twig");
    }
}
