<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_83a53295fc99c1e130fd534becb4839427c5433d9125055dca922f43af75982b extends Twig_Template
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
        $__internal_aea92c09492cb53d20d0e7e22b813fdd29ca98b02b7c8cc3a64faeb2ce5012c8 = $this->env->getExtension("native_profiler");
        $__internal_aea92c09492cb53d20d0e7e22b813fdd29ca98b02b7c8cc3a64faeb2ce5012c8->enter($__internal_aea92c09492cb53d20d0e7e22b813fdd29ca98b02b7c8cc3a64faeb2ce5012c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aea92c09492cb53d20d0e7e22b813fdd29ca98b02b7c8cc3a64faeb2ce5012c8->leave($__internal_aea92c09492cb53d20d0e7e22b813fdd29ca98b02b7c8cc3a64faeb2ce5012c8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_48cc19103ccf40e97b05aaff5ad87521f0799d7007017ff5f0589506a7f490d6 = $this->env->getExtension("native_profiler");
        $__internal_48cc19103ccf40e97b05aaff5ad87521f0799d7007017ff5f0589506a7f490d6->enter($__internal_48cc19103ccf40e97b05aaff5ad87521f0799d7007017ff5f0589506a7f490d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48cc19103ccf40e97b05aaff5ad87521f0799d7007017ff5f0589506a7f490d6->leave($__internal_48cc19103ccf40e97b05aaff5ad87521f0799d7007017ff5f0589506a7f490d6_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_45fff0be760fd7e2c4c89dc130a51f65f0aef7a2f55d8e2e25dec781aa22cfeb = $this->env->getExtension("native_profiler");
        $__internal_45fff0be760fd7e2c4c89dc130a51f65f0aef7a2f55d8e2e25dec781aa22cfeb->enter($__internal_45fff0be760fd7e2c4c89dc130a51f65f0aef7a2f55d8e2e25dec781aa22cfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_45fff0be760fd7e2c4c89dc130a51f65f0aef7a2f55d8e2e25dec781aa22cfeb->leave($__internal_45fff0be760fd7e2c4c89dc130a51f65f0aef7a2f55d8e2e25dec781aa22cfeb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b780aeedf4fb0d4c24d197feb44deef056583675f50877b3f62260d12c2f1a4d = $this->env->getExtension("native_profiler");
        $__internal_b780aeedf4fb0d4c24d197feb44deef056583675f50877b3f62260d12c2f1a4d->enter($__internal_b780aeedf4fb0d4c24d197feb44deef056583675f50877b3f62260d12c2f1a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b780aeedf4fb0d4c24d197feb44deef056583675f50877b3f62260d12c2f1a4d->leave($__internal_b780aeedf4fb0d4c24d197feb44deef056583675f50877b3f62260d12c2f1a4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
