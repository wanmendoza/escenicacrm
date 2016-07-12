<?php

/* WbcThemeBundle:Partials/Widgets/sidebar:labels.html.twig */
class __TwigTemplate_bbe9e2cf759ed85966a89ecc350c15ef58581175c51df1f1c4ff886ada507807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h5 class=\"sidebar-nav-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Labels", array(), "messages");
        echo " <a class=\"action-link\" href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i></a></h5>
<!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->
<ul class=\"sidebar-labels\">
    <li>
        <a href=\"#\">
            <!-- yep, .circle again -->
            <i class=\"fa fa-circle text-warning mr-xs\"></i>
            <span class=\"label-name\">";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("My Recent", array(), "messages");
        echo "</span>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"fa fa-circle text-gray mr-xs\"></i>
            <span class=\"label-name\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Starred", array(), "messages");
        echo "</span>
        </a>
    </li>
    <li>
        <a href=\"#\">
            <i class=\"fa fa-circle text-danger mr-xs\"></i>
            <span class=\"label-name\">";
        // line 20
        echo $this->env->getExtension('translator')->getTranslator()->trans("Background", array(), "messages");
        echo "</span>
        </a>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/sidebar:labels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  39 => 14,  30 => 8,  19 => 1,);
    }
}
/* <h5 class="sidebar-nav-title">{% trans %}Labels{% endtrans %} <a class="action-link" href="#"><i class="glyphicon glyphicon-plus"></i></a></h5>*/
/* <!-- some styled links in sidebar. ready to use as links to email folders, projects, groups, etc -->*/
/* <ul class="sidebar-labels">*/
/*     <li>*/
/*         <a href="#">*/
/*             <!-- yep, .circle again -->*/
/*             <i class="fa fa-circle text-warning mr-xs"></i>*/
/*             <span class="label-name">{% trans %}My Recent{% endtrans %}</span>*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="#">*/
/*             <i class="fa fa-circle text-gray mr-xs"></i>*/
/*             <span class="label-name">{% trans %}Starred{% endtrans %}</span>*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="#">*/
/*             <i class="fa fa-circle text-danger mr-xs"></i>*/
/*             <span class="label-name">{% trans %}Background{% endtrans %}</span>*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
