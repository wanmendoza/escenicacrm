<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9d1c4a07a238f45eb478010b7b35b1c5dddff78f774087b3e64923ce6fbdedac extends Twig_Template
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
        $__internal_d4ce4eba52ce79a0065a9928064891613f33b9d0f9a266cccd8e0ad5fd756a3e = $this->env->getExtension("native_profiler");
        $__internal_d4ce4eba52ce79a0065a9928064891613f33b9d0f9a266cccd8e0ad5fd756a3e->enter($__internal_d4ce4eba52ce79a0065a9928064891613f33b9d0f9a266cccd8e0ad5fd756a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d4ce4eba52ce79a0065a9928064891613f33b9d0f9a266cccd8e0ad5fd756a3e->leave($__internal_d4ce4eba52ce79a0065a9928064891613f33b9d0f9a266cccd8e0ad5fd756a3e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
