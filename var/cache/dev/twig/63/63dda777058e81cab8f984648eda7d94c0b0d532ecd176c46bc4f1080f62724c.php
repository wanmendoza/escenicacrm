<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_000ed600852b7a6774d2dfa71ca788a78efcbcab8c9f935ceea1e29d18ede08a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_12068ffde53b4fc1f2e0aa28274e9d218cfffb2816010c29ba08982210143b53 = $this->env->getExtension("native_profiler");
        $__internal_12068ffde53b4fc1f2e0aa28274e9d218cfffb2816010c29ba08982210143b53->enter($__internal_12068ffde53b4fc1f2e0aa28274e9d218cfffb2816010c29ba08982210143b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12068ffde53b4fc1f2e0aa28274e9d218cfffb2816010c29ba08982210143b53->leave($__internal_12068ffde53b4fc1f2e0aa28274e9d218cfffb2816010c29ba08982210143b53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e16b661a407524369ff1480fbdea6c72dc265f9eaf5256beda549850f2970c7 = $this->env->getExtension("native_profiler");
        $__internal_1e16b661a407524369ff1480fbdea6c72dc265f9eaf5256beda549850f2970c7->enter($__internal_1e16b661a407524369ff1480fbdea6c72dc265f9eaf5256beda549850f2970c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
<div>
    <a data-no-pjax class=\"btn btn-inverse btn-sm\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_1e16b661a407524369ff1480fbdea6c72dc265f9eaf5256beda549850f2970c7->leave($__internal_1e16b661a407524369ff1480fbdea6c72dc265f9eaf5256beda549850f2970c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* <div>*/
/*     <a data-no-pjax class="btn btn-inverse btn-sm" href="{{ path('fos_user_security_login') }}">{{ 'security.login.submit' | trans }}</a>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */
