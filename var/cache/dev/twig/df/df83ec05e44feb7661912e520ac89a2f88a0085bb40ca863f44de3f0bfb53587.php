<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1d54d7d6798226fdaf3fae43b6a9cda31f1407041595dbd9b5d46846a37d5b2b extends Twig_Template
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
        $__internal_d419fce88fe373e4801e0311aadb3fc9b9aec02ac88f06bea9fb3cfb1b22c2ef = $this->env->getExtension("native_profiler");
        $__internal_d419fce88fe373e4801e0311aadb3fc9b9aec02ac88f06bea9fb3cfb1b22c2ef->enter($__internal_d419fce88fe373e4801e0311aadb3fc9b9aec02ac88f06bea9fb3cfb1b22c2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d419fce88fe373e4801e0311aadb3fc9b9aec02ac88f06bea9fb3cfb1b22c2ef->leave($__internal_d419fce88fe373e4801e0311aadb3fc9b9aec02ac88f06bea9fb3cfb1b22c2ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
