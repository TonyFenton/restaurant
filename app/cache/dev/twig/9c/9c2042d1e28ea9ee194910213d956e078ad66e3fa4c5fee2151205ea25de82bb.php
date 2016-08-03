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
        $__internal_a4638e00b4bab1fa6d848f947e29db0eee970c762547cf87a94e859f3a485e38 = $this->env->getExtension("native_profiler");
        $__internal_a4638e00b4bab1fa6d848f947e29db0eee970c762547cf87a94e859f3a485e38->enter($__internal_a4638e00b4bab1fa6d848f947e29db0eee970c762547cf87a94e859f3a485e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4638e00b4bab1fa6d848f947e29db0eee970c762547cf87a94e859f3a485e38->leave($__internal_a4638e00b4bab1fa6d848f947e29db0eee970c762547cf87a94e859f3a485e38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54c9bc8c4f711eea441d4ce931953cdb278b6a4d7bdf9590bc98bd85620b6a47 = $this->env->getExtension("native_profiler");
        $__internal_54c9bc8c4f711eea441d4ce931953cdb278b6a4d7bdf9590bc98bd85620b6a47->enter($__internal_54c9bc8c4f711eea441d4ce931953cdb278b6a4d7bdf9590bc98bd85620b6a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54c9bc8c4f711eea441d4ce931953cdb278b6a4d7bdf9590bc98bd85620b6a47->leave($__internal_54c9bc8c4f711eea441d4ce931953cdb278b6a4d7bdf9590bc98bd85620b6a47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e738a6d91de313738d8804b1f4b2512f69e3bc90eb8520417518a9d2b3206bb = $this->env->getExtension("native_profiler");
        $__internal_2e738a6d91de313738d8804b1f4b2512f69e3bc90eb8520417518a9d2b3206bb->enter($__internal_2e738a6d91de313738d8804b1f4b2512f69e3bc90eb8520417518a9d2b3206bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e738a6d91de313738d8804b1f4b2512f69e3bc90eb8520417518a9d2b3206bb->leave($__internal_2e738a6d91de313738d8804b1f4b2512f69e3bc90eb8520417518a9d2b3206bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_784d2ff3db2ba4112e13848aa52dec23add8e775551cc49134d19ebdda3d1cb7 = $this->env->getExtension("native_profiler");
        $__internal_784d2ff3db2ba4112e13848aa52dec23add8e775551cc49134d19ebdda3d1cb7->enter($__internal_784d2ff3db2ba4112e13848aa52dec23add8e775551cc49134d19ebdda3d1cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_784d2ff3db2ba4112e13848aa52dec23add8e775551cc49134d19ebdda3d1cb7->leave($__internal_784d2ff3db2ba4112e13848aa52dec23add8e775551cc49134d19ebdda3d1cb7_prof);

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
