<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_44223a56eb7d190efbbe6126e1c17e0778704f0c0e2ab7de69222b00c4261c5e extends Twig_Template
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
        $__internal_0dc7528e579f4d6d7c3a44eefcc842d51b5419bab8b16859f24d9653151d3377 = $this->env->getExtension("native_profiler");
        $__internal_0dc7528e579f4d6d7c3a44eefcc842d51b5419bab8b16859f24d9653151d3377->enter($__internal_0dc7528e579f4d6d7c3a44eefcc842d51b5419bab8b16859f24d9653151d3377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0dc7528e579f4d6d7c3a44eefcc842d51b5419bab8b16859f24d9653151d3377->leave($__internal_0dc7528e579f4d6d7c3a44eefcc842d51b5419bab8b16859f24d9653151d3377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
