<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0d433aeaebfd08fdff0a1126b9e5f40a763dbe2cbbc3cf872859d5dbe8ff5128 extends Twig_Template
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
        $__internal_7c8f09c495c95b3bfd999fba7e7d899b6cc1b5983471328352b07790eb67b50d = $this->env->getExtension("native_profiler");
        $__internal_7c8f09c495c95b3bfd999fba7e7d899b6cc1b5983471328352b07790eb67b50d->enter($__internal_7c8f09c495c95b3bfd999fba7e7d899b6cc1b5983471328352b07790eb67b50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7c8f09c495c95b3bfd999fba7e7d899b6cc1b5983471328352b07790eb67b50d->leave($__internal_7c8f09c495c95b3bfd999fba7e7d899b6cc1b5983471328352b07790eb67b50d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
