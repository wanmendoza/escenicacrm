<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b9fbe2d2189fa4092b233535cc0a1fdbb2f4172a0891d449108917de271fa66 extends Twig_Template
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
        $__internal_8f73c31c06ebf70d5b55db5f0a10e00cc62cf341ddba278dd6e25808b46ec4a5 = $this->env->getExtension("native_profiler");
        $__internal_8f73c31c06ebf70d5b55db5f0a10e00cc62cf341ddba278dd6e25808b46ec4a5->enter($__internal_8f73c31c06ebf70d5b55db5f0a10e00cc62cf341ddba278dd6e25808b46ec4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8f73c31c06ebf70d5b55db5f0a10e00cc62cf341ddba278dd6e25808b46ec4a5->leave($__internal_8f73c31c06ebf70d5b55db5f0a10e00cc62cf341ddba278dd6e25808b46ec4a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
