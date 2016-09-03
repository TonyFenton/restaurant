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
        $__internal_54bb3e49bd063e70bdf4c26ac460037d6048e58b54ecefa158e3df53c10f6402 = $this->env->getExtension("native_profiler");
        $__internal_54bb3e49bd063e70bdf4c26ac460037d6048e58b54ecefa158e3df53c10f6402->enter($__internal_54bb3e49bd063e70bdf4c26ac460037d6048e58b54ecefa158e3df53c10f6402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54bb3e49bd063e70bdf4c26ac460037d6048e58b54ecefa158e3df53c10f6402->leave($__internal_54bb3e49bd063e70bdf4c26ac460037d6048e58b54ecefa158e3df53c10f6402_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8493e2f4e7acdc6cf2cf36448cb03ae6577204fc9095f1a200c5b1509ac1c8a7 = $this->env->getExtension("native_profiler");
        $__internal_8493e2f4e7acdc6cf2cf36448cb03ae6577204fc9095f1a200c5b1509ac1c8a7->enter($__internal_8493e2f4e7acdc6cf2cf36448cb03ae6577204fc9095f1a200c5b1509ac1c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8493e2f4e7acdc6cf2cf36448cb03ae6577204fc9095f1a200c5b1509ac1c8a7->leave($__internal_8493e2f4e7acdc6cf2cf36448cb03ae6577204fc9095f1a200c5b1509ac1c8a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb3f0bdb7bd533c9a28a7b5b222d4e599448f98fcf7a4f03b7dabfb5ef399d87 = $this->env->getExtension("native_profiler");
        $__internal_bb3f0bdb7bd533c9a28a7b5b222d4e599448f98fcf7a4f03b7dabfb5ef399d87->enter($__internal_bb3f0bdb7bd533c9a28a7b5b222d4e599448f98fcf7a4f03b7dabfb5ef399d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb3f0bdb7bd533c9a28a7b5b222d4e599448f98fcf7a4f03b7dabfb5ef399d87->leave($__internal_bb3f0bdb7bd533c9a28a7b5b222d4e599448f98fcf7a4f03b7dabfb5ef399d87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a84ab07276f6e4eca259790a89764cb02050b7dd8325377352220d8da2ec13fa = $this->env->getExtension("native_profiler");
        $__internal_a84ab07276f6e4eca259790a89764cb02050b7dd8325377352220d8da2ec13fa->enter($__internal_a84ab07276f6e4eca259790a89764cb02050b7dd8325377352220d8da2ec13fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a84ab07276f6e4eca259790a89764cb02050b7dd8325377352220d8da2ec13fa->leave($__internal_a84ab07276f6e4eca259790a89764cb02050b7dd8325377352220d8da2ec13fa_prof);

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
