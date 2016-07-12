<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cd41001b3d28055c718bff13b22bf17b0587eb78b63e49e79331f45c3f07554e extends Twig_Template
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
        $__internal_7c8cd140b7ebfd22a59a40c5e8e3513c5b4eba8586e3178bfd24970abea04612 = $this->env->getExtension("native_profiler");
        $__internal_7c8cd140b7ebfd22a59a40c5e8e3513c5b4eba8586e3178bfd24970abea04612->enter($__internal_7c8cd140b7ebfd22a59a40c5e8e3513c5b4eba8586e3178bfd24970abea04612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7c8cd140b7ebfd22a59a40c5e8e3513c5b4eba8586e3178bfd24970abea04612->leave($__internal_7c8cd140b7ebfd22a59a40c5e8e3513c5b4eba8586e3178bfd24970abea04612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
