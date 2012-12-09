<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $users = array(
            // username => password
            'damian' => 'damian1',
            'admin' => 'damian1',
        );

        if (!isset($users[$this->username])) {
            echo 'not set password';
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        }
        else if ($users[$this->username] !== $this->password) {
            echo 'password incorect';
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        }
        else 
        {
            $this->errorCode = self::ERROR_NONE;
            echo 'Ok';
        }
        return !$this->errorCode;
    }

}