<?php

/* :settings:show.html.twig */
class __TwigTemplate_7533dda026e2d37080e7588e00a8f31cfbf690672fc6e484dc554b5620ffb0d7 extends Twig_Template
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
        $__internal_4efc8248e693f2c61511feee2a8878a996494f24bc2bb4a035e7f21c77be9d7e = $this->env->getExtension("native_profiler");
        $__internal_4efc8248e693f2c61511feee2a8878a996494f24bc2bb4a035e7f21c77be9d7e->enter($__internal_4efc8248e693f2c61511feee2a8878a996494f24bc2bb4a035e7f21c77be9d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":settings:show.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Name</th>
            <td width=\"100px\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "name", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Active</th>
            <td width=\"100px\">";
        // line 15
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "active", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Url</th>
            <td width=\"100px\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "url", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Description</th>
            <td width=\"100px\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Html_robots</th>
            <td width=\"100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "htmlrobots", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Og_title</th>
            <td width=\"100px\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "ogtitle", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Og_description</th>
            <td width=\"100px\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "ogdescription", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Og_image_url</th>
            <td width=\"100px\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "ogimageurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Og_url</th>
            <td width=\"100px\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "ogurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Email</th>
            <td width=\"100px\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Facebook_url</th>
            <td width=\"100px\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "facebookurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Twitter_url</th>
            <td width=\"100px\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "twitterurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Youtube_url</th>
            <td width=\"100px\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "youtubeurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Instagram_url</th>
            <td width=\"100px\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "instagramurl", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Facebook_app_id</th>
            <td width=\"100px\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "facebookappid", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Analytics_script</th>
            <td width=\"100px\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "analyticsscript", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Copyright</th>
            <td width=\"100px\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "copyright", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Is_production</th>
            <td width=\"100px\">";
        // line 79
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "isproduction", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Main_api</th>
            <td width=\"100px\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "mainapi", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Use_twilio</th>
            <td width=\"100px\">";
        // line 87
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "usetwilio", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Use_twilio_voice</th>
            <td width=\"100px\">";
        // line 91
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "usetwiliovoice", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Twilio_number</th>
            <td width=\"100px\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "twilionumber", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Twilio_sid</th>
            <td width=\"100px\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "twiliosid", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Twilio_token</th>
            <td width=\"100px\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "twiliotoken", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Use_email</th>
            <td width=\"100px\">";
        // line 107
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "useemail", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Yes"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No"), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Admin_email</th>
            <td width=\"100px\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "adminemail", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th width=\"100px\">Faye_server_url</th>
            <td width=\"100px\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setting"]) ? $context["setting"] : $this->getContext($context, "setting")), "fayeserverurl", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<h4>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Changes"), "html", null, true);
        echo "</h4>
<table class=\"table table-bordered\">
    <tbody>
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["changes"]) ? $context["changes"] : $this->getContext($context, "changes")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 124
            echo "            <tr>
                <th width=\"100px\">";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User"), "html", null, true);
            echo "</th>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "user", array()), "html", null, true);
            echo "</td>
                <th width=\"100px\">";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
            echo "</th>
                <td><span title=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdat", array()), "Y-m-d H:i"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["log"], "createdat", array()));
            echo "</span></td>
            </tr>
            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "logChanges", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["innerChange"]) {
                // line 131
                echo "                <tr>
                    ";
                // line 132
                if ((($this->getAttribute($context["innerChange"], "old", array()) != "") || ($this->getAttribute($context["innerChange"], "new", array()) != ""))) {
                    // line 133
                    echo "                    <td colspan=\"4\">
                        <span class=\"\">
                            ";
                    // line 135
                    echo $this->env->getExtension('translator')->getTranslator()->trans("<span class='label label-info'>%field%</span> from <strong>%from%</strong> to <strong>%to%</strong>", array("%field%" => $this->getAttribute($context["innerChange"], "name", array()), "%from%" => (($this->getAttribute($context["innerChange"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "old", array()), "NOTHING")) : ("NOTHING")), "%to%" => (($this->getAttribute($context["innerChange"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["innerChange"], "new", array()), "NOTHING")) : ("NOTHING"))), "messages");
                    // line 136
                    echo "                        </span>
                    </td>
                    ";
                }
                // line 139
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['innerChange'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "    </tbody>
</table>


<script>
    \$('#infoModalLabel').html('Settings');

</script>";
        
        $__internal_4efc8248e693f2c61511feee2a8878a996494f24bc2bb4a035e7f21c77be9d7e->leave($__internal_4efc8248e693f2c61511feee2a8878a996494f24bc2bb4a035e7f21c77be9d7e_prof);

    }

    public function getTemplateName()
    {
        return ":settings:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 142,  328 => 141,  321 => 139,  316 => 136,  314 => 135,  310 => 133,  308 => 132,  305 => 131,  301 => 130,  294 => 128,  290 => 127,  286 => 126,  282 => 125,  279 => 124,  275 => 123,  269 => 120,  261 => 115,  254 => 111,  239 => 107,  232 => 103,  225 => 99,  218 => 95,  203 => 91,  188 => 87,  181 => 83,  166 => 79,  159 => 75,  152 => 71,  145 => 67,  138 => 63,  131 => 59,  124 => 55,  117 => 51,  110 => 47,  103 => 43,  96 => 39,  89 => 35,  82 => 31,  75 => 27,  68 => 23,  61 => 19,  46 => 15,  39 => 11,  32 => 7,  22 => 1,);
    }
}
/* <h4>{{ 'General information' | trans }}</h4>*/
/* */
/* <table class="table table-bordered">*/
/*     <tbody>*/
/*         <tr>*/
/*             <th width="100px">Id</th>*/
/*             <td width="100px">{{ setting.id }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Name</th>*/
/*             <td width="100px">{{ setting.name }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Active</th>*/
/*             <td width="100px">{% if setting.active %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Url</th>*/
/*             <td width="100px">{{ setting.url }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Description</th>*/
/*             <td width="100px">{{ setting.description }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Html_robots</th>*/
/*             <td width="100px">{{ setting.htmlrobots }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Og_title</th>*/
/*             <td width="100px">{{ setting.ogtitle }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Og_description</th>*/
/*             <td width="100px">{{ setting.ogdescription }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Og_image_url</th>*/
/*             <td width="100px">{{ setting.ogimageurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Og_url</th>*/
/*             <td width="100px">{{ setting.ogurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Email</th>*/
/*             <td width="100px">{{ setting.email }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Facebook_url</th>*/
/*             <td width="100px">{{ setting.facebookurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Twitter_url</th>*/
/*             <td width="100px">{{ setting.twitterurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Youtube_url</th>*/
/*             <td width="100px">{{ setting.youtubeurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Instagram_url</th>*/
/*             <td width="100px">{{ setting.instagramurl }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Facebook_app_id</th>*/
/*             <td width="100px">{{ setting.facebookappid }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Analytics_script</th>*/
/*             <td width="100px">{{ setting.analyticsscript }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Copyright</th>*/
/*             <td width="100px">{{ setting.copyright }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Is_production</th>*/
/*             <td width="100px">{% if setting.isproduction %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Main_api</th>*/
/*             <td width="100px">{{ setting.mainapi }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Use_twilio</th>*/
/*             <td width="100px">{% if setting.usetwilio %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Use_twilio_voice</th>*/
/*             <td width="100px">{% if setting.usetwiliovoice %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Twilio_number</th>*/
/*             <td width="100px">{{ setting.twilionumber }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Twilio_sid</th>*/
/*             <td width="100px">{{ setting.twiliosid }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Twilio_token</th>*/
/*             <td width="100px">{{ setting.twiliotoken }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Use_email</th>*/
/*             <td width="100px">{% if setting.useemail %} {{ "Yes" | trans }} {% else %} {{ "No" | trans }} {% endif %}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Admin_email</th>*/
/*             <td width="100px">{{ setting.adminemail }}</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th width="100px">Faye_server_url</th>*/
/*             <td width="100px">{{ setting.fayeserverurl }}</td>*/
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
/*     $('#infoModalLabel').html('Settings');*/
/* */
/* </script>*/
