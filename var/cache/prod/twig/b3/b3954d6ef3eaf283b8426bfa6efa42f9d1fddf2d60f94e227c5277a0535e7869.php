<?php

/* :i18nresource:show.html.twig */
class __TwigTemplate_9e498047cb6be4cc6ee633e25ce32180461efcf0d706c740e648762e733cbd00 extends Twig_Template
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
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("General information"), "html", null, true);
        echo "</h4>

<table class=\"table table-bordered\">
    <tbody>
        <tr>
            <th width=\"100px\">Id</th>
            <td width=\"100px\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Slug</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "slug", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Type</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "type", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Content</th>
            <td width=\"100px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "content", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Logo</th>
            <td width=\"100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i18NResource"]) ? $context["i18NResource"] : null), "logo", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : null));
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
        return array (  137 => 54,  131 => 53,  124 => 51,  119 => 48,  117 => 47,  113 => 45,  111 => 44,  108 => 43,  104 => 42,  97 => 40,  93 => 39,  89 => 38,  85 => 37,  82 => 36,  78 => 35,  72 => 32,  64 => 27,  57 => 23,  50 => 19,  43 => 15,  36 => 11,  29 => 7,  19 => 1,);
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
