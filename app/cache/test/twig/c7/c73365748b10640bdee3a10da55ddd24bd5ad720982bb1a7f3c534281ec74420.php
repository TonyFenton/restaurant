<?php

/* default_layout.html.twig */
class __TwigTemplate_5c453cbdfcadf35bd7672da9776826a2d7fa0bd8a4c5546aeaa7038c7f787f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default_layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf643bd995b1de3dc01c2991984d81da7e5d50869dc4942c6d53890482841e3 = $this->env->getExtension("native_profiler");
        $__internal_bcf643bd995b1de3dc01c2991984d81da7e5d50869dc4942c6d53890482841e3->enter($__internal_bcf643bd995b1de3dc01c2991984d81da7e5d50869dc4942c6d53890482841e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf643bd995b1de3dc01c2991984d81da7e5d50869dc4942c6d53890482841e3->leave($__internal_bcf643bd995b1de3dc01c2991984d81da7e5d50869dc4942c6d53890482841e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a182e54cf816bc23da018135c847707c7658da45f9c2b87c321ebdc514ceabcc = $this->env->getExtension("native_profiler");
        $__internal_a182e54cf816bc23da018135c847707c7658da45f9c2b87c321ebdc514ceabcc->enter($__internal_a182e54cf816bc23da018135c847707c7658da45f9c2b87c321ebdc514ceabcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_a182e54cf816bc23da018135c847707c7658da45f9c2b87c321ebdc514ceabcc->leave($__internal_a182e54cf816bc23da018135c847707c7658da45f9c2b87c321ebdc514ceabcc_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_ccbefcaa8a1e19b214c82b5c7903dd42a55e620b1ea20772ddf5173977dca2de = $this->env->getExtension("native_profiler");
        $__internal_ccbefcaa8a1e19b214c82b5c7903dd42a55e620b1ea20772ddf5173977dca2de->enter($__internal_ccbefcaa8a1e19b214c82b5c7903dd42a55e620b1ea20772ddf5173977dca2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 8
        echo "\t";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "description", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "description", array()), "description", array()), "html", null, true);
            echo "
\t";
        }
        
        $__internal_ccbefcaa8a1e19b214c82b5c7903dd42a55e620b1ea20772ddf5173977dca2de->leave($__internal_ccbefcaa8a1e19b214c82b5c7903dd42a55e620b1ea20772ddf5173977dca2de_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6de2d6af6b1a45e0920c7332bce43362ddcc39ee12dc813afdd71786340426c = $this->env->getExtension("native_profiler");
        $__internal_b6de2d6af6b1a45e0920c7332bce43362ddcc39ee12dc813afdd71786340426c->enter($__internal_b6de2d6af6b1a45e0920c7332bce43362ddcc39ee12dc813afdd71786340426c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/default/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_b6de2d6af6b1a45e0920c7332bce43362ddcc39ee12dc813afdd71786340426c->leave($__internal_b6de2d6af6b1a45e0920c7332bce43362ddcc39ee12dc813afdd71786340426c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_3594b9b74886c686f0293508c028e008305aef526b3b185b46087fe9bddb2002 = $this->env->getExtension("native_profiler");
        $__internal_3594b9b74886c686f0293508c028e008305aef526b3b185b46087fe9bddb2002->enter($__internal_3594b9b74886c686f0293508c028e008305aef526b3b185b46087fe9bddb2002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button aria-controls=\"navbar\" aria-expanded=\"false\" data-target=\"#navbar\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mainPage");
        echo "\" class=\"navbar-brand\">
\t\t\t\t\t<img class=\"img-responsive\" id=\"logo\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"/>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"navbar-collapse collapse navbar-right\" id=\"navbar\" >
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Default:mainMenu", array("currentPage" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "slug", array()))));
        echo "
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div id=\"main_photo_container\">
\t\t<img id=\"main_photo\" class=\"img-responsive\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/" . $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "picture", array()))), "html", null, true);
        echo "\" alt=\"\"/>
\t</div>
\t<div class=\"container\" id=\"content\">\t
\t\t";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "\t</div>
\t";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array(), "any", false, true), "footer", array(), "any", true, true)) {
            // line 44
            echo "\t\t<div id=\"footer\" class=\"panel-footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t";
            // line 48
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "footer", array()), "footer", array());
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        
        $__internal_3594b9b74886c686f0293508c028e008305aef526b3b185b46087fe9bddb2002->leave($__internal_3594b9b74886c686f0293508c028e008305aef526b3b185b46087fe9bddb2002_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_63ad5fa4858b1754268b277e01259e15a8e79b7f3042265a1ff3f84613a10512 = $this->env->getExtension("native_profiler");
        $__internal_63ad5fa4858b1754268b277e01259e15a8e79b7f3042265a1ff3f84613a10512->enter($__internal_63ad5fa4858b1754268b277e01259e15a8e79b7f3042265a1ff3f84613a10512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_63ad5fa4858b1754268b277e01259e15a8e79b7f3042265a1ff3f84613a10512->leave($__internal_63ad5fa4858b1754268b277e01259e15a8e79b7f3042265a1ff3f84613a10512_prof);

    }

    public function getTemplateName()
    {
        return "default_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  149 => 48,  143 => 44,  141 => 43,  138 => 42,  136 => 41,  130 => 38,  122 => 33,  115 => 29,  111 => 28,  100 => 19,  94 => 18,  85 => 15,  80 => 14,  74 => 13,  63 => 9,  60 => 8,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
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
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/default/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<nav class="navbar navbar-default" id="main_nav">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a href="{{ path('mainPage') }}" class="navbar-brand">*/
/* 					<img class="img-responsive" id="logo" src="{{asset('images/logo.png')}}" alt=""/>*/
/* 				</a>*/
/* 			</div>*/
/* 			<div class="navbar-collapse collapse navbar-right" id="navbar" >*/
/* 				{{ render(controller('AppBundle:Default:mainMenu', {"currentPage": page.slug })) }}*/
/* 			</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	<div id="main_photo_container">*/
/* 		<img id="main_photo" class="img-responsive" src="{{asset('images/' ~ page.picture )}}" alt=""/>*/
/* 	</div>*/
/* 	<div class="container" id="content">	*/
/* 		{% block content %}{% endblock %}*/
/* 	</div>*/
/* 	{% if page.footer.footer is defined %}*/
/* 		<div id="footer" class="panel-footer">*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12">*/
/* 						{{ page.footer.footer | raw}}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
