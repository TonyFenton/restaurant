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
        $__internal_31c3c2631843ecb4cd85657bcfa06a05328b6c07fa1bd2549cce517d1fb197e6 = $this->env->getExtension("native_profiler");
        $__internal_31c3c2631843ecb4cd85657bcfa06a05328b6c07fa1bd2549cce517d1fb197e6->enter($__internal_31c3c2631843ecb4cd85657bcfa06a05328b6c07fa1bd2549cce517d1fb197e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c3c2631843ecb4cd85657bcfa06a05328b6c07fa1bd2549cce517d1fb197e6->leave($__internal_31c3c2631843ecb4cd85657bcfa06a05328b6c07fa1bd2549cce517d1fb197e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e8631c97064fe7621c2e1529d1015c23332b059c0a1ff04ac7d762c4acde49d3 = $this->env->getExtension("native_profiler");
        $__internal_e8631c97064fe7621c2e1529d1015c23332b059c0a1ff04ac7d762c4acde49d3->enter($__internal_e8631c97064fe7621c2e1529d1015c23332b059c0a1ff04ac7d762c4acde49d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8631c97064fe7621c2e1529d1015c23332b059c0a1ff04ac7d762c4acde49d3->leave($__internal_e8631c97064fe7621c2e1529d1015c23332b059c0a1ff04ac7d762c4acde49d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd7cfa71709db1ede948d82306f9fd999cfa78405d73703b6c2f8fa76e5a9561 = $this->env->getExtension("native_profiler");
        $__internal_fd7cfa71709db1ede948d82306f9fd999cfa78405d73703b6c2f8fa76e5a9561->enter($__internal_fd7cfa71709db1ede948d82306f9fd999cfa78405d73703b6c2f8fa76e5a9561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd7cfa71709db1ede948d82306f9fd999cfa78405d73703b6c2f8fa76e5a9561->leave($__internal_fd7cfa71709db1ede948d82306f9fd999cfa78405d73703b6c2f8fa76e5a9561_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20d8f0b8a3e05bb014263a5f3a34755ff32f3952f31aa5cc9392360ba29aaf1a = $this->env->getExtension("native_profiler");
        $__internal_20d8f0b8a3e05bb014263a5f3a34755ff32f3952f31aa5cc9392360ba29aaf1a->enter($__internal_20d8f0b8a3e05bb014263a5f3a34755ff32f3952f31aa5cc9392360ba29aaf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20d8f0b8a3e05bb014263a5f3a34755ff32f3952f31aa5cc9392360ba29aaf1a->leave($__internal_20d8f0b8a3e05bb014263a5f3a34755ff32f3952f31aa5cc9392360ba29aaf1a_prof);

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
