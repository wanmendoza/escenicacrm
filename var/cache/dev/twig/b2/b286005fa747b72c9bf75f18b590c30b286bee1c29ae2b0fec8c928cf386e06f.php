<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6fdd35b15712b26ead6b0982e5b75f8d4236a77b33b4459d53d21217e3a982ac extends Twig_Template
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
        $__internal_345e49bf92b6a906a1e0654d1cf99a40fc7fae0769fa2e0190f2c5406c5e7caf = $this->env->getExtension("native_profiler");
        $__internal_345e49bf92b6a906a1e0654d1cf99a40fc7fae0769fa2e0190f2c5406c5e7caf->enter($__internal_345e49bf92b6a906a1e0654d1cf99a40fc7fae0769fa2e0190f2c5406c5e7caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_345e49bf92b6a906a1e0654d1cf99a40fc7fae0769fa2e0190f2c5406c5e7caf->leave($__internal_345e49bf92b6a906a1e0654d1cf99a40fc7fae0769fa2e0190f2c5406c5e7caf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
