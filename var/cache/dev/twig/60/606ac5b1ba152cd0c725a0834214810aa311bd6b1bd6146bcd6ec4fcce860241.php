<?php

/* WbcAdministratorBundle:user:show.html.twig */
class __TwigTemplate_ae2d8828fa33ae6608596efe6184843a3a4285bba6e521cee687e2b302877b09 extends Twig_Template
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
        $__internal_2e48160a8ff46b86acec23423bd3ed4d284a407179cf1df9a1406b16ed1bf0cb = $this->env->getExtension("native_profiler");
        $__internal_2e48160a8ff46b86acec23423bd3ed4d284a407179cf1df9a1406b16ed1bf0cb->enter($__internal_2e48160a8ff46b86acec23423bd3ed4d284a407179cf1df9a1406b16ed1bf0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcAdministratorBundle:user:show.html.twig"));

        // line 1
        echo "<h4>";
        echo "General information";
        echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        <tr width=\"100px\">
            <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("First_name"), "html", null, true);
        echo "</th>
            <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last_name"), "html", null, true);
        echo "</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Email"), "html", null, true);
        echo "</th>
            <td>
                <a href=\"mailto:";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</a>
            </td>
        </tr>
        <tr>
            <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Locale"), "html", null, true);
        echo "</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locale", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last Login"), "html", null, true);
        echo "</th>
            <td>";
        // line 24
        echo $this->env->getExtension('time')->diff($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enabled"), "html", null, true);
        echo "</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled", array())) ? ($this->env->getExtension('translator')->trans("Yes")) : ($this->env->getExtension('translator')->trans("No"))), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Roles"), "html", null, true);
        echo "</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('wbc_extension')->wbc_list($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array())), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

";
        // line 37
        if ((isset($context["showChanges"]) ? $context["showChanges"] : $this->getContext($context, "showChanges"))) {
            // line 38
            echo "<h4>";
            echo "Changes";
            echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : $this->getContext($context, "changes")));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 42
                echo "        <tr>
            <th width=\"100px\">";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
                echo "</th>
            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "user", array()), "html", null, true);
                echo "</td>
            <th width=\"100px\">";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
                echo "</th>
            <td><span title=\"";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdat", array()), "Y-m-d H:i"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('time')->diff($this->getAttribute($context["log"], "createdat", array()));
                echo "</span></td>
        </tr>
        ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "logChanges", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["innerChange"]) {
                    // line 49
                    echo "        <tr>
            ";
                    // line 50
                    if ((($this->getAttribute($context["innerChange"], "old", array()) != "") || ($this->getAttribute($context["innerChange"], "new", array()) != ""))) {
                        // line 51
                        echo "            <td colspan=\"4\">
                <span class=\"\">
                    ";
                        // line 53
                        echo $this->env->getExtension('translator')->getTranslator()->trans("<span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong>", array("%field%" => $this->getAttribute($context["innerChange"], "name", array()), "%from%" => (($this->getAttribute($context["innerChange"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "old", array()), "NOTHING")) : ("NOTHING")), "%to%" => (($this->getAttribute($context["innerChange"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "new", array()), "NOTHING")) : ("NOTHING"))), "messages");
                        // line 54
                        echo "                </span>
            </td>
            ";
                    }
                    // line 57
                    echo "        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['innerChange'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    </tbody>
</table>
";
        }
        // line 63
        echo "
<script>
    \$('#infoModalLabel').html('";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "');
</script>";
        
        $__internal_2e48160a8ff46b86acec23423bd3ed4d284a407179cf1df9a1406b16ed1bf0cb->leave($__internal_2e48160a8ff46b86acec23423bd3ed4d284a407179cf1df9a1406b16ed1bf0cb_prof);

    }

    public function getTemplateName()
    {
        return "WbcAdministratorBundle:user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 65,  179 => 63,  174 => 60,  168 => 59,  161 => 57,  156 => 54,  154 => 53,  150 => 51,  148 => 50,  145 => 49,  141 => 48,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  119 => 42,  115 => 41,  108 => 38,  106 => 37,  98 => 32,  94 => 31,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  68 => 20,  64 => 19,  55 => 15,  50 => 13,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* <h4>{{ "General information" }}</h4>*/
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr width="100px">*/
/*             <th>{{ "First_name" | trans }}</th>*/
/*             <td>{{ user.firstname }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Last_name" | trans }}</th>*/
/*             <td>{{ user.lastname }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Email" | trans }}</th>*/
/*             <td>*/
/*                 <a href="mailto:{{ user.email }}">{{ user.email }}</a>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Locale" | trans }}</th>*/
/*             <td>{{ user.locale }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Last Login" | trans }}</th>*/
/*             <td>{{ user.lastLogin | ago }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Enabled" | trans }}</th>*/
/*             <td>{{ user.enabled ? 'Yes' | trans : 'No' | trans }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th>{{ "Roles" | trans }}</th>*/
/*             <td>{{ user.roles | list }}</td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* */
/* {% if showChanges %}*/
/* <h4>{{ "Changes" }}</h4>*/
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         {% for log in changes %}*/
/*         <tr>*/
/*             <th width="100px">{{ "User" | trans }}</th>*/
/*             <td>{{ log.user }}</td>*/
/*             <th width="100px">{{ "Date" | trans }}</th>*/
/*             <td><span title="{{ log.createdat | date('Y-m-d H:i') }}">{{ log.createdat | ago }}</span></td>*/
/*         </tr>*/
/*         {% for innerChange in log.logChanges %}*/
/*         <tr>*/
/*             {% if innerChange.old != '' or innerChange.new != '' %}*/
/*             <td colspan="4">*/
/*                 <span class="">*/
/*                     {% trans with {'%field%': innerChange.name, '%from%': innerChange.old | default('NOTHING') , '%to%': innerChange.new | default('NOTHING') } %} <span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong> {% endtrans %}*/
/*                 </span>*/
/*             </td>*/
/*             {% endif %}*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* {% endif %}*/
/* */
/* <script>*/
/*     $('#infoModalLabel').html('{{ user }}');*/
/* </script>*/
