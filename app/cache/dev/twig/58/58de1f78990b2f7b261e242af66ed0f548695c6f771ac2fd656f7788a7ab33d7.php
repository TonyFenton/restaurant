<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2f35628ff34e9fdc1ac00bf760e283b450ac7a53dfac387c7af77c98cc219063 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c426612d708fee5d652a52bbe7119b8dccda9a1ecd0bb5a849dc5fd0edede4 = $this->env->getExtension("native_profiler");
        $__internal_72c426612d708fee5d652a52bbe7119b8dccda9a1ecd0bb5a849dc5fd0edede4->enter($__internal_72c426612d708fee5d652a52bbe7119b8dccda9a1ecd0bb5a849dc5fd0edede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_72c426612d708fee5d652a52bbe7119b8dccda9a1ecd0bb5a849dc5fd0edede4->leave($__internal_72c426612d708fee5d652a52bbe7119b8dccda9a1ecd0bb5a849dc5fd0edede4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
