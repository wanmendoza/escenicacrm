<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_127343fa7e216c1e118816d0c8272336b9acfeb885edc4df13947833883e3e2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WbcThemeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aff774efc40282a4e6d20ed7d300ee2e51c97db835e03c6829bae605c152fd03 = $this->env->getExtension("native_profiler");
        $__internal_aff774efc40282a4e6d20ed7d300ee2e51c97db835e03c6829bae605c152fd03->enter($__internal_aff774efc40282a4e6d20ed7d300ee2e51c97db835e03c6829bae605c152fd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff774efc40282a4e6d20ed7d300ee2e51c97db835e03c6829bae605c152fd03->leave($__internal_aff774efc40282a4e6d20ed7d300ee2e51c97db835e03c6829bae605c152fd03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67b40650c8375629bf8b2b13994eb400dfe75ec5e76036925734d5ba661bb06b = $this->env->getExtension("native_profiler");
        $__internal_67b40650c8375629bf8b2b13994eb400dfe75ec5e76036925734d5ba661bb06b->enter($__internal_67b40650c8375629bf8b2b13994eb400dfe75ec5e76036925734d5ba661bb06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_67b40650c8375629bf8b2b13994eb400dfe75ec5e76036925734d5ba661bb06b->leave($__internal_67b40650c8375629bf8b2b13994eb400dfe75ec5e76036925734d5ba661bb06b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
