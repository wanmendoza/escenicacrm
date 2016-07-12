<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_350e94c0ee65dc3ab6be0e24ef3d3399691cf86a9497e845825cf7786171513d extends Twig_Template
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
        $__internal_c7fb4e7a281456f5b770dbf366f55141121eb79790ef518b064639961118c9ba = $this->env->getExtension("native_profiler");
        $__internal_c7fb4e7a281456f5b770dbf366f55141121eb79790ef518b064639961118c9ba->enter($__internal_c7fb4e7a281456f5b770dbf366f55141121eb79790ef518b064639961118c9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c7fb4e7a281456f5b770dbf366f55141121eb79790ef518b064639961118c9ba->leave($__internal_c7fb4e7a281456f5b770dbf366f55141121eb79790ef518b064639961118c9ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
