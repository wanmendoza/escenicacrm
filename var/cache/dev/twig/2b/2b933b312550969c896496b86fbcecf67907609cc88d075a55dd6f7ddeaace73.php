<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_da6efff2bb76a93c89e46eb81ce238f3a7e4844cba905d1055d7baf80a666c5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_766022499514217864c3a4afb2a922beba46c6fab6eadefccb1823d70915c627 = $this->env->getExtension("native_profiler");
        $__internal_766022499514217864c3a4afb2a922beba46c6fab6eadefccb1823d70915c627->enter($__internal_766022499514217864c3a4afb2a922beba46c6fab6eadefccb1823d70915c627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_766022499514217864c3a4afb2a922beba46c6fab6eadefccb1823d70915c627->leave($__internal_766022499514217864c3a4afb2a922beba46c6fab6eadefccb1823d70915c627_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8db6f7691dcf603bd60f4cd395ee1336995204260cb835873e66f5010746f88 = $this->env->getExtension("native_profiler");
        $__internal_c8db6f7691dcf603bd60f4cd395ee1336995204260cb835873e66f5010746f88->enter($__internal_c8db6f7691dcf603bd60f4cd395ee1336995204260cb835873e66f5010746f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c8db6f7691dcf603bd60f4cd395ee1336995204260cb835873e66f5010746f88->leave($__internal_c8db6f7691dcf603bd60f4cd395ee1336995204260cb835873e66f5010746f88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_953eb46b34708f4c6dd62739a6f236cafec35d0e32b18606c27ef9b59c3318a0 = $this->env->getExtension("native_profiler");
        $__internal_953eb46b34708f4c6dd62739a6f236cafec35d0e32b18606c27ef9b59c3318a0->enter($__internal_953eb46b34708f4c6dd62739a6f236cafec35d0e32b18606c27ef9b59c3318a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_953eb46b34708f4c6dd62739a6f236cafec35d0e32b18606c27ef9b59c3318a0->leave($__internal_953eb46b34708f4c6dd62739a6f236cafec35d0e32b18606c27ef9b59c3318a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39d3dc97d32435e4e8df4132360f2b17da39f265a679fe0f859bb141562d5904 = $this->env->getExtension("native_profiler");
        $__internal_39d3dc97d32435e4e8df4132360f2b17da39f265a679fe0f859bb141562d5904->enter($__internal_39d3dc97d32435e4e8df4132360f2b17da39f265a679fe0f859bb141562d5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39d3dc97d32435e4e8df4132360f2b17da39f265a679fe0f859bb141562d5904->leave($__internal_39d3dc97d32435e4e8df4132360f2b17da39f265a679fe0f859bb141562d5904_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
