<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_fd06c33ed8ddb8e7362df77f80e20dc56c379afaf62a4df8aff6690ec75c803d extends Twig_Template
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
        $__internal_d35dac2ef6a918dfbdee5b8626a2e1e1f3da2bb3c4485ee45ac035ac3bdf0704 = $this->env->getExtension("native_profiler");
        $__internal_d35dac2ef6a918dfbdee5b8626a2e1e1f3da2bb3c4485ee45ac035ac3bdf0704->enter($__internal_d35dac2ef6a918dfbdee5b8626a2e1e1f3da2bb3c4485ee45ac035ac3bdf0704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d35dac2ef6a918dfbdee5b8626a2e1e1f3da2bb3c4485ee45ac035ac3bdf0704->leave($__internal_d35dac2ef6a918dfbdee5b8626a2e1e1f3da2bb3c4485ee45ac035ac3bdf0704_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
