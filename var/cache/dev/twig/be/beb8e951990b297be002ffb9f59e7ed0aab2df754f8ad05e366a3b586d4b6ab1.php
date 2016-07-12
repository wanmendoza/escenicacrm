<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_eee8526a034246f74da8e28ecbbc9a340b148abd95c6f1d5d7a781863eea74a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_1c5b6887ac1c8648eb2556d760b44d94fccadf05b5f3608e4b2193f820d88773 = $this->env->getExtension("native_profiler");
        $__internal_1c5b6887ac1c8648eb2556d760b44d94fccadf05b5f3608e4b2193f820d88773->enter($__internal_1c5b6887ac1c8648eb2556d760b44d94fccadf05b5f3608e4b2193f820d88773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5b6887ac1c8648eb2556d760b44d94fccadf05b5f3608e4b2193f820d88773->leave($__internal_1c5b6887ac1c8648eb2556d760b44d94fccadf05b5f3608e4b2193f820d88773_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f77273b393a140e5c95b5a2e01f8b04faffbf18e4108330aee896b5537b7ab9 = $this->env->getExtension("native_profiler");
        $__internal_1f77273b393a140e5c95b5a2e01f8b04faffbf18e4108330aee896b5537b7ab9->enter($__internal_1f77273b393a140e5c95b5a2e01f8b04faffbf18e4108330aee896b5537b7ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
<div>
    <a class=\"btn btn-inverse btn-sm\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_1f77273b393a140e5c95b5a2e01f8b04faffbf18e4108330aee896b5537b7ab9->leave($__internal_1f77273b393a140e5c95b5a2e01f8b04faffbf18e4108330aee896b5537b7ab9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* <div>*/
/*     <a class="btn btn-inverse btn-sm" href="{{ path('fos_user_security_login') }}">{{ 'security.login.submit' | trans }}</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
