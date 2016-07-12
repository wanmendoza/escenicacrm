<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_62f8d168fbd2899698a453424d614ee0df8fc9e07f1b7b0bb499ee9777afe359 extends Twig_Template
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
        $__internal_4045f22bbdc296f71ea8e754f5897654622cfe3afde0dc2fe127b5b4ca28e9f1 = $this->env->getExtension("native_profiler");
        $__internal_4045f22bbdc296f71ea8e754f5897654622cfe3afde0dc2fe127b5b4ca28e9f1->enter($__internal_4045f22bbdc296f71ea8e754f5897654622cfe3afde0dc2fe127b5b4ca28e9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4045f22bbdc296f71ea8e754f5897654622cfe3afde0dc2fe127b5b4ca28e9f1->leave($__internal_4045f22bbdc296f71ea8e754f5897654622cfe3afde0dc2fe127b5b4ca28e9f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
