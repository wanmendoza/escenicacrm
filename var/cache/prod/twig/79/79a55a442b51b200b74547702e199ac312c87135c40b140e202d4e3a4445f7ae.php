<?php

/* WbcAdministratorBundle:user:new.html.twig */
class __TwigTemplate_28c99a7add13fa02a607e733610030b6fdc6f876af6e4ac161e170f9165964ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "WbcAdministratorBundle:user:new.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'extrascripts' => array($this, 'block_extrascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WbcThemeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Users"), "html", null, true);
        echo "</a></li>
    <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New user"), "html", null, true);
        echo "</li>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User creation"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User creation"), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <section class=\"widget\">

                <div class=\"widget-body\">
                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("role" => "form")));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                    <fieldset>
                        <legend>General</legend>

                        <div class=\"form-group col-md-6\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'label');
        echo "
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'errors');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'label');
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'errors');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'label');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'errors');
        echo "
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'label');
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'label');
        echo "
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'errors');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'label');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'errors');
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-2\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'label');
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'errors');
        echo "
                            <br>
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                        ";
        // line 93
        echo "                    </fieldset>

                    <div class=\"hide\">
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                    </div>

                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary btn-rounded pull-right btn-submit\" style=\"margin-left: 5px;\" data-gerund=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Saving..."), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "\" />
                        <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-default btn-rounded pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                        <div class=\"clearfix\"></div>
                    </div>
                    ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </section>
        </div>
    </div>

    ";
        // line 110
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee2c9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f_0") : $this->env->getExtension('asset')->getAssetUrl("js/forms_form-elements_1.js");
            // line 112
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bee2c9f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f") : $this->env->getExtension('asset')->getAssetUrl("js/forms.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 114
        echo "
";
    }

    // line 117
    public function block_extrascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 117,  285 => 114,  271 => 112,  267 => 110,  258 => 104,  250 => 101,  244 => 100,  237 => 96,  232 => 93,  227 => 77,  222 => 75,  218 => 74,  212 => 71,  208 => 70,  204 => 69,  198 => 66,  194 => 65,  190 => 64,  184 => 61,  180 => 60,  176 => 59,  170 => 56,  166 => 55,  162 => 54,  156 => 51,  152 => 50,  148 => 49,  142 => 46,  138 => 45,  134 => 44,  128 => 41,  124 => 40,  120 => 39,  114 => 36,  110 => 35,  106 => 34,  100 => 31,  96 => 30,  92 => 29,  83 => 23,  79 => 22,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  45 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class=""><a href="{{ path('user_index') }}">{{ 'Users' | trans }}</a></li>*/
/*     <li class="active">{{ 'New user' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'User creation' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title">{{ 'User creation' | trans }}</h1>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <section class="widget">*/
/* */
/*                 <div class="widget-body">*/
/*                     {{ form_start(form, { 'attr': { 'role': 'form' } }) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/*                     <fieldset>*/
/*                         <legend>General</legend>*/
/* */
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.first_name) }}*/
/*                             {{ form_errors(form.first_name) }}*/
/*                             {{ form_widget(form.first_name, { 'attr': {'class' : 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.last_name) }}*/
/*                             {{ form_errors(form.last_name) }}*/
/*                             {{ form_widget(form.last_name, { 'attr': {'class' : 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.locale) }}*/
/*                             {{ form_errors(form.locale) }}*/
/*                             {{ form_widget(form.locale, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.username) }}*/
/*                             {{ form_errors(form.username) }}*/
/*                             {{ form_widget(form.username, { 'attr': {'class' : 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.email) }}*/
/*                             {{ form_errors(form.email) }}*/
/*                             {{ form_widget(form.email, { 'attr': {'class' : 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.password) }}*/
/*                             {{ form_errors(form.password) }}*/
/*                             {{ form_widget(form.password, { 'attr': {'class' : 'form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.greeting) }}*/
/*                             {{ form_errors(form.greeting) }}*/
/*                             {{ form_widget(form.greeting, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.timezone) }}*/
/*                             {{ form_errors(form.timezone) }}*/
/*                             {{ form_widget(form.timezone, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-6">*/
/*                             {{ form_label(form.role) }}*/
/*                             {{ form_errors(form.role) }}*/
/*                             {{ form_widget(form.role, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-2">*/
/*                             {{ form_label(form.enabled) }}*/
/*                             {{ form_errors(form.enabled) }}*/
/*                             <br>*/
/*                             {{ form_widget(form.enabled, { 'attr': {'class' : '' } }) }}*/
/*                         </div>*/
/*                         {#*/
/*                         <div class="form-group col-md-2">*/
/*                             {{ form_label(form.expired) }}*/
/*                             {{ form_errors(form.expired) }}*/
/*                             <br>*/
/*                             {{ form_widget(form.expired, { 'attr': {'class' : '' } }) }}*/
/*                         </div>*/
/*                         <div class="form-group col-md-2">*/
/*                             {{ form_label(form.locked) }}*/
/*                             {{ form_errors(form.locked) }}*/
/*                             <br>*/
/*                             {{ form_widget(form.locked, { 'attr': {'class' : '' } }) }}*/
/*                         </div>*/
/*                         #}*/
/*                     </fieldset>*/
/* */
/*                     <div class="hide">*/
/*                         {{ form_rest(form) }}*/
/*                     </div>*/
/* */
/*                     <div class="form-actions">*/
/*                         <input type="submit" class="btn btn-primary btn-rounded pull-right btn-submit" style="margin-left: 5px;" data-gerund="{{ 'Saving...' | trans }}" value="{{ 'Save' | trans }}" />*/
/*                         <a href="{{ path('user_index') }}" class="btn btn-default btn-rounded pull-right">{{ 'Cancel' | trans }}</a>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% javascripts output='js/forms.js' filter="?jsqueeze"*/
/*     'bundles/wbctheme/js/form-elements.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block extrascripts %}*/
/* {% endblock %}*/
