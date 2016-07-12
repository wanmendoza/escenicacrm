<?php

/* WbcThemeBundle:Partials/Widgets/sidebar:user.html.twig */
class __TwigTemplate_5a0e1612c1e00312ad464e40196e8f8ca52b3c01e6c886f67a86cc0122d9778e extends Twig_Template
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
        echo "<a href=\"#\" class=\"dropdown-toggle ";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
        echo "\" ";
        if (array_key_exists("id", $context)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        echo " data-toggle=\"dropdown\">
    <span class=\"thumb-sm avatar pull-right\">
        <img class=\"img-circle\" src=\"http://dummyimage.com/300x300/242424/ffffff&text=";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "initials", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
        echo "\">
    </span>
    <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
         should be used with bg-* and text-* classes for colors -->
    <span class=\"circle bg-warning fw-bold text-gray-dark count-notifications\">

    </span>
    &nbsp;
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
        echo "</strong>
    <b class=\"caret\"></b>
</a>";
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/sidebar:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  31 => 3,  19 => 1,);
    }
}
/* <a href="#" class="dropdown-toggle {{ class | default('') }}" {% if id is defined %} id="{{ id }}" {% endif %} data-toggle="dropdown">*/
/*     <span class="thumb-sm avatar pull-right">*/
/*         <img class="img-circle" src="http://dummyimage.com/300x300/242424/ffffff&text={{ app.user.initials }}" alt="{{ app.user }}" title="{{ app.user }}">*/
/*     </span>*/
/*     <!-- .circle is a pretty cool way to add a bit of beauty to raw data.*/
/*          should be used with bg-* and text-* classes for colors -->*/
/*     <span class="circle bg-warning fw-bold text-gray-dark count-notifications">*/
/* */
/*     </span>*/
/*     &nbsp;*/
/*     {{ app.user.firstname }} <strong>{{ app.user.lastname }}</strong>*/
/*     <b class="caret"></b>*/
/* </a>*/
