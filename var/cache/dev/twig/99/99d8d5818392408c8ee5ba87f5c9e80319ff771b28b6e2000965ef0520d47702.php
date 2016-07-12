<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ec7572c335d797e76cba048a80a674a6a9cca57e1a014034c40864f38c9b52ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d45ad313a332f8a4ba09deb504f790bd5120f5072e04fe1265758266697cd3a8 = $this->env->getExtension("native_profiler");
        $__internal_d45ad313a332f8a4ba09deb504f790bd5120f5072e04fe1265758266697cd3a8->enter($__internal_d45ad313a332f8a4ba09deb504f790bd5120f5072e04fe1265758266697cd3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d45ad313a332f8a4ba09deb504f790bd5120f5072e04fe1265758266697cd3a8->leave($__internal_d45ad313a332f8a4ba09deb504f790bd5120f5072e04fe1265758266697cd3a8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e8133cd30acfc861e919f08c11776387405b267e651a18f10ed330b549392ce = $this->env->getExtension("native_profiler");
        $__internal_3e8133cd30acfc861e919f08c11776387405b267e651a18f10ed330b549392ce->enter($__internal_3e8133cd30acfc861e919f08c11776387405b267e651a18f10ed330b549392ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3e8133cd30acfc861e919f08c11776387405b267e651a18f10ed330b549392ce->leave($__internal_3e8133cd30acfc861e919f08c11776387405b267e651a18f10ed330b549392ce_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_010091f5c12d3acb89f9bbcec5efe7d5b2351704a7c832b49087f7666868cff8 = $this->env->getExtension("native_profiler");
        $__internal_010091f5c12d3acb89f9bbcec5efe7d5b2351704a7c832b49087f7666868cff8->enter($__internal_010091f5c12d3acb89f9bbcec5efe7d5b2351704a7c832b49087f7666868cff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_010091f5c12d3acb89f9bbcec5efe7d5b2351704a7c832b49087f7666868cff8->leave($__internal_010091f5c12d3acb89f9bbcec5efe7d5b2351704a7c832b49087f7666868cff8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0d8673fc5ed8289c11f08165745d834e7b45b3cf4cb0fd05b92a34b4610fa4d6 = $this->env->getExtension("native_profiler");
        $__internal_0d8673fc5ed8289c11f08165745d834e7b45b3cf4cb0fd05b92a34b4610fa4d6->enter($__internal_0d8673fc5ed8289c11f08165745d834e7b45b3cf4cb0fd05b92a34b4610fa4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0d8673fc5ed8289c11f08165745d834e7b45b3cf4cb0fd05b92a34b4610fa4d6->leave($__internal_0d8673fc5ed8289c11f08165745d834e7b45b3cf4cb0fd05b92a34b4610fa4d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
