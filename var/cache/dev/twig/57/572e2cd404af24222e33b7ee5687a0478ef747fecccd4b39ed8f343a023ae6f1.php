<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_31d121bd8fef388e8090e7deae193796416f0f8bfe16ddb6b854f16d18f3ae49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_688a81ec9a42bfa10caa9e727927e5cd4b2c25e06ead19d05703be642db2456b = $this->env->getExtension("native_profiler");
        $__internal_688a81ec9a42bfa10caa9e727927e5cd4b2c25e06ead19d05703be642db2456b->enter($__internal_688a81ec9a42bfa10caa9e727927e5cd4b2c25e06ead19d05703be642db2456b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_688a81ec9a42bfa10caa9e727927e5cd4b2c25e06ead19d05703be642db2456b->leave($__internal_688a81ec9a42bfa10caa9e727927e5cd4b2c25e06ead19d05703be642db2456b_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_9b409f95db61d247792a8202e9dd51e9c0e8b79537fb09fb818e1cf0399f0312 = $this->env->getExtension("native_profiler");
        $__internal_9b409f95db61d247792a8202e9dd51e9c0e8b79537fb09fb818e1cf0399f0312->enter($__internal_9b409f95db61d247792a8202e9dd51e9c0e8b79537fb09fb818e1cf0399f0312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path"))) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter"))) ? ($this->env->getExtension('liip_imagine')->filter((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")), (isset($context["link_filter"]) ? $context["link_filter"] : $this->getContext($context, "link_filter")))) : ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) ? $context["link_attr"] : $this->getContext($context, "link_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path")), (isset($context["image_filter"]) ? $context["image_filter"] : $this->getContext($context, "image_filter"))), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) ? $context["image_attr"] : $this->getContext($context, "image_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b409f95db61d247792a8202e9dd51e9c0e8b79537fb09fb818e1cf0399f0312->leave($__internal_9b409f95db61d247792a8202e9dd51e9c0e8b79537fb09fb818e1cf0399f0312_prof);

    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  94 => 16,  90 => 14,  86 => 12,  84 => 11,  67 => 9,  64 => 8,  46 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block liip_imagine_image_widget %}*/
/*     {% spaceless %}*/
/*         {% if image_path %}*/
/*             <div>*/
/*                 {% if link_url %}*/
/*                     <a href="{{ link_filter ? link_url|imagine_filter(link_filter): link_url }}" {% for attrname, attrvalue in link_attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}>*/
/*                 {% endif %}*/
/* */
/*                 <img src="{{ image_path|imagine_filter(image_filter) }}" {% for attrname, attrvalue in image_attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %} />*/
/* */
/*                 {% if link_url %}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
