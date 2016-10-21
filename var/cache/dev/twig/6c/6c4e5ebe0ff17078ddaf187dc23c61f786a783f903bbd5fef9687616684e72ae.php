<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cc9900bb94b009b295bfc8989869fd46b465dd95601b98afb4c2360c596b8cac extends Twig_Template
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
        $__internal_6f3c4e9bc468ef4a54792518a06d5399756886d449e62142244f4ade71199f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3c4e9bc468ef4a54792518a06d5399756886d449e62142244f4ade71199f28->enter($__internal_6f3c4e9bc468ef4a54792518a06d5399756886d449e62142244f4ade71199f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f3c4e9bc468ef4a54792518a06d5399756886d449e62142244f4ade71199f28->leave($__internal_6f3c4e9bc468ef4a54792518a06d5399756886d449e62142244f4ade71199f28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b39ae2f32d8a27c1a3ab6c6374a95239b155bd2465ed7e211d8a80150aacd84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39ae2f32d8a27c1a3ab6c6374a95239b155bd2465ed7e211d8a80150aacd84b->enter($__internal_b39ae2f32d8a27c1a3ab6c6374a95239b155bd2465ed7e211d8a80150aacd84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b39ae2f32d8a27c1a3ab6c6374a95239b155bd2465ed7e211d8a80150aacd84b->leave($__internal_b39ae2f32d8a27c1a3ab6c6374a95239b155bd2465ed7e211d8a80150aacd84b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df5b6a77347e3d5822b6c9b258371ac168a9a8ca93b95eb007c6a1e9b391e5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5b6a77347e3d5822b6c9b258371ac168a9a8ca93b95eb007c6a1e9b391e5a4->enter($__internal_df5b6a77347e3d5822b6c9b258371ac168a9a8ca93b95eb007c6a1e9b391e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df5b6a77347e3d5822b6c9b258371ac168a9a8ca93b95eb007c6a1e9b391e5a4->leave($__internal_df5b6a77347e3d5822b6c9b258371ac168a9a8ca93b95eb007c6a1e9b391e5a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_239edc53bfa46e2b05635d813cbe96574310dc602e1bb06c6d1bd819211c5896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239edc53bfa46e2b05635d813cbe96574310dc602e1bb06c6d1bd819211c5896->enter($__internal_239edc53bfa46e2b05635d813cbe96574310dc602e1bb06c6d1bd819211c5896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_239edc53bfa46e2b05635d813cbe96574310dc602e1bb06c6d1bd819211c5896->leave($__internal_239edc53bfa46e2b05635d813cbe96574310dc602e1bb06c6d1bd819211c5896_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
