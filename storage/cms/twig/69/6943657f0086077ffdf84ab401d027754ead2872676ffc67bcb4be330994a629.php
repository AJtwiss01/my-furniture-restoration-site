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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/hero.htm */
class __TwigTemplate_69f0516ea91541d7a7afa220563f1ff38e52e98796a5684ff45ecb82b0bdcab0 extends \Twig\Template
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
        $tags = array("if" => 23);
        $filters = array("escape" => 4, "raw" => 5, "media" => 16, "theme" => 16);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'media', 'theme'],
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
        echo "<section id=\"hero\" class=\"hero flex container mx-auto\">
    <div class=\"col w-full md:w-5/12\">
        <div class=\"hero__content py-24 pl-2\">
            <h2 class=\"hero__heading hero__slide opacity-0\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "hero_heading", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "</h2>
            <p class=\"hero__subheading hero__slide opacity-0\">";
        // line 5
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "hero_subheading", [], "any", false, false, true, 5), 5, $this->source);
        echo "</p>
            <p class=\"hero__description hero__slide  opacity-0 mb-8\">";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "hero_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</p>
            <div class=\"hero__buttons\">
                <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "hero_primary_button_url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" class=\"btn btn--primary m-2 hero__slide opacity-0 js-trigger\" data-mt-tolerance=\"-50\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "hero_primary_button_text", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</a>
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "hero_secondary_button_url", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" class=\"btn m-2 hero__slide opacity-0 js-trigger\" data-mt-tolerance=\"-80\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "hero_secondary_button_text", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
    <div class=\"col w-full md:w-7/12 md:py-24\">
        <div class=\"hero__image mx-auto md:ml-24 relative\">
            <div class=\"hero__image-animation\">
                <img class=\"shadow-lg\" src=\"";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "hero_image", [], "any", false, false, true, 16)) ? ($this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 16), "hero_image", [], "any", false, false, true, 16), 16, $this->source))) : ($this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/hero.jpg")));
        echo "\" alt=\"Hero\">
                <div data-y=\"100%\"></div>
                <div data-y=\"-100%\"></div>
                <div data-y=\"100%\"></div>
                <div data-y=\"-100%\"></div>
                <div data-y=\"100%\"></div>
            </div> 
            ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 23), "hero_show_social_media", [], "any", false, false, true, 23) == 1)) {
            // line 24
            echo "                <div class=\"social-icons opacity-0 social-icons__bg\">
                    <ul>
                        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 26), "social_facebook", [], "any", false, false, true, 26) != "")) {
                // line 27
                echo "                        <li class=\"my-4\">
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 28), "social_facebook", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" aria-label=\"facebook link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Facebook icon</title><path d=\"M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z\"/></svg>
                            </a>
                        </li>
                        ";
            }
            // line 33
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "social_twitter", [], "any", false, false, true, 33) != "")) {
                // line 34
                echo "                        <li class=\"my-4\">
                            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 35), "social_twitter", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\" aria-label=\"twitter link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Twitter icon</title><path d=\"M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z\"/></svg>
                            </a>
                        </li>
                        ";
            }
            // line 40
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 40), "social_linkedin", [], "any", false, false, true, 40) != "")) {
                // line 41
                echo "                        <li class=\"my-4\">
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 42), "social_linkedin", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" aria-label=\"linkedin link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>LinkedIn icon</title><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                            </a>
                        </li>
                        ";
            }
            // line 47
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "social_instagram", [], "any", false, false, true, 47) != "")) {
                // line 48
                echo "                        <li class=\"my-4\">
                            <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 49), "social_instagram", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                echo "\" aria-label=\"instagram link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Instagram icon</title><path d=\"M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z\"/></svg>
                            </a>
                        </li>
                        ";
            }
            // line 54
            echo "                    </ul>
                </div>
            ";
        }
        // line 57
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  169 => 54,  161 => 49,  158 => 48,  155 => 47,  147 => 42,  144 => 41,  141 => 40,  133 => 35,  130 => 34,  127 => 33,  119 => 28,  116 => 27,  114 => 26,  110 => 24,  108 => 23,  98 => 16,  86 => 9,  80 => 8,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"hero\" class=\"hero flex container mx-auto\">
    <div class=\"col w-full md:w-5/12\">
        <div class=\"hero__content py-24 pl-2\">
            <h2 class=\"hero__heading hero__slide opacity-0\">{{ this.theme.hero_heading }}</h2>
            <p class=\"hero__subheading hero__slide opacity-0\">{{ this.theme.hero_subheading|raw }}</p>
            <p class=\"hero__description hero__slide  opacity-0 mb-8\">{{ this.theme.hero_description }}</p>
            <div class=\"hero__buttons\">
                <a href=\"{{ this.theme.hero_primary_button_url }}\" class=\"btn btn--primary m-2 hero__slide opacity-0 js-trigger\" data-mt-tolerance=\"-50\">{{ this.theme.hero_primary_button_text }}</a>
                <a href=\"{{ this.theme.hero_secondary_button_url }}\" class=\"btn m-2 hero__slide opacity-0 js-trigger\" data-mt-tolerance=\"-80\">{{ this.theme.hero_secondary_button_text }}</a>
            </div>
        </div>
    </div>
    <div class=\"col w-full md:w-7/12 md:py-24\">
        <div class=\"hero__image mx-auto md:ml-24 relative\">
            <div class=\"hero__image-animation\">
                <img class=\"shadow-lg\" src=\"{{ this.theme.hero_image ? this.theme.hero_image|media : 'assets/dist/images/hero.jpg'|theme }}\" alt=\"Hero\">
                <div data-y=\"100%\"></div>
                <div data-y=\"-100%\"></div>
                <div data-y=\"100%\"></div>
                <div data-y=\"-100%\"></div>
                <div data-y=\"100%\"></div>
            </div> 
            {% if this.theme.hero_show_social_media == 1 %}
                <div class=\"social-icons opacity-0 social-icons__bg\">
                    <ul>
                        {% if this.theme.social_facebook != '' %}
                        <li class=\"my-4\">
                            <a href=\"{{ this.theme.social_facebook }}\" aria-label=\"facebook link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Facebook icon</title><path d=\"M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z\"/></svg>
                            </a>
                        </li>
                        {% endif %}
                        {% if this.theme.social_twitter != '' %}
                        <li class=\"my-4\">
                            <a href=\"{{ this.theme.social_twitter }}\" aria-label=\"twitter link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Twitter icon</title><path d=\"M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z\"/></svg>
                            </a>
                        </li>
                        {% endif %}
                        {% if this.theme.social_linkedin != '' %}
                        <li class=\"my-4\">
                            <a href=\"{{ this.theme.social_linkedin }}\" aria-label=\"linkedin link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>LinkedIn icon</title><path d=\"M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z\"/></svg>
                            </a>
                        </li>
                        {% endif %}
                        {% if this.theme.social_instagram != '' %}
                        <li class=\"my-4\">
                            <a href=\"{{ this.theme.social_instagram }}\" aria-label=\"instagram link\">
                                <svg class=\"fill-current text-white hover:text-primary\" role=\"img\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><title>Instagram icon</title><path d=\"M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z\"/></svg>
                            </a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            {% endif %}
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/hero.htm", "");
    }
}
