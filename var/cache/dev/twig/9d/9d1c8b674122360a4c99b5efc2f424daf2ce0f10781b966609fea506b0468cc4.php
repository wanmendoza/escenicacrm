<?php

/* ::base.html.twig */
class __TwigTemplate_c3d7f6af64609571e927345081bca3d35b0d75736b900323e02b70dff0717df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_813376460d656c3f7323af5cb49dc79de05ee5471b686c67d0c988fa3df70324 = $this->env->getExtension("native_profiler");
        $__internal_813376460d656c3f7323af5cb49dc79de05ee5471b686c67d0c988fa3df70324->enter($__internal_813376460d656c3f7323af5cb49dc79de05ee5471b686c67d0c988fa3df70324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_813376460d656c3f7323af5cb49dc79de05ee5471b686c67d0c988fa3df70324->leave($__internal_813376460d656c3f7323af5cb49dc79de05ee5471b686c67d0c988fa3df70324_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0cf891ed02d34e4c2872775b48bead7518477a176f959097009c05f4a2a2e41 = $this->env->getExtension("native_profiler");
        $__internal_b0cf891ed02d34e4c2872775b48bead7518477a176f959097009c05f4a2a2e41->enter($__internal_b0cf891ed02d34e4c2872775b48bead7518477a176f959097009c05f4a2a2e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0cf891ed02d34e4c2872775b48bead7518477a176f959097009c05f4a2a2e41->leave($__internal_b0cf891ed02d34e4c2872775b48bead7518477a176f959097009c05f4a2a2e41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_874c07ea2da623e5ed35c31409c676f1a55fa0d13fe4c2b56f6c96da42d89aa7 = $this->env->getExtension("native_profiler");
        $__internal_874c07ea2da623e5ed35c31409c676f1a55fa0d13fe4c2b56f6c96da42d89aa7->enter($__internal_874c07ea2da623e5ed35c31409c676f1a55fa0d13fe4c2b56f6c96da42d89aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_874c07ea2da623e5ed35c31409c676f1a55fa0d13fe4c2b56f6c96da42d89aa7->leave($__internal_874c07ea2da623e5ed35c31409c676f1a55fa0d13fe4c2b56f6c96da42d89aa7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_021cbe350d169bd1eabd557aca9ac703a465cff064be3c7aa47b514bd087b65b = $this->env->getExtension("native_profiler");
        $__internal_021cbe350d169bd1eabd557aca9ac703a465cff064be3c7aa47b514bd087b65b->enter($__internal_021cbe350d169bd1eabd557aca9ac703a465cff064be3c7aa47b514bd087b65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_021cbe350d169bd1eabd557aca9ac703a465cff064be3c7aa47b514bd087b65b->leave($__internal_021cbe350d169bd1eabd557aca9ac703a465cff064be3c7aa47b514bd087b65b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9bb48135f5ee045769cad2312565b7f17809de7c5cc82c20317105c1aac52b4 = $this->env->getExtension("native_profiler");
        $__internal_e9bb48135f5ee045769cad2312565b7f17809de7c5cc82c20317105c1aac52b4->enter($__internal_e9bb48135f5ee045769cad2312565b7f17809de7c5cc82c20317105c1aac52b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e9bb48135f5ee045769cad2312565b7f17809de7c5cc82c20317105c1aac52b4->leave($__internal_e9bb48135f5ee045769cad2312565b7f17809de7c5cc82c20317105c1aac52b4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
