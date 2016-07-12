<?php

/* :role:show.html.twig */
class __TwigTemplate_b600669460bdcea8296f89e5958c92bb5c456f66ac75e0302eabff7324ecc368 extends Twig_Template
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
        $__internal_bcd5ca44aa4afdfcbaccd8cf367e68879949d45165aab961e76a83cfd400a50c = $this->env->getExtension("native_profiler");
        $__internal_bcd5ca44aa4afdfcbaccd8cf367e68879949d45165aab961e76a83cfd400a50c->enter($__internal_bcd5ca44aa4afdfcbaccd8cf367e68879949d45165aab961e76a83cfd400a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":role:show.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Description</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_by</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "createdby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_by</th>
            <td width=\"100px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "updatedby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_at</th>
            <td width=\"100px\">";
        // line 27
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_at</th>
            <td width=\"100px\">";
        // line 31
        if ($this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : $this->getContext($context, "changes")));
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
    \$('#infoModalLabel').html('Role');

</script>";
        
        $__internal_bcd5ca44aa4afdfcbaccd8cf367e68879949d45165aab961e76a83cfd400a50c->leave($__internal_bcd5ca44aa4afdfcbaccd8cf367e68879949d45165aab961e76a83cfd400a50c_prof);

    }

    public function getTemplateName()
    {
        return ":role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  145 => 57,  138 => 55,  133 => 52,  131 => 51,  127 => 49,  125 => 48,  122 => 47,  118 => 46,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  96 => 40,  92 => 39,  86 => 36,  76 => 31,  67 => 27,  60 => 23,  53 => 19,  46 => 15,  39 => 11,  32 => 7,  22 => 1,);
    }
}
/* <h4>{{ 'General information' | trans }}</h4>*/
/* */
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr>*/
/*             <th width="100px">Id</th>*/
/*             <td width="100px">{{ role.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Name</th>*/
/*             <td width="100px">{{ role.name }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Description</th>*/
/*             <td width="100px">{{ role.description }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Created_by</th>*/
/*             <td width="100px">{{ role.createdby }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Updated_by</th>*/
/*             <td width="100px">{{ role.updatedby }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Created_at</th>*/
/*             <td width="100px">{% if role.createdat %}{{ role.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Updated_at</th>*/
/*             <td width="100px">{% if role.updatedat %}{{ role.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
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
/*     $('#infoModalLabel').html('Role');*/
/* */
/* </script>*/
