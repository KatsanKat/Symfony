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
        $__internal_1d758cb4c005e215a33b33aadf9e87bae2e92363acd1507d608802183949737a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d758cb4c005e215a33b33aadf9e87bae2e92363acd1507d608802183949737a->enter($__internal_1d758cb4c005e215a33b33aadf9e87bae2e92363acd1507d608802183949737a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5bf619a68d5fc53767a35d28c665d5eafbb60e8c93a860c3f99b0407200b4e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf619a68d5fc53767a35d28c665d5eafbb60e8c93a860c3f99b0407200b4e4c->enter($__internal_5bf619a68d5fc53767a35d28c665d5eafbb60e8c93a860c3f99b0407200b4e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d758cb4c005e215a33b33aadf9e87bae2e92363acd1507d608802183949737a->leave($__internal_1d758cb4c005e215a33b33aadf9e87bae2e92363acd1507d608802183949737a_prof);

        
        $__internal_5bf619a68d5fc53767a35d28c665d5eafbb60e8c93a860c3f99b0407200b4e4c->leave($__internal_5bf619a68d5fc53767a35d28c665d5eafbb60e8c93a860c3f99b0407200b4e4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35fdb1c1f8feca730ac9e5f105440c5da3c488903d09912b400ad7cfef582294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fdb1c1f8feca730ac9e5f105440c5da3c488903d09912b400ad7cfef582294->enter($__internal_35fdb1c1f8feca730ac9e5f105440c5da3c488903d09912b400ad7cfef582294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b36722366e9654c03afad7e9974d1da3481ec57c3ecdac848f6dc969f228ca23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36722366e9654c03afad7e9974d1da3481ec57c3ecdac848f6dc969f228ca23->enter($__internal_b36722366e9654c03afad7e9974d1da3481ec57c3ecdac848f6dc969f228ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b36722366e9654c03afad7e9974d1da3481ec57c3ecdac848f6dc969f228ca23->leave($__internal_b36722366e9654c03afad7e9974d1da3481ec57c3ecdac848f6dc969f228ca23_prof);

        
        $__internal_35fdb1c1f8feca730ac9e5f105440c5da3c488903d09912b400ad7cfef582294->leave($__internal_35fdb1c1f8feca730ac9e5f105440c5da3c488903d09912b400ad7cfef582294_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cae2b835a90c4e6eb5895e6d6b2eabea4a8e4c4ab29a1f0c1d9aff2445debc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cae2b835a90c4e6eb5895e6d6b2eabea4a8e4c4ab29a1f0c1d9aff2445debc0->enter($__internal_7cae2b835a90c4e6eb5895e6d6b2eabea4a8e4c4ab29a1f0c1d9aff2445debc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cab468234a06a43bc75a25ef60ac441cd379e3c998503b970e709c0b30786a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab468234a06a43bc75a25ef60ac441cd379e3c998503b970e709c0b30786a0c->enter($__internal_cab468234a06a43bc75a25ef60ac441cd379e3c998503b970e709c0b30786a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cab468234a06a43bc75a25ef60ac441cd379e3c998503b970e709c0b30786a0c->leave($__internal_cab468234a06a43bc75a25ef60ac441cd379e3c998503b970e709c0b30786a0c_prof);

        
        $__internal_7cae2b835a90c4e6eb5895e6d6b2eabea4a8e4c4ab29a1f0c1d9aff2445debc0->leave($__internal_7cae2b835a90c4e6eb5895e6d6b2eabea4a8e4c4ab29a1f0c1d9aff2445debc0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a21f868122cc64607f6b019aa7ab6d5bbbe594a29612423d0fb51b7b9a40c746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21f868122cc64607f6b019aa7ab6d5bbbe594a29612423d0fb51b7b9a40c746->enter($__internal_a21f868122cc64607f6b019aa7ab6d5bbbe594a29612423d0fb51b7b9a40c746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e80c1769313edee04dd3efe41d12670d9e88875bddc74cd868173c7f73aa92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e80c1769313edee04dd3efe41d12670d9e88875bddc74cd868173c7f73aa92c->enter($__internal_9e80c1769313edee04dd3efe41d12670d9e88875bddc74cd868173c7f73aa92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9e80c1769313edee04dd3efe41d12670d9e88875bddc74cd868173c7f73aa92c->leave($__internal_9e80c1769313edee04dd3efe41d12670d9e88875bddc74cd868173c7f73aa92c_prof);

        
        $__internal_a21f868122cc64607f6b019aa7ab6d5bbbe594a29612423d0fb51b7b9a40c746->leave($__internal_a21f868122cc64607f6b019aa7ab6d5bbbe594a29612423d0fb51b7b9a40c746_prof);

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
