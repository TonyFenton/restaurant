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
        $__internal_f933ad87294905499d44dcad22323118f142f36047c4a0c30d7fc5d1bf00bf85 = $this->env->getExtension("native_profiler");
        $__internal_f933ad87294905499d44dcad22323118f142f36047c4a0c30d7fc5d1bf00bf85->enter($__internal_f933ad87294905499d44dcad22323118f142f36047c4a0c30d7fc5d1bf00bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f933ad87294905499d44dcad22323118f142f36047c4a0c30d7fc5d1bf00bf85->leave($__internal_f933ad87294905499d44dcad22323118f142f36047c4a0c30d7fc5d1bf00bf85_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_731c41de4bab2b6dbcb84e084deb40cb5cf58fac27e4eded13caba7f53a369eb = $this->env->getExtension("native_profiler");
        $__internal_731c41de4bab2b6dbcb84e084deb40cb5cf58fac27e4eded13caba7f53a369eb->enter($__internal_731c41de4bab2b6dbcb84e084deb40cb5cf58fac27e4eded13caba7f53a369eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_731c41de4bab2b6dbcb84e084deb40cb5cf58fac27e4eded13caba7f53a369eb->leave($__internal_731c41de4bab2b6dbcb84e084deb40cb5cf58fac27e4eded13caba7f53a369eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fa65ded1b414eafd67b5102befc824e0a775fa56c0d5514228fe4f3564f5ca7 = $this->env->getExtension("native_profiler");
        $__internal_0fa65ded1b414eafd67b5102befc824e0a775fa56c0d5514228fe4f3564f5ca7->enter($__internal_0fa65ded1b414eafd67b5102befc824e0a775fa56c0d5514228fe4f3564f5ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0fa65ded1b414eafd67b5102befc824e0a775fa56c0d5514228fe4f3564f5ca7->leave($__internal_0fa65ded1b414eafd67b5102befc824e0a775fa56c0d5514228fe4f3564f5ca7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d6f611de854f037074db923527e7731e8005fe8d82786549f805b425b84a687 = $this->env->getExtension("native_profiler");
        $__internal_0d6f611de854f037074db923527e7731e8005fe8d82786549f805b425b84a687->enter($__internal_0d6f611de854f037074db923527e7731e8005fe8d82786549f805b425b84a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d6f611de854f037074db923527e7731e8005fe8d82786549f805b425b84a687->leave($__internal_0d6f611de854f037074db923527e7731e8005fe8d82786549f805b425b84a687_prof);

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
