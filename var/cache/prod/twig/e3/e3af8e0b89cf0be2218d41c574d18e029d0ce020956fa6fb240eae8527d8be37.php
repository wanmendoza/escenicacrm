<?php

/* :permission:show.html.twig */
class __TwigTemplate_33ca0099e71aaaf189df69e59748cffd06a08af3ba695c03fc1a64f34fd0e263 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Description</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_by</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "createdby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_at</th>
            <td width=\"100px\">";
        // line 23
        if ($this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_by</th>
            <td width=\"100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "updatedby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_at</th>
            <td width=\"100px\">";
        // line 31
        if ($this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : null), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
    </tbody>
</table>

<h4>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changes"), "html", null, true);
        echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 40
            echo "            <tr>
                <th width=\"100px\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
            echo "</th>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "user", array()), "html", null, true);
            echo "</td>
                <th width=\"100px\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
            echo "</th>
                <td><span title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdat", array()), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["log"], "createdat", array()));
            echo "</span></td>
            </tr>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "logChanges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["innerChange"]) {
                // line 47
                echo "                <tr>
                    ";
                // line 48
                if ((($this->getAttribute($context["innerChange"], "old", array()) != "") || ($this->getAttribute($context["innerChange"], "new", array()) != ""))) {
                    // line 49
                    echo "                    <td colspan=\"4\">
                        <span class=\"\">
                            ";
                    // line 51
                    echo $this->env->getExtension('translator')->getTranslator()->trans("<span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong>", array("%field%" => $this->getAttribute($context["innerChange"], "name", array()), "%from%" => (($this->getAttribute($context["innerChange"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "old", array()), "NOTHING")) : ("NOTHING")), "%to%" => (($this->getAttribute($context["innerChange"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "new", array()), "NOTHING")) : ("NOTHING"))), "messages");
                    // line 52
                    echo "                        </span>
                    </td>
                    ";
                }
                // line 55
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['innerChange'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
</table>


<script>
    \$('#infoModalLabel').html('Permission');

</script>";
    }

    public function getTemplateName()
    {
        return ":permission:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 58,  142 => 57,  135 => 55,  130 => 52,  128 => 51,  124 => 49,  122 => 48,  119 => 47,  115 => 46,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  83 => 36,  73 => 31,  66 => 27,  57 => 23,  50 => 19,  43 => 15,  36 => 11,  29 => 7,  19 => 1,);
    }
}
/* <h4>{{ 'General information' | trans }}</h4>*/
/* */
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr>*/
/*             <th width="100px">Id</th>*/
/*             <td width="100px">{{ permission.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Name</th>*/
/*             <td width="100px">{{ permission.name }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Description</th>*/
/*             <td width="100px">{{ permission.description }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Created_by</th>*/
/*             <td width="100px">{{ permission.createdby }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Created_at</th>*/
/*             <td width="100px">{% if permission.createdat %}{{ permission.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Updated_by</th>*/
/*             <td width="100px">{{ permission.updatedby }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Updated_at</th>*/
/*             <td width="100px">{% if permission.updatedat %}{{ permission.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
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
/*     $('#infoModalLabel').html('Permission');*/
/* */
/* </script>*/
