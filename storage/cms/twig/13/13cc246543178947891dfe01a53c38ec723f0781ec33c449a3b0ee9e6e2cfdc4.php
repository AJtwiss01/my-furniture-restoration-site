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

/* /Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/contact.htm */
class __TwigTemplate_80ddb5f24a8bd7bb8477e89216a1e39e8f5832f07c9a116347b3b6d28e926028 extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<section id=\"contact\" class=\"contact section container mx-auto\">
    <div class=\"flex\">
        <div class=\"col w-full md:w-6/12 mx-auto text-center\">
            <h4 class=\"section__heading text-2xl  mx-auto mb-4\">";
        // line 4
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "contact_heading", [], "any", false, false, true, 4)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 4), "contact_heading", [], "any", false, false, true, 4), "html", null, true))) : (print ("Send me a message")));
        echo "</h4>
            <p class=\"mb-16\">";
        // line 5
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "contact_description", [], "any", false, false, true, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 5), "contact_description", [], "any", false, false, true, 5), "html", null, true))) : (print ("acon ipsum dolor amet fatback pork chop chicken tenderloin sirloin meatball filet mignon buffalo ball tip porchetta bresaola")));
        echo "</p>
            <form id=\"contact-form\" action=\"#\" class=\"text-left shadow-lg border border-gray-100 px-8 py-12\" novalidate>
                <div class=\"form-group mb-6\">
                    <label for=\"name\">Full Name</label>
                    <input type=\"text\" id=\"name\" class=\"input\" name=\"name\">
                </div>
                <div class=\"form-group mb-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" class=\"input\" name=\"email\">
                </div>
                <div class=\"form-group mb-8\">
                    <label for=\"message\">Message</label>
                    <textarea id=\"message\" class=\"input h-32\" name=\"message\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn--primary btn--full\">Submit</button>
            </form>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\" class=\"contact section container mx-auto\">
    <div class=\"flex\">
        <div class=\"col w-full md:w-6/12 mx-auto text-center\">
            <h4 class=\"section__heading text-2xl  mx-auto mb-4\">{{ this.theme.contact_heading ? this.theme.contact_heading : 'Send me a message'}}</h4>
            <p class=\"mb-16\">{{ this.theme.contact_description ? this.theme.contact_description : 'acon ipsum dolor amet fatback pork chop chicken tenderloin sirloin meatball filet mignon buffalo ball tip porchetta bresaola'}}</p>
            <form id=\"contact-form\" action=\"#\" class=\"text-left shadow-lg border border-gray-100 px-8 py-12\" novalidate>
                <div class=\"form-group mb-6\">
                    <label for=\"name\">Full Name</label>
                    <input type=\"text\" id=\"name\" class=\"input\" name=\"name\">
                </div>
                <div class=\"form-group mb-6\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" class=\"input\" name=\"email\">
                </div>
                <div class=\"form-group mb-8\">
                    <label for=\"message\">Message</label>
                    <textarea id=\"message\" class=\"input h-32\" name=\"message\"></textarea>
                </div>
                <button type=\"submit\" class=\"btn btn--primary btn--full\">Submit</button>
            </form>
        </div>
    </div>
</section>", "/Users/ajtwiss/code/rbvd/themes/rbvd-theme/partials/contact.htm", "");
    }
}
