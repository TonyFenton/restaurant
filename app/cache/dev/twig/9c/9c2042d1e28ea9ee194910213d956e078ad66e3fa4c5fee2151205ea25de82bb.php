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
        $__internal_1928df04aaf829cd0be649263d3a8d872dfed67aa3be6bd1ee3e466e275b1101 = $this->env->getExtension("native_profiler");
        $__internal_1928df04aaf829cd0be649263d3a8d872dfed67aa3be6bd1ee3e466e275b1101->enter($__internal_1928df04aaf829cd0be649263d3a8d872dfed67aa3be6bd1ee3e466e275b1101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1928df04aaf829cd0be649263d3a8d872dfed67aa3be6bd1ee3e466e275b1101->leave($__internal_1928df04aaf829cd0be649263d3a8d872dfed67aa3be6bd1ee3e466e275b1101_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9bebdabfeabf9ccfe01eade9acc80b73097970b50e1eeb0e5ff8e959692cc14 = $this->env->getExtension("native_profiler");
        $__internal_c9bebdabfeabf9ccfe01eade9acc80b73097970b50e1eeb0e5ff8e959692cc14->enter($__internal_c9bebdabfeabf9ccfe01eade9acc80b73097970b50e1eeb0e5ff8e959692cc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9bebdabfeabf9ccfe01eade9acc80b73097970b50e1eeb0e5ff8e959692cc14->leave($__internal_c9bebdabfeabf9ccfe01eade9acc80b73097970b50e1eeb0e5ff8e959692cc14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_812d6954e8a5a89ff95b50891a47a7c3b21ef6856a04f333d1b868fa5694926a = $this->env->getExtension("native_profiler");
        $__internal_812d6954e8a5a89ff95b50891a47a7c3b21ef6856a04f333d1b868fa5694926a->enter($__internal_812d6954e8a5a89ff95b50891a47a7c3b21ef6856a04f333d1b868fa5694926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_812d6954e8a5a89ff95b50891a47a7c3b21ef6856a04f333d1b868fa5694926a->leave($__internal_812d6954e8a5a89ff95b50891a47a7c3b21ef6856a04f333d1b868fa5694926a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff1922bbef2bb0c1f246f962e6e9421806bfa0de5717716e1b92ac027ad06b54 = $this->env->getExtension("native_profiler");
        $__internal_ff1922bbef2bb0c1f246f962e6e9421806bfa0de5717716e1b92ac027ad06b54->enter($__internal_ff1922bbef2bb0c1f246f962e6e9421806bfa0de5717716e1b92ac027ad06b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ff1922bbef2bb0c1f246f962e6e9421806bfa0de5717716e1b92ac027ad06b54->leave($__internal_ff1922bbef2bb0c1f246f962e6e9421806bfa0de5717716e1b92ac027ad06b54_prof);

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
