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
        $__internal_3e73896b5ffb35da2c917cb16b128cd6a5c01b67fb967558b6ac093024c55a11 = $this->env->getExtension("native_profiler");
        $__internal_3e73896b5ffb35da2c917cb16b128cd6a5c01b67fb967558b6ac093024c55a11->enter($__internal_3e73896b5ffb35da2c917cb16b128cd6a5c01b67fb967558b6ac093024c55a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e73896b5ffb35da2c917cb16b128cd6a5c01b67fb967558b6ac093024c55a11->leave($__internal_3e73896b5ffb35da2c917cb16b128cd6a5c01b67fb967558b6ac093024c55a11_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2f91e86cab0681d47a41e254ca710b8b739a1cab16accab3b13369201aba075a = $this->env->getExtension("native_profiler");
        $__internal_2f91e86cab0681d47a41e254ca710b8b739a1cab16accab3b13369201aba075a->enter($__internal_2f91e86cab0681d47a41e254ca710b8b739a1cab16accab3b13369201aba075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f91e86cab0681d47a41e254ca710b8b739a1cab16accab3b13369201aba075a->leave($__internal_2f91e86cab0681d47a41e254ca710b8b739a1cab16accab3b13369201aba075a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7b0e459dfb191a86c0a189a4a90cace454cebf7b8fb312c3858d27786f597a3 = $this->env->getExtension("native_profiler");
        $__internal_d7b0e459dfb191a86c0a189a4a90cace454cebf7b8fb312c3858d27786f597a3->enter($__internal_d7b0e459dfb191a86c0a189a4a90cace454cebf7b8fb312c3858d27786f597a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d7b0e459dfb191a86c0a189a4a90cace454cebf7b8fb312c3858d27786f597a3->leave($__internal_d7b0e459dfb191a86c0a189a4a90cace454cebf7b8fb312c3858d27786f597a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4225f8f9d855c658d49817cab0f72a93e0ce0cc973d0844f3f91969aaf20b8ef = $this->env->getExtension("native_profiler");
        $__internal_4225f8f9d855c658d49817cab0f72a93e0ce0cc973d0844f3f91969aaf20b8ef->enter($__internal_4225f8f9d855c658d49817cab0f72a93e0ce0cc973d0844f3f91969aaf20b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4225f8f9d855c658d49817cab0f72a93e0ce0cc973d0844f3f91969aaf20b8ef->leave($__internal_4225f8f9d855c658d49817cab0f72a93e0ce0cc973d0844f3f91969aaf20b8ef_prof);

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
