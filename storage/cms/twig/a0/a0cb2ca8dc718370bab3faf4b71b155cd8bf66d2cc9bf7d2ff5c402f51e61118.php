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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/about.htm */
class __TwigTemplate_9d8072fcf2c0f0ac531c684aa4d2782eeb51d6e2fce0cd56de1e010f40d69015 extends \Twig\Template
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
        $tags = array("if" => 9);
        $filters = array("media" => 5, "theme" => 5, "escape" => 7, "raw" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['media', 'theme', 'escape', 'raw'],
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
        echo "<section id=\"about\" class=\"about section container mx-auto\">
    <div class=\"flex\">
        <div class=\"w-full md:w-10/12 mx-auto\">
            <div class=\"relative\">
                <img class=\"about__image mx-auto md:mx-0\" src=\"";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "about_image", [], "any", false, false, true, 5)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "about_image", [], "any", false, false, true, 5), 5, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/about.jpg")));
        echo "\" alt=\"About\">
                <div class=\"about__content bg-white shadow-lg rounded-sm border border-gray-100\">
                    <h3 class=\"section__heading text-xl mt-8 md:mt-0 mb-4 md:ml-16 md:w-1/2\">";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "about_heading", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h3>
                    <div>
                        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "about_content", [], "any", false, false, true, 9)) {
            // line 10
            echo "                            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "about_content", [], "any", false, false, true, 10), 10, $this->source);
            echo "
                        ";
        } else {
            // line 12
            echo "                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos voluptatum, ut doloremque corrupti asperiores deserunt esse repellat quaerat eaque nulla repellendus officia, a autem voluptates? Qui eaque excepturi est dolorum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor nulla deserunt culpa consectetur eligendi cum maiores, suscipit laudantium possimus dolorum, odit sed distinctio adipisci?</p>
                        ";
        }
        // line 15
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  86 => 12,  80 => 10,  78 => 9,  73 => 7,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"about\" class=\"about section container mx-auto\">
    <div class=\"flex\">
        <div class=\"w-full md:w-10/12 mx-auto\">
            <div class=\"relative\">
                <img class=\"about__image mx-auto md:mx-0\" src=\"{{ this.theme.about_image ? this.theme.about_image|media : 'assets/dist/images/about.jpg'|theme }}\" alt=\"About\">
                <div class=\"about__content bg-white shadow-lg rounded-sm border border-gray-100\">
                    <h3 class=\"section__heading text-xl mt-8 md:mt-0 mb-4 md:ml-16 md:w-1/2\">{{ this.theme.about_heading }}</h3>
                    <div>
                        {% if this.theme.about_content %}
                            {{ this.theme.about_content|raw }}
                        {% else %}
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos voluptatum, ut doloremque corrupti asperiores deserunt esse repellat quaerat eaque nulla repellendus officia, a autem voluptates? Qui eaque excepturi est dolorum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolor nulla deserunt culpa consectetur eligendi cum maiores, suscipit laudantium possimus dolorum, odit sed distinctio adipisci?</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/about.htm", "");
    }
}
