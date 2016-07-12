<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9504124fa19197e578833aaf623504f03c9be565a25fd4ebba94b5077dd219e7 extends Twig_Template
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
        $__internal_32a8f2d85c311cf84699b61a354761d41cc423dd3183124cc1d83b052c6ce32b = $this->env->getExtension("native_profiler");
        $__internal_32a8f2d85c311cf84699b61a354761d41cc423dd3183124cc1d83b052c6ce32b->enter($__internal_32a8f2d85c311cf84699b61a354761d41cc423dd3183124cc1d83b052c6ce32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_32a8f2d85c311cf84699b61a354761d41cc423dd3183124cc1d83b052c6ce32b->leave($__internal_32a8f2d85c311cf84699b61a354761d41cc423dd3183124cc1d83b052c6ce32b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
