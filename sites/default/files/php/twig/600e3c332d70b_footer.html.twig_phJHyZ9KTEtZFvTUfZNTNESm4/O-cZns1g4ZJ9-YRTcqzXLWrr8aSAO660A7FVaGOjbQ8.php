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

/* @sendinblue/footer.html.twig */
class __TwigTemplate_a47e29f437da7cb5638df0d699d419a37f82013c9b85ca4ca5ef6c303f170806 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["trans" => 3];
        $filters = ["t" => 11];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                ['t'],
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
        echo "<div id=\"wrap-right-side\" class=\"box-border-box  col-md-3\">
    <div class=\"panel panel-default text-left box-border-box  small-content\">
        <div class=\"panel-heading\"><strong>";
        // line 3
        echo t("About SendinBlue", array());
        echo "</strong></div>
        <div class=\"panel-body\"><p>
                ";
        // line 5
        echo t("SendinBlue is an online software that allows you to send emails and SMS. Easily manage
                your
                Marketing campaigns, transactional emails and SMS.", array());
        // line 8
        echo "            </p>
            <ul class=\"sib-widget-menu\">
                <li>
                    ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-about\" target=\"_blank\">> Who we are</a>", ["@sendinblue-about" => "https://www.sendinblue.com/about/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                </li>
                <li>
                    ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-price\" target=\"_blank\">> Pricing</a>", ["@sendinblue-price" => "https://www.sendinblue.com/pricing/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                </li>
                <li>
                    ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-feature\" target=\"_blank\">> Features</a>", ["@sendinblue-feature" => "https://www.sendinblue.com/features/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                </li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default text-left box-border-box  small-content\">
        <div class=\"panel-heading\"><strong>";
        // line 23
        echo t("Need Help ?", array());
        echo "'</strong></div>
        <div class=\"panel-body\"><p>";
        // line 24
        echo t("You have a question or need more information ?", array());
        echo "</p>
            <ul class=\"sib-widget-menu\">
                <li>
                    ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-tutorial\" target=\"_blank\">> Features</a>", ["@sendinblue-tutorial" => "https://resources.sendinblue.com/category/tutorials/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                </li>
                <li>
                    ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("<a href=\"@sendinblue-faq\" target=\"_blank\">> FAQ</a>", ["@sendinblue-faq" => "https://resources.sendinblue.com/category/faq/?utm_source=drupal_plugin&utm_medium=plugin&utm_campaign=module_link"]));
        echo "
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@sendinblue/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  104 => 27,  98 => 24,  94 => 23,  85 => 17,  79 => 14,  73 => 11,  68 => 8,  64 => 5,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@sendinblue/footer.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/modules/contrib/sendinblue/templates/footer.html.twig");
    }
}
