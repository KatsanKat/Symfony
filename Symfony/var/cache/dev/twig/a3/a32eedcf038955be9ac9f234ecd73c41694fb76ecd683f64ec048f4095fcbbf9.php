<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_554ef311bd5e0170955a50bcee47e5ded1cd24b97ffc8f8d0991e472f02e019f extends Twig_Template
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
        $__internal_835ab9568119c57ae03f5a36de082003dde8d3246e93a1b4eea4b1d622f21a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835ab9568119c57ae03f5a36de082003dde8d3246e93a1b4eea4b1d622f21a04->enter($__internal_835ab9568119c57ae03f5a36de082003dde8d3246e93a1b4eea4b1d622f21a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        $__internal_996122f55602af7e5d50eda16036b057bbe74291749aeb795ecebc63e17a5960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996122f55602af7e5d50eda16036b057bbe74291749aeb795ecebc63e17a5960->enter($__internal_996122f55602af7e5d50eda16036b057bbe74291749aeb795ecebc63e17a5960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Home - Symfony</title>
  </head>
  <body>
    Bonjour !
  </body>
</html>
";
        
        $__internal_835ab9568119c57ae03f5a36de082003dde8d3246e93a1b4eea4b1d622f21a04->leave($__internal_835ab9568119c57ae03f5a36de082003dde8d3246e93a1b4eea4b1d622f21a04_prof);

        
        $__internal_996122f55602af7e5d50eda16036b057bbe74291749aeb795ecebc63e17a5960->leave($__internal_996122f55602af7e5d50eda16036b057bbe74291749aeb795ecebc63e17a5960_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Home - Symfony</title>
  </head>
  <body>
    Bonjour !
  </body>
</html>
", "OCPlatformBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/src/OC/PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
