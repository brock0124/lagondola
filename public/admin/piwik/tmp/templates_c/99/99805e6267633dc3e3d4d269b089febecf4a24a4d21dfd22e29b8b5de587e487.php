<?php

/* @CorePluginsAdmin/safemode.twig */
class __TwigTemplate_b91c762eb769744d9d5b638a879da6cca59caac271389351c9fb1e5a76b40c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        ";
        // line 31
        if ((($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) ||  !($context["isAnonymousUser"] ?? $this->getContext($context, "isAnonymousUser")))) {
            // line 32
            echo "            <p>
                The following error just broke Piwik";
            // line 33
            if (($context["showVersion"] ?? $this->getContext($context, "showVersion"))) {
                echo " (v";
                echo \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "html", null, true);
                echo ")";
            }
            echo ":
                <pre>";
            // line 34
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "html", null, true);
            echo "</pre>
                in
                <pre>";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "html", null, true);
            echo " line ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "html", null, true);
            echo "</pre>
            </p>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Piwik to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@piwik.org?subject=";
            // line 53
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Piwik " . \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                    to the Piwik team.
                </li>
            </ul>
            <hr/>

        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ((($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) || ($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
            // line 62
            echo "
            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Piwik\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                ";
            // line 72
            if (($context["pluginCausesIssue"] ?? $this->getContext($context, "pluginCausesIssue"))) {
                // line 73
                echo "                    Based on the error message, the issue is probably caused by the plugin <strong>";
                echo \Piwik\piwik_escape_filter($this->env, ($context["pluginCausesIssue"] ?? $this->getContext($context, "pluginCausesIssue")), "html", null, true);
                echo "</strong>.
                ";
            }
            // line 75
            echo "            </p>
            <table>
                ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($context["plugin"], "uninstallable", array()) && $this->getAttribute($context["plugin"], "activated", array()))) {
                    // line 78
                    echo "                    <tr ";
                    if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                        echo "style=\"background-color: #eeeeee\"";
                    }
                    echo ">
                        <td style=\"min-width:200px;\">
                            ";
                    // line 80
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "
                        </td>
                        <td>
                            ";
                    // line 83
                    echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "version", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["plugin"], "info", array(), "any", false, true), "version", array()), "")) : ("")), "html", null, true);
                    echo "
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                    // line 86
                    echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                    echo "&nonce=";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["deactivateNonce"] ?? $this->getContext($context, "deactivateNonce")), "html", null, true);
                    if ( !twig_test_empty(($context["deactivateIAmSuperUserSalt"] ?? $this->getContext($context, "deactivateIAmSuperUserSalt")))) {
                        echo "&i_am_super_user=";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["deactivateIAmSuperUserSalt"] ?? $this->getContext($context, "deactivateIAmSuperUserSalt")), "html", null, true);
                    }
                    echo "\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </table>

            ";
            // line 93
            $context["uninstalledPluginsFound"] = false;
            // line 94
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute($context["plugin"], "uninstallable", array()) &&  !$this->getAttribute($context["plugin"], "activated", array()))) {
                    // line 95
                    echo "                ";
                    $context["uninstalledPluginsFound"] = true;
                    // line 96
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "
            ";
            // line 98
            if (($context["uninstalledPluginsFound"] ?? $this->getContext($context, "uninstalledPluginsFound"))) {
                // line 99
                echo "
                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                    if (($this->getAttribute($context["plugin"], "uninstallable", array()) &&  !$this->getAttribute($context["plugin"], "activated", array()))) {
                        // line 107
                        echo "                        <tr ";
                        if ((0 == $this->getAttribute($context["loop"], "index", array()) % 2)) {
                            echo "style=\"background-color: #eeeeee\"";
                        }
                        echo ">
                            <td style=\"min-width:200px;\">
                                ";
                        // line 109
                        echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                        echo "
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                        // line 112
                        echo \Piwik\piwik_escape_filter($this->env, $context["pluginName"], "html", null, true);
                        echo "&nonce=";
                        echo \Piwik\piwik_escape_filter($this->env, ($context["uninstallNonce"] ?? $this->getContext($context, "uninstallNonce")), "html", null, true);
                        echo "\"
                                   target=\"_blank\" onclick=\"return confirm('";
                        // line 113
                        echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm", $context["pluginName"])), "js"), "html", null, true);
                        echo "')\">uninstall</a>
                            </td>
                        </tr>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                </table>
            ";
            }
            // line 119
            echo "
        ";
        } elseif (        // line 120
($context["isAnonymousUser"] ?? $this->getContext($context, "isAnonymousUser"))) {
            // line 121
            echo "
            <p>Please contact the system administrator, or <a href=\"?module=";
            // line 122
            echo \Piwik\piwik_escape_filter($this->env, ($context["loginModule"] ?? $this->getContext($context, "loginModule")), "html", null, true);
            echo "\">login to Piwik</a> to learn more.</p>

        ";
        } else {
            // line 125
            echo "            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:";
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, ($context["emailSuperUser"] ?? $this->getContext($context, "emailSuperUser")), "html", null, true);
            echo "?subject=";
            echo \Piwik\piwik_escape_filter($this->env, ("Fatal error in Piwik " . \Piwik\piwik_escape_filter($this->env, ($context["piwikVersion"] ?? $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "message", array()), "url"), "html", null, true);
            echo "%20in%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "file", array()), "url"), "html", null, true);
            echo "%20";
            echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["lastError"] ?? $this->getContext($context, "lastError")), "line", array()), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo \Piwik\piwik_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                to your system administrator.
            </p>
        ";
        }
        // line 131
        echo "

        ";
        // line 133
        if (( !($context["isAllowedToTroubleshootAsSuperUser"] ?? $this->getContext($context, "isAllowedToTroubleshootAsSuperUser")) &&  !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser")))) {
            // line 134
            echo "            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        ";
        }
        // line 140
        echo "

        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/safemode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 140,  316 => 134,  314 => 133,  310 => 131,  293 => 127,  289 => 125,  283 => 122,  280 => 121,  278 => 120,  275 => 119,  271 => 117,  257 => 113,  251 => 112,  245 => 109,  237 => 107,  226 => 106,  217 => 99,  215 => 98,  212 => 97,  205 => 96,  202 => 95,  196 => 94,  194 => 93,  190 => 91,  169 => 86,  163 => 83,  157 => 80,  149 => 78,  138 => 77,  134 => 75,  128 => 73,  126 => 72,  114 => 62,  112 => 61,  109 => 60,  91 => 53,  69 => 36,  64 => 34,  56 => 33,  53 => 32,  51 => 31,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        {% if isAllowedToTroubleshootAsSuperUser or not isAnonymousUser %}
            <p>
                The following error just broke Piwik{% if showVersion %} (v{{ piwikVersion }}){%  endif %}:
                <pre>{{ lastError.message }}</pre>
                in
                <pre>{{ lastError.file }} line {{ lastError.line }}</pre>
            </p>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Piwik to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@piwik.org?subject={{ 'Fatal error in Piwik ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                    to the Piwik team.
                </li>
            </ul>
            <hr/>

        {% endif %}

        {% if isAllowedToTroubleshootAsSuperUser or isSuperUser %}

            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. If you don't know which plugin is causing this error, we recommend to first disable any plugin not created by \"Piwik\" and not created by \"InnoCraft\".
                You can enable plugin again afterwards in the
                <a rel=\"noreferrer\" target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a>
                or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                {% if pluginCausesIssue %}
                    Based on the error message, the issue is probably caused by the plugin <strong>{{ pluginCausesIssue }}</strong>.
                {% endif %}
            </p>
            <table>
                {% for pluginName, plugin in plugins if plugin.uninstallable and plugin.activated %}
                    <tr {% if loop.index is divisibleby(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                        <td style=\"min-width:200px;\">
                            {{ pluginName }}
                        </td>
                        <td>
                            {{ plugin.info.version|default('') }}
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName={{ pluginName }}&nonce={{ deactivateNonce }}{% if deactivateIAmSuperUserSalt is not empty %}&i_am_super_user={{ deactivateIAmSuperUserSalt }}{% endif %}\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                {% endfor %}
            </table>

            {% set uninstalledPluginsFound = false %}
            {% for pluginName, plugin in plugins if plugin.uninstallable and not plugin.activated %}
                {% set uninstalledPluginsFound = true %}
            {% endfor %}

            {% if uninstalledPluginsFound %}

                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    {% for pluginName, plugin in plugins if plugin.uninstallable and not plugin.activated %}
                        <tr {% if loop.index is divisibleby(2) %}style=\"background-color: #eeeeee\"{% endif %}>
                            <td style=\"min-width:200px;\">
                                {{ pluginName }}
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName={{ pluginName }}&nonce={{ uninstallNonce }}\"
                                   target=\"_blank\" onclick=\"return confirm('{{ 'CorePluginsAdmin_UninstallConfirm'|translate(pluginName)|e('js') }}')\">uninstall</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            {% endif %}

        {% elseif isAnonymousUser %}

            <p>Please contact the system administrator, or <a href=\"?module={{ loginModule }}\">login to Piwik</a> to learn more.</p>

        {% else %}
            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:{{ emailSuperUser }}?subject={{ 'Fatal error in Piwik ' ~ piwikVersion|e('url') }}&body={{ lastError.message|e('url') }}%20in%20{{ lastError.file|e('url') }}%20{{ lastError.line|e('url') }}%20using%20PHP%20{{ constant('PHP_VERSION') }}\">error report</a>
                to your system administrator.
            </p>
        {% endif %}


        {% if not isAllowedToTroubleshootAsSuperUser and not isSuperUser %}
            <p>If you are Super User, but cannot login because of this error, you can still troubleshoot further. Follow these steps:
                <br/>1) open the config/config.ini.php file and look for the <code>salt</code> value under <code>[General]</code>.
                <br/>2) edit this current URL you are viewing and add the following text (replacing <code>salt_value_from_config</code> by the <code>salt</code> value from the config file):
                <br/><br/><code>index.php?i_am_super_user=salt_value_from_config&....</code>
            </p>
        {% endif %}


        </div>

    </body>
</html>", "@CorePluginsAdmin/safemode.twig", "/var/www/public/admin/piwik/plugins/CorePluginsAdmin/templates/safemode.twig");
    }
}
