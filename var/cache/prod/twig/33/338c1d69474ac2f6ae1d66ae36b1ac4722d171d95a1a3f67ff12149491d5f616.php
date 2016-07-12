<?php

/* WbcThemeBundle:Partials/Widgets/sidebar:projects.html.twig */
class __TwigTemplate_f826aaf92c25e05c841bb41785f0111bff3f4a58e1a71dadbe1f6b3ba4c6ac0d extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Projects", array(), "messages");
        echo "</h5>
<!-- A place for sidebar notifications & alerts -->
<div class=\"sidebar-alerts\">
    <div class=\"alert fade in\">
        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</a>
        <span class=\"text-white fw-semi-bold\">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Sales Report", array(), "messages");
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Personal Responsibility", array(), "messages");
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
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/sidebar:projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  42 => 14,  35 => 10,  28 => 6,  19 => 1,);
    }
}
/* <h5 class="sidebar-nav-title">{% trans %}Projects{% endtrans %}</h5>*/
/* <!-- A place for sidebar notifications & alerts -->*/
/* <div class="sidebar-alerts">*/
/*     <div class="alert fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>*/
/*         <span class="text-white fw-semi-bold">{% trans %}Sales Report{% endtrans %}</span> <br>*/
/*         <div class="progress progress-xs mt-xs mb-0">*/
/*             <div class="progress-bar progress-bar-gray-light" style="width: 16%"></div>*/
/*         </div>*/
/*         <small>{% trans with {'`percent`': 12}  %}Calculating x-axis bias... `percent`%{% endtrans %}</small>*/
/*     </div>*/
/*     <div class="alert fade in">*/
/*         <a href="#" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>*/
/*         <span class="text-white fw-semi-bold">{% trans %}Personal Responsibility{% endtrans %}</span> <br>*/
/*         <div class="progress progress-xs mt-xs mb-0">*/
/*             <div class="progress-bar progress-bar-danger" style="width: 23%"></div>*/
/*         </div>*/
/*         <small>{% trans %}Provide required notes{% endtrans %}</small>*/
/*     </div>*/
/* </div>*/
