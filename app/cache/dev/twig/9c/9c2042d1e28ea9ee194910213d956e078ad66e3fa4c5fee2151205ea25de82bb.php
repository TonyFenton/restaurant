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
        $__internal_8771a0c416a2b567633f4ba93047e8988128bea584622458c2c9f56ee22b0fc4 = $this->env->getExtension("native_profiler");
        $__internal_8771a0c416a2b567633f4ba93047e8988128bea584622458c2c9f56ee22b0fc4->enter($__internal_8771a0c416a2b567633f4ba93047e8988128bea584622458c2c9f56ee22b0fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8771a0c416a2b567633f4ba93047e8988128bea584622458c2c9f56ee22b0fc4->leave($__internal_8771a0c416a2b567633f4ba93047e8988128bea584622458c2c9f56ee22b0fc4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d99762efc43fad66af232bc965a2d038b2344153079a53b66e42f2465b70f7f3 = $this->env->getExtension("native_profiler");
        $__internal_d99762efc43fad66af232bc965a2d038b2344153079a53b66e42f2465b70f7f3->enter($__internal_d99762efc43fad66af232bc965a2d038b2344153079a53b66e42f2465b70f7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d99762efc43fad66af232bc965a2d038b2344153079a53b66e42f2465b70f7f3->leave($__internal_d99762efc43fad66af232bc965a2d038b2344153079a53b66e42f2465b70f7f3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_765a7917b6612811a602fa8b60a3b5d0f26baad183e4614424be5c3d3bad3d6a = $this->env->getExtension("native_profiler");
        $__internal_765a7917b6612811a602fa8b60a3b5d0f26baad183e4614424be5c3d3bad3d6a->enter($__internal_765a7917b6612811a602fa8b60a3b5d0f26baad183e4614424be5c3d3bad3d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_765a7917b6612811a602fa8b60a3b5d0f26baad183e4614424be5c3d3bad3d6a->leave($__internal_765a7917b6612811a602fa8b60a3b5d0f26baad183e4614424be5c3d3bad3d6a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5d2e06fe2d65d4d24eb5ed8c9fd64fcf4baf54871a3634458bcb84182c251cc = $this->env->getExtension("native_profiler");
        $__internal_c5d2e06fe2d65d4d24eb5ed8c9fd64fcf4baf54871a3634458bcb84182c251cc->enter($__internal_c5d2e06fe2d65d4d24eb5ed8c9fd64fcf4baf54871a3634458bcb84182c251cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5d2e06fe2d65d4d24eb5ed8c9fd64fcf4baf54871a3634458bcb84182c251cc->leave($__internal_c5d2e06fe2d65d4d24eb5ed8c9fd64fcf4baf54871a3634458bcb84182c251cc_prof);

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
