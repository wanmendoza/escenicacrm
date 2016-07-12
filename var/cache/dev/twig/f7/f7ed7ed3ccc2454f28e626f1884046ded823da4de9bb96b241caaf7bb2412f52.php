<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_efb9907bc14bbac8ef2d044f715b91aefa9e4016313ed51ba095a6fa6ff1d344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_ddebc2e85f1671d26ecac3719d074c993e5ede47b83635fdd06417950141f0b4 = $this->env->getExtension("native_profiler");
        $__internal_ddebc2e85f1671d26ecac3719d074c993e5ede47b83635fdd06417950141f0b4->enter($__internal_ddebc2e85f1671d26ecac3719d074c993e5ede47b83635fdd06417950141f0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddebc2e85f1671d26ecac3719d074c993e5ede47b83635fdd06417950141f0b4->leave($__internal_ddebc2e85f1671d26ecac3719d074c993e5ede47b83635fdd06417950141f0b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29061e707016bf61bd976b563563c38d4753b3d979cc40e8aa3c2df3ef31a9d3 = $this->env->getExtension("native_profiler");
        $__internal_29061e707016bf61bd976b563563c38d4753b3d979cc40e8aa3c2df3ef31a9d3->enter($__internal_29061e707016bf61bd976b563563c38d4753b3d979cc40e8aa3c2df3ef31a9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_29061e707016bf61bd976b563563c38d4753b3d979cc40e8aa3c2df3ef31a9d3->leave($__internal_29061e707016bf61bd976b563563c38d4753b3d979cc40e8aa3c2df3ef31a9d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
