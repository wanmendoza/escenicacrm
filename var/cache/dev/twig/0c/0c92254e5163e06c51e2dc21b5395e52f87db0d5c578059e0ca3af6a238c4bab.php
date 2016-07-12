<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_76f054b90d90358e3bb53b12c97eedc68b69b1035cdfba637d9d098b56d3bcc2 extends Twig_Template
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
        $__internal_a15b4bf81fd482beba5d1f7ce9cc43a00a33044d58c99a526a5617ea0345a74b = $this->env->getExtension("native_profiler");
        $__internal_a15b4bf81fd482beba5d1f7ce9cc43a00a33044d58c99a526a5617ea0345a74b->enter($__internal_a15b4bf81fd482beba5d1f7ce9cc43a00a33044d58c99a526a5617ea0345a74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a15b4bf81fd482beba5d1f7ce9cc43a00a33044d58c99a526a5617ea0345a74b->leave($__internal_a15b4bf81fd482beba5d1f7ce9cc43a00a33044d58c99a526a5617ea0345a74b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
