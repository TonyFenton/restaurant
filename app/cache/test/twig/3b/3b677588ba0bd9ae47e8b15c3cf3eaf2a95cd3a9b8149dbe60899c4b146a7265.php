<?php

/* base.html.twig */
class __TwigTemplate_a2fe4fd61c697fa9c433220ae8e6e8057407debddc88ecc0b78752661997dccb extends Twig_Template
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
        $__internal_1e2fa5cee1bf9dee3aad607ab9e04b82b95deed1edd1ddb1737e349b5788ddeb = $this->env->getExtension("native_profiler");
        $__internal_1e2fa5cee1bf9dee3aad607ab9e04b82b95deed1edd1ddb1737e349b5788ddeb->enter($__internal_1e2fa5cee1bf9dee3aad607ab9e04b82b95deed1edd1ddb1737e349b5788ddeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1e2fa5cee1bf9dee3aad607ab9e04b82b95deed1edd1ddb1737e349b5788ddeb->leave($__internal_1e2fa5cee1bf9dee3aad607ab9e04b82b95deed1edd1ddb1737e349b5788ddeb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b4ee53b7c8ddedc2ed7f6e93fd68c67928ac5b738efbdbeef17d86ffa34c7aa = $this->env->getExtension("native_profiler");
        $__internal_4b4ee53b7c8ddedc2ed7f6e93fd68c67928ac5b738efbdbeef17d86ffa34c7aa->enter($__internal_4b4ee53b7c8ddedc2ed7f6e93fd68c67928ac5b738efbdbeef17d86ffa34c7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4b4ee53b7c8ddedc2ed7f6e93fd68c67928ac5b738efbdbeef17d86ffa34c7aa->leave($__internal_4b4ee53b7c8ddedc2ed7f6e93fd68c67928ac5b738efbdbeef17d86ffa34c7aa_prof);

    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        $__internal_1dae7276709e7dcec276f3f3ae13b28a6b4492c039383eda863b501c1a8f8720 = $this->env->getExtension("native_profiler");
        $__internal_1dae7276709e7dcec276f3f3ae13b28a6b4492c039383eda863b501c1a8f8720->enter($__internal_1dae7276709e7dcec276f3f3ae13b28a6b4492c039383eda863b501c1a8f8720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_1dae7276709e7dcec276f3f3ae13b28a6b4492c039383eda863b501c1a8f8720->leave($__internal_1dae7276709e7dcec276f3f3ae13b28a6b4492c039383eda863b501c1a8f8720_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8780d07ec98b64cc46f68c4984ca9c5889c55d2554f5f691a5218cf9b91692f8 = $this->env->getExtension("native_profiler");
        $__internal_8780d07ec98b64cc46f68c4984ca9c5889c55d2554f5f691a5218cf9b91692f8->enter($__internal_8780d07ec98b64cc46f68c4984ca9c5889c55d2554f5f691a5218cf9b91692f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8780d07ec98b64cc46f68c4984ca9c5889c55d2554f5f691a5218cf9b91692f8->leave($__internal_8780d07ec98b64cc46f68c4984ca9c5889c55d2554f5f691a5218cf9b91692f8_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_609e93b9181e3d93f82a02e0b5096014ef64bb30dc1c5d377487a60d60c7bc97 = $this->env->getExtension("native_profiler");
        $__internal_609e93b9181e3d93f82a02e0b5096014ef64bb30dc1c5d377487a60d60c7bc97->enter($__internal_609e93b9181e3d93f82a02e0b5096014ef64bb30dc1c5d377487a60d60c7bc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_609e93b9181e3d93f82a02e0b5096014ef64bb30dc1c5d377487a60d60c7bc97->leave($__internal_609e93b9181e3d93f82a02e0b5096014ef64bb30dc1c5d377487a60d60c7bc97_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53bda5d7df8edcd74f78e3c12cd2bc0712486571c74d34df699175230d217fd2 = $this->env->getExtension("native_profiler");
        $__internal_53bda5d7df8edcd74f78e3c12cd2bc0712486571c74d34df699175230d217fd2->enter($__internal_53bda5d7df8edcd74f78e3c12cd2bc0712486571c74d34df699175230d217fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap-3.3.7-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_53bda5d7df8edcd74f78e3c12cd2bc0712486571c74d34df699175230d217fd2->leave($__internal_53bda5d7df8edcd74f78e3c12cd2bc0712486571c74d34df699175230d217fd2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
