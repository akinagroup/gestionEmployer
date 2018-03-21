<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46dace2ed0e0e59e1ae4edfd1fc6b79cc51a3ee29f48fe1cbee79282240bfe7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dace2ed0e0e59e1ae4edfd1fc6b79cc51a3ee29f48fe1cbee79282240bfe7a->enter($__internal_46dace2ed0e0e59e1ae4edfd1fc6b79cc51a3ee29f48fe1cbee79282240bfe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5ef4495c31c81c2d4b264d386e8313a5ecd787793d8b58b793796b7ecab274f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef4495c31c81c2d4b264d386e8313a5ecd787793d8b58b793796b7ecab274f0->enter($__internal_5ef4495c31c81c2d4b264d386e8313a5ecd787793d8b58b793796b7ecab274f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dace2ed0e0e59e1ae4edfd1fc6b79cc51a3ee29f48fe1cbee79282240bfe7a->leave($__internal_46dace2ed0e0e59e1ae4edfd1fc6b79cc51a3ee29f48fe1cbee79282240bfe7a_prof);

        
        $__internal_5ef4495c31c81c2d4b264d386e8313a5ecd787793d8b58b793796b7ecab274f0->leave($__internal_5ef4495c31c81c2d4b264d386e8313a5ecd787793d8b58b793796b7ecab274f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7898528ecd2abb6c43468b8f8d8cbcf0657542b1e40eef17fc2816328192eaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7898528ecd2abb6c43468b8f8d8cbcf0657542b1e40eef17fc2816328192eaec->enter($__internal_7898528ecd2abb6c43468b8f8d8cbcf0657542b1e40eef17fc2816328192eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f33b30c3a5480ae794815cb456910cb30f27fbae7b7b130446d9beb9b54d84f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33b30c3a5480ae794815cb456910cb30f27fbae7b7b130446d9beb9b54d84f8->enter($__internal_f33b30c3a5480ae794815cb456910cb30f27fbae7b7b130446d9beb9b54d84f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f33b30c3a5480ae794815cb456910cb30f27fbae7b7b130446d9beb9b54d84f8->leave($__internal_f33b30c3a5480ae794815cb456910cb30f27fbae7b7b130446d9beb9b54d84f8_prof);

        
        $__internal_7898528ecd2abb6c43468b8f8d8cbcf0657542b1e40eef17fc2816328192eaec->leave($__internal_7898528ecd2abb6c43468b8f8d8cbcf0657542b1e40eef17fc2816328192eaec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_54db9139ae7f7eee58b814b4b71fc5428233a02d8d954da84efc20ddfc1a31ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54db9139ae7f7eee58b814b4b71fc5428233a02d8d954da84efc20ddfc1a31ab->enter($__internal_54db9139ae7f7eee58b814b4b71fc5428233a02d8d954da84efc20ddfc1a31ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6cf4696ce28f9f6f57cd64d281d2aa13ac0710128c3d457cf73b7aee182d429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cf4696ce28f9f6f57cd64d281d2aa13ac0710128c3d457cf73b7aee182d429->enter($__internal_f6cf4696ce28f9f6f57cd64d281d2aa13ac0710128c3d457cf73b7aee182d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6cf4696ce28f9f6f57cd64d281d2aa13ac0710128c3d457cf73b7aee182d429->leave($__internal_f6cf4696ce28f9f6f57cd64d281d2aa13ac0710128c3d457cf73b7aee182d429_prof);

        
        $__internal_54db9139ae7f7eee58b814b4b71fc5428233a02d8d954da84efc20ddfc1a31ab->leave($__internal_54db9139ae7f7eee58b814b4b71fc5428233a02d8d954da84efc20ddfc1a31ab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0de9dc67c651e7ec367dfb03e271fc4e5f0482a02b34de2c6b6be86bada1d064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de9dc67c651e7ec367dfb03e271fc4e5f0482a02b34de2c6b6be86bada1d064->enter($__internal_0de9dc67c651e7ec367dfb03e271fc4e5f0482a02b34de2c6b6be86bada1d064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14392de3d427a31bd7ff4e24d9094b37db37039f5e1b8faf36743a9b89907d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14392de3d427a31bd7ff4e24d9094b37db37039f5e1b8faf36743a9b89907d84->enter($__internal_14392de3d427a31bd7ff4e24d9094b37db37039f5e1b8faf36743a9b89907d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_14392de3d427a31bd7ff4e24d9094b37db37039f5e1b8faf36743a9b89907d84->leave($__internal_14392de3d427a31bd7ff4e24d9094b37db37039f5e1b8faf36743a9b89907d84_prof);

        
        $__internal_0de9dc67c651e7ec367dfb03e271fc4e5f0482a02b34de2c6b6be86bada1d064->leave($__internal_0de9dc67c651e7ec367dfb03e271fc4e5f0482a02b34de2c6b6be86bada1d064_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
