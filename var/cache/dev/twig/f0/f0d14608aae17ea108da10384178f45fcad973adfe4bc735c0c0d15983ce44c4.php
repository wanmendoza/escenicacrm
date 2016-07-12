<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c9a9e7fea756307047a1205df0f108e81d0b66d1dfc7f6fdd59eed31d71205c0 extends Twig_Template
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
        $__internal_bc280fcf02c48b03a4346a2e29c63196ea22fad429808010a61b7e955dac15f2 = $this->env->getExtension("native_profiler");
        $__internal_bc280fcf02c48b03a4346a2e29c63196ea22fad429808010a61b7e955dac15f2->enter($__internal_bc280fcf02c48b03a4346a2e29c63196ea22fad429808010a61b7e955dac15f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc280fcf02c48b03a4346a2e29c63196ea22fad429808010a61b7e955dac15f2->leave($__internal_bc280fcf02c48b03a4346a2e29c63196ea22fad429808010a61b7e955dac15f2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a3dc8776c9abab982209fe98b5f51edf0d2bd9babfa19b89c965dc9d21c0d00 = $this->env->getExtension("native_profiler");
        $__internal_9a3dc8776c9abab982209fe98b5f51edf0d2bd9babfa19b89c965dc9d21c0d00->enter($__internal_9a3dc8776c9abab982209fe98b5f51edf0d2bd9babfa19b89c965dc9d21c0d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
    ";
        // line 7
        if (array_key_exists("error", $context)) {
            // line 8
            echo "        ";
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 9
                echo "            <div class=\"alert alert-danger fade in\">
                <button data-dismiss=\"alert\" class=\"close\">×</button>
                ";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), array(), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"_target_path\" value=\"grand_central\" />
    </form>
";
        
        $__internal_9a3dc8776c9abab982209fe98b5f51edf0d2bd9babfa19b89c965dc9d21c0d00->leave($__internal_9a3dc8776c9abab982209fe98b5f51edf0d2bd9babfa19b89c965dc9d21c0d00_prof);

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
        return array (  113 => 43,  105 => 40,  96 => 34,  84 => 26,  77 => 21,  69 => 18,  64 => 16,  61 => 15,  58 => 14,  52 => 11,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
