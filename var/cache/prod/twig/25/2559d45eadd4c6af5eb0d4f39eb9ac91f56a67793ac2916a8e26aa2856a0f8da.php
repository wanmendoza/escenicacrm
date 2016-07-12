<?php

/* WbcAdministratorBundle:user:show.html.twig */
class __TwigTemplate_b16eb78ce9ec692d0c880f29375799c2c2171a6dc3b15864c01e0076a0aacfa7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstname", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last_name"), "html", null, true);
        echo "</th>
            <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastname", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locale", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last Login"), "html", null, true);
        echo "</th>
            <td>";
        // line 24
        echo $this->env->getExtension('time')->diff($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastLogin", array()));
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enabled"), "html", null, true);
        echo "</th>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "enabled", array())) ? ($this->env->getExtension('translator')->trans("Yes")) : ($this->env->getExtension('translator')->trans("No"))), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Roles"), "html", null, true);
        echo "</th>
            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('wbc_extension')->wbc_list($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array())), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

";
        // line 37
        if ((isset($context["showChanges"]) ? $context["showChanges"] : null)) {
            // line 38
            echo "<h4>";
            echo "Changes";
            echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : null));
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
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
        echo "');
</script>";
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
        return array (  180 => 65,  176 => 63,  171 => 60,  165 => 59,  158 => 57,  153 => 54,  151 => 53,  147 => 51,  145 => 50,  142 => 49,  138 => 48,  131 => 46,  127 => 45,  123 => 44,  119 => 43,  116 => 42,  112 => 41,  105 => 38,  103 => 37,  95 => 32,  91 => 31,  85 => 28,  81 => 27,  75 => 24,  71 => 23,  65 => 20,  61 => 19,  52 => 15,  47 => 13,  41 => 10,  37 => 9,  31 => 6,  27 => 5,  19 => 1,);
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
