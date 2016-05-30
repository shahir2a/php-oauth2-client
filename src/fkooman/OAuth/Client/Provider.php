<?php
/**
 * Copyright 2016 François Kooman <fkooman@tuxed.net>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace fkooman\OAuth\Client;

class Provider
{
    /** @var string */
    private $id;

    /** @var string */
    private $secret;

    /** @var string */
    private $authorizationEndpoint;

    /** @var string */
    private $tokenEndpoint;

    public function __construct($id, $secret, $authorizationEndpoint, $tokenEndpoint)
    {
        $this->id = $id;
        $this->secret = $secret;
        $this->authorizationEndpoint = $authorizationEndpoint;
        $this->tokenEndpoint = $tokenEndpoint;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function getAuthorizationEndpoint()
    {
        return $this->authorizationEndpoint;
    }

    public function getTokenEndpoint()
    {
        return $this->tokenEndpoint;
    }
}