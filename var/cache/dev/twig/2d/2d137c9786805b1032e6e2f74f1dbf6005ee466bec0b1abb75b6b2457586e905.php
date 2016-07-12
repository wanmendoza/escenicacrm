<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8cca244dfbfc66a74fb32ef2ede3bdf43cc8c8b83c21fd2cbbd2a9ab7aed18ac extends Twig_Template
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
        $__internal_7452b90942cb4d6d9085e2751aa0c185f1c3b56fecbdf820817ffd80b67e27f5 = $this->env->getExtension("native_profiler");
        $__internal_7452b90942cb4d6d9085e2751aa0c185f1c3b56fecbdf820817ffd80b67e27f5->enter($__internal_7452b90942cb4d6d9085e2751aa0c185f1c3b56fecbdf820817ffd80b67e27f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7452b90942cb4d6d9085e2751aa0c185f1c3b56fecbdf820817ffd80b67e27f5->leave($__internal_7452b90942cb4d6d9085e2751aa0c185f1c3b56fecbdf820817ffd80b67e27f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
