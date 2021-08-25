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

/* core/themes/olivero/templates/misc/status-messages.html.twig */
class __TwigTemplate_bb46935f7d17a4666abda97abb109e7782a21c4de585cc30457cfb328baa11c9 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/olivero/templates/misc/status-messages.html.twig"));

        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/messages"), "html", null, true);
        echo "

<div data-drupal-messages class=\"messages-list\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "    ";
            // line 27
            $context["classes"] = [0 => "messages-list__item", 1 => "messages", 2 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 30
$context["type"], 30, $this->source))];
            // line 33
            echo "
    <div role=\"contentinfo\" aria-label=\"";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_headings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["type"]] ?? null) : null), 34, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
      <div class=\"messages__container\"";
            // line 35
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">
        ";
            // line 36
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["status_headings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["type"]] ?? null) : null)) {
                // line 37
                echo "          <div class=\"messages__header\">
           <h2 class=\"visually-hidden\">";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["status_headings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["type"]] ?? null) : null), 38, $this->source), "html", null, true);
                echo "</h2>
            <div class=\"messages__icon\">
              ";
                // line 40
                if (($context["type"] == "error")) {
                    // line 41
                    echo "                ";
                    $this->loadTemplate("@olivero/../images/error.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 41)->display($context);
                    // line 42
                    echo "              ";
                } elseif (($context["type"] == "warning")) {
                    // line 43
                    echo "                ";
                    $this->loadTemplate("@olivero/../images/warning.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 43)->display($context);
                    // line 44
                    echo "              ";
                } elseif (($context["type"] == "status")) {
                    // line 45
                    echo "                ";
                    $this->loadTemplate("@olivero/../images/status.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 45)->display($context);
                    // line 46
                    echo "              ";
                } elseif (($context["type"] == "info")) {
                    // line 47
                    echo "                ";
                    $this->loadTemplate("@olivero/../images/info.svg", "core/themes/olivero/templates/misc/status-messages.html.twig", 47)->display($context);
                    // line 48
                    echo "              ";
                }
                // line 49
                echo "            </div>
          </div>
        ";
            }
            // line 52
            echo "        <div class=\"messages__content\">
          ";
            // line 53
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 54
                echo "            <ul class=\"messages__list\">
              ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 56
                    echo "                <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 56, $this->source), "html", null, true);
                    echo "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            </ul>
          ";
            } else {
                // line 60
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 60, $this->source)), "html", null, true);
                echo "
          ";
            }
            // line 62
            echo "        </div>
      </div>
    </div>
    ";
            // line 66
            echo "    ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 66);
            // line 67
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/misc/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 68,  165 => 67,  162 => 66,  157 => 62,  151 => 60,  147 => 58,  138 => 56,  134 => 55,  131 => 54,  129 => 53,  126 => 52,  121 => 49,  118 => 48,  115 => 47,  112 => 46,  109 => 45,  106 => 44,  103 => 43,  100 => 42,  97 => 41,  95 => 40,  90 => 38,  87 => 37,  85 => 36,  79 => 35,  73 => 34,  70 => 33,  68 => 30,  67 => 27,  65 => 26,  48 => 25,  42 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/misc/status-messages.html.twig", "/opt/web/core/themes/olivero/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 25, "set" => 27, "if" => 35, "include" => 41);
        static $filters = array("escape" => 22, "without" => 34, "length" => 53, "first" => 60);
        static $functions = array("attach_library" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'include'],
                ['escape', 'without', 'length', 'first'],
                ['attach_library']
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
