<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9d52818573ee53a8c84b3970d5f82e2e01fd28bfa0ec2800ca6755c2b4b00728 extends Twig_Template
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
        $__internal_e9c44c40248efb57042bcdf43a25f80d61712c0e6a75c9aeb69a7e1650036b21 = $this->env->getExtension("native_profiler");
        $__internal_e9c44c40248efb57042bcdf43a25f80d61712c0e6a75c9aeb69a7e1650036b21->enter($__internal_e9c44c40248efb57042bcdf43a25f80d61712c0e6a75c9aeb69a7e1650036b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e9c44c40248efb57042bcdf43a25f80d61712c0e6a75c9aeb69a7e1650036b21->leave($__internal_e9c44c40248efb57042bcdf43a25f80d61712c0e6a75c9aeb69a7e1650036b21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
