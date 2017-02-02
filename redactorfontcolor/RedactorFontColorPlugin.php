<?php
namespace Craft;

class RedactorFontColorPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('RedactorFontColorPlugin');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'rattikarl';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/rattikarl/redactorfontcolor-craft';
    }
    function init()
    {
        craft()->templates->includeJsResource('redactorfontcolor/fontcolor.js');
    }
}
