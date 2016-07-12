<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b1c8b88926123c64922688afb3acdb09fdd1ef69779a7f44dcc22a5c885f9825 extends Twig_Template
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
        $__internal_e47936029d82cb9e4d2df398db070a7dc01579d36ff0e0e2908f17c64e2fe38c = $this->env->getExtension("native_profiler");
        $__internal_e47936029d82cb9e4d2df398db070a7dc01579d36ff0e0e2908f17c64e2fe38c->enter($__internal_e47936029d82cb9e4d2df398db070a7dc01579d36ff0e0e2908f17c64e2fe38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e47936029d82cb9e4d2df398db070a7dc01579d36ff0e0e2908f17c64e2fe38c->leave($__internal_e47936029d82cb9e4d2df398db070a7dc01579d36ff0e0e2908f17c64e2fe38c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
