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

/* modules/contrib/sendinblue/templates/generateHomeLogin.html.twig */
class __TwigTemplate_f8f8b4acd8001119ac937593ebabb51d1055bf49df16a6ee79f6584efb82f86b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 6, "for" => 20, "if" => 21, "include" => 63];
        $filters = ["escape" => 11, "upper" => 11, "t" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'for', 'if', 'include'],
                ['escape', 'upper', 't'],
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
        echo "<div id=\"wrap\" class=\"box-border-box container-fluid\">
    <div id=\"wrap-left\" class=\"box-border-box col-md-9\">
        <div id=\"main-content\">
            <div class=\"panel panel-default row small-content\">
                <div class=\"page-header\">
                    <strong>";
        // line 6
        echo t("My Account", array());
        echo "</strong>
                </div>
                <div class=\"panel-body\">
                  <div class=\"col-md-8 row\" style=\"margin-bottom: 10px;\">
                    <p class=\"col-md-12\" style=\"margin-top: 5px;\">
                      <span class=\"col-md-12\"><b>";
        // line 11
        echo t("Your currently API Version :", array());
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["api_version"] ?? null))), "html", null, true);
        echo "</b></span>
                    </p>
                  </div>

                  <span class=\"col-md-12\"><b>";
        // line 15
        echo t("You are currently logged in as :", array());
        echo "</b></span>
                    <div class=\"col-md-8 row\" style=\"margin-bottom: 10px;\">
                        <p class=\"col-md-12\" style=\"margin-top: 5px;\">
                            ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["account_username"] ?? null)), "html", null, true);
        echo " - ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["account_email"] ?? null)), "html", null, true);
        echo " <br/>

                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["account_data"] ?? null), "plan", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 21
            echo "                                ";
            if ($this->getAttribute($context["value"], "type", [])) {
                // line 22
                echo "                                    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["value"], "type", []))), "html", null, true);
                echo " - ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["value"], "credits", [])), "html", null, true);
                echo " ";
                echo t("credits", array());
                // line 23
                echo "                                    <br/>
                                ";
            }
            // line 25
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </p>

                        <p>
                            ";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sendinblue_logout_form"] ?? null)), "html", null, true);
        echo "
                        </p>
                    </div>
                    <span class=\"col-md-12\"><b>";
        // line 32
        echo t("Contacts", array());
        echo "</b></span>
                    <div class=\"col-md-8 row\" style=\"margin-bottom: 10px;\">
                        <p class=\"col-md-7\" style=\"margin-top: 5px;\">
                            ";
        // line 35
        echo t("You have", array());
        echo " <span> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_subscribers"] ?? null)), "html", null, true);
        echo "</span>
                            ";
        // line 36
        echo t("Contacts", array());
        // line 37
        echo "                            <br/>
                            ";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a id=\"sendinblue_list_link\" href=\"@sendinblue_list\" target=\"_blank\">> Access to the list of all my contacts</a>", ["@sendinblue_list" => "https://my.sendinblue.com/users/list/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        // line 39
        echo "
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"panel panel-default row small-content\">
                <div class=\"page-header\">
                    <strong>";
        // line 46
        echo t("Registering user", array());
        echo "</strong></div>
                <div class=\"panel-body\">
                    ";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sendinblue_user_register_form"] ?? null)), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"panel panel-default row small-content\">
                <div class=\"page-header\">
                    <strong>";
        // line 53
        echo t("Transactional emails", array());
        echo "</strong></div>
                <div class=\"panel-body\">
                    ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sendinblue_send_email_form"] ?? null)), "html", null, true);
        echo "
                </div>
            </div>
        </div>


    </div>

    ";
        // line 63
        $this->loadTemplate("@sendinblue/footer.html.twig", "modules/contrib/sendinblue/templates/generateHomeLogin.html.twig", 63)->display($context);
        // line 64
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/sendinblue/templates/generateHomeLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 64,  184 => 63,  173 => 55,  168 => 53,  160 => 48,  155 => 46,  146 => 39,  144 => 38,  141 => 37,  139 => 36,  133 => 35,  127 => 32,  121 => 29,  116 => 26,  110 => 25,  106 => 23,  99 => 22,  96 => 21,  92 => 20,  85 => 18,  79 => 15,  70 => 11,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/sendinblue/templates/generateHomeLogin.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/modules/contrib/sendinblue/templates/generateHomeLogin.html.twig");
    }
}
