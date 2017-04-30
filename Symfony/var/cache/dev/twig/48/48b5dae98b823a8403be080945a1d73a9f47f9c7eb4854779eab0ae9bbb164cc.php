<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_adc7733193d347beb36edaaca71e79dad71aa998c7215e15f0a2bc8d5bf04f1a extends Twig_Template
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
        $__internal_c87367b1d9a0128c7f29b40c1c4ebcabc0f99f49080a2ec4d4fc8cfb10ed3c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87367b1d9a0128c7f29b40c1c4ebcabc0f99f49080a2ec4d4fc8cfb10ed3c54->enter($__internal_c87367b1d9a0128c7f29b40c1c4ebcabc0f99f49080a2ec4d4fc8cfb10ed3c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_d840ee4f72676d13bc261bae5623f7774eac3fa34f8502e0d0402abe52b0baa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d840ee4f72676d13bc261bae5623f7774eac3fa34f8502e0d0402abe52b0baa0->enter($__internal_d840ee4f72676d13bc261bae5623f7774eac3fa34f8502e0d0402abe52b0baa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_c87367b1d9a0128c7f29b40c1c4ebcabc0f99f49080a2ec4d4fc8cfb10ed3c54->leave($__internal_c87367b1d9a0128c7f29b40c1c4ebcabc0f99f49080a2ec4d4fc8cfb10ed3c54_prof);

        
        $__internal_d840ee4f72676d13bc261bae5623f7774eac3fa34f8502e0d0402abe52b0baa0->leave($__internal_d840ee4f72676d13bc261bae5623f7774eac3fa34f8502e0d0402abe52b0baa0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
