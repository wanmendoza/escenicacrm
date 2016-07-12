<?php

/* :i18nresource:index.html.twig */
class __TwigTemplate_aee34fd5fac43986b9b980666a0856f7a00f1595a18d0b8dbd00293fd10a2d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", ":i18nresource:index.html.twig", 1);
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
        $__internal_c092092c2ddff5fb0169d53fc1518586401ae1d08e20925e6ca1fbc676db6854 = $this->env->getExtension("native_profiler");
        $__internal_c092092c2ddff5fb0169d53fc1518586401ae1d08e20925e6ca1fbc676db6854->enter($__internal_c092092c2ddff5fb0169d53fc1518586401ae1d08e20925e6ca1fbc676db6854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":i18nresource:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c092092c2ddff5fb0169d53fc1518586401ae1d08e20925e6ca1fbc676db6854->leave($__internal_c092092c2ddff5fb0169d53fc1518586401ae1d08e20925e6ca1fbc676db6854_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_847a21aa8fb391ba8bd732961428a547bdb302337967086d0111b4ab94bca3dc = $this->env->getExtension("native_profiler");
        $__internal_847a21aa8fb391ba8bd732961428a547bdb302337967086d0111b4ab94bca3dc->enter($__internal_847a21aa8fb391ba8bd732961428a547bdb302337967086d0111b4ab94bca3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("I18NResource list"), "html", null, true);
        echo "</li>
";
        
        $__internal_847a21aa8fb391ba8bd732961428a547bdb302337967086d0111b4ab94bca3dc->leave($__internal_847a21aa8fb391ba8bd732961428a547bdb302337967086d0111b4ab94bca3dc_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd06ffc2df9ed50f897eef1c928b2639a32b165d87cb4531dae801acc7f52f70 = $this->env->getExtension("native_profiler");
        $__internal_dd06ffc2df9ed50f897eef1c928b2639a32b165d87cb4531dae801acc7f52f70->enter($__internal_dd06ffc2df9ed50f897eef1c928b2639a32b165d87cb4531dae801acc7f52f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("I18NResource list"), "html", null, true);
        echo "
";
        
        $__internal_dd06ffc2df9ed50f897eef1c928b2639a32b165d87cb4531dae801acc7f52f70->leave($__internal_dd06ffc2df9ed50f897eef1c928b2639a32b165d87cb4531dae801acc7f52f70_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fba9af0019bfad0f64736c4161f60035b132b24ad1603bfd8a40c4edcc653d9 = $this->env->getExtension("native_profiler");
        $__internal_2fba9af0019bfad0f64736c4161f60035b132b24ad1603bfd8a40c4edcc653d9->enter($__internal_2fba9af0019bfad0f64736c4161f60035b132b24ad1603bfd8a40c4edcc653d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title pull-left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("I18NResource list"), "html", null, true);
        echo "</h1>

    <div class=\"pull-right\">
        <a data-parent=\"#content\" class=\"btn btn-primary btn-lg mb-xs\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("i18nresource_new");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Locale"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Code"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["i18NResources"]) ? $context["i18NResources"] : $this->getContext($context, "i18NResources")));
        foreach ($context['_seq'] as $context["_key"] => $context["i18NResource"]) {
            // line 44
            echo "                        <tr>
                            <td class=\"no-sort\">
                                <span class=\"fw-semi-bold\">
                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("i18nresource_show", array("id" => $this->getAttribute($context["i18NResource"], "id", array()))), "html", null, true);
            echo "\" data-remote=\"false\" class=\"modal-info\" data-toggle=\"modal\" data-target=\"#infoModal\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i18NResource"], "name", array()), "html", null, true);
            echo "</a>
                                </span>
                            </td>
                            <td class=\"hidden-xs\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["i18NResource"], "locale", array()), "html", null, true);
            echo "</td>
                            <td class=\"hidden-xs\">
                                <code>
                                    ";
            // line 53
            echo "{{ i18nResource('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i18NResource"], "slug", array()), "html", null, true);
            echo "' | raw ) }}";
            echo "
                                </code>
                            </td>
                            <td class=\"no-sort\">
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" class=\"btn btn-default mb-xs\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("i18nresource_edit", array("id" => $this->getAttribute($context["i18NResource"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-edit\"></i>
                                </a>
                                &nbsp;
                                <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" class=\"btn btn-danger mb-xs btn-delete\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("i18nresource_delete", array("id" => $this->getAttribute($context["i18NResource"], "id", array()))), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-trash-o\"></i>
                                </a>
                            </td>                    
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i18NResource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Showing"), "html", null, true);
        echo " <strong>_START_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("to"), "html", null, true);
        echo " _END_</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of"), "html", null, true);
        echo " _TOTAL_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entries"), "html", null, true);
        echo "\",
                    \"zeroRecords\": \"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nothing found - sorry"), "html", null, true);
        echo "\",
                    \"infoEmpty\": \"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No records available"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Showing"), "html", null, true);
        echo " <strong>0 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("to"), "html", null, true);
        echo " 0 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of"), "html", null, true);
        echo " 0</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entries"), "html", null, true);
        echo "\",
                    \"infoFiltered\": \"(";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filtered from"), "html", null, true);
        echo " _MAX_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("total records"), "html", null, true);
        echo ")\",
                    \"sProcessing\":     \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sLoadingRecords\": \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading..."), "html", null, true);
        echo "\",
                    \"sProcessing\":     \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sSearch\":         \"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search:"), "html", null, true);
        echo "\",
                    \"sZeroRecords\":    \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No matching records found"), "html", null, true);
        echo "\",
                    \"oPaginate\": {
                        \"sFirst\":    \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First"), "html", null, true);
        echo "\",
                        \"sLast\":     \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last"), "html", null, true);
        echo "\",
                        \"sNext\":     \"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
        echo "\",
                        \"sPrevious\": \"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
        echo "\"
                    },
                    \"oAria\": {
                        \"sSortAscending\":  \": ";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate to sort column ascending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 108
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
        
        $__internal_2fba9af0019bfad0f64736c4161f60035b132b24ad1603bfd8a40c4edcc653d9->leave($__internal_2fba9af0019bfad0f64736c4161f60035b132b24ad1603bfd8a40c4edcc653d9_prof);

    }

    public function getTemplateName()
    {
        return ":i18nresource:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 108,  289 => 107,  283 => 104,  279 => 103,  275 => 102,  271 => 101,  266 => 99,  262 => 98,  258 => 97,  254 => 96,  250 => 95,  244 => 94,  234 => 93,  230 => 92,  226 => 91,  216 => 90,  191 => 67,  175 => 61,  164 => 57,  155 => 53,  149 => 50,  141 => 47,  136 => 44,  132 => 43,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  89 => 17,  83 => 14,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class="active">{{ 'I18NResource list' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'I18NResource list' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title pull-left">{{ 'I18NResource list' | trans }}</h1>*/
/* */
/*     <div class="pull-right">*/
/*         <a data-parent="#content" class="btn btn-primary btn-lg mb-xs" href="{{ path('i18nresource_new') }}">{{ 'Create new' | trans }}</a>*/
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
/*                         <th class="hidden-xs">{{ 'Locale' | trans }}</th>*/
/*                         <th class="hidden-xs">{{ 'Code' | trans }}</th>*/
/*                         <th width="120" class="no-sort">{{ 'Actions' | trans }}</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/* */
/*                     {% for i18NResource in i18NResources %}*/
/*                         <tr>*/
/*                             <td class="no-sort">*/
/*                                 <span class="fw-semi-bold">*/
/*                                     <a href="{{ path('i18nresource_show', { 'id': i18NResource.id }) }}" data-remote="false" class="modal-info" data-toggle="modal" data-target="#infoModal">{{ i18NResource.name }}</a>*/
/*                                 </span>*/
/*                             </td>*/
/*                             <td class="hidden-xs">{{ i18NResource.locale }}</td>*/
/*                             <td class="hidden-xs">*/
/*                                 <code>*/
/*                                     {{ "{{ i18nResource('" }}{{ i18NResource.slug }}{{ "' | raw ) }}" }}*/
/*                                 </code>*/
/*                             </td>*/
/*                             <td class="no-sort">*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Edit' | trans }}" data-original-title="{{ 'Edit' | trans }}" class="btn btn-default mb-xs" role="button" href="{{ path('i18nresource_edit', { 'id': i18NResource.id }) }}">*/
/*                                     <i class="fa fa-edit"></i>*/
/*                                 </a>*/
/*                                 &nbsp;*/
/*                                 <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Delete' | trans }}" data-original-title="{{ 'Delete' | trans }}" class="btn btn-danger mb-xs btn-delete" role="button" href="{{ path('i18nresource_delete', { 'id': i18NResource.id }) }}">*/
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
