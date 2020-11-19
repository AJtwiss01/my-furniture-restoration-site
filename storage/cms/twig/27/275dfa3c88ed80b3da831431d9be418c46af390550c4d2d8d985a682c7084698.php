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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonials.htm */
class __TwigTemplate_00fdd49e50b600c7a50f1fbfdaf1f8aa873db699aeb829d101f7bc0871522ab7 extends \Twig\Template
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
        $tags = array("if" => 8, "for" => 9, "partial" => 10);
        $filters = array("escape" => 5, "length" => 8);
        $functions = array("range" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['escape', 'length'],
                ['range']
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
        echo "<section id=\"testimonials\" class=\"testimonials section bg-gradient-gray\">
    <div class=\"container mx-auto\">
        <div class=\"flex text-center\">
            <div class=\"col w-full md:w-1/2 mx-auto\">
                <h3 class=\"section__heading text-2xl mx-auto mb-24\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "testimonials_heading", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h3>
                <div class=\"testimonials__slider\">
                    <div class=\"glider\">
                        ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "testimonials", [], "any", false, false, true, 8)) > 0)) {
            // line 9
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "testimonials", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 10
                echo "                                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['testimonial'] = $context["testimonial"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonial"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                        ";
        } else {
            // line 13
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "                                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['testimonial'] = ""                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("testimonial"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                        ";
        }
        // line 17
        echo "                    </div>
                    <div class=\"glider__dots\"></div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonials.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 17,  113 => 16,  107 => 15,  101 => 14,  96 => 13,  93 => 12,  87 => 11,  81 => 10,  76 => 9,  74 => 8,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"testimonials\" class=\"testimonials section bg-gradient-gray\">
    <div class=\"container mx-auto\">
        <div class=\"flex text-center\">
            <div class=\"col w-full md:w-1/2 mx-auto\">
                <h3 class=\"section__heading text-2xl mx-auto mb-24\">{{ this.theme.testimonials_heading }}</h3>
                <div class=\"testimonials__slider\">
                    <div class=\"glider\">
                        {% if this.theme.testimonials|length > 0 %}
                            {% for testimonial in this.theme.testimonials %}
                                {% partial \"testimonial\" testimonial=testimonial %}
                            {% endfor %}
                        {% else %}
                            {% for i in 1..3 %}
                                {% partial \"testimonial\" testimonial=\"\" %}
                            {% endfor %}
                        {% endif %}
                    </div>
                    <div class=\"glider__dots\"></div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonials.htm", "");
    }
}
