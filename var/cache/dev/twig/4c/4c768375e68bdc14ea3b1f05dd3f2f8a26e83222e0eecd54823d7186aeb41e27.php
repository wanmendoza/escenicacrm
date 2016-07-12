<?php

/* WbcAdministratorBundle:user:edit.html.twig */
class __TwigTemplate_96932a0c0a34cdba15373407641a71bb12134dda2f91457a61a2f4fbf92333c9 extends Twig_Template
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
        $__internal_448ae7fb523b387457e3ff4a2ceead392f012b7e3ff037612243747eca690111 = $this->env->getExtension("native_profiler");
        $__internal_448ae7fb523b387457e3ff4a2ceead392f012b7e3ff037612243747eca690111->enter($__internal_448ae7fb523b387457e3ff4a2ceead392f012b7e3ff037612243747eca690111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcAdministratorBundle:user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448ae7fb523b387457e3ff4a2ceead392f012b7e3ff037612243747eca690111->leave($__internal_448ae7fb523b387457e3ff4a2ceead392f012b7e3ff037612243747eca690111_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_77d1f800c275d127500fd06be40249f8c327226ea6d334ebc60aa83cab83c2ae = $this->env->getExtension("native_profiler");
        $__internal_77d1f800c275d127500fd06be40249f8c327226ea6d334ebc60aa83cab83c2ae->enter($__internal_77d1f800c275d127500fd06be40249f8c327226ea6d334ebc60aa83cab83c2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_77d1f800c275d127500fd06be40249f8c327226ea6d334ebc60aa83cab83c2ae->leave($__internal_77d1f800c275d127500fd06be40249f8c327226ea6d334ebc60aa83cab83c2ae_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a109b505edfbaaa59baadd5a5027ca8b0652a5ac545bf299f9499394c0fc3bcc = $this->env->getExtension("native_profiler");
        $__internal_a109b505edfbaaa59baadd5a5027ca8b0652a5ac545bf299f9499394c0fc3bcc->enter($__internal_a109b505edfbaaa59baadd5a5027ca8b0652a5ac545bf299f9499394c0fc3bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User edit"), "html", null, true);
        echo "
";
        
        $__internal_a109b505edfbaaa59baadd5a5027ca8b0652a5ac545bf299f9499394c0fc3bcc->leave($__internal_a109b505edfbaaa59baadd5a5027ca8b0652a5ac545bf299f9499394c0fc3bcc_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c8bfa59ab48d1eb7c2f0d2a17a8974ab8f083208c12149d1c6037c4f740e6bc = $this->env->getExtension("native_profiler");
        $__internal_0c8bfa59ab48d1eb7c2f0d2a17a8974ab8f083208c12149d1c6037c4f740e6bc->enter($__internal_0c8bfa59ab48d1eb7c2f0d2a17a8974ab8f083208c12149d1c6037c4f740e6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                        <fieldset>
                            <legend>General</legend>

                            <div class=\"form-group col-md-6\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'label');
        echo "
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo "
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'label');
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'label');
        echo "
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'errors');
        echo "
                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locale", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'label');
        echo "
                                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'errors');
        echo "
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "greeting", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'label');
        echo "
                                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'errors');
        echo "
                                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "timezone", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-6\">
                                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "
                                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "select2 form-control")));
        echo "
                            </div>
                            <div class=\"form-group col-md-2\">
                                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'label');
        echo "
                                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'errors');
        echo "
                                <br>
                                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enabled", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                            </div>
                            ";
        // line 92
        echo "                        </fieldset>

                        <div class=\"hide\">
                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section>
        </div>
    </div>

    ";
        // line 109
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee2c9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/forms_form-elements_1.js");
            // line 111
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
        // line 113
        echo "
";
        
        $__internal_0c8bfa59ab48d1eb7c2f0d2a17a8974ab8f083208c12149d1c6037c4f740e6bc->leave($__internal_0c8bfa59ab48d1eb7c2f0d2a17a8974ab8f083208c12149d1c6037c4f740e6bc_prof);

    }

    // line 116
    public function block_extrascripts($context, array $blocks = array())
    {
        $__internal_5f29ed2bd131843310d37b809fb4b0c1f017e67e1af6fd323f67e2aa0caf0224 = $this->env->getExtension("native_profiler");
        $__internal_5f29ed2bd131843310d37b809fb4b0c1f017e67e1af6fd323f67e2aa0caf0224->enter($__internal_5f29ed2bd131843310d37b809fb4b0c1f017e67e1af6fd323f67e2aa0caf0224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascripts"));

        
        $__internal_5f29ed2bd131843310d37b809fb4b0c1f017e67e1af6fd323f67e2aa0caf0224->leave($__internal_5f29ed2bd131843310d37b809fb4b0c1f017e67e1af6fd323f67e2aa0caf0224_prof);

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
        return array (  313 => 116,  305 => 113,  291 => 111,  287 => 109,  278 => 103,  270 => 100,  264 => 99,  257 => 95,  252 => 92,  247 => 76,  242 => 74,  238 => 73,  232 => 70,  228 => 69,  224 => 68,  218 => 65,  214 => 64,  210 => 63,  204 => 60,  200 => 59,  196 => 58,  190 => 55,  186 => 54,  182 => 53,  176 => 50,  172 => 49,  168 => 48,  162 => 45,  158 => 44,  154 => 43,  148 => 40,  144 => 39,  140 => 38,  134 => 35,  130 => 34,  126 => 33,  120 => 30,  116 => 29,  112 => 28,  103 => 22,  99 => 21,  90 => 15,  85 => 14,  79 => 13,  69 => 10,  63 => 9,  54 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
