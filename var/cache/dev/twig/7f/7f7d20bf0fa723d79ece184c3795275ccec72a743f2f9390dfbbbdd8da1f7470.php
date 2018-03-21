<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_397489084edb2be9470edd36e07c34c457d91f85c5210e7f75267bf3e5ed9426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_397489084edb2be9470edd36e07c34c457d91f85c5210e7f75267bf3e5ed9426->enter($__internal_397489084edb2be9470edd36e07c34c457d91f85c5210e7f75267bf3e5ed9426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9174ad09fc5fc44ef11525727d55bdbdb3ea705c1375b441f78e6013e3671e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9174ad09fc5fc44ef11525727d55bdbdb3ea705c1375b441f78e6013e3671e94->enter($__internal_9174ad09fc5fc44ef11525727d55bdbdb3ea705c1375b441f78e6013e3671e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397489084edb2be9470edd36e07c34c457d91f85c5210e7f75267bf3e5ed9426->leave($__internal_397489084edb2be9470edd36e07c34c457d91f85c5210e7f75267bf3e5ed9426_prof);

        
        $__internal_9174ad09fc5fc44ef11525727d55bdbdb3ea705c1375b441f78e6013e3671e94->leave($__internal_9174ad09fc5fc44ef11525727d55bdbdb3ea705c1375b441f78e6013e3671e94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e6cba0d65c650beabb1d9804d85911b7d8ef1735ca3a97aacf83e0f491c854e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6cba0d65c650beabb1d9804d85911b7d8ef1735ca3a97aacf83e0f491c854e->enter($__internal_4e6cba0d65c650beabb1d9804d85911b7d8ef1735ca3a97aacf83e0f491c854e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4827f6dd2d861e9c75ba45d611672a28de9d6cb5b7ea252c146160714a1b2752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4827f6dd2d861e9c75ba45d611672a28de9d6cb5b7ea252c146160714a1b2752->enter($__internal_4827f6dd2d861e9c75ba45d611672a28de9d6cb5b7ea252c146160714a1b2752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4827f6dd2d861e9c75ba45d611672a28de9d6cb5b7ea252c146160714a1b2752->leave($__internal_4827f6dd2d861e9c75ba45d611672a28de9d6cb5b7ea252c146160714a1b2752_prof);

        
        $__internal_4e6cba0d65c650beabb1d9804d85911b7d8ef1735ca3a97aacf83e0f491c854e->leave($__internal_4e6cba0d65c650beabb1d9804d85911b7d8ef1735ca3a97aacf83e0f491c854e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e920e642cbb4f4795cbde5d319ad6de7f985b6522ee15d89c47f922efe38ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e920e642cbb4f4795cbde5d319ad6de7f985b6522ee15d89c47f922efe38ef5->enter($__internal_8e920e642cbb4f4795cbde5d319ad6de7f985b6522ee15d89c47f922efe38ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9788058c3df2034ca9f807004ab14f917a0fdae647bec425a2b1314a29153dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9788058c3df2034ca9f807004ab14f917a0fdae647bec425a2b1314a29153dd4->enter($__internal_9788058c3df2034ca9f807004ab14f917a0fdae647bec425a2b1314a29153dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9788058c3df2034ca9f807004ab14f917a0fdae647bec425a2b1314a29153dd4->leave($__internal_9788058c3df2034ca9f807004ab14f917a0fdae647bec425a2b1314a29153dd4_prof);

        
        $__internal_8e920e642cbb4f4795cbde5d319ad6de7f985b6522ee15d89c47f922efe38ef5->leave($__internal_8e920e642cbb4f4795cbde5d319ad6de7f985b6522ee15d89c47f922efe38ef5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99f0cf4bf361fdc42a0dcf08cab49c0d7173958878b2c33e3d48c0db694a85fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f0cf4bf361fdc42a0dcf08cab49c0d7173958878b2c33e3d48c0db694a85fe->enter($__internal_99f0cf4bf361fdc42a0dcf08cab49c0d7173958878b2c33e3d48c0db694a85fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bcec31eb80764b9eae2716a85532af80b04be5bffc5775f9cf0b4b3e312abaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcec31eb80764b9eae2716a85532af80b04be5bffc5775f9cf0b4b3e312abaf2->enter($__internal_bcec31eb80764b9eae2716a85532af80b04be5bffc5775f9cf0b4b3e312abaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bcec31eb80764b9eae2716a85532af80b04be5bffc5775f9cf0b4b3e312abaf2->leave($__internal_bcec31eb80764b9eae2716a85532af80b04be5bffc5775f9cf0b4b3e312abaf2_prof);

        
        $__internal_99f0cf4bf361fdc42a0dcf08cab49c0d7173958878b2c33e3d48c0db694a85fe->leave($__internal_99f0cf4bf361fdc42a0dcf08cab49c0d7173958878b2c33e3d48c0db694a85fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
