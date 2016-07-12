<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a6da2272a6e704552e45bdab6dc7ecaca3e3cec55e4b5091032aae2dba025c65 extends Twig_Template
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
        $__internal_85497b42881f4c9dd14e0b1b4215d5b0e6ee44f1c67f06bc4a00dc8774726258 = $this->env->getExtension("native_profiler");
        $__internal_85497b42881f4c9dd14e0b1b4215d5b0e6ee44f1c67f06bc4a00dc8774726258->enter($__internal_85497b42881f4c9dd14e0b1b4215d5b0e6ee44f1c67f06bc4a00dc8774726258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
<h1 class=\"page-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile", array(), "FOSUserBundle"), "html", null, true);
        echo "</h1>
<div class=\"row\">
    <div class=\"col-md-12\">
        <section class=\"widget\">

            <div class=\"widget-body\">
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit", "role" => "form")));
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                    <fieldset>
                        <legend>General</legend>

                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 16
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($context["input"], "vars", array()), "name", array()) != "_token")) {
                // line 17
                echo "                                <div class=\"form-group col-md-6\">
                                    ";
                // line 18
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'label');
                echo "
                                    ";
                // line 19
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'errors');
                echo "
                                    ";
                // line 20
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["input"], 'widget', array("attr" => array("class" => "form-control")));
                echo "
                                </div>
                            ";
            }
            // line 23
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </fieldset>

                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </section>
    </div>
</div>";
        
        $__internal_85497b42881f4c9dd14e0b1b4215d5b0e6ee44f1c67f06bc4a00dc8774726258->leave($__internal_85497b42881f4c9dd14e0b1b4215d5b0e6ee44f1c67f06bc4a00dc8774726258_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  81 => 27,  76 => 24,  70 => 23,  64 => 20,  60 => 19,  56 => 18,  53 => 17,  50 => 16,  46 => 15,  38 => 10,  34 => 9,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <h1 class="page-title">{{ 'Profile' | trans }}</h1>*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <section class="widget">*/
/* */
/*             <div class="widget-body">*/
/*                 {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit', 'role': 'form' } }) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/*                     <fieldset>*/
/*                         <legend>General</legend>*/
/* */
/*                         {% for input in form.children %}*/
/*                             {% if input.vars.name != '_token' %}*/
/*                                 <div class="form-group col-md-6">*/
/*                                     {{ form_label(input) }}*/
/*                                     {{ form_errors(input) }}*/
/*                                     {{ form_widget(input, { 'attr': {'class' : 'form-control' } }) }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </fieldset>*/
/* */
/*                     <div>*/
/*                         <input class="btn btn-primary" type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*                     </div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </section>*/
/*     </div>*/
/* </div>*/
