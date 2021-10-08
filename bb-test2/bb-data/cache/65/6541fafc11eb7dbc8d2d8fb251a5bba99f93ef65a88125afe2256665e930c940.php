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

/* mod_staff_profile.phtml */
class __TwigTemplate_a6ad8d3758e3eab6949f91a14fbbe0cdb0a3ee0c102814aaab05bc6817e78481 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_staff_profile.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Profile");
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">";
        // line 13
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-password\">";
        // line 14
        echo gettext("Change password");
        echo "</a></li>
        <li><a href=\"#tab-api\">";
        // line 15
        echo gettext("API");
        echo "</a></li>
        <li><a href=\"#tab-gravatar\">";
        // line 16
        echo gettext("Gravatar");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/update");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Profile updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 25
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 32
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            
                            <input type=\"text\" name=\"email\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 40
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "signature", [], "any", false, false, false, 42), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 47
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"";
        // line 53
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/change_password");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 56
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 64
        echo gettext("Password confirm");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 71
        echo gettext("Change password");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div id=\"tab-api\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>";
        // line 79
        echo gettext("API Key");
        echo "</h3>
                <p>";
        // line 80
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
                <p>";
        // line 81
        echo gettext("External application can control every aspect of BoxBilling using this API key.");
        echo "</p>
                <p>";
        // line 82
        echo gettext("Warning! Resetting the key will break existing applications using it.");
        echo "</p>
            </div>
  
            <form method=\"post\" action=\"";
        // line 85
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/generate_api_key");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterKeyUpdate\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 88
        echo gettext("API Key");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "profile_get", [], "any", false, false, false, 90), "api_token", [], "any", false, false, false, 90), "html", null, true);
        echo "\" id=\"apikey\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 94
        echo gettext("Generate new key");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>
        </div>

        <div id=\"tab-gravatar\" class=\"tab_content\">
            <h1>";
        // line 100
        echo gettext("Gravatar");
        echo "</h1>
            <p><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 101)), "html", null, true);
        echo "\" /> ";
        echo gettext("Change your avatar at");
        echo " <a target=\"_blank\" href=\"http://www.gravatar.com\">gravatar.com</a></p>
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>
";
    }

    // line 109
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "<script type=\"text/javascript\">
    function onAfterKeyUpdate(result)
    {
        bb.post('admin/profile/get', {}, function(result){
            \$('#apikey').val(result.api_token);
            bb.msg('New API key generated. Applications using old key are now not working.');
        })
        
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 110,  243 => 109,  231 => 101,  227 => 100,  218 => 94,  211 => 90,  206 => 88,  200 => 85,  194 => 82,  190 => 81,  186 => 80,  182 => 79,  171 => 71,  161 => 64,  150 => 56,  142 => 53,  133 => 47,  125 => 42,  120 => 40,  112 => 35,  106 => 32,  98 => 27,  93 => 25,  85 => 22,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  59 => 10,  55 => 9,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Profile' %}{% endblock %}

{# block top_content %}
<div class=\"title\"><h5>Manage your profile </h5></div>
{% endblock #}

{% block content %}

<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">{% trans 'Profile' %}</a></li>
        <li><a href=\"#tab-password\">{% trans 'Change password' %}</a></li>
        <li><a href=\"#tab-api\">{% trans 'API' %}</a></li>
        <li><a href=\"#tab-gravatar\">{% trans 'Gravatar' %}</a></li>
    </ul>

    <div class=\"tab_container\">
        
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"{{ 'api/admin/profile/update'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Profile updated' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Name' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"{{profile.name}}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Email' %}</label>
                        <div class=\"formRight\">
                            
                            <input type=\"text\" name=\"email\" value=\"{{profile.email}}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Signature' %}</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">{{profile.signature}}</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"{% trans 'Update profile' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <form method=\"post\" action=\"{{ 'api/admin/profile/change_password'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Password changed' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Password' %}</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>{% trans 'Password confirm' %}</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Change password' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div id=\"tab-api\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>{% trans 'API Key' %}</h3>
                <p>{% trans 'API key allows integration with external applications. You will need this key for authentication.' %}</p>
                <p>{% trans 'External application can control every aspect of BoxBilling using this API key.' %}</p>
                <p>{% trans 'Warning! Resetting the key will break existing applications using it.' %}</p>
            </div>
  
            <form method=\"post\" action=\"{{ 'api/admin/profile/generate_api_key'|link }}\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterKeyUpdate\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>{% trans 'API Key' %}</label>
                    <div class=\"formRight\">
                        <input type=\"text\" value=\"{{ admin.profile_get.api_token }}\" id=\"apikey\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"{% trans 'Generate new key' %}\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>
        </div>

        <div id=\"tab-gravatar\" class=\"tab_content\">
            <h1>{% trans 'Gravatar' %}</h1>
            <p><img src=\"{{ profile.email|gravatar }}\" /> {% trans 'Change your avatar at' %} <a target=\"_blank\" href=\"http://www.gravatar.com\">gravatar.com</a></p>
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>
{% endblock %}


{% block js%}
<script type=\"text/javascript\">
    function onAfterKeyUpdate(result)
    {
        bb.post('admin/profile/get', {}, function(result){
            \$('#apikey').val(result.api_token);
            bb.msg('New API key generated. Applications using old key are now not working.');
        })
        
    }
</script>
{% endblock %}", "mod_staff_profile.phtml", "/var/www/html/bb-themes/admin_default/html/mod_staff_profile.phtml");
    }
}
