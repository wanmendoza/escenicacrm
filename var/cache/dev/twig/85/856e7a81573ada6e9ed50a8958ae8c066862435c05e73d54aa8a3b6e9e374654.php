<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84295eea72d2702a20ceba1c01d06c6ac2e70f6d62da05cef3bb2dfb77c263d3 extends Twig_Template
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
        $__internal_4f87f04d4961ffb571dd58f1f242ec82c65954df253ce24f29f922e3fb4f854a = $this->env->getExtension("native_profiler");
        $__internal_4f87f04d4961ffb571dd58f1f242ec82c65954df253ce24f29f922e3fb4f854a->enter($__internal_4f87f04d4961ffb571dd58f1f242ec82c65954df253ce24f29f922e3fb4f854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4f87f04d4961ffb571dd58f1f242ec82c65954df253ce24f29f922e3fb4f854a->leave($__internal_4f87f04d4961ffb571dd58f1f242ec82c65954df253ce24f29f922e3fb4f854a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
