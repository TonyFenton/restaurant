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
        $__internal_6eb97a3c26342fae7fa7771726c937f3de3f28114afe8606316f5d291f75bfa2 = $this->env->getExtension("native_profiler");
        $__internal_6eb97a3c26342fae7fa7771726c937f3de3f28114afe8606316f5d291f75bfa2->enter($__internal_6eb97a3c26342fae7fa7771726c937f3de3f28114afe8606316f5d291f75bfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6eb97a3c26342fae7fa7771726c937f3de3f28114afe8606316f5d291f75bfa2->leave($__internal_6eb97a3c26342fae7fa7771726c937f3de3f28114afe8606316f5d291f75bfa2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_237eae4d2047052c85ff0075d87997cce77bdd46b7365f2d49394b98e8677d5b = $this->env->getExtension("native_profiler");
        $__internal_237eae4d2047052c85ff0075d87997cce77bdd46b7365f2d49394b98e8677d5b->enter($__internal_237eae4d2047052c85ff0075d87997cce77bdd46b7365f2d49394b98e8677d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_237eae4d2047052c85ff0075d87997cce77bdd46b7365f2d49394b98e8677d5b->leave($__internal_237eae4d2047052c85ff0075d87997cce77bdd46b7365f2d49394b98e8677d5b_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_94c9342cd5984c3b6e55e01997c5d33e1f37989f5ef4855d9d1f372ae78451d9 = $this->env->getExtension("native_profiler");
        $__internal_94c9342cd5984c3b6e55e01997c5d33e1f37989f5ef4855d9d1f372ae78451d9->enter($__internal_94c9342cd5984c3b6e55e01997c5d33e1f37989f5ef4855d9d1f372ae78451d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_94c9342cd5984c3b6e55e01997c5d33e1f37989f5ef4855d9d1f372ae78451d9->leave($__internal_94c9342cd5984c3b6e55e01997c5d33e1f37989f5ef4855d9d1f372ae78451d9_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63b2e79c58119d6c0b62357149de58d708f6e4b19625f94dc871ec1f646fc7f6 = $this->env->getExtension("native_profiler");
        $__internal_63b2e79c58119d6c0b62357149de58d708f6e4b19625f94dc871ec1f646fc7f6->enter($__internal_63b2e79c58119d6c0b62357149de58d708f6e4b19625f94dc871ec1f646fc7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_63b2e79c58119d6c0b62357149de58d708f6e4b19625f94dc871ec1f646fc7f6->leave($__internal_63b2e79c58119d6c0b62357149de58d708f6e4b19625f94dc871ec1f646fc7f6_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d9ee65c0858e3a7c0430ab9acdd3888df4aea016801407ac7ce3fdbd1ce8862 = $this->env->getExtension("native_profiler");
        $__internal_5d9ee65c0858e3a7c0430ab9acdd3888df4aea016801407ac7ce3fdbd1ce8862->enter($__internal_5d9ee65c0858e3a7c0430ab9acdd3888df4aea016801407ac7ce3fdbd1ce8862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d9ee65c0858e3a7c0430ab9acdd3888df4aea016801407ac7ce3fdbd1ce8862->leave($__internal_5d9ee65c0858e3a7c0430ab9acdd3888df4aea016801407ac7ce3fdbd1ce8862_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7508e3729d021bd24bf7935ee36e30eba59a7fcdcd6d7783353158a2d9a6ebd = $this->env->getExtension("native_profiler");
        $__internal_f7508e3729d021bd24bf7935ee36e30eba59a7fcdcd6d7783353158a2d9a6ebd->enter($__internal_f7508e3729d021bd24bf7935ee36e30eba59a7fcdcd6d7783353158a2d9a6ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_f7508e3729d021bd24bf7935ee36e30eba59a7fcdcd6d7783353158a2d9a6ebd->leave($__internal_f7508e3729d021bd24bf7935ee36e30eba59a7fcdcd6d7783353158a2d9a6ebd_prof);

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
