<?php

/* ::base.html.twig */
class __TwigTemplate_bcc2f572028ccde0a0655c3a1cb2a36d8f0c749fef76ab661cee0c0c10328f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c69c411d633180333a0fc0bfc49edd2d77ba39d9dc946ffee39a724d8be7d674 = $this->env->getExtension("native_profiler");
        $__internal_c69c411d633180333a0fc0bfc49edd2d77ba39d9dc946ffee39a724d8be7d674->enter($__internal_c69c411d633180333a0fc0bfc49edd2d77ba39d9dc946ffee39a724d8be7d674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_c69c411d633180333a0fc0bfc49edd2d77ba39d9dc946ffee39a724d8be7d674->leave($__internal_c69c411d633180333a0fc0bfc49edd2d77ba39d9dc946ffee39a724d8be7d674_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4dd944d86df441a500d3973a4e6b5e2af23a7f0739bc6a59941df7e1a0d472cb = $this->env->getExtension("native_profiler");
        $__internal_4dd944d86df441a500d3973a4e6b5e2af23a7f0739bc6a59941df7e1a0d472cb->enter($__internal_4dd944d86df441a500d3973a4e6b5e2af23a7f0739bc6a59941df7e1a0d472cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4dd944d86df441a500d3973a4e6b5e2af23a7f0739bc6a59941df7e1a0d472cb->leave($__internal_4dd944d86df441a500d3973a4e6b5e2af23a7f0739bc6a59941df7e1a0d472cb_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_ca16954d7b0607573c77e8c0f6479dccd72337cb7f59484cb717781b64ab4dfe = $this->env->getExtension("native_profiler");
        $__internal_ca16954d7b0607573c77e8c0f6479dccd72337cb7f59484cb717781b64ab4dfe->enter($__internal_ca16954d7b0607573c77e8c0f6479dccd72337cb7f59484cb717781b64ab4dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_ca16954d7b0607573c77e8c0f6479dccd72337cb7f59484cb717781b64ab4dfe->leave($__internal_ca16954d7b0607573c77e8c0f6479dccd72337cb7f59484cb717781b64ab4dfe_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95db440a61b0c3e6d0ce682af28bea9c64f38cdb5d554a5468a3e7cf53cb1eaf = $this->env->getExtension("native_profiler");
        $__internal_95db440a61b0c3e6d0ce682af28bea9c64f38cdb5d554a5468a3e7cf53cb1eaf->enter($__internal_95db440a61b0c3e6d0ce682af28bea9c64f38cdb5d554a5468a3e7cf53cb1eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t\t<![endif]-->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        
        $__internal_95db440a61b0c3e6d0ce682af28bea9c64f38cdb5d554a5468a3e7cf53cb1eaf->leave($__internal_95db440a61b0c3e6d0ce682af28bea9c64f38cdb5d554a5468a3e7cf53cb1eaf_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_735e3c676f24350a0311a6e47845ebe95400ed3e0cd03faa9aad7eb2d934333b = $this->env->getExtension("native_profiler");
        $__internal_735e3c676f24350a0311a6e47845ebe95400ed3e0cd03faa9aad7eb2d934333b->enter($__internal_735e3c676f24350a0311a6e47845ebe95400ed3e0cd03faa9aad7eb2d934333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_735e3c676f24350a0311a6e47845ebe95400ed3e0cd03faa9aad7eb2d934333b->leave($__internal_735e3c676f24350a0311a6e47845ebe95400ed3e0cd03faa9aad7eb2d934333b_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6a552bfaf27508cd39eda496b52f3b7e98998c77c6bc53ef3a44fb04bcdbdd5 = $this->env->getExtension("native_profiler");
        $__internal_d6a552bfaf27508cd39eda496b52f3b7e98998c77c6bc53ef3a44fb04bcdbdd5->enter($__internal_d6a552bfaf27508cd39eda496b52f3b7e98998c77c6bc53ef3a44fb04bcdbdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_d6a552bfaf27508cd39eda496b52f3b7e98998c77c6bc53ef3a44fb04bcdbdd5->leave($__internal_d6a552bfaf27508cd39eda496b52f3b7e98998c77c6bc53ef3a44fb04bcdbdd5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 23,  129 => 22,  123 => 21,  112 => 20,  103 => 15,  94 => 10,  88 => 9,  77 => 8,  66 => 7,  57 => 25,  54 => 21,  52 => 20,  45 => 17,  43 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}{% endblock %}</title>*/
/* 		<meta name="description" content="{% block description %}{% endblock %}" />*/
/*         {% block stylesheets %}*/
/* 			<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/* 				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 			<![endif]-->*/
/* 			<link href="{{asset('css/style.css')}}" rel="stylesheet" />*/
/* 		{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/* 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* 			<script src="{{ asset('bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>*/
/* 		{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
