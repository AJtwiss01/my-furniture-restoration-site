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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/services.htm */
class __TwigTemplate_25fb249c8b95a355f8231f5df674b3beaeb0aa727a8b960a8d8e7356253ca676 extends \Twig\Template
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
        $tags = array("if" => 10, "for" => 11, "partial" => 12);
        $filters = array("escape" => 5, "length" => 10);
        $functions = array("range" => 15);

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
        echo "<section id=\"services\" class=\"services section text-center bg-gradient-primary\">
    <div class=\"container mx-auto\">
        <div class=\"flex flex-col\">
            <div class=\"col w-full md:w-1/2 mx-auto\">
                <h3 class=\"section__heading text-2xl  mx-auto mb-4\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "services_heading", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h3>
                <p class=\"mb-16\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "services_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
            </div>
            <div class=\"col w-full lg:w-10/12 mx-auto\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16\">
                    ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "services", [], "any", false, false, true, 10)) > 0)) {
            // line 11
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "services", [], "any", false, false, true, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
                // line 12
                echo "                            ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['service'] = $context["service"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service-item"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                   ";
        } else {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 16
                echo "                            <!-- Just for empty purposes -->
                            ";
                // line 17
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['service'] = ""                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service-item"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                   ";
        }
        // line 20
        echo "                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  120 => 19,  114 => 18,  109 => 17,  106 => 16,  101 => 15,  98 => 14,  92 => 13,  86 => 12,  81 => 11,  79 => 10,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"services\" class=\"services section text-center bg-gradient-primary\">
    <div class=\"container mx-auto\">
        <div class=\"flex flex-col\">
            <div class=\"col w-full md:w-1/2 mx-auto\">
                <h3 class=\"section__heading text-2xl  mx-auto mb-4\">{{ this.theme.services_heading}}</h3>
                <p class=\"mb-16\">{{ this.theme.services_description }}</p>
            </div>
            <div class=\"col w-full lg:w-10/12 mx-auto\">
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16\">
                    {% if this.theme.services|length > 0 %}
                        {% for service in this.theme.services %}
                            {% partial 'service-item' service=service %}
                        {% endfor %}
                   {% else %}
                        {% for i in 0..2 %}
                            <!-- Just for empty purposes -->
                            {% partial 'service-item' service=\"\" %}
                        {% endfor %}
                   {% endif %}
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/services.htm", "");
    }
}
