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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio.htm */
class __TwigTemplate_78b2ffa37faa24b33611e4227254feec964acf828fb28ec522b7ae7af0713343 extends \Twig\Template
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
        $filters = array("escape" => 3, "length" => 8);
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
        echo "<section id=\"portfolio\" class=\"portfolio section col container mx-auto text-center\">
    <div class=\"col w-full md:w-1/2 mx-auto\">
        <h3 class=\"section__heading mx-auto mb-4\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 3), "portfolio_heading", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "</h3>
        <p class=\"mb-16\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "portfolio_description", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</p>
    </div> 
    <div class=\"w-full mx-auto\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4\">
            ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "portfolio_items", [], "any", false, false, true, 8)) > 0)) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "portfolio_items", [], "any", false, false, true, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["portfolio_item"]) {
                // line 10
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['portfolio'] = $context["portfolio_item"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio-item"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        } else {
            // line 13
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['portfolio'] = ""                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio-item"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 15
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
        }
        // line 17
        echo "        </div>
        
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 17,  116 => 16,  110 => 15,  104 => 14,  99 => 13,  96 => 12,  90 => 11,  84 => 10,  79 => 9,  77 => 8,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"portfolio\" class=\"portfolio section col container mx-auto text-center\">
    <div class=\"col w-full md:w-1/2 mx-auto\">
        <h3 class=\"section__heading mx-auto mb-4\">{{ this.theme.portfolio_heading }}</h3>
        <p class=\"mb-16\">{{ this.theme.portfolio_description }}</p>
    </div> 
    <div class=\"w-full mx-auto\">
        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 md:gap-4\">
            {% if this.theme.portfolio_items|length > 0 %}
                {% for portfolio_item in this.theme.portfolio_items %}
                    {% partial 'portfolio-item' portfolio=portfolio_item %}
                {% endfor %}
            {% else %}
                {% for i in 1..8 %}
                    {% partial 'portfolio-item' portfolio=\"\" %}
                {% endfor %}
            {% endif %}
        </div>
        
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/portfolio.htm", "");
    }
}
