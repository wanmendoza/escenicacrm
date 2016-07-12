<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8e70537746f6e08b4a676d927b71ed2ff9cd240f147ad30f95ee44f061dc9c00 extends Twig_Template
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
        $__internal_f226d73f864d79de1239013cbf514939fe074f0ccb5b5e37b0a19d842ffeb45e = $this->env->getExtension("native_profiler");
        $__internal_f226d73f864d79de1239013cbf514939fe074f0ccb5b5e37b0a19d842ffeb45e->enter($__internal_f226d73f864d79de1239013cbf514939fe074f0ccb5b5e37b0a19d842ffeb45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f226d73f864d79de1239013cbf514939fe074f0ccb5b5e37b0a19d842ffeb45e->leave($__internal_f226d73f864d79de1239013cbf514939fe074f0ccb5b5e37b0a19d842ffeb45e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
