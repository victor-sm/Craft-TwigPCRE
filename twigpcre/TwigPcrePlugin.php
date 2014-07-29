<?php
/**
 * @package   Twig PCRE
 * @author    Victor In.
 * @copyright Copyright 2014
 * @link      https://github.com/victor-in/Craft-TwigPCRE
 * @license   MIT
 */
namespace Craft;

class TwigPcrePlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Twig PCRE Filters');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Victor In.';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigpcre.twigextensions.TwigPcreTwigExtension');
        return new TwigPcreTwigExtension();
    }
}
