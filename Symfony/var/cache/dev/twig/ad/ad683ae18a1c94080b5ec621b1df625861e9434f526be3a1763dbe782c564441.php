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
        $__internal_744ddcce5a7f4e1757291964ec4cb5892188c818f1647039d7082f7c95ab9027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744ddcce5a7f4e1757291964ec4cb5892188c818f1647039d7082f7c95ab9027->enter($__internal_744ddcce5a7f4e1757291964ec4cb5892188c818f1647039d7082f7c95ab9027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_6a3fd6a65495eb53c229066082b58fac2a04abe2d35a2376bbfc090514283373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3fd6a65495eb53c229066082b58fac2a04abe2d35a2376bbfc090514283373->enter($__internal_6a3fd6a65495eb53c229066082b58fac2a04abe2d35a2376bbfc090514283373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

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
        
        $__internal_744ddcce5a7f4e1757291964ec4cb5892188c818f1647039d7082f7c95ab9027->leave($__internal_744ddcce5a7f4e1757291964ec4cb5892188c818f1647039d7082f7c95ab9027_prof);

        
        $__internal_6a3fd6a65495eb53c229066082b58fac2a04abe2d35a2376bbfc090514283373->leave($__internal_6a3fd6a65495eb53c229066082b58fac2a04abe2d35a2376bbfc090514283373_prof);

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
