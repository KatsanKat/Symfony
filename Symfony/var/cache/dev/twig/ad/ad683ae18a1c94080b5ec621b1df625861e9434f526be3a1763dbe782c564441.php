<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_2e3363ce91ae51e30e434ccc0bd3988f9e46386937cacc7ece89b3cacc3c621f extends Twig_Template
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
        $__internal_f98f250b2f0c7ffb2931e9fc73604d999574b7a1f57a2ecf47e30979878cd443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98f250b2f0c7ffb2931e9fc73604d999574b7a1f57a2ecf47e30979878cd443->enter($__internal_f98f250b2f0c7ffb2931e9fc73604d999574b7a1f57a2ecf47e30979878cd443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_14fc6baf9d04ae165f4fdbbe76ed4986822379feb0bff2eed7bd71d53cc6cf2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fc6baf9d04ae165f4fdbbe76ed4986822379feb0bff2eed7bd71d53cc6cf2d->enter($__internal_14fc6baf9d04ae165f4fdbbe76ed4986822379feb0bff2eed7bd71d53cc6cf2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Advert - Symfony</title>
  </head>
  <body>
    <h1>Bonjour ";
        // line 8
        echo twig_escape_filter($this->env, ($context["nom"] ?? $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>
    <hr>

    <p>
      Ceci est ma première page créée grâce à OpenClassroom et twig.<br>
      Twig est un moteur de template utilisé par Symfony afin de remplacer <br>
      le code php laborieux et compliqué à lire.<br>
      Je suis donc fier de vous présenter ma première page .twig !
    </p>
  </body>
</html>
";
        
        $__internal_f98f250b2f0c7ffb2931e9fc73604d999574b7a1f57a2ecf47e30979878cd443->leave($__internal_f98f250b2f0c7ffb2931e9fc73604d999574b7a1f57a2ecf47e30979878cd443_prof);

        
        $__internal_14fc6baf9d04ae165f4fdbbe76ed4986822379feb0bff2eed7bd71d53cc6cf2d->leave($__internal_14fc6baf9d04ae165f4fdbbe76ed4986822379feb0bff2eed7bd71d53cc6cf2d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  25 => 1,);
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
    <title>Advert - Symfony</title>
  </head>
  <body>
    <h1>Bonjour {{ nom }} !</h1>
    <hr>

    <p>
      Ceci est ma première page créée grâce à OpenClassroom et twig.<br>
      Twig est un moteur de template utilisé par Symfony afin de remplacer <br>
      le code php laborieux et compliqué à lire.<br>
      Je suis donc fier de vous présenter ma première page .twig !
    </p>
  </body>
</html>
", "OCPlatformBundle:Advert:index.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
