<?php

/* :permission:new.html.twig */
class __TwigTemplate_d436c3d59c8f0da3ea781ca3ae0ea8a9a2b59ba04eba95e529d188e4d39560e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", ":permission:new.html.twig", 1);
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
        $__internal_41c3c59a6e8c3b2f982051771cc48133adcfcd1d87544f57cf0b58ff76bc1425 = $this->env->getExtension("native_profiler");
        $__internal_41c3c59a6e8c3b2f982051771cc48133adcfcd1d87544f57cf0b58ff76bc1425->enter($__internal_41c3c59a6e8c3b2f982051771cc48133adcfcd1d87544f57cf0b58ff76bc1425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":permission:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c3c59a6e8c3b2f982051771cc48133adcfcd1d87544f57cf0b58ff76bc1425->leave($__internal_41c3c59a6e8c3b2f982051771cc48133adcfcd1d87544f57cf0b58ff76bc1425_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cc18a8b2ff66a10bccab29b7b113db36651bd839a1fee6d86939752a7ba2335b = $this->env->getExtension("native_profiler");
        $__internal_cc18a8b2ff66a10bccab29b7b113db36651bd839a1fee6d86939752a7ba2335b->enter($__internal_cc18a8b2ff66a10bccab29b7b113db36651bd839a1fee6d86939752a7ba2335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("permission_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
        echo "</a></li>
    <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission creation"), "html", null, true);
        echo "</li>
";
        
        $__internal_cc18a8b2ff66a10bccab29b7b113db36651bd839a1fee6d86939752a7ba2335b->leave($__internal_cc18a8b2ff66a10bccab29b7b113db36651bd839a1fee6d86939752a7ba2335b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_679c810a297da9060dc6768c1c9ced7c63418014fe447bc185449cf30297bead = $this->env->getExtension("native_profiler");
        $__internal_679c810a297da9060dc6768c1c9ced7c63418014fe447bc185449cf30297bead->enter($__internal_679c810a297da9060dc6768c1c9ced7c63418014fe447bc185449cf30297bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission creation"), "html", null, true);
        echo "
";
        
        $__internal_679c810a297da9060dc6768c1c9ced7c63418014fe447bc185449cf30297bead->leave($__internal_679c810a297da9060dc6768c1c9ced7c63418014fe447bc185449cf30297bead_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_766b31a75778b646914caa6df80ee46c174ffd7a95f7c46472d5e95d424786e6 = $this->env->getExtension("native_profiler");
        $__internal_766b31a75778b646914caa6df80ee46c174ffd7a95f7c46472d5e95d424786e6->enter($__internal_766b31a75778b646914caa6df80ee46c174ffd7a95f7c46472d5e95d424786e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission creation"), "html", null, true);
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
                            <legend>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("General"), "html", null, true);
        echo "</legend>

                            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 28
            echo "                                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "hidden")) {
                // line 29
                echo "
                                ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 30
$context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "text") && ($this->getAttribute($this->getAttribute($this->getAttribute($context["input"], "vars", array()), "block_prefixes", array()), 2, array(), "array") == "textarea"))) {
                // line 31
                echo "                                    <div class=\"form-group col-md-12\">
                                        ";
                // line 32
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                        ";
                // line 33
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                        ";
                // line 34
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget');
                echo "
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 36
$context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "checkbox")) {
                // line 37
                echo "                                    <div class=\"form-group col-md-2\">
                                        <div class=\"checkbox checkbox-primary\">
                                            ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget');
                echo "
                                            ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                            ";
                // line 41
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                        </div>
                                    </div>
                                ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 44
$context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "choice") && $this->getAttribute($this->getAttribute($context["input"], "vars", array()), "expanded", array()))) {
                // line 45
                echo "                                    <div class=\"form-group col-md-6\">
                                        <div class=\"\">
                                            ";
                // line 47
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                            ";
                // line 48
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                            ";
                // line 49
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget', array("attr" => array("class" => "select2 form-control")));
                echo "
                                        </div>
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 52
$context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "file")) {
                // line 53
                echo "                                    <div class=\"form-group col-md-6\">
                                        ";
                // line 54
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                        ";
                // line 55
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                        <br>

                                        <div class=\"col-sm-6\">
                                            <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                <div class=\"fileinput-new thumbnail\" style=\"width: 200px; height: 150px;\">
                                                    <img data-src=\"holder.js/100%x100%\" alt=\"...\" src=\"http://dummyimage.com/270x200/000000/ffffff&text=";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image"), "html", null, true);
                echo "\">
                                                </div>
                                                <div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div>
                                                <div>
                                                    <span class=\"btn btn-default btn-file\">
                                                        <span class=\"fileinput-new\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select image"), "html", null, true);
                echo "</span>
                                                        <span class=\"fileinput-exists\">Ch";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Change"), "html", null, true);
                echo "ange</span>
                                                        ";
                // line 68
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget');
                echo "
                                                    </span>
                                                    <a href=\"#\" class=\"btn btn-default fileinput-exists\" data-dismiss=\"fileinput\">";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove"), "html", null, true);
                echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(            // line 75
$context["input"], "vars", array()), "block_prefixes", array()), 1, array(), "array") == "choice")) {
                // line 76
                echo "                                    <div class=\"form-group col-md-6\">
                                        ";
                // line 77
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                        ";
                // line 78
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                        ";
                // line 79
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget');
                echo "
                                    </div>
                                ";
            } else {
                // line 82
                echo "                                    <div class=\"form-group col-md-6\">
                                        ";
                // line 83
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                        ";
                // line 84
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                        ";
                // line 85
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget');
                echo "
                                    </div>
                                ";
            }
            // line 88
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
                        </fieldset>

                        <div class=\"hide\">
                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-rounded pull-right btn-submit\" style=\"margin-left: 5px;\" data-gerund=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Saving..."), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "\" />
                            <a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("permission_index");
        echo "\" class=\"btn btn-default btn-rounded pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section>
        </div>
    </div>

    ";
        // line 107
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bee2c9f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bee2c9f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/forms_form-elements_1.js");
            // line 108
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
        // line 110
        echo "
";
        
        $__internal_766b31a75778b646914caa6df80ee46c174ffd7a95f7c46472d5e95d424786e6->leave($__internal_766b31a75778b646914caa6df80ee46c174ffd7a95f7c46472d5e95d424786e6_prof);

    }

    // line 114
    public function block_extrascripts($context, array $blocks = array())
    {
        $__internal_f143fa30621ee204614e4c4e54199c94f191f2f1b12fd9da421feeb8d5d5dce3 = $this->env->getExtension("native_profiler");
        $__internal_f143fa30621ee204614e4c4e54199c94f191f2f1b12fd9da421feeb8d5d5dce3->enter($__internal_f143fa30621ee204614e4c4e54199c94f191f2f1b12fd9da421feeb8d5d5dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascripts"));

        
        $__internal_f143fa30621ee204614e4c4e54199c94f191f2f1b12fd9da421feeb8d5d5dce3->leave($__internal_f143fa30621ee204614e4c4e54199c94f191f2f1b12fd9da421feeb8d5d5dce3_prof);

    }

    public function getTemplateName()
    {
        return ":permission:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 114,  325 => 110,  311 => 108,  307 => 107,  298 => 101,  290 => 98,  284 => 97,  277 => 93,  271 => 89,  265 => 88,  259 => 85,  255 => 84,  251 => 83,  248 => 82,  242 => 79,  238 => 78,  234 => 77,  231 => 76,  229 => 75,  221 => 70,  216 => 68,  212 => 67,  208 => 66,  200 => 61,  191 => 55,  187 => 54,  184 => 53,  182 => 52,  176 => 49,  172 => 48,  168 => 47,  164 => 45,  162 => 44,  156 => 41,  152 => 40,  148 => 39,  144 => 37,  142 => 36,  137 => 34,  133 => 33,  129 => 32,  126 => 31,  124 => 30,  121 => 29,  118 => 28,  114 => 27,  109 => 25,  103 => 22,  99 => 21,  90 => 15,  85 => 14,  79 => 13,  69 => 10,  63 => 9,  54 => 6,  48 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class=""><a href="{{ path('permission_index') }}">{{ 'Permission list' | trans }}</a></li>*/
/*     <li class="active">{{ 'Permission creation' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'Permission creation' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title">{{ 'Permission creation' | trans }}</h1>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <section class="widget">*/
/* */
/*                 <div class="widget-body">*/
/*                     {{ form_start(form, { 'attr': { 'role': 'form' } }) }}*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <fieldset>*/
/*                             <legend>{{ 'General' | trans }}</legend>*/
/* */
/*                             {% for input in form.children %}*/
/*                                 {% if input.vars.block_prefixes[1] == 'hidden' %}*/
/* */
/*                                 {% elseif input.vars.block_prefixes[1] == 'text' and input.vars.block_prefixes[2] == 'textarea'  %}*/
/*                                     <div class="form-group col-md-12">*/
/*                                         {{ form_label(input) }}*/
/*                                         {{ form_errors(input) }}*/
/*                                         {{ form_widget(input) }}*/
/*                                     </div>*/
/*                                 {% elseif input.vars.block_prefixes[1] == 'checkbox' %}*/
/*                                     <div class="form-group col-md-2">*/
/*                                         <div class="checkbox checkbox-primary">*/
/*                                             {{ form_widget(input) }}*/
/*                                             {{ form_label(input) }}*/
/*                                             {{ form_errors(input) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% elseif input.vars.block_prefixes[1] == 'choice' and input.vars.expanded %}*/
/*                                     <div class="form-group col-md-6">*/
/*                                         <div class="">*/
/*                                             {{ form_label(input) }}*/
/*                                             {{ form_errors(input) }}*/
/*                                             {{ form_widget(input, { 'attr': { 'class': 'select2 form-control' } }) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% elseif input.vars.block_prefixes[1] == 'file' %}*/
/*                                     <div class="form-group col-md-6">*/
/*                                         {{ form_label(input) }}*/
/*                                         {{ form_errors(input) }}*/
/*                                         <br>*/
/* */
/*                                         <div class="col-sm-6">*/
/*                                             <div class="fileinput fileinput-new" data-provides="fileinput">*/
/*                                                 <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">*/
/*                                                     <img data-src="holder.js/100%x100%" alt="..." src="http://dummyimage.com/270x200/000000/ffffff&text={{ 'Select image' | trans }}">*/
/*                                                 </div>*/
/*                                                 <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>*/
/*                                                 <div>*/
/*                                                     <span class="btn btn-default btn-file">*/
/*                                                         <span class="fileinput-new">{{ 'Select image' | trans }}</span>*/
/*                                                         <span class="fileinput-exists">Ch{{ 'Change' | trans }}ange</span>*/
/*                                                         {{ form_widget(input) }}*/
/*                                                     </span>*/
/*                                                     <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">{{ 'Remove' | trans }}</a>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% elseif input.vars.block_prefixes[1] == 'choice' %}*/
/*                                     <div class="form-group col-md-6">*/
/*                                         {{ form_label(input) }}*/
/*                                         {{ form_errors(input) }}*/
/*                                         {{ form_widget(input) }}*/
/*                                     </div>*/
/*                                 {% else %}*/
/*                                     <div class="form-group col-md-6">*/
/*                                         {{ form_label(input) }}*/
/*                                         {{ form_errors(input) }}*/
/*                                         {{ form_widget(input) }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/* */
/*                         </fieldset>*/
/* */
/*                         <div class="hide">*/
/*                             {{ form_rest(form) }}*/
/*                         </div>*/
/* */
/*                         <div class="form-actions">*/
/*                             <input type="submit" class="btn btn-primary btn-rounded pull-right btn-submit" style="margin-left: 5px;" data-gerund="{{ 'Saving...' | trans }}" value="{{ 'Save' | trans }}" />*/
/*                             <a href="{{ path('permission_index') }}" class="btn btn-default btn-rounded pull-right">{{ 'Cancel' | trans }}</a>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% javascripts output='js/forms.js' filter='?jsqueeze' 'bundles/wbctheme/js/form-elements.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block extrascripts %}*/
/* {% endblock %}*/
