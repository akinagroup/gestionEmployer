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
        $__internal_b0088d9d04fc3ba54183987bc6b997dc84009710a9958ebbc99c7793ba1aa902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0088d9d04fc3ba54183987bc6b997dc84009710a9958ebbc99c7793ba1aa902->enter($__internal_b0088d9d04fc3ba54183987bc6b997dc84009710a9958ebbc99c7793ba1aa902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTServiceBundle:Default:index.html.twig"));

        $__internal_abfcbc8c8e04c06b29f27909a9e6b5a44cda9a963df42390353aa4065ca3cfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfcbc8c8e04c06b29f27909a9e6b5a44cda9a963df42390353aa4065ca3cfac->enter($__internal_abfcbc8c8e04c06b29f27909a9e6b5a44cda9a963df42390353aa4065ca3cfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_b0088d9d04fc3ba54183987bc6b997dc84009710a9958ebbc99c7793ba1aa902->leave($__internal_b0088d9d04fc3ba54183987bc6b997dc84009710a9958ebbc99c7793ba1aa902_prof);

        
        $__internal_abfcbc8c8e04c06b29f27909a9e6b5a44cda9a963df42390353aa4065ca3cfac->leave($__internal_abfcbc8c8e04c06b29f27909a9e6b5a44cda9a963df42390353aa4065ca3cfac_prof);

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
