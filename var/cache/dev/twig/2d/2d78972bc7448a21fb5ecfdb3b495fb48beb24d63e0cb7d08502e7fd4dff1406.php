<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_bdf9cbd205ee7f15d8e2423ea1e9fb6da902b4ddb839f60233376542d291271e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8c5ed7c01ac8f76003edca0bc0d4432fcf9bc040dd13125bfc15b6bcedd33b2a = $this->env->getExtension("native_profiler");
        $__internal_8c5ed7c01ac8f76003edca0bc0d4432fcf9bc040dd13125bfc15b6bcedd33b2a->enter($__internal_8c5ed7c01ac8f76003edca0bc0d4432fcf9bc040dd13125bfc15b6bcedd33b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5ed7c01ac8f76003edca0bc0d4432fcf9bc040dd13125bfc15b6bcedd33b2a->leave($__internal_8c5ed7c01ac8f76003edca0bc0d4432fcf9bc040dd13125bfc15b6bcedd33b2a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ade2a53b134b060b2fe18fee13fee3adf7112d8b02a4845b7add428e6de2f7cd = $this->env->getExtension("native_profiler");
        $__internal_ade2a53b134b060b2fe18fee13fee3adf7112d8b02a4845b7add428e6de2f7cd->enter($__internal_ade2a53b134b060b2fe18fee13fee3adf7112d8b02a4845b7add428e6de2f7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ade2a53b134b060b2fe18fee13fee3adf7112d8b02a4845b7add428e6de2f7cd->leave($__internal_ade2a53b134b060b2fe18fee13fee3adf7112d8b02a4845b7add428e6de2f7cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
