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
        $__internal_6c663f99f72fcb4e841693a35199fca03b7dafcbc634a7bd4b3807c6f6f3ca95 = $this->env->getExtension("native_profiler");
        $__internal_6c663f99f72fcb4e841693a35199fca03b7dafcbc634a7bd4b3807c6f6f3ca95->enter($__internal_6c663f99f72fcb4e841693a35199fca03b7dafcbc634a7bd4b3807c6f6f3ca95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6c663f99f72fcb4e841693a35199fca03b7dafcbc634a7bd4b3807c6f6f3ca95->leave($__internal_6c663f99f72fcb4e841693a35199fca03b7dafcbc634a7bd4b3807c6f6f3ca95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_849fddbb6cad2a6f43432855fb237d02de20b8219bbaf01afaaeb4cc5363cd14 = $this->env->getExtension("native_profiler");
        $__internal_849fddbb6cad2a6f43432855fb237d02de20b8219bbaf01afaaeb4cc5363cd14->enter($__internal_849fddbb6cad2a6f43432855fb237d02de20b8219bbaf01afaaeb4cc5363cd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_849fddbb6cad2a6f43432855fb237d02de20b8219bbaf01afaaeb4cc5363cd14->leave($__internal_849fddbb6cad2a6f43432855fb237d02de20b8219bbaf01afaaeb4cc5363cd14_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_4d4463563d54759e2302c5917dee4f08fb87ea9f805b606c8725076c6e534447 = $this->env->getExtension("native_profiler");
        $__internal_4d4463563d54759e2302c5917dee4f08fb87ea9f805b606c8725076c6e534447->enter($__internal_4d4463563d54759e2302c5917dee4f08fb87ea9f805b606c8725076c6e534447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_4d4463563d54759e2302c5917dee4f08fb87ea9f805b606c8725076c6e534447->leave($__internal_4d4463563d54759e2302c5917dee4f08fb87ea9f805b606c8725076c6e534447_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_225c2b5ee8cfa034e61242e65c011b53488cb5c705774cae45ce11bae8b58260 = $this->env->getExtension("native_profiler");
        $__internal_225c2b5ee8cfa034e61242e65c011b53488cb5c705774cae45ce11bae8b58260->enter($__internal_225c2b5ee8cfa034e61242e65c011b53488cb5c705774cae45ce11bae8b58260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_225c2b5ee8cfa034e61242e65c011b53488cb5c705774cae45ce11bae8b58260->leave($__internal_225c2b5ee8cfa034e61242e65c011b53488cb5c705774cae45ce11bae8b58260_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fd2d8b8c7f5972d8f76973b8b469f6d54d4c22f8d39e3c8a2a8922adfd5794b = $this->env->getExtension("native_profiler");
        $__internal_0fd2d8b8c7f5972d8f76973b8b469f6d54d4c22f8d39e3c8a2a8922adfd5794b->enter($__internal_0fd2d8b8c7f5972d8f76973b8b469f6d54d4c22f8d39e3c8a2a8922adfd5794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0fd2d8b8c7f5972d8f76973b8b469f6d54d4c22f8d39e3c8a2a8922adfd5794b->leave($__internal_0fd2d8b8c7f5972d8f76973b8b469f6d54d4c22f8d39e3c8a2a8922adfd5794b_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24c2859db802b8cca324ac084c0183d7be65d674b7fd8ababbef37e3c5c9a12c = $this->env->getExtension("native_profiler");
        $__internal_24c2859db802b8cca324ac084c0183d7be65d674b7fd8ababbef37e3c5c9a12c->enter($__internal_24c2859db802b8cca324ac084c0183d7be65d674b7fd8ababbef37e3c5c9a12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_24c2859db802b8cca324ac084c0183d7be65d674b7fd8ababbef37e3c5c9a12c->leave($__internal_24c2859db802b8cca324ac084c0183d7be65d674b7fd8ababbef37e3c5c9a12c_prof);

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
