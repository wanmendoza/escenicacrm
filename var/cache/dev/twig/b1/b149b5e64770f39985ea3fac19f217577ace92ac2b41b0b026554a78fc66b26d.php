<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_060e6b736136864050ca184639e62aef9737dbb395826b370e4ffc0c4063f28e extends Twig_Template
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
        $__internal_9946ce154757ec034b10ead76ac6ac096935022c7c0b02c73ae084ab6ff63466 = $this->env->getExtension("native_profiler");
        $__internal_9946ce154757ec034b10ead76ac6ac096935022c7c0b02c73ae084ab6ff63466->enter($__internal_9946ce154757ec034b10ead76ac6ac096935022c7c0b02c73ae084ab6ff63466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9946ce154757ec034b10ead76ac6ac096935022c7c0b02c73ae084ab6ff63466->leave($__internal_9946ce154757ec034b10ead76ac6ac096935022c7c0b02c73ae084ab6ff63466_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
