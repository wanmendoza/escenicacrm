<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_8a1977fa29e1ceedab7435cdba4eed296cc086cb333860d645f6ec164e3b4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_fe878f3f3d71e8715c4384a9a03b69b3489339829b0adc899170da4637fc7300 = $this->env->getExtension("native_profiler");
        $__internal_fe878f3f3d71e8715c4384a9a03b69b3489339829b0adc899170da4637fc7300->enter($__internal_fe878f3f3d71e8715c4384a9a03b69b3489339829b0adc899170da4637fc7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe878f3f3d71e8715c4384a9a03b69b3489339829b0adc899170da4637fc7300->leave($__internal_fe878f3f3d71e8715c4384a9a03b69b3489339829b0adc899170da4637fc7300_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c2b89943aafc741080e96e29bd36fa7b17a347d57aa459fbc8e76e857a337cb = $this->env->getExtension("native_profiler");
        $__internal_5c2b89943aafc741080e96e29bd36fa7b17a347d57aa459fbc8e76e857a337cb->enter($__internal_5c2b89943aafc741080e96e29bd36fa7b17a347d57aa459fbc8e76e857a337cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5c2b89943aafc741080e96e29bd36fa7b17a347d57aa459fbc8e76e857a337cb->leave($__internal_5c2b89943aafc741080e96e29bd36fa7b17a347d57aa459fbc8e76e857a337cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
