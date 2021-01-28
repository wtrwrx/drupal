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

/* themes/custom/waterworks/templates/node/node--team.html.twig */
class __TwigTemplate_9865333f61371adfc433ac89e215b48a503981f7993f014f4208d71acf94ae16 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 14, "for" => 77];
        $filters = ["clean_class" => 4, "escape" => 16, "e" => 39, "striptags" => 41, "render" => 41, "split" => 78, "without" => 119];
        $functions = ["path" => 43];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'e', 'striptags', 'render', 'split', 'without'],
                ['path']
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
        // line 2
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix"];
        // line 12
        echo "
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["view_mode"] ?? null) == "teaser")) {
            // line 15
            echo "
<div";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-block team-v1\">
    <div class=\"team-image\">
      ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
      <div class=\"socials-team\">
        ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 22
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 24
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])) {
                // line 25
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 27
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 28
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 30
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 31
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 33
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])) {
                // line 34
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-linkedin\"></i></a>
        ";
            }
            // line 36
            echo "      </div>
    </div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      ";
            // line 41
            $context["text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", []))));
            // line 42
            echo "      <div class=\"team-quote\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", [])), "html", null, true);
            echo "</div>
      <div class=\"read-more\"><a href=\"";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("entity.node.canonical", ["node" => $this->getAttribute(($context["node"] ?? null), "id", [])]), "html", null, true);
            echo "\">Read More</a></div>
    </div>
  </div>
</div>

";
        } elseif ((        // line 48
($context["view_mode"] ?? null) == "teaser_2")) {
            // line 49
            echo "
<div";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  <div class=\"team-block team-v2\">
    <div class=\"team-image\">
      ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "
    </div>
    <div class=\"team-content\">
      <div class=\"socials-team\">
        ";
            // line 57
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])) {
                // line 58
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-facebook\"></i></a>
        ";
            }
            // line 60
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])) {
                // line 61
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-google\"></i></a>
        ";
            }
            // line 63
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])) {
                // line 64
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-pinterest\"></i></a>
        ";
            }
            // line 66
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])) {
                // line 67
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-twitter\"></i></a>
        ";
            }
            // line 69
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])) {
                // line 70
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_linkedin", []), "value", [])), "html", null, true);
                echo "\"><i class=\"fab fa-linkedin\"></i></a>
        ";
            }
            // line 72
            echo "      </div>
      <div class=\"team-name\"><a href=\"";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
    </div>
    <div class=\"team-skills\">
      ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["node"] ?? null), "field_team_skills", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 78
                echo "          ";
                $context["skill"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "--");
                // line 79
                echo "            ";
                if (($this->getAttribute(($context["skill"] ?? null), "0", [], "array") && $this->getAttribute(($context["skill"] ?? null), "1", [], "array"))) {
                    // line 80
                    echo "              <div class=\"team-skill\">
                <div class=\"progress-label\">";
                    // line 81
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "0", [], "array")), "html", null, true);
                    echo "</div>
                 <div class=\"progress\">
                   <div class=\"progress-bar\" data-progress-animation=\"";
                    // line 83
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%\"><span></span></div>
                   <span class=\"percentage\"><span></span>";
                    // line 84
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["skill"] ?? null), "1", [], "array")), "html", null, true);
                    echo "%</span>
                </div>
              </div>
            ";
                }
                // line 88
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    </div>
  </div>
</div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 96
            echo "<!-- Start Display article for detail page -->

<article";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "addClass", [0 => "node-detail"], "method")), "html", null, true);
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", []), "value", [])));
            echo "</div>
      <div class=\"job\">";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", []), "value", [])));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div>
    <div class=\"team-description\">";
            // line 106
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_description", [])), "html", null, true);
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_image", [])), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-quote\"> ";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_team_quote", [])), "html", null, true);
            echo " </div>
        </div>
      </div>
    </div>

    <div";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
            echo ">
      ";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true);
            echo "
    </div>

    ";
            // line 122
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 123
                echo "      <div id=\"node-single-comment\">
        ";
                // line 124
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 127
            echo "
  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 133
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/waterworks/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 133,  340 => 127,  334 => 124,  331 => 123,  329 => 122,  323 => 119,  319 => 118,  311 => 113,  305 => 110,  298 => 106,  292 => 103,  288 => 102,  281 => 98,  277 => 96,  269 => 90,  262 => 88,  255 => 84,  251 => 83,  246 => 81,  243 => 80,  240 => 79,  237 => 78,  233 => 77,  227 => 74,  221 => 73,  218 => 72,  212 => 70,  209 => 69,  203 => 67,  200 => 66,  194 => 64,  191 => 63,  185 => 61,  182 => 60,  176 => 58,  174 => 57,  167 => 53,  161 => 50,  158 => 49,  156 => 48,  148 => 43,  143 => 42,  141 => 41,  137 => 40,  131 => 39,  126 => 36,  120 => 34,  117 => 33,  111 => 31,  108 => 30,  102 => 28,  99 => 27,  93 => 25,  90 => 24,  84 => 22,  82 => 21,  77 => 19,  71 => 16,  68 => 15,  66 => 14,  62 => 12,  60 => 8,  59 => 7,  58 => 6,  57 => 5,  56 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/waterworks/templates/node/node--team.html.twig", "/home/customer/www/waterworksfund.com/public_html/live/themes/custom/waterworks/templates/node/node--team.html.twig");
    }
}
