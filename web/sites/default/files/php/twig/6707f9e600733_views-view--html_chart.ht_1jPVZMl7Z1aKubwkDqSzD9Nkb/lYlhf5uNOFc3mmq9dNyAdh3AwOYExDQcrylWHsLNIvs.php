<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/yourtheme/templates/views-view--html_chart.html.twig */
class __TwigTemplate_74885e2c7e2aa6af664afcf87518786d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"custom-chart-wrapper\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            yield "    <div class=\"bar-one\">
      <div class=\"bar-label\">";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#field_task_name"] ?? null) : null), 4, $this->source), "html", null, true);
            yield "</div>
      <div class=\"bar-inner\" style=\"height: ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 5)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#field_junior_developer_s_estimat"] ?? null) : null), 5, $this->source), "html", null, true);
            yield "%;\">
        Junior Estimate: ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#field_junior_estimate"] ?? null) : null), 6, $this->source), "html", null, true);
            yield " hours
      </div>
      <div class=\"bar-inner senior\" style=\"height: ";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 8)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#field_senior_developer_s_estimat"] ?? null) : null), 8, $this->source), "html", null, true);
            yield "%;\">
        Senior Estimate: ";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 9)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#field_senior_estimate"] ?? null) : null), 9, $this->source), "html", null, true);
            yield " hours
      </div>
      <div class=\"bar-inner actual\" style=\"height: ";
            // line 11
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 11)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#field_actual_time_needed"] ?? null) : null), 11, $this->source), "html", null, true);
            yield "%;\">
        Actual Time: ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 12)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#field_actual_time"] ?? null) : null), 12, $this->source), "html", null, true);
            yield " hours
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/yourtheme/templates/views-view--html_chart.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  90 => 16,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/yourtheme/templates/views-view--html_chart.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\themes\\custom\\yourtheme\\templates\\views-view--html_chart.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                [],
                $this->source
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
