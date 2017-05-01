<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23568d36a0aad532e24c400aa7322f0176f067890f6a04a658c7d2296a31b83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23568d36a0aad532e24c400aa7322f0176f067890f6a04a658c7d2296a31b83a->enter($__internal_23568d36a0aad532e24c400aa7322f0176f067890f6a04a658c7d2296a31b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_349353977f7808ba08304285e3e9435f2693582cc43ed88738a56b88c1799167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349353977f7808ba08304285e3e9435f2693582cc43ed88738a56b88c1799167->enter($__internal_349353977f7808ba08304285e3e9435f2693582cc43ed88738a56b88c1799167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23568d36a0aad532e24c400aa7322f0176f067890f6a04a658c7d2296a31b83a->leave($__internal_23568d36a0aad532e24c400aa7322f0176f067890f6a04a658c7d2296a31b83a_prof);

        
        $__internal_349353977f7808ba08304285e3e9435f2693582cc43ed88738a56b88c1799167->leave($__internal_349353977f7808ba08304285e3e9435f2693582cc43ed88738a56b88c1799167_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a0c32b9b6d930122d740bc929400ed7cb701c3f18352e6781c59f2ef606151a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c32b9b6d930122d740bc929400ed7cb701c3f18352e6781c59f2ef606151a4->enter($__internal_a0c32b9b6d930122d740bc929400ed7cb701c3f18352e6781c59f2ef606151a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba4a2d46649eca3d498b90aeb0ea5a64aa0c2d86e5aba6ce0b9d51895d3e450f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4a2d46649eca3d498b90aeb0ea5a64aa0c2d86e5aba6ce0b9d51895d3e450f->enter($__internal_ba4a2d46649eca3d498b90aeb0ea5a64aa0c2d86e5aba6ce0b9d51895d3e450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ba4a2d46649eca3d498b90aeb0ea5a64aa0c2d86e5aba6ce0b9d51895d3e450f->leave($__internal_ba4a2d46649eca3d498b90aeb0ea5a64aa0c2d86e5aba6ce0b9d51895d3e450f_prof);

        
        $__internal_a0c32b9b6d930122d740bc929400ed7cb701c3f18352e6781c59f2ef606151a4->leave($__internal_a0c32b9b6d930122d740bc929400ed7cb701c3f18352e6781c59f2ef606151a4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf659e240bba0fa8502fbf3b4795169bf65859f418afbfd145db13bd86eaeb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf659e240bba0fa8502fbf3b4795169bf65859f418afbfd145db13bd86eaeb41->enter($__internal_bf659e240bba0fa8502fbf3b4795169bf65859f418afbfd145db13bd86eaeb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47203cd3ec9faa57e64c29b1f54d5e3ab6819473d6414adc499406d827e7dce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47203cd3ec9faa57e64c29b1f54d5e3ab6819473d6414adc499406d827e7dce9->enter($__internal_47203cd3ec9faa57e64c29b1f54d5e3ab6819473d6414adc499406d827e7dce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_47203cd3ec9faa57e64c29b1f54d5e3ab6819473d6414adc499406d827e7dce9->leave($__internal_47203cd3ec9faa57e64c29b1f54d5e3ab6819473d6414adc499406d827e7dce9_prof);

        
        $__internal_bf659e240bba0fa8502fbf3b4795169bf65859f418afbfd145db13bd86eaeb41->leave($__internal_bf659e240bba0fa8502fbf3b4795169bf65859f418afbfd145db13bd86eaeb41_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3adeed061bc32a87f48bc6e6d47de018fe58d515809daebee2797702511327f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adeed061bc32a87f48bc6e6d47de018fe58d515809daebee2797702511327f4->enter($__internal_3adeed061bc32a87f48bc6e6d47de018fe58d515809daebee2797702511327f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce4e90d68f17fb982c59cfc126ec97f0b5c103294141047dcaad4efbb3d1ab70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4e90d68f17fb982c59cfc126ec97f0b5c103294141047dcaad4efbb3d1ab70->enter($__internal_ce4e90d68f17fb982c59cfc126ec97f0b5c103294141047dcaad4efbb3d1ab70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ce4e90d68f17fb982c59cfc126ec97f0b5c103294141047dcaad4efbb3d1ab70->leave($__internal_ce4e90d68f17fb982c59cfc126ec97f0b5c103294141047dcaad4efbb3d1ab70_prof);

        
        $__internal_3adeed061bc32a87f48bc6e6d47de018fe58d515809daebee2797702511327f4->leave($__internal_3adeed061bc32a87f48bc6e6d47de018fe58d515809daebee2797702511327f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
