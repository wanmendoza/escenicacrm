<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_9b94e59758f7272de7a301cbf2f57e59acf41e91849ef0d476e0af502c37f63e extends Twig_Template
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
        $__internal_e85a406c7e1a099ea5e9f27b5b6b38d7bced2475a85c1061a537ca96c4dc5b7f = $this->env->getExtension("native_profiler");
        $__internal_e85a406c7e1a099ea5e9f27b5b6b38d7bced2475a85c1061a537ca96c4dc5b7f->enter($__internal_e85a406c7e1a099ea5e9f27b5b6b38d7bced2475a85c1061a537ca96c4dc5b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e85a406c7e1a099ea5e9f27b5b6b38d7bced2475a85c1061a537ca96c4dc5b7f->leave($__internal_e85a406c7e1a099ea5e9f27b5b6b38d7bced2475a85c1061a537ca96c4dc5b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
