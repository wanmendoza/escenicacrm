<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ce5abae3bbe294d2c5e92560b516f1ddb319f49add55a21d9323c23aaffa9c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_4cc713c310e8050fa0866818835e8f1733286e72f1391fb4f4c6bebfa8f245a3 = $this->env->getExtension("native_profiler");
        $__internal_4cc713c310e8050fa0866818835e8f1733286e72f1391fb4f4c6bebfa8f245a3->enter($__internal_4cc713c310e8050fa0866818835e8f1733286e72f1391fb4f4c6bebfa8f245a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc713c310e8050fa0866818835e8f1733286e72f1391fb4f4c6bebfa8f245a3->leave($__internal_4cc713c310e8050fa0866818835e8f1733286e72f1391fb4f4c6bebfa8f245a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f242a50124a44c285ec84630c4f9b0458042f25f314c4e895eb42520a1a0673 = $this->env->getExtension("native_profiler");
        $__internal_4f242a50124a44c285ec84630c4f9b0458042f25f314c4e895eb42520a1a0673->enter($__internal_4f242a50124a44c285ec84630c4f9b0458042f25f314c4e895eb42520a1a0673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_4f242a50124a44c285ec84630c4f9b0458042f25f314c4e895eb42520a1a0673->leave($__internal_4f242a50124a44c285ec84630c4f9b0458042f25f314c4e895eb42520a1a0673_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
