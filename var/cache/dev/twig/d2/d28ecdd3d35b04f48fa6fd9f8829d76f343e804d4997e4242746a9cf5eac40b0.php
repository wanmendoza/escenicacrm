<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_28acb1a8ee59124fd3acc170d85d82ad64440d2c7742e52dfaa4c4dd35b34f63 extends Twig_Template
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
        $__internal_5d876672e55cdcf39b8eef8857b3977dbf41c55b10b10b723c3b5a0368e3a6c9 = $this->env->getExtension("native_profiler");
        $__internal_5d876672e55cdcf39b8eef8857b3977dbf41c55b10b10b723c3b5a0368e3a6c9->enter($__internal_5d876672e55cdcf39b8eef8857b3977dbf41c55b10b10b723c3b5a0368e3a6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5d876672e55cdcf39b8eef8857b3977dbf41c55b10b10b723c3b5a0368e3a6c9->leave($__internal_5d876672e55cdcf39b8eef8857b3977dbf41c55b10b10b723c3b5a0368e3a6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
