<?php

/* WbcAdministratorBundle:Default:search.html.twig */
class __TwigTemplate_493b9b55f05316f4adaccdf16458c1ed613cddcafe28cdf71777474b876d44eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WbcThemeBundle::layout.html.twig", "WbcAdministratorBundle:Default:search.html.twig", 1);
        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Search result", array(), "messages");
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <ol class=\"breadcrumb\">
        <li>YOU ARE HERE</li>
        <li class=\"active\">Search Results</li>
    </ol>
    <h1 class=\"page-title\">Matching - <span class=\"fw-semi-bold\">Results</span></h1>
    <div class=\"clearfix\">
        <div class=\"btn-toolbar\">
            <div class=\"btn-group\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"btn dropdown-toggle btn-default\">
                    Popular <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">All</a></li>
                    <li><a href=\"#\">Popular</a></li>
                    <li><a href=\"#\">Interesting</a></li>
                    <li><a href=\"#\">Latest</a></li>
                </ul>
            </div>
            <div class=\"btn-group\">
                <a href=\"#\" data-toggle=\"dropdown\" class=\"btn dropdown-toggle btn-default\">
                    All Time <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Last 24h</a></li>
                    <li><a href=\"#\">Last Month</a></li>
                    <li><a href=\"#\">Last Year</a></li>
                </ul>
            </div>
            <div class=\"btn-group pull-right\">
                <button class=\"btn btn-gray active\" type=\"button\"><i class=\"fa fa-th-list\"></i></button>
                <button class=\"btn btn-gray\" type=\"button\"><i class=\"fa fa-th-large\"></i></button>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-3 col-lg-push-9\">
            <h4>Results <span class=\"fw-semi-bold\">Filtering</span></h4>
            <p class=\"text-muted fs-mini\">Listed content is categorized by the following groups:</p>
            <ul class=\"nav nav-pills nav-stacked search-result-categories mt\">
                <li>
                    <a href=\"#\">
                        Hot Ideas
                        <span class=\"badge\">34</span>
                    </a>
                </li>
                <li><a href=\"#\">
                        Latest Pictures
                        <span class=\"badge\">9</span>
                    </a></li>
                <li><a href=\"#\">Labels of Day</a></li>
                <li>
                    <a href=\"#\">
                        Recent Movies
                    </a>
                </li>
                <li>
                    <a href=\"#\">Globals <span class=\"badge\">18</span></a>
                </li>
            </ul>
        </div>
        <div class=\"col-lg-9 col-lg-pull-3\">
            <p class=\"search-results-count\">About 94 700 000 (0.39 sec.) results</p>

            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "            <section class=\"search-result-item\">
                <a class=\"image-link\" href=\"#\">
                    <img class=\"image\" src=\"http://dummyimage.com/150x150/000/ffffff&text=Test+image\">
                </a>
                <div class=\"search-result-item-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-9\">
                            <h4 class=\"search-result-item-heading\">
                                <a href=\"#\">Next generation admin template</a>
                            </h4>
                            <p class=\"info\">
                                New York, NY 20188
                            </p>
                            <p class=\"description\">
                                Not just usual Metro. But something bigger. Not just usual widgets, but real
                                widgets. Not just yet another admin template, but next generation admin template.
                            </p>
                        </div>
                        <div class=\"col-sm-3 text-align-center\">
                            <p class=\"value3 mt-sm\">
                                \$9, 700
                            </p>
                            <p class=\"fs-mini text-muted\">
                                PER WEEK
                            </p>
                            <a class=\"btn btn-primary btn-info btn-sm\" href=\"#\">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            <div class=\"text-align-center\">
                <ul class=\"pagination pagination-sm\">
                    <li class=\"disabled\"><a href=\"#\">Prev</a></li>
                    <li class=\"active\"><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 104,  111 => 73,  107 => 72,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'WbcThemeBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {% trans %}Search result{% endtrans %}*/
/* {% endblock %}*/
/* */
/* {% block body  -%}*/
/*     {{ parent() }}*/
/*     <ol class="breadcrumb">*/
/*         <li>YOU ARE HERE</li>*/
/*         <li class="active">Search Results</li>*/
/*     </ol>*/
/*     <h1 class="page-title">Matching - <span class="fw-semi-bold">Results</span></h1>*/
/*     <div class="clearfix">*/
/*         <div class="btn-toolbar">*/
/*             <div class="btn-group">*/
/*                 <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-default">*/
/*                     Popular <span class="caret"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="#">All</a></li>*/
/*                     <li><a href="#">Popular</a></li>*/
/*                     <li><a href="#">Interesting</a></li>*/
/*                     <li><a href="#">Latest</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="btn-group">*/
/*                 <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-default">*/
/*                     All Time <span class="caret"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="#">Last 24h</a></li>*/
/*                     <li><a href="#">Last Month</a></li>*/
/*                     <li><a href="#">Last Year</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="btn-group pull-right">*/
/*                 <button class="btn btn-gray active" type="button"><i class="fa fa-th-list"></i></button>*/
/*                 <button class="btn btn-gray" type="button"><i class="fa fa-th-large"></i></button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-3 col-lg-push-9">*/
/*             <h4>Results <span class="fw-semi-bold">Filtering</span></h4>*/
/*             <p class="text-muted fs-mini">Listed content is categorized by the following groups:</p>*/
/*             <ul class="nav nav-pills nav-stacked search-result-categories mt">*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         Hot Ideas*/
/*                         <span class="badge">34</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li><a href="#">*/
/*                         Latest Pictures*/
/*                         <span class="badge">9</span>*/
/*                     </a></li>*/
/*                 <li><a href="#">Labels of Day</a></li>*/
/*                 <li>*/
/*                     <a href="#">*/
/*                         Recent Movies*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="#">Globals <span class="badge">18</span></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="col-lg-9 col-lg-pull-3">*/
/*             <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>*/
/* */
/*             {% for i in 0..4 %}*/
/*             <section class="search-result-item">*/
/*                 <a class="image-link" href="#">*/
/*                     <img class="image" src="http://dummyimage.com/150x150/000/ffffff&text=Test+image">*/
/*                 </a>*/
/*                 <div class="search-result-item-body">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-9">*/
/*                             <h4 class="search-result-item-heading">*/
/*                                 <a href="#">Next generation admin template</a>*/
/*                             </h4>*/
/*                             <p class="info">*/
/*                                 New York, NY 20188*/
/*                             </p>*/
/*                             <p class="description">*/
/*                                 Not just usual Metro. But something bigger. Not just usual widgets, but real*/
/*                                 widgets. Not just yet another admin template, but next generation admin template.*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="col-sm-3 text-align-center">*/
/*                             <p class="value3 mt-sm">*/
/*                                 $9, 700*/
/*                             </p>*/
/*                             <p class="fs-mini text-muted">*/
/*                                 PER WEEK*/
/*                             </p>*/
/*                             <a class="btn btn-primary btn-info btn-sm" href="#">Learn More</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             {% endfor %}*/
/*             <div class="text-align-center">*/
/*                 <ul class="pagination pagination-sm">*/
/*                     <li class="disabled"><a href="#">Prev</a></li>*/
/*                     <li class="active"><a href="#">1</a></li>*/
/*                     <li><a href="#">2</a></li>*/
/*                     <li><a href="#">3</a></li>*/
/*                     <li><a href="#">4</a></li>*/
/*                     <li><a href="#">5</a></li>*/
/*                     <li><a href="#">Next</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
