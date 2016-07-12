<?php

/* WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig */
class __TwigTemplate_1e734acebc5b091e1ef84353768640781a94303a0c3cf3d0f63c01334a1d9458 extends Twig_Template
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
        $__internal_f367438e427af41c174870742e56a1457039e4eb349e696323a0a3779b47f16c = $this->env->getExtension("native_profiler");
        $__internal_f367438e427af41c174870742e56a1457039e4eb349e696323a0a3779b47f16c->enter($__internal_f367438e427af41c174870742e56a1457039e4eb349e696323a0a3779b47f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig"));

        // line 1
        echo "<h5 class=\"sidebar-nav-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Eventos", array(), "messages");
        echo "</h5>
<!-- A place for sidebar notifications & alerts -->
<div class=\"sidebar-alerts\">
    <div class=\"alert fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</a>
        <span class=\"text-white fw-semi-bold\">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Reportes de Ventas", array(), "messages");
        echo "</span> <br>
        <div class=\"progress progress-xs mt-xs mb-0\">
            <div class=\"progress-bar progress-bar-gray-light\" style=\"width: 16%\"></div>
        </div>
        <small>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calculating x-axis bias... `percent`%", array("`percent`" => 12), "messages");
        echo "</small>
    </div>
    <div class=\"alert fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</a>
        <span class=\"text-white fw-semi-bold\">";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Bodega", array(), "messages");
        echo "</span> <br>
        <div class=\"progress progress-xs mt-xs mb-0\">
            <div class=\"progress-bar progress-bar-danger\" style=\"width: 23%\"></div>
        </div>
        <small>";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Provide required notes", array(), "messages");
        echo "</small>
    </div>
</div>";
        
        $__internal_f367438e427af41c174870742e56a1457039e4eb349e696323a0a3779b47f16c->leave($__internal_f367438e427af41c174870742e56a1457039e4eb349e696323a0a3779b47f16c_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:Widgets/sidebar/projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  45 => 14,  38 => 10,  31 => 6,  22 => 1,);
    }
}
/* <h5 class="sidebar-nav-title">{% trans %}Eventos{% endtrans %}</h5>*/
/* <!-- A place for sidebar notifications & alerts -->*/
/* <div class="sidebar-alerts">*/
/*     <div class="alert fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>*/
/*         <span class="text-white fw-semi-bold">{% trans %}Reportes de Ventas{% endtrans %}</span> <br>*/
/*         <div class="progress progress-xs mt-xs mb-0">*/
/*             <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>*/
/*         </div>*/
/*         <small>{% trans with {'`percent`': 12}  %}Calculating x-axis bias... `percent`%{% endtrans %}</small>*/
/*     </div>*/
/*     <div class="alert fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>*/
/*         <span class="text-white fw-semi-bold">{% trans %}Bodega{% endtrans %}</span> <br>*/
/*         <div class="progress progress-xs mt-xs mb-0">*/
/*             <div class="progress-bar progress-bar-danger" style="width: 23%"></div>*/
/*         </div>*/
/*         <small>{% trans %}Provide required notes{% endtrans %}</small>*/
/*     </div>*/
/* </div>*/
