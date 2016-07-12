<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8032ee9bad508e0b29cbb9d5582df8ea58f6fdd7c12ef6f36d3417c4c9d5cf0d extends Twig_Template
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
        $__internal_d45f23080f0d2d27bace50fed6b24536a65b1edcb783de0cc83c60e076c800c7 = $this->env->getExtension("native_profiler");
        $__internal_d45f23080f0d2d27bace50fed6b24536a65b1edcb783de0cc83c60e076c800c7->enter($__internal_d45f23080f0d2d27bace50fed6b24536a65b1edcb783de0cc83c60e076c800c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d45f23080f0d2d27bace50fed6b24536a65b1edcb783de0cc83c60e076c800c7->leave($__internal_d45f23080f0d2d27bace50fed6b24536a65b1edcb783de0cc83c60e076c800c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
