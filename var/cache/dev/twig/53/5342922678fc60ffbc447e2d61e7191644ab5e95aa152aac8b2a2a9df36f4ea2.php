<?php

/* WbcThemeBundle:Partials:Widgets/navigator/notifications.html.twig */
class __TwigTemplate_ac9a79fa7d8578afb35a94ccf8d0447105bf44be3b3765fdd42c4d7562b3bd10 extends Twig_Template
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
        $__internal_4621061778e112a609cadef90c8247ce8237f474f5430c31fe0f9b83712aead9 = $this->env->getExtension("native_profiler");
        $__internal_4621061778e112a609cadef90c8247ce8237f474f5430c31fe0f9b83712aead9->enter($__internal_4621061778e112a609cadef90c8247ce8237f474f5430c31fe0f9b83712aead9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials:Widgets/navigator/notifications.html.twig"));

        // line 1
        echo "<div class=\"dropdown-menu animated fadeInUp\" id=\"notifications-dropdown-menu\">
    <section class=\"panel notifications\">
        <header class=\"panel-heading\">
            <div class=\"text-align-center mb-sm\">
                <strong>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("You have %count% notifications", array("%count%" => "<span class=\"count-notifications\">11</span>"), "messages");
        echo "</strong>
            </div>
            ";
        // line 31
        echo "
        </header>
        <!-- notification list with .thin-scroll which styles scrollbar for webkit -->
        <div id=\"notifications-list\" class=\"list-group thin-scroll\">
            ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("WbcThemeBundle:Default:notifications"));
        echo "
        </div>
        <footer class=\"panel-footer text-sm\">
            <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list
                 when clicked -->
            <button class=\"btn btn-xs btn-link pull-right\"
                    id=\"load-notifications-btn\"
                    data-ajax-load=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("refresh_notifications");
        echo "\"
                    data-ajax-target=\"#notifications-list\"
                    data-loading-text=\"<i class='fa fa-refresh fa-spin mr-xs'></i> Loading...\">
                <i class=\"fa fa-refresh\"></i>
            </button>
            <span class=\"fs-mini\">
                ";
        // line 48
        echo $this->env->getExtension('translator')->getTranslator()->trans("Synced at: %date%", array("%date%" => (("<span class=\"stringDate\">" . twig_date_format_filter($this->env, "now", "d M Y H:i")) . "</span>")), "messages");
        // line 49
        echo "            </span>
        </footer>
    </section>
</div>";
        
        $__internal_4621061778e112a609cadef90c8247ce8237f474f5430c31fe0f9b83712aead9->leave($__internal_4621061778e112a609cadef90c8247ce8237f474f5430c31fe0f9b83712aead9_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials:Widgets/navigator/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 49,  58 => 48,  49 => 42,  39 => 35,  33 => 31,  28 => 5,  22 => 1,);
    }
}
/* <div class="dropdown-menu animated fadeInUp" id="notifications-dropdown-menu">*/
/*     <section class="panel notifications">*/
/*         <header class="panel-heading">*/
/*             <div class="text-align-center mb-sm">*/
/*                 <strong>{% trans with {'%count%': '<span class="count-notifications">11</span>'} %}You have %count% notifications{% endtrans %}</strong>*/
/*             </div>*/
/*             {#*/
/*             <div class="btn-group btn-group-sm btn-group-justified" id="notifications-toggle" data-toggle="buttons">*/
/*                 <label class="btn btn-default active">*/
/*                     <!-- ajax-load plugin in action. setting data-ajax-load & data-ajax-target is the*/
/*                          only requirement for async reloading -->*/
/*                     <input type="radio" checked*/
/*                            data-ajax-trigger="change"*/
/*                            data-ajax-load="demo/ajax/notifications.html"*/
/*                            data-ajax-target="#notifications-list"> {% trans %}Notifications{% endtrans %}*/
/*                 </label>*/
/*                 <label class="btn btn-default">*/
/*                     <input type="radio"*/
/*                            data-ajax-trigger="change"*/
/*                            data-ajax-load="demo/ajax/messages.html"*/
/*                            data-ajax-target="#notifications-list"> {% trans %}Messages{% endtrans %}*/
/*                 </label>*/
/*                 <label class="btn btn-default">*/
/*                     <input type="radio"*/
/*                            data-ajax-trigger="change"*/
/*                            data-ajax-load="demo/ajax/progress.html"*/
/*                            data-ajax-target="#notifications-list"> {% trans %}Progress{% endtrans %}*/
/*                 </label>*/
/*             </div>*/
/*             #}*/
/* */
/*         </header>*/
/*         <!-- notification list with .thin-scroll which styles scrollbar for webkit -->*/
/*         <div id="notifications-list" class="list-group thin-scroll">*/
/*             {{ render(controller('WbcThemeBundle:Default:notifications')) }}*/
/*         </div>*/
/*         <footer class="panel-footer text-sm">*/
/*             <!-- ajax-load button. loads demo/ajax/notifications.php to #notifications-list*/
/*                  when clicked -->*/
/*             <button class="btn btn-xs btn-link pull-right"*/
/*                     id="load-notifications-btn"*/
/*                     data-ajax-load="{{ path('refresh_notifications') }}"*/
/*                     data-ajax-target="#notifications-list"*/
/*                     data-loading-text="<i class='fa fa-refresh fa-spin mr-xs'></i> Loading...">*/
/*                 <i class="fa fa-refresh"></i>*/
/*             </button>*/
/*             <span class="fs-mini">*/
/*                 {% trans with { '%date%': '<span class="stringDate">' ~ 'now' | date('d M Y H:i') ~ '</span>' } %}Synced at: %date%{% endtrans %}*/
/*             </span>*/
/*         </footer>*/
/*     </section>*/
/* </div>*/
