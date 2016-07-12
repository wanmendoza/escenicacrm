<?php

/* WbcAdministratorBundle:user:edit.html.twig */
class __TwigTemplate_992ecd476137eb48bb519496aaf76ad43a67aaaf48059948380eda3acc84eb0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "WbcAdministratorBundle:user:edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit user"), "html", null, true);
        echo "</li>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User edit"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User edit"), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <section class=\"widget\">

                <div class=\"widget-body\">
                    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("role" => "form")));
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                        <fieldset>
                            <legend>General</legend>

                            <div class=\"form-group col-md-6\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'label');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'errors');
        echo "
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'label');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'errors');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "last_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'label');
        echo "
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'errors');
        echo "
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locale", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label');
        echo "
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'errors');
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'label');
        echo "
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "greeting", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'label');
        echo "
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'errors');
        echo "
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "timezone", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'errors');
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'label');
        echo "
                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'errors');
        echo "
                                <br>
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "enabled", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            </div>
                            ";
        // line 92
        echo "                        </fieldset>

                        <div class=\"hide\">
                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-rounded pull-right btn-submit\" style=\"margin-left: 5px;\" data-gerund=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Saving..."), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "\" />
                            <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\" class=\"btn btn-default btn-rounded pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </section>
        </div>
    </div>

    ";
        // line 109
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee2c9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f_0") : $this->env->getExtension('asset')->getAssetUrl("js/forms_form-elements_1.js");
            // line 111
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
        // line 113
        echo "
";
    }

    // line 116
    public function block_extrascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 116,  284 => 113,  270 => 111,  266 => 109,  257 => 103,  249 => 100,  243 => 99,  236 => 95,  231 => 92,  226 => 76,  221 => 74,  217 => 73,  211 => 70,  207 => 69,  203 => 68,  197 => 65,  193 => 64,  189 => 63,  183 => 60,  179 => 59,  175 => 58,  169 => 55,  165 => 54,  161 => 53,  155 => 50,  151 => 49,  147 => 48,  141 => 45,  137 => 44,  133 => 43,  127 => 40,  123 => 39,  119 => 38,  113 => 35,  109 => 34,  105 => 33,  99 => 30,  95 => 29,  91 => 28,  82 => 22,  78 => 21,  69 => 15,  64 => 14,  61 => 13,  54 => 10,  51 => 9,  45 => 6,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class=""><a href="{{ path('user_index') }}">{{ 'Users' | trans }}</a></li>*/
/*     <li class="active">{{ 'Edit user' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'User edit' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title">{{ 'User edit' | trans }}</h1>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <section class="widget">*/
/* */
/*                 <div class="widget-body">*/
/*                     {{ form_start(form, { 'attr': { 'role': 'form' } }) }}*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <fieldset>*/
/*                             <legend>General</legend>*/
/* */
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.first_name) }}*/
/*                                 {{ form_errors(form.first_name) }}*/
/*                                 {{ form_widget(form.first_name, { 'attr': {'class' : 'form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.last_name) }}*/
/*                                 {{ form_errors(form.last_name) }}*/
/*                                 {{ form_widget(form.last_name, { 'attr': {'class' : 'form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.locale) }}*/
/*                                 {{ form_errors(form.locale) }}*/
/*                                 {{ form_widget(form.locale, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.username) }}*/
/*                                 {{ form_errors(form.username) }}*/
/*                                 {{ form_widget(form.username, { 'attr': {'class' : 'form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.email) }}*/
/*                                 {{ form_errors(form.email) }}*/
/*                                 {{ form_widget(form.email, { 'attr': {'class' : 'form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.password) }}*/
/*                                 {{ form_errors(form.password) }}*/
/*                                 {{ form_widget(form.password, { 'attr': {'class' : 'form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.greeting) }}*/
/*                                 {{ form_errors(form.greeting) }}*/
/*                                 {{ form_widget(form.greeting, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.timezone) }}*/
/*                                 {{ form_errors(form.timezone) }}*/
/*                                 {{ form_widget(form.timezone, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-6">*/
/*                                 {{ form_label(form.role) }}*/
/*                                 {{ form_errors(form.role) }}*/
/*                                 {{ form_widget(form.role, { 'attr': {'class' : 'select2 form-control' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-2">*/
/*                                 {{ form_label(form.enabled) }}*/
/*                                 {{ form_errors(form.enabled) }}*/
/*                                 <br>*/
/*                                 {{ form_widget(form.enabled, { 'attr': {'class' : '' } }) }}*/
/*                             </div>*/
/*                             {#*/
/*                             <div class="form-group col-md-2">*/
/*                                 {{ form_label(form.expired) }}*/
/*                                 {{ form_errors(form.expired) }}*/
/*                                 <br>*/
/*                                 {{ form_widget(form.expired, { 'attr': {'class' : '' } }) }}*/
/*                             </div>*/
/*                             <div class="form-group col-md-2">*/
/*                                 {{ form_label(form.locked) }}*/
/*                                 {{ form_errors(form.locked) }}*/
/*                                 <br>*/
/*                                 {{ form_widget(form.locked, { 'attr': {'class' : '' } }) }}*/
/*                             </div>*/
/*                             #}*/
/*                         </fieldset>*/
/* */
/*                         <div class="hide">*/
/*                             {{ form_rest(form) }}*/
/*                         </div>*/
/* */
/*                         <div class="form-actions">*/
/*                             <input type="submit" class="btn btn-primary btn-rounded pull-right btn-submit" style="margin-left: 5px;" data-gerund="{{ 'Saving...' | trans }}" value="{{ 'Save' | trans }}" />*/
/*                             <a href="{{ path('user_index') }}" class="btn btn-default btn-rounded pull-right">{{ 'Cancel' | trans }}</a>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
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
