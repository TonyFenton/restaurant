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
        $__internal_51508db9c4a78f6bbf80ed791e2dcd2890ed1c00fab82a8799c1c55bb07d1991 = $this->env->getExtension("native_profiler");
        $__internal_51508db9c4a78f6bbf80ed791e2dcd2890ed1c00fab82a8799c1c55bb07d1991->enter($__internal_51508db9c4a78f6bbf80ed791e2dcd2890ed1c00fab82a8799c1c55bb07d1991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51508db9c4a78f6bbf80ed791e2dcd2890ed1c00fab82a8799c1c55bb07d1991->leave($__internal_51508db9c4a78f6bbf80ed791e2dcd2890ed1c00fab82a8799c1c55bb07d1991_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c7fc736ed432102a19e13f92f87b980237bdf30adc40a0ffdb1d120b11ae1400 = $this->env->getExtension("native_profiler");
        $__internal_c7fc736ed432102a19e13f92f87b980237bdf30adc40a0ffdb1d120b11ae1400->enter($__internal_c7fc736ed432102a19e13f92f87b980237bdf30adc40a0ffdb1d120b11ae1400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c7fc736ed432102a19e13f92f87b980237bdf30adc40a0ffdb1d120b11ae1400->leave($__internal_c7fc736ed432102a19e13f92f87b980237bdf30adc40a0ffdb1d120b11ae1400_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a4b27c1d14319acb359a300c53c8b1bd92f8a7ae89855fd5b010b5f368dd492 = $this->env->getExtension("native_profiler");
        $__internal_8a4b27c1d14319acb359a300c53c8b1bd92f8a7ae89855fd5b010b5f368dd492->enter($__internal_8a4b27c1d14319acb359a300c53c8b1bd92f8a7ae89855fd5b010b5f368dd492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a4b27c1d14319acb359a300c53c8b1bd92f8a7ae89855fd5b010b5f368dd492->leave($__internal_8a4b27c1d14319acb359a300c53c8b1bd92f8a7ae89855fd5b010b5f368dd492_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5dc801d1ad79e89414ab6bab1f9cef68f835c7c293f1ae7db389df73495a7009 = $this->env->getExtension("native_profiler");
        $__internal_5dc801d1ad79e89414ab6bab1f9cef68f835c7c293f1ae7db389df73495a7009->enter($__internal_5dc801d1ad79e89414ab6bab1f9cef68f835c7c293f1ae7db389df73495a7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5dc801d1ad79e89414ab6bab1f9cef68f835c7c293f1ae7db389df73495a7009->leave($__internal_5dc801d1ad79e89414ab6bab1f9cef68f835c7c293f1ae7db389df73495a7009_prof);

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
