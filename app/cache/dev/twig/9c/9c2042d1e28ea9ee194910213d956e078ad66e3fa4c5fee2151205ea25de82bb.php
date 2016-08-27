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
        $__internal_e9de1677a27e0da111c595a94628980f5412ede150a94e3f22e660a61fc85600 = $this->env->getExtension("native_profiler");
        $__internal_e9de1677a27e0da111c595a94628980f5412ede150a94e3f22e660a61fc85600->enter($__internal_e9de1677a27e0da111c595a94628980f5412ede150a94e3f22e660a61fc85600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9de1677a27e0da111c595a94628980f5412ede150a94e3f22e660a61fc85600->leave($__internal_e9de1677a27e0da111c595a94628980f5412ede150a94e3f22e660a61fc85600_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73dcc1357a609d384208c26870cda24895485bbe4ab77729c2c5c10f709e6aa7 = $this->env->getExtension("native_profiler");
        $__internal_73dcc1357a609d384208c26870cda24895485bbe4ab77729c2c5c10f709e6aa7->enter($__internal_73dcc1357a609d384208c26870cda24895485bbe4ab77729c2c5c10f709e6aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73dcc1357a609d384208c26870cda24895485bbe4ab77729c2c5c10f709e6aa7->leave($__internal_73dcc1357a609d384208c26870cda24895485bbe4ab77729c2c5c10f709e6aa7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5529944698fd9e6003f05ac957a31e66148b71a082143643d6af5eeaecf7a771 = $this->env->getExtension("native_profiler");
        $__internal_5529944698fd9e6003f05ac957a31e66148b71a082143643d6af5eeaecf7a771->enter($__internal_5529944698fd9e6003f05ac957a31e66148b71a082143643d6af5eeaecf7a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5529944698fd9e6003f05ac957a31e66148b71a082143643d6af5eeaecf7a771->leave($__internal_5529944698fd9e6003f05ac957a31e66148b71a082143643d6af5eeaecf7a771_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c14619c3e9c1d0aa69a95886abf0f3ea2384c18fa1c741d283041ac77ecc420 = $this->env->getExtension("native_profiler");
        $__internal_5c14619c3e9c1d0aa69a95886abf0f3ea2384c18fa1c741d283041ac77ecc420->enter($__internal_5c14619c3e9c1d0aa69a95886abf0f3ea2384c18fa1c741d283041ac77ecc420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c14619c3e9c1d0aa69a95886abf0f3ea2384c18fa1c741d283041ac77ecc420->leave($__internal_5c14619c3e9c1d0aa69a95886abf0f3ea2384c18fa1c741d283041ac77ecc420_prof);

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
