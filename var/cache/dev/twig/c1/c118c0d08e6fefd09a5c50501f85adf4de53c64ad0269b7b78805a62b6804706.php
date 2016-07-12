<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_26c6e8b19f9778f5c3d44f87e4fa95edaf4a30cb7a4c21a8de051af46c6d7cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c647b9c1c8a0084296034b50adfb72ccef5d85a11e772f0ffae76c5be097e14f = $this->env->getExtension("native_profiler");
        $__internal_c647b9c1c8a0084296034b50adfb72ccef5d85a11e772f0ffae76c5be097e14f->enter($__internal_c647b9c1c8a0084296034b50adfb72ccef5d85a11e772f0ffae76c5be097e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c647b9c1c8a0084296034b50adfb72ccef5d85a11e772f0ffae76c5be097e14f->leave($__internal_c647b9c1c8a0084296034b50adfb72ccef5d85a11e772f0ffae76c5be097e14f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_48deac6638c448e696ebd4d5874ee05ad3e72ef99d8f7f560c69072f776928a5 = $this->env->getExtension("native_profiler");
        $__internal_48deac6638c448e696ebd4d5874ee05ad3e72ef99d8f7f560c69072f776928a5->enter($__internal_48deac6638c448e696ebd4d5874ee05ad3e72ef99d8f7f560c69072f776928a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_48deac6638c448e696ebd4d5874ee05ad3e72ef99d8f7f560c69072f776928a5->leave($__internal_48deac6638c448e696ebd4d5874ee05ad3e72ef99d8f7f560c69072f776928a5_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
