<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b818c8aed2160dc2f88f6f1b98344158c12b9c91887ceed93b8cbe6cbee4e454 extends Twig_Template
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
        $__internal_f7f392980d7d022e52205f32b3eb43a8805a968f90864ee205860ec2ca7e61b3 = $this->env->getExtension("native_profiler");
        $__internal_f7f392980d7d022e52205f32b3eb43a8805a968f90864ee205860ec2ca7e61b3->enter($__internal_f7f392980d7d022e52205f32b3eb43a8805a968f90864ee205860ec2ca7e61b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f7f392980d7d022e52205f32b3eb43a8805a968f90864ee205860ec2ca7e61b3->leave($__internal_f7f392980d7d022e52205f32b3eb43a8805a968f90864ee205860ec2ca7e61b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
