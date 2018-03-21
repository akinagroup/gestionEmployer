<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
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
        $__internal_b8d1d93bcd271e6422a72346df5e914fafdb4971e1ac08506c14a3431f7a3df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d1d93bcd271e6422a72346df5e914fafdb4971e1ac08506c14a3431f7a3df9->enter($__internal_b8d1d93bcd271e6422a72346df5e914fafdb4971e1ac08506c14a3431f7a3df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_557385fa995c40af34926a4065057bc3f5d85a1149ade9fd7b772a5cde629860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557385fa995c40af34926a4065057bc3f5d85a1149ade9fd7b772a5cde629860->enter($__internal_557385fa995c40af34926a4065057bc3f5d85a1149ade9fd7b772a5cde629860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d1d93bcd271e6422a72346df5e914fafdb4971e1ac08506c14a3431f7a3df9->leave($__internal_b8d1d93bcd271e6422a72346df5e914fafdb4971e1ac08506c14a3431f7a3df9_prof);

        
        $__internal_557385fa995c40af34926a4065057bc3f5d85a1149ade9fd7b772a5cde629860->leave($__internal_557385fa995c40af34926a4065057bc3f5d85a1149ade9fd7b772a5cde629860_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23af50313541be632def38c1ab20274afcc05ae746d07751b42ab046a6a4aca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23af50313541be632def38c1ab20274afcc05ae746d07751b42ab046a6a4aca0->enter($__internal_23af50313541be632def38c1ab20274afcc05ae746d07751b42ab046a6a4aca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64282933b6f27a02e77dea927e2e8172d316e78cc889b5a731709e743ea7d3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64282933b6f27a02e77dea927e2e8172d316e78cc889b5a731709e743ea7d3f4->enter($__internal_64282933b6f27a02e77dea927e2e8172d316e78cc889b5a731709e743ea7d3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64282933b6f27a02e77dea927e2e8172d316e78cc889b5a731709e743ea7d3f4->leave($__internal_64282933b6f27a02e77dea927e2e8172d316e78cc889b5a731709e743ea7d3f4_prof);

        
        $__internal_23af50313541be632def38c1ab20274afcc05ae746d07751b42ab046a6a4aca0->leave($__internal_23af50313541be632def38c1ab20274afcc05ae746d07751b42ab046a6a4aca0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f596bff80c7063c0758a6ecf1ededb45a7956f10ecd154896b8b36187e5fb9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f596bff80c7063c0758a6ecf1ededb45a7956f10ecd154896b8b36187e5fb9e2->enter($__internal_f596bff80c7063c0758a6ecf1ededb45a7956f10ecd154896b8b36187e5fb9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dbd5048dba9dc417ddb34fd1d6af2ee02036c646bffa541f796d76b4d1daeac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd5048dba9dc417ddb34fd1d6af2ee02036c646bffa541f796d76b4d1daeac0->enter($__internal_dbd5048dba9dc417ddb34fd1d6af2ee02036c646bffa541f796d76b4d1daeac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbd5048dba9dc417ddb34fd1d6af2ee02036c646bffa541f796d76b4d1daeac0->leave($__internal_dbd5048dba9dc417ddb34fd1d6af2ee02036c646bffa541f796d76b4d1daeac0_prof);

        
        $__internal_f596bff80c7063c0758a6ecf1ededb45a7956f10ecd154896b8b36187e5fb9e2->leave($__internal_f596bff80c7063c0758a6ecf1ededb45a7956f10ecd154896b8b36187e5fb9e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d295e033ddf9b4a9c53b236d0e874a61677e37f2c05ca5bc87f682f496ad29a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d295e033ddf9b4a9c53b236d0e874a61677e37f2c05ca5bc87f682f496ad29a3->enter($__internal_d295e033ddf9b4a9c53b236d0e874a61677e37f2c05ca5bc87f682f496ad29a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbb05dc95d718b70dd55cf70796d4ad6fdf131bca014d25c8f9926480463a258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb05dc95d718b70dd55cf70796d4ad6fdf131bca014d25c8f9926480463a258->enter($__internal_bbb05dc95d718b70dd55cf70796d4ad6fdf131bca014d25c8f9926480463a258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbb05dc95d718b70dd55cf70796d4ad6fdf131bca014d25c8f9926480463a258->leave($__internal_bbb05dc95d718b70dd55cf70796d4ad6fdf131bca014d25c8f9926480463a258_prof);

        
        $__internal_d295e033ddf9b4a9c53b236d0e874a61677e37f2c05ca5bc87f682f496ad29a3->leave($__internal_d295e033ddf9b4a9c53b236d0e874a61677e37f2c05ca5bc87f682f496ad29a3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
