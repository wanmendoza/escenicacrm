<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8e45046c54da1435ed5f11eddb2eb0f9a8fa13c5949dacfdb6d0c751f59f3ead extends Twig_Template
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
        $__internal_c3a553e2b330fa0bd9411c40597c887a0dbef968935c680eb0c6b7dfc17fa4da = $this->env->getExtension("native_profiler");
        $__internal_c3a553e2b330fa0bd9411c40597c887a0dbef968935c680eb0c6b7dfc17fa4da->enter($__internal_c3a553e2b330fa0bd9411c40597c887a0dbef968935c680eb0c6b7dfc17fa4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c3a553e2b330fa0bd9411c40597c887a0dbef968935c680eb0c6b7dfc17fa4da->leave($__internal_c3a553e2b330fa0bd9411c40597c887a0dbef968935c680eb0c6b7dfc17fa4da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
