<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f5ce7b92169b4d074ebacb454a15cdf6f6884f9f615f868b8d3f5b50cdd0ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5ce7b92169b4d074ebacb454a15cdf6f6884f9f615f868b8d3f5b50cdd0ae3->enter($__internal_5f5ce7b92169b4d074ebacb454a15cdf6f6884f9f615f868b8d3f5b50cdd0ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8dd84463ce5bec3db8b30ebdbd99b2cf4b9f31902bd79d66ecec4ada966d57ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd84463ce5bec3db8b30ebdbd99b2cf4b9f31902bd79d66ecec4ada966d57ca->enter($__internal_8dd84463ce5bec3db8b30ebdbd99b2cf4b9f31902bd79d66ecec4ada966d57ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5f5ce7b92169b4d074ebacb454a15cdf6f6884f9f615f868b8d3f5b50cdd0ae3->leave($__internal_5f5ce7b92169b4d074ebacb454a15cdf6f6884f9f615f868b8d3f5b50cdd0ae3_prof);

        
        $__internal_8dd84463ce5bec3db8b30ebdbd99b2cf4b9f31902bd79d66ecec4ada966d57ca->leave($__internal_8dd84463ce5bec3db8b30ebdbd99b2cf4b9f31902bd79d66ecec4ada966d57ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c478270ec2b7f99e3f12d1187d5deeda83ef0993189bf57b13d9e78f64b02cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c478270ec2b7f99e3f12d1187d5deeda83ef0993189bf57b13d9e78f64b02cf->enter($__internal_0c478270ec2b7f99e3f12d1187d5deeda83ef0993189bf57b13d9e78f64b02cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_112fac0eceaee5760c929db14495e6cca4363d15e6184388b9828b8a117bbb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_112fac0eceaee5760c929db14495e6cca4363d15e6184388b9828b8a117bbb3c->enter($__internal_112fac0eceaee5760c929db14495e6cca4363d15e6184388b9828b8a117bbb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_112fac0eceaee5760c929db14495e6cca4363d15e6184388b9828b8a117bbb3c->leave($__internal_112fac0eceaee5760c929db14495e6cca4363d15e6184388b9828b8a117bbb3c_prof);

        
        $__internal_0c478270ec2b7f99e3f12d1187d5deeda83ef0993189bf57b13d9e78f64b02cf->leave($__internal_0c478270ec2b7f99e3f12d1187d5deeda83ef0993189bf57b13d9e78f64b02cf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec3d5b70138ecbd1d3d54e48d6c403319edc8c1d59c2273f1e619c8e85930945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3d5b70138ecbd1d3d54e48d6c403319edc8c1d59c2273f1e619c8e85930945->enter($__internal_ec3d5b70138ecbd1d3d54e48d6c403319edc8c1d59c2273f1e619c8e85930945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9eda0b671da389d1313566dca858a4a4a4c96ef6b43ae141416a8c6a4a826a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eda0b671da389d1313566dca858a4a4a4c96ef6b43ae141416a8c6a4a826a07->enter($__internal_9eda0b671da389d1313566dca858a4a4a4c96ef6b43ae141416a8c6a4a826a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9eda0b671da389d1313566dca858a4a4a4c96ef6b43ae141416a8c6a4a826a07->leave($__internal_9eda0b671da389d1313566dca858a4a4a4c96ef6b43ae141416a8c6a4a826a07_prof);

        
        $__internal_ec3d5b70138ecbd1d3d54e48d6c403319edc8c1d59c2273f1e619c8e85930945->leave($__internal_ec3d5b70138ecbd1d3d54e48d6c403319edc8c1d59c2273f1e619c8e85930945_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_66ffa1d4a4ae5e42732bc7ffdb34cd72d075868caac962dca0d3f3cd1db5f9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ffa1d4a4ae5e42732bc7ffdb34cd72d075868caac962dca0d3f3cd1db5f9d2->enter($__internal_66ffa1d4a4ae5e42732bc7ffdb34cd72d075868caac962dca0d3f3cd1db5f9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aca8349fac57b7da1ec02a7809c7b3610587d46373057aecdf2802c1b7c6a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aca8349fac57b7da1ec02a7809c7b3610587d46373057aecdf2802c1b7c6a4b->enter($__internal_9aca8349fac57b7da1ec02a7809c7b3610587d46373057aecdf2802c1b7c6a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9aca8349fac57b7da1ec02a7809c7b3610587d46373057aecdf2802c1b7c6a4b->leave($__internal_9aca8349fac57b7da1ec02a7809c7b3610587d46373057aecdf2802c1b7c6a4b_prof);

        
        $__internal_66ffa1d4a4ae5e42732bc7ffdb34cd72d075868caac962dca0d3f3cd1db5f9d2->leave($__internal_66ffa1d4a4ae5e42732bc7ffdb34cd72d075868caac962dca0d3f3cd1db5f9d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
