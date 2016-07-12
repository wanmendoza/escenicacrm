<?php

/* WbcAdministratorBundle:user:new.html.twig */
class __TwigTemplate_9f8001eb5609272230341540395f12b3c5773af8eecbb4a5aa7bbba4e4fe6ff9 extends Twig_Template
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
        $__internal_631880a20a08f3a157f32f3257e540e0f36a6930f02fdf2feaa2bbc154a8fc80 = $this->env->getExtension("native_profiler");
        $__internal_631880a20a08f3a157f32f3257e540e0f36a6930f02fdf2feaa2bbc154a8fc80->enter($__internal_631880a20a08f3a157f32f3257e540e0f36a6930f02fdf2feaa2bbc154a8fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcAdministratorBundle:user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_631880a20a08f3a157f32f3257e540e0f36a6930f02fdf2feaa2bbc154a8fc80->leave($__internal_631880a20a08f3a157f32f3257e540e0f36a6930f02fdf2feaa2bbc154a8fc80_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3552709d751ab5ead7173bfd3d4dab3d5ff609ec533ab12ada201178043bd083 = $this->env->getExtension("native_profiler");
        $__internal_3552709d751ab5ead7173bfd3d4dab3d5ff609ec533ab12ada201178043bd083->enter($__internal_3552709d751ab5ead7173bfd3d4dab3d5ff609ec533ab12ada201178043bd083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_3552709d751ab5ead7173bfd3d4dab3d5ff609ec533ab12ada201178043bd083->leave($__internal_3552709d751ab5ead7173bfd3d4dab3d5ff609ec533ab12ada201178043bd083_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_49a41d7e0032f72df8b52ff6b153c777eea19593f1996e68b9ca9a5f3ce42dd6 = $this->env->getExtension("native_profiler");
        $__internal_49a41d7e0032f72df8b52ff6b153c777eea19593f1996e68b9ca9a5f3ce42dd6->enter($__internal_49a41d7e0032f72df8b52ff6b153c777eea19593f1996e68b9ca9a5f3ce42dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User creation"), "html", null, true);
        echo "
";
        
        $__internal_49a41d7e0032f72df8b52ff6b153c777eea19593f1996e68b9ca9a5f3ce42dd6->leave($__internal_49a41d7e0032f72df8b52ff6b153c777eea19593f1996e68b9ca9a5f3ce42dd6_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a9be5cd9a0318604ce783e90ae589362e8688e0a8fff9c7421cc29d03f25a2d = $this->env->getExtension("native_profiler");
        $__internal_0a9be5cd9a0318604ce783e90ae589362e8688e0a8fff9c7421cc29d03f25a2d->enter($__internal_0a9be5cd9a0318604ce783e90ae589362e8688e0a8fff9c7421cc29d03f25a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <fieldset>
                        <legend>General</legend>

                        <div class=\"form-group col-md-6\">
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label');
        echo "
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo "
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label');
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo "
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'label');
        echo "
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'errors');
        echo "
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'label');
        echo "
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'errors');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'label');
        echo "
                            ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'errors');
        echo "
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6\">
                            ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "
                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-2\">
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'errors');
        echo "
                            <br>
                            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                        ";
        // line 93
        echo "                    </fieldset>

                    <div class=\"hide\">
                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section>
        </div>
    </div>

    ";
        // line 110
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee2c9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/forms_form-elements_1.js");
            // line 112
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "bee2c9f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/forms.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 114
        echo "
";
        
        $__internal_0a9be5cd9a0318604ce783e90ae589362e8688e0a8fff9c7421cc29d03f25a2d->leave($__internal_0a9be5cd9a0318604ce783e90ae589362e8688e0a8fff9c7421cc29d03f25a2d_prof);

    }

    // line 117
    public function block_extrascripts($context, array $blocks = array())
    {
        $__internal_5d01191de414cba3bcc12bc55928edf3d348386c5504e3579b23dcae78404bae = $this->env->getExtension("native_profiler");
        $__internal_5d01191de414cba3bcc12bc55928edf3d348386c5504e3579b23dcae78404bae->enter($__internal_5d01191de414cba3bcc12bc55928edf3d348386c5504e3579b23dcae78404bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascripts"));

        
        $__internal_5d01191de414cba3bcc12bc55928edf3d348386c5504e3579b23dcae78404bae->leave($__internal_5d01191de414cba3bcc12bc55928edf3d348386c5504e3579b23dcae78404bae_prof);

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
        return array (  314 => 117,  306 => 114,  292 => 112,  288 => 110,  279 => 104,  271 => 101,  265 => 100,  258 => 96,  253 => 93,  248 => 77,  243 => 75,  239 => 74,  233 => 71,  229 => 70,  225 => 69,  219 => 66,  215 => 65,  211 => 64,  205 => 61,  201 => 60,  197 => 59,  191 => 56,  187 => 55,  183 => 54,  177 => 51,  173 => 50,  169 => 49,  163 => 46,  159 => 45,  155 => 44,  149 => 41,  145 => 40,  141 => 39,  135 => 36,  131 => 35,  127 => 34,  121 => 31,  117 => 30,  113 => 29,  104 => 23,  100 => 22,  90 => 15,  85 => 14,  79 => 13,  69 => 10,  63 => 9,  54 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
