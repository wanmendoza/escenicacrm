<?php

/* LexikTranslationBundle:Translation:new.html.twig */
class __TwigTemplate_8a92e8edc5e5ee5f88184f5d22b2c8d2bd614ed3b1136e15b2c4bc291d6e9570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["layout"]) ? $context["layout"] : null), "LexikTranslationBundle:Translation:new.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.add_translation", array(), "LexikTranslationBundle"), "html", null, true);
        echo "</h3>
                <hr />
            </div>

            <div class=\"col-md-6\">

                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("lexik_translation_new"), "method" => "POST", "attr" => array("class" => "form form-vertical")));
        echo "

                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "key", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "key", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "key", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domain", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domain", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "domain", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "translations", array()), 'label');
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "translations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 33
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'label');
            echo "
                        ";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "content", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                        <span class=\"text-danger\">";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "content", array()), 'errors');
            echo "</span>
                        ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["translation"], "locale", array()), 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>

                <div class=\"form-group\">
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("lexik_translation_grid");
        echo "\" class=\"btn btn-default\">
                        <span class=\"glyphicon glyphicon-arrow-left\"></span>
                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("translations.back_to_list", array(), "LexikTranslationBundle"), "html", null, true);
        echo "
                    </a>

                    <div class=\"btn-group pull-right\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("id" => "trans-unit-submit", "name" => "trans-unit-submit", "class" => "btn btn-primary")));
        echo "
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save_add", array()), 'widget', array("attr" => array("id" => "trans-unit-submit-2", "name" => "trans-unit-submit-2", "class" => "btn btn-primary")));
        echo "
                    </div>
                </div>

                ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LexikTranslationBundle:Translation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  133 => 48,  129 => 47,  122 => 43,  117 => 41,  112 => 38,  104 => 36,  100 => 35,  96 => 34,  91 => 33,  87 => 32,  80 => 28,  73 => 24,  69 => 23,  65 => 22,  58 => 18,  54 => 17,  50 => 16,  44 => 13,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends layout %}*/
/* */
/* {% block content %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h3>{{ 'translations.add_translation'|trans({}, 'LexikTranslationBundle') }}</h3>*/
/*                 <hr />*/
/*             </div>*/
/* */
/*             <div class="col-md-6">*/
/* */
/*                 {{ form_start(form, {'action': path('lexik_translation_new'), 'method': 'POST', 'attr': {'class': 'form form-vertical'}}) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.key) }}*/
/*                     {{ form_widget(form.key, { 'attr': {'class': 'form-control'} }) }}*/
/*                     <span class="text-danger">{{ form_errors(form.key) }}</span>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.domain) }}*/
/*                     {{ form_widget(form.domain, { 'attr': {'class': 'form-control'} }) }}*/
/*                     <span class="text-danger">{{ form_errors(form.domain) }}</span>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.translations) }}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {% for translation in form.translations %}*/
/*                         {{ form_label(translation) }}*/
/*                         {{ form_widget(translation.content, { 'attr': {'class': 'form-control'} }) }}*/
/*                         <span class="text-danger">{{ form_errors(translation.content) }}</span>*/
/*                         {{ form_widget(translation.locale) }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <a href="{{ path('lexik_translation_grid') }}" class="btn btn-default">*/
/*                         <span class="glyphicon glyphicon-arrow-left"></span>*/
/*                         {{ 'translations.back_to_list'|trans({}, 'LexikTranslationBundle') }}*/
/*                     </a>*/
/* */
/*                     <div class="btn-group pull-right">*/
/*                         {{ form_widget(form.save, { 'attr': {'id': 'trans-unit-submit', 'name': 'trans-unit-submit', 'class': 'btn btn-primary'} }) }}*/
/*                         {{ form_widget(form.save_add, { 'attr': {'id': 'trans-unit-submit-2', 'name': 'trans-unit-submit-2', 'class': 'btn btn-primary'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
