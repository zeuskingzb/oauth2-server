<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Entities;

use Lcobucci\JWT\Token;
use League\OAuth2\Server\CryptKey;

interface AccessTokenEntityInterface extends TokenInterface
{
    /**
     * Generate a string representation from the access token
     *
     * @param CryptKey $privateKey
     *
     * @return string
     */
    public function convertToAccessToken(CryptKey $privateKey);
}
