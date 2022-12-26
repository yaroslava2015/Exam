<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/google_map_field/templates/google_map_field.html.twig */
class __TwigTemplate_7f25d4d785ec150184d486aac4eb21c16c9694714616b6bcc7e200e122c1f2d8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !twig_test_empty(($context["infowindow"] ?? null))) {
            // line 2
            echo "  ";
            $context["showInfowindow"] = "true";
        }
        // line 4
        echo "<section class=\"google-map-field\">
  ";
        // line 5
        if (($context["name"] ?? null)) {
            // line 6
            echo "  <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 6, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 8
        echo "  ";
        if (($context["showInfowindow"] ?? null)) {
            // line 9
            echo "  <div class=\"map-infowindow\" style=\"display:none;\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["infowindow"] ?? null), 9, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"map-container\" style=\"width:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 11, $this->source), "html", null, true);
        echo ";height:";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 11, $this->source), "html", null, true);
        echo ";\" data-controls-show=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["show_controls"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-traffic=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["traffic"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-marker-show=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["show_marker"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-marker-icon=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["marker_icon"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-type=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-lat=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lat"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-lon=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lon"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-zoom=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["zoom"] ?? null), 11, $this->source), "html", null, true);
        echo "\" data-infowindow=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["showInfowindow"] ?? null), 11, $this->source), "html", null, true);
        echo "\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/google_map_field/templates/google_map_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/google_map_field/templates/google_map_field.html.twig", "E:\\OSPanel\\domains\\exam\\modules\\google_map_field\\templates\\google_map_field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
