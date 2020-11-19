<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/service-item.htm */
class __TwigTemplate_b7df7daa2653ffc864c19505c683d21a9fadd59aeec57b9cfb686abc92b6bc88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 6, "for" => 15);
        $filters = array("escape" => 2, "length" => 6, "split" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'split'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"service bg-white p-8 shadow-md border border-gray-100\">
    <h4 class=\"service__title text-lg text-primary mb-4\">";
        // line 2
        (((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, true, 2) == "")) ? (print ("Static Website")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, true, 2), "html", null, true))));
        echo "</h4>
    <p class=\"service__description\">";
        // line 3
        (((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, true, 3) == "")) ? (print ("Lorem ipsum dolor sit amet consectetur adipisicing elit.")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, true, 3), "html", null, true))));
        echo " </p>
    <p class=\"text-4xl font-bold\"><strong>";
        // line 4
        (((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "price", [], "any", false, false, true, 4) == "")) ? (print ("\$500")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "price", [], "any", false, false, true, 4), "html", null, true))));
        echo "</strong></p>
    <a href=\"";
        // line 5
        (((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "button_url", [], "any", false, false, true, 5) == "")) ? (print ("#contact")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "button_url", [], "any", false, false, true, 5), "html", null, true))));
        echo "\" class=\"btn btn--primary mb-8 js-trigger\">";
        (((twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "button_text", [], "any", false, false, true, 5) == "")) ? (print ("Contact Me")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "button_text", [], "any", false, false, true, 5), "html", null, true))));
        echo "</a>
    ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "features", [], "any", false, false, true, 6)) == "0")) {
            // line 7
            echo "        <ul class=\"text-left space-y-4\">
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Brisket picanha jerky t-bone</span></li>
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Shankle ham venison porchetta pork chop salami</span></li>
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Brisket picanha jerky t-bone</span></li>
        </ul>
    ";
        } else {
            // line 13
            echo "        ";
            if ((twig_length_filter($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "features", [], "any", false, false, true, 13), ",")) > 0)) {
                // line 14
                echo "        <ul class=\"text-left space-y-4\">
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "features", [], "any", false, false, true, 15), ","));
                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                    // line 16
                    echo "                <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["feature"], 16, $this->source), "html", null, true);
                    echo "</span></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </ul>
        ";
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/service-item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  116 => 20,  112 => 18,  103 => 16,  99 => 15,  96 => 14,  93 => 13,  85 => 7,  83 => 6,  77 => 5,  73 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"service bg-white p-8 shadow-md border border-gray-100\">
    <h4 class=\"service__title text-lg text-primary mb-4\">{{ service.title == '' ? 'Static Website' : service.title }}</h4>
    <p class=\"service__description\">{{ service.description == '' ? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' : service.description }} </p>
    <p class=\"text-4xl font-bold\"><strong>{{ service.price == '' ? '\$500' : service.price}}</strong></p>
    <a href=\"{{ service.button_url == '' ? '#contact' : service.button_url }}\" class=\"btn btn--primary mb-8 js-trigger\">{{ service.button_text == '' ? 'Contact Me' : service.button_text }}</a>
    {% if service.features|length == '0' %}
        <ul class=\"text-left space-y-4\">
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Brisket picanha jerky t-bone</span></li>
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Shankle ham venison porchetta pork chop salami</span></li>
            <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>Brisket picanha jerky t-bone</span></li>
        </ul>
    {% else %}
        {% if service.features|split(',')|length > 0 %}
        <ul class=\"text-left space-y-4\">
            {% for feature in service.features|split(',') %}
                <li class=\"flex\"><i class=\"icofont-check-circled mr-2 text-tertiary\"></i> <span>{{ feature }}</span></li>
            {% endfor %}
        </ul>
        {% endif %}
    {% endif %}
</div>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/service-item.htm", "");
    }
}
