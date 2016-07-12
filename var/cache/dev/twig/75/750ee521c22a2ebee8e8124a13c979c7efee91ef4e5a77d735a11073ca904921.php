<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ab250f49bcf91186da8b2f89ddfa25c156fb16f3b7f28eabe12674e5862a24bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_54f5ced0cdaabff5dbe68c80e38c01c09eb3eea4d9469b0d8f905089b21c1ca1 = $this->env->getExtension("native_profiler");
        $__internal_54f5ced0cdaabff5dbe68c80e38c01c09eb3eea4d9469b0d8f905089b21c1ca1->enter($__internal_54f5ced0cdaabff5dbe68c80e38c01c09eb3eea4d9469b0d8f905089b21c1ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f5ced0cdaabff5dbe68c80e38c01c09eb3eea4d9469b0d8f905089b21c1ca1->leave($__internal_54f5ced0cdaabff5dbe68c80e38c01c09eb3eea4d9469b0d8f905089b21c1ca1_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aad731619f43fbb329a894b983027f50bfbdc79bfd18e6070f946d33b1bbadbc = $this->env->getExtension("native_profiler");
        $__internal_aad731619f43fbb329a894b983027f50bfbdc79bfd18e6070f946d33b1bbadbc->enter($__internal_aad731619f43fbb329a894b983027f50bfbdc79bfd18e6070f946d33b1bbadbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
        <div>
            ";
        // line 7
        if (array_key_exists("invalid_username", $context)) {
            // line 8
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
            ";
        }
        // line 10
        echo "
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
        </div>
        <br>
        <div>
            <a data-no-pjax class=\"btn btn-default btn-sm\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
            <input class=\"btn btn-inverse btn-sm\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>
    </form>

";
        
        $__internal_aad731619f43fbb329a894b983027f50bfbdc79bfd18e6070f946d33b1bbadbc->leave($__internal_aad731619f43fbb329a894b983027f50bfbdc79bfd18e6070f946d33b1bbadbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  64 => 15,  57 => 11,  54 => 10,  48 => 8,  46 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*         <div>*/
/*             {% if invalid_username is defined %}*/
/*                 <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}) }}</p>*/
/*             {% endif %}*/
/* */
/*             <input class="form-control" placeholder="{{ 'resetting.request.username'|trans }}" type="text" id="username" name="username" required="required" />*/
/*         </div>*/
/*         <br>*/
/*         <div>*/
/*             <a data-no-pjax class="btn btn-default btn-sm" href="{{ path('fos_user_security_login') }}">{{ 'security.login.submit' | trans }}</a>*/
/*             <input class="btn btn-inverse btn-sm" type="submit" value="{{ 'resetting.request.submit'|trans }}" />*/
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
