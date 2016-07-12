<?php

/* :settings:index.html.twig */
class __TwigTemplate_fb7643cc636d62437e0624394800068f71cbd647d87b4de457a412ae9e7e6025 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", ":settings:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    <li class=\"active\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Settings list"), "html", null, true);
        echo "</li>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Settings list"), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title pull-left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Settings list"), "html", null, true);
        echo "</h1>

    <div class=\"pull-right\">
        ";
        // line 17
        if ($this->env->getExtension('wbc_extension')->get("use_translations")) {
            // line 18
            echo "        <a data-parent=\"#content\" class=\"btn btn-default btn-lg mb-xs\" href=\"";
            echo $this->env->getExtension('routing')->getPath("locale_index");
            echo "\"> <i class=\"fa fa-language\"></i> &nbsp; ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Locale list"), "html", null, true);
            echo "</a>
        ";
        }
        // line 20
        echo "        <a data-parent=\"#content\" class=\"btn btn-primary btn-lg mb-xs\" href=\"";
        echo $this->env->getExtension('routing')->getPath("settings_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create new"), "html", null, true);
        echo "</a>
    </div>

    <div class=\"clearfix\"></div>
    <br>

    <section class=\"widget\">
        <header>
            <div class=\"widget-controls\">
                <a data-widgster=\"expand\" title=\"Expand\" href=\"#\"><i class=\"glyphicon glyphicon-chevron-up\"></i></a>
                <a data-widgster=\"collapse\" title=\"Collapse\" href=\"#\"><i class=\"glyphicon glyphicon-chevron-down\"></i></a>
            </div>
        </header>
        <div class=\"widget-body\">
            <div class=\"mt\">
                <table id=\"datatable-table\" class=\"table table-striped table-hover\">
                    <thead>
                    <tr>                                                                                                                        
                        <th class=\"no-sort\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo "</th>
                        <th class=\"\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("URL"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
        echo "</th>
                        <th width=\"120\" class=\"no-sort\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) ? $context["settings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["setting"]) {
            // line 47
            echo "                        <tr>
                            <td class=\"no-sort\">
                                <span class=\"fw-semi-bold\">
                                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_show", array("id" => $this->getAttribute($context["setting"], "id", array()))), "html", null, true);
            echo "\" data-remote=\"false\" class=\"modal-info\" data-toggle=\"modal\" data-target=\"#infoModal\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["setting"], "name", array()), "html", null, true);
            echo "</a>
                                </span>
                            </td>
                            <td class=\"\">
                                ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["setting"], "url", array()), "html", null, true);
            echo "
                            </td>
                            <td class=\"hidden-xs\">";
            // line 56
            if ($this->getAttribute($context["setting"], "active", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
                echo " ";
            }
            echo "</td>
                            <td class=\"no-sort\">
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" class=\"btn btn-default mb-xs\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_edit", array("id" => $this->getAttribute($context["setting"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                &nbsp;
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" class=\"btn btn-danger mb-xs btn-delete\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_delete", array("id" => $this->getAttribute($context["setting"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                </a>
                            </td>                    
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return ":settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 68,  169 => 62,  158 => 58,  145 => 56,  140 => 54,  131 => 50,  126 => 47,  122 => 46,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  78 => 20,  70 => 18,  68 => 17,  62 => 14,  57 => 13,  54 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class="active">{{ 'Settings list' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'Settings list' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title pull-left">{{ 'Settings list' | trans }}</h1>*/
/* */
/*     <div class="pull-right">*/
/*         {% if get('use_translations') %}*/
/*         <a data-parent="#content" class="btn btn-default btn-lg mb-xs" href="{{ path('locale_index') }}"> <i class="fa fa-language"></i> &nbsp; {{ 'Locale list' | trans }}</a>*/
/*         {% endif %}*/
/*         <a data-parent="#content" class="btn btn-primary btn-lg mb-xs" href="{{ path('settings_new') }}">{{ 'Create new' | trans }}</a>*/
/*     </div>*/
/* */
/*     <div class="clearfix"></div>*/
/*     <br>*/
/* */
/*     <section class="widget">*/
/*         <header>*/
/*             <div class="widget-controls">*/
/*                 <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>*/
/*                 <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>*/
/*             </div>*/
/*         </header>*/
/*         <div class="widget-body">*/
/*             <div class="mt">*/
/*                 <table id="datatable-table" class="table table-striped table-hover">*/
/*                     <thead>*/
/*                     <tr>                                                                                                                        */
/*                         <th class="no-sort">{{ 'Name' | trans }}</th>*/
/*                         <th class="">{{ 'URL' | trans }}</th>*/
/*                         <th class="hidden-xs">{{ 'Active' | trans }}</th>*/
/*                         <th width="120" class="no-sort">{{ 'Actions' | trans }}</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% for setting in settings %}*/
/*                         <tr>*/
/*                             <td class="no-sort">*/
/*                                 <span class="fw-semi-bold">*/
/*                                     <a href="{{ path('settings_show', { 'id': setting.id }) }}" data-remote="false" class="modal-info" data-toggle="modal" data-target="#infoModal">{{ setting.name }}</a>*/
/*                                 </span>*/
/*                             </td>*/
/*                             <td class="">*/
/*                                 {{ setting.url }}*/
/*                             </td>*/
/*                             <td class="hidden-xs">{% if setting.active %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*                             <td class="no-sort">*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Edit' | trans }}" data-original-title="{{ 'Edit' | trans }}" class="btn btn-default mb-xs" role="button" href="{{ path('settings_edit', { 'id': setting.id }) }}">*/
/*                                     <i class="fa fa-edit"></i>*/
/*                                 </a>*/
/*                                 &nbsp;*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Delete' | trans }}" data-original-title="{{ 'Delete' | trans }}" class="btn btn-danger mb-xs btn-delete" role="button" href="{{ path('settings_delete', { 'id': setting.id }) }}">*/
/*                                     <i class="fa fa-trash-o"></i>*/
/*                                 </a>*/
/*                             </td>                    */
/*                         </tr>*/
/*                     {% endfor %}*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
