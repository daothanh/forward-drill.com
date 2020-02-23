<?php
namespace Modules\User\Auth;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;

class AccessTokenGuard implements Guard
{
    use GuardHelpers;
    private $inputKey = '';
    private $storageKey = '';
    private $request;
    public function __construct(UserProvider $provider, $config)
    {
        $this->provider = $provider;
        $this->request = app('request');
        // key to check in request
        $this->inputKey = isset($config['input_key']) ? $config['input_key'] : 'access_token';
        // key to check in database
        $this->storageKey = isset($config['storage_key']) ? $config['storage_key'] : 'access_token';
    }
    public function user()
    {
        if (!is_null($this->user)) {
            return $this->user;
        }
        $user = null;
        // retrieve via token
        $token = $this->getTokenForRequest();
        if (!empty($token)) {
            // the token was found, how you want to pass?
            $user = $this->provider->retrieveByToken($this->storageKey, $token);
        }
        return $this->user = $user;
    }
    /**
     * Get the token for the current request.
     * @return string
     */
    public function getTokenForRequest()
    {
        $token = $this->request->query($this->inputKey);
        if (empty($token)) {
            $token = $this->request->input($this->inputKey);
        }
        if (empty($token)) {
            $token = $this->request->bearerToken();
        }
        return $token;
    }
    /**
     * Validate a user's credentials.
     *
     * @param  array $credentials
     *
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        if (empty($credentials[$this->inputKey])) {
            return false;
        }
        $credentials = [ $this->storageKey => $credentials[$this->inputKey] ];
        if ($this->provider->retrieveByCredentials($credentials)) {
            return true;
        }
        return false;
    }
}
