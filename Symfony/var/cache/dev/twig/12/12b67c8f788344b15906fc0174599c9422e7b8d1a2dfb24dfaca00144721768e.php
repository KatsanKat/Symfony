<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eda7ca28b80ef0ca65393558dd2f27d6cbb50506fe9c6cdca7b6e5bb5bceb2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda7ca28b80ef0ca65393558dd2f27d6cbb50506fe9c6cdca7b6e5bb5bceb2cf->enter($__internal_eda7ca28b80ef0ca65393558dd2f27d6cbb50506fe9c6cdca7b6e5bb5bceb2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1064052099b450767fe7638dee83d5e26d10eedd2b64a7b124f69bc8d4b9995d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1064052099b450767fe7638dee83d5e26d10eedd2b64a7b124f69bc8d4b9995d->enter($__internal_1064052099b450767fe7638dee83d5e26d10eedd2b64a7b124f69bc8d4b9995d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eda7ca28b80ef0ca65393558dd2f27d6cbb50506fe9c6cdca7b6e5bb5bceb2cf->leave($__internal_eda7ca28b80ef0ca65393558dd2f27d6cbb50506fe9c6cdca7b6e5bb5bceb2cf_prof);

        
        $__internal_1064052099b450767fe7638dee83d5e26d10eedd2b64a7b124f69bc8d4b9995d->leave($__internal_1064052099b450767fe7638dee83d5e26d10eedd2b64a7b124f69bc8d4b9995d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6c037bf432b16e958e6c2d5de7b19d9363e8b52cb01fc9ef13b7c3db427d98e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c037bf432b16e958e6c2d5de7b19d9363e8b52cb01fc9ef13b7c3db427d98e9->enter($__internal_6c037bf432b16e958e6c2d5de7b19d9363e8b52cb01fc9ef13b7c3db427d98e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff94dca5002c385de429d1a1a24ab28685ee68bab2ab883d00394eae7d0b4968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff94dca5002c385de429d1a1a24ab28685ee68bab2ab883d00394eae7d0b4968->enter($__internal_ff94dca5002c385de429d1a1a24ab28685ee68bab2ab883d00394eae7d0b4968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff94dca5002c385de429d1a1a24ab28685ee68bab2ab883d00394eae7d0b4968->leave($__internal_ff94dca5002c385de429d1a1a24ab28685ee68bab2ab883d00394eae7d0b4968_prof);

        
        $__internal_6c037bf432b16e958e6c2d5de7b19d9363e8b52cb01fc9ef13b7c3db427d98e9->leave($__internal_6c037bf432b16e958e6c2d5de7b19d9363e8b52cb01fc9ef13b7c3db427d98e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e06675e8edc0f7e2766dd36a83671a5029dfece4089aaae6cf509521f971895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e06675e8edc0f7e2766dd36a83671a5029dfece4089aaae6cf509521f971895->enter($__internal_8e06675e8edc0f7e2766dd36a83671a5029dfece4089aaae6cf509521f971895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9ebadb2eb1b1376844bb32f9949178f45c5d9ef91e890b815f86ff3a99d3de67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ebadb2eb1b1376844bb32f9949178f45c5d9ef91e890b815f86ff3a99d3de67->enter($__internal_9ebadb2eb1b1376844bb32f9949178f45c5d9ef91e890b815f86ff3a99d3de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ebadb2eb1b1376844bb32f9949178f45c5d9ef91e890b815f86ff3a99d3de67->leave($__internal_9ebadb2eb1b1376844bb32f9949178f45c5d9ef91e890b815f86ff3a99d3de67_prof);

        
        $__internal_8e06675e8edc0f7e2766dd36a83671a5029dfece4089aaae6cf509521f971895->leave($__internal_8e06675e8edc0f7e2766dd36a83671a5029dfece4089aaae6cf509521f971895_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67d6dd14c85c5b98b9c95db87c5a802c39ac0b40f06e4c85bba21a1eb68e018a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d6dd14c85c5b98b9c95db87c5a802c39ac0b40f06e4c85bba21a1eb68e018a->enter($__internal_67d6dd14c85c5b98b9c95db87c5a802c39ac0b40f06e4c85bba21a1eb68e018a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a4b6c48623a7181a317a58de78763788bd4267d5c3e1c9084fa040907e36d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4b6c48623a7181a317a58de78763788bd4267d5c3e1c9084fa040907e36d75->enter($__internal_3a4b6c48623a7181a317a58de78763788bd4267d5c3e1c9084fa040907e36d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a4b6c48623a7181a317a58de78763788bd4267d5c3e1c9084fa040907e36d75->leave($__internal_3a4b6c48623a7181a317a58de78763788bd4267d5c3e1c9084fa040907e36d75_prof);

        
        $__internal_67d6dd14c85c5b98b9c95db87c5a802c39ac0b40f06e4c85bba21a1eb68e018a->leave($__internal_67d6dd14c85c5b98b9c95db87c5a802c39ac0b40f06e4c85bba21a1eb68e018a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
