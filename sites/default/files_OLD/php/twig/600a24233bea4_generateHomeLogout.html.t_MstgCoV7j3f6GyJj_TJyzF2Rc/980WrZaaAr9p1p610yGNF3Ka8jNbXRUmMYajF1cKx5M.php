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

/* modules/contrib/sendinblue/templates/generateHomeLogout.html.twig */
class __TwigTemplate_9d6ce59b23d7aafc59af7964e2bae43a94325ed7cff1190948771063c991a757 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 6, "include" => 66];
        $filters = ["t" => 24, "escape" => 56];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'include'],
                ['t', 'escape'],
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
                    ";
        // line 6
        echo t("<span style=\"color: #777777;\">Step1 | </span><strong>Create a SendinBlue
                        Account</strong>", array());
        // line 8
        echo "                </div>
                <div class=\"panel-body\">
                    <div class=\"col-md-9 row\">
                        <p>";
        // line 11
        echo t("By Creating a free SendinBlue account, you will have access to send a confirmation
                            message.", array());
        // line 12
        echo "</p>
                        <ul class=\"sib-home-feature\">
                            <li>- ";
        // line 14
        echo t("Collect your contacts and upload your lists", array());
        echo "</li>
                            <li>- ";
        // line 15
        echo t("Use SendinBlue SMTP to send your transactional
                                emails", array());
        // line 16
        echo "</li>
                            <li class=\"home-read-more-content\">- ";
        // line 17
        echo t("Email marketing
                                builders", array());
        // line 18
        echo "</li>
                            <li class=\"home-read-more-content\">- ";
        // line 19
        echo t("Create and schedule your email
                                marketing campaigns", array());
        // line 21
        echo "                            </li>
                            <li class=\"home-read-more-content\">- ";
        // line 22
        echo t("See all of", array());
        // line 23
        echo "                                ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-feature\" target=\"_blank\">SendinBlue's features</a></li>", ["@sendinblue-signup" => "https://www.sendinblue.com/features/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        // line 24
        echo "

                        </ul>

                        ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-signup\" target=\"_blank\" style=\"margin-top: 10px;display: block;\">> Create an account</a>", ["@sendinblue-signup" => "https://www.sendinblue.com/users/signup/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        // line 29
        echo "

                    </div>
                </div>
            </div>
            <div class=\"panel panel-default row small-content\">
                <div class=\"page-header\">
                    <span style=\"color: #777777;\">";
        // line 36
        echo t("Step2", array());
        echo " | </span>
                    <strong>";
        // line 37
        echo t("Activate your account with your API key.", array());
        echo "</strong></div>
                <div class=\"panel-body\">
                    <div class=\"col-md-9 row\">
                        <div id=\"success-alert\" class=\"alert alert-success\" role=\"alert\" style=\"display: none;\">
                            ";
        // line 41
        echo t("You successfully activate your account.", array());
        // line 42
        echo "                        </div>
                        <div id=\"failure-alert\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">' .
                            ";
        // line 44
        echo t("Please input correct information", array());
        // line 45
        echo "                        </div>
                        <p>";
        // line 46
        echo t("Once your have created your SendinBlue account, activate this plugin to send all
                            your
                            transactional emails by using SendinBlue SMTP to make sure all of your emails get to your
                            contacts inbox.", array());
        // line 49
        echo "<br/>
                            ";
        // line 50
        echo t("To activate your plugin, enter your API key.", array());
        echo "<br/></p>
                        <p>
                            ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-apikey\" target=\"_blank\">> Get your API key from your  account</a>", ["@sendinblue-apikey" => "https://my.sendinblue.com/advanced/apikey/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                        </p>

                        <div class=\"col-md-7 row\">
                            ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["formulaire_api_key"] ?? null)), "html", null, true);
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    ";
        // line 66
        $this->loadTemplate("@sendinblue/footer.html.twig", "modules/contrib/sendinblue/templates/generateHomeLogout.html.twig", 66)->display($context);
        // line 67
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/sendinblue/templates/generateHomeLogout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 67,  176 => 66,  163 => 56,  156 => 52,  151 => 50,  148 => 49,  143 => 46,  140 => 45,  138 => 44,  134 => 42,  132 => 41,  125 => 37,  121 => 36,  112 => 29,  110 => 28,  104 => 24,  101 => 23,  99 => 22,  96 => 21,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  77 => 14,  73 => 12,  70 => 11,  65 => 8,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/sendinblue/templates/generateHomeLogout.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/modules/contrib/sendinblue/templates/generateHomeLogout.html.twig");
    }
}
