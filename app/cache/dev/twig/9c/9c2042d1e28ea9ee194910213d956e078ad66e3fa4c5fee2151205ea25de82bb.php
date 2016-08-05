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
        $__internal_488a5234a4adeb865fbc0c0061b723b21c6215fecbe8031564d5bdb0c26ecd69 = $this->env->getExtension("native_profiler");
        $__internal_488a5234a4adeb865fbc0c0061b723b21c6215fecbe8031564d5bdb0c26ecd69->enter($__internal_488a5234a4adeb865fbc0c0061b723b21c6215fecbe8031564d5bdb0c26ecd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_488a5234a4adeb865fbc0c0061b723b21c6215fecbe8031564d5bdb0c26ecd69->leave($__internal_488a5234a4adeb865fbc0c0061b723b21c6215fecbe8031564d5bdb0c26ecd69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d600bde13937462a4ffd0b0b87090b0e58419d13ef51757d580e935f5d46b73c = $this->env->getExtension("native_profiler");
        $__internal_d600bde13937462a4ffd0b0b87090b0e58419d13ef51757d580e935f5d46b73c->enter($__internal_d600bde13937462a4ffd0b0b87090b0e58419d13ef51757d580e935f5d46b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d600bde13937462a4ffd0b0b87090b0e58419d13ef51757d580e935f5d46b73c->leave($__internal_d600bde13937462a4ffd0b0b87090b0e58419d13ef51757d580e935f5d46b73c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b194424dc4f8eba9f13a33ee882216e49a30eef0f608a4b4aad16ddf4cf3d53 = $this->env->getExtension("native_profiler");
        $__internal_5b194424dc4f8eba9f13a33ee882216e49a30eef0f608a4b4aad16ddf4cf3d53->enter($__internal_5b194424dc4f8eba9f13a33ee882216e49a30eef0f608a4b4aad16ddf4cf3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b194424dc4f8eba9f13a33ee882216e49a30eef0f608a4b4aad16ddf4cf3d53->leave($__internal_5b194424dc4f8eba9f13a33ee882216e49a30eef0f608a4b4aad16ddf4cf3d53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fb43900578ef1cd7b430dbd45acd8f5005a51245bbaed2041e92082e23dc175 = $this->env->getExtension("native_profiler");
        $__internal_1fb43900578ef1cd7b430dbd45acd8f5005a51245bbaed2041e92082e23dc175->enter($__internal_1fb43900578ef1cd7b430dbd45acd8f5005a51245bbaed2041e92082e23dc175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fb43900578ef1cd7b430dbd45acd8f5005a51245bbaed2041e92082e23dc175->leave($__internal_1fb43900578ef1cd7b430dbd45acd8f5005a51245bbaed2041e92082e23dc175_prof);

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
