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

/* themes/custom/waterworks/templates/page/header-1.html.twig */
class __TwigTemplate_58f3b45ce5c56c20ef576bd42e0e9d074b800d82e935538c390d9a02a3782724 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "set" => 20];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
        // line 1
        echo "<header id=\"header\" class=\"header-v1\">

  ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "topbar", [])) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-11\">
              <div class=\"topbar-content\">";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topbar", [])), "html", null, true);
            echo "</div>
            </div>
            <div class=\"col-lg-1\">
              <div class=\"language-box\">";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "language", [])), "html", null, true);
            echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        $context["class_sticky"] = "";
        // line 21
        echo "  ";
        if ((($context["sticky_menu"] ?? null) == 1)) {
            // line 22
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 23
            echo "  ";
        }
        // line 24
        echo "
   <div class=\"header-main ";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_sticky"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container-fluid header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-4 col-sm-6 col-xs-6 branding\">
                ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 31
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "              </div>
              <div class=\"col-sm-3 col-xs-3 right-header visible-sm visible-xs\">
                <a href=\"https://platform.waterworksfund.com/en/explore\" class=\"btn btn-primary nav-invest-btn\">Invest</a>
              </div>
              <div class=\"col-md-8 col-sm-3 col-xs-3 right-header\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                        <div class=\"gva-offcanvas-mobile\">
                          <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                          <div class=\"main-menu-inner\">
                            ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 46
            echo "                              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "
                            ";
        }
        // line 48
        echo "                          </div>

                          ";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "offcanvas", [])) {
            // line 51
            echo "                            <div class=\"after-offcanvas hidden\">
                              ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "offcanvas", [])), "html", null, true);
            echo "
                            </div>
                          ";
        }
        // line 55
        echo "                        </div>

                        <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                          <span class=\"one\"></span>
                          <span class=\"two\"></span>
                          <span class=\"three\"></span>
                        </div>

                        ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "quick_side", [])) {
            // line 64
            echo "                          <div class=\"quick-side-icon hidden-xs hidden-sm\">
                            <div class=\"icon\"><a href=\"#\"><span class=\"qicon fa fa-bars\"></span></a></div>
                          </div>
                        ";
        }
        // line 68
        echo "
                        ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 70
            echo "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">
                              ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
                            </div>
                          </div>
                        ";
        }
        // line 77
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/waterworks/templates/page/header-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 77,  182 => 73,  177 => 70,  175 => 69,  172 => 68,  166 => 64,  164 => 63,  154 => 55,  148 => 52,  145 => 51,  143 => 50,  139 => 48,  133 => 46,  131 => 45,  117 => 33,  111 => 31,  109 => 30,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  74 => 12,  68 => 9,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/waterworks/templates/page/header-1.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/themes/custom/waterworks/templates/page/header-1.html.twig");
    }
}
