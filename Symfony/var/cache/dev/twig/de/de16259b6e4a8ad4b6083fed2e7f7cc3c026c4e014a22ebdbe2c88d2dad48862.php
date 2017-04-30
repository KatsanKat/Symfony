<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2677f6b3bc100aa81dae6ff86223fb50c328e380e411f257bc01ef0dfee2d3da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc054ec5ab5a9f632a731a7a730ca47ef08f142c7acea11fb0e519dc8aa823bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc054ec5ab5a9f632a731a7a730ca47ef08f142c7acea11fb0e519dc8aa823bf->enter($__internal_bc054ec5ab5a9f632a731a7a730ca47ef08f142c7acea11fb0e519dc8aa823bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_f7a28d96f3d3a160ac768dc322887f94806db966e6f9e42aec1298500d79667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a28d96f3d3a160ac768dc322887f94806db966e6f9e42aec1298500d79667d->enter($__internal_f7a28d96f3d3a160ac768dc322887f94806db966e6f9e42aec1298500d79667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_bc054ec5ab5a9f632a731a7a730ca47ef08f142c7acea11fb0e519dc8aa823bf->leave($__internal_bc054ec5ab5a9f632a731a7a730ca47ef08f142c7acea11fb0e519dc8aa823bf_prof);

        
        $__internal_f7a28d96f3d3a160ac768dc322887f94806db966e6f9e42aec1298500d79667d->leave($__internal_f7a28d96f3d3a160ac768dc322887f94806db966e6f9e42aec1298500d79667d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
