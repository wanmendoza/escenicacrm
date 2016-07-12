<?php

/* WbcThemeBundle:Partials/Widgets/navigator:notifications-part.html.twig */
class __TwigTemplate_500cb9c02275de510ecf1454f008db9a8cd328530cc84ca48f8089cf1801c427 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all"]) ? $context["all"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 2
            echo "
    ";
            // line 3
            if (($this->getAttribute($context["notification"], "type", array()) == "message")) {
                // line 4
                echo "    <a title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "title", array()), "html", null, true);
                echo "\" class=\"list-group-item ";
                if ( !$this->getAttribute($context["notification"], "seen", array())) {
                    echo "bg-attention";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("go", array("code" => $this->env->getExtension('wbc_extension')->wbc_md5($this->getAttribute($context["notification"], "id", array())))), "html", null, true);
                echo "\">
        <span class=\"thumb-sm pull-left mr clearfix\">
            <img class=\"img-circle\" src=\"http://dummyimage.com/300x300/242424/ffffff&text=";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["notification"], "from", array()), "initials", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "from", array()), "html", null, true);
                echo "\">
        </span>
        <p class=\"no-margin overflow-hidden\">
            <strong>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "title", array()), "html", null, true);
                echo "</strong>
            <br>
            ";
                // line 11
                echo $this->getAttribute($context["notification"], "message", array());
                echo "
            <time class=\"help-block no-margin\">
                ";
                // line 13
                echo $this->env->getExtension('time')->diff($this->getAttribute($context["notification"], "createdat", array()));
                echo "
            </time>
        </p>
    </a>
    ";
            }
            // line 18
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "<script>
    ";
        // line 135
        echo "
    if(typeof \$ !== 'undefined'){
        var previous_badge_value = \$('#notifications-dropdown-toggle .count-notifications').html();
        var new_badge_value = \"";
        // line 138
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, (isset($context["unchecked"]) ? $context["unchecked"] : null)), "0"), "html", null, true);
        echo "\";

        if(previous_badge_value != new_badge_value){
            \$('.count-notifications').html(new_badge_value);

            if(new_badge_value > 0){
                //showInfo with notification array here...
                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unchecked"]) ? $context["unchecked"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 146
            echo "                    var actions = {
                        go: {
                            label: 'Go',
                            action: function() {
                                window.location = \"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("go", array("code" => $this->env->getExtension('wbc_extension')->wbc_md5($this->getAttribute($context["notification"], "id", array())))), "html", null, true);
            echo "\";
                            }
                        }
                    };

                    Messenger().post({
                        message: \"";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["notification"], "title", array()), "html", null, true);
            echo "\",
                        actions: actions
                    });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
                //show badge
                \$('#notifications-dropdown-toggle span.circle').fadeIn('fast');
            }else{
                //hide badge
                \$('#notifications-dropdown-toggle span.circle').fadeOut('fast');
            }
        }

        var lastSyncDate = moment().format('DD MMM YYYY HH:mm');
        \$('#notifications-dropdown-menu .panel-footer .fs-mini .stringDate').html(lastSyncDate);
    }

</script>";
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/navigator:notifications-part.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 160,  110 => 156,  101 => 150,  95 => 146,  91 => 145,  81 => 138,  76 => 135,  73 => 126,  66 => 18,  58 => 13,  53 => 11,  48 => 9,  40 => 6,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for notification in all %}*/
/* */
/*     {% if notification.type == 'message' %}*/
/*     <a title="{{ notification.title }}" class="list-group-item {% if not notification.seen %}bg-attention{% endif %}" href="{{ path('go', { "code": notification.id | md5 }) }}">*/
/*         <span class="thumb-sm pull-left mr clearfix">*/
/*             <img class="img-circle" src="http://dummyimage.com/300x300/242424/ffffff&text={{ notification.from.initials }}" alt="{{ notification.from }}">*/
/*         </span>*/
/*         <p class="no-margin overflow-hidden">*/
/*             <strong>{{ notification.title }}</strong>*/
/*             <br>*/
/*             {{ notification.message | raw }}*/
/*             <time class="help-block no-margin">*/
/*                 {{ notification.createdat | ago }}*/
/*             </time>*/
/*         </p>*/
/*     </a>*/
/*     {% endif %}*/
/* */
/* {% endfor %}*/
/* {#*/
/* <div class="list-group-item bg-attention">*/
/*     <span class="thumb-sm pull-left mr">*/
/*             <i class="glyphicon glyphicon-ok text-success fa-lg"></i>*/
/*         </span>*/
/*     <p class="overflow-hidden no-margin">*/
/*         Notification text here...*/
/*         <time class="help-block no-margin">*/
/*             just now*/
/*         </time>*/
/*     </p>*/
/* </div>*/
/* <div class="list-group-item bg-attention">*/
/*     <span class="thumb-sm pull-left mr clearfix">*/
/*         <img class="img-circle" src="demo/img/people/a6.jpg" alt="...">*/
/*     </span>*/
/*     <p class="no-margin overflow-hidden">*/
/*         <a href="#">Jeniffer Willington</a> has just endorsed you with 50 points!*/
/*         <time class="help-block no-margin">*/
/*             30 sec ago*/
/*         </time>*/
/*     </p>*/
/* </div>*/
/* <div class="list-group-item">*/
/*     <span class="thumb-sm pull-left mr clearfix">*/
/*         <img class="img-circle" src="demo/img/people/a3.jpg" alt="...">*/
/*     </span>*/
/*     <p class="no-margin overflow-hidden">*/
/*         1 new user just signed up! Check out*/
/*         <a href="#">Monica Smith</a>'s account.*/
/*         <time class="help-block no-margin">*/
/*             2 mins ago*/
/*         </time>*/
/*     </p>*/
/* </div>*/
/* <a class="list-group-item" href="#">*/
/*     <span class="thumb-sm pull-left mr">*/
/*         <i class="glyphicon glyphicon-upload fa-lg"></i>*/
/*     </span>*/
/*     <p class="text-ellipsis no-margin">*/
/*         2.1.0-pre-alpha just released. </p>*/
/*     <time class="help-block no-margin">*/
/*         5h ago*/
/*     </time>*/
/* </a>*/
/* <a class="list-group-item" href="#">*/
/*     <span class="thumb-sm pull-left mr">*/
/*         <i class="fa fa-bolt fa-lg"></i>*/
/*     </span>*/
/*     <p class="text-ellipsis no-margin">*/
/*         Server load limited. </p>*/
/*     <time class="help-block no-margin">*/
/*         7h ago*/
/*     </time>*/
/* </a>*/
/* <div class="list-group-item">*/
/*     <span class="thumb-sm pull-left mr clearfix">*/
/*         <img class="img-circle" src="demo/img/people/a5.jpg" alt="...">*/
/*     </span>*/
/*     <p class="no-margin overflow-hidden">*/
/*         User <a href="#">Jeff</a> registered*/
/*         &nbsp;&nbsp;*/
/*         <button class="btn btn-xs btn-success">Allow</button>*/
/*         <button class="btn btn-xs btn-danger">Deny</button>*/
/*         <time class="help-block no-margin">*/
/*             12:18 AM*/
/*         </time>*/
/*     </p>*/
/* </div>*/
/* <div class="list-group-item">*/
/*     <span class="thumb-sm pull-left mr">*/
/*         <i class="fa fa-shield fa-lg"></i>*/
/*     </span>*/
/*     <p class="no-margin overflow-hidden">*/
/*         Instructions for changing your Envato Account password. Please*/
/*         check your <a href="#">security page</a>.*/
/*         <time class="help-block no-margin">*/
/*             12:18 AM*/
/*         </time>*/
/*     </p>*/
/* </div>*/
/* <a class="list-group-item" href="#">*/
/*     <span class="thumb-sm pull-left mr">*/
/*         <span class="rounded bg-primary rounded-lg">*/
/*             <i class="fa fa-facebook text-white"></i>*/
/*         </span>*/
/*     </span>*/
/*     <p class="text-ellipsis no-margin">*/
/*         New <strong>76</strong> facebook likes received.</p>*/
/*     <time class="help-block no-margin">*/
/*         15 Apr 2014*/
/*     </time>*/
/* </a>*/
/* <a class="list-group-item" href="#">*/
/*     <span class="thumb-sm pull-left mr">*/
/*         <span class="circle circle-lg bg-gray-dark">*/
/*             <i class="fa fa-circle-o text-white"></i>*/
/*         </span>*/
/*     </span>*/
/*     <p class="text-ellipsis no-margin">*/
/*         Dark matter detected.</p>*/
/*     <time class="help-block no-margin">*/
/*         15 Apr 2014*/
/*     </time>*/
/* </a>*/
/* #}*/
/* <script>*/
/*     {#*/
/*     var items = document.getElementsByClassName("count-notifications"),*/
/*             i, len;*/
/* */
/*     for (i = 0, len = items.length; i < len; i++) {*/
/*         items[i].innerHTML = "{{ unchecked | length | default('0') }}";*/
/*     }*/
/*     #}*/
/* */
/*     if(typeof $ !== 'undefined'){*/
/*         var previous_badge_value = $('#notifications-dropdown-toggle .count-notifications').html();*/
/*         var new_badge_value = "{{ unchecked | length | default('0') }}";*/
/* */
/*         if(previous_badge_value != new_badge_value){*/
/*             $('.count-notifications').html(new_badge_value);*/
/* */
/*             if(new_badge_value > 0){*/
/*                 //showInfo with notification array here...*/
/*                 {% for notification in unchecked %}*/
/*                     var actions = {*/
/*                         go: {*/
/*                             label: 'Go',*/
/*                             action: function() {*/
/*                                 window.location = "{{ path('go', { "code": notification.id | md5 }) }}";*/
/*                             }*/
/*                         }*/
/*                     };*/
/* */
/*                     Messenger().post({*/
/*                         message: "{{ notification.title }}",*/
/*                         actions: actions*/
/*                     });*/
/*                 {% endfor %}*/
/* */
/*                 //show badge*/
/*                 $('#notifications-dropdown-toggle span.circle').fadeIn('fast');*/
/*             }else{*/
/*                 //hide badge*/
/*                 $('#notifications-dropdown-toggle span.circle').fadeOut('fast');*/
/*             }*/
/*         }*/
/* */
/*         var lastSyncDate = moment().format('DD MMM YYYY HH:mm');*/
/*         $('#notifications-dropdown-menu .panel-footer .fs-mini .stringDate').html(lastSyncDate);*/
/*     }*/
/* */
/* </script>*/
