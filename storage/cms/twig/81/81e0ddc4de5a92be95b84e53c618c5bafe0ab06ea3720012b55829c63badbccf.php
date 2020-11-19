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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/meta.htm */
class __TwigTemplate_7d7df81ffb0d85a1eca439d87d8e4be69e052c52c70b24b473c95a59b7a0cdf9 extends \Twig\Template
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
        $tags = array("if" => 15);
        $filters = array("escape" => 4, "default" => 4, "theme" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'default', 'theme'],
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
        echo "<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", true, true, true, 4)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 4), "meta_description", [], "any", false, false, true, 4), 4, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4), 4, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "description", [], "any", false, false, true, 4))), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "keywords", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 6), "website_author", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</title>
<link rel=\"canonical\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 8), "website_url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\" />
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/images/favicon.png");
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/css/style.css");
        echo "\">
<link rel=\"preload\" as=\"font\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/fonts/icofont/icofont.woff");
        echo "\" type=\"font/woff\" crossorigin=\"anonymous\">
<link rel=\"preload\" as=\"font\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/fonts/icofont/icofont.woff2");
        echo "\" type=\"font/woff2\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/dist/css/vendor/icofont.css");
        echo "\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
<noscript><link rel=\"stylesheet\" href=\"styles.css\"></noscript>
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 15), "override_color", [], "any", false, false, true, 15) == "1")) {
            echo "  <link rel=\"stylesheet\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/src/scss/style.scss"]);
            echo "\"> ";
        }
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 15,  103 => 13,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  83 => 8,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.description) }}\">
<meta name=\"keywords\" content=\"{{ this.theme.keywords }}\">
<meta name=\"author\" content=\"{{ this.theme.website_author }}\">
<title>{{ this.page.title }}</title>
<link rel=\"canonical\" href=\"{{ this.theme.website_url }}\" />
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/dist/images/favicon.png'|theme }}\" />
<link rel=\"stylesheet\" href=\"{{ 'assets/dist/css/style.css'|theme }}\">
<link rel=\"preload\" as=\"font\" href=\"{{ 'assets/dist/fonts/icofont/icofont.woff'|theme }}\" type=\"font/woff\" crossorigin=\"anonymous\">
<link rel=\"preload\" as=\"font\" href=\"{{ 'assets/dist/fonts/icofont/icofont.woff2'|theme }}\" type=\"font/woff2\" crossorigin=\"anonymous\">
<link rel=\"preload\" href=\"{{ 'assets/dist/css/vendor/icofont.css'|theme }}\" as=\"style\" onload=\"this.onload=null;this.rel='stylesheet'\">
<noscript><link rel=\"stylesheet\" href=\"styles.css\"></noscript>
{% if this.theme.override_color == \"1\" %}  <link rel=\"stylesheet\" href=\"{{ ['assets/src/scss/style.scss']|theme }}\"> {% endif %}", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/meta.htm", "");
    }
}
