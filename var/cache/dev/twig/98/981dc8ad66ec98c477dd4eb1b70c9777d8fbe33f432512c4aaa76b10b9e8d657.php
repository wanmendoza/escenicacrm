<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_e17876dbea62069b6cca8a547ade84dfaa1c81103919ac1309f574ed8ea1d124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9dbb56989b77604981d9f28d5ff1ede6af3d0bff05814859c488d4e093ed5307 = $this->env->getExtension("native_profiler");
        $__internal_9dbb56989b77604981d9f28d5ff1ede6af3d0bff05814859c488d4e093ed5307->enter($__internal_9dbb56989b77604981d9f28d5ff1ede6af3d0bff05814859c488d4e093ed5307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dbb56989b77604981d9f28d5ff1ede6af3d0bff05814859c488d4e093ed5307->leave($__internal_9dbb56989b77604981d9f28d5ff1ede6af3d0bff05814859c488d4e093ed5307_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_774a6e38c95c97dd01a3de227e9287ea3f7bd9df42b73d5683d7fc6fd05ceab9 = $this->env->getExtension("native_profiler");
        $__internal_774a6e38c95c97dd01a3de227e9287ea3f7bd9df42b73d5683d7fc6fd05ceab9->enter($__internal_774a6e38c95c97dd01a3de227e9287ea3f7bd9df42b73d5683d7fc6fd05ceab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_774a6e38c95c97dd01a3de227e9287ea3f7bd9df42b73d5683d7fc6fd05ceab9->leave($__internal_774a6e38c95c97dd01a3de227e9287ea3f7bd9df42b73d5683d7fc6fd05ceab9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
