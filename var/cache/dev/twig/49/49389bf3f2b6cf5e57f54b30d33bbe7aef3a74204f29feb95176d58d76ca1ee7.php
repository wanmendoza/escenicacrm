<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a106992dcc102fc6526bfc56a896e2bfafd1d2f5ed3337e0f0f9f1094907d19d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9981cb9fba9c15eb5de43edaef56c3b26965f39cc91e58e10597a00acf2117b4 = $this->env->getExtension("native_profiler");
        $__internal_9981cb9fba9c15eb5de43edaef56c3b26965f39cc91e58e10597a00acf2117b4->enter($__internal_9981cb9fba9c15eb5de43edaef56c3b26965f39cc91e58e10597a00acf2117b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9981cb9fba9c15eb5de43edaef56c3b26965f39cc91e58e10597a00acf2117b4->leave($__internal_9981cb9fba9c15eb5de43edaef56c3b26965f39cc91e58e10597a00acf2117b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4819f5f11c50197130259a0980fea74f088b10d59a258b995227b554a5244c59 = $this->env->getExtension("native_profiler");
        $__internal_4819f5f11c50197130259a0980fea74f088b10d59a258b995227b554a5244c59->enter($__internal_4819f5f11c50197130259a0980fea74f088b10d59a258b995227b554a5244c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_4819f5f11c50197130259a0980fea74f088b10d59a258b995227b554a5244c59->leave($__internal_4819f5f11c50197130259a0980fea74f088b10d59a258b995227b554a5244c59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
