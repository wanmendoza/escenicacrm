<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fd06b3a485573849774d33b29074085517f91e171a340a7fde15ec937f566a08 extends Twig_Template
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
        $__internal_bc1a3be5c36705db58b422717ffc4db264ea3191d3f7ca070e651c5929dad762 = $this->env->getExtension("native_profiler");
        $__internal_bc1a3be5c36705db58b422717ffc4db264ea3191d3f7ca070e651c5929dad762->enter($__internal_bc1a3be5c36705db58b422717ffc4db264ea3191d3f7ca070e651c5929dad762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bc1a3be5c36705db58b422717ffc4db264ea3191d3f7ca070e651c5929dad762->leave($__internal_bc1a3be5c36705db58b422717ffc4db264ea3191d3f7ca070e651c5929dad762_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
