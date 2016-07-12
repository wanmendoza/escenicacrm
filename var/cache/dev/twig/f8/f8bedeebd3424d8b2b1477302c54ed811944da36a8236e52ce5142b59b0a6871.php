<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_031886ae86581586b382023988b1669978273f56681c625f451507c09edf62a7 extends Twig_Template
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
        $__internal_ff32e19334e0ed9cd4836f2389f6227c21528e9f5bf98baadb247b79b2405225 = $this->env->getExtension("native_profiler");
        $__internal_ff32e19334e0ed9cd4836f2389f6227c21528e9f5bf98baadb247b79b2405225->enter($__internal_ff32e19334e0ed9cd4836f2389f6227c21528e9f5bf98baadb247b79b2405225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ff32e19334e0ed9cd4836f2389f6227c21528e9f5bf98baadb247b79b2405225->leave($__internal_ff32e19334e0ed9cd4836f2389f6227c21528e9f5bf98baadb247b79b2405225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
