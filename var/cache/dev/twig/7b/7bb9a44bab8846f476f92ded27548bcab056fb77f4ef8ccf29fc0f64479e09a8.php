<?php

/* WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig */
class __TwigTemplate_f7a3c64902b9f8138ca33244c7c30da36a9a23a9a1ae62cff7e310f6ef390bdd extends Twig_Template
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
        $__internal_71c065cde3e9095727bd2c57371202b89aed4c4ed2896d5b6b71ca8ef3d48d2f = $this->env->getExtension("native_profiler");
        $__internal_71c065cde3e9095727bd2c57371202b89aed4c4ed2896d5b6b71ca8ef3d48d2f->enter($__internal_71c065cde3e9095727bd2c57371202b89aed4c4ed2896d5b6b71ca8ef3d48d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig"));

        // line 1
        echo "<ul class=\"sidebar-nav\">
    <li ";
        // line 2
        if (($this->env->getExtension('wbc_extension')->getMenuItem() == "dashboard")) {
            echo "class=\"active\"";
        }
        echo ">
        <!-- an example of nested submenu. basic bootstrap collapse component -->
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("wbc_administrator_homepage");
        echo "\" data-parent=\"#sidebar\">
                    <span class=\"icon\">
                        <i class=\"fa fa-desktop\"></i>
                    </span>
            ";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dashboard", array(), "messages");
        // line 9
        echo "        </a>

    </li>
   

</ul>

<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$('ul.sidebar-nav').on('click', 'a:not([data-toggle])', function(){
            var li = \$(this).parent('li');
            setTimeout(function(){
                li.addClass('active');
            }, 500);
        });
    });
</script>";
        
        $__internal_71c065cde3e9095727bd2c57371202b89aed4c4ed2896d5b6b71ca8ef3d48d2f->leave($__internal_71c065cde3e9095727bd2c57371202b89aed4c4ed2896d5b6b71ca8ef3d48d2f_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:Widgets/sidebar/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  39 => 8,  32 => 4,  25 => 2,  22 => 1,);
    }
}
/* <ul class="sidebar-nav">*/
/*     <li {% if getMenuItem() == 'dashboard' %}class="active"{% endif %}>*/
/*         <!-- an example of nested submenu. basic bootstrap collapse component -->*/
/*         <a href="{{ path('wbc_administrator_homepage') }}" data-parent="#sidebar">*/
/*                     <span class="icon">*/
/*                         <i class="fa fa-desktop"></i>*/
/*                     </span>*/
/*             {% trans %}Dashboard{% endtrans %}*/
/*         </a>*/
/* */
/*     </li>*/
/*    */
/* */
/* </ul>*/
/* */
/* <script type="text/javascript">*/
/*     $(document).ready(function(){*/
/*         $('ul.sidebar-nav').on('click', 'a:not([data-toggle])', function(){*/
/*             var li = $(this).parent('li');*/
/*             setTimeout(function(){*/
/*                 li.addClass('active');*/
/*             }, 500);*/
/*         });*/
/*     });*/
/* </script>*/
