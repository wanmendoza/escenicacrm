<?php

/* WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig */
class __TwigTemplate_da941a1d243f9479c267120ea19a17a190f0cce8476c5c871a7afb80ac0b5fa6 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "WbcThemeBundle:Partials/Widgets/security:info-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
