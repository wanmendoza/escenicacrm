<?php

/* WbcThemeBundle:Partials/Widgets/security:flash.html.twig */
class __TwigTemplate_070d94f14917d4e8420b873b7b596291d614ce86f6c6f1d8bfaf2332acd2b584 extends Twig_Template
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
        $__internal_168e6799288f2fa567770f10e9219e1b862fbcf9ce34c883d32dd9c130edfc47 = $this->env->getExtension("native_profiler");
        $__internal_168e6799288f2fa567770f10e9219e1b862fbcf9ce34c883d32dd9c130edfc47->enter($__internal_168e6799288f2fa567770f10e9219e1b862fbcf9ce34c883d32dd9c130edfc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials/Widgets/security:flash.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 2
            echo "    <div class=\"alert alert-success alert-sm\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        <span class=\"fw-semi-bold\">Success:</span> ";
            // line 4
            echo $context["flash_message"];
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 8
            echo "    <div class=\"alert alert-warning alert-sm\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        <span class=\"fw-semi-bold\">Warning:</span> ";
            // line 10
            echo $context["flash_message"];
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "    <div class=\"alert alert-danger alert-sm\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 16
            echo $context["flash_message"];
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 20
            echo "    <div class=\"alert alert-info alert-sm\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        <span class=\"fw-semi-bold\">Informtion:</span> ";
            // line 22
            echo $context["flash_message"];
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_168e6799288f2fa567770f10e9219e1b862fbcf9ce34c883d32dd9c130edfc47->leave($__internal_168e6799288f2fa567770f10e9219e1b862fbcf9ce34c883d32dd9c130edfc47_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/security:flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  77 => 20,  73 => 19,  64 => 16,  60 => 14,  56 => 13,  47 => 10,  43 => 8,  39 => 7,  30 => 4,  26 => 2,  22 => 1,);
    }
}
/* {% for flash_message in app.session.flashbag.get('success') %}*/
/*     <div class="alert alert-success alert-sm">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*         <span class="fw-semi-bold">Success:</span> {{ flash_message | raw }}*/
/*     </div>*/
/* {% endfor %}*/
/* {% for flash_message in app.session.flashbag.get('warning') %}*/
/*     <div class="alert alert-warning alert-sm">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*         <span class="fw-semi-bold">Warning:</span> {{ flash_message | raw }}*/
/*     </div>*/
/* {% endfor %}*/
/* {% for flash_message in app.session.flashbag.get('danger') %}*/
/*     <div class="alert alert-danger alert-sm">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*         {{ flash_message | raw }}*/
/*     </div>*/
/* {% endfor %}*/
/* {% for flash_message in app.session.flashbag.get('info') %}*/
/*     <div class="alert alert-info alert-sm">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*         <span class="fw-semi-bold">Informtion:</span> {{ flash_message | raw }}*/
/*     </div>*/
/* {% endfor %}*/
