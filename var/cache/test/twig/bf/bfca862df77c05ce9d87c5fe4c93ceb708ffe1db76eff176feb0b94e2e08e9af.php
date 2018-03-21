<?php

/* SNTServiceBundle:Default:index.html.twig */
class __TwigTemplate_5ceda8cd6a6cd8195d747de7cfc32580bde8389469fec74ec06fb3aade65945d extends Twig_Template
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
        $__internal_ec1335f7315973494f4c2e4328b1f6be272029bb8087d75be0350b46fd4810b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1335f7315973494f4c2e4328b1f6be272029bb8087d75be0350b46fd4810b2->enter($__internal_ec1335f7315973494f4c2e4328b1f6be272029bb8087d75be0350b46fd4810b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTServiceBundle:Default:index.html.twig"));

        $__internal_1b744a6850f29242af7ce8975541cc59928a75248ef424b145d9a523e75269b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b744a6850f29242af7ce8975541cc59928a75248ef424b145d9a523e75269b4->enter($__internal_1b744a6850f29242af7ce8975541cc59928a75248ef424b145d9a523e75269b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ec1335f7315973494f4c2e4328b1f6be272029bb8087d75be0350b46fd4810b2->leave($__internal_ec1335f7315973494f4c2e4328b1f6be272029bb8087d75be0350b46fd4810b2_prof);

        
        $__internal_1b744a6850f29242af7ce8975541cc59928a75248ef424b145d9a523e75269b4->leave($__internal_1b744a6850f29242af7ce8975541cc59928a75248ef424b145d9a523e75269b4_prof);

    }

    public function getTemplateName()
    {
        return "SNTServiceBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SNTServiceBundle:Default:index.html.twig", "/var/www/html/symfony/src/SNT/ServiceBundle/Resources/views/Default/index.html.twig");
    }
}
