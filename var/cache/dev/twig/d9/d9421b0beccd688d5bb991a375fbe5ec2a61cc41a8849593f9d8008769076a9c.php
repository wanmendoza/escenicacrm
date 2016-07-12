<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_419ee137d7ee8d88fb4fb24b900e654165b5d81a78d22c39213a068ba2797781 extends Twig_Template
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
        $__internal_edfaf246bb449505de24dd1273abb67c855950e8d4f9181ec7595e49b85cd49d = $this->env->getExtension("native_profiler");
        $__internal_edfaf246bb449505de24dd1273abb67c855950e8d4f9181ec7595e49b85cd49d->enter($__internal_edfaf246bb449505de24dd1273abb67c855950e8d4f9181ec7595e49b85cd49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_edfaf246bb449505de24dd1273abb67c855950e8d4f9181ec7595e49b85cd49d->leave($__internal_edfaf246bb449505de24dd1273abb67c855950e8d4f9181ec7595e49b85cd49d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
