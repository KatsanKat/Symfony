<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc1385a66fff9396094f55ebbda7851bd6a048953daa8aac726411c6e7846406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1385a66fff9396094f55ebbda7851bd6a048953daa8aac726411c6e7846406->enter($__internal_fc1385a66fff9396094f55ebbda7851bd6a048953daa8aac726411c6e7846406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e36c409ac2fb234765af425d07fcd45973b3c2a0a412821308ca7a6073ac1dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36c409ac2fb234765af425d07fcd45973b3c2a0a412821308ca7a6073ac1dee->enter($__internal_e36c409ac2fb234765af425d07fcd45973b3c2a0a412821308ca7a6073ac1dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fc1385a66fff9396094f55ebbda7851bd6a048953daa8aac726411c6e7846406->leave($__internal_fc1385a66fff9396094f55ebbda7851bd6a048953daa8aac726411c6e7846406_prof);

        
        $__internal_e36c409ac2fb234765af425d07fcd45973b3c2a0a412821308ca7a6073ac1dee->leave($__internal_e36c409ac2fb234765af425d07fcd45973b3c2a0a412821308ca7a6073ac1dee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d6b78d76e1ff60bdd144f58f77fd9acbba581807f763357f77abdfec0a65dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6b78d76e1ff60bdd144f58f77fd9acbba581807f763357f77abdfec0a65dba->enter($__internal_7d6b78d76e1ff60bdd144f58f77fd9acbba581807f763357f77abdfec0a65dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6a1b19cf476749556e161a64935df7b01a72b68e6d49459deeb7a13b7067e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a1b19cf476749556e161a64935df7b01a72b68e6d49459deeb7a13b7067e6b->enter($__internal_c6a1b19cf476749556e161a64935df7b01a72b68e6d49459deeb7a13b7067e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6a1b19cf476749556e161a64935df7b01a72b68e6d49459deeb7a13b7067e6b->leave($__internal_c6a1b19cf476749556e161a64935df7b01a72b68e6d49459deeb7a13b7067e6b_prof);

        
        $__internal_7d6b78d76e1ff60bdd144f58f77fd9acbba581807f763357f77abdfec0a65dba->leave($__internal_7d6b78d76e1ff60bdd144f58f77fd9acbba581807f763357f77abdfec0a65dba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20c9e0c3a15a6e0fe90ebbfe5d516bc73d66e3551f59cc526eb9e5a7adcea83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c9e0c3a15a6e0fe90ebbfe5d516bc73d66e3551f59cc526eb9e5a7adcea83d->enter($__internal_20c9e0c3a15a6e0fe90ebbfe5d516bc73d66e3551f59cc526eb9e5a7adcea83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_223474fe6f30c4f5824e918f29b2918ecee53a751f3ba4b453b5d6a6c2690c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223474fe6f30c4f5824e918f29b2918ecee53a751f3ba4b453b5d6a6c2690c48->enter($__internal_223474fe6f30c4f5824e918f29b2918ecee53a751f3ba4b453b5d6a6c2690c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_223474fe6f30c4f5824e918f29b2918ecee53a751f3ba4b453b5d6a6c2690c48->leave($__internal_223474fe6f30c4f5824e918f29b2918ecee53a751f3ba4b453b5d6a6c2690c48_prof);

        
        $__internal_20c9e0c3a15a6e0fe90ebbfe5d516bc73d66e3551f59cc526eb9e5a7adcea83d->leave($__internal_20c9e0c3a15a6e0fe90ebbfe5d516bc73d66e3551f59cc526eb9e5a7adcea83d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3375e7ddf3d7fa1f41af529585204cb2e0b9aba56c861320e9066e5b0789b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3375e7ddf3d7fa1f41af529585204cb2e0b9aba56c861320e9066e5b0789b41->enter($__internal_e3375e7ddf3d7fa1f41af529585204cb2e0b9aba56c861320e9066e5b0789b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de5bb35c5bd85d144f6938a70b45c1283b9337108bfe0b25f7aeb221e0ea48cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5bb35c5bd85d144f6938a70b45c1283b9337108bfe0b25f7aeb221e0ea48cd->enter($__internal_de5bb35c5bd85d144f6938a70b45c1283b9337108bfe0b25f7aeb221e0ea48cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de5bb35c5bd85d144f6938a70b45c1283b9337108bfe0b25f7aeb221e0ea48cd->leave($__internal_de5bb35c5bd85d144f6938a70b45c1283b9337108bfe0b25f7aeb221e0ea48cd_prof);

        
        $__internal_e3375e7ddf3d7fa1f41af529585204cb2e0b9aba56c861320e9066e5b0789b41->leave($__internal_e3375e7ddf3d7fa1f41af529585204cb2e0b9aba56c861320e9066e5b0789b41_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a82235c7cac12ab87ed92b08ea46abeff610846f1f5bc87ee157b9ad50c0925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a82235c7cac12ab87ed92b08ea46abeff610846f1f5bc87ee157b9ad50c0925->enter($__internal_9a82235c7cac12ab87ed92b08ea46abeff610846f1f5bc87ee157b9ad50c0925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2fa71a83dc24f4d515410d48de9277b6fc0173edfd704f63f38255f2d0ca14da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa71a83dc24f4d515410d48de9277b6fc0173edfd704f63f38255f2d0ca14da->enter($__internal_2fa71a83dc24f4d515410d48de9277b6fc0173edfd704f63f38255f2d0ca14da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fa71a83dc24f4d515410d48de9277b6fc0173edfd704f63f38255f2d0ca14da->leave($__internal_2fa71a83dc24f4d515410d48de9277b6fc0173edfd704f63f38255f2d0ca14da_prof);

        
        $__internal_9a82235c7cac12ab87ed92b08ea46abeff610846f1f5bc87ee157b9ad50c0925->leave($__internal_9a82235c7cac12ab87ed92b08ea46abeff610846f1f5bc87ee157b9ad50c0925_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/Symfony_Github/Symfony/app/Resources/views/base.html.twig");
    }
}
