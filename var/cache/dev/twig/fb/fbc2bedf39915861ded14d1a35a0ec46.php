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

/* admin/dashboard.html.twig */
class __TwigTemplate_284f311fda11ca1c661aa2e4185f2d0a extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@EasyAdmin/page/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyAdmin/page/content.html.twig", "admin/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"/assets/css/adminStyle.css\">
    <div class=\"stat-perform\">
        <h1 style=\"color : #64748b;\">Indicateurs de performance</h1>
        <div class=\"stat-container\">
            <div class=\"stat-element\">
                <h4>Nombre total de tâches par statut</h4>
                <ul>
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tasksByStatus"]) || array_key_exists("tasksByStatus", $context) ? $context["tasksByStatus"] : (function () { throw new RuntimeError('Variable "tasksByStatus" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 12
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["status"], "status", [], "any", false, false, false, 12)), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "count", [], "any", false, false, false, 12), "html", null, true);
            yield "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "                </ul>
            </div>
            <div class=\"stat-element\">
                <h4>Tâches en retard</h4>
                <ul>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["overdueTasks"]) || array_key_exists("overdueTasks", $context) ? $context["overdueTasks"] : (function () { throw new RuntimeError('Variable "overdueTasks" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 20
            yield "                        <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield " - Date de fin : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["task"], "dateFin", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true);
            yield "</li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            yield "                        <li>Aucune tâche en retard</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "                </ul>
            </div>
        </div>
        <div class=\"stat-element\">
            <h4>Statistiques par utilisateur</h4>
            <table style=\"width: 100%;\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Tâches en cours</th>
                        <th>Tâches terminées</th>
                        <th>Tâches en retard</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userStatistics"]) || array_key_exists("userStatistics", $context) ? $context["userStatistics"] : (function () { throw new RuntimeError('Variable "userStatistics" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 40
            yield "                        <tr>
                            <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "firstname", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                            <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "inProgress", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
                            <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "completed", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                            <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "overdue", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            yield "                        <tr>
                            <td colspan=\"4\">Aucune donnée</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                </tbody>
            </table>
        </div>
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard.html.twig";
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
        return array (  183 => 51,  174 => 47,  166 => 44,  162 => 43,  158 => 42,  154 => 41,  151 => 40,  146 => 39,  129 => 24,  122 => 22,  112 => 20,  107 => 19,  100 => 14,  89 => 12,  85 => 11,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@EasyAdmin/page/content.html.twig' %}

{% block content %}
    <link rel=\"stylesheet\" href=\"/assets/css/adminStyle.css\">
    <div class=\"stat-perform\">
        <h1 style=\"color : #64748b;\">Indicateurs de performance</h1>
        <div class=\"stat-container\">
            <div class=\"stat-element\">
                <h4>Nombre total de tâches par statut</h4>
                <ul>
                    {% for status in tasksByStatus %}
                        <li>{{ status.status|capitalize }} : {{ status.count }}</li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"stat-element\">
                <h4>Tâches en retard</h4>
                <ul>
                    {% for task in overdueTasks %}
                        <li>{{ task.title }} - Date de fin : {{ task.dateFin|date('d/m/Y') }}</li>
                    {% else %}
                        <li>Aucune tâche en retard</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"stat-element\">
            <h4>Statistiques par utilisateur</h4>
            <table style=\"width: 100%;\">
                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Tâches en cours</th>
                        <th>Tâches terminées</th>
                        <th>Tâches en retard</th>
                    </tr>
                </thead>
                <tbody>
                    {% for stat in userStatistics %}
                        <tr>
                            <td>{{ stat.firstname }}</td>
                            <td>{{ stat.inProgress }}</td>
                            <td>{{ stat.completed }}</td>
                            <td>{{ stat.overdue }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\">Aucune donnée</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    
{% endblock %}", "admin/dashboard.html.twig", "C:\\Users\\17264\\Documents\\Formation\\task-manager\\templates\\admin\\dashboard.html.twig");
    }
}
