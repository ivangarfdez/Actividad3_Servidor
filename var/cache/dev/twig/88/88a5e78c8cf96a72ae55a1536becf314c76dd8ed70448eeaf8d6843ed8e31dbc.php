<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4426d4943a18841254ad5a7962502992ae0cc98f8c52cada5fb7d18e258fa712 extends Twig_Template
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
        $__internal_5c644929f6a83b66c5ca8c83063f8b6bd1088f88f9fd49a8c6daad79b6af6c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c644929f6a83b66c5ca8c83063f8b6bd1088f88f9fd49a8c6daad79b6af6c33->enter($__internal_5c644929f6a83b66c5ca8c83063f8b6bd1088f88f9fd49a8c6daad79b6af6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c644929f6a83b66c5ca8c83063f8b6bd1088f88f9fd49a8c6daad79b6af6c33->leave($__internal_5c644929f6a83b66c5ca8c83063f8b6bd1088f88f9fd49a8c6daad79b6af6c33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ce74a0c7557c2625b0441f2c8952da5b42dd340b1a101428d6313eb1fd7012e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce74a0c7557c2625b0441f2c8952da5b42dd340b1a101428d6313eb1fd7012e->enter($__internal_0ce74a0c7557c2625b0441f2c8952da5b42dd340b1a101428d6313eb1fd7012e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ce74a0c7557c2625b0441f2c8952da5b42dd340b1a101428d6313eb1fd7012e->leave($__internal_0ce74a0c7557c2625b0441f2c8952da5b42dd340b1a101428d6313eb1fd7012e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b308d493ee591468863b8785362fe2f2a017292cfd8342c9137c2b631d4b868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b308d493ee591468863b8785362fe2f2a017292cfd8342c9137c2b631d4b868->enter($__internal_6b308d493ee591468863b8785362fe2f2a017292cfd8342c9137c2b631d4b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b308d493ee591468863b8785362fe2f2a017292cfd8342c9137c2b631d4b868->leave($__internal_6b308d493ee591468863b8785362fe2f2a017292cfd8342c9137c2b631d4b868_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e002e90ebdc3cee1a6d3b0028bccb0e5f4e239baa027e6cf9ff7c3649a19891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e002e90ebdc3cee1a6d3b0028bccb0e5f4e239baa027e6cf9ff7c3649a19891->enter($__internal_1e002e90ebdc3cee1a6d3b0028bccb0e5f4e239baa027e6cf9ff7c3649a19891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1e002e90ebdc3cee1a6d3b0028bccb0e5f4e239baa027e6cf9ff7c3649a19891->leave($__internal_1e002e90ebdc3cee1a6d3b0028bccb0e5f4e239baa027e6cf9ff7c3649a19891_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
