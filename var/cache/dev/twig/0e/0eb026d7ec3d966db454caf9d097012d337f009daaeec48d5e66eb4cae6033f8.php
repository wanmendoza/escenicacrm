<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9187d899290fc0e48906222b2d89e6c50e009e65d6b1e0310876231b19fa608e extends Twig_Template
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
        $__internal_49812047515205d16e888855a674fd0c9dfcc88a2873d63f412b7e4a7f7c5939 = $this->env->getExtension("native_profiler");
        $__internal_49812047515205d16e888855a674fd0c9dfcc88a2873d63f412b7e4a7f7c5939->enter($__internal_49812047515205d16e888855a674fd0c9dfcc88a2873d63f412b7e4a7f7c5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_49812047515205d16e888855a674fd0c9dfcc88a2873d63f412b7e4a7f7c5939->leave($__internal_49812047515205d16e888855a674fd0c9dfcc88a2873d63f412b7e4a7f7c5939_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
