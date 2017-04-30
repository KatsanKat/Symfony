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
        $__internal_4d47c437110bd6cbd37b2e15b2d1eba26c03972909a7432b9284f93ab77fe508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d47c437110bd6cbd37b2e15b2d1eba26c03972909a7432b9284f93ab77fe508->enter($__internal_4d47c437110bd6cbd37b2e15b2d1eba26c03972909a7432b9284f93ab77fe508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4e33538cf2505b897dec03400dc37f68c3fb0d87081f63fb3b4e5f052ef7aec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e33538cf2505b897dec03400dc37f68c3fb0d87081f63fb3b4e5f052ef7aec7->enter($__internal_4e33538cf2505b897dec03400dc37f68c3fb0d87081f63fb3b4e5f052ef7aec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d47c437110bd6cbd37b2e15b2d1eba26c03972909a7432b9284f93ab77fe508->leave($__internal_4d47c437110bd6cbd37b2e15b2d1eba26c03972909a7432b9284f93ab77fe508_prof);

        
        $__internal_4e33538cf2505b897dec03400dc37f68c3fb0d87081f63fb3b4e5f052ef7aec7->leave($__internal_4e33538cf2505b897dec03400dc37f68c3fb0d87081f63fb3b4e5f052ef7aec7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5191f8b611ca6ac9190c442beb101ce229adee1132078e1b53776b1c1167ce2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5191f8b611ca6ac9190c442beb101ce229adee1132078e1b53776b1c1167ce2a->enter($__internal_5191f8b611ca6ac9190c442beb101ce229adee1132078e1b53776b1c1167ce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb701a660a6a08e16b975b8f337c14e3ca6e27178a4d69ded8913d20920f3b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb701a660a6a08e16b975b8f337c14e3ca6e27178a4d69ded8913d20920f3b62->enter($__internal_bb701a660a6a08e16b975b8f337c14e3ca6e27178a4d69ded8913d20920f3b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb701a660a6a08e16b975b8f337c14e3ca6e27178a4d69ded8913d20920f3b62->leave($__internal_bb701a660a6a08e16b975b8f337c14e3ca6e27178a4d69ded8913d20920f3b62_prof);

        
        $__internal_5191f8b611ca6ac9190c442beb101ce229adee1132078e1b53776b1c1167ce2a->leave($__internal_5191f8b611ca6ac9190c442beb101ce229adee1132078e1b53776b1c1167ce2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf48b9158e94608f9a1340a834b042dae9d78e5a217955852fd556156f364e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf48b9158e94608f9a1340a834b042dae9d78e5a217955852fd556156f364e2a->enter($__internal_bf48b9158e94608f9a1340a834b042dae9d78e5a217955852fd556156f364e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38f32350b2f3b10671b04ebf40176b43b28e2df2a03179c3923cb5bd2c3cf395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f32350b2f3b10671b04ebf40176b43b28e2df2a03179c3923cb5bd2c3cf395->enter($__internal_38f32350b2f3b10671b04ebf40176b43b28e2df2a03179c3923cb5bd2c3cf395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38f32350b2f3b10671b04ebf40176b43b28e2df2a03179c3923cb5bd2c3cf395->leave($__internal_38f32350b2f3b10671b04ebf40176b43b28e2df2a03179c3923cb5bd2c3cf395_prof);

        
        $__internal_bf48b9158e94608f9a1340a834b042dae9d78e5a217955852fd556156f364e2a->leave($__internal_bf48b9158e94608f9a1340a834b042dae9d78e5a217955852fd556156f364e2a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74b274913193dc4da738c3da3d22dea3a8092051ae3220791d457db9b1804489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b274913193dc4da738c3da3d22dea3a8092051ae3220791d457db9b1804489->enter($__internal_74b274913193dc4da738c3da3d22dea3a8092051ae3220791d457db9b1804489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e1449d30a91ae31a435773b6cae775bd9c479bba502af5b7c1177913b78b902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1449d30a91ae31a435773b6cae775bd9c479bba502af5b7c1177913b78b902->enter($__internal_1e1449d30a91ae31a435773b6cae775bd9c479bba502af5b7c1177913b78b902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e1449d30a91ae31a435773b6cae775bd9c479bba502af5b7c1177913b78b902->leave($__internal_1e1449d30a91ae31a435773b6cae775bd9c479bba502af5b7c1177913b78b902_prof);

        
        $__internal_74b274913193dc4da738c3da3d22dea3a8092051ae3220791d457db9b1804489->leave($__internal_74b274913193dc4da738c3da3d22dea3a8092051ae3220791d457db9b1804489_prof);

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
