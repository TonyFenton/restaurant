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
        $__internal_ba9d50379ffd6127415a72a86ce909f5d6559b971bd14f82efd7fbd4983dec98 = $this->env->getExtension("native_profiler");
        $__internal_ba9d50379ffd6127415a72a86ce909f5d6559b971bd14f82efd7fbd4983dec98->enter($__internal_ba9d50379ffd6127415a72a86ce909f5d6559b971bd14f82efd7fbd4983dec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9d50379ffd6127415a72a86ce909f5d6559b971bd14f82efd7fbd4983dec98->leave($__internal_ba9d50379ffd6127415a72a86ce909f5d6559b971bd14f82efd7fbd4983dec98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21e386a1ea835326eea609a67a555e274ed7705e38c19d1332e5119f4ecce369 = $this->env->getExtension("native_profiler");
        $__internal_21e386a1ea835326eea609a67a555e274ed7705e38c19d1332e5119f4ecce369->enter($__internal_21e386a1ea835326eea609a67a555e274ed7705e38c19d1332e5119f4ecce369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21e386a1ea835326eea609a67a555e274ed7705e38c19d1332e5119f4ecce369->leave($__internal_21e386a1ea835326eea609a67a555e274ed7705e38c19d1332e5119f4ecce369_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c64e3879c26c9a0e2ae95e7b783f2bb166bc73369318b8dd2db71cb081c5520b = $this->env->getExtension("native_profiler");
        $__internal_c64e3879c26c9a0e2ae95e7b783f2bb166bc73369318b8dd2db71cb081c5520b->enter($__internal_c64e3879c26c9a0e2ae95e7b783f2bb166bc73369318b8dd2db71cb081c5520b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c64e3879c26c9a0e2ae95e7b783f2bb166bc73369318b8dd2db71cb081c5520b->leave($__internal_c64e3879c26c9a0e2ae95e7b783f2bb166bc73369318b8dd2db71cb081c5520b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c64c54c16c0e1695601e1de6cb75137771936bf2c18c45d489f67658713b306e = $this->env->getExtension("native_profiler");
        $__internal_c64c54c16c0e1695601e1de6cb75137771936bf2c18c45d489f67658713b306e->enter($__internal_c64c54c16c0e1695601e1de6cb75137771936bf2c18c45d489f67658713b306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c64c54c16c0e1695601e1de6cb75137771936bf2c18c45d489f67658713b306e->leave($__internal_c64c54c16c0e1695601e1de6cb75137771936bf2c18c45d489f67658713b306e_prof);

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
