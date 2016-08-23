<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ce4c6445e34d3a836262c6fc0ec991db6f03366232de99f9532b0016c3d6169e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a46aca202e8ffd22b11b302277fae943bef06681a5fcbd660e3151291d48a63d = $this->env->getExtension("native_profiler");
        $__internal_a46aca202e8ffd22b11b302277fae943bef06681a5fcbd660e3151291d48a63d->enter($__internal_a46aca202e8ffd22b11b302277fae943bef06681a5fcbd660e3151291d48a63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a46aca202e8ffd22b11b302277fae943bef06681a5fcbd660e3151291d48a63d->leave($__internal_a46aca202e8ffd22b11b302277fae943bef06681a5fcbd660e3151291d48a63d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_555944c87bc53aefcedd99ccea79da1edebea6ef2d2d298ebf16645a74d056ef = $this->env->getExtension("native_profiler");
        $__internal_555944c87bc53aefcedd99ccea79da1edebea6ef2d2d298ebf16645a74d056ef->enter($__internal_555944c87bc53aefcedd99ccea79da1edebea6ef2d2d298ebf16645a74d056ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_555944c87bc53aefcedd99ccea79da1edebea6ef2d2d298ebf16645a74d056ef->leave($__internal_555944c87bc53aefcedd99ccea79da1edebea6ef2d2d298ebf16645a74d056ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9afeeab86e53c5a03eaaa63d3207f0e1693b0fa56d6a208c84e2a21e91c696f = $this->env->getExtension("native_profiler");
        $__internal_c9afeeab86e53c5a03eaaa63d3207f0e1693b0fa56d6a208c84e2a21e91c696f->enter($__internal_c9afeeab86e53c5a03eaaa63d3207f0e1693b0fa56d6a208c84e2a21e91c696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9afeeab86e53c5a03eaaa63d3207f0e1693b0fa56d6a208c84e2a21e91c696f->leave($__internal_c9afeeab86e53c5a03eaaa63d3207f0e1693b0fa56d6a208c84e2a21e91c696f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e271ee33bedea999e9c98e9e1e556ff3e81c853f900d44a30f67022c769c2088 = $this->env->getExtension("native_profiler");
        $__internal_e271ee33bedea999e9c98e9e1e556ff3e81c853f900d44a30f67022c769c2088->enter($__internal_e271ee33bedea999e9c98e9e1e556ff3e81c853f900d44a30f67022c769c2088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e271ee33bedea999e9c98e9e1e556ff3e81c853f900d44a30f67022c769c2088->leave($__internal_e271ee33bedea999e9c98e9e1e556ff3e81c853f900d44a30f67022c769c2088_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
