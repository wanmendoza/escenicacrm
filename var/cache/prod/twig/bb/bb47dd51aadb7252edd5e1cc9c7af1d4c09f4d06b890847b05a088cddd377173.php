<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_8db0c8450c4c7910105aaf2d15637946d25a1913243837e581c505acc9916702 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
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
        return array (  61 => 16,  55 => 15,  48 => 11,  45 => 10,  39 => 8,  37 => 7,  31 => 5,  28 => 4,  11 => 1,);
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
