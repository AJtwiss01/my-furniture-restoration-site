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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/brands.htm */
class __TwigTemplate_a5d5455d9f490fd3d13eb4f4eb17fb2297cf0ecc954a8d8d99733a232f4a5ad1 extends \Twig\Template
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
        $tags = array("if" => 8, "for" => 10);
        $filters = array("escape" => 4, "length" => 8, "media" => 11, "theme" => 17);
        $functions = array("range" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length', 'media', 'theme'],
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
        echo "<section id=\"brands\" class=\"brands section section-ntm container mx-auto\">
    <div class=\"flex flex-col md:flex-row\">
        <div class=\"col w-full md:w-5/12 text-center md:text-left mb-8\">
            <h3 class=\"section__heading text-2xl mb-4 md:ml-16 md:w-1/2\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "brands_heading", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h3>
            <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "brands_description", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col flex w-full md:w-5/12 mx-auto items-start\">
            ";
        // line 8
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "brand_items", [], "any", false, false, true, 8)) > 0)) {
            // line 9
            echo "                <ul class=\"flex flex-wrap justify-center mx-auto\">
                    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "brand_items", [], "any", false, false, true, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["brand_item"]) {
                // line 11
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["brand_item"], "website_url", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noreferrer\"><img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["brand_item"], "logo", [], "any", false, false, true, 11), 11, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["brand_item"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\"></a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                </ul>
            ";
        } else {
            // line 15
            echo "                <ul class=\"flex flex-wrap justify-center mx-auto\">
                    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 17
                echo "                        <li><a href=\"https://www.websiteurl.com\" target=\"_blank\" rel=\"noreferrer\"><img src=\"";
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/brand-logo.jpg");
                echo "\" alt=\"Brand logo\"></a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </ul>
            ";
        }
        // line 21
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/brands.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  119 => 19,  110 => 17,  106 => 16,  103 => 15,  99 => 13,  86 => 11,  82 => 10,  79 => 9,  77 => 8,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"brands\" class=\"brands section section-ntm container mx-auto\">
    <div class=\"flex flex-col md:flex-row\">
        <div class=\"col w-full md:w-5/12 text-center md:text-left mb-8\">
            <h3 class=\"section__heading text-2xl mb-4 md:ml-16 md:w-1/2\">{{ this.theme.brands_heading }}</h3>
            <p>{{ this.theme.brands_description }}</p>
        </div>
        <div class=\"col flex w-full md:w-5/12 mx-auto items-start\">
            {% if this.theme.brand_items|length > 0 %}
                <ul class=\"flex flex-wrap justify-center mx-auto\">
                    {% for brand_item in this.theme.brand_items %}
                        <li><a href=\"{{ brand_item.website_url }}\" target=\"_blank\" rel=\"noreferrer\"><img src=\"{{ brand_item.logo|media }}\" alt=\"{{ brand_item.name }}\"></a></li>
                    {% endfor %}
                </ul>
            {% else %}
                <ul class=\"flex flex-wrap justify-center mx-auto\">
                    {% for i in 1..5 %}
                        <li><a href=\"https://www.websiteurl.com\" target=\"_blank\" rel=\"noreferrer\"><img src=\"{{ 'assets/dist/images/brand-logo.jpg'|theme }}\" alt=\"Brand logo\"></a></li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/brands.htm", "");
    }
}
