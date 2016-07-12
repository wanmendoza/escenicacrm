<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7b5a48819e7758e880bdcce7d912d28c31bd5a969f3a0609dd263f6e6ffa31f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc1d9680867c42a2d881478e0a200d8ec3d83e62fb6a8c816ab26cef01a1697a = $this->env->getExtension("native_profiler");
        $__internal_dc1d9680867c42a2d881478e0a200d8ec3d83e62fb6a8c816ab26cef01a1697a->enter($__internal_dc1d9680867c42a2d881478e0a200d8ec3d83e62fb6a8c816ab26cef01a1697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dc1d9680867c42a2d881478e0a200d8ec3d83e62fb6a8c816ab26cef01a1697a->leave($__internal_dc1d9680867c42a2d881478e0a200d8ec3d83e62fb6a8c816ab26cef01a1697a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_20412775daa8ba27fe7f49ec5d1dde050d23f6e639d7c33a21a80187997f0acd = $this->env->getExtension("native_profiler");
        $__internal_20412775daa8ba27fe7f49ec5d1dde050d23f6e639d7c33a21a80187997f0acd->enter($__internal_20412775daa8ba27fe7f49ec5d1dde050d23f6e639d7c33a21a80187997f0acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_20412775daa8ba27fe7f49ec5d1dde050d23f6e639d7c33a21a80187997f0acd->leave($__internal_20412775daa8ba27fe7f49ec5d1dde050d23f6e639d7c33a21a80187997f0acd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
