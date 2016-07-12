<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_6af566f551f0c904e76913d517f33c67c215237d4b6aba0e5f145c89ea5dead8 extends Twig_Template
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
        $__internal_82e53700816c9638d194139d70f4a06c44d641547cf7da51acc9e2c48950a954 = $this->env->getExtension("native_profiler");
        $__internal_82e53700816c9638d194139d70f4a06c44d641547cf7da51acc9e2c48950a954->enter($__internal_82e53700816c9638d194139d70f4a06c44d641547cf7da51acc9e2c48950a954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_82e53700816c9638d194139d70f4a06c44d641547cf7da51acc9e2c48950a954->leave($__internal_82e53700816c9638d194139d70f4a06c44d641547cf7da51acc9e2c48950a954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
