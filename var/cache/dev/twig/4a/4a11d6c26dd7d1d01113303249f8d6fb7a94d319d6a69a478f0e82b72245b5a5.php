<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09923a78a81e3ed479fb5deff097a97470f0d0f49381d357a431f873b1cb2472 extends Twig_Template
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
        $__internal_2b70921d80a600ab7ccdea7b05555bf2359dd1336a63180134577f9b1c05b339 = $this->env->getExtension("native_profiler");
        $__internal_2b70921d80a600ab7ccdea7b05555bf2359dd1336a63180134577f9b1c05b339->enter($__internal_2b70921d80a600ab7ccdea7b05555bf2359dd1336a63180134577f9b1c05b339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2b70921d80a600ab7ccdea7b05555bf2359dd1336a63180134577f9b1c05b339->leave($__internal_2b70921d80a600ab7ccdea7b05555bf2359dd1336a63180134577f9b1c05b339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
