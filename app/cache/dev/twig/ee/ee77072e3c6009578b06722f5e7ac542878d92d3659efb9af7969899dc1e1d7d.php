<?php

/* default/layout.html.twig */
class __TwigTemplate_dde4393721147b2835ffdf23dea410fa3e664f191306566ab39fef85c2f21a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b17bef2ecc43e7d20366a1800bbd8073b2bb899a35662e00f40424c474f8d85 = $this->env->getExtension("native_profiler");
        $__internal_2b17bef2ecc43e7d20366a1800bbd8073b2bb899a35662e00f40424c474f8d85->enter($__internal_2b17bef2ecc43e7d20366a1800bbd8073b2bb899a35662e00f40424c474f8d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b17bef2ecc43e7d20366a1800bbd8073b2bb899a35662e00f40424c474f8d85->leave($__internal_2b17bef2ecc43e7d20366a1800bbd8073b2bb899a35662e00f40424c474f8d85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1938f48dd890a60d4c41ed9bcfb3d932934b050e95440b6ac152ce141e4f8727 = $this->env->getExtension("native_profiler");
        $__internal_1938f48dd890a60d4c41ed9bcfb3d932934b050e95440b6ac152ce141e4f8727->enter($__internal_1938f48dd890a60d4c41ed9bcfb3d932934b050e95440b6ac152ce141e4f8727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_1938f48dd890a60d4c41ed9bcfb3d932934b050e95440b6ac152ce141e4f8727->leave($__internal_1938f48dd890a60d4c41ed9bcfb3d932934b050e95440b6ac152ce141e4f8727_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_1cb1e485ed81b20dfe28c6a49d59c2bcd16a781840419e174accc62557a730d8 = $this->env->getExtension("native_profiler");
        $__internal_1cb1e485ed81b20dfe28c6a49d59c2bcd16a781840419e174accc62557a730d8->enter($__internal_1cb1e485ed81b20dfe28c6a49d59c2bcd16a781840419e174accc62557a730d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_1cb1e485ed81b20dfe28c6a49d59c2bcd16a781840419e174accc62557a730d8->leave($__internal_1cb1e485ed81b20dfe28c6a49d59c2bcd16a781840419e174accc62557a730d8_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_0687d263ffb5fb1213744c2d8f3d5fff3ec804679b847d013f0f32074da9b2dc = $this->env->getExtension("native_profiler");
        $__internal_0687d263ffb5fb1213744c2d8f3d5fff3ec804679b847d013f0f32074da9b2dc->enter($__internal_0687d263ffb5fb1213744c2d8f3d5fff3ec804679b847d013f0f32074da9b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_0687d263ffb5fb1213744c2d8f3d5fff3ec804679b847d013f0f32074da9b2dc->leave($__internal_0687d263ffb5fb1213744c2d8f3d5fff3ec804679b847d013f0f32074da9b2dc_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8add0a68a6ca646b4bbceaf89842053b569267e726797f97b37fe2d9fdc9d5b9 = $this->env->getExtension("native_profiler");
        $__internal_8add0a68a6ca646b4bbceaf89842053b569267e726797f97b37fe2d9fdc9d5b9->enter($__internal_8add0a68a6ca646b4bbceaf89842053b569267e726797f97b37fe2d9fdc9d5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_8add0a68a6ca646b4bbceaf89842053b569267e726797f97b37fe2d9fdc9d5b9->leave($__internal_8add0a68a6ca646b4bbceaf89842053b569267e726797f97b37fe2d9fdc9d5b9_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_730ccf8ec5a72d287df000a1231744734f787b026ff46b9ddf7686912f884b47 = $this->env->getExtension("native_profiler");
        $__internal_730ccf8ec5a72d287df000a1231744734f787b026ff46b9ddf7686912f884b47->enter($__internal_730ccf8ec5a72d287df000a1231744734f787b026ff46b9ddf7686912f884b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "\t<div id=\"header\">
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mainPage");
        echo "\">
\t\t\t<img id=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t</a>
\t\t";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))));
        echo "
\t\t<img id=\"picture\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div id=\"content\">
\t\t";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "\t</div>
\t";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 33
            echo "\t\t<div id=\"footer\">
\t\t\t";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
            echo "
\t\t</div>
\t";
        }
        
        $__internal_730ccf8ec5a72d287df000a1231744734f787b026ff46b9ddf7686912f884b47->leave($__internal_730ccf8ec5a72d287df000a1231744734f787b026ff46b9ddf7686912f884b47_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0b6a7e10398a7aaa5c283d839673ec94609a7d741ec7150246dd77be0cdb5bd = $this->env->getExtension("native_profiler");
        $__internal_c0b6a7e10398a7aaa5c283d839673ec94609a7d741ec7150246dd77be0cdb5bd->enter($__internal_c0b6a7e10398a7aaa5c283d839673ec94609a7d741ec7150246dd77be0cdb5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c0b6a7e10398a7aaa5c283d839673ec94609a7d741ec7150246dd77be0cdb5bd->leave($__internal_c0b6a7e10398a7aaa5c283d839673ec94609a7d741ec7150246dd77be0cdb5bd_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13d84556492c7e5157237508c5197a96687cf79bada4a3fa4109470370c3423a = $this->env->getExtension("native_profiler");
        $__internal_13d84556492c7e5157237508c5197a96687cf79bada4a3fa4109470370c3423a->enter($__internal_13d84556492c7e5157237508c5197a96687cf79bada4a3fa4109470370c3423a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13d84556492c7e5157237508c5197a96687cf79bada4a3fa4109470370c3423a->leave($__internal_13d84556492c7e5157237508c5197a96687cf79bada4a3fa4109470370c3423a_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 39,  156 => 30,  145 => 34,  142 => 33,  140 => 32,  137 => 31,  135 => 30,  129 => 27,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  107 => 21,  98 => 18,  93 => 17,  87 => 16,  76 => 13,  65 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* 	{{ page.title }}*/
/* {% endblock %}*/
/* */
/* {% block description %}*/
/* 	{% if page.description.description is defined %}*/
/* 		{{ page.description.description }}*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block keywords %}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div id="header">*/
/* 		<a href="{{ path('mainPage') }}">*/
/* 			<img id="logo" src="{{asset('images/logo.png')}}" alt=""/>*/
/* 		</a>*/
/* 		{{ render(controller('AppBundle:Default:mainMenu', {"currentPage": page.slug })) }}*/
/* 		<img id="picture" src="{{asset('images/' ~ page.picture )}}" alt=""/>*/
/* 	</div>*/
/* 	<div id="content">*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	{% if page.footer.footer is defined %}*/
/* 		<div id="footer">*/
/* 			{{ page.footer.footer | raw}}*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
