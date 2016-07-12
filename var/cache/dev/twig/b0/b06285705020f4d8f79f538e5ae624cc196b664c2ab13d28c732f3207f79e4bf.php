<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d6cdef8020052eaa19cf1163eeadb4667db3576c8afdca02967659c35f4d100c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_63470864b252141e6c7e29e6035b38446b345e3708b0995945846a60130dfdfa = $this->env->getExtension("native_profiler");
        $__internal_63470864b252141e6c7e29e6035b38446b345e3708b0995945846a60130dfdfa->enter($__internal_63470864b252141e6c7e29e6035b38446b345e3708b0995945846a60130dfdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63470864b252141e6c7e29e6035b38446b345e3708b0995945846a60130dfdfa->leave($__internal_63470864b252141e6c7e29e6035b38446b345e3708b0995945846a60130dfdfa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7abd0fc21e1898b194fa2866e1b2a78b6bebfef9a8d022531e679691044e12d0 = $this->env->getExtension("native_profiler");
        $__internal_7abd0fc21e1898b194fa2866e1b2a78b6bebfef9a8d022531e679691044e12d0->enter($__internal_7abd0fc21e1898b194fa2866e1b2a78b6bebfef9a8d022531e679691044e12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_7abd0fc21e1898b194fa2866e1b2a78b6bebfef9a8d022531e679691044e12d0->leave($__internal_7abd0fc21e1898b194fa2866e1b2a78b6bebfef9a8d022531e679691044e12d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
