<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_06cf0e8444e429ec64ea8d21712798ea52571f2bc7a1c46f362be5ecc72f6d57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if (array_key_exists("error", $context)) {
            // line 8
            echo "        ";
            if ((isset($context["error"]) ? $context["error"] : null)) {
                // line 9
                echo "            <div class=\"alert alert-danger fade in\">
                <button data-dismiss=\"alert\" class=\"close\">×</button>
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), array(), "security"), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login-form mt-lg\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\">
        </div>
        <div class=\"form-group\">
            <input class=\"form-control\" id=\"pswd\" type=\"password\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_password\">
        </div>
        <div class=\"clearfix\">
            <div class=\"btn-toolbar pull-right\">
                ";
        // line 26
        echo "                <input type=\"submit\" class=\"btn btn-inverse btn-sm\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-push-6\">
                <div class=\"clearfix\">
                    <div class=\"checkbox widget-login-info pull-right ml-n-lg\">
                        <input type=\"checkbox\" id=\"checkbox1\" value=\"on\" name=\"_submit\">
                        <label for=\"checkbox1\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-6 col-sm-pull-6\">
                <a class=\"mr-n-lg\" data-no-pjax href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
            </div>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"_target_path\" value=\"grand_central\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 43,  96 => 40,  87 => 34,  75 => 26,  68 => 21,  60 => 18,  55 => 16,  52 => 15,  49 => 14,  43 => 11,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/*     {% if error is defined %}*/
/*         {% if error %}*/
/*             <div class="alert alert-danger fade in">*/
/*                 <button data-dismiss="alert" class="close">×</button>*/
/*                 {{ error.messageKey |trans({}, 'security') }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path("fos_user_security_check") }}" method="post" class="login-form mt-lg">*/
/*         <div class="form-group">*/
/*             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{ 'security.login.username'|trans }}" name="_username" value="{{ last_username }}" required="required">*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <input class="form-control" id="pswd" type="password" placeholder="{{ 'security.login.password'|trans }}" name="_password">*/
/*         </div>*/
/*         <div class="clearfix">*/
/*             <div class="btn-toolbar pull-right">*/
/*                 {# <button type="button" class="btn btn-default btn-sm">Create an Account</button> #}*/
/*                 <input type="submit" class="btn btn-inverse btn-sm" value="{{ 'security.login.submit'|trans }}" />*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-sm-push-6">*/
/*                 <div class="clearfix">*/
/*                     <div class="checkbox widget-login-info pull-right ml-n-lg">*/
/*                         <input type="checkbox" id="checkbox1" value="on" name="_submit">*/
/*                         <label for="checkbox1">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-6 col-sm-pull-6">*/
/*                 <a class="mr-n-lg" data-no-pjax href="{{ path('fos_user_resetting_request') }}">{{ 'resetting.request.submit' | trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         <input type="hidden" name="_target_path" value="grand_central" />*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */
