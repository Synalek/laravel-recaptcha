<?php

namespace Synalek\Recaptcha;

use Google\Recaptcha;

class Captcha
{
    /**
     * Undocumented function
     */
    public $secret;

    /**
     * Undocumented function
     */
    public $sitekey;

    /**
     * Undocumented function
     */
    public $options = [];

    /**
     * Undocumented function
     *
     * @param string $secret
     * @param string $sitekey
     * @param array $options
     */
    public function __construct(string $secret, string $sitekey, array $options)
    {
        $this->secret = $secret;

        $this->sitekey = $sitekey;

        $this->options = $options;
    }
}
