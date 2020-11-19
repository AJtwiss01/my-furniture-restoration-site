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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonial.htm */
class __TwigTemplate_c86f25cab7099df9c94fdee7368a805456ac0bc5947abc7071e4841e87d08cca extends \Twig\Template
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
        $tags = array("if" => 4);
        $filters = array("media" => 2, "theme" => 2, "escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['media', 'theme', 'escape'],
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
        echo "<div class=\"testimonial\">
    <img class=\"w-24 h-24 mx-auto mb-12 rounded-full\" src=\"";
        // line 2
        echo ((twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "image", [], "any", false, false, true, 2)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "image", [], "any", false, false, true, 2), 2, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/testimonial-image.jpg")));
        echo "\" alt=\"Face\">
    <em class=\"italic text-lg inline-block mb-4\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "comment", [], "any", false, false, true, 4)) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "comment", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "
        ";
        } else {
            // line 7
            echo "            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eum asperiores labore laborum pariatur molestias et impedit. A, fugit suscipit consectetur optio, tempora ipsa soluta cumque alias quidem debitis aliquam.
        ";
        }
        // line 9
        echo "    </em>
    <h4 class=\"font-primary uppercase text-base font-bold mb-2\">- ";
        // line 10
        ((twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "name", [], "any", false, false, true, 10)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "name", [], "any", false, false, true, 10), "html", null, true))) : (print ("John Doe")));
        echo "</h4>
    <p class=\"text-sm text-gray-200\">";
        // line 11
        ((twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "company", [], "any", false, false, true, 11)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["testimonial"] ?? null), "company", [], "any", false, false, true, 11), "html", null, true))) : (print ("Company Name")));
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 11,  85 => 10,  82 => 9,  78 => 7,  72 => 5,  70 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testimonial\">
    <img class=\"w-24 h-24 mx-auto mb-12 rounded-full\" src=\"{{ testimonial.image ? testimonial.image|media : 'assets/dist/images/testimonial-image.jpg'|theme }}\" alt=\"Face\">
    <em class=\"italic text-lg inline-block mb-4\">
        {% if testimonial.comment %}
            {{ testimonial.comment }}
        {% else %}
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non eum asperiores labore laborum pariatur molestias et impedit. A, fugit suscipit consectetur optio, tempora ipsa soluta cumque alias quidem debitis aliquam.
        {% endif %}
    </em>
    <h4 class=\"font-primary uppercase text-base font-bold mb-2\">- {{ testimonial.name ? testimonial.name : 'John Doe' }}</h4>
    <p class=\"text-sm text-gray-200\">{{ testimonial.company ? testimonial.company : 'Company Name' }}</p>
</div>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/testimonial.htm", "");
    }
}
