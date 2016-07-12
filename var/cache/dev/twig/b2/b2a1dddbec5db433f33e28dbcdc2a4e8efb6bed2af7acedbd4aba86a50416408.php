<?php

/* :permission:index.html.twig */
class __TwigTemplate_557e6f2200a7c6bd36c00ece4c4343c286d8496b6d51c0b3e72186b715f5100a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", ":permission:index.html.twig", 1);
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
        $__internal_bf5ab2e7ecfb9fe4ea880d75841c1f272c4c4f38c86dffec07b972ad3ccae41f = $this->env->getExtension("native_profiler");
        $__internal_bf5ab2e7ecfb9fe4ea880d75841c1f272c4c4f38c86dffec07b972ad3ccae41f->enter($__internal_bf5ab2e7ecfb9fe4ea880d75841c1f272c4c4f38c86dffec07b972ad3ccae41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":permission:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5ab2e7ecfb9fe4ea880d75841c1f272c4c4f38c86dffec07b972ad3ccae41f->leave($__internal_bf5ab2e7ecfb9fe4ea880d75841c1f272c4c4f38c86dffec07b972ad3ccae41f_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_54e3d92cd8ef3468ff9fbc9c6080e7794b357f3575bf800a535ccfbbc7303891 = $this->env->getExtension("native_profiler");
        $__internal_54e3d92cd8ef3468ff9fbc9c6080e7794b357f3575bf800a535ccfbbc7303891->enter($__internal_54e3d92cd8ef3468ff9fbc9c6080e7794b357f3575bf800a535ccfbbc7303891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
        echo "</li>
";
        
        $__internal_54e3d92cd8ef3468ff9fbc9c6080e7794b357f3575bf800a535ccfbbc7303891->leave($__internal_54e3d92cd8ef3468ff9fbc9c6080e7794b357f3575bf800a535ccfbbc7303891_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a97cd99855a0f1668f0c5ed7e6bd118c2e8bce2ff884fa4bb7ef3e9f2a36dc = $this->env->getExtension("native_profiler");
        $__internal_e8a97cd99855a0f1668f0c5ed7e6bd118c2e8bce2ff884fa4bb7ef3e9f2a36dc->enter($__internal_e8a97cd99855a0f1668f0c5ed7e6bd118c2e8bce2ff884fa4bb7ef3e9f2a36dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
        echo "
";
        
        $__internal_e8a97cd99855a0f1668f0c5ed7e6bd118c2e8bce2ff884fa4bb7ef3e9f2a36dc->leave($__internal_e8a97cd99855a0f1668f0c5ed7e6bd118c2e8bce2ff884fa4bb7ef3e9f2a36dc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a73eb525f610bda1cae044e6bd301e483cd1a97234bbd478498deb0cac4d673 = $this->env->getExtension("native_profiler");
        $__internal_0a73eb525f610bda1cae044e6bd301e483cd1a97234bbd478498deb0cac4d673->enter($__internal_0a73eb525f610bda1cae044e6bd301e483cd1a97234bbd478498deb0cac4d673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title pull-left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
        echo "</h1>

    <div class=\"pull-right\">
        <a data-parent=\"#content\" class=\"btn btn-primary btn-lg mb-xs\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("permission_new");
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo "</th>                                                                                                                        
                        <th class=\"hidden-xs\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_by"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created_at"), "html", null, true);
        echo "</th>
                        <th width=\"120\" class=\"no-sort\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>

                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 44
            echo "                        <tr>
                            <td class=\"no-sort\">
                                <span class=\"fw-semi-bold\">
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("permission_show", array("id" => $this->getAttribute($context["permission"], "id", array()))), "html", null, true);
            echo "\" data-remote=\"false\" class=\"modal-info\" data-toggle=\"modal\" data-target=\"#infoModal\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["permission"], "name", array()), "html", null, true);
            echo "</a>
                                </span>
                            </td>
                            <td class=\"hidden-xs\">";
            // line 50
            echo $this->env->getExtension('wbc_extension')->user($this->getAttribute($context["permission"], "createdby", array()));
            echo "</td>
                            <td class=\"hidden-xs\">";
            // line 51
            if ($this->getAttribute($context["permission"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["permission"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                            <td class=\"no-sort\">
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" class=\"btn btn-default mb-xs\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("permission_edit", array("id" => $this->getAttribute($context["permission"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                &nbsp;
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" class=\"btn btn-danger mb-xs btn-delete\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("permission_delete", array("id" => $this->getAttribute($context["permission"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                </a>
                            </td>                    
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script type=\"text/javascript\">
        \$(document).ready(function(){

            var unsortableColumns = [];
            \$('#datatable-table').find('thead th').each(function(){
                if (\$(this).hasClass( 'no-sort')){
                    unsortableColumns.push({\"bSortable\": false});
                } else {
                    unsortableColumns.push(null);
                }
            });

            \$(\"#datatable-table\").dataTable({
                \"sDom\": \"<'row'<'col-md-6 hidden-xs'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>\",
                \"oLanguage\": {
                    \"sLengthMenu\": \"_MENU_\",
                    \"sInfo\": \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Showing"), "html", null, true);
        echo " <strong>_START_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("to"), "html", null, true);
        echo " _END_</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of"), "html", null, true);
        echo " _TOTAL_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entries"), "html", null, true);
        echo "\",
                    \"zeroRecords\": \"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nothing found - sorry"), "html", null, true);
        echo "\",
                    \"infoEmpty\": \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No records available"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Showing"), "html", null, true);
        echo " <strong>0 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("to"), "html", null, true);
        echo " 0 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of"), "html", null, true);
        echo " 0</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entries"), "html", null, true);
        echo "\",
                    \"infoFiltered\": \"(";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filtered from"), "html", null, true);
        echo " _MAX_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("total records"), "html", null, true);
        echo ")\",
                    \"sProcessing\":     \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sLoadingRecords\": \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading..."), "html", null, true);
        echo "\",
                    \"sProcessing\":     \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sSearch\":         \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search:"), "html", null, true);
        echo "\",
                    \"sZeroRecords\":    \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No matching records found"), "html", null, true);
        echo "\",
                    \"oPaginate\": {
                        \"sFirst\":    \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First"), "html", null, true);
        echo "\",
                        \"sLast\":     \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last"), "html", null, true);
        echo "\",
                        \"sNext\":     \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
        echo "\",
                        \"sPrevious\": \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
        echo "\"
                    },
                    \"oAria\": {
                        \"sSortAscending\":  \": ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate to sort column ascending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate to sort column descending"), "html", null, true);
        echo "\"
                    }
                },
                \"oClasses\": {
                    \"sFilter\": \"pull-right\",
                    \"sFilterInput\": \"form-control input-rounded ml-sm\"
                },
                \"aoColumns\": unsortableColumns,
                \"stateSave\": true
            });

            \$(\".dataTables_length select\").selectpicker({
                width: 'auto'
            });
        });
    </script>

";
        
        $__internal_0a73eb525f610bda1cae044e6bd301e483cd1a97234bbd478498deb0cac4d673->leave($__internal_0a73eb525f610bda1cae044e6bd301e483cd1a97234bbd478498deb0cac4d673_prof);

    }

    public function getTemplateName()
    {
        return ":permission:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 104,  285 => 103,  279 => 100,  275 => 99,  271 => 98,  267 => 97,  262 => 95,  258 => 94,  254 => 93,  250 => 92,  246 => 91,  240 => 90,  230 => 89,  226 => 88,  222 => 87,  212 => 86,  187 => 63,  171 => 57,  160 => 53,  153 => 51,  149 => 50,  141 => 47,  136 => 44,  132 => 43,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  89 => 17,  83 => 14,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class="active">{{ 'Permission list' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'Permission list' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title pull-left">{{ 'Permission list' | trans }}</h1>*/
/* */
/*     <div class="pull-right">*/
/*         <a data-parent="#content" class="btn btn-primary btn-lg mb-xs" href="{{ path('permission_new') }}">{{ 'Create new' | trans }}</a>*/
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
/*                         <th class="no-sort">{{ 'Name' | trans }}</th>                                                                                                                        */
/*                         <th class="hidden-xs">{{ 'Created_by' | trans }}</th>*/
/*                         <th class="hidden-xs">{{ 'Created_at' | trans }}</th>*/
/*                         <th width="120" class="no-sort">{{ 'Actions' | trans }}</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% for permission in permissions %}*/
/*                         <tr>*/
/*                             <td class="no-sort">*/
/*                                 <span class="fw-semi-bold">*/
/*                                     <a href="{{ path('permission_show', { 'id': permission.id }) }}" data-remote="false" class="modal-info" data-toggle="modal" data-target="#infoModal">{{ permission.name }}</a>*/
/*                                 </span>*/
/*                             </td>*/
/*                             <td class="hidden-xs">{{ permission.createdby | user | raw }}</td>*/
/*                             <td class="hidden-xs">{% if permission.createdat %}{{ permission.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                             <td class="no-sort">*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Edit' | trans }}" data-original-title="{{ 'Edit' | trans }}" class="btn btn-default mb-xs" role="button" href="{{ path('permission_edit', { 'id': permission.id }) }}">*/
/*                                     <i class="fa fa-edit"></i>*/
/*                                 </a>*/
/*                                 &nbsp;*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Delete' | trans }}" data-original-title="{{ 'Delete' | trans }}" class="btn btn-danger mb-xs btn-delete" role="button" href="{{ path('permission_delete', { 'id': permission.id }) }}">*/
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
/*     <script type="text/javascript">*/
/*         $(document).ready(function(){*/
/* */
/*             var unsortableColumns = [];*/
/*             $('#datatable-table').find('thead th').each(function(){*/
/*                 if ($(this).hasClass( 'no-sort')){*/
/*                     unsortableColumns.push({"bSortable": false});*/
/*                 } else {*/
/*                     unsortableColumns.push(null);*/
/*                 }*/
/*             });*/
/* */
/*             $("#datatable-table").dataTable({*/
/*                 "sDom": "<'row'<'col-md-6 hidden-xs'l><'col-md-6'f>r>t<'row'<'col-md-6'i><'col-md-6'p>>",*/
/*                 "oLanguage": {*/
/*                     "sLengthMenu": "_MENU_",*/
/*                     "sInfo": "{{ 'Showing' | trans }} <strong>_START_ {{ 'to' | trans }} _END_</strong> {{ 'of' | trans }} _TOTAL_ {{ 'entries' | trans }}",*/
/*                     "zeroRecords": "{{ 'Nothing found - sorry' | trans }}",*/
/*                     "infoEmpty": "{{ 'No records available' | trans }}",*/
/*                     "sInfoEmpty": "{{ 'Showing' | trans }} <strong>0 {{ 'to' | trans }} 0 {{ 'of' | trans }} 0</strong> {{ 'entries' | trans }}",*/
/*                     "infoFiltered": "({{ 'filtered from' | trans }} _MAX_ {{ 'total records' | trans }})",*/
/*                     "sProcessing":     "{{ 'Processing...' | trans }}",*/
/*                     "sLoadingRecords": "{{ 'Loading...' | trans }}",*/
/*                     "sProcessing":     "{{ 'Processing...' | trans }}",*/
/*                     "sSearch":         "{{ 'Search:' | trans }}",*/
/*                     "sZeroRecords":    "{{ 'No matching records found' | trans }}",*/
/*                     "oPaginate": {*/
/*                         "sFirst":    "{{ 'First' | trans }}",*/
/*                         "sLast":     "{{ 'Last' | trans }}",*/
/*                         "sNext":     "{{ 'Next' | trans }}",*/
/*                         "sPrevious": "{{ 'Previous' | trans }}"*/
/*                     },*/
/*                     "oAria": {*/
/*                         "sSortAscending":  ": {{ 'activate to sort column ascending' | trans }}",*/
/*                         "sSortDescending": ": {{ 'activate to sort column descending' | trans }}"*/
/*                     }*/
/*                 },*/
/*                 "oClasses": {*/
/*                     "sFilter": "pull-right",*/
/*                     "sFilterInput": "form-control input-rounded ml-sm"*/
/*                 },*/
/*                 "aoColumns": unsortableColumns,*/
/*                 "stateSave": true*/
/*             });*/
/* */
/*             $(".dataTables_length select").selectpicker({*/
/*                 width: 'auto'*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
