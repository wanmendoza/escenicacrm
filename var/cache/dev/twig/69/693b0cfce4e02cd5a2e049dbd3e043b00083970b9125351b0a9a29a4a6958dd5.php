<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4ea72d5ac2ba9dc73df11f93c9841e5d6abf9fa2b434009af6b14d0838ec2434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_244dd99a511a499eaf02ebcfa31a2a2f77c01ccc337c2197a60501a05d0ba0bf = $this->env->getExtension("native_profiler");
        $__internal_244dd99a511a499eaf02ebcfa31a2a2f77c01ccc337c2197a60501a05d0ba0bf->enter($__internal_244dd99a511a499eaf02ebcfa31a2a2f77c01ccc337c2197a60501a05d0ba0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_244dd99a511a499eaf02ebcfa31a2a2f77c01ccc337c2197a60501a05d0ba0bf->leave($__internal_244dd99a511a499eaf02ebcfa31a2a2f77c01ccc337c2197a60501a05d0ba0bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_624b524eb95b1ab32cb0c16c09f3455b6e03fd84bfdc0caf1b0a42d04081ef96 = $this->env->getExtension("native_profiler");
        $__internal_624b524eb95b1ab32cb0c16c09f3455b6e03fd84bfdc0caf1b0a42d04081ef96->enter($__internal_624b524eb95b1ab32cb0c16c09f3455b6e03fd84bfdc0caf1b0a42d04081ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_624b524eb95b1ab32cb0c16c09f3455b6e03fd84bfdc0caf1b0a42d04081ef96->leave($__internal_624b524eb95b1ab32cb0c16c09f3455b6e03fd84bfdc0caf1b0a42d04081ef96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14ae6c09b7e5957b9e2fd46ef3e68383fe63cfa53c4ece716bf2bab32ffe1e6b = $this->env->getExtension("native_profiler");
        $__internal_14ae6c09b7e5957b9e2fd46ef3e68383fe63cfa53c4ece716bf2bab32ffe1e6b->enter($__internal_14ae6c09b7e5957b9e2fd46ef3e68383fe63cfa53c4ece716bf2bab32ffe1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14ae6c09b7e5957b9e2fd46ef3e68383fe63cfa53c4ece716bf2bab32ffe1e6b->leave($__internal_14ae6c09b7e5957b9e2fd46ef3e68383fe63cfa53c4ece716bf2bab32ffe1e6b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
