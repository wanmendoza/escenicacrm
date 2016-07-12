<?php

/* WbcAdministratorBundle:user:index.html.twig */
class __TwigTemplate_1b58f7bf48ec313d30058d19f592dd2e831ce39a7a1d62dec02775253ce70ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "WbcAdministratorBundle:user:index.html.twig", 1);
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
        $__internal_a49074a8498b65d209a46e7c25e1cbbb37e3c35d82e1ba64dea3b5b2f8102356 = $this->env->getExtension("native_profiler");
        $__internal_a49074a8498b65d209a46e7c25e1cbbb37e3c35d82e1ba64dea3b5b2f8102356->enter($__internal_a49074a8498b65d209a46e7c25e1cbbb37e3c35d82e1ba64dea3b5b2f8102356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcAdministratorBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a49074a8498b65d209a46e7c25e1cbbb37e3c35d82e1ba64dea3b5b2f8102356->leave($__internal_a49074a8498b65d209a46e7c25e1cbbb37e3c35d82e1ba64dea3b5b2f8102356_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_82ae8a96fd52b7572c777529fb2295cef2f1d4141f5f72b1f781bd28d948839b = $this->env->getExtension("native_profiler");
        $__internal_82ae8a96fd52b7572c777529fb2295cef2f1d4141f5f72b1f781bd28d948839b->enter($__internal_82ae8a96fd52b7572c777529fb2295cef2f1d4141f5f72b1f781bd28d948839b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->displayParentBlock("breadcrumb", $context, $blocks);
        echo "
    <li class=\"active\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Users"), "html", null, true);
        echo "</li>
";
        
        $__internal_82ae8a96fd52b7572c777529fb2295cef2f1d4141f5f72b1f781bd28d948839b->leave($__internal_82ae8a96fd52b7572c777529fb2295cef2f1d4141f5f72b1f781bd28d948839b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_8351e827a3abbef22cbf6c357e5b854d09932ed0e2bb7fa023fec7e41af1e7e4 = $this->env->getExtension("native_profiler");
        $__internal_8351e827a3abbef22cbf6c357e5b854d09932ed0e2bb7fa023fec7e41af1e7e4->enter($__internal_8351e827a3abbef22cbf6c357e5b854d09932ed0e2bb7fa023fec7e41af1e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User list"), "html", null, true);
        echo "
";
        
        $__internal_8351e827a3abbef22cbf6c357e5b854d09932ed0e2bb7fa023fec7e41af1e7e4->leave($__internal_8351e827a3abbef22cbf6c357e5b854d09932ed0e2bb7fa023fec7e41af1e7e4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_744fabcb42d4f732302401a052256ee8196f0d070dfb45e7c695ad44dab54342 = $this->env->getExtension("native_profiler");
        $__internal_744fabcb42d4f732302401a052256ee8196f0d070dfb45e7c695ad44dab54342->enter($__internal_744fabcb42d4f732302401a052256ee8196f0d070dfb45e7c695ad44dab54342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1 class=\"page-title pull-left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User list"), "html", null, true);
        echo "</h1>

    <div class=\"pull-right\">
        <a data-parent=\"#content\" class=\"btn btn-primary btn-lg mb-xs\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create a new"), "html", null, true);
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
                        <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs no-sort\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Image"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</th>
                        <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
        echo "</th>
                        <th class=\"hidden-xs\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last Login"), "html", null, true);
        echo "</th>
                        <th width=\"120\" class=\"no-sort\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Actions"), "html", null, true);
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 45
            echo "                    <tr>
                        <td>
                            <span class=\"fw-semi-bold\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" data-remote=\"false\" class=\"modal-info\" data-toggle=\"modal\" data-target=\"#infoModal\">";
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "</a>
                            </span>
                        </td>
                        <td class=\"hidden-xs no-sort\"><img src=\"http://dummyimage.com/40x40/242424/ffffff&text=";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "initials", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "\"> </td>
                        <td class=\"hidden-xs\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "enabled", array())) ? ($this->env->getExtension('translator')->trans("YES")) : ($this->env->getExtension('translator')->trans("NO"))), "html", null, true);
            echo "</td>
                        <td class=\"hidden-xs\">";
            // line 54
            echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "lastlogin", array())) ? ($this->env->getExtension('time')->diff(twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastlogin", array()), "Y-m-d H:i"))) : ($this->env->getExtension('translator')->trans("Never"))), "html", null, true);
            echo "</td>
                        <td>
                            <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
            echo "\" class=\"btn btn-default mb-xs\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-edit\"></i>
                            </a>
                            &nbsp;
                            <a data-parent=\"#content\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
            echo "\" class=\"btn btn-danger mb-xs btn-delete\" role=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-trash-o\"></i>
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </tbody>
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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Showing"), "html", null, true);
        echo " <strong>_START_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("to"), "html", null, true);
        echo " _END_</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("of"), "html", null, true);
        echo " _TOTAL_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entries"), "html", null, true);
        echo "\",
                    \"zeroRecords\": \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nothing found - sorry"), "html", null, true);
        echo "\",
                    \"infoEmpty\": \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No records available"), "html", null, true);
        echo "\",
                    \"sInfoEmpty\": \"";
        // line 91
        echo "{{ 'Showing' | trans }}";
        echo " <strong>0 ";
        echo "{{ 'to' | trans }}";
        echo " 0 ";
        echo "{{ 'of' | trans }}";
        echo " 0</strong> ";
        echo "{{ 'entries' | trans }}";
        echo "\",
                    \"infoFiltered\": \"(";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filtered from"), "html", null, true);
        echo " _MAX_ ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("total records"), "html", null, true);
        echo ")\",
                    \"sProcessing\":     \"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sLoadingRecords\": \"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading..."), "html", null, true);
        echo "\",
                    \"sProcessing\":     \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Processing..."), "html", null, true);
        echo "\",
                    \"sSearch\":         \"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search:"), "html", null, true);
        echo "\",
                    \"sZeroRecords\":    \"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No matching records found"), "html", null, true);
        echo "\",
                    \"oPaginate\": {
                        \"sFirst\":    \"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First"), "html", null, true);
        echo "\",
                        \"sLast\":     \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last"), "html", null, true);
        echo "\",
                        \"sNext\":     \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Next"), "html", null, true);
        echo "\",
                        \"sPrevious\": \"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Previous"), "html", null, true);
        echo "\"
                    },
                    \"oAria\": {
                        \"sSortAscending\":  \": ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("activate to sort column ascending"), "html", null, true);
        echo "\",
                        \"sSortDescending\": \": ";
        // line 106
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
        
        $__internal_744fabcb42d4f732302401a052256ee8196f0d070dfb45e7c695ad44dab54342->leave($__internal_744fabcb42d4f732302401a052256ee8196f0d070dfb45e7c695ad44dab54342_prof);

    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 106,  299 => 105,  293 => 102,  289 => 101,  285 => 100,  281 => 99,  276 => 97,  272 => 96,  268 => 95,  264 => 94,  260 => 93,  254 => 92,  244 => 91,  240 => 90,  236 => 89,  226 => 88,  202 => 66,  186 => 60,  175 => 56,  170 => 54,  166 => 53,  162 => 52,  156 => 51,  148 => 48,  143 => 45,  139 => 44,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  89 => 17,  83 => 14,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block breadcrumb %}*/
/*     {{ parent() }}*/
/*     <li class="active">{{ 'Users' | trans }}</li>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ 'User list' | trans }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <h1 class="page-title pull-left">{{ 'User list' | trans }}</h1>*/
/* */
/*     <div class="pull-right">*/
/*         <a data-parent="#content" class="btn btn-primary btn-lg mb-xs" href="{{ path('user_new') }}">{{ 'Create a new' | trans }}</a>*/
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
/*                     <tr>*/
/*                         <th>{{ 'Name' | trans }}</th>*/
/*                         <th class="hidden-xs no-sort">{{ 'Image' | trans }}</th>*/
/*                         <th class="hidden-xs">{{ 'Email' | trans }}</th>*/
/*                         <th>{{ 'Active' | trans }}</th>*/
/*                         <th class="hidden-xs">{{ 'Last Login' | trans }}</th>*/
/*                         <th width="120" class="no-sort">{{ 'Actions' | trans }}</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for user in users %}*/
/*                     <tr>*/
/*                         <td>*/
/*                             <span class="fw-semi-bold">*/
/*                                 <a href="{{ path('user_show', { 'id': user.id }) }}" data-remote="false" class="modal-info" data-toggle="modal" data-target="#infoModal">{{ user }}</a>*/
/*                             </span>*/
/*                         </td>*/
/*                         <td class="hidden-xs no-sort"><img src="http://dummyimage.com/40x40/242424/ffffff&text={{ user.initials }}" alt="{{ user }}"> </td>*/
/*                         <td class="hidden-xs">{{ user.email }}</td>*/
/*                         <td>{{ user.enabled ? 'YES' | trans : 'NO' | trans }}</td>*/
/*                         <td class="hidden-xs">{{ user.lastlogin ? user.lastlogin | date('Y-m-d H:i') | ago : 'Never' | trans }}</td>*/
/*                         <td>*/
/*                             <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Edit' | trans }}" data-original-title="{{ 'Edit' | trans }}" class="btn btn-default mb-xs" role="button" href="{{ path('user_edit', { 'id': user.id }) }}">*/
/*                                 <i class="fa fa-edit"></i>*/
/*                             </a>*/
/*                             &nbsp;*/
/*                             <a data-parent="#content" data-toggle="tooltip" data-placement="top" title="{{ 'Delete' | trans }}" data-original-title="{{ 'Delete' | trans }}" class="btn btn-danger mb-xs btn-delete" role="button" href="{{ path('user_delete', { 'id': user.id }) }}">*/
/*                                 <i class="fa fa-trash-o"></i>*/
/*                             </a>*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
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
/*                     "sInfoEmpty": "{{ "{{ 'Showing' | trans }}" }} <strong>0 {{ "{{ 'to' | trans }}" }} 0 {{ "{{ 'of' | trans }}" }} 0</strong> {{ "{{ 'entries' | trans }}" }}",*/
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
/* {% endblock %}*/
