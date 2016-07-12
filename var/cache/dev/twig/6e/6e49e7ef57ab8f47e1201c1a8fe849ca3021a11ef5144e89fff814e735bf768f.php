<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_f107bcbecddbc16efe53d25eda9e030b05734ec8f96976f07baebe939c524b82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_648fc34ef4d33a878a5dcaa93a372ab1647c07b1ae8f9300f4cc95501171d8dd = $this->env->getExtension("native_profiler");
        $__internal_648fc34ef4d33a878a5dcaa93a372ab1647c07b1ae8f9300f4cc95501171d8dd->enter($__internal_648fc34ef4d33a878a5dcaa93a372ab1647c07b1ae8f9300f4cc95501171d8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648fc34ef4d33a878a5dcaa93a372ab1647c07b1ae8f9300f4cc95501171d8dd->leave($__internal_648fc34ef4d33a878a5dcaa93a372ab1647c07b1ae8f9300f4cc95501171d8dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd745dabbe48c10fe1cff8b55a24c3e956298dd4d2acd98bbdd4c1114d2fbe61 = $this->env->getExtension("native_profiler");
        $__internal_cd745dabbe48c10fe1cff8b55a24c3e956298dd4d2acd98bbdd4c1114d2fbe61->enter($__internal_cd745dabbe48c10fe1cff8b55a24c3e956298dd4d2acd98bbdd4c1114d2fbe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cd745dabbe48c10fe1cff8b55a24c3e956298dd4d2acd98bbdd4c1114d2fbe61->leave($__internal_cd745dabbe48c10fe1cff8b55a24c3e956298dd4d2acd98bbdd4c1114d2fbe61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
