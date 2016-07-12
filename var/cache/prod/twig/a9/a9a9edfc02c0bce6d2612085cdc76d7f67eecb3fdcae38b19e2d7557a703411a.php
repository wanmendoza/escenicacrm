<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_252202d8531a7cb4feabd0039bf887c0b99cc23e4a036b47a3fe45ec255b7f61 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit", "role" => "form")));
        echo "
                    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                    <fieldset>
                        <legend>General</legend>

                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array()));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </section>
    </div>
</div>";
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
        return array (  83 => 29,  78 => 27,  73 => 24,  67 => 23,  61 => 20,  57 => 19,  53 => 18,  50 => 17,  47 => 16,  43 => 15,  35 => 10,  31 => 9,  22 => 3,  19 => 2,);
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
