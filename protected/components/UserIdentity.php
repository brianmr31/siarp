<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{       private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user= User::model()->findByAttributes(array('usr_user'=>$this->username,'pss_user'=>$this->password));
                if($user === null)
                {
                    $this->errorCode= self::ERROR_UNKNOWN_IDENTITY;
                }
                elseif($user->pss_user !==$this->password)
                {
                    $this->errorCode= self::ERROR_PASSWORD_INVALID;
                }
                else
                {
                    $this->_id = $user->iduser;
                    $this->setState('username', $user->usr_user);
                    $this->setState('id', $user->iduser);
                    $hak = HakAccess::model()->findByAttributes(array('idhak_access'=>$user->hak_access_idhak_access));
                    $this->setState('name', $hak->nm_hak_access);
                    $this->errorCode= self::ERROR_NONE;
                }
		return !$this->errorCode;
	}
}