<?php

/* :i18nresource:show.html.twig */
class __TwigTemplate_bbcaeeb59622c222724580e2cd6d347fcee3a7d1b7d18829520276a058aac7f1 extends Twig_Template
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
        $__internal_f063726e0501597477a9accf292eb6bb9249c3f6c488de91336704dd8c5ef497 = $this->env->getExtension("native_profiler");
        $__internal_f063726e0501597477a9accf292eb6bb9249c3f6c488de91336704dd8c5ef497->enter($__internal_f063726e0501597477a9accf292eb6bb9249c3f6c488de91336704dd8c5ef497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":i18nresource:show.html.twig"));

        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("General information"), "html", null, true);
        echo "</h4>

<table class=\"table table-bordered\">
    <tbody>
        <tr>
            <th width=\"100px\">Id</th>
            <td width=\"100px\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Slug</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "slug", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Type</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "type", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Content</th>
            <td width=\"100px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "content", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Logo</th>
            <td width=\"100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : $this->getContext($context, "i18NResource")), "logo", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h4>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changes"), "html", null, true);
        echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : $this->getContext($context, "changes")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 36
            echo "            <tr>
                <th width=\"100px\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
            echo "</th>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "user", array()), "html", null, true);
            echo "</td>
                <th width=\"100px\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
            echo "</th>
                <td><span title=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdat", array()), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["log"], "createdat", array()));
            echo "</span></td>
            </tr>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "logChanges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["innerChange"]) {
                // line 43
                echo "                <tr>
                    ";
                // line 44
                if ((($this->getAttribute($context["innerChange"], "old", array()) != "") || ($this->getAttribute($context["innerChange"], "new", array()) != ""))) {
                    // line 45
                    echo "                    <td colspan=\"4\">
                        <span class=\"\">
                            ";
                    // line 47
                    echo $this->env->getExtension('translator')->getTranslator()->trans("<span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong>", array("%field%" => $this->getAttribute($context["innerChange"], "name", array()), "%from%" => (($this->getAttribute($context["innerChange"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "old", array()), "NOTHING")) : ("NOTHING")), "%to%" => (($this->getAttribute($context["innerChange"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "new", array()), "NOTHING")) : ("NOTHING"))), "messages");
                    // line 48
                    echo "                        </span>
                    </td>
                    ";
                }
                // line 51
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['innerChange'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </tbody>
</table>


<script>
    \$('#infoModalLabel').html('I18NResource');

</script>";
        
        $__internal_f063726e0501597477a9accf292eb6bb9249c3f6c488de91336704dd8c5ef497->leave($__internal_f063726e0501597477a9accf292eb6bb9249c3f6c488de91336704dd8c5ef497_prof);

    }

    public function getTemplateName()
    {
        return ":i18nresource:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  134 => 53,  127 => 51,  122 => 48,  120 => 47,  116 => 45,  114 => 44,  111 => 43,  107 => 42,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  85 => 36,  81 => 35,  75 => 32,  67 => 27,  60 => 23,  53 => 19,  46 => 15,  39 => 11,  32 => 7,  22 => 1,);
    }
}
/* <h4>{{ 'General information' | trans }}</h4>*/
/* */
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr>*/
/*             <th width="100px">Id</th>*/
/*             <td width="100px">{{ i18NResource.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Name</th>*/
/*             <td width="100px">{{ i18NResource.name }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Slug</th>*/
/*             <td width="100px">{{ i18NResource.slug }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Type</th>*/
/*             <td width="100px">{{ i18NResource.type }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Content</th>*/
/*             <td width="100px">{{ i18NResource.content }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Logo</th>*/
/*             <td width="100px">{{ i18NResource.logo }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* <h4>{{ 'Changes' | trans }}</h4>*/
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         {% for log in changes %}*/
/*             <tr>*/
/*                 <th width="100px">{{ 'User' | trans }}</th>*/
/*                 <td>{{ log.user }}</td>*/
/*                 <th width="100px">{{ 'Date' | trans }}</th>*/
/*                 <td><span title="{{ log.createdat | date('Y-m-d H:i') }}">{{ log.createdat | ago }}</span></td>*/
/*             </tr>*/
/*             {% for innerChange in log.logChanges %}*/
/*                 <tr>*/
/*                     {% if innerChange.old != '' or innerChange.new != '' %}*/
/*                     <td colspan="4">*/
/*                         <span class="">*/
/*                             {% trans with {'%field%': innerChange.name, '%from%': innerChange.old | default('NOTHING') , '%to%': innerChange.new | default('NOTHING') } %} <span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong> {% endtrans %}*/
/*                         </span>*/
/*                     </td>*/
/*                     {% endif %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */
/* */
/* <script>*/
/*     $('#infoModalLabel').html('I18NResource');*/
/* */
/* </script>*/
