<?php

/* WbcThemeBundle:Partials/Widgets/sidebar:menu.html.twig */
class __TwigTemplate_5c5f13541107cd8efc9cb9e879655cf0e3b52fef2671b5c7dc713c3cefa6c86a extends Twig_Template
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
    <li ";
        // line 12
        if (($this->env->getExtension('wbc_extension')->getMenuItem() == "user")) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
            <span class=\"icon\">
                <i class=\"fa fa-group\"></i>
            </span>
            ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Users", array(), "messages");
        // line 18
        echo "        </a>
    </li>
    <li>
        <!-- an example of nested submenu. basic bootstrap collapse component -->
        <a class=\"collapsed\" href=\"#sidebar-forms\" data-toggle=\"collapse\" data-parent=\"#sidebar\">
                    <span class=\"icon\">
                        <i class=\"glyphicon glyphicon-align-right\"></i>
                    </span>
            ";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("Forms", array(), "messages");
        // line 27
        echo "            <i class=\"toggle fa fa-angle-down\"></i>
        </a>
        <ul id=\"sidebar-forms\" class=\"collapse\">
            <li><a href=\"form_elements.html\">";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Form Elements", array(), "messages");
        echo "</a></li>
            <li><a href=\"form_validation.html\">";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Form Validation", array(), "messages");
        echo "</a></li>
            <li><a href=\"form_wizard.html\">";
        // line 32
        echo $this->env->getExtension('translator')->getTranslator()->trans("Form Wizard", array(), "messages");
        echo "</a></li>
        </ul>
    </li>
    <li ";
        // line 35
        if (($this->env->getExtension('wbc_extension')->getMenuItem() == "settings")) {
            echo "class=\"active\"";
        }
        echo ">
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("settings_index");
        echo "\">
            <span class=\"icon\">
                <i class=\"fa fa-cogs\"></i>
            </span>
            ";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("Settings", array(), "messages");
        // line 41
        echo "        </a>
    </li>
    ";
        // line 43
        if ($this->env->getExtension('wbc_extension')->get("use_translations")) {
            // line 44
            echo "    <li ";
            if (($this->env->getExtension('wbc_extension')->getMenuItem() == "I18NResource")) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("i18nresource_index");
            echo "\">
            <span class=\"icon\">
                <i class=\"fa fa-language\"></i>
            </span>
            ";
            // line 49
            echo $this->env->getExtension('translator')->getTranslator()->trans("Translatable", array(), "messages");
            // line 50
            echo "        </a>
    </li>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "    <li>
        <a class=\"collapsed\" href=\"#sidebar-security\" data-toggle=\"collapse\" data-parent=\"#sidebar\">
                    <span class=\"icon\">
                        <i class=\"fa fa-lock\"></i>
                    </span>
            ";
            // line 60
            echo $this->env->getExtension('translator')->getTranslator()->trans("Security", array(), "messages");
            // line 61
            echo "            <i class=\"toggle fa fa-angle-down\"></i>
        </a>
        <ul id=\"sidebar-security\" class=\"collapse\">
            <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("role_index");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Roles", array(), "messages");
            echo "</a></li>
            <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("permission_index");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Permissions", array(), "messages");
            echo "</a></li>
        </ul>
    </li>
    ";
        }
        // line 69
        echo "
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
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/sidebar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 69,  156 => 65,  150 => 64,  145 => 61,  143 => 60,  136 => 55,  134 => 54,  131 => 53,  126 => 50,  124 => 49,  117 => 45,  110 => 44,  108 => 43,  104 => 41,  102 => 40,  95 => 36,  89 => 35,  83 => 32,  79 => 31,  75 => 30,  70 => 27,  68 => 26,  58 => 18,  56 => 17,  49 => 13,  43 => 12,  38 => 9,  36 => 8,  29 => 4,  22 => 2,  19 => 1,);
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
/*     <li {% if getMenuItem() == 'user' %}class="active"{% endif %}>*/
/*         <a href="{{ path('user_index') }}">*/
/*             <span class="icon">*/
/*                 <i class="fa fa-group"></i>*/
/*             </span>*/
/*             {% trans %}Users{% endtrans %}*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <!-- an example of nested submenu. basic bootstrap collapse component -->*/
/*         <a class="collapsed" href="#sidebar-forms" data-toggle="collapse" data-parent="#sidebar">*/
/*                     <span class="icon">*/
/*                         <i class="glyphicon glyphicon-align-right"></i>*/
/*                     </span>*/
/*             {% trans %}Forms{% endtrans %}*/
/*             <i class="toggle fa fa-angle-down"></i>*/
/*         </a>*/
/*         <ul id="sidebar-forms" class="collapse">*/
/*             <li><a href="form_elements.html">{% trans %}Form Elements{% endtrans %}</a></li>*/
/*             <li><a href="form_validation.html">{% trans %}Form Validation{% endtrans %}</a></li>*/
/*             <li><a href="form_wizard.html">{% trans %}Form Wizard{% endtrans %}</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     <li {% if getMenuItem() == 'settings' %}class="active"{% endif %}>*/
/*         <a href="{{ path('settings_index') }}">*/
/*             <span class="icon">*/
/*                 <i class="fa fa-cogs"></i>*/
/*             </span>*/
/*             {% trans %}Settings{% endtrans %}*/
/*         </a>*/
/*     </li>*/
/*     {% if get('use_translations') %}*/
/*     <li {% if getMenuItem() == 'I18NResource' %}class="active"{% endif %}>*/
/*         <a href="{{ path('i18nresource_index') }}">*/
/*             <span class="icon">*/
/*                 <i class="fa fa-language"></i>*/
/*             </span>*/
/*             {% trans %}Translatable{% endtrans %}*/
/*         </a>*/
/*     </li>*/
/*     {% endif %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/*     <li>*/
/*         <a class="collapsed" href="#sidebar-security" data-toggle="collapse" data-parent="#sidebar">*/
/*                     <span class="icon">*/
/*                         <i class="fa fa-lock"></i>*/
/*                     </span>*/
/*             {% trans %}Security{% endtrans %}*/
/*             <i class="toggle fa fa-angle-down"></i>*/
/*         </a>*/
/*         <ul id="sidebar-security" class="collapse">*/
/*             <li><a href="{{ path('role_index') }}">{% trans %}Roles{% endtrans %}</a></li>*/
/*             <li><a href="{{ path('permission_index') }}">{% trans %}Permissions{% endtrans %}</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     {% endif %}*/
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
