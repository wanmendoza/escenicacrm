<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_251aac0523bbfd60e27365a1c09d5f60fc51f3a0bce1591eed138edc2769a33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_98553497a29e79e7214821be766fb10d2d4b4fde65805b60ffdb50b36a537510 = $this->env->getExtension("native_profiler");
        $__internal_98553497a29e79e7214821be766fb10d2d4b4fde65805b60ffdb50b36a537510->enter($__internal_98553497a29e79e7214821be766fb10d2d4b4fde65805b60ffdb50b36a537510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98553497a29e79e7214821be766fb10d2d4b4fde65805b60ffdb50b36a537510->leave($__internal_98553497a29e79e7214821be766fb10d2d4b4fde65805b60ffdb50b36a537510_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_551c8d22bba62e00ad93583ff83ef2d4a6deeb13d164fd5d461c5591d15cc7e8 = $this->env->getExtension("native_profiler");
        $__internal_551c8d22bba62e00ad93583ff83ef2d4a6deeb13d164fd5d461c5591d15cc7e8->enter($__internal_551c8d22bba62e00ad93583ff83ef2d4a6deeb13d164fd5d461c5591d15cc7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_551c8d22bba62e00ad93583ff83ef2d4a6deeb13d164fd5d461c5591d15cc7e8->leave($__internal_551c8d22bba62e00ad93583ff83ef2d4a6deeb13d164fd5d461c5591d15cc7e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c22f75e68e0c05ca3f69c2b5fb48129806d9266903c71af6ec58687de59f047d = $this->env->getExtension("native_profiler");
        $__internal_c22f75e68e0c05ca3f69c2b5fb48129806d9266903c71af6ec58687de59f047d->enter($__internal_c22f75e68e0c05ca3f69c2b5fb48129806d9266903c71af6ec58687de59f047d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c22f75e68e0c05ca3f69c2b5fb48129806d9266903c71af6ec58687de59f047d->leave($__internal_c22f75e68e0c05ca3f69c2b5fb48129806d9266903c71af6ec58687de59f047d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3cb580f04416880e84f1d3612c470def425e162bef05d1092f1e3dc76d78034 = $this->env->getExtension("native_profiler");
        $__internal_b3cb580f04416880e84f1d3612c470def425e162bef05d1092f1e3dc76d78034->enter($__internal_b3cb580f04416880e84f1d3612c470def425e162bef05d1092f1e3dc76d78034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b3cb580f04416880e84f1d3612c470def425e162bef05d1092f1e3dc76d78034->leave($__internal_b3cb580f04416880e84f1d3612c470def425e162bef05d1092f1e3dc76d78034_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
