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

/* themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig */
class __TwigTemplate_d8e4b9ffeac641fa228ba7bddf51d7eafaa008077276ac55837a1cb2901224e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 7, "include" => 11, "if" => 13];
        $filters = ["escape" => 16];
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
\t\t
\t   ";
        // line 11
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 11)->display($context);
        // line 12
        echo "\t\t
\t\t";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])) {
            // line 14
            echo "\t\t\t";
            $context["has_breadcrumb"] = " has-breadcrumb";
            // line 15
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumbs", [])), "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "
\t\t<div role=\"main\" class=\"main main-page";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["has_breadcrumb"] ?? null)), "html", null, true);
        echo "\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 23
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])) {
            // line 24
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow_content", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t

\t\t\t";
        // line 29
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 30
            echo "\t\t\t\t<div class=\"help  gav-help-region\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 40
        if ($this->getAttribute(($context["page"] ?? null), "before_content", [])) {
            // line 41
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "before_content", [])), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 51
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container container-bg\">
\t\t\t\t\t";
        // line 56
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 56)->display($context);
        // line 57
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 60
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 61
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 67
        echo "
\t\t\t";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "after_content", [])) {
            // line 69
            echo "\t\t\t\t<div class=\"area after-content\">
\t\t\t\t\t<div class=\"container\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "after_content", [])), "html", null, true);
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 77
        echo "\t\t\t
\t\t</div>
\t\t
\t</div>

\t";
        // line 82
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 82)->display($context);
        // line 83
        echo "</div>

";
        // line 85
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/quick-side.html.twig"), "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 85,  195 => 83,  193 => 82,  186 => 77,  178 => 72,  173 => 69,  171 => 68,  168 => 67,  161 => 63,  157 => 61,  155 => 60,  150 => 57,  148 => 56,  141 => 51,  132 => 45,  126 => 41,  124 => 40,  120 => 38,  112 => 33,  107 => 30,  105 => 29,  101 => 27,  95 => 25,  92 => 24,  90 => 23,  84 => 20,  81 => 19,  75 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  62 => 11,  57 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/themes/custom/waterworks/templates/page/page-layout/page--layout--container_no_sidebar.html.twig");
    }
}
