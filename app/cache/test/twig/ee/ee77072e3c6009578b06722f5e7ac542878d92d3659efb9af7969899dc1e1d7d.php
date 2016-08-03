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
        $__internal_25f96a04663d47049ba897e87416c317d92e4be308ea5e1dc86a6bc0582ddb19 = $this->env->getExtension("native_profiler");
        $__internal_25f96a04663d47049ba897e87416c317d92e4be308ea5e1dc86a6bc0582ddb19->enter($__internal_25f96a04663d47049ba897e87416c317d92e4be308ea5e1dc86a6bc0582ddb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25f96a04663d47049ba897e87416c317d92e4be308ea5e1dc86a6bc0582ddb19->leave($__internal_25f96a04663d47049ba897e87416c317d92e4be308ea5e1dc86a6bc0582ddb19_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37be9d47fad6ea3810030e89240a2b484775d412114ef367265eb2ba96ba3c65 = $this->env->getExtension("native_profiler");
        $__internal_37be9d47fad6ea3810030e89240a2b484775d412114ef367265eb2ba96ba3c65->enter($__internal_37be9d47fad6ea3810030e89240a2b484775d412114ef367265eb2ba96ba3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_37be9d47fad6ea3810030e89240a2b484775d412114ef367265eb2ba96ba3c65->leave($__internal_37be9d47fad6ea3810030e89240a2b484775d412114ef367265eb2ba96ba3c65_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_097045eec233358ccb8f4dbeef66e544bc4d0358ef066d8f2b12125471886d2b = $this->env->getExtension("native_profiler");
        $__internal_097045eec233358ccb8f4dbeef66e544bc4d0358ef066d8f2b12125471886d2b->enter($__internal_097045eec233358ccb8f4dbeef66e544bc4d0358ef066d8f2b12125471886d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_097045eec233358ccb8f4dbeef66e544bc4d0358ef066d8f2b12125471886d2b->leave($__internal_097045eec233358ccb8f4dbeef66e544bc4d0358ef066d8f2b12125471886d2b_prof);

    }

    // line 13
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_cce6bda2ecd9dfc78b740ad7436b86b712f92cf395657d52d86b27326c500e63 = $this->env->getExtension("native_profiler");
        $__internal_cce6bda2ecd9dfc78b740ad7436b86b712f92cf395657d52d86b27326c500e63->enter($__internal_cce6bda2ecd9dfc78b740ad7436b86b712f92cf395657d52d86b27326c500e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        
        $__internal_cce6bda2ecd9dfc78b740ad7436b86b712f92cf395657d52d86b27326c500e63->leave($__internal_cce6bda2ecd9dfc78b740ad7436b86b712f92cf395657d52d86b27326c500e63_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da3f272fa5bb07babcd680428c45f82f1c7c659543f9170c2c64ee85c171f5aa = $this->env->getExtension("native_profiler");
        $__internal_da3f272fa5bb07babcd680428c45f82f1c7c659543f9170c2c64ee85c171f5aa->enter($__internal_da3f272fa5bb07babcd680428c45f82f1c7c659543f9170c2c64ee85c171f5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_da3f272fa5bb07babcd680428c45f82f1c7c659543f9170c2c64ee85c171f5aa->leave($__internal_da3f272fa5bb07babcd680428c45f82f1c7c659543f9170c2c64ee85c171f5aa_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bd198a4761717a63df7d6d3d0424291c73ac62a6b4328a3935186cac2164516 = $this->env->getExtension("native_profiler");
        $__internal_1bd198a4761717a63df7d6d3d0424291c73ac62a6b4328a3935186cac2164516->enter($__internal_1bd198a4761717a63df7d6d3d0424291c73ac62a6b4328a3935186cac2164516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
\t<div id=\"footer\">
\t\t";
        // line 33
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
        echo "
\t</div>
";
        
        $__internal_1bd198a4761717a63df7d6d3d0424291c73ac62a6b4328a3935186cac2164516->leave($__internal_1bd198a4761717a63df7d6d3d0424291c73ac62a6b4328a3935186cac2164516_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_7cb9e351aa6fe7be60c1cfdd06e215d1bf477c6c72b528fdda72efcbb0a8c806 = $this->env->getExtension("native_profiler");
        $__internal_7cb9e351aa6fe7be60c1cfdd06e215d1bf477c6c72b528fdda72efcbb0a8c806->enter($__internal_7cb9e351aa6fe7be60c1cfdd06e215d1bf477c6c72b528fdda72efcbb0a8c806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7cb9e351aa6fe7be60c1cfdd06e215d1bf477c6c72b528fdda72efcbb0a8c806->leave($__internal_7cb9e351aa6fe7be60c1cfdd06e215d1bf477c6c72b528fdda72efcbb0a8c806_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f17f77234f2ffb4cf0588bc11cfe1753e02ba0f1a16e64de0f6c867341650e6 = $this->env->getExtension("native_profiler");
        $__internal_2f17f77234f2ffb4cf0588bc11cfe1753e02ba0f1a16e64de0f6c867341650e6->enter($__internal_2f17f77234f2ffb4cf0588bc11cfe1753e02ba0f1a16e64de0f6c867341650e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f17f77234f2ffb4cf0588bc11cfe1753e02ba0f1a16e64de0f6c867341650e6->leave($__internal_2f17f77234f2ffb4cf0588bc11cfe1753e02ba0f1a16e64de0f6c867341650e6_prof);

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
        return array (  162 => 37,  151 => 30,  141 => 33,  137 => 31,  135 => 30,  129 => 27,  125 => 26,  120 => 24,  116 => 23,  113 => 22,  107 => 21,  98 => 18,  93 => 17,  87 => 16,  76 => 13,  65 => 9,  62 => 8,  56 => 7,  46 => 4,  40 => 3,  11 => 1,);
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
/* 	<div id="footer">*/
/* 		{{ page.footer.footer | raw}}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {% endblock %}*/
