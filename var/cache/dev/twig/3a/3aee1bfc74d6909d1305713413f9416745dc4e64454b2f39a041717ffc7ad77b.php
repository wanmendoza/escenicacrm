<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_dd548b220b91fb48a832c3d2fa074fc27ecd117a44484404b425432673ece97b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_859c0ba9a1820a253b78d43dc0d0f3363decd3c76a1f2b0581c940a518870bf3 = $this->env->getExtension("native_profiler");
        $__internal_859c0ba9a1820a253b78d43dc0d0f3363decd3c76a1f2b0581c940a518870bf3->enter($__internal_859c0ba9a1820a253b78d43dc0d0f3363decd3c76a1f2b0581c940a518870bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <a data-no-pjax class=\"btn btn-default btn-sm\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
        <input class=\"btn btn-inversed btn-sm\" type=\"submit\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_859c0ba9a1820a253b78d43dc0d0f3363decd3c76a1f2b0581c940a518870bf3->leave($__internal_859c0ba9a1820a253b78d43dc0d0f3363decd3c76a1f2b0581c940a518870bf3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <a data-no-pjax class="btn btn-default btn-sm" href="{{ path('fos_user_security_login') }}">{{ 'security.login.submit' | trans }}</a>*/
/*         <input class="btn btn-inversed btn-sm" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
