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
        $__internal_18d8890dde68c07d684d722da25ed70aa88eeff22d4cd12dffe5262072e38e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d8890dde68c07d684d722da25ed70aa88eeff22d4cd12dffe5262072e38e37->enter($__internal_18d8890dde68c07d684d722da25ed70aa88eeff22d4cd12dffe5262072e38e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa5757ab52c4dc5931c4e679351636edb3128eb8e16814261ba03960d2a610e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5757ab52c4dc5931c4e679351636edb3128eb8e16814261ba03960d2a610e3->enter($__internal_aa5757ab52c4dc5931c4e679351636edb3128eb8e16814261ba03960d2a610e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d8890dde68c07d684d722da25ed70aa88eeff22d4cd12dffe5262072e38e37->leave($__internal_18d8890dde68c07d684d722da25ed70aa88eeff22d4cd12dffe5262072e38e37_prof);

        
        $__internal_aa5757ab52c4dc5931c4e679351636edb3128eb8e16814261ba03960d2a610e3->leave($__internal_aa5757ab52c4dc5931c4e679351636edb3128eb8e16814261ba03960d2a610e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9c26bb6f4f27ebf05bfa95e467365ce9f65cd2560c17e72332fa06dfcfeda407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c26bb6f4f27ebf05bfa95e467365ce9f65cd2560c17e72332fa06dfcfeda407->enter($__internal_9c26bb6f4f27ebf05bfa95e467365ce9f65cd2560c17e72332fa06dfcfeda407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6b638de66f2707119a81113206416ad2d8f05d8aa80e70909177fc56efb66926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b638de66f2707119a81113206416ad2d8f05d8aa80e70909177fc56efb66926->enter($__internal_6b638de66f2707119a81113206416ad2d8f05d8aa80e70909177fc56efb66926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b638de66f2707119a81113206416ad2d8f05d8aa80e70909177fc56efb66926->leave($__internal_6b638de66f2707119a81113206416ad2d8f05d8aa80e70909177fc56efb66926_prof);

        
        $__internal_9c26bb6f4f27ebf05bfa95e467365ce9f65cd2560c17e72332fa06dfcfeda407->leave($__internal_9c26bb6f4f27ebf05bfa95e467365ce9f65cd2560c17e72332fa06dfcfeda407_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da6de7688d5190680583c603c152254ac10ce34cd6154b345d7bb628cbf4a517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6de7688d5190680583c603c152254ac10ce34cd6154b345d7bb628cbf4a517->enter($__internal_da6de7688d5190680583c603c152254ac10ce34cd6154b345d7bb628cbf4a517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7fc9d0938a802baf7da4972ae2a0a72141ed9c86cb148ca01906ff7cea8759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fc9d0938a802baf7da4972ae2a0a72141ed9c86cb148ca01906ff7cea8759a->enter($__internal_f7fc9d0938a802baf7da4972ae2a0a72141ed9c86cb148ca01906ff7cea8759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7fc9d0938a802baf7da4972ae2a0a72141ed9c86cb148ca01906ff7cea8759a->leave($__internal_f7fc9d0938a802baf7da4972ae2a0a72141ed9c86cb148ca01906ff7cea8759a_prof);

        
        $__internal_da6de7688d5190680583c603c152254ac10ce34cd6154b345d7bb628cbf4a517->leave($__internal_da6de7688d5190680583c603c152254ac10ce34cd6154b345d7bb628cbf4a517_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b36d2c7c26dbe842e91ee973cccb772fbfdd946fcf4243b0d876e75b7459573b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36d2c7c26dbe842e91ee973cccb772fbfdd946fcf4243b0d876e75b7459573b->enter($__internal_b36d2c7c26dbe842e91ee973cccb772fbfdd946fcf4243b0d876e75b7459573b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_05b9d2baf67ae5881180452602d0894095badac41b14a5b96ab31705c10925a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b9d2baf67ae5881180452602d0894095badac41b14a5b96ab31705c10925a9->enter($__internal_05b9d2baf67ae5881180452602d0894095badac41b14a5b96ab31705c10925a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05b9d2baf67ae5881180452602d0894095badac41b14a5b96ab31705c10925a9->leave($__internal_05b9d2baf67ae5881180452602d0894095badac41b14a5b96ab31705c10925a9_prof);

        
        $__internal_b36d2c7c26dbe842e91ee973cccb772fbfdd946fcf4243b0d876e75b7459573b->leave($__internal_b36d2c7c26dbe842e91ee973cccb772fbfdd946fcf4243b0d876e75b7459573b_prof);

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
