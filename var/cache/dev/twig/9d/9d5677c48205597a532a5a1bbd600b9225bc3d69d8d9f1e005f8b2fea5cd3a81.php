<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f559a11ed81e87a507b2c35f05610b0e4d829c22c37d03aff63d5381d8d910a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WbcThemeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d0ecca65c7153e4932c10acfe594b2274bfc144107bc16fcd068ee00f8a13dd = $this->env->getExtension("native_profiler");
        $__internal_9d0ecca65c7153e4932c10acfe594b2274bfc144107bc16fcd068ee00f8a13dd->enter($__internal_9d0ecca65c7153e4932c10acfe594b2274bfc144107bc16fcd068ee00f8a13dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d0ecca65c7153e4932c10acfe594b2274bfc144107bc16fcd068ee00f8a13dd->leave($__internal_9d0ecca65c7153e4932c10acfe594b2274bfc144107bc16fcd068ee00f8a13dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b0ae3d129ee6fcfb50e3f35649c97ef813a3a5af5d34c9280995aaeca4ea398 = $this->env->getExtension("native_profiler");
        $__internal_0b0ae3d129ee6fcfb50e3f35649c97ef813a3a5af5d34c9280995aaeca4ea398->enter($__internal_0b0ae3d129ee6fcfb50e3f35649c97ef813a3a5af5d34c9280995aaeca4ea398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My profile"), "html", null, true);
        echo "
";
        
        $__internal_0b0ae3d129ee6fcfb50e3f35649c97ef813a3a5af5d34c9280995aaeca4ea398->leave($__internal_0b0ae3d129ee6fcfb50e3f35649c97ef813a3a5af5d34c9280995aaeca4ea398_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_119ff005d3c896e512991784dc1579953ef38f49329e585b9f638daf97068775 = $this->env->getExtension("native_profiler");
        $__internal_119ff005d3c896e512991784dc1579953ef38f49329e585b9f638daf97068775->enter($__internal_119ff005d3c896e512991784dc1579953ef38f49329e585b9f638daf97068775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My profile"), "html", null, true);
        echo "</li>
";
        
        $__internal_119ff005d3c896e512991784dc1579953ef38f49329e585b9f638daf97068775->leave($__internal_119ff005d3c896e512991784dc1579953ef38f49329e585b9f638daf97068775_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_58974ecbd0d8e48d77db792a785b5c430e4925cf91aabf98e724bfbf585a47aa = $this->env->getExtension("native_profiler");
        $__internal_58974ecbd0d8e48d77db792a785b5c430e4925cf91aabf98e724bfbf585a47aa->enter($__internal_58974ecbd0d8e48d77db792a785b5c430e4925cf91aabf98e724bfbf585a47aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 14
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 14)->display($context);
        
        $__internal_58974ecbd0d8e48d77db792a785b5c430e4925cf91aabf98e724bfbf585a47aa->leave($__internal_58974ecbd0d8e48d77db792a785b5c430e4925cf91aabf98e724bfbf585a47aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ 'My profile' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class="active">{{ 'My profile' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock  %}*/
/* */
