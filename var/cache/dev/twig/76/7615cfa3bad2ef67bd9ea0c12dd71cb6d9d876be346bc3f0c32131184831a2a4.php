<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c54ec704c9ba0cd08bb6184d668df0fb751cf3685735039037ba7d77c71f6e5e extends Twig_Template
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
        $__internal_883434a359b1672b90e0b069943a08d10f3826f497f0eaf85917c003823697c6 = $this->env->getExtension("native_profiler");
        $__internal_883434a359b1672b90e0b069943a08d10f3826f497f0eaf85917c003823697c6->enter($__internal_883434a359b1672b90e0b069943a08d10f3826f497f0eaf85917c003823697c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_883434a359b1672b90e0b069943a08d10f3826f497f0eaf85917c003823697c6->leave($__internal_883434a359b1672b90e0b069943a08d10f3826f497f0eaf85917c003823697c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
