<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_58496c0c37673dc5da7c63e61e4bbef5436508a50c6821d988c313ab91739499 extends Twig_Template
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
        $__internal_a99922236597e416b854a505d6514c1a315f6f892749a85ed60a5908c6a83b27 = $this->env->getExtension("native_profiler");
        $__internal_a99922236597e416b854a505d6514c1a315f6f892749a85ed60a5908c6a83b27->enter($__internal_a99922236597e416b854a505d6514c1a315f6f892749a85ed60a5908c6a83b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a99922236597e416b854a505d6514c1a315f6f892749a85ed60a5908c6a83b27->leave($__internal_a99922236597e416b854a505d6514c1a315f6f892749a85ed60a5908c6a83b27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
