<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2455f5552d4f786ba534a72d6ee56a1c83c07d96973ddfc9dc2fe79072593c8c extends Twig_Template
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
        $__internal_5c5752c4bfb6761fa36da4a3bfce7124c481b78bc196850e6e40166bdd4db0a9 = $this->env->getExtension("native_profiler");
        $__internal_5c5752c4bfb6761fa36da4a3bfce7124c481b78bc196850e6e40166bdd4db0a9->enter($__internal_5c5752c4bfb6761fa36da4a3bfce7124c481b78bc196850e6e40166bdd4db0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5c5752c4bfb6761fa36da4a3bfce7124c481b78bc196850e6e40166bdd4db0a9->leave($__internal_5c5752c4bfb6761fa36da4a3bfce7124c481b78bc196850e6e40166bdd4db0a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
