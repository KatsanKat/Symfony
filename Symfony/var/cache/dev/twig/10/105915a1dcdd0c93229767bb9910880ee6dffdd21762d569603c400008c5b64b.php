<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fa3f3e7b0dea8da648885b15fc3832503e4d347825baad2fba538506c62a877d extends Twig_Template
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
        $__internal_346acde66f28fea8a8ae49e8372527293931bc5e2ac156e61e8aef060aa4092d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346acde66f28fea8a8ae49e8372527293931bc5e2ac156e61e8aef060aa4092d->enter($__internal_346acde66f28fea8a8ae49e8372527293931bc5e2ac156e61e8aef060aa4092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f4a8e75847ad31a3c2fad238e577709e3de446644834cee6dc619f269d2194b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a8e75847ad31a3c2fad238e577709e3de446644834cee6dc619f269d2194b6->enter($__internal_f4a8e75847ad31a3c2fad238e577709e3de446644834cee6dc619f269d2194b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_346acde66f28fea8a8ae49e8372527293931bc5e2ac156e61e8aef060aa4092d->leave($__internal_346acde66f28fea8a8ae49e8372527293931bc5e2ac156e61e8aef060aa4092d_prof);

        
        $__internal_f4a8e75847ad31a3c2fad238e577709e3de446644834cee6dc619f269d2194b6->leave($__internal_f4a8e75847ad31a3c2fad238e577709e3de446644834cee6dc619f269d2194b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
