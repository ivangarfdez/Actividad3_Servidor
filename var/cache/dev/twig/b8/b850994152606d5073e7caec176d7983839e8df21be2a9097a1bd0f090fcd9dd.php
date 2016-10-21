<?php

/* PacoLocoBundle:Default:msgTexto.html.twig */
class __TwigTemplate_92c6fe8371fe4c6d0d5a65da2eb99c9f69f0b3d4f17515e0e1042f683ea51012 extends Twig_Template
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
        $__internal_f872e79c556540110f690304b862796482f1b396ac6167be4e2484b46727b9a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f872e79c556540110f690304b862796482f1b396ac6167be4e2484b46727b9a9->enter($__internal_f872e79c556540110f690304b862796482f1b396ac6167be4e2484b46727b9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PacoLocoBundle:Default:msgTexto.html.twig"));

        // line 1
        echo "El mensaje es
<br>
";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
";
        
        $__internal_f872e79c556540110f690304b862796482f1b396ac6167be4e2484b46727b9a9->leave($__internal_f872e79c556540110f690304b862796482f1b396ac6167be4e2484b46727b9a9_prof);

    }

    public function getTemplateName()
    {
        return "PacoLocoBundle:Default:msgTexto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "El mensaje es
<br>
{{texto}}
";
    }
}
