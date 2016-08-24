<?php

/* admin/layout.html.twig */
class __TwigTemplate_aa49a84dc2d8051467d6f768b2cb4f8d32ebf8365ef18bf0a853c9ddc4ef1ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
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
        $__internal_f5beb72c59eaf51197e60a8affcaa90dda735828132671ebc96e26e552c0451d = $this->env->getExtension("native_profiler");
        $__internal_f5beb72c59eaf51197e60a8affcaa90dda735828132671ebc96e26e552c0451d->enter($__internal_f5beb72c59eaf51197e60a8affcaa90dda735828132671ebc96e26e552c0451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5beb72c59eaf51197e60a8affcaa90dda735828132671ebc96e26e552c0451d->leave($__internal_f5beb72c59eaf51197e60a8affcaa90dda735828132671ebc96e26e552c0451d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f5d849c9d40f9ae1511753cf5c99644710e8ba24f9611fe35334029cc390fc57 = $this->env->getExtension("native_profiler");
        $__internal_f5d849c9d40f9ae1511753cf5c99644710e8ba24f9611fe35334029cc390fc57->enter($__internal_f5d849c9d40f9ae1511753cf5c99644710e8ba24f9611fe35334029cc390fc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_f5d849c9d40f9ae1511753cf5c99644710e8ba24f9611fe35334029cc390fc57->leave($__internal_f5d849c9d40f9ae1511753cf5c99644710e8ba24f9611fe35334029cc390fc57_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f94071f4f89c171f0d9492ab8ca8e7862fc6893fe941ae87113212abe29d867e = $this->env->getExtension("native_profiler");
        $__internal_f94071f4f89c171f0d9492ab8ca8e7862fc6893fe941ae87113212abe29d867e->enter($__internal_f94071f4f89c171f0d9492ab8ca8e7862fc6893fe941ae87113212abe29d867e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<nav class=\"navbar navbar-default\" id=\"main_admin_nav\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<p>Najlepsiejszy CMS</p>
\t\t\t</div>
\t\t\t <div>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj się</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t<ul id=\"secondary_nav\" class=\"nav nav-pills nav-stacked list-group\">
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_page_index");
        echo "\">Strony</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_footer_index");
        echo "\">Stopki</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Moje konto</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("admin_user_index");
            echo "\">Użytkownicy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t";
        // line 43
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 44
        echo "\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_f94071f4f89c171f0d9492ab8ca8e7862fc6893fe941ae87113212abe29d867e->leave($__internal_f94071f4f89c171f0d9492ab8ca8e7862fc6893fe941ae87113212abe29d867e_prof);

    }

    // line 43
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9cf00fb007e0b9b9635e28f36e9a8e001e6763371928e45b1ede6617dbeba861 = $this->env->getExtension("native_profiler");
        $__internal_9cf00fb007e0b9b9635e28f36e9a8e001e6763371928e45b1ede6617dbeba861->enter($__internal_9cf00fb007e0b9b9635e28f36e9a8e001e6763371928e45b1ede6617dbeba861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_9cf00fb007e0b9b9635e28f36e9a8e001e6763371928e45b1ede6617dbeba861->leave($__internal_9cf00fb007e0b9b9635e28f36e9a8e001e6763371928e45b1ede6617dbeba861_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_316d723a64fb053f61687387c63ff4a090dc40ffeb876da7e7100926bbf53758 = $this->env->getExtension("native_profiler");
        $__internal_316d723a64fb053f61687387c63ff4a090dc40ffeb876da7e7100926bbf53758->enter($__internal_316d723a64fb053f61687387c63ff4a090dc40ffeb876da7e7100926bbf53758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_316d723a64fb053f61687387c63ff4a090dc40ffeb876da7e7100926bbf53758->leave($__internal_316d723a64fb053f61687387c63ff4a090dc40ffeb876da7e7100926bbf53758_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71a2e54807976260b8bdbd4c9bffcef846709f1bdee7cbe4a78d5cbf32a9da14 = $this->env->getExtension("native_profiler");
        $__internal_71a2e54807976260b8bdbd4c9bffcef846709f1bdee7cbe4a78d5cbf32a9da14->enter($__internal_71a2e54807976260b8bdbd4c9bffcef846709f1bdee7cbe4a78d5cbf32a9da14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
\t<script>tinymce.init({ 
\t\t\tselector:'textarea.tinymce',
\t\t\tplugins: \"code\",
\t\t});
\t</script>
";
        
        $__internal_71a2e54807976260b8bdbd4c9bffcef846709f1bdee7cbe4a78d5cbf32a9da14->leave($__internal_71a2e54807976260b8bdbd4c9bffcef846709f1bdee7cbe4a78d5cbf32a9da14_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 51,  157 => 50,  146 => 44,  135 => 43,  125 => 45,  122 => 44,  120 => 43,  115 => 40,  109 => 37,  106 => 36,  104 => 35,  99 => 33,  93 => 30,  87 => 27,  73 => 16,  64 => 9,  58 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	{{ parent() }}*/
/* 	<link href="{{asset('css/admin/style.css')}}" rel="stylesheet" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<nav class="navbar navbar-default" id="main_admin_nav">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<p>Najlepsiejszy CMS</p>*/
/* 			</div>*/
/* 			 <div>*/
/* 				<ul class="nav navbar-nav navbar-right">*/
/* 					<li><a href="{{ path('fos_user_security_logout') }}">Wyloguj się</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</nav>*/
/* 	*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12 col-sm-3">*/
/* 				<ul id="secondary_nav" class="nav nav-pills nav-stacked list-group">*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('admin_page_index') }}">Strony</a>*/
/* 					</li>*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('admin_footer_index') }}">Stopki</a>*/
/* 					</li>*/
/* 					<li role="presentation" class="list-group-item">*/
/* 						<a href="{{ path('fos_user_profile_show') }}">Moje konto</a>*/
/* 					</li>*/
/* 					{% if is_granted('ROLE_ADMIN') %}*/
/* 						<li role="presentation" class="list-group-item">*/
/* 							<a href="{{ path('admin_user_index') }}">Użytkownicy</a>*/
/* 						</li>*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="col-xs-12 col-sm-9">*/
/* 				{% block breadcrumb %}{% endblock %}*/
/* 				{% block content %}{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>*/
/* 	<script>tinymce.init({ */
/* 			selector:'textarea.tinymce',*/
/* 			plugins: "code",*/
/* 		});*/
/* 	</script>*/
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
