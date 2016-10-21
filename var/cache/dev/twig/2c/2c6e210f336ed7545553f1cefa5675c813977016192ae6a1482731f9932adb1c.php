<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4a84b4dc51a64061b82a551f57ec7f0a2354957e56d08330512925da74800ef6 extends Twig_Template
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
        $__internal_fec9212fe17e514bd029c394c6d27ad1f97f23c676bcc18a7ce3bdf646eb93aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec9212fe17e514bd029c394c6d27ad1f97f23c676bcc18a7ce3bdf646eb93aa->enter($__internal_fec9212fe17e514bd029c394c6d27ad1f97f23c676bcc18a7ce3bdf646eb93aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec9212fe17e514bd029c394c6d27ad1f97f23c676bcc18a7ce3bdf646eb93aa->leave($__internal_fec9212fe17e514bd029c394c6d27ad1f97f23c676bcc18a7ce3bdf646eb93aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0811d35a7adc3829b79f1bb418bbb57bc955afc69c6c8ba460a9003496ba25ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0811d35a7adc3829b79f1bb418bbb57bc955afc69c6c8ba460a9003496ba25ea->enter($__internal_0811d35a7adc3829b79f1bb418bbb57bc955afc69c6c8ba460a9003496ba25ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0811d35a7adc3829b79f1bb418bbb57bc955afc69c6c8ba460a9003496ba25ea->leave($__internal_0811d35a7adc3829b79f1bb418bbb57bc955afc69c6c8ba460a9003496ba25ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72de1b39d1859b42938a729a913217a7db3b31939ee80ba02a717ab4c9b75465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72de1b39d1859b42938a729a913217a7db3b31939ee80ba02a717ab4c9b75465->enter($__internal_72de1b39d1859b42938a729a913217a7db3b31939ee80ba02a717ab4c9b75465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72de1b39d1859b42938a729a913217a7db3b31939ee80ba02a717ab4c9b75465->leave($__internal_72de1b39d1859b42938a729a913217a7db3b31939ee80ba02a717ab4c9b75465_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ce36c115953b4f998eea45db6ab1f75fe913dcd655624b09dd2664424fa72db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce36c115953b4f998eea45db6ab1f75fe913dcd655624b09dd2664424fa72db->enter($__internal_6ce36c115953b4f998eea45db6ab1f75fe913dcd655624b09dd2664424fa72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ce36c115953b4f998eea45db6ab1f75fe913dcd655624b09dd2664424fa72db->leave($__internal_6ce36c115953b4f998eea45db6ab1f75fe913dcd655624b09dd2664424fa72db_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
