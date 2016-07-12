<?php

/* :locale:show.html.twig */
class __TwigTemplate_6b42a312760a12741d7d4eb84daa589227428e140b7e047c2876990d40c7733b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Code</th>
            <td width=\"100px\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "code", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Country_code</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["locale"]) ? $context["locale"] : null), "countrycode", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h4>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changes"), "html", null, true);
        echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 28
            echo "            <tr>
                <th width=\"100px\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
            echo "</th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "user", array()), "html", null, true);
            echo "</td>
                <th width=\"100px\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
            echo "</th>
                <td><span title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdat", array()), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["log"], "createdat", array()));
            echo "</span></td>
            </tr>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "logChanges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["innerChange"]) {
                // line 35
                echo "                <tr>
                    ";
                // line 36
                if ((($this->getAttribute($context["innerChange"], "old", array()) != "") || ($this->getAttribute($context["innerChange"], "new", array()) != ""))) {
                    // line 37
                    echo "                    <td colspan=\"4\">
                        <span class=\"\">
                            ";
                    // line 39
                    echo $this->env->getExtension('translator')->getTranslator()->trans("<span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong>", array("%field%" => $this->getAttribute($context["innerChange"], "name", array()), "%from%" => (($this->getAttribute($context["innerChange"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "old", array()), "NOTHING")) : ("NOTHING")), "%to%" => (($this->getAttribute($context["innerChange"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "new", array()), "NOTHING")) : ("NOTHING"))), "messages");
                    // line 40
                    echo "                        </span>
                    </td>
                    ";
                }
                // line 43
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['innerChange'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </tbody>
</table>


<script>
    \$('#infoModalLabel').html('Locale');

</script>";
    }

    public function getTemplateName()
    {
        return ":locale:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  117 => 45,  110 => 43,  105 => 40,  103 => 39,  99 => 37,  97 => 36,  94 => 35,  90 => 34,  83 => 32,  79 => 31,  75 => 30,  71 => 29,  68 => 28,  64 => 27,  58 => 24,  50 => 19,  43 => 15,  36 => 11,  29 => 7,  19 => 1,);
    }
}
/* <h4>{{ 'General information' | trans }}</h4>*/
/* */
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr>*/
/*             <th width="100px">Id</th>*/
/*             <td width="100px">{{ locale.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Name</th>*/
/*             <td width="100px">{{ locale.name }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Code</th>*/
/*             <td width="100px">{{ locale.code }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Country_code</th>*/
/*             <td width="100px">{{ locale.countrycode }}</td>*/
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
/*     $('#infoModalLabel').html('Locale');*/
/* */
/* </script>*/
