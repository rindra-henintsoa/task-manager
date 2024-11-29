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

/* @EasyAdmin/components/Icon.html.twig */
class __TwigTemplate_404f86ac108d045027c67f310cd76212 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/Icon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/components/Icon.html.twig"));

        // line 2
        yield "<span ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 2, $this->source); })()), "defaults", [["class" => "icon"]], "method", false, false, false, 2), "html", null, true);
        yield ">
    ";
        // line 3
        $context["icon"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 3, $this->source); })()), "getIcon", [], "method", false, false, false, 3);
        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 4, $this->source); })()), "svgContents", [], "any", false, false, false, 4)) {
            // line 5
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 5, $this->source); })()), "svgContents", [], "any", false, false, false, 5);
            yield "
    ";
        } else {
            // line 7
            yield "        ";
            // line 8
            yield "        ";
            yield $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 8, $this->source); })()), "all", [], "any", false, false, false, 8));
            yield "
    ";
        }
        // line 10
        yield "</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/components/Icon.html.twig";
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
        return array (  72 => 10,  66 => 8,  64 => 7,  58 => 5,  55 => 4,  53 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var icon \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\IconDto #}
<span {{ attributes.defaults({class: 'icon'}) }}>
    {% set icon = this.getIcon() %}
    {% if icon.svgContents %}
        {{ icon.svgContents|raw }}
    {% else %}
        {# TODO: replace this by a call to ux_icon() function directly when Twig 3.15 is released and we can use the 'guard' tag #}
        {{ ea_ux_icon(icon.name, attributes.all) }}
    {% endif %}
</span>
", "@EasyAdmin/components/Icon.html.twig", "C:\\Users\\17264\\Documents\\Formation\\task-manager\\vendor\\easycorp\\easyadmin-bundle\\templates\\components\\Icon.html.twig");
    }
}
