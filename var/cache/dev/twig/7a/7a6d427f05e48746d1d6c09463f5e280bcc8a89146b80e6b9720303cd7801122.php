<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3a2408fcd5341449f6542a9c1abd09113c67975020d293ec2239f2b268bc4ec4 extends Twig_Template
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
        $__internal_7db8fd496f8d92714add906535acf782600e1419383d454a9f832ef4876034ac = $this->env->getExtension("native_profiler");
        $__internal_7db8fd496f8d92714add906535acf782600e1419383d454a9f832ef4876034ac->enter($__internal_7db8fd496f8d92714add906535acf782600e1419383d454a9f832ef4876034ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7db8fd496f8d92714add906535acf782600e1419383d454a9f832ef4876034ac->leave($__internal_7db8fd496f8d92714add906535acf782600e1419383d454a9f832ef4876034ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
