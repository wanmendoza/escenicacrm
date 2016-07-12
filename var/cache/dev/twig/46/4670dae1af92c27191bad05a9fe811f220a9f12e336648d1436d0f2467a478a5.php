<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b4677bf7720f86bb456de9a2adfdb13228bb383b718a6f1f30c5b4dc0335e9ab extends Twig_Template
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
        $__internal_d3c5d118fb941c5bf4dde3b961a6b618074d39e24ae5c178dc3ba4516f38212e = $this->env->getExtension("native_profiler");
        $__internal_d3c5d118fb941c5bf4dde3b961a6b618074d39e24ae5c178dc3ba4516f38212e->enter($__internal_d3c5d118fb941c5bf4dde3b961a6b618074d39e24ae5c178dc3ba4516f38212e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d3c5d118fb941c5bf4dde3b961a6b618074d39e24ae5c178dc3ba4516f38212e->leave($__internal_d3c5d118fb941c5bf4dde3b961a6b618074d39e24ae5c178dc3ba4516f38212e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
