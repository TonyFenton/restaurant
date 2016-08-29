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
        $__internal_c2471cb966c372d1ea6ca2d87e3440b90015d0a81f7cf8679baa378dc5ab2681 = $this->env->getExtension("native_profiler");
        $__internal_c2471cb966c372d1ea6ca2d87e3440b90015d0a81f7cf8679baa378dc5ab2681->enter($__internal_c2471cb966c372d1ea6ca2d87e3440b90015d0a81f7cf8679baa378dc5ab2681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2471cb966c372d1ea6ca2d87e3440b90015d0a81f7cf8679baa378dc5ab2681->leave($__internal_c2471cb966c372d1ea6ca2d87e3440b90015d0a81f7cf8679baa378dc5ab2681_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa6fe1efdf34d98f55792dce5bb281157515ab46759b6a7e1f07364f5f56bd41 = $this->env->getExtension("native_profiler");
        $__internal_aa6fe1efdf34d98f55792dce5bb281157515ab46759b6a7e1f07364f5f56bd41->enter($__internal_aa6fe1efdf34d98f55792dce5bb281157515ab46759b6a7e1f07364f5f56bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aa6fe1efdf34d98f55792dce5bb281157515ab46759b6a7e1f07364f5f56bd41->leave($__internal_aa6fe1efdf34d98f55792dce5bb281157515ab46759b6a7e1f07364f5f56bd41_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_817aab2600241594ae7dfbb1403604f26ecb819f23f1e97c763ad0ad82efe54f = $this->env->getExtension("native_profiler");
        $__internal_817aab2600241594ae7dfbb1403604f26ecb819f23f1e97c763ad0ad82efe54f->enter($__internal_817aab2600241594ae7dfbb1403604f26ecb819f23f1e97c763ad0ad82efe54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_817aab2600241594ae7dfbb1403604f26ecb819f23f1e97c763ad0ad82efe54f->leave($__internal_817aab2600241594ae7dfbb1403604f26ecb819f23f1e97c763ad0ad82efe54f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcc45b12f2518e1133c5266e3f2b9ded4e2e14701615b05bc8648dff44a715b1 = $this->env->getExtension("native_profiler");
        $__internal_dcc45b12f2518e1133c5266e3f2b9ded4e2e14701615b05bc8648dff44a715b1->enter($__internal_dcc45b12f2518e1133c5266e3f2b9ded4e2e14701615b05bc8648dff44a715b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dcc45b12f2518e1133c5266e3f2b9ded4e2e14701615b05bc8648dff44a715b1->leave($__internal_dcc45b12f2518e1133c5266e3f2b9ded4e2e14701615b05bc8648dff44a715b1_prof);

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
