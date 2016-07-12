<?php

/* :permission:index.html.twig */
class __TwigTemplate_ca15e82731766bed400367b72907eaddf67a894014a2f40fc6925ff0a0235438 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
        echo "</li>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Permission list"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : null));
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
        return array (  268 => 104,  264 => 103,  258 => 100,  254 => 99,  250 => 98,  246 => 97,  241 => 95,  237 => 94,  233 => 93,  229 => 92,  225 => 91,  219 => 90,  209 => 89,  205 => 88,  201 => 87,  191 => 86,  166 => 63,  150 => 57,  139 => 53,  132 => 51,  128 => 50,  120 => 47,  115 => 44,  111 => 43,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  68 => 17,  62 => 14,  57 => 13,  54 => 12,  47 => 9,  44 => 8,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
