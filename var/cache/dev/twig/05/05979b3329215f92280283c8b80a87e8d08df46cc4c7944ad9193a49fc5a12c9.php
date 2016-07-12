<?php

/* WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig */
class __TwigTemplate_2b6d78554ff07d34d94fb8d894cb3814b6b4e5fd4a30cddd085386d7c4ab7f0f extends Twig_Template
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
        $__internal_207d2f9c74ce281274d8c614b19b66711713b653c8b55458fdf39b44645ba33e = $this->env->getExtension("native_profiler");
        $__internal_207d2f9c74ce281274d8c614b19b66711713b653c8b55458fdf39b44645ba33e->enter($__internal_207d2f9c74ce281274d8c614b19b66711713b653c8b55458fdf39b44645ba33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"infoModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"infoModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title text-align-center fw-bold mt\" id=\"infoModalLabel\">One more step</h4>
            </div>
            <div class=\"modal-body \">

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">OK</button>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    \$(\"#infoModal\").on(\"show.bs.modal\", function(e) {
        var link = \$(e.relatedTarget);

        \$('#infoModalLabel').html('');
        \$(this).find(\".modal-body\").html('');

        \$(this).find(\".modal-body\").load(link.attr(\"href\"));
    });
</script>";
        
        $__internal_207d2f9c74ce281274d8c614b19b66711713b653c8b55458fdf39b44645ba33e->leave($__internal_207d2f9c74ce281274d8c614b19b66711713b653c8b55458fdf39b44645ba33e_prof);

    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModal" aria-hidden="true">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                 <h4 class="modal-title text-align-center fw-bold mt" id="infoModalLabel">One more step</h4>*/
/*             </div>*/
/*             <div class="modal-body ">*/
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     $("#infoModal").on("show.bs.modal", function(e) {*/
/*         var link = $(e.relatedTarget);*/
/* */
/*         $('#infoModalLabel').html('');*/
/*         $(this).find(".modal-body").html('');*/
/* */
/*         $(this).find(".modal-body").load(link.attr("href"));*/
/*     });*/
/* </script>*/
