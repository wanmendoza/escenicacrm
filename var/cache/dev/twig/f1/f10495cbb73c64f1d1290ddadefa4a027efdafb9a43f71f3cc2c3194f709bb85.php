<?php

/* :permission:show.html.twig */
class __TwigTemplate_6c5c528784fd0600b1ded210bb7aae4dbc3e5cd9d757c22f9be3e400bde91b23 extends Twig_Template
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
        $__internal_d852aff1a02565a080731be5f90fb0d8c88f3790cb4034dbbd9f8e5f8f137c12 = $this->env->getExtension("native_profiler");
        $__internal_d852aff1a02565a080731be5f90fb0d8c88f3790cb4034dbbd9f8e5f8f137c12->enter($__internal_d852aff1a02565a080731be5f90fb0d8c88f3790cb4034dbbd9f8e5f8f137c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":permission:show.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Description</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_by</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "createdby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Created_at</th>
            <td width=\"100px\">";
        // line 23
        if ($this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_by</th>
            <td width=\"100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "updatedby", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Updated_at</th>
            <td width=\"100px\">";
        // line 31
        if ($this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
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
    \$('#infoModalLabel').html('Permission');

</script>";
        
        $__internal_d852aff1a02565a080731be5f90fb0d8c88f3790cb4034dbbd9f8e5f8f137c12->leave($__internal_d852aff1a02565a080731be5f90fb0d8c88f3790cb4034dbbd9f8e5f8f137c12_prof);

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
        return array (  151 => 58,  145 => 57,  138 => 55,  133 => 52,  131 => 51,  127 => 49,  125 => 48,  122 => 47,  118 => 46,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  96 => 40,  92 => 39,  86 => 36,  76 => 31,  69 => 27,  60 => 23,  53 => 19,  46 => 15,  39 => 11,  32 => 7,  22 => 1,);
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
