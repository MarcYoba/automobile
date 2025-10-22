<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* footer.html.twig */
class __TwigTemplate_9a92eee45f277f7e4d690fbdc83c5ab11d2efa0b613706e7b4c767bfa7ff028c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        yield "<footer id=\"footer\" class=\"top-space\">

\t\t<div class=\"footer1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<div class=\"col-md-3 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Contact</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p>+234 23 9873237<br>
\t\t\t\t\t\t\t\t<a href=\"mailto:#\">some.email@somewhere.com</a><br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t234 Hidden Pond Road, Ashland City, TN 37015
\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Follow me</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"follow-me-icons\">
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-twitter fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-dribbble fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-github fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-facebook-f fa-2x\"></i></a>
\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Text widget</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
\t\t\t\t\t\t\t<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /row of widgets -->
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer2\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"simplenav\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"sidebar-right.html\">Sidebar</a> |
\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a> |
\t\t\t\t\t\t\t\t<b><a href=\"signup.html\">Sign up</a></b>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"text-md-end\">
\t\t\t\t\t\t\t\tCopyright &copy; 2014, Your name. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a> 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /row of widgets -->
\t\t\t</div>
\t\t</div>
\t</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\" class=\"top-space\">

\t\t<div class=\"footer1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<div class=\"col-md-3 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Contact</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p>+234 23 9873237<br>
\t\t\t\t\t\t\t\t<a href=\"mailto:#\">some.email@somewhere.com</a><br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t234 Hidden Pond Road, Ashland City, TN 37015
\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Follow me</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"follow-me-icons\">
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-twitter fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-dribbble fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-github fa-2x\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"\"><i class=\"fab fa-facebook-f fa-2x\"></i></a>
\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<h3 class=\"widget-title\">Text widget</h3>
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
\t\t\t\t\t\t\t<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /row of widgets -->
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer2\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"simplenav\">
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a> | 
\t\t\t\t\t\t\t\t<a href=\"about.html\">About</a> |
\t\t\t\t\t\t\t\t<a href=\"sidebar-right.html\">Sidebar</a> |
\t\t\t\t\t\t\t\t<a href=\"contact.html\">Contact</a> |
\t\t\t\t\t\t\t\t<b><a href=\"signup.html\">Sign up</a></b>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 widget\">
\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t<p class=\"text-md-end\">
\t\t\t\t\t\t\t\tCopyright &copy; 2014, Your name. Designed by <a href=\"http://gettemplate.com/\" rel=\"designer\">gettemplate</a> 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- /row of widgets -->
\t\t\t</div>
\t\t</div>
\t</footer>", "footer.html.twig", "D:\\automobile\\templates\\footer.html.twig");
    }
}
