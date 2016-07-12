<?php

/* WbcAdministratorBundle:Default:index.html.twig */
class __TwigTemplate_49bd1e3a37740cb5b92dd9c346970c41649cd519fe2bbd3ef9f2672c112885b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "WbcAdministratorBundle:Default:index.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <h1 class=\"page-title\">Dashboard <small><small>The Lucky One</small></small></h1>

    <div class=\"row\">
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <!-- .widget>header is generally a place for widget title and widget controls. see .widget in _base.scss -->
                <header>
                    <h5>
                        USERBASE GROWTH
                    </h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body\">
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Overall Growth</h6>
                            <p class=\"value\">76.38%</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Montly</h6>
                            <p class=\"value\">10.38%</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">24h</h6>
                            <p class=\"value\">3.38%</p>
                        </div>
                    </div>
                    <div class=\"progress progress-xs\">
                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\"
                             aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">
                        </div>
                    </div>
                    <p>
                        <small><span class=\"circle bg-warning\"><i class=\"glyphicon glyphicon-chevron-up\"></i></span></small>
                        <span class=\"fw-semi-bold\">17% higher</span>
                        than last month</p>
                </div>
            </section>
        </div>
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <header>
                    <h5>
                        TRAFFIC VALUES
                    </h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body\">
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Overall Values</h6>
                            <p class=\"value\">17 567 318</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Montly</h6>
                            <p class=\"value\">55 120</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">24h</h6>
                            <p class=\"value\">9 695</p>
                        </div>
                    </div>
                    <div class=\"progress progress-xs\">
                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"60\"
                             aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">
                        </div>
                    </div>
                    <p>
                        <small><span class=\"circle bg-warning\"><i class=\"fa fa-chevron-down\"></i></span></small>
                        <span class=\"fw-semi-bold\">8% lower</span>
                        than last month
                    </p>
                </div>
            </section>
        </div>
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <header>
                    <h5>
                        RANDOM VALUES
                    </h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body\">
                    <div class=\"stats-row\">
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Overcome T.</h6>
                            <p class=\"value\">104.85%</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">Takeoff Angle</h6>
                            <p class=\"value\">14.29&deg;</p>
                        </div>
                        <div class=\"stat-item\">
                            <h6 class=\"name\">World Pop.</h6>
                            <p class=\"value\">7,211M</p>
                        </div>
                    </div>
                    <div class=\"progress progress-xs\">
                        <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\"
                             aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%;\">
                        </div>
                    </div>
                    <p>
                        <small><span class=\"circle bg-warning\"><i class=\"fa fa-plus\"></i></span></small>
                        <span class=\"fw-semi-bold\">8 734 higher</span>
                        than last month
                    </p>
                </div>
            </section>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <header>
                    <h5><span class=\"label label-danger\">New</span> Messages</h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\"><i class=\"fa fa-refresh\"></i></a>
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body no-padding\">
                    <div class=\"list-group list-group-lg\">
                        <a class=\"list-group-item\" href=\"#\">
                                <span class=\"thumb-sm pull-left mr\">
                                    <img class=\"img-circle\" src=\"/base/demo/img/people/a2.jpg\" alt=\"...\">
                                    <i class=\"status status-bottom bg-success\"></i>
                                </span>
                            <h5 class=\"no-margin\">Chris Gray</h5>
                            <p class=\"help-block text-ellipsis no-margin\">Hey! What's up? So many times since we</p>
                        </a>
                        <a class=\"list-group-item\" href=\"#\">
                                <span class=\"thumb-sm pull-left mr\">
                                    <img class=\"img-circle\" src=\"/base/demo/img/people/a4.jpg\" alt=\"...\">
                                    <i class=\"status status-bottom bg-success\"></i>
                                </span>
                            <h5 class=\"no-margin\">Jamey Brownlow</h5>
                            <p class=\"help-block text-ellipsis no-margin\">Good news coming tonight. Seems they agreed to proceed</p>
                        </a>
                        <a class=\"list-group-item\" href=\"#\">
                                <span class=\"thumb-sm pull-left mr\">
                                    <img class=\"img-circle\" src=\"/base/demo/img/people/a1.jpg\" alt=\"...\">
                                    <i class=\"status status-bottom bg-warning\"></i>
                                </span>
                            <h5 class=\"no-margin\">Livia Walsh</h5>
                            <p class=\"help-block text-ellipsis no-margin\">Check my latest email plz!</p>
                        </a>
                        <a class=\"list-group-item\" href=\"#\">
                                <span class=\"thumb-sm pull-left mr\">
                                    <img class=\"img-circle\" src=\"/base/demo/img/people/a5.jpg\" alt=\"...\">
                                    <i class=\"status status-bottom bg-danger\"></i>
                                </span>
                            <h5 class=\"no-margin\">Jaron Fitzroy</h5>
                            <p class=\"help-block text-ellipsis no-margin\">What about summer break?</p>
                        </a>
                    </div>
                </div>
                <footer class=\"bg-body-light mt\">
                    <input type=\"search\" class=\"form-control input-sm\" placeholder=\"Search\">
                </footer>
            </section>
        </div>
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <header>
                    <h5>
                        Market <span class=\"fw-semi-bold\">Stats</span>
                    </h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body\">
                    <h3>\$720 Earned</h3>
                    <p class=\"fs-mini text-muted mb mt-sm\">
                        Target <span class=\"fw-semi-bold\">\$820</span> day earnings
                        is <span class=\"fw-semi-bold\">96%</span> reached.
                    </p>
                </div>
                <div class=\"widget-table-overflow\">
                    <table class=\"table table-striped table-sm\">
                        <thead class=\"no-bd\">
                        <tr>
                            <th>
                                <div class=\"checkbox\">
                                    <input id=\"checkbox210\" type=\"checkbox\" data-check-all=\"\">
                                    <label for=\"checkbox210\"></label>
                                </div>
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class=\"checkbox\">
                                    <input id=\"checkbox212\" type=\"checkbox\">
                                    <label for=\"checkbox212\"></label>
                                </div>
                            </td>
                            <td>HP Core i7</td>
                            <td class=\"text-align-right fw-semi-bold\">\$346.1</td>
                        </tr>
                        <tr>
                            <td>
                                <div class=\"checkbox\">
                                    <input id=\"checkbox214\" type=\"checkbox\">
                                    <label for=\"checkbox214\"></label>
                                </div>
                            </td>
                            <td>Air Pro</td>
                            <td class=\"text-align-right fw-semi-bold\">\$533.1</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"widget-body mt-xlg\">
                    <div id=\"rickshaw\" class=\"chart-overflow-bottom\"></div>
                </div>
            </section>
        </div>
        <div class=\"col-md-4\">
            <section class=\"widget\">
                <header>
                    <h5>Calendar</h5>
                    <div class=\"widget-controls\">
                        <a href=\"#\"><i class=\"glyphicon glyphicon-cog\"></i></a>
                        <a href=\"#\" data-widgster=\"close\"><i class=\"glyphicon glyphicon-remove\"></i></a>
                    </div>
                </header>
                <div class=\"widget-body no-padding\">
                    <div id=\"events-calendar\" class=\"bg-primary-light\"></div>
                    <div class=\"list-group fs-mini\">
                        <a href=\"#\" class=\"list-group-item text-ellipsis\">
                            <span class=\"badge bg-warning\">6:45</span>
                            Weed out the flower bed
                        </a>
                        <a href=\"#\" class=\"list-group-item text-ellipsis\">
                            <span class=\"badge bg-success\">9:41</span>
                            Stop world water pollution
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
";
    }

    // line 266
    public function block_extrascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 266,  32 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block body  -%}*/
/* */
/*     {{ parent() }}*/
/* */
/*     <h1 class="page-title">Dashboard <small><small>The Lucky One</small></small></h1>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <!-- .widget>header is generally a place for widget title and widget controls. see .widget in _base.scss -->*/
/*                 <header>*/
/*                     <h5>*/
/*                         USERBASE GROWTH*/
/*                     </h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#"><i class="glyphicon glyphicon-cog"></i></a>*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body">*/
/*                     <div class="stats-row">*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Overall Growth</h6>*/
/*                             <p class="value">76.38%</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Montly</h6>*/
/*                             <p class="value">10.38%</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">24h</h6>*/
/*                             <p class="value">3.38%</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="progress progress-xs">*/
/*                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"*/
/*                              aria-valuemin="0" aria-valuemax="100" style="width: 80%;">*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <small><span class="circle bg-warning"><i class="glyphicon glyphicon-chevron-up"></i></span></small>*/
/*                         <span class="fw-semi-bold">17% higher</span>*/
/*                         than last month</p>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <header>*/
/*                     <h5>*/
/*                         TRAFFIC VALUES*/
/*                     </h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#"><i class="glyphicon glyphicon-cog"></i></a>*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body">*/
/*                     <div class="stats-row">*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Overall Values</h6>*/
/*                             <p class="value">17 567 318</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Montly</h6>*/
/*                             <p class="value">55 120</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">24h</h6>*/
/*                             <p class="value">9 695</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="progress progress-xs">*/
/*                         <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"*/
/*                              aria-valuemin="0" aria-valuemax="100" style="width: 80%;">*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <small><span class="circle bg-warning"><i class="fa fa-chevron-down"></i></span></small>*/
/*                         <span class="fw-semi-bold">8% lower</span>*/
/*                         than last month*/
/*                     </p>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <header>*/
/*                     <h5>*/
/*                         RANDOM VALUES*/
/*                     </h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#"><i class="glyphicon glyphicon-cog"></i></a>*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body">*/
/*                     <div class="stats-row">*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Overcome T.</h6>*/
/*                             <p class="value">104.85%</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">Takeoff Angle</h6>*/
/*                             <p class="value">14.29&deg;</p>*/
/*                         </div>*/
/*                         <div class="stat-item">*/
/*                             <h6 class="name">World Pop.</h6>*/
/*                             <p class="value">7,211M</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="progress progress-xs">*/
/*                         <div class="progress-bar" role="progressbar" aria-valuenow="60"*/
/*                              aria-valuemin="0" aria-valuemax="100" style="width: 80%;">*/
/*                         </div>*/
/*                     </div>*/
/*                     <p>*/
/*                         <small><span class="circle bg-warning"><i class="fa fa-plus"></i></span></small>*/
/*                         <span class="fw-semi-bold">8 734 higher</span>*/
/*                         than last month*/
/*                     </p>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <header>*/
/*                     <h5><span class="label label-danger">New</span> Messages</h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#"><i class="fa fa-refresh"></i></a>*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body no-padding">*/
/*                     <div class="list-group list-group-lg">*/
/*                         <a class="list-group-item" href="#">*/
/*                                 <span class="thumb-sm pull-left mr">*/
/*                                     <img class="img-circle" src="/base/demo/img/people/a2.jpg" alt="...">*/
/*                                     <i class="status status-bottom bg-success"></i>*/
/*                                 </span>*/
/*                             <h5 class="no-margin">Chris Gray</h5>*/
/*                             <p class="help-block text-ellipsis no-margin">Hey! What's up? So many times since we</p>*/
/*                         </a>*/
/*                         <a class="list-group-item" href="#">*/
/*                                 <span class="thumb-sm pull-left mr">*/
/*                                     <img class="img-circle" src="/base/demo/img/people/a4.jpg" alt="...">*/
/*                                     <i class="status status-bottom bg-success"></i>*/
/*                                 </span>*/
/*                             <h5 class="no-margin">Jamey Brownlow</h5>*/
/*                             <p class="help-block text-ellipsis no-margin">Good news coming tonight. Seems they agreed to proceed</p>*/
/*                         </a>*/
/*                         <a class="list-group-item" href="#">*/
/*                                 <span class="thumb-sm pull-left mr">*/
/*                                     <img class="img-circle" src="/base/demo/img/people/a1.jpg" alt="...">*/
/*                                     <i class="status status-bottom bg-warning"></i>*/
/*                                 </span>*/
/*                             <h5 class="no-margin">Livia Walsh</h5>*/
/*                             <p class="help-block text-ellipsis no-margin">Check my latest email plz!</p>*/
/*                         </a>*/
/*                         <a class="list-group-item" href="#">*/
/*                                 <span class="thumb-sm pull-left mr">*/
/*                                     <img class="img-circle" src="/base/demo/img/people/a5.jpg" alt="...">*/
/*                                     <i class="status status-bottom bg-danger"></i>*/
/*                                 </span>*/
/*                             <h5 class="no-margin">Jaron Fitzroy</h5>*/
/*                             <p class="help-block text-ellipsis no-margin">What about summer break?</p>*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <footer class="bg-body-light mt">*/
/*                     <input type="search" class="form-control input-sm" placeholder="Search">*/
/*                 </footer>*/
/*             </section>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <header>*/
/*                     <h5>*/
/*                         Market <span class="fw-semi-bold">Stats</span>*/
/*                     </h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body">*/
/*                     <h3>$720 Earned</h3>*/
/*                     <p class="fs-mini text-muted mb mt-sm">*/
/*                         Target <span class="fw-semi-bold">$820</span> day earnings*/
/*                         is <span class="fw-semi-bold">96%</span> reached.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="widget-table-overflow">*/
/*                     <table class="table table-striped table-sm">*/
/*                         <thead class="no-bd">*/
/*                         <tr>*/
/*                             <th>*/
/*                                 <div class="checkbox">*/
/*                                     <input id="checkbox210" type="checkbox" data-check-all="">*/
/*                                     <label for="checkbox210"></label>*/
/*                                 </div>*/
/*                             </th>*/
/*                             <th></th>*/
/*                             <th></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <div class="checkbox">*/
/*                                     <input id="checkbox212" type="checkbox">*/
/*                                     <label for="checkbox212"></label>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>HP Core i7</td>*/
/*                             <td class="text-align-right fw-semi-bold">$346.1</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <div class="checkbox">*/
/*                                     <input id="checkbox214" type="checkbox">*/
/*                                     <label for="checkbox214"></label>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td>Air Pro</td>*/
/*                             <td class="text-align-right fw-semi-bold">$533.1</td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="widget-body mt-xlg">*/
/*                     <div id="rickshaw" class="chart-overflow-bottom"></div>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <section class="widget">*/
/*                 <header>*/
/*                     <h5>Calendar</h5>*/
/*                     <div class="widget-controls">*/
/*                         <a href="#"><i class="glyphicon glyphicon-cog"></i></a>*/
/*                         <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>*/
/*                     </div>*/
/*                 </header>*/
/*                 <div class="widget-body no-padding">*/
/*                     <div id="events-calendar" class="bg-primary-light"></div>*/
/*                     <div class="list-group fs-mini">*/
/*                         <a href="#" class="list-group-item text-ellipsis">*/
/*                             <span class="badge bg-warning">6:45</span>*/
/*                             Weed out the flower bed*/
/*                         </a>*/
/*                         <a href="#" class="list-group-item text-ellipsis">*/
/*                             <span class="badge bg-success">9:41</span>*/
/*                             Stop world water pollution*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block extrascripts %}*/
/* {% endblock %}*/
